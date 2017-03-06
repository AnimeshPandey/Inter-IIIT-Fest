new WOW().init();
$(function(){
    $('.modal-trigger').leanModal();
    $('select').material_select();
    $('.datepicker').pickadate({
        selectMonths: true, // Creates a dropdown to control month
        selectYears: 50,
        max: new Date(),
        format: 'yyyy-mm-dd'
    });
    $('.dropdown-button').dropdown();
    var genre, clubName, eventName;
    
    $('.register-btn-container').on('click','a.custom',function(){
        $('.login-modal .modal-content .register-btn-container, .login-modal .modal-content .login-form').fadeOut();
        $('.main-container .login-modal').removeClass('m6 offset-m3').addClass('m4 offset-m4');
        $('.login-modal .modal-content h4').html('Register').fadeIn();
        $('.login-modal .modal-content .register-form').fadeIn();
    });
    
    $(document).on('click','.lean-overlay',function(){
        setTimeout(function(){
            $('.main-container .login-modal').removeClass('m4 offset-m4').addClass('m6 offset-m3');
            $('.login-modal .modal-content h4').html('Register / Login').fadeIn();
            $('.login-modal .modal-content .register-form, .login-modal .modal-content h5, .login-modal .modal-content h6, .login-modal .modal-content button').fadeOut();
            $('.login-modal .modal-content .register-btn-container, .login-modal .modal-content .login-form').fadeIn();

            $('.group-modal h4').html('Group Event').fadeIn();
            $('.group-modal .group-details, .group-modal .affirm-group').fadeOut();
            $('.group-modal .group-options').fadeIn();

        },1000);
    });
    
    $('.register-form').on('submit','.register_form',function(e){
        var reg_form = $(this);

        $('.register-form button').html('Submitting.....').fadeIn();
        
        e.preventDefault(); 
        $.post('/register',reg_form.serialize(),function(data,status){
            if(status == "success"){
                $('.register-form button').html('Register').fadeIn();
                $('.login-modal .modal-content .register-form').fadeOut();
                $('.login-modal .modal-content h4').html('Signup Successful').fadeIn('slow');
                $('.login-modal .modal-content').append('<h5 class="col s12">Your Fest ID is <span class="green-text">'+ data.festid +'</span></h5><h6 class="col s12">Kindly keep it safe for future references....</h6><button class="proceed btn-flat col s12 m6 offset-m3">Proceed</button>');
                $(document).off('click','.lean-overlay');
                $('.login-modal .details-form #festid').val(data.festid);
                $('.login-modal .details-form #name').val(data.name);
            } 
            else if(status == 'error'){
                $('.register-form button').html('Register').fadeIn();
                alert('Server error!!');
            }
        });
    });

    $('.login-modal .modal-content').on('click','button.proceed',function(){
        $('.login-modal .modal-content h4').html('Details').fadeIn();
        $('.main-container .login-modal').removeClass('m4 offset-m4').addClass('m6 offset-m3');
        $('.login-modal .modal-content .register-form, .login-modal .modal-content h5, .login-modal .modal-content h6, .login-modal .modal-content button.proceed').fadeOut();
        $('.login-modal .details-form').fadeIn();
    });

    var iiitswitch = $('#iiitswitch');
    iiitswitch.on('change', function(){
        if(iiitswitch.is(':checked')){
            $('#college_other').hide();
            $('#college_iiit').show();
            $('.login-modal .details-form #iiitflag').val('Yes');
        }
        else{
            $('#college_iiit').hide();
            $('#college_other').show();   
            $('.login-modal .details-form #iiitflag').val('No');
        }
    });

    $('.details-form').on('submit','.details_form',function(e){
        var det_form = $(this);

        $('.details-form button').html('Submitting.....').fadeIn();
        
        e.preventDefault(); 
        $.post('/register/details',det_form.serialize(),function(data,status){
            if(status == "success"){
                if(data.success){
                    $('.details-form button').html('Submit').fadeIn();
                    $('.login-modal .modal-content .details-form').fadeOut();
                    $('.login-modal .modal-content h4').html('Details Updated').fadeIn('slow');
                    setTimeout(function(){
                        $('#login').closeModal();
                    }, 2000);
                }
                else{
                    alert('Some Error has occurred.');   
                }
            } 
            else if(status == 'error'){
                $('.details-form button').html('Submit').fadeIn();
                alert('Server error!!');
            }
        });
    });

    $('.login-form').on('submit','.login_form',function(e){
        var reg_form = $(this);

        $('.login-form button').html('Submitting.....').fadeIn();
        
        e.preventDefault(); 
        $.post('/login',reg_form.serialize(),function(data,status){
            if(status == "success"){
                if(data.pass == 1)
                    window.location.reload();
                else{
                    $('.login-modal .modal-content h6').html('Login Failed!! Check Your Credentials').fadeIn();
                    $('.login-form button').html('Login').fadeIn();
                    setTimeout(function(){
                        $('.login-modal .modal-content h6').fadeOut();
                    },3000);
                }
            } 
            else if(status == 'error'){
                alert('Server error!!');
            }
        });
    });
    
    
    $(".main-nav a").on('click',function(){
        var menu = $(this).attr('id');
        
        $('.main-nav').find('a.active').removeClass('active');
        $(this).addClass('active');
        
        if(menu == "home"){
            $('.club-nav').hide();
            $('.about, h1.header, .events, .contact').fadeOut();
            $('.'+menu).fadeIn();
        }
        else if(menu == "about"){
            $('.club-nav').hide();
            $('.home, .events, .contact').fadeOut();
            $('h1.header').html(menu).fadeIn();
            $('.'+menu).fadeIn();
        }
        else if(menu == "events"){
            $('.home, .about, .contact').fadeOut();
            $('h1.header').html(menu).fadeIn();
            $('.'+menu).fadeIn();
        }
        else if(menu == "contact"){
            $('.home, .about, .events').fadeOut();
            $('h1.header').html(menu).fadeIn();
            $('.'+menu).fadeIn();
        }
    });

    $('.main-container .events a').on('click',function(){
        genre = $(this).attr('data-genre');
        $('.main-btn-container').fadeOut();
        $('.club-nav').show();
        $('.nav-option.'+genre).fadeIn();
        $('.events a.close-btn').fadeIn();
        setTimeout(function(){
            if(genre == "cultural"){
                $('.events').find('.event-desc-container.active').fadeOut().removeClass('active');
                $('#dance').addClass('active').fadeIn();
                $('[data-club-name = "dance"]').addClass('active');
            }
            else if(genre == "technical"){
                $('.events').find('.event-desc-container.active').fadeOut().removeClass('active');
                $('#programming').addClass('active').fadeIn();
                $('[data-club-name = "programming"]').addClass('active');
            }
        },500);
    });

    $('.events a.close-btn').on('click',function(){
        $('.main-btn-container').delay("fast").fadeIn();
        $('.nav-option').fadeOut();
        $('.events').find('.event-desc-container.active').fadeOut().removeClass('active');
        $(this).fadeOut();
    });

    $(".main-container .club-nav .nav-option").on('click', function(){
        clubName = $(this).attr('data-club-name');
        $('.club-nav').find('div.nav-option.active').removeClass('active');
        $(this).addClass('active');

        $('.event-desc-container .event-name-tabs').find('a.active').removeClass('active');
        $('.events #'+clubName+' .event-name-tabs a:first-child').addClass('active');
        var event = $('.events #'+clubName+' .event-name-tabs a:first-child').attr('href');
        
        $('.event-desc-container').find('.event-desc.active').fadeOut().removeClass('active');
        $('.event-desc-container').find(event).addClass('active').fadeIn();

        $('.events').find('.event-desc-container.active').fadeOut().removeClass('active');
        $('.events').find('#'+clubName).addClass('active').fadeIn();
    });

    $(".event-desc-container .event-name-tabs a").on('click', function(){
        eventName = $(this).attr('href');
        $('.event-desc-container .event-name-tabs').find('a.active').removeClass('active');
        $(this).addClass('active');
        $('.event-desc-container').find('.event-desc.active').fadeOut().removeClass('active');
        $('.event-desc-container').find(eventName).addClass('active').fadeIn();
    });

    $(".events .event-desc").on('click','button.register', function(){
        var event_btn = $(this);
        var event_id = event_btn.attr("data-event-id");
        var event_type = event_btn.attr("data-event-type");
        var csrf_token = $('meta[name="csrf-token"]').attr('content');

        if(event_type == 'single'){
            event_btn.html('Registering....');
            var data = {'_token' : csrf_token, 'event' : event_id};
            
            $.post("/register/event/single", data, function(result,status){
                if(status == "success"){
                    if(result.registered){
                        event_btn.html('Registered').prop('disabled', true).attr("data-registered",1);
                    }
                    else{
                        alert("Error Registering");
                    }
                }
                else if(status == "error"){
                    alert("Server Error, Contact web team for assistance.");
                    event_btn.html('Register');
                }
            });
        }
        else if(event_type == 'group'){
            $('#modal-'+event_id).openModal();
        }
    });

    $('.events .event-desc .group-modal').on('submit','.register_group',function(e){
        var btn = $(this).find('button');
        var event_id = btn.attr('data-event-id');
        var data = $(this).serialize() + '&event_id='+event_id;

        btn.html('Registering....');
        e.preventDefault();
        $.post("register/event/group", data, function(result,status){
            if(status == "success"){
                if(result.flag == "OK"){
                    btn.html('Registered').prop('disabled', true).attr('data-registered',1);
                    $('[data-event-id="'+event_id+'"]').html('Registered').prop('disabled',true).attr('data-registered',1);
                    setTimeout(function(){
                        $('#modal-'+event_id).closeModal();
                    },1000);
                }
                else if(result.flag == "duplicate"){

                }
                else{
                    alert('Some Error has occurred!! Kindly report this to the web team.');
                }
            }
            else if(status == "error"){
                alert("Server Error, Contact web team for assistance.");
                btn.html('Register');
            }
        });
    });

    $('.events .event-desc .group-modal').on('submit','.group_details',function(e){
        var data = $(this).serialize();

        e.preventDefault();
        $.post("register/group", data, function(result,status){
            if(status == "success"){
                if(result.created){
                    $('.events .event-desc .group-modal .group-details').fadeOut();
                    $('.events .event-desc .group-modal .modal-content').append('<div class="affirm-group col s12"><h5 class="col s12">Your Group ID is <span class="green-text">'+result.groupid+'</span></h5><h6 class="col s12">Use it to register for group events.</h6></div>');            
                }
                else{
                    alert('Some Error has occurred!!');
                }
            }
            else if(status == "error"){
                alert("Server Error, Contact web team for assistance.");
            }
        });
    });

    $('.events .event-desc .group-modal').on('click','button.create-group',function(){
        $('.events .event-desc .group-modal h4').html('Group Details').fadeIn();
        $('.events .event-desc .group-modal .group-options').fadeOut();
        setTimeout(function(){
            $('.events .event-desc .group-modal .group-details').fadeIn('slow');
        },500);
    });

})
