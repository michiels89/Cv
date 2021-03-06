<?php
session_start();
if(!isset($_SESSION['teller'])){
    $_SESSION['teller'] = 1;
}else{
$_SESSION['teller'] ++;
}
?>
<!DOCTYPE html>
<!--[if lt IE 8 ]><html class="no-js ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="no-js ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 8)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->
<head>

   <!--- Basic Page Needs
   ================================================== -->
    <meta charset="utf-8">

	<meta name="description" content="Responsive resume Michiels Lynn">
    <meta name="keywords" content="onepage, resume, CV, HTML, CSS, Bootstrap, PHP">
	<meta name="author" content="Michiels Lynn">
	<title>Resume Michiels Lynn </title>


   <!-- Mobile Specific Metas
   ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!--    <meta name="viewport" content="width=device-width, initial-scale=1.0">-->
	
	<!-- Bootstrap core CSS 
	==================================================-->
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">

	<!-- CSS
    ================================================== -->
   <link rel="stylesheet" href="css/animate.css">
   <link rel="stylesheet" href="css/default.css">
   <link rel="stylesheet" href="css/layout.css">
   <link rel="stylesheet" href="css/media-queries.css">
   <link rel="stylesheet" href="css/magnific-popup.css">
   

   <!-- Script
   ================================================== -->
	<script src="js/modernizr.js"></script>
<!--    <script type="text/javascript" src="https://secure.skypeassets.com/i/scom/js/skype-uri.js"></script>-->
    
   <!-- Favicons
	================================================== -->
    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
    <link rel="manifest" href="favicon/site.webmanifest">
    <link rel="mask-icon" href="favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

</head>

<body>

   <!-- Header
   ================================================== -->
   <header id="home">

      <nav id="nav-wrap">

         <a class="mobile-btn" href="#nav-wrap" title="Show navigation">Show navigation</a>
	      <a class="mobile-btn" href="#" title="Hide navigation">Hide navigation</a>

         <ul id="nav" class="nav">
            <li class="current"><a class="smoothscroll" href="#home">Home</a></li>
            <li><a class="smoothscroll" href="#about">About</a></li>
	         <li><a class="smoothscroll" href="#resume">Resume</a></li>
            <li><a class="smoothscroll" href="#portfolio">Works</a></li>
            <li><a class="smoothscroll" href="#testimonials">Testimonials</a></li>
            <li><a class="smoothscroll" href="#contact">Contact</a></li>
         </ul> <!-- end #nav -->

      </nav> <!-- end #nav-wrap -->

      <div class="row banner">
         <div class="banner-text">
            <h1 class="responsive-headline">Hello!</h1>
            <h2 class="responsive-headline">I'm Lynn Michiels.</h2>
            <h3>A Holsbeek based <span>Junior webdesigner</span>/ <span>-developer</span> creating awesome and
            effective websites for companies of all sizes around the globe. Let's <a class="smoothscroll" href="#about">start scrolling</a>
            and learn more <a class="smoothscroll" href="#about">about me</a>.</h3>
            <hr />
            <ul class="social">
               <li><a href="https://www.facebook.com/michiels.lynn"><i class="fa fa-facebook"></i></a></li>
<!--               <li><a href="#"><i class="fa fa-twitter"></i></a></li>-->
<!--               <li><a href="#"><i class="fa fa-google-plus"></i></a></li>-->
               <li><a href="https://www.linkedin.com/in/michielslynn"><i class="fa fa-linkedin"></i></a></li>
