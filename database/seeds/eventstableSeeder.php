<?php


use Illuminate\Database\Seeder;


class eventstableSeeder extends Seeder
{

    public function run()
    {
        DB::table('events')->delete();

        $events=array(

            array(

                'name' => 'feet of fire',

                'caption' => 'A daring platform to showcase your moves and compete against the best dancers in the country,
                              master the skill of expression, energy and emotions.',

                'genre' => 'cultural',

                'event_id'=>'AD1',

                'category' => 'events',

                'id' => '1'

               ),


              array(

                  'name' => 'Dancellennium',

                  'caption' => 'The inter-collegiate group dance competition is a platform for the best dancing troops across India to flaunt their 
                                 hypnotic moves.',

                  'genre' => 'cultural',

                  'event_id'=>'AD2',

                  'category' => 'events',

                  'id' => '2'

              ),


                   array(

                       'name' => 'Carinosa',

                       'caption' =>'Come into an alliance with your partner if you can groove to the rhythm of your comrade and showcase your grace.',

                       'genre' => 'cultural',

                       'event_id'=>'AD3',

                       'category' => 'events',

                       'id' => '3'

                   ),



                    array(

                        'name' => 'Jam',

                        'caption' =>'It is an event which requires a mix of intelligence skills,presence of mind and oratory skills of a person ',

                        'genre' => 'cultural',

                        'event_id'=>'SA1',

                        'category' => 'events',

                        'id' => '4'

                    ),



                         array(

                             'name' => 'Spell Bee',

                             'caption' =>  'Encounter the unyielding spirit of game.',

                             'genre' => 'cultural',

                             'event_id'=>'SA2',

                             'category' => 'events',

                             'id' => '6'




                         ),


                              array(

                                    'name' => 'Debate',

                                    'caption' => 'Cogitate Expound Debate.This event is a contest of argumentation between two teams or individuals.',

                                    'genre' => 'cultural',

                                    'event_id'=>'SA3',

                                    'category' => 'events',

                                    'id' => '39'

                            ),


                              array(

                                'name' => 'Creative Writing',

                                'caption' => 'Manoeuvre yourself into a new world and start making things up. Showcase your creative and imaginative 
                                                   skills through your writing ',


                                'genre' => 'cultural',

                                'event_id'=>'SA4',

                                'category' => 'events',

                                'id' => '7'

                    ),


                array(

                    'name' => 'Group Discussion',

                    'caption' =>'Discuss Engage Canvass Dissent OVER and OUT.. The fierce battle of opinions, fought with weapons of words,
                                    where the warriors will be armoured by the language',


                    'genre' => 'cultural',

                    'event_id'=>'SA5',

                    'category' => 'events',

                    'id' => '8'

                ),




                array(

                    'name' => 'Extempore',

                    'caption' =>'Spur the moment by your presence of mind and get ready to amaze the audience',



                    'genre' => 'cultural',

                    'event_id'=>'SA6',

                    'category' => 'events',

                    'id' => '9'

                ),




                array(

                    'name' => 'Solo Singing',

                    'caption' =>'Get ready to get mesmerized by the whimsical performances by the singing sensations of the country
                                      in the first ever Inter IIIT Techno-Cultural Festival.',


                    'genre' => 'cultural',

                    'event_id'=>'SZ1',

                    'category' => 'events',

                    'id' => '10'

                ),


    array(

        'name' => 'Duet Singing',

        'caption' => 'The audience will surely be enthralled by the nightingale volices of the duo.'
    ,

        'genre' => 'cultural',

        'event_id'=>'SZ2',

        'category' => 'events',

        'id' => '11'

    ),

         array(

             'name' => 'Unplugged',

             'caption' =>'The participants will surely blow your mind. It is a platform where the bands play acoustic instruments.',


             'genre' => 'cultural',

             'event_id'=>'SZ3',

             'category' => 'events',

             'id' => '12'

         ),

                      array(

                 'name' => 'Solo Instrumental',

                 'caption' =>'In music, an instrumental solo piece is a composition played by the performer.',


                 'genre' => 'cultural',

                 'event_id'=>'SZ4',

                 'category' => 'events',

                 'id' => '13'

             ),



                           array(

                               'name' => 'Nukkad',

                               'caption' =>'Get up raise your voice and make the crowd think. Come and showcase the creativity in you against the odd of
                                               not having the stage set',


                               'genre' => 'cultural',

                               'event_id'=>'JB1',

                               'category' => 'events',

                               'id' => '14'

                           ),


         array(

             'name' => 'Monoact',

             'caption' =>'This is one man show . So pour your emotions and let the actor inside you cone out and say it all to the audience.',

             'genre' => 'cultural',

             'event_id'=>'JB2',

             'category' => 'events',

             'id' => '15'

         ),


              array(

                  'name' => 'One-Act',

                  'caption' =>'We all have a story to tell, the stage is set and ready to see you showcasing the
                                   grace and fineness of your acting skills',

                  'genre' => 'cultural .',

                  'event_id'=>'JB3',

                  'category' => 'events',

                  'id' => '16'

              ),


                   array(

                       'name' => 'T-shirt Painting .',

                       'caption' =>'Let the colors flow, designs show and flash your imagination bright. Have you ever
                                      felt like designing your own clothes?',

                       'genre' => 'cultural',

                       'event_id'=>'AV1',

                       'category' => 'events',

                       'id' => '17'

                   ),





                   array(

                       'name' => 'Best out of Waste',

                       'caption' => 'Let the colors flow, designs show and flash your imagination bright. Have you ever felt like designing your own
                                    clothes?',

                       'genre' => 'cultural',

                       'event_id'=>'AV2',

                       'category' => 'events',

                       'id' => '18'

                   ),




               array(

                   'name' => 'Poster Making',

                   'caption' => 'A picture speaks more than a thousand words. Posters are the best way to describe a particular situation
                                      or circumstances in a minimalist manner .',


                   'genre' => 'cultural',

                   'event_id'=>'AV3',

                   'category' => 'events',

                   'id' => '19'

               ),



               array(

                   'name' => 'Paper Cutting ',

                   'caption' => 'We have two hands, two eyes and 1 brain. They main purpose of these senses is to create.',



                   'genre' => 'cultural',

                   'event_id'=>'AV4',

                   'category' => 'events',

                   'id' => '20'

               ),


                array(

                    'name' => 'Doodling',

                    'caption' => 'Let your thoughts flow on paper and doodle all you want, all you like, all you can. .',




                    'genre' => 'cultural',

                    'event_id'=>'AV5',

                    'category' => 'events',

                    'id' => '21'

                ),


               array(

                   'name' => 'Rangoli',

                   'caption' => 'Traditional Indian art of Rangoli is a custom in our country since ages.
                                   Its the first form of art that most of us come across since our childhood.  ',

                   'genre' => 'cultural',

                   'event_id'=>'AV5',

                   'category' => 'events',

                   'id' => '22'

               ),




                    array(

                        'name' => 'Hackathon',

                        'caption' => 'Who is a hacker? Hacker is an attitude of passionate curiosity. Hacker is a culture of excellence.
                                          Hacker is a mind set of innovation.',



                        'genre' => 'technical',

                        'event_id'=>'PG1',

                        'category' => 'events',

                        'id' => '23'

                    ),


                    array(

                        'name' => 'Exhibition',

                        'caption' => 'We here at Astronomy Club of IIITDMJ heartiliy invite you all to come and feast your eyes on the wondours 
                                     of space as you may have never see before, to be awestruck by the most fascinating of science which you could not 
                                       have comprehended in your wildest of dreams ',




                        'genre' => 'technical',

                        'event_id'=>'AN1',

                        'category' => 'events',

                        'id' => '24'

    ),


                     array(

                         'name' => 'Quiz',

                         'caption' => 'Like the last time and all other times
                                         we are again back with one of the Abhikalpans most awaited quizing event THE ASTRONOMY QUIZ.',





                         'genre' => 'technical',

                         'event_id'=>'AN2',

                         'category' => 'events',

                         'id' => '25'

                     ),



                           array(

                               'name' => 'Event Horizon',

                               'caption' => 'This year again we have prepared a stage for you to come forth with your genius, imagination,
                                                   understanding of the laws governing the cosmos.',




                         'genre' => 'technical',

                         'event_id'=>'AN3',

                         'category' => 'events',

                         'id' => '26'

                     ),



                         array(

                             'name' => 'Circuit Simulation',

                             'caption' => 'Ever stared at flames dancing in the fireplace? Got lost in them? Lost track of time? Led Matrix is an
                                               electronic analogue to those dancing flames. ',




                             'genre' => 'technical',

                             'event_id'=>'EC1',

                             'category' => 'events',

                             'id' => '27'

                         ),


                               array(

                                   'name' => 'LED Matrix',

                                   'caption' => 'Ever stared at flames dancing in the fireplace? Got lost in them? Lost track of time?
                                                   Led Matrix is an electronic analogue to those dancing flames. ',





                                   'genre' => 'technical',

                                   'event_id'=>'EC2',

                                   'category' => 'events',

                                   'id' => '28'

                               ),



                                array(

                                    'name' => 'Quizzard',

                                    'caption' => 'People have interest in gaining knowledge and experience more and more. You have to play
                                                      with your knowledge on the paper. ',






                                    'genre' => 'technical',

                                    'event_id'=>'EC3',

                                    'category' => 'events',

                                    'id' => '29'

                                ),



                                array(

                                    'name' => 'Dubsmash',

                                    'caption'=>'Dubsmash is a video messaging that lets users add soundtracks to videos recorded on their phones  ',







                                    'genre' => 'technical',

                                    'event_id'=>'FM1',

                                    'category' => 'events',

                                    'id' => '30'

                                ),


                              array(

                                  'name' => 'Pic Slideshow',

                                  'caption'=>'Abhikalpan brings you an opportunity of showing your creativity. Use your imagination and participate 
                                                  in the picture slideshow competition .  ',


                                  'genre' => 'technical',

                                  'event_id'=>'FM2',

                                  'category' => 'events',

                                  'id' => '31'

                              ),


                                   array(

                                       'name' => 'Prankster',

                                       'caption'=>'We all love to have FUN and play PRANKS with friends and strangers.   ',



                                       'genre' => 'technical',

                                       'event_id'=>'FM3',

                                       'category' => 'events',

                                       'id' => '32'

                                   ),


                                    array(

                                        'name' => 'Short film Making',

                                        'caption'=> 'Pick up a camera. Shoot something. No matter how small, no matter how cheesy, no matter whether
                                                        your friends and your sister star in it.   ',




                                        'genre' => 'technical',

                                        'event_id'=>'FM4',

                                        'category' => 'events',

                                        'id' => '33'

                                    ),





                                    array(

                                        'name' => 'Minefield Escape',

                                        'caption'=> 'You are a field operative for RAW. You have to make an escape for nemesis ground but it’s a mine
                                                           field. But using advanced technology developed by DRDO you have sight WHITE highlighted path 
                                                                     which will safely take you to your extraction point.  ',





                                        'genre' => 'technical',

                                        'event_id'=>'RC1',

                                        'category' => 'events',

                                        'id' => '34'

                                    ),



                                         array(

                                             'name' => 'Robowar',

                                             'caption'=> 'Imagine yourself in a situation when your country is surrounded by enemies on all sides and only you can rescue it to safety.
                                                                It is your skills and knowledge that can beat the enemy out of your nation.  ',





                                             'genre' => 'technical',

                                             'event_id'=>'RC2',

                                             'category' => 'events',

                                             'id' => '35'

                                         ),


                                        array(

                                            'name' => 'Robothon',

                                            'caption'=> 'The world believes in the survival of the fittest and it is in your hands to prove how fit 
                                                          your country men are .',





                                            'genre' => 'technical',

                                            'event_id'=>'AC1',

                                            'category' => 'events',

                                            'id' => '36'

                                        ),



                                             array(

                                                 'name' => 'Clairvoyance',

                                                 'caption'=> 'Macro photography is extreme close-up photography, usually of very small subjects, 
                                                              in which the size of the subject in the photograph is greater than life size.',






                                                 'genre' => 'technical',

                                                 'event_id'=>'SB1',

                                                 'category' => 'events',

                                                 'id' => '37'

                                             ),


                                            array(

                                                'name' => 'Faces,Places,Fancies',

                                                'caption'=> 'Theme - Portrait and Fashion',






                                                'genre' => 'technical',

                                                'event_id'=>'SB2',

                                                'category' => 'events',

                                                'id' => '38'

                                            ),



        );

        DB::table('events')->insert($events);
    }

}

?>