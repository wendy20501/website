<!DOCTYPE html>
<html>
    <head>
        <title>Yi-Wen Wang | Software Engineer</title>
        <!-- Bootstrap core CSS -->
        <link href="dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="bootstrap-social-gh-pages/bootstrap-social.css" rel="stylesheet">
        <!-- Bootstrap theme -->
        <link href="dist/css/bootstrap-theme.min.css" rel="stylesheet">
        <link rel="stylesheet" href="mystyle.css">
        <!-- Font-awesome core CSS -->
        <link href="font-awesome-4.6.3/css/font-awesome.css" rel="stylesheet">
        <link rel="icon" type="image/png" href="image/icon.png">
        <link href="https://fonts.googleapis.com/css?family=Yellowtail" rel="stylesheet">
    </head>
    <body>
        <!-- Top logo and tabs -->
        <a id="logo" href="#top">
            <img id="logoimg" src="image/icon.png" alt="Responsive image" class="img-circle">
        </a>
        
        <!-- First menu page -->
        <div id="top">
            
            <div class="bg">
                <img src="image/webpage1/1-01.jpg">
            </div>
            
            <div id="menu">
                <a href="#about"><img id="aboutimg" class="menuimg" src="image/webpage1/1-1.png" alt="Responsive image"></a>
                <a href="#project"><img class="menuimg" id="projectimg" src="image/webpage1/1-2.png" alt="Responsive image"></a>
                <img class="menuimg" id="resumeimg" onclick="openResume()" src="image/webpage1/1-3.png" alt="Responsive image">
                <a href="#contact"><img class="menuimg" id="contactimg" src="image/webpage1/1-4.png" alt="Responsive image"></a>
            </div>
        </div>
        
        <!-- About section -->
        <div id="about">
            <!--
            <div class="bg">
                <img id="aboutbg" src="image/webpage22a/2A-01.jpg">
            </div>
            <div class="sec_title">About</div>
            <img id="aboutandroid" class="mg-responsive btn" src="image/webpage22b/2B-1-01.png" onclick="" alt="Responsive image">
            <img id="aboutweb" class="mg-responsive btn" src="image/webpage22b/2B-2-01.png" onclick="" alt="Responsive image">
            <img id="aboutsw" class="mg-responsive btn" src="image/webpage22b/2B-3-01.png" onclick="" alt="Responsive image">
            <img id="aboutword" class="mg-responsive btn" src="image/webpage22a/2A-1-01.png" onclick="switchpage()" alt="Responsive image">
            -->
            <!--img id="aboutpeople_a" src="image/webpage22a/2A-2-01.png" alt="Responsive image"-->
            <!--img id="aboutpeople_b" src="image/webpage22b/2B-4-01.png" alt="Responsive image"-->
            <div class="container">
                <div class="intro jumbotron thumbnail">
                    <img id="aboutphoto" class="mg-responsive img-rounded" src="image/about_me.jpg" onclick="switchpage()" alt="Responsive image">
                    <div id="aboutword">
                        <h3>Yi-Wen Wang</h3>
                        Hi, My name is Yi-Wen. I strive to do what I dream to do - be a software engineer and develop well applications for people. I just got my master degree of Computer Science from USC. Currently, I am actively pursuing any full-time software engineer positions around Bay Area, CA and would be available to start immediately. I am interested to explore and learn new technology. In USC, I love to learn courses in different fields such as AI, 3D, mobile game, web developing, etc. Now, I'm working on machine learning. If you have any opportunities or questions for me, don't be hesitate to contact me. Thank you.
                    </div>
                </div>
                <div class="jumbotron thumbnail">
                    <h3>What I can do</h3>
                    <div class="service">
                        <img id="aboutandroid" class="mg-responsive" src="image/webpage22b/2B-1-01.png" alt="Responsive image">
                        <div class="service_overlay">
                            Java<br><br>
                            Android API<br><br>
                            Android life cycle<br><br>
                            Information architecture<br><br>
                            Unit test
                        </div>
                    </div>
                    <div class="service">
                        <img id="aboutweb" class="mg-responsive" src="image/webpage22b/2B-2-01.png" alt="Responsive image">
                        <div class="service_overlay">
                            HTML5<br><br>
                            CSS3<br><br>
                            Javascript<br><br>
                            PHP<br><br>
                            Responsive design<br><br>
                            Web framworks
                        </div>
                    </div>
                    <div class="service">
                        <img id="aboutsw" class="mg-responsive" src="image/webpage22b/2B-3-01.png" alt="Responsive image">
                        <div class="service_overlay">
                            Java<br><br>
                            Python<br><br>
                            C/C++<br><br>
                            Algorithm<br><br>
                            Data structure<br><br>
                            Database<br><br>
                            Software development life cycle<br><br>
                            Design pattern<br><br>
                            Unit test
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Project section -->
        <div id="project">
            <div class="bg">
                <img class="double_sec" src="image/webpage3/3-01.jpg">
            </div>
            <div class="sec_title">Project</div>
            <div class="mycontainer">
                <div class="projectphoto">
                    <img class="img-responsive img-thumbnail" src="image/project_web.png" alt="Responsive image">
                    <div class="overlay">
                        <div class="text">Stock Search App</div>
                    </div>
                </div>
                <div class="projectphoto">
                    <img class="img-responsive img-thumbnail" src="image/project_game.png" alt="Responsive image">
                    <div class="overlay">
                        <div class="text">Blackboard Runner Game</div>
                    </div>
                </div>
                <div class="projectphoto">
                    <img class="img-responsive img-thumbnail" src="image/project_egocentric.png" alt="Responsive image">
                    <div class="overlay">
                        <div class="text">Egocentric Video Summary</div>
                    </div>
                </div>
            </div>
            <!--
            <br>
            <div id="project_slide" class="carousel slide" data-ride="carousel">
            -->
                <!-- carousel indicators -->
                <!--
                <ol class="carousel-indicators">
                    <li data-target="#project_slide" data-slide-to="0" class="active"></li>
                    <li data-target="#project_slide" data-slide-to="1"></li>
                    <li data-target="#project_slide" data-slide-to="2"></li>
                </ol>
                <div class="container">
                -->
                    <!-- Wrapper for slides -->
                    <!--
                    <div class="carousel-inner" role="listbox">
                    -->
                        <!-- Stock project -->
                        <!--
                        <div class="item active">
                            <div class="row myslide">
                                <a href="http://cs-server.usc.edu:24226/website/mystockdemo.html" target="_self"><img class="project_img col-md-offset-1 col-md-4 img-responsive img-rounded" src="image/project_web.png" alt="Responsive image"></a>     
                                <div class="jumbotron project_info col-md-5">
                                    <b><h3>Stock Search Application</h3></b>
                                    <h5 class="detail">DATE </h5>Apr 2016 to May 2016
                                    <h5 class="detail">CATAGORY </h5>Website, Android
                                    <h5 class="detail">SKILLS</h5>
                                    <span class="mylabel label label-primary">HTML5</span>
                                    <span class="mylabel label label-primary">CSS3</span>
                                    <span class="mylabel label label-primary">Javascript</span>
                                    <span class="mylabel label label-primary">PHP</span>
                                    <span class="mylabel label label-primary">JSON</span>
                                    <span class="mylabel label label-primary">jQuery</span>
                                    <span class="mylabel label label-primary">AJAX</span>
                                    <span class="mylabel label label-primary">Bootstrap</span>
                                    <span class="mylabel label label-primary">Android Studio</span>
                                    <span class="mylabel label label-primary">Java</span><br>
                                </div>
                            </div>
                        </div>
                        -->
                        <!-- BB Runner project -->
                        <!--
                        <div class="item">
                            <div class="row">
                                <img class="project_img col-md-offset-1 col-md-4 img-rounded img-responsive" src="image/project_game.png" alt="Responsive image">
                                <div class="jumbotron project_info col-md-5">
                                    <b><h3>Blackboard Runner</h3></b>
                                    <h5 class="detail">DATE </h5>Aug 2015 to Dec 2015
                                    <h5 class="detail">CATAGORY </h5>Mobile Game
                                    <h5 class="detail">SKILLS</h5>
                                    <span class="mylabel label label-primary">Unity</span>
                                    <span class="mylabel label label-primary">C#</span>
                                    <span class="mylabel label label-primary">Photoshop</span>
                                </div>
                            </div>
                        </div>
                        -->
                        <!-- Egocentric video project -->
                        <!--
                        <div class="item">
                            <div class="row">
                                <img class="project_img col-md-offset-1 col-md-4 img-responsive img-rounded" src="image/project_egocentric.png" alt="Responsive image">
                                <div class="jumbotron project_info col-md-5">
                                    <b><h3>Videos Analysis Project</h3></b>
                                    <h5 class="detail">DATE </h5>Mar 2016 to May 2016
                                    <h5 class="detail">CATAGORY </h5>Multimedia
                                    <h5 class="detail">SKILLS</h5>
                                    <span class="mylabel label label-primary">eclipse</span>
                                    <span class="mylabel label label-primary">Java</span>
                                    <span class="mylabel label label-primary">video/audio related algorithms</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                -->
                <!-- carousel controls -->
                <!--
                <a class="left carousel-control" href="#project_slide" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#project_slide" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
                </a>
            </div>
        -->
        </div>
        
        <!-- Resume section -->
        <div id="resume">
            <div class="bg">
                <img class="double_sec" src="image/webpage4page5/4-01.jpg">
            </div>
            <!--
            <div class="sec_title">- Resume -</div><br>
            -->
            <!-- Button trigger modal -->
            <!--
            <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
                <span class="glyphicon glyphicon-user" aria-hidden="true"></span> Check out my resume!
            </button>
            -->
            
            <!-- Resume modal -->
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
              <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <div class="modal-title">
                        <div class="row">
                            <div class="col-md-5"><h2>Yi-Wen Wang</h2><h4> - Wendy - </h4></div>
                            <h5 class="myinfo col-md-6"><span class="glyphicon glyphicon-map-marker"></span> Fremont, CA, USA <br><br>
                                <span class="glyphicon glyphicon-envelope"></span> wendy20501@gmail.com<br><br>
                                <span class="glyphicon glyphicon-phone"></span> +1 (213) 321-3827<br>
                            </h5>
                        </div>
                    </div>
                  </div>
                  <div class="modal-body myinfo">
                    
                      <!-- Education -->
                    <h4 class="resume_title"><span class="glyphicon glyphicon-education"></span> EDUCATION</h4>
                      <div class="row">
                          <div class="col-md-10"><b>University of Southern California</b> - Los Angeles, CA</div>
                          <div class="col-md-2">2015 - 2016</div>
                      </div>
                      <i>Master of Science in Computer Science</i>
                      <br><br>
                      <div class="row">
                          <div class="col-md-10"><b>Yuan Ze University</b> - Taoyuan, Taiwan</div>
                          <div class="col-md-2">2006 - 2010</div>
                      </div>
                      <i>Bachelor of Science in Computer Science and Engineering</i>
                      <hr>
                      
                      <!-- Work -->
                      <h4 class="resume_title"><span class="glyphicon glyphicon-briefcase"></span> WORK EXPERIENCE</h4>
                      <div class="row">
                          <div class="col-md-10"><b>Software Engineer Assistant, Giantec Inc.</b> - New Taipei, Taiwan</div>
                          <div class="col-md-2">2012 - 2014</div>
                      </div>
                      Developed and directed software system testing and validation procedures, programming, and documentation.<br>
                      Developed In-Vehicle Infotainment (IVI) system based on Android platform.<br>
                      Ported Linux kernel and Android system on board support package (BSP).<br>
                      <br>
                      <div class="row">
                          <div class="col-md-10"><b>Intern, Digit Shuttle</b> - Taipei, Taiwan</div>
                          <div class="col-md-2">2008 - 2009</div>
                      </div>
                      Implemented an entertainment system on their new set-top box device for digital TV programs.<br>
                      Tested ongoing projects.
                      <hr>
                      
                      <!-- Skills -->
                      <h4 class="resume_title"><span class="glyphicon glyphicon-wrench"></span> TECHNICAL SKILLS</h4>
                      <b>Software:</b> Visual Studio, Eclipse, Android Studio, MS Office, Adobe Illustrator, Adobe Photoshop<br>
                      <b>Operating System:</b> Windows, Linux, Android<br>
                      <b>Languages:</b>  Java, C++, C, Python, C#, SQL<br>
                      <b>Web:</b> HTML, CSS, JavaScript, DOM, XML, PHP, Json, AJAX, JQuery, Bootstrap, Facebook platform
                      <hr>
                      
                      <!-- Activity -->
                      <h4 class="resume_title"><span class="glyphicon glyphicon-thumbs-up"></span> EXTRACURRICULAR ACTIVITIES</h4>
                      <b>Director of Graphic Arts, Student Association, Department of Computer Science and Engineering</b><br>
                      Managed graphic design of promotional materials for the department student association<br><br>
                      <b>Co-Captain, Women's Basketball Team, Department of Computer Science and Engineering</b><br>
                      Organized practices, helped define a training schedule, and led the team in inter-departmental competitions<br><br>
                      <b>Volunteer, Counselors' Office of Yuan Ze University</b><br>
                      Participated in volunteer activities to promote psychological wellbeing on campus and assist students under emotional distress


                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                  </div>
                </div>
              </div>
            </div>
        </div>
        
        <!-- Contact section -->
        <div id="contact">
            <div class="bg">
                <img src="image/webpage4page5/5-01.jpg">
            </div>
            <div class="contact_form">
                <form class="form-horizontal" name="contact" method="post">
                    <div class="form-group">
                        <label for="inputname" class="col-md-4 control-label"><span class="star">*</span> Name</label>
                        <div class="col-md-5">
                            <input type="text" class="form-control contactbg" name="inputname" placeholder="Name" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputemail" class="col-md-4 control-label"><span class="star">*</span> Email</label>
                        <div class="col-md-5">
                            <input type="email" class="form-control contactbg" name="inputemail" placeholder="Email" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputsub" class="col-md-4 control-label"><span class="star">*</span> Subject</label>
                        <div class="col-md-5">
                            <input type="text" class="form-control contactbg" name="inputsub" placeholder="Subject" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputmsg" class="col-md-4 control-label"><span class="star">*</span> Message</label>
                        <div class="col-md-5">
                            <textarea class="form-control contactbg" name="inputmsg" rows="5" placeholder="Message" required></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-offset-3 col-md-6">
                          <button type="submit" class="btn btn-primary" name="contact">Send</button>
                          <button type="reset" class="btn btn-default">Reset</button>
                        </div>
                      </div>
                </form>
                <?php
                    if (isset($_POST["contact"])){
                        $to = "wendy20501@gmail.com";
                        $subject = "You got a mail from your website: " . $_POST["inputsub"];
                        $msg = $_POST["inputmsg"];
                        $headers = "From: " . $_POST["inputemail"];
                        $msg = wordwrap($msg,70);
                        mail($to,$subject,$msg,$headers);
                    }
                ?> 

                <!-- Related links -->
                <a class="btn btn-social-icon btn-facebook" href="https://www.facebook.com/profile.php?id=1795699473" target="_blank">
                    <span class="fa fa-facebook"></span>
                </a>
                <a class="btn btn-social-icon btn-linkedin" href="https://www.linkedin.com/in/yi-wen-wang-5936a7105" target="_blank">
                    <span class="fa fa-linkedin"></span>
                </a>
                <br><br>

                <!-- Copyright -->
                Copyright &copy; 2017 by Yi-Wen Wang.
            </div>
        </div>
    </body>
    <script>window.jQuery || document.write('<script src="jquery-1.12.2.js"><\/script>')</script>
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    <script src="dist/js/bootstrap.min.js"></script>
    <script src="myjs.js" type="text/javascript" language="Javascript"></script>
</html>