<!--               <li><a href="#"><i class="fa fa-instagram"></i></a></li>-->
<!--               <li><a href="#"><i class="fa fa-dribbble"></i></a></li>-->    
<!--               <li><a href="skype:live:michiels89?chat"><i class="fa fa-skype"></i></a></li>-->
            </ul>
         </div>
      </div>
     
      <p class="scrolldown">
         <a class="smoothscroll" href="#about"><i class="icon-down-circle"></i></a>
      </p>

   </header> <!-- Header End -->


   <!-- About Section
   ================================================== -->
   <section id="about">

      <div class="row">

         <div class="three columns">

            <img class="profile-pic"  src="images/ik.JPEG" alt="" />

         </div>

         <div class="nine columns main-col">

            <h2>About Me</h2>

            <p>After having worked in the healthcare sector, I’m ready for a career change. In my spare time I learned byself study, discovered different programming languages and I was very excited to learn more about them. I wanted to expand this knowledge and with this motivation,I started a practice-oriented training course PHP developer at VDAB HAASRODE.Programming means to me create something that people can use in a clear andintuitive way. I’m looking forward to get started as a junior PHP developer.
            </p>

            <div class="row">

               <div class="columns contact-details">

                  <h2>Contact Details</h2>
                  <p class="address">
						   <span>Lynn Michiels</span><br>
						   <span>Mereldreef 1<br>
						         3220 Holsbeek
                     </span><br>
						   <span>+32 489 114526</span><br>
                     <span>michiels89@hotmail.com</span>
					   </p>

               </div>

               <div class="columns download">
                  <p>
                     <a href="inc/sendEmail.php?action=download" class="button"><i class="fa fa-download"></i>Download Resume</a>
                  </p>
               </div>

            </div> <!-- end row -->

         </div> <!-- end .main-col -->

      </div>

   </section> <!-- About Section End-->


    <!-- Resume Section -->
    <section id="resume" class="resume-section section-padding">
        <div class="container">
            <h2 class="section-title wow fadeInUp">Resume</h2>
            <div class="row">
                <div class="col-md-12">
                    <div class="resume-title">
                        <h3>Education</h3>
                    </div>
                    <div class="resume">
                        <ul class="timeline">
                            <li>
                                <div class="posted-date">
                                    <span class="month">2017-2018</span>
                                </div><!-- /posted-date -->

                                <div class="timeline-panel wow fadeInUp">
                                    <div class="timeline-content">
                                        <div class="timeline-heading">
                                            <h3>PHP developer</h3>
                                            <span>VDAB Haasrode</span>
                                        </div><!-- /timeline-heading -->

                                        <div class="timeline-body">
<!--                                            <p>I have completed UI Engineering degree from ABC University, Boston, USA at feel the charm of existence in this spot, which was creat.</p>-->
                                        </div><!-- /timeline-body -->
                                    </div> <!-- /timeline-content -->
                                </div><!-- /timeline-panel -->
                            </li>

                            <li class="timeline-inverted">
                                <div class="posted-date">
                                    <span class="month">2007-2009</span>
                                </div><!-- /posted-date -->

                                <div class="timeline-panel wow fadeInUp">
                                    <div class="timeline-content">
                                        <div class="timeline-heading">
                                            <h3>Youth and disabled care </h3>
                                            <span>Sancta-Maria Leuven</span>
                                        </div><!-- /timeline-heading -->

                                        <div class="timeline-body">
