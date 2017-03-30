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
        <!-- First menu page -->
        <div id="top">
            <div id="menu-btn">
                <a href="#about"><img id="aboutimg" class="menuimg" src="image/webpage1/1-1.png" alt="Responsive image"></a>
                <a href="#project"><img class="menuimg" id="projectimg" src="image/webpage1/1-2.png" alt="Responsive image"></a>
                <img class="menuimg" id="resumeimg" onclick="openResume()" src="image/webpage1/1-3.png" alt="Responsive image">
                <a href="#contact"><img class="menuimg" id="contactimg" src="image/webpage1/1-4.png" alt="Responsive image"></a>
            </div>
        </div>
        
        <!-- About section -->
        <div id="about">
            <div class="intro">
                <!--
                <div class="col-md-4 LI-profile-badge"  data-version="v1" data-size="medium" data-locale="zh_TW" data-type="vertical" data-theme="light" data-vanity="yi-wen-wang-5936a7105"><a class="LI-simple-link" href='https://www.linkedin.com/in/yi-wen-wang-5936a7105?trk=profile-badge'>Yi-Wen Wang</a></div>-->
                <img src="image/about_me_1.png" class="col-md-4" alt="Responsive image">
                <div id="aboutword" class="col-md-4">
                    <h2>Yi-Wen Wang</h2>
                    <p class="featured">
                        Hi, My name is Yi-Wen. I strive to do what I dream to do - be a software engineer and develop well applications for people.<br> 
                        I just got my master degree of Computer Science from USC. 
                        I am interested to explore and learn new technology. In USC, I love to learn courses in different fields such as AI, 3D, mobile game, web developing, etc. Now, I'm working on machine learning and Matlab. 
                    </p>

                </div>
                <div class="col-mid-4">
                    <img id="aboutandroid" class="mg-responsive flower" src="image/webpage22b/2B-1-01.png" alt="Responsive image">
                    <img id="aboutweb" class="mg-responsive flower" src="image/webpage22b/2B-2-01.png" alt="Responsive image">
                    <img id="aboutsw" class="mg-responsive flower" src="image/webpage22b/2B-3-01.png" alt="Responsive image">
                </div>
            </div>
            <div id="todo">
                <h3>What I can do.</h3><br>
                <div class="service">
                    <h4>Android App</h4>
                    <p class="featured">
                        Java<br>
                        Android API<br>
                        Android life cycle<br>
                        Information architecture<br>
                        Unit test
                    </p>
                </div>
                <div class="service">
                    <h4>Web Development</h4>
                    <p class="featured">
                        HTML5<br>
                        CSS3<br>
                        Javascript<br>
                        PHP<br>
                        Responsive design<br>
                        Web framworks
                    </p>
                </div>
                <div class="service">
                    <h4>Software Development</h4>
                    <p class="featured">
                        Java<br>
                        Python<br>
                        C/C++<br>
                        Algorithm<br>
                        Data structure<br>
                        Database<br>
                        Software development life cycle<br>
                        Design pattern<br>
                        Unit test
                    </p>
                </div>
            </div>
        </div>
        
        <!-- Project section -->
        <div id="project">
            <h3>What I have done.</h3><br>
            <div class="projectphoto">
                <a href="http://cs-server.usc.edu:24226/website/project/stocksearch/mystockdemo.html" target="_self">
                    <img class="img-responsive" src="image/template/computer&phone-01.png" alt="Responsive image">
                    <div class="thumbnail overlay">
                        <div class="text">Stock Search App</div>
                    </div>
                </a>
            </div>
            <div class="projectphoto">
                <a href="http://cs-server.usc.edu:24226/website/project/blackboard-runner/bbrunnerdemo.html" target="_self">
                    <img class="img-responsive" src="image/project_game.png" alt="Responsive image">
                    <div class="thumbnail overlay">
                        <div class="text">Blackboard Runner Game</div>
                    </div>
                </a>
            </div>
            <div class="projectphoto">
                <a href="http://cs-server.usc.edu:24226/website/project/videoanalysis/videoanalysis.html" target="_self">
                    <img class="img-responsive" src="image/project_egocentric.png" alt="Responsive image">
                    <div class="thumbnail overlay">
                        <div class="text">Egocentric Video Summary</div>
                    </div>
                </a>
            </div>
        </div>
        
        <!-- Resume section -->
        <div id="resume">
            <div id="canhelp">
                <h3>I can help.</h3><br>
                <p class="featured">
                    Currently, I am actively pursuing full-time software engineer positions around Bay Area, CA and would be available to start immediately. If you have a project that you want to get started, think you need my help with something or just fancy saying hey, then get in touch.
                </p><br><br>
                <button class="btn btn-primary"><span class="glyphicon glyphicon-user"></span> MY RESUME</button>
                <button class="btn btn-primary"><span class="glyphicon glyphicon-envelope"></span> MESSAGE ME</button>
            </div>     
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
            <img class="mg-responsive" src="image/webpage4page5/5-02.jpg" alt="Responsive image">
            <div class="myform">
            <form class="form-horizontal" name="contact" method="post">
                <div class="form-group">
                    <label for="inputname" class="col-md-3 control-label"><span class="star">*</span> Name</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control contactbg" name="inputname" placeholder="Name" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputemail" class="col-md-3 control-label"><span class="star">*</span> Email</label>
                    <div class="col-md-9">
                        <input type="email" class="form-control contactbg" name="inputemail" placeholder="Email" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputsub" class="col-md-3 control-label"><span class="star">*</span> Subject</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control contactbg" name="inputsub" placeholder="Subject" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputmsg" class="col-md-3 control-label"><span class="star">*</span> Message</label>
                    <div class="col-md-9">
                        <textarea class="form-control contactbg" name="inputmsg" rows="5" placeholder="Message" required></textarea>
                    </div>
                </div>
                <div class="form-group">
                      <button type="submit" class="btn btn-primary" name="contact">Send</button>
                      <button type="reset" class="btn btn-default">Reset</button>
                  </div>
            </form>
            </div>
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
    </body>
    <script>window.jQuery || document.write('<script src="jquery-1.12.2.js"><\/script>')</script>
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    <script src="dist/js/bootstrap.min.js"></script>
    <script src="myjs.js" type="text/javascript" language="Javascript"></script>
    <script type="text/javascript" src="https://platform.linkedin.com/badges/js/profile.js" async defer></script>
</html>