
<!doctype html>
<html lang="en" class="no-js">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="https://fonts.googleapis.com/css?family=Pacifico|Josefin+Sans|Raleway:200,400" rel="stylesheet">
        <link rel="stylesheet" href="/fonts/font-awesome-4.6.3/css/font-awesome.min.css">
        <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css"> -->
        <link rel="shortcut icon" href="/img/IIITDMJ%20LOGO.png">
        <link rel="stylesheet" href="/css/mario.css"/>
        <link rel="stylesheet" href="/css/materialize.min.css">
        <link rel="stylesheet" href="/css/animate.css">
        <link rel="stylesheet" href="/css/style.css">

        <title>Inter IIIT Cultural &amp; Technical Fest</title>
    </head>

    <body>

        <div class="main-container row">
            <div class="main-nav col s12 m8 offset-m2 wow fadeIn" data-wow-duration="0.75s" data-wow-delay="4s">
                <a class="col s12 m2" id="home">Home</a>
                <a class="col s12 m2" id="about">About</a>
                <a class="col s12 m2" id="events">Events</a>
                <a class="col s12 m2" id="mega_events">Mega Events</a>
                <a class="col s12 m2" id="team">Team</a>
                <a class="col s12 m2" id="contact">Contact</a>
            </div>
            @if(Auth::check())
                <div class="login-btn col 12 m2">
                    <a class="btn-flat col 12 modal-trigger" href="#user">{{ Auth::user()->fest_id }}</a>
                </div>
                <div id="user-modal modal" id="user">
                    

                </div>
            @else
                <div class="login-btn col 12 m2">
                    <a class="btn-flat col 12 modal-trigger" href="#login">Login / Register</a>
                </div>
                <div id="login" class="login-modal modal col s12 m6 offset-m3">
                    <div class="modal-content row">
                        <h4 class="col s12">Register / Login</h4>
                        <div class="col s6 register-btn-container">
                            <div class="col s10 offset-s1">
                                <a href="/auth/google" class="google col s12 btn-flat"><i class="fa fa-google"></i> Signup with Google</a>
                                <a href="/auth/facebook" class="fb col s12 btn-flat"><i class="fa fa-facebook"></i> Signup with Facebook</a>
                                <a href="#" class="custom col s12 btn-flat"><i class="fa fa-user"></i>Register Now</a>
                            </div>
                        </div>
                        <div class="col s6 login-form">
                            <form class="login_form">
                                <h6 class="col s12 red-text"></h6>
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <div class="input-field col s12">
                                    <input placeholder="Email" name="email" type="email" class="validate" required>
                                </div>
                                <div class="input-field col s12">
                                    <input placeholder="Password" name="password" type="password" class="validate" required>
                                </div>
                                <div class="input-field col s12">
                                    <button class="btn-flat col s8 offset-s2">Login</button>
                                </div>
                            </form>
                        </div>
                        <div class="col s12 register-form">
                            <form class="register_form">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <div class="input-field col s12">
                                    <input placeholder="Email" name="email" type="email" class="validate" required>
                                </div>
                                <div class="input-field col s12">
                                    <input placeholder="Name" name="name" type="text" class="validate" required>
                                </div>
                                <div class="input-field col s12">
                                    <input placeholder="Password" id="password" name="password" type="password" class="validate" required>
                                </div>
                                <div class="input-field col s12">
                                    <input placeholder="Confirm Password" id="cnfPassword" name="cnfPassword" type="password" class="validate" required>
                                </div>
                                <div class="input-field col s12">
                                    <button class="btn-flat col s8 offset-s2">Register</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            @endif
<!--
            <footer class="col s12">
                <a class="col s12 m1 offset-m4" id="sponsors">Sponsors</a>
                <a class="col s12 m1" id="schedule">Schedule</a>
                <a class="col s12 m1" href="#" target="_blank">Teaser</a>
                <a class="col s12 m1" id="web">Web Team</a>
            </footer>