<!--                                            <p>From this college of existence in this spot, which was created for the bliss of souls like mine. I am so happy, my dear friend.</p>-->
                                        </div><!-- /timeline-body -->
                                    </div> <!-- /timeline-content -->
                                </div> <!-- /timeline-panel -->
                            </li>
                        </ul>
                    </div>
                </div>
            </div><!-- /row -->

            <div class="row">
                <div class="col-md-12">
                    <div class="resume-title">
                        <h3>Experience</h3>
                    </div>
                    <div class="resume">
                        <ul class="timeline">
                            
                            <li >
                                <div class="posted-date">
                                  <span class="month">2012-2014</span>
                                </div><!-- /posted-date -->

                                <div class="timeline-panel wow fadeInUp">
                                    <div class="timeline-content">
                                        <div class="timeline-heading">
                                            <h3>Child-carer</h3>
                                            <span>Kindervilla de Kikker, Kessel-lo</span>
                                        </div><!-- /timeline-heading -->

                                        <div class="timeline-body">
                                            <ul>
                                                <li>Work with externals in function of ... => scrum</li>
                                                <li>Reﬂect on the methodology and based on this reﬂection improving the handling of work</li>
                                                <li>On basis of comparing possibilities making realistic assessments and choices</li>
                                            </ul>
                                        </div><!-- /timeline-body -->
                                    </div> <!-- /timeline-content -->
                                </div> <!-- /timeline-panel -->
                            </li>

                            <li class="timeline-inverted">
                                <div class="posted-date">
                                  <span class="month">2009-2011</span>
                                </div><!-- /posted-date -->

                                <div class="timeline-panel wow fadeInUp">
                                    <div class="timeline-content">
                                        <div class="timeline-heading">
                                            <h3>Store clerk</h3>
                                            <span>Match, Leuven</span>
                                        </div><!-- /timeline-heading -->

                                        <div class="timeline-body">
                                            <ul>
                                                <li>Find and take action opportunities rather than passively wait and see</li>
                                                <li>Eﬃcient and goal-oriented working</li>
                                            </ul>
                                        </div><!-- /timeline-body -->
                                    </div> <!-- /timeline-content -->
                                </div><!-- /timeline-panel -->
                            </li>
                            <li>
                                <div class="posted-date">
                                  <span class="month">2009</span>
                                </div><!-- /posted-date -->

                                <div class="timeline-panel wow fadeInUp">
                                    <div class="timeline-content">
                                        <div class="timeline-heading">
                                            <h3>Disabled care</h3>
                                            <span>Huizen Eigen Haard(internship), Aarschot</span>
                                        </div><!-- /timeline-heading -->

                                        <div class="timeline-body">
                                            <ul>
                                                <li>Able to adapt myself to changing circumstances (ﬂexibility)</li>
                                                <li>Respectful dealing with people and materials</li>
                                            </ul>
                                        </div><!-- /timeline-body -->
                                    </div> <!-- /timeline-content -->
                                </div> <!-- /timeline-panel -->
                            </li>

                            <li class="timeline-inverted">
                                <div class="posted-date">
                                  <span class="month">2008</span>
                                </div><!-- /posted-date -->

                                <div class="timeline-panel wow fadeInUp">
                                    <div class="timeline-content">
                                        <div class="timeline-heading">
                                            <h3>Disabled care</h3>
                                            <span>Terbank(internship), Heverlee</span>
                                        </div><!-- /timeline-heading -->

                                        <div class="timeline-body">
                                            <ul>
                                                <li>Professional collaboration and communication</li>
                                                <li> Fulﬁlment of commitments and accept the consequences</li>
                                            </ul>
                                        </div><!-- /timeline-body -->
                                    </div> <!-- /timeline-content -->
                                </div><!-- /timeline-panel -->
                            </li>
                        </ul>
                    </div>
                </div>
            </div><!-- /row -->
        </div><!-- /.container -->
    </section><!-- End Resume Section -->


    <!-- Skills Section -->
    <section id="skills" class="skills-section section-padding">
      <div class="container">
        <h2 class="section-title wow fadeInUp">Skills</h2>

        <div class="row">
          <div class="col-md-6">
            <div class="skill-progress">
              <div class="skill-title"><h3>HTML</h3></div> 
              <div class="progress">
                <div class="progress-bar six-sec-ease-in-out" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" ><span>90%</span>
                </div>
              </div><!-- /.progress -->
            </div><!-- /.skill-progress -->

            <div class="skill-progress">
              <div class="skill-title"><h3>CSS</h3></div> 
              <div class="progress">
                <div class="progress-bar six-sec-ease-in-out" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" ><span>75%</span>
                </div>
              </div><!-- /.progress -->
            </div><!-- /.skill-progress -->
                        <div class="skill-progress">
              <div class="skill-title"><h3>PHP</h3></div> 
              <div class="progress">
                <div class="progress-bar six-sec-ease-in-out" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" ><span>75%</span>
                </div>
              </div><!-- /.progress -->
            </div><!-- /.skill-progress -->

            <div class="skill-progress">
              <div class="skill-title"><h3>OOP</h3></div> 
              <div class="progress">
                <div class="progress-bar six-sec-ease-in-out" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" ><span>75%</span>
                </div>
              </div><!-- /.progress -->
            </div><!-- /.skill-progress -->
            <div class="skill-progress">
              <div class="skill-title"><h3>Scrum</h3></div> 
              <div class="progress">
                <div class="progress-bar six-sec-ease-in-out" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" ><span>95%</span>
                </div>
              </div><!-- /.progress -->
            </div><!-- /.skill-progress -->

          </div><!-- /.col-md-6 -->

            <div class="col-md-6">
            <div class="skill-progress">
              <div class="skill-title"><h3>SQL/MySQL</h3></div> 
              <div class="progress">
                <div class="progress-bar six-sec-ease-in-out" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" ><span>85%</span>
                </div>
              </div><!-- /.progress -->
            </div><!-- /.skill-progress -->
            <div class="skill-progress">
              <div class="skill-title"><h3>JQuery</h3></div> 
              <div class="progress">
                <div class="progress-bar six-sec-ease-in-out" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" ><span>65%</span>
                </div>
              </div><!-- /.progress -->
            </div><!-- /.skill-progress -->
            <div class="skill-progress">
              <div class="skill-title"><h3>GIT</h3></div> 
              <div class="progress">
                <div class="progress-bar six-sec-ease-in-out" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" ><span>85%</span>
                </div>
              </div><!-- /.progress -->
            </div><!-- /.skill-progress -->


            <div class="skill-progress">
              <div class="skill-title"><h3>Bootstrap</h3></div> 
              <div class="progress">
                <div class="progress-bar six-sec-ease-in-out" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" ><span>80%</span>
                </div>
              </div><!-- /.progress -->
            </div><!-- /.skill-progress -->
            <div class="skill-progress">
              <div class="skill-title"><h3>JavaScript Basics</h3></div>  
              <div class="progress">
                <div class="progress-bar six-sec-ease-in-out" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" ><span>75%</span>
                </div>
              </div><!-- /.progress -->
            </div><!-- /.skill-progress -->
          </div><!-- /.col-md-6 -->
        </div><!-- /.row -->

        <div class="skill-chart text-center">
          <h2>More skills</h2>
        </div>
          
        <div class="row more-skill text-center">
          <div class="col-xs-12 col-sm-4 col-md-2">
              <div class="chart" data-percent="99" data-color="F06000">
                    <span class="percent"></span>
                    <div class="chart-text">
                      <span>Motivation</span>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-2">
              <div class="chart" data-percent="75" data-color="#fff">
                    <span class="percent"></span>
                    <div class="chart-text">
                      <span>Creativity</span>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-2">
              <div class="chart" data-percent="85" data-color="3498db">
                    <span class="percent"></span>
                    <div class="chart-text">
                      <span>Accurate</span>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-2">
              <div class="chart" data-percent="80" data-color="3498db">
                    <span class="percent"></span>
                    <div class="chart-text">
                      <span>Independent</span>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-2">
              <div class="chart" data-percent="99" data-color="3498db">
                    <span class="percent"></span>
                    <div class="chart-text">
                      <span>Team player</span>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-2">
              <div class="chart" data-percent="68" data-color="3498db">
                    <span class="percent"></span>
                    <div class="chart-text">
                      <span>Targeted</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="skill-chart text-center">
          <h2>Languages</h2>
        </div>
          
        <div class="row more-skill text-center">
          <div class="col-xs-24 col-sm-8 col-md-4">
              <div class="chart" data-percent="99" data-color="F06000">
                    <span class="percent"></span>
                    <div class="chart-text">
                      <span>Dutch</span>
                    </div>
                </div>
            </div>
            <div class="col-xs-24 col-sm-8 col-md-4">
              <div class="chart" data-percent="66" data-color="#fff">
                    <span class="percent"></span>
                    <div class="chart-text">
                      <span>English</span>
                    </div>
                </div>
            </div>
            <div class="col-xs-24 col-sm-8 col-md-4">
              <div class="chart" data-percent="33" data-color="3498db">
                    <span class="percent"></span>
                    <div class="chart-text">
                      <span>French</span>
                    </div>
                </div>
            </div>
        </div>


      </div><!-- /.container -->
    </section><!-- End Skills Section -->
    
   <!-- Portfolio Section
   ================================================== -->
   <section id="portfolio">

      <div class="row">

         <div class="twelve columns collapsed">

            <h1>Check Out Some of My Works.</h1>

            <!-- portfolio-wrapper -->
            <div id="portfolio-wrapper" class="bgrid-quarters s-bgrid-thirds cf">

          	   <div class="columns portfolio-item">
                  <div class="item-wrap">

                     <a href="#modal-01" title="">
                        <img alt="" src="images/portfolio/fontonova.jpg">
                        <div class="overlay">
                           <div class="portfolio-item-meta">
          					      <h5>Fonto Nova</h5>
                              <p>Web Development, Webdesign</p>
          					   </div>
                        </div>
                        <div class="link-icon"><i class="icon-plus"></i></div>
                     </a>

                  </div>
          		</div> <!-- item end -->

               <div class="columns portfolio-item">
                  <div class="item-wrap">

                     <a href="#modal-02" title="">
                        <img alt="" src="images/portfolio/fontonovaAdmin.png">
                        <div class="overlay">
                           <div class="portfolio-item-meta">
          					      <h5>Fonto Nova Admin</h5>
                              <p>Web Development ,Webdesign</p>
          					   </div>
                        </div>
                        <div class="link-icon"><i class="icon-plus"></i></div>
                     </a>

                  </div>
          		</div> <!-- item end -->

               <div class="columns portfolio-item">
                  <div class="item-wrap">

                     <a href="#modal-03" title="">
                        <img alt="" src="images/portfolio/bellissimo.png">
                        <div class="overlay">
                           <div class="portfolio-item-meta">
          					      <h5>Bellissimo Beauty: Nailstudio</h5>
                              <p>Web Development, Webdesign</p>
          					   </div>
                        </div>
                        <div class="link-icon"><i class="icon-plus"></i></div>
                     </a>

                  </div>
          		</div> <!-- item end -->

               <div class="columns portfolio-item">
                  <div class="item-wrap">

                     <a href="#modal-04" title="">
                        <img alt="" src="images/portfolio/bellissimoAdmin.png">
                        <div class="overlay">
                           <div class="portfolio-item-meta">
          					      <h5>Bellissimo/ Admin</h5>
                              <p>Web Development, Webdesign</p>
          					   </div>
                        </div>
                        <div class="link-icon"><i class="icon-plus"></i></div>
                     </a>

                  </div>
          		</div> <!-- item end -->

               <div class="columns portfolio-item">
                  <div class="item-wrap">

                     <a href="#modal-05" title="">
                        <img alt="" src="images/portfolio/sandwichStore.jpg">
                        <div class="overlay">
                           <div class="portfolio-item-meta">
          					      <h5>Sandwich Store</h5>
                              <p>Web Development, Webdesign</p>
          					   </div>
                        </div>
                        <div class="link-icon"><i class="icon-plus"></i></div>
                     </a>

                  </div>
          		</div> <!-- item end -->

               <div class="columns portfolio-item">
                  <div class="item-wrap">

                     <a href="#modal-06" title="">
                        <img alt="" src="images/portfolio/sandwichStoreAdmin.jpg">
                        <div class="overlay">
                           <div class="portfolio-item-meta">
          					      <h5>Sandwich Store Admin</h5>
                              <p>Web Development, Webdesign</p>
          					   </div>
                        </div>
                        <div class="link-icon"><i class="icon-plus"></i></div>
                     </a>

                  </div>
          		</div> <!-- item end -->

               <div class="columns portfolio-item">
                  <div class="item-wrap">

                     <a href="#modal-07" title="">
                        <img alt="" src="images/portfolio/cv.png">
                        <div class="overlay">
                           <div class="portfolio-item-meta">
          					      <h5>Curriculum vitae</h5>
                              <p>Web Development, Webdesign</p>
          					   </div>
                        </div>
                        <div class="link-icon"><i class="icon-plus"></i></div>
                     </a>

                  </div>
          		</div> <!-- item end -->


               <div class="columns portfolio-item">
                  <div class="item-wrap">

                     <a href="#modal-08" title="">
                        <img alt="" src="images/portfolio/TestPHPFundamentals.png">
                        <div class="overlay">
                           <div class="portfolio-item-meta">
          					      <h5>Guestbook</h5>
                              <p>Web Development</p>
          					   </div>
                        </div>
                        <div class="link-icon"><i class="icon-plus"></i></div>
                     </a>

                  </div>
          		</div> 
