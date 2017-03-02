 <head>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/css/materialize.min.css">
 </head>

 <body>
         <div class="row"></div>
         <div class="row"></div>
         <div class="row">

             {{--Card #1--}}
            <div class="col s12 m4">
                 <div class="card">
                    <div class="card-image waves-effect waves-block waves-light">
                        <img class="activator" src="/img/user.jpg">
                    </div>

                    <div class="card-content activator">
                        <div class="row">
                            <p><h3>Personal Details</h3></p>
                        </div>
                    </div>

                    <div class="card-reveal">
                        <span class="card-title grey-text text-darken-4">
                            Personal Details:
                            <i class="material-icons right">close</i>
                        </span>
                        <hr>
                        {{-- The Inputs go here --}}
                        <div class="row"></div>
                        <div class="row"></div>
                        <div class="row"></div>
                        <div class="row">
                            <form class="col s12 center-align">
                                <div class="row">
                                    <div class="input-field col s10">
                                        <i class="material-icons prefix">account_circle</i>
                                        <input id="icon_prefix" type="text" class="validate">
                                        <label for="icon_prefix">Name</label>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col s2">
                                        <label for="icon_dob" style="align:left"><h6>Date of Birth</h6></label>
                                    </div>

                                    <div class="input-field col s8">
                                        <i class="material-icons prefix">calendar</i>
                                        <input type="date" class="datepicker">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="input-field col s12">
                                        <label for="icon_gender">Gender</label>
                                        <br>
                                        <i class="material-icons prefix">gender</i>
                                        <p>
                                            <input id="male" type="radio" name="gender" value="male" checked>
                                            <label for="male">Male</label>
                                        </p>
                                        <p>
                                            <input id="female" type="radio" name="gender" value="female">
                                            <label for="female">Female</label>
                                        </p>
                                        <p>
                                            <input id="dontknow1" type="radio" name="gender" value="others">
                                            <label for="dontknow1">Others</label>
                                        </p>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>

                    <div class="card-action">

                        <div class="row" >
                            <p style="display:inline;"><h5>Click here to edit Personal Details</h5></p>&emsp;
                            <button class="btn waves-effect waves-light right align activator"><i class="material-icons">edit</i></button>
                        </div>
                    </div>
                </div>
            </div>

             {{--Card #2--}}
             <div class="col s12 m4">
                 <div class="card">
                    <div class="card-image waves-effect waves-block waves-light">
                        <img class="activator" src="/img/contact.jpg">
                    </div>

                    <div class="card-content activator">
                        <div class="row">
                            <p><h3>Contact Details</h3></p>
                        </div>
                    </div>

                    <div class="card-reveal">
                        <span class="card-title grey-text text-darken-4">
                            Contact Details:
                            <i class="material-icons right">close</i>
                        </span>
                        <hr>
                        {{-- The Inputs go here --}}
                        <div class="row"></div>
                        <div class="row"></div>
                        <div class="row"></div>
                        <div class="row">
                            <form class="col s12 center-align">
                                <div class="row">
                                    <div class="input-field col s10">
                                        <i class="material-icons prefix">email</i>
                                        <input id="icon_email" type="email" class="validate">
                                        <label for="icon_email">Email</label>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="input-field col s10">
                                        <i class="material-icons prefix">phone</i>
                                        <input id="icon_telephone" type="tel" class="validate">
                                        <label for="icon_telephone">Telephone</label>
                                    </div>
                                </div>

                                <div class="row"></div>
                                <div class="row"></div>
                                <div class="row"></div>
                                <div class="row">
                                    <div class="input-field col s10">
                                        <input id="icon_terms" type="checkbox" class="validate" required>
                                        <label for="icon_terms">I agree to the terms and conditions of the fest.<br> All the disputes are subjected to jurisdiction in Jabalpur High court only.</label>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="card-action">

                        <div class="row" >
                            <p style="display:inline;"><h5>Click here to edit Contact Details</h5></p>&emsp;
                            <button class="btn waves-effect waves-light right align activator"><i class="material-icons">edit</i></button>
                        </div>
                    </div>
                </div>
            </div>

             {{--Card #3--}}
             <div class="col s12 m4">
                 <div class="card">
                    <div class="card-image waves-effect waves-block waves-light">
                        <img class="activator" src="/img/college.jpg">
                    </div>

                    <div class="card-content activator">
                        <div class="row">
                            <p><h3>College Details</h3></p>
                        </div>
                    </div>

                    <div class="card-reveal">
                        <span class="card-title grey-text text-darken-4">
                            College Details:
                            <i class="material-icons right">close</i>
                        </span>
                        <hr>
                        {{-- The Inputs go here --}}
                        <div class="row"></div>
                        <div class="row"></div>
                        <div class="row"></div>
                        <div class="row">
                            <form class="col s12 center-align">

                                <div class="row">
                                    <div class="switch col s4">
                                        <label for="switch_gender"><h6>Are you an IIITian?</h6><br></label>
                                        <label>
                                            No
                                            <input type="checkbox">
                                            <span class="lever" id="switch_gender"></span>
                                            Yes
                                        </label>
                                    </div>

                                    <select class="col s6">
                                        <option value="default" disabled selected>Select your IIIT</option>
                                        <option value="allahabad">IIIT Allahabad</option>
                                        <option value="chittor">IIIT Chittoor, Sri City</option>
                                        <option value="dharwad">IIIT Dharwad</option>
                                        <option value="guwahati">IIIT Guwahati</option>
                                        <option value="gwalior">IIIT Gwalior</option>
                                        <option value="jabalpur">IIITDM Jabalpur</option>
                                        <option value="kalyani">IIIT Kalyani</option>
                                        <option value="kancheepuram">IIITDM Kancheepuram</option>
                                        <option value="kota">IIIT Kota</option>
                                        <option value="kottayam">IIIT Kottayam</option>
                                        <option value="kurnool">IIIT Kurnool</option>
                                        <option value="lucknow">IIIT Lucknow</option>
                                        <option value="manipur">IIIT Manipur</option>
                                        <option value="nagpur">IIIT Nagpur</option>
                                        <option value="pune">IIIT Pune</option>
                                        <option value="ranchi">IIIT Ranchi</option>
                                        <option value="sonepat">IIIT Sonepat</option>
                                        <option value="srirangam">IIIT Srirangam</option>
                                        <option value="una">IIIT Una</option>
                                        <option value="vadodara">IIIT Vadodara</option>
                                    </select>
                                </div>

                                <div class="row"></div>
                                <div class="row">
                                    <div class="input-field col s10">
                                        <i class="material-icons prefix">mode_edit</i>
                                        <input id="icon_college" type="text" class="validate">
                                        <label for="icon_college">College</label>
                                    </div>

                                </div>

                                <div class="row">
                                    <div class="input-field col s10">
                                        <i class="material-icons prefix">mode_edit</i>
                                        <input id="icon_prefix" type="text" class="validate">
                                        <label for="icon_prefix">City</label>
                                    </div>

                                </div>

                                <div class="row">
                                    <div class="input-field col s10">
                                        <i class="material-icons prefix">mode_edit</i>
                                        <input id="icon_map" type="text" class="validate">
                                        <label for="icon_map">State</label>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="card-action">

                        <div class="row" >
                            <p style="display:inline;"><h5>Click here to edit College Details</h5></p>&emsp;
                            <button class="btn waves-effect waves-light right align activator"><i class="material-icons">edit</i></button>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script>
         <script>
             $(document).ready(function() {
                 $('select').material_select();
             });
         </script>
 </body>