-->
            <a href="https://www.facebook.com/iiitdm.jbp/" target="_blank" id="fb"><i class="fa fa-facebook"></i></a>
            <section class="home mask row">
                <section class="col s12 m10 head valign-wrapper">
                    <div class="col s4 m5 logo valign" style="margin-top:10px;">
                    <img src="/img/IIITDMJ%20LOGO.png">
                    </div>
                    <div class="col s8 m7 valign">
                        <h1 class="col s12 left-align heading">IIITDM Jabalpur</h1>
                    </div>
                </section>
                <section class="main col s12">
                    <h4 class="presents col s12 m2 offset-m5 wow zoomIn " data-wow-duration="0.75s" data-wow-delay="0.5s">Presents</h4>
                    <h3 class="col s12 m12 center-align wow fadeIn" data-wow-duration="0.5s" data-wow-delay="1.5s">Inter IIIT Cultural &amp; Techno Fest &#39;17</h3>
                    <h5 class="dates col s12 m3 offset-m7 wow fadeIn" data-wow-duration="0.5s" data-wow-delay="1.75s">23<sup>rd</sup> - 26<sup>th</sup>  March</h5>
                    <div class="partner col s12">
                        <h5 class="col s12 wow zoomIn" data-wow-duration="0.75s" data-wow-delay="2.5s">In association with</h5>
                        <img src="/img/coollogo.png" class="wow zoomIn" data-wow-duration="1s" data-wow-delay="3s">
                    </div>
                    <div class="links">
                        <a class="link-card wow fadeIn" data-wow-duration="0.75s" data-wow-delay="4s" href="/IIITDMJ_Fest_Brochure.pdf" target="_blank">
                            <img class="link-icon" src="/img/brochure.png">
                            <h5 class="link-text">Brochure</h5>
                        </a>
                        <a class="link-card wow fadeIn" data-wow-duration="0.75s" data-wow-delay="4s" href="/Inter_IIIT_Rule_Book.pdf" target="_blank">
                            <img class="link-icon" src="/img/book.png">
                            <h5 class="link-text">Rule Book</h5>
                        </a>
                    </div>
                </section>
            </section>
            <h1 class="header col s10 offset-s1 m2 offset-m5">About</h1>
            <section class="about container col">
                <p class="col s12">Indian Institute of Information Technology, Design and Manufacturing (IIITDM), Jabalpur is an institute of national importance is one of the premier emerging institutes of India. It shall be a Global Centre of excellence in engineering education and research by building itself as an Enterprise of Knowledge. It has been a launching pad for their journey of self-development and hence begins their participation in extra-curricular activities in campus and beyond.<br><br>