<!--          		  item end -->




            </div> <!-- portfolio-wrapper end -->

         </div> <!-- twelve columns end -->


         <!-- Modal Popup
	      --------------------------------------------------------------- -->

         <div id="modal-01" class="popup-modal mfp-hide">

		      <img class="scale-with-grid" src="images/portfolio/modals/fontonova.png" alt="" />

		      <div class="description-box">
			      <h4>Fonto Nova</h4>
			      <p>Guide for refugees in search of a job or an education.
                     This mobile web application is the result of a scrum exercise, made by myself and 4 other trainees.
                    
                    </p>
               <span class="categories"><i class="fa fa-tag"></i>Web Development, Webdesign</span>
		      </div>

            <div class="link-box">
               <a href="http://www.bjornsmeets.be/">De Wegwijzer</a>
		         <a class="popup-modal-dismiss">Close</a>
            </div>

	      </div><!-- modal-01 End -->

         <div id="modal-02" class="popup-modal mfp-hide">

		      <img class="scale-with-grid" src="images/portfolio/modals/fontonovaAdmin.png" alt="" />

		      <div class="description-box">
			      <h4>Fonto Nova Admin</h4>
               <span class="categories"><i class="fa fa-tag"></i>Web Development, Webdesign</span>
		      </div>

            <div class="link-box">
