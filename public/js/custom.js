new WOW().init();
$(function(){
    $('.modal-trigger').leanModal();
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
            $('.login-modal .modal-content .register-form, .login-modal .modal-content h5, .login-modal .modal-content h6').fadeOut();
            $('.login-modal .modal-content .register-btn-container, .login-modal .modal-content .login-form').fadeIn();
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
                $('.login-modal .modal-content').append('<h5 class="col s12">Your Fest ID is <span class="green-text">'+ data.festid +'</span></h5><h6 class="col s12">Kindly keep it safe for future references....</h6>');
            } 
            else if(status == 'error'){
                $('.register-form button').html('Register').fadeIn();
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
    
    /*$(".register_form").validate({
        rules: {
           password: { 
                required: true,
           }, 
           cnfPassword: { 
                equalTo: "#password",
           }
        }
    });
        
    $('.register-form .input-field').on('change','#confirm_password',function(){
        var cnf = $(this);
        var pwd = $('#password').html();
        var cnf_pwd = cnf.html();
        if(pwd != cnf_pwd){
            cnf.addClass('invalid');
        }
        else{
            cnf.removeClass('invalid');
        }
    });*/
    
    $(".main-nav a").on('click',function(){
        var menu = $(this).attr('id');
        
        $('.main-nav').find('a.active').removeClass('active');
        $(this).addClass('active');
        
        if(menu == "home"){
            $('.club-nav').hide();
            $('.about, h1.header, .events, .contact').fadeOut(500);
            $('.'+menu).fadeIn();
        }
        else if(menu == "about"){
            $('.club-nav').hide();
            $('.home, .events, .contact').fadeOut(500);
            $('h1.header').html(menu).fadeIn();
            $('.'+menu).fadeIn();
        }
        else if(menu == "events"){
            $('.home, .about, .contact').fadeOut(500);
            $('h1.header').html(menu).fadeIn();
            $('.'+menu).fadeIn();
        }
        else if(menu == "contact"){
            $('.home, .about, .events').fadeOut(500);
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
                $('.events').find('.event-desc-container.active').fadeOut(200).removeClass('active');
                $('#dance').addClass('active').fadeIn();
                $('[data-club-name = "dance"]').addClass('active');
            }
            else if(genre == "technical"){
                $('.events').find('.event-desc-container.active').fadeOut(200).removeClass('active');
                $('#programming').addClass('active').fadeIn();
                $('[data-club-name = "programming"]').addClass('active');
            }
        },500);
    });

    $('.events a.close-btn').on('click',function(){
        $('.main-btn-container').delay("fast").fadeIn();
        $('.nav-option').fadeOut(500);
        $('.events').find('.event-desc-container.active').fadeOut(200).removeClass('active');
        $(this).fadeOut();
    });

    $(".main-container .club-nav .nav-option").on('click', function(){
        clubName = $(this).attr('data-club-name');
        $('.club-nav').find('div.nav-option.active').removeClass('active');
        $(this).addClass('active');
        $('.events').find('.event-desc-container.active').fadeOut(200).removeClass('active');
        $('.events').find('#'+clubName).addClass('active').fadeIn(300);
    });

    $(".event-desc-container .event-name-tabs a").on('click', function(){
        eventName = $(this).attr('href');
        $('.event-desc-container .event-name-tabs').find('a.active').removeClass('active');
        $(this).addClass('active');
        $('.event-desc-container').find('.event-desc.active').fadeOut(200).removeClass('active');
        $('.event-desc-container').find(eventName).addClass('active').fadeIn(300);
    });

})