The Inter IIIT Techno-Cultural Fest, being launched this year, is an amalgam of two of inimitable fests of IIITDMJ, namely TARANG &amp; ABHIKALPAN. The fest will come as a vast pool of awe inspiring events enabling participants from all over India to promulgate their talent and explore their passion in the field of culture as well as technology.
</p>
            </section>
            <section class="club-nav nav-left">
                <div class="nav-option cultural" data-club-name="dance">
                    <img class="col" src="/img/icons/dance.png">
                    <h5 class="col nav-label">Dance</h5>
                </div>
                <div class="nav-option cultural" data-club-name="literary">
                    <img class="col" src="/img/icons/literary.png">
                    <h5 class="col nav-label">Literary</h5>
                </div>
                <div class="nav-option cultural" data-club-name="music">
                    <img class="col" src="/img/icons/music.png">
                    <h5 class="col nav-label">Music</h5>
                </div>
                <div class="nav-option technical" data-club-name="programming">
                    <img class="col" src="/img/icons/prog.png">
                    <h5 class="col nav-label">Programming</h5>
                </div>
                <div class="nav-option technical" data-club-name="astronomy">
                    <img class="col" src="/img/icons/astro.png">
                    <h5 class="col nav-label">Astronomy</h5>
                </div>
                <div class="nav-option technical" data-club-name="electronics">
                    <img class="col" src="/img/icons/electronics.png">
                    <h5 class="col nav-label">Electronics</h5>
                </div>
                <div class="nav-option technical" data-club-name="fmc">
                    <img class="col" src="/img/icons/fmc.png">
                    <h5 class="col nav-label">Film Making</h5>
                </div>
                <div class="nav-option technical" data-club-name="management">
                    <img class="col" src="/img/icons/management.png">
                    <h5 class="col nav-label">Management</h5>
                </div>
            </section>
            <section class="club-nav nav-right">
                <div class="nav-option cultural" data-club-name="drama" style="margin-top:200%">
                    <h5 class="col nav-label">Dramatics</h5>
                    <img class="col" src="/img/icons/drama.png">
                </div>
                <div class="nav-option cultural" data-club-name="arts">
                    <h5 class="col nav-label">Arts</h5>
                    <img class="col" src="/img/icons/arts.png">
                </div>
                <div class="nav-option technical" data-club-name="robotics" style="margin-top:100%">
                    <img class="col" src="/img/icons/robo.png">
                    <h5 class="col nav-label">Robotics</h5>
                </div>
                <div class="nav-option technical" data-club-name="automotive">
                    <img class="col" src="/img/icons/mechanical.png">
                    <h5 class="col nav-label">Automotive</h5>
                </div>
                <div class="nav-option technical" data-club-name="photography">
                    <img class="col" src="/img/icons/photography.png">
                    <h5 class="col nav-label">Photography</h5>
                </div>
                <div class="nav-option technical" data-club-name="cad">
                    <img class="col" src="/img/icons/cad.png">
                    <h5 class="col nav-label">CAD</h5>
                </div>
            </section>
            <section class="events container col s12 m10 offset-m1 l10 offset-l1">
                <div class="main-btn-container col s3 offset-s2 cultural">
                    <div class="blur-mask col s12"></div>
                    <a class="main-btn col s12 cultural" data-genre="cultural">Cultural</a>
                </div>
                <div class="main-btn-container col s3 offset-s2 tech">
                    <div class="blur-mask col s12"></div>
                    <a class="main-btn col s12 technical" data-genre="technical">Technical</a>
                </div>
                <a class="close-btn col green-text">X</a>
                <div class="event-desc-container col s12 m10 offset-m1" id="dance">
                    <div class="col s12 m3 event-name-tabs">
                        <a href="#dancellennium" class="col s12 tab active">Dancellennium</a>
                        <a href="#fof" class="col s12 tab">Feet-of-Fire</a>
                        <a href="#carinosa" class="col s12 tab">Carinosa</a>
                    </div>
                    <div class="col s12 m9 event-desc active" id="dancellennium">
                        <h5 class="col s4"></h5>
                        <p class="col s12">
                        The inter-collegiate group dance competition is a platform for the best dancing troops across India to flaunt their hypnotic moves. The competition invites all dance forms including hip hop, Jazz, salsa,   Contemporary, folk dances.
                        </p>
<!--
                        <div class="btn-container col s12 m9">
                            <button class="col s6 m5 btn">Register</button>
                            <button class="col s6 m5 offset-m2 btn">View Package</button>
                        </div>