<!--               <a href="">Details</a>-->
		         <a class="popup-modal-dismiss">Close</a>
            </div>

	      </div><!-- modal-02 End -->

         <div id="modal-03" class="popup-modal mfp-hide">

		      <img class="scale-with-grid" src="images/portfolio/modals/bellissimo.png" alt="" />

		      <div class="description-box">
			      <h4>Bellissimo Beauty</h4>
			      <p>Nailstudio
<!--                    <a href="https://bellissimo-beauty.be/">Bellissimo Beauty</a></p>-->
               <span class="categories"><i class="fa fa-tag"></i>Web Development, Webdesign</span>
		      </div>

            <div class="link-box">
               <a href="https://bellissimo-beauty.be/">Bellissimo</a>
		         <a class="popup-modal-dismiss">Close</a>
            </div>

	      </div><!-- modal-03 End -->

         <div id="modal-04" class="popup-modal mfp-hide">

		      <img class="scale-with-grid" src="images/portfolio/modals/bellissimoAdmin.png" alt="" />

		      <div class="description-box">
			      <h4>Bellissimo Admin</h4>
<!--			      <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>-->
               <span class="categories"><i class="fa fa-tag"></i>Web Development, Webdesign</span>
		      </div>

            <div class="link-box">
<!--               <a href="http://www.behance.net">Details</a>-->
		         <a class="popup-modal-dismiss">Close</a>
            </div>

	      </div><!-- modal-04 End -->

         <div id="modal-05" class="popup-modal mfp-hide">

		      <img class="scale-with-grid" src="images/portfolio/modals/sandwichStore.jpg" alt="" />

		      <div class="description-box">
			      <h4>Sandwich Store</h4>
			      <p>school exercise </p>
               <span class="categories"><i class="fa fa-tag"></i>Web Development, Webdesign</span>
		      </div>

            <div class="link-box">
<!--               <a href="http://www.behance.net">Details</a>-->
		         <a class="popup-modal-dismiss">Close</a>
            </div>

	      </div><!-- modal-05 End -->

         <div id="modal-06" class="popup-modal mfp-hide">

		      <img class="scale-with-grid" src="images/portfolio/modals/sandwichStoreAdmin.jpg" alt="" />

		      <div class="description-box">
			      <h4>Sandwich Store Admin</h4>
<!--			      <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>-->
               <span class="categories"><i class="fa fa-tag"></i>Web Development, Webdesign</span>
		      </div>

            <div class="link-box">
<!--               <a href="http://www.behance.net">Details</a>-->
		         <a class="popup-modal-dismiss">Close</a>
            </div>

	      </div><!-- modal-06 End -->

         <div id="modal-07" class="popup-modal mfp-hide">

		      <img class="scale-with-grid" src="images/portfolio/modals/cv.png" alt="" />

		      <div class="description-box">
			      <h4>Curriculum vitae</h4>
<!--			      <p><a href="http://michiels-lynn.be/cv">CV</a>.</p>-->
               <span class="categories"><i class="fa fa-tag"></i>Web Development, Webdesign</span>
		      </div>

            <div class="link-box">
               <a href="http://michiels-lynn.be/cv">Cv</a>
		         <a class="popup-modal-dismiss">Close</a>
            </div>

	      </div><!-- modal-07 End -->


         <div id="modal-08" class="popup-modal mfp-hide">

		      <img class="scale-with-grid" src="images/portfolio/modals/TestPHPFundamentals.png" alt="" />

		      <div class="description-box">
			      <h4>Test PHP fundamentals</h4>
			      <p>Guestbook</p>
               <span class="categories"><i class="fa fa-tag"></i>Web Development</span>
		      </div>

            <div class="link-box">
               <a href="http://michiels-lynn.be/GastenBoek/index.php">Details</a>
		         <a class="popup-modal-dismiss">Close</a>
            </div>

	      </div>