-->
                    </div>
                    <div class="col s12 m9 event-desc" id="fof">
                        <h5 class="col s6">Solo Dance Competition</h5>
                        <p class="col s12">
                            A daring platform to showcase your moves and compete against the best dancers in the country, master the skill of expression, energy and emotions.
                        </p>
                    </div>
                    <div class="col s12 m9 event-desc" id="carinosa">
                        <h5 class="col s6">Duet Dance Competition</h5>
                        <p class="col s12">
                            Come into an alliance with your partner if you can groove to the rhythm of your comrade and showcase your grace. You rely on physical skills and chemistry, but up until now, that chemistry’s been pretty heterosexual. Do so with all the chemistry in the world put in 2 souls.
                        </p>
                    </div>
                </div>
                <div class="event-desc-container col s12 m10 offset-m1" id="arts">
                    <div class="col s12 m3 event-name-tabs">
                        <a href="#shirt" class="col s12 tab active">T-Shirt Painting</a>
                        <a href="#waste" class="col s12 tab">Best out of Waste</a>
                        <a href="#poster" class="col s12 tab">Poster Making</a>
                        <a href="#paper" class="col s12 tab">Paper Cutting</a>
                        <a href="#doodling" class="col s12 tab">Doodling</a>
                        <a href="#rangoli" class="col s12 tab">Rangoli</a>
                    </div>
                    <div class="col s12 m9 event-desc active" id="shirt">
                        <h5 class="col s4"></h5>
                        <p class="col s12">
                        Let the colors flow, designs show and flash your imagination bright. Have you ever felt like designing your own clothes? Well here is your chance, don&#39;t let it go. Participate in Tshirt painting and who knows what you might end up with?
                        </p>
                    </div>
                    <div class="col s12 m9 event-desc" id="waste">
                        <h5 class="col s4"></h5>
                        <p class="col s12">
                            There is a lot of stuff that we often throw out thinking it is useless, well it isn&#39;t. Here is your chance to steal the show with all the waste  you throw and take prizes away for sure,Participate in best out of waste and show us your creativity.
                        </p>
                    </div>
                    <div class="col s12 m9 event-desc" id="poster">
                        <h5 class="col s4"></h5>
                        <p class="col s12">
                            "A picture speaks more than a thousand words". Posters are the best way to describe a particular situation or circumstances in a minimalist manner . Each poster is unique in its own accord. So let the horses of your imagination run loose and participate in the poster making competition.
                        </p>
                    </div>
                    <div class="col s12 m9 event-desc" id="paper">
                        <h5 class="col s4"></h5>
                        <p class="col s12">
                            We have two hands, two eyes and 1 brain. They main purpose of these senses is to create. Create something unique with the materials provided and stand a chance to win awesome prizes. Paper is  simple yet powerful thing,so use this power bestowed on you and create!
                        </p>
                    </div>
                    <div class="col s12 m9 event-desc" id="doodling">
                        <h5 class="col s4"></h5>
                        <p class="col s12">
                            Let your thoughts flow on paper and doodle all you want, all you like, all you can. It's easy and fun,and surely it's something we all do in class, So why not take it to the next level? And there are prizes for grabs too!  So why wait, just participate!
                        </p>
                    </div>
                    <div class="col s12 m9 event-desc" id="rangoli">
                        <h5 class="col s4"></h5>
                        <p class="col s12">
                            Traditional Indian art of Rangoli is a custom in our country since ages. It's the first form of art that most of us come across since our childhood. Festivals, events are all lightened up by the Rangolis. As we say, no event is complete without a rangoli, so let the freak flag fly and create an art takes everybody's breath away. Participate in rangoli and show us what you got!
                        </p>
                    </div>
                </div>
                <div class="event-desc-container col s12 m10 offset-m1" id="drama">
                    <div class="col s12 m3 event-name-tabs">
                        <a href="#monoact" class="col s12 tab active">Monoact</a>
                        <a href="#nukkad" class="col s12 tab">Nukkad</a>
                        <a href="#oneact" class="col s12 tab">One-Act</a>
                    </div>
                    <div class="col s12 m9 event-desc active" id="monoact">
                        <h5 class="col s4"></h5>
                        <p class="col s12">
                        This is one man show . So pour your emotions and let the actor inside you cone out and say it all to the audience.
                        </p>
                    </div>
                    <div class="col s12 m9 event-desc" id="nukkad">
                        <h5 class="col s4"></h5>
                        <p class="col s12">
                            Get up raise your voice and make the crowd think. Come and showcase the creativity in you against the odd of not having the stage set. There are many pressing issues that needs to be addressed, use the art of entertainment and convey the message to the community through this street play event.
                        </p>
                    </div>
                    <div class="col s12 m9 event-desc" id="oneact">
                        <h5 class="col s4"></h5>
                        <p class="col s12">
                            We all have a story to tell, the stage is set and ready to see you showcasing the grace and fineness of your acting skills in the stage play event of this Inter IIIT Techno-Cultural Festival.
                        </p>
                    </div>
                </div>
                <div class="event-desc-container col s12 m10 offset-m1" id="music">
                    <div class="col s12 m3 event-name-tabs">
                        <a href="#solo" class="col s12 tab active">Solo Singing</a>
                        <a href="#duet" class="col s12 tab">Duet Singing</a>
                        <a href="#unplug" class="col s12 tab">Unplugged</a>
                        <a href="#instrumental" class="col s12 tab">Solo Instrumental</a>
                    </div>
                    <div class="col s12 m9 event-desc active" id="solo">
                        <h5 class="col s4"></h5>
                        <p class="col s12">
                        Get ready to get mesmerized by the whimsical performances by the singing sensations of the country in the first ever Inter IIIT Techno-Cultural Festival. This will surely take you to the magical world of music.
                        </p>
                    </div>
                    <div class="col s12 m9 event-desc" id="duet">
                        <h5 class="col s4"></h5>
                        <p class="col s12">
                            The audience will surely be enthralled by the nightingale volices of the duo.This event will portray plethora of music ranging from Sufi to Rock and Indian Classical to Folk. So Gear up to showcase your talent and set the stage on fire.
                        </p>
                    </div>
                    <div class="col s12 m9 event-desc" id="unplug">
                        <h5 class="col s4"></h5>
                        <p class="col s12">
                            The participants will surely blow your mind. It is a platform where the bands play acoustic instruments to fascinate the audience with their amusing performances.
                        </p>
                    </div>
                    <div class="col s12 m9 event-desc" id="instrumental">
                        <h5 class="col s4"></h5>
                        <p class="col s12">
                            In music, an instrumental solo piece is a composition played by the performer. So get ready for some heart touching performances by the young and talented youth of the country.
                        </p>
                    </div>
                </div>
                <div class="event-desc-container col s12 m10 offset-m1" id="literary">
                    <div class="col s12 m3 event-name-tabs">
                        <a href="#jam" class="col s12 tab active">JAM</a>
                        <a href="#spell" class="col s12 tab">Spell Bee</a>
                        <a href="#debate" class="col s12 tab">Debate</a>
                        <a href="#writing" class="col s12 tab">Creative Writing</a>
                        <a href="#gd" class="col s12 tab">Group Discussion</a>
                        <a href="#extemp" class="col s12 tab">Extempore</a>
                    </div>
                    <div class="col s12 m9 event-desc active" id="spell">
                        <h5 class="col s4"></h5>
                        <p class="col s12">
                        Encounter the unyielding spirit of game!!
                        </p>
                    </div>
                    <div class="col s12 m9 event-desc" id="debate">
                        <h5 class="col s4"></h5>
                        <p class="col s12">
                        Cogitate Expound Debate.This event is a  contest of argumentation between two teams or individuals. So come out and fight for your say.
                        </p>
                    </div>
                    <div class="col s12 m9 event-desc" id="writing">
                        <h5 class="col s4"></h5>
                        <p class="col s12">
                        Manoeuvre yourself into a new world and start making things up. Showcase your creative and imaginative skills through your writing in our Creative Writing Event and let the horses of your imagination run loose.
                        </p>
                    </div>
                    <div class="col s12 m9 event-desc" id="gd">
                        <h5 class="col s4"></h5>
                        <p class="col s12">
                        Discuss Engage Canvass Dissent OVER and OUT.. The fierce battle of opinions, fought with weapons of words, where the warriors will be armoured by the language of their bodies and charioteered by the call of their intellect, shall heat up the atmosphere.
                        </p>
                    </div>
                    <div class="col s12 m9 event-desc" id="extemp">
                        <h5 class="col s4"></h5>
                        <p class="col s12">
                        Spur the moment by your presence of mind and get ready to amaze the audience by the awareness, confidence and fluency in language.
                        </p>
                    </div>
                </div>
                <div class="event-desc-container col s12 m10 offset-m1" id="programming">
                    <div class="col s12 m3 event-name-tabs">
                        <a href="#hackathon" class="col s12 tab active">Hackathon</a>
                    </div>
                    <div class="col s12 m9 event-desc active" id="hackathon">
                        <h5 class="col s4"></h5>
                        <p class="col s12">
                        Who is a hacker? Hacker is an attitude of passionate curiosity. Hacker is a culture of excellence. Hacker is a mind set of innovation. Hackers built the internet. Hackers built the personal computer. Hackers built the mobile phone. Hackers built everything that is awesome today.
                        </p>
                    </div>
                </div>
                <div class="event-desc-container col s12 m10 offset-m1" id="astronomy">
                    <div class="col s12 m3 event-name-tabs">
                        <a href="#exhibition" class="col s12 tab active">Exhibition</a>
                        <a href="#astroquiz" class="col s12 tab">Quiz</a>
                        <a href="#horizon" class="col s12 tab">Event Horizon</a>
                    </div>
                    <div class="col s12 m9 event-desc active" id="exhibition">
                        <h5 class="col s4"></h5>
                        <p class="col s12">
                            We here at Astronomy Club of IIITDMJ heartiliy invite you all to come and feast your eyes on the wondours of space as you may have never see before,