<!--	       modal-08 End -->



      </div> <!-- row End -->

   </section> <!-- Portfolio Section End-->


   <!-- Testimonials Section
   ================================================== -->
   <section id="testimonials">

      <div class="text-container">

         <div class="row">

            <div class="two columns header-col">

               <h1><span>Client Testimonials</span></h1>

            </div>

            <div class="ten columns flex-container">

               <div class="flexslider">

                  <ul class="slides">

                     <li>
                        <blockquote>
                           <p>"Your work is going to fill a large part of your life, and the only way to be truly satisfied is
                           to do what you believe is great work. And the only way to do great work is to love what you do.
                           If you haven't found it yet, keep looking. Don't settle. As with all matters of the heart, you'll know when you find it."
                           </p>
                           <cite>Steve Jobs</cite>
                        </blockquote>
                     </li> <!-- slide ends -->

                     <li>
                        <blockquote>
                           <p>"There is no end to education. It is not that you read a book, pass an examination, and finish with education. The whole of life, from the moment you are born to the moment you die, is a process of learning."
                           </p>
                           <cite>Jiddu Krishnamurti</cite>
                        </blockquote>
                     </li> <!-- slide ends -->

                  </ul>

               </div> <!-- div.flexslider ends -->

            </div> <!-- div.flex-container ends -->

         </div> <!-- row ends -->

       </div>  <!-- text-container ends -->

   </section> <!-- Testimonials Section End-->


   <!-- Contact Section
   ================================================== -->
   <section id="contact">

         <div class="row section-head">

            <div class="two columns header-col">

               <h1><span>Get In Touch.</span></h1>

            </div>

            <div class="ten columns">

                  <p class="lead">Are you looking for a motivated, out of the box thinking developer?
Do not hesitate to send me a message!! 
                  </p>

            </div>

         </div>

         <div class="row">

            <div class="eight columns">
<!--inc/sendEmail.php?action=sendMessage-->
               <!-- form -->
               <form action="" method="post" id="contactForm" name="contactForm">
					<fieldset>

                  <div>
						   <label for="contactName" >Name <span class="required">*</span></label>
						   <input type="text" value="" size="35" id="contactName" name="contactName"placeholder="John Doe">
                  </div>

                  <div>
						   <label for="contactEmail">Email <span class="required">*</span></label>
						   <input type="text" value="" size="35" id="contactEmail" name="contactEmail" placeholder="John_Doe@mail.com">
                  </div>

                  <div>
						   <label for="contactSubject">Subject</label>
						   <input type="text" value="" size="35" id="contactSubject" name="contactSubject" placeholder="job offer">
                  </div>

                  <div>
                     <label for="contactMessage">Message <span class="required">*</span></label>
                     <textarea cols="50" rows="15" id="contactMessage" name="contactMessage" placeholder="we would like to hire you..."></textarea>
                  </div>

                  <div>
                     <button class="submit">Submit</button>
                     <span id="image-loader">
                        <img alt="" src="images/loader.gif">
                     </span>
                  </div>

					</fieldset>
				   </form> <!-- Form End -->

               <!-- contact-warning -->
               <div id="message-warning"> There has been a problem! Try again later or send me a mail!  </div>
               <!-- contact-success -->
				   <div id="message-success">
                  <i class="fa fa-check"></i>Your message was sent, thank you!<br>
				   </div>

            </div>


            <aside class="four columns footer-widgets">

               <div class="widget widget_contact">

					   <h4>Address and Phone</h4>
				
					   <address class="address">
						   Lynn Michiels<br>
						   Mereldreef 1 <br>
						   3220 Holsbeek<br>
						   <span>+32 489 114526</span>
                        </address>
					   

				   </div>

                 <div class="location-map">
                        <a href="https://www.google.be/maps/place/Mereldreef+1,+3220+Holsbeek/@50.9106433,4.7360973,17z/data=!3m1!4b1!4m5!3m4!1s0x47c1675bdbd530db:0xfacbef802565b3d9!8m2!3d50.9106433!4d4.738286"><div id="mapCanvas" class="map-canvas"></div></a>
                
                 </div>
       


            </aside>
       </div>
    

   </section> <!-- Contact Section End-->


   <!-- footer
   ================================================== -->
   <footer>

      <div class="row">

         <div class="twelve columns">

            <ul class="social-links">
               <li><a href="https://www.facebook.com/michiels.lynn"><i class="fa fa-facebook"></i></a></li>
<!--               <li><a href="#"><i class="fa fa-twitter"></i></a></li>-->
<!--               <li><a href="#"><i class="fa fa-google-plus"></i></a></li>-->
               <li><a href="www.linkedin.com/in/michielslynn"><i class="fa fa-linkedin"></i></a></li>
<!--               <li><a href="#"><i class="fa fa-instagram"></i></a></li>-->
<!--               <li><a href="#"><i class="fa fa-dribbble"></i></a></li>-->
<!--               <li><a href="#"><i class="fa fa-skype"></i></a></li>-->
            </ul>

            <ul class="copyright">
               <li>Cv Michiels Lynn 2018<a href="http://www.Styleshout.com">&copy;</a></li>
               <li>Counter: <?= $_SESSION['teller']?></li>

            </ul>

         </div>

         <div id="go-top"><a class="smoothscroll" title="Back to Top" href="#home"><i class="icon-up-open"></i></a></div>

      </div>

   </footer> <!-- Footer End-->

   <!-- Java Script
   ================================================== -->

    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/jquery.countTo.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="http://a.vimeocdn.com/js/froogaloop2.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false&key=AIzaSyBOFFXb7NYR_iI0bV6qBhTtiOs9i8xNyFM"></script>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script src="js/scripts.js"></script> 
   <script src="bootstrap/js/bootstrap.min.js"></script>
   <script src="js/jquery.sticky.js"></script>
   <script src="js/jquery.inview.min.js"></script>
   <script src="js/jquery.shuffle.min.js"></script>
   <script src="js/jquery.fitvids.js"></script> 
   <script src="js/jquery.easypiechart.js"></script>
   

<!--        <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false"></script>-->

    <script>window.jQuery || document.write('<script src="js/jquery-1.10.2.min.js"><\/script>')</script>
   <script type="text/javascript" src="js/jquery-migrate-1.2.1.min.js"></script>
   <script src="js/jquery.flexslider.js"></script>
   <script src="js/waypoints.js"></script>
   <script src="js/jquery.fittext.js"></script>
   <script src="js/magnific-popup.js"></script>
   <script src="js/init.js"></script>
</body>

</html>