to be awestruck by the most fascinating of science which you could not have comprehended in your wildest of dreams that governs the whole Universe,
to be amazed by the smallest of phenomena that you may have witnessed often enough but would not have been enlighted enough to appreciate the intricate beauty from its fascinating fabrication to it&#39;s mesmerizing denouement.
So we are eagarly waiting for you to join us and see the cosmos as we see it.
                        </p>
                    </div>
                    <div class="col s12 m9 event-desc" id="astroquiz">
                        <h5 class="col s4"></h5>
                        <p class="col s12">
                        Like the last time and all other times we are again back with one of the Abhikalpan&#39;s most awaited quizing event 'THE ASTRONOMY QUIZ'.
So don&#39;t miss a chance to be a part of this exhilarating quizing arena to battle with Light Saber, clearing through obstacles and to emerge as a VICTOR.
                        </p>
                    </div>
                    <div class="col s12 m9 event-desc" id="horizon">
                        <h5 class="col s4"></h5>
                        <p class="col s12">
                        This year again we have prepared a stage for you to come forth with your genius, imagination, understanding of the laws governing the cosmos, to showcase a well defined solution of the engimatic situations we face with, with our endeavours to understand, to grow, to outreach our boundaries over and over gain.
                        </p>
                    </div>
                </div>
                <div class="event-desc-container col s12 m10 offset-m1" id="electronics">
                    <div class="col s12 m3 event-name-tabs">
                        <a href="#circuit" class="col s12 tab active">Circuit Simulation</a>
                        <a href="#led" class="col s12 tab">LED Matrix</a>
                        <a href="#quizzard" class="col s12 tab">Quizzard</a>
                    </div>
                    <div class="col s12 m9 event-desc active" id="circuit">
                        <h5 class="col s4"></h5>
                        <p class="col s12">
                        Ever had fun doing electronics? You better get ready to revolutionize the &#39;excellence&#39; in you! You&#39;re gonna design a circuit to meet the required specifications using the given components in the most genius manner. Just got real! So, get ready to build circuits.
                        </p>
                    </div>
                    <div class="col s12 m9 event-desc" id="led">
                        <h5 class="col s4"></h5>
                        <p class="col s12">
                        Ever stared at flames dancing in the fireplace? Got lost in them? Lost track of time? Led Matrix is an electronic analogue to those dancing flames. Programming LED Matrices to for animations that capture your imagination is an art, and if you have it in you, come and show us what you got. So, IIITDM Jabalpur brings you the challenge of showing your creative thinking with the use of technology.</p>
                    </div>
                    <div class="col s12 m9 event-desc" id="quizzard">
                        <h5 class="col s4"></h5>
                        <p class="col s12">
                        People have interest in gaining knowledge and experience more and more. You have to play with your knowledge on the paper. That&#39;s some good exercise for the brain, &#39;eh? So it’s challenge of knowledge and experience because challenge is the pathway to engagement and progress in our lives.
                        </p>
                    </div>
                </div>
                <div class="event-desc-container col s12 m10 offset-m1" id="fmc">
                    <div class="col s12 m3 event-name-tabs">
                        <a href="#dubsmash" class="col s12 tab active">Dubsmash</a>
                        <a href="#slideshow" class="col s12 tab">Pic Slideshow</a>
                        <a href="#prankster" class="col s12 tab">Prankster</a>
                        <a href="#shortfilm" class="col s12 tab">Short Film Making</a>
                    </div>
                    <div class="col s12 m9 event-desc active" id="dubsmash">
                        <h5 class="col s4"></h5>
                        <p class="col s12">
                        Dubsmash is a video messaging that lets users add soundtracks to videos recorded on their phones – often matching a clip of themselves performing a song or film scene with audio from the original.
                        </p>
                    </div>
                    <div class="col s12 m9 event-desc" id="slideshow">
                        <h5 class="col s4"></h5>
                        <p class="col s12">
                        Abhikalpan brings you an opportunity of showing your creativity. Use your imagination and participate in the 'picture slideshow' competition , Prepare a slide show using the pics provided by us......
                        </p>
                    </div>
                    <div class="col s12 m9 event-desc" id="prankster">
                        <h5 class="col s4"></h5>
                        <p class="col s12">
                        We all love to have FUN and play PRANKS with friends and strangers. Here you get a chance to share with everyone the everyday PRANKS with friends.
                        </p>
                    </div>
                    <div class="col s12 m9 event-desc" id="shortfilm">
                        <h5 class="col s4"></h5>
                        <p class="col s12">
                        ‘Pick up a camera. Shoot something. No matter how small, no matter how cheesy, no matter whether your friends and your sister star in it. Put your name on it as director. Now you're a director. Everything after that you're just negotiating your budget and your fee. James Cameron This is an event for all the visionaries who want to make it big in the film industry, and don’t worry, we make sure your fee is worth it.
                        </p>
                    </div>
                </div>
                <div class="event-desc-container col s12 m10 offset-m1" id="management">
                    <div class="col s12 m3 event-name-tabs">
                        <a href="#bmc" class="col s12 tab active">YTD</a>
                    </div>
                    <div class="col s12 m9 event-desc active" id="bmc">
                        Yet to be decided!!
                    </div>
                </div>
                <div class="event-desc-container col s12 m10 offset-m1" id="robotics">
                    <div class="col s12 m3 event-name-tabs">
                        <a href="#robowar" class="col s12 tab active">Robowar</a>
                        <a href="#minefield" class="col s12 tab">Minefield Escape</a>
                    </div>
                    <div class="col s12 m9 event-desc active" id="robowar">
                        <h5 class="col s4"></h5>
                        <p class="col s12">
                        Imagine yourself in a situation when your country is surrounded by enemies on all sides and only you can rescue it to safety. It is your skills and knowledge that can beat the enemy out of your nation. It is time for a Robowars where either you crush away the enemy’s bot or get your own sliced into pieces. So get ready to fight for your life, to fight for your pride, to fight for your glory and let your bot shine to the entire world.
                        </p>
                    </div>
                    <div class="col s12 m9 event-desc" id="minefield">
                        <h5 class="col s4"></h5>
                        <p class="col s12">
                        You are a field operative for RAW. You have to make an escape for nemesis ground but it’s a mine field. But using advanced technology developed by DRDO you have sight WHITE highlighted path which will safely take you to your extraction point. So get on your best of LFR’s to get going on this final objective of your mission. But take care to reach the extraction point in time as the nemesis guardians might be following onto your lead. Everything depends on how precisely and efficiently you follow your path as you don’t want to get BLOWN….
                        </p>
                    </div>
                </div>
                <div class="event-desc-container col s12 m10 offset-m1" id="automotive">
                    <div class="col s12 m3 event-name-tabs">
                        <a href="#robothon" class="col s12 tab active">Robothon</a>
                    </div>
                    <div class="col s12 m9 event-desc active" id="robothon">
                        <h5 class="col s4"></h5>
                        <p class="col s12">
                        The world believes in the survival of the fittest and it is in your hands to prove how fit your country men are. But this time the criterion is a bit different; you need to show the world how efficient your designed bot is. So pull up your socks and get ready to put forward a show that shall vouch for your mental and your bot’s physical speed. Just go onto the racing track and get to experience the thrill of a Robothon.
                        </p>
                    </div>
                </div>
                <div class="event-desc-container col s12 m10 offset-m1" id="photography">
                    <div class="col s12 m3 event-name-tabs">
                        <a href="#macro" class="col s12 tab active">Clairvoyance</a>
                        <a href="#face" class="col s12 tab">Faces, Places, Fancies</a>
                    </div>
                    <div class="col s12 m9 event-desc active" id="macro">
                        <h5 class="col s4"></h5>
                        <p class="col s12">
                            Macro photography is extreme close-up photography, usually of very small subjects, in which the size of the subject in the photograph is greater than life size.
                        </p>
                    </div>
                    <div class="col s12 m9 event-desc" id="face">
                        <h5 class="col s4">Theme - Portrait and Fashion</h5>
                        <p class="col s12">
                            Rules yet to be uploaded!!
                        </p>
                    </div>
                </div>
                <div class="event-desc-container col s12 m10 offset-m1" id="cad">
                    <div class="col s12 m3 event-name-tabs">
                        <a href="#cad" class="col s12 tab active">YTD</a>
                    </div>
                    <div class="col s12 m9 event-desc active" id="cad">
                        Yet to be decided!!
                    </div>
                </div>
            </section>
            <section class="contact container col s12 m10 offset-m1">
                <div class="contact-card-container col s12">
                    <h4 class="col s12 m10 offset-m1">For any queries contact -</h4>
                    <div class="contact-card col s4 m3">
                        <h4 class="col s10 offset-s1">Mohit Kumawat</h4>
                        <h5 class="col s10 offset-s1">+91-9424973245</h5>
                        <i class="col s12 fa fa-envelope"> <span>mohitkumawat@iiitdmj.ac.in</span></i>
                    </div>
                    <div class="contact-card col s4 m3">
                        <h4 class="col s10 offset-s1">Aparimita Singh</h4>
                        <h5 class="col s10 offset-s1">+91-8989077837</h5>
                        <i class="col s12 fa fa-envelope"> <span>aparimitasingha@iiitdmj.ac.in</span></i>
                    </div>
                    <div class="contact-card col s4 m3">
                        <h4 class="col s10 offset-s1">Rohit Suman</h4>
                        <h5 class="col s10 offset-s1">+91-9406816046</h5>
                        <i class="col s12 fa fa-envelope"> <span>rohitkumarsuman@iiitdmj.ac.in</span></i>
                    </div>
                    <div class="contact-card col s4 m3">
                        <h4 class="col s10 offset-s1">Sunny Rajak</h4>
                        <h5 class="col s10 offset-s1">+91-9589190253</h5>
                        <i class="col s12 fa fa-envelope"> <span>sunnyrajak@iiitdmj.ac.in</span></i>
                        
                    </div>
                </div>
            </section>
        </div>
        
        
        <script src="/js/jquery-2.1.4.js"></script>
        <script src="/js/materialize.min.js"></script>
        <script src="/js/wow.min.js"></script>
        <script src="/js/custom.js"></script>
    </body>

</html>