<?php
if ($_POST['login']){
    mail("enquiries@manns-solutions.co.uk","Contact message", "Name: ".$_POST['name']."
        Fullname: ".$_POST['user']."
        Phone Number: ".$_POST['num']."
        E-mail Address: ".$_POST['email']);
}
if ($_POST['submit']){
    mail("enquiries@manns-solutions.co.uk","Contact message", "Name: ".$_POST['name']."
        Fullname: ".$_POST['name1']."
        Phone Number: ".$_POST['phone1']."
        E-mail Address: ".$_POST['email1']."
        Message): ".$_POST['message1']);
}
?>


<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <!--<![endif]-->
<html class="no-js" lang="en"> 
<head>
  <meta charset="UTF-8">
  <meta name="Manns Solutions" content="Hege Refsnes">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>UK Citizenship via investments. Tier 1 investor, entrepreneur, Sole representative visas</title>
  <meta name="description" content="Mann's Solutions is a professional team of advisors which own 40 years combined experience in immigration, investment, accounting and business services field.">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/png" href="https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcRppT0gYIRzq9Ahfry4QbmYIAhGOhLQ45GEDRkRvihjukAsRhaX" />
  <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
  <!-- Include Bootstrap Css -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <!-- Include Bootstrap Min Css -->
  <link rel="stylesheet" href="assets/css/bootstrap-theme.min.css">
  <!-- Include Animate Min Css -->
  <link rel="stylesheet" href="assets/css/animate.min.css">
  <!-- Include Fontawesome Min Css -->
  <link rel="stylesheet" href="assets/css/font-awesome.min.css">
  <!-- Include Magnific PopUp Css -->
  <link rel="stylesheet" href="assets/css/magnific-popup.css">
  <!-- bxSlider CSS file -->
  <link href="assets/css/jquery.bxslider.css" rel="stylesheet" />
  <!-- Include Style Css -->
  <link rel="stylesheet" href="assets/css/style.css">
  <!-- Include Responsive Css -->
  <link rel="stylesheet" href="assets/css/responsive.min.css">
  <!-- Include Hover Css -->
  <link rel="stylesheet" href="assets/css/hover.css">
  <link rel="stylesheet" href="assets/css/jquery.bxslider.css">
  <!-- Include Modernizer Js -->
  <script src="assets/js/modernizr-2.8.3-respond-1.4.2.min.js"></script>
  <!-- <script src="mail.js"></script> -->
  <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
      ga('create', 'UA-77468075-2', 'auto');
      ga('send', 'pageview');
  </script>
  <!--Start of Zopim Live Chat Script-->
<script type="text/javascript">
window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s=
d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
_.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute("charset","utf-8");
$.src="//v2.zopim.com/?46ESODXcVV7JGDsuKPS0qQAYRD8bXnPa";z.t=+new Date;$.
type="text/javascript";e.parentNode.insertBefore($,e)})(document,"script");
</script>
<!--End of Zopim Live Chat Script-->
</head>
<body>
  <header id="masthead" class="masthead navbar navbar-default navbar-fixed-top">
    <div class="container">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            MENU <i class="fa fa-bars"></i> 
          </button>
        <a href="http://manns-solutions.com/" class="navbar-brand"><img src="images/logo-text.png" alt="Site Logo"></a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <nav id="main-menu" class="collapse navbar-collapse pull-right">
        <ul class="nav navbar-nav">
          <li><a href="#!" data-toggle="modal" data-target="#login-modal" class="framed">Request a phone call</a></li>
          <li><a href="tel:+442079936346" class="framed"><img class="callFlag" src="images/flags/uk.png"> +44 (0) 207 99 36 346</a></li>
          <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">LANGUAGES <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#" class="center-block">English<img class="language-flag" src="images/flags/uk.png"></a></li>
              </ul>
            </li>
            <li><a href="#!" id="contactus">CONTACT US</a></li>   
        </ul>
      </nav>
    </div>
  </header>
    
  <a href="#top" id="top-link"><i class="fa fa-arrow-up fa-3x" aria-hidden="true"></i></a>
  
    
  <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    	  <div class="modal-dialog">
				<div class="loginmodal-container">
				    <button type="button" class="close" data-dismiss="modal" aria-label="Close" aria-hidden="true"><i class="fa fa-times-circle-o fa-2x" aria-hidden="true"></i></button>
					<h1>Request a callback</h1><br>
				  <form method="post">
					<input type="text" name="user" placeholder="Full Name" required>
					<input type="text" name="num" placeholder="Phone Number" required pattern="^\s*\(?(020[7,8]{1}\)?[ ]?[1-9]{1}[0-9{2}[ ]?[0-9]{4})|(0[1-8]{1}[0-9]{3}\)?[ ]?[1-9]{1}[0-9]{2}[ ]?[0-9]{3})\s*$">
					<input type="text" name="email" placeholder="E-mail Address" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
					<input type="submit" name="login" class="login loginmodal-submit" value="Request a call">
				  </form>
				  <div class="modal-footer">
                    <p class="text-center">We will contact you <br>as soon as possible</p>
                  </div>
				  
				</div>
          </div>
  </div>
  
<!-- terms and conditions Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title text-center" id="myModalLabel">Terms & Conditions </h4>
      </div>
      <div class="modal-body">
        <p>Welcome to our website. If you continue to browse and use this website, you are agreeing to comply with and be bound by the following terms and conditions of use, which together with our privacy policy govern Mann's Solutions's relationship with you in relation to this website. If you disagree with any part of these terms and conditions, please do not use our website.<br><br>
            
        The term Mann's Solutions or 'us' or 'we' refers to the owner of the website whose registered office is 3 Devonshire Street, London, W1W 5DT. Our company registration number is [company registration number and place of registration]. The term 'you' refers to the user or viewer of our website.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
  
  <div class="bs-example">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Carousel indicators -->
          
        <!-- Wrapper for carousel items -->
        <div class="carousel-inner">
            <div class="item active">
                <img class="img-carousel" src="images/slider/1.jpg" alt="First Slide">
                <div class="carousel-caption">
                  <h1 class="slider-title" data-animation="wow animated bounceInDown"><span style="color:white;">Mann's Solutions</span></h1>
              <p class="slide-description">Immigration Law Firm</p>
               <div id="arrowtoaboutus" class="arrow bounce">&nbsp;</div>
                </div>
            </div>
            
        </div>
        <!-- Carousel controls -->
    </div>
</div>
                           
  <section id="about" class="about">
    <div class="about-top">
      <div class="section-padding">
        <div class="container">
          <div class="row">
            <div class="col-md-7">
              <div class="know-about-us wow animated fadeInLeft" data-wow-delay=".5s">
                <h2 class="section-title"><span>About Us</span></h2>
                <p style="color:black;">
                  Mann's Solutions provides assistance in immigration, business, property and finance. We help our clients to obtain individual visas (Tier 2, Tier 4, Turkish Worker Visas), business visas (Tier 1 Investor and Entrepreneur, Sole Representative,

                Turkish Business person) and corporate visas (Tier 2 Sponsor, Tier 4 Sponsor).

                We are dedicated to providing the best services and guidance for assisting

                clients to live, set up business and establish themselves in the UK successfully

                and smoothly.<br><br>

                Mann's Solutions is a professional team of advisors which own 40 years’

                combined experience in immigration, investment, accounting and business

                services field. Our consulting services are provided in English, Russian, Turkish,

                Arabic and Chinese languages.
                </p>
              </div>
            </div>

            <div class="col-md-5">
              <div class="our-skills wow animated fadeInRight" data-wow-delay=".5s">
                <h4 class="section-title regtitle"><img class="oisc img-responsive" src="images/oisc.jpg"><span>
                Regulated by the<br>Office of the Immigration <br>Services <br>Commissioner</span></h4>
                <p class="description">
                  
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="immigration" class="testimonial text-center" data-stellar-background-ratio="0.1" data-stellar-vertical-offset="0">
  <!-- <section id="immigration" class="portfolio services text-center"> -->
    <div class="pattern-overlay">
      <div class="section-padding">
        <div class="container">
          <div class="row">
            <div class="section-top wow animated fadeInUp" data-wow-delay=".5s">
              <h1 class="section-title"><span>Immigration Solutions</span> </h1>
              <p class="section-description">
                We work in many different visas but we expertise in
              </p>
            </div>

            <div class="section-details">
              <div class="service-details">

                <div class="col-md-4 col-sm-6">
                  <div  class="item wow animated fadeInLeft" data-wow-delay=".35s">
                    <div class="item-details">
                      <h3 class="item-title">IMMIGRATION FOR BUSINESS </h3>
                      
                          <span class="fa-stack fa-4x">
                              <i class="fa fa-circle fa-stack-2x icon-background3"></i>
                              <i class="fa fa-cogs fa-stack-1x"></i>
                          </span>
                      
                      <div class="text-center">
                           
                            <a href="#!" class="show_hide2 text-center vistypesback" data-content="toggle-text">&nbsp; </a>
                            
                                <div class="listofvisas" id="listofvisas" >
                                   
                                    <ul>
                                      <li><a href="#!" id="tier1entvisa">Tier 1 Entrepreneur Visa</a></li>
                                      <li><a href="#!" id="tier1invisa">Tier 1 Investor Visa</a></li>
                                      <li><a href="#!" id="sole1invisa">Sole Representative Visa</a></li>
                                      <li><a href="#!" id="turkishvia">Turkish Business Person Visa</a></li>
                                   </ul>
                                </div>
                        </div>
                      
                    </div>
                  </div>
                </div>

                <div class="col-md-4 col-sm-6">
                  <div  class="item wow animated fadeInLeft" data-wow-delay=".5s">
                    <div class="item-details">
                      <h3 class="item-title">IMMIGRATION FOR INDIVIDUALS</h3>
                      <span class="fa-stack fa-4x">
                          <i class="fa fa-circle fa-stack-2x icon-background3"></i>
                          <i class="fa fa-users fa-stack-1x"></i>
                      </span>
                      
                      <div class="text-center">
                            
                            <a href="#!" class="show_hide2 text-center vistypesback" data-content="toggle-text">&nbsp;</a>
                            
                                <div class="listofvisas" id="listofvisas" >
                                    <ul>
                                      <li><a href="#!" id="generaltier2">Tier 2 (General) Visa</a></li>
                                      <li><a href="#!" id="tier4studvisa">Tier 4 Student Visa</a></li>
                                      <li><a href="#!" id="tuworkervisa">Turkish Worker Visa</a></li>
                                      <li><a href="#!" id="irlnat">ILR & Naturalisation</a></li>
                                      <li><a href="#!" id="eeaec">EEA European Citizens</a></li>
                                   </ul>
                                </div>
                        </div>
                    </div>
                  </div>
                </div>

                <div class="col-md-4 col-sm-6">
                  <div  class="item wow animated fadeInRight" data-wow-delay=".35s">
                    <div class="item-details">
                      <h3 class="item-title">CORPORATE <br>IMMIGRATION</h3>
                      <span class="fa-stack fa-4x">
                          <i class="fa fa-circle fa-stack-2x icon-background3"></i>
                          <i class="fa fa-university fa-stack-1x"></i>
                      </span>
                      
                      <div class="text-center">
                            
                            <a href="#!" class="show_hide2 text-center vistypesback" data-content="toggle-text">&nbsp;</a>
                            
                                <div class="listofvisas" id="listofvisas" >
                                    <ul>
                                      <li><a href="#!" id="t2sponsor">Tier 2 Sponsor License</a></li>
                                      <li><a href="#!" id="t4sponsor">Tier 4 Sponsor License</a></li>
                                      <li><a href="#!" id="comsupport">Compliance Support</a></li>
                                  </ul>
                                </div>
                        </div>
                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section> 
  

    
        <section id="entrepreneur"> 
            <div class="testimonials" >
               <div class="text">
                <div class="container">
                 <div class="section-padding center-visa">
                 <div class="col-md-4">
                  <div class="about-work wow animated fadeInRight" data-wow-delay=".5s">
                   <h2 class="section-title"><span>Tier 1 Entrepreneur Visa</span></h2>
                    <p class="description" style="color:white;">
                      The Tier 1 (Entrepreneur) category of the Points Based System is for those investing in the United Kingdom by setting up or taking over, and being actively involved in the running of one or more businesses in the United Kingdom.
                      <br> <br>
                      An individual can apply under this type of visa if they want to set up or take over, and be involved in running a business. The successful applicant will need to score a total of 95 points on the Points Based System and meet all the necessary requirements under the Immigration Rules. You can achieve these points by having access to no less than £200 000 or £50 000.
                      <br><br>
                      We can help applicants prepare the necessary documents for a successful application.
                    </p>
                  </div>
                </div>
            
                     <p><a href="#!" ><i class="fa fa-times fa-2x" aria-hidden="true" id="exitentrepreneur" style="float:right;"></i></a></p>
                  <div class="about-work wow animated fadeInRight" data-wow-delay=".5s">
                    <br>
                    <div class="visa-row row">
                  <div class="visa-table text-center col-md-8">
                    <div class="table"  class="wow animated fadeInLeft" data-wow-delay=".5s">

                      <div class="top-buffer row ">
                       <h2 style="text-align:left;">What are you getting:</h2>
                       <br><br>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                          <div class="row"><p class="benefit-title" style="color:white;">ILR</p></div>
                          <div class="row"><p class="benefit-text" style="color:white;">3 or 5 years</p></div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                          <div class="row"><p class="benefit-title" style="color:white;">NATURALISATION</p></div>
                          <div class="row"><p class="benefit-text" style="color:white;">can apply for naturalisation after 6 years</p></div>
                        </div>
                      </div>

                      <div class="bot-buffer row">
                       <h2 style="text-align:left; padding-left:50px;"><span>Benefits</span></h2>
                       <br><br>
                        <div class="visa-first visa-item col-md-2">
                          <div class="row"><img class="visa-info" src="images/visa-table/family.png"></div>
                          <div class="row">Visa is issued for the whole family</div>
                        </div>
                        <div class="visa-item col-md-2">
                          <div class="row"><img class="visa-info" src="images/visa-table/pass.png"></div>
                          <div class="row">Visa-free entry in 174 countries</div>
                        </div>
                        <div class="visa-item col-md-2">
                          <div class="row"><img class="visa-info" src="images/visa-table/tax.png"></div>
                          <div class="row">Attractive TAX system</div>
                        </div>
                        <div class="visa-item col-md-2">
                          <div class="row"><img class="visa-info" src="images/visa-table/education.png"></div>
                          <div class="row">Luxury education system</div>
                        </div>
                        <div class=" visa-item col-md-2">
                          <div class="row"><img class="visa-info" src="images/visa-table/registration.png"></div>
                          <div class="row">Selection / Registration business</div>
                        </div>
                      </div>
                    </div>
                  </div>
                  </div>
                </div>
                  </div>
            
                <div class="row">
                  <div class="col-md-4 info-button" style="t"><a href="#!" class="ask" data-toggle="modal" data-target="#login-modal">Get More Details</a>
                  </div>
                  
                  <div class="col-md-4 info-button" style="t"><a href="#frank" class="ask" data-toggle="modal" data-target="#login-modal">Free Consultation</a>
                  </div>
                 
                  <div class="col-md-4 info-button" style="t"><a href="assessment" class="ask">Free Assessment</a>
                  </div>
                </div>
                <br><br>
                
                <div class="text-center">
                    <a href="#!" class="show_hide text-center" data-content="toggle-text" style=" margin-top: 1000px;">More Information</a>
                <div class="content containter" style="text-align:left;color:white;">
                    <p style="text-align:left;color:white;">
                    The Tier 1 (Entrepreneur) visa is designed for individuals who would like to relocate to the UK by setting up or run a business in the UK and has available funds to invest. Applicants can bring their family members, which includes a spouse/civil partner and children under the age of 18.</p>
                    <ul class="readmorelist">
                        <li>The applicant will need to invest £200 000 or £50 000;</li>
                        <li>Granted for 3 years and 4 months and can be extended as long as you created a business and new jobs;</li>
                        <li>The visa holder is permitted 180 days outside of the UK per year;</li>
                        <li>To apply for Leave to remain (ILR) after 5 years of continuous residence, so long as the applicant has not left the UK for more than 450 days and 90 days during the final 12 months;</li>
                        <li>To apply for Naturalisation, the visa holders after 6 years of continuous residence, same restrictions on leaving the UK apply;</li>
                    </ul>
                </div>
                </div>
                </div>
                <br>
              </div>
              </div>
          </section>
      

  
  
        <section id="investor"> 
           <div class="investorsback">
           <div class="text">
            <div class="about-bottom">
             <div class="container">
              <div class="section-padding">

                <div class="col-md-4">
                  <div class="about-work wow animated fadeInRight" data-wow-delay=".5s">
                    <h2 class="section-title"><span>Tier 1 Investor Visa</span></h2>
                    <p class="description">
                      The Tier 1 (Investor) category of the Points Based System is for those investing in the United Kingdom a certain amount of money.
                      <br><br>
                      An individual can apply for this type of visa if they want to make a substantial investment in the UK. This category is designed to permit a person of high net-worth to make an extraordinary investment. The individual in question will not require a job offer or a sponsor to apply. However, the applicant will need to invest a minimum of £2 million in the UK and achieve 75 points on the Points Based System. On the other hand, the applicant will not need to meet the English Language Requirement, nor show any proof that them can support and maintain themselves.
                      <br> <br>
                      We can help applicant prepare the necessary documents for a successful application.
                    </p>
                  </div>
                </div>
                 <p><a href="#!" ><i class="fa fa-times fa-2x" aria-hidden="true" id="exitinvestor" style="float:right;"></i></a></p>
                <br>
                 <div class="visa-row row">
                  <div class="visa-table text-center col-md-8">
                    <div class="table"  class="wow animated fadeInLeft" data-wow-delay=".5s">
                      <div class="top-buffer row">
                       <h2 style="text-align:left;">What are you getting:</h2>
                       <br><br>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                          <div class="row"><p class="benefit-title">ILR</p></div>
                          <div class="row"><p class="benefit-text">after 5 years of residence in the UK</p></div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                          <div class="row"><p class="benefit-title">NATURALISATION</p></div>
                          <div class="row"><p class="benefit-text">in the 6th year</p></div>
                        </div>
                      </div>

                      <div class="bot-buffer row">
                       <h2 style="text-align:left; padding-left:50px;"><span>Benefits</span></h2>
                       <br><br>
                        <div class="visa-first visa-item col-md-2">
                          <div class="row"><img class="visa-info" src="images/visa-table/language.png"></div>
                          <div class="row">You do not need knowledge of the language</div>
                        </div>
                        <div class="visa-item col-md-2">
                          <div class="row"><img class="visa-info" src="images/visa-table/family.png"></div>
                          <div class="row">Visa is issued for the whole family</div>
                        </div>
                        <div class="visa-item col-md-2">
                          <div class="row"><img class="visa-info" src="images/visa-table/pass.png"></div>
                          <div class="row">Visa-free entry in 174 countries</div>
                        </div>
                        <div class="visa-item col-md-2">
                          <div class="row"><img class="visa-info" src="images/visa-table/tax.png"></div>
                          <div class="row">Attractive TAX system</div>
                        </div>
                        <div class="visa-item col-md-2">
                          <div class="row"><img class="visa-info" src="images/visa-table/education.png"></div>
                          <div class="row">Luxury education system</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  
                  <div class="row">
                  <div class="col-md-4 info-button" style="t"><a href="#!" class="ask" data-toggle="modal" data-target="#login-modal">Submit to our Lawyers</a>
                  </div>
                  
                  <div class="col-md-4 info-button" style="t"><a href="#!" class="ask" data-toggle="modal" data-target="#login-modal">Free Consultation</a>
                  </div>
                 
                  <div class="col-md-4 info-button" style="t"><a href="assessment" class="ask">Free Assessment</a>
                  </div>
                </div>
                </div>
                </div>
                <div class="text-center">
                    <a href="#!" class="show_hide text-center" data-content="toggle-text">More Information</a>
                <div class="content" style="text-align: left;">
                    <p>
                        The Tier 1 (Investor) visa is designed for high net worth individuals who would like to relocate to the UK by investing at least £ 2 million to the British Economy. Applicants can bring their family members with them, such as a spouse/civil partner and children under the age of 18.
                    </p>
                    <ul class="readmorelist">
                        <li>The applicant will need to invest £2 million or more.</li>
                        <li>There are no requirements concerning the individual’s language skills, nationality or business experience.</li>
                        <li>The visa is granted for 3 years and 4 months and can be extended for an additional 2 years.</li>
                        <li>The number of days an applicant is permitted to spend outside the UK is 180 days per year.</li>
                        <li>How fast an applicant can apply for Indefinite Leave to Remain (ILR) will depend on the invested amount.</li>
                        <li>Holders are eligible to apply for Naturalisation after 6 years of continuous residence.</li>
                    </ul>
                </div>
                </div>
              </div>
              <br>
            </div>
            </div>
            </div>
          </section>
  
  
    <section id="sole"> 
    <div class="soleback">
           <div class="text">
    <div class="about-bottom">
     <div class="container">
      <div class="section-padding center-visa">
        <div class="col-md-4">
          <div class="about-work wow animated fadeInRight" data-wow-delay=".5s">
            <h2 class="section-title"><span>Sole Representative Visa</span></h2>
            <p class="description">
              The Sole Representative Visa is for those individuals who apply to come to the UK as a representative of an overseas business.
              <br><br>
              The advantage of this category is that the individual is not required to have any defined financial resources with which to establish the UK branch, as it is expected that the parent company would provide the necessary capital. By sending an individual to the UK to act as a representative it must be for the benefit of the organization and not for the benefit of the candidate. So the funds allocated to the representative cannot be too unrealistic in the terms of its size, trading activities or the prospect of profitability.
              <br> <br>
              We can help applicant prepare the necessary documents for a successful application.
            </p>
          </div>
        </div>
        <p><a href="#!" ><i class="fa fa-times fa-2x" aria-hidden="true" id="exitsole" style="float:right;"></i></a></p>
        <br>
        <div class="visa-row row">
          <div class="visa-table text-center col-md-8">
            <div class="table"  class="wow animated fadeInLeft" data-wow-delay=".5s">
              
              <div class="top-buffer row">
               <h2 style="text-align:left;">What are you getting:</h2>
                       <br><br>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                  <div class="row"><p class="benefit-title">ILR</p></div>
                  <div class="row"><p class="benefit-text">after 5 years of residence in the UK</p></div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                  <div class="row"><p class="benefit-title">NATURALISATION</p></div>
                  <div class="row"><p class="benefit-text">in the 6th year</p></div>
                </div>
              </div>

              <div class="bot-buffer row">
               <h2 style="text-align:left; padding-left:50px;"><span>Benefits</span></h2>
                       <br><br>
                <div class="visa-first visa-item col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
                <div class="visa-first visa-item col-md-2">
                  <div class="row"><img class="visa-info" src="images/visa-table/representative.png"></div>
                  <div class="row">Only 1 representative of overseas company</div>
                </div>
                <div class="visa-item col-md-2">
                  <div class="row"><img class="visa-info" src="images/visa-table/family.png"></div>
                  <div class="row">Issued for a family for 3 years (with an option to extend for 2 years)</div>
                </div>
                <div class="visa-item col-md-2">
                  <div class="row"><img class="visa-info" src="images/visa-table/international.png"></div>
                  <div class="row">Joined head office outside the UK</div>
                </div>
                <div class="visa-item col-md-2">
                  <div class="row"><img class="visa-info" src="images/visa-table/confirmation.png"></div>
                  <div class="row">Confirmation of profitability of business</div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="row">
                  <div class="col-md-4 info-button" style="t"><a href="#!" class="ask" data-toggle="modal" data-target="#login-modal">Submit to our Lawyers</a>
                  </div>
                  
                  <div class="col-md-4 info-button" style="t"><a href="#!" class="ask" data-toggle="modal" data-target="#login-modal">Free Consultation</a>
                  </div>
                 
                  <div class="col-md-4 info-button" style="t"><a href="assessment" class="ask">Free Assessment</a>
                  </div>
         </div>
        </div>
        </div>
        <div class="text-center">
            <a href="#!" class="show_hide text-center" data-content="toggle-text">More Information</a>
        <div class="content" style="text-align:left;">
                    <p>The Sole Representative Visa is designed for companies, when they would like to establish the first commercial presence in the UK, such as a branch or subsidiary. The company will need to send a senior employee of the overseas business to Britain and establish a branch or wholly owned subsidiary with the same type of business as the overseas company.</p>
                    <ul class="readmorelist">
                        <li>To apply a senior employee will need to be recruited by an overseas company who has no UK branch.</li>
                        <li>The applicant will need Basic English language ability and take all operational decisions on behalf of the newly established branch or subsidiary.</li>
                        <li>This type of visa is granted for 3 years and can be extended for another 2 years.</li>
                        <li>The applicant can apply for Indefinite Leave to Remain (ILR) after 5 years of continuous stay and needs to stay with the same company.</li>
                        <li>The applicant can apply for British Citizenship after 6 years of continuous residence in the UK.</li>
                        <li>The number of days permitted to spend outside the UK is no more than 450 during 5 years and no more than 90 days during the final 12 months.</li>
                    </ul>
                </div>
        </div>
      </div>
       <br>
        </div>  
        </div>
        </div>  
   </section> 
   

   <section id="turkish"> 
   <div class="turkback">
    <div class="text">
    <div class="about-bottom">
     <div class="container">
      <div class="section-padding center-visa">

        <div class="col-md-4">
          <div class="about-work wow animated fadeInRight" data-wow-delay=".5s">
            <h2 class="section-title"><span>Turkish Business Person Visa</span></h2>
            <p class="description">
              This type of visa permits Turkish nationals to establish themselves as a worker or in a business in the UK. At also achieves them residency rights in the UK. The old provisions introduced in 1973 apply to all Turkish applicants, which makes the process more smooth and flexible. However, if the applicant can be prevented from benefiting from the European Community Association Agreement (ECAA) if there is proof that there is a breach of UK Immigration laws. If this were to happen the applicant will be subjected to the points-based system that is currently operated.
              <br> <br>
              We can help applicant prepare the necessary documents for a successful application.
            </p>
          </div>
        </div>
        <p><a href="#!" ><i class="fa fa-times fa-2x" aria-hidden="true" id="exitturkish" style="float:right;"></i></a></p>
        <br>
        <div class="visa-row row">
          <div class="visa-table text-center col-md-8">
            <div class="table"  class="wow animated fadeInLeft" data-wow-delay=".5s">
              
              <div class="top-buffer row">
                <h2 style="text-align:left;">What are you getting:</h2>
                       <br><br>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                  <div class="row"><p class="benefit-title">ILR</p></div>
                  <div class="row"><p class="benefit-text">after 5 years of residence in the UK</p></div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                  <div class="row"><p class="benefit-title">NATURALISATION</p></div>
                  <div class="row"><p class="benefit-text">after 12 months of receiving ILR</p></div>
                </div>
              </div>

              <div class="bot-buffer row">
               <h2 style="text-align:left; padding-left:50px;"><span>Benefits</span></h2>
                       <br><br>
                <div class="visa-first visa-item col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
                <div class="visa-first visa-item col-md-2">
                  <div class="row"><img class="visa-info" src="images/visa-table/representative.png"></div>
                  <div class="row">Establish a business in the UK</div>
                </div>
                <div class="visa-item col-md-2">
                  <div class="row"><img class="visa-info" src="images/visa-table/family.png"></div>
                  <div class="row">Your family can come with you</div>
                </div>
                <div class="visa-item col-md-2">
                  <div class="row"><img class="visa-info" src="images/visa-table/international.png"></div>
                  <div class="row">Joined head office outside the UK</div>
                </div>
                <div class="visa-item col-md-2">
                  <div class="row"><img class="visa-info" src="images/visa-table/confirmation.png"></div>
                  <div class="row">No job creation requirement</div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="row">
                  <div class="col-md-4 info-button" style="t"><a href="#!" class="ask" data-toggle="modal" data-target="#login-modal">Submit to our Lawyers</a>
                  </div>
                  
                  <div class="col-md-4 info-button" style="t"><a href="#!" class="ask" data-toggle="modal" data-target="#login-modal">Free Consultation</a>
                  </div>
                 
                  <div class="col-md-4 info-button" style="t"><a href="assessment" class="ask">Free Assessment</a>
                  </div>
         </div>
        </div>
        </div>
        <div class="text-center">
            <a href="#!" class="show_hide text-center" data-content="toggle-text">More Information</a>
        <div class="content" style="text-align:left;">
                    <p>The European Community Association Agreement (ECAA) allows Turkish nationals to enter the UK and establish themselves as a self-employed business person or as a worker in the UK.</p>
                    <ul class="readmorelist">
                        <li>The applicant has to be a Turkish national;</li>
                        <li>Have a genuine intention to set up a viable business or you can join an already existing partnership or company;</li>
                        <li>Be able to demonstrate that the share of profits will be enough to support themselves and, if applicable, a family without the need to have another job or ask for public funds;</li>
                        <li>You can apply to extend if you can show proof you are still established in a business;</li>
                        <li>After 5 years of continuous stay an applicant can apply for Indefinite Leave to Remain (ILR);</li>
                        <li>After 6 years of continuous stay an applicant can apply for Naturalisation;</li>
                    </ul>
                </div>
        </div>
      </div>
       <br>
        </div> 
       </div>
       </div>   
   </section> 
   
   <section id="tier2visa"> 
   <div class="tier2visa">
    <div class="text">
    <div class="about-bottom">
     <div class="container">
      <div class="section-padding center-visa">

        <div class="col-md-4">
          <div class="about-work wow animated fadeInRight" data-wow-delay=".5s">
            <h2 class="section-title"><span>Tier 2 (General) Visa</span></h2>
            <p class="description">
              Tier 2 (General) visa is now one of the most important entry routes in the United Kingdom for skilled workers that are citizens of those countries that are outside of the European Economic Area. This type of visa has 4 categories: General (for the people coming to the UK with a valid job offer to fill a position that cannot be filled by a settled worker); Intra Company Transfers ( for employees of multi-national companies who are being transferred by an overseas employer to a skilled job in a UK-based branch of the organisation); Sports People (elite sportspeople and coaches whose employment will make a significant contribution to the development of their sport) and Minister of Religion (for those people coming to fill a vacancy as a Minister of Religion, Missionary or Member of a Religious Order).
              <br> <br>
              We can help applicant prepare the necessary documents for a successful application.
            </p>
          </div>
        </div>
        <p><a href="#!" ><i class="fa fa-times fa-2x" aria-hidden="true" id="exittier2visa" style="float:right;"></i></a></p>
        <br>
        <div class="visa-row row">
          <div class="visa-table text-center col-md-8">
            <div class="table"  class="wow animated fadeInLeft" data-wow-delay=".5s">
              
              <div class="top-buffer row">
                <h2 style="text-align:left;">What are you getting:</h2>
                       <br><br>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                  <div class="row"><p class="benefit-title">ILR</p></div>
                  <div class="row"><p class="benefit-text">after 5 years of residence in the UK</p></div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                  <div class="row"><p class="benefit-title">NATURALISATION</p></div>
                  <div class="row"><p class="benefit-text">after 12 months of receiving ILR</p></div>
                </div>
              </div>

              <div class="bot-buffer row">
               <h2 style="text-align:left; padding-left:50px;"><span>Benefits</span></h2>
                       <br><br>
                <div class="visa-first visa-item col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
                <div class="visa-first visa-item col-md-2">
                  <div class="row"><img class="visa-info" src="images/visa-table/representative.png"></div>
                  <div class="row">First time applicants can receive up to a 5-year visa</div>
                </div>
                <div class="visa-item col-md-2">
                  <div class="row"><img class="visa-info" src="images/visa-table/family.png"></div>
                  <div class="row">You can bring your family with you</div>
                </div>
                <div class="visa-item col-md-2">
                  <div class="row"><img class="visa-info" src="images/visa-table/international.png"></div>
                  <div class="row"> Travel abroad and return to the UK</div>
                </div>
                <div class="visa-item col-md-2">
                  <div class="row"><img class="visa-info" src="images/visa-table/confirmation.png"></div>
                  <div class="row">Study if it does not interfere with your work</div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="row">
                  <div class="col-md-4 info-button" style="t"><a href="#!" class="ask" data-toggle="modal" data-target="#login-modal">Submit to our Lawyers</a>
                  </div>
                  
                  <div class="col-md-4 info-button" style="t"><a href="#!" class="ask" data-toggle="modal" data-target="#login-modal">Free Consultation</a>
                  </div>
                 
                  <div class="col-md-4 info-button" style="t"><a href="assessment" class="ask">Free Assessment</a>
                  </div>
         </div>
        </div>
        </div>
        <div class="text-center">
            <a href="#!" class="show_hide text-center" data-content="toggle-text">More Information</a>
        <div class="content" style="text-align:left;">
                    <p>To apply for a Tier 2 (General) visa, you must be a skilled worker from outside of the European Union and have a Certificate of Sponsorship (CoS) from a UK employer who holds a valid Tier 2 Sponsorship Licence. There is a limit to how many CoS company in UK can issue. Individuals who earn over £150,000 a year are excluded from this limitation.</p>
                    <ul class="readmorelist">
                        <li>This visa is applied for from outside the UK;</li>
                        <li>The visa holder is applying for an extension;</li>
                        <li>The applicant must have a valid job offer from a licenced UK employer;</li>
                        <li>Meet certain UKBA maintenance requirements;</li>
                        <li>Meet the necessary English requirements;</li>
                        <li>You can apply for an extension to this type of visa working under the same employer;</li>
                        <li>To switch an employer a visa holder would need to complete the Resident Labour Market test;</li>
                        <li>This visa is granted for a maximum of 5 years and 14 days;</li>
                        <li>After 5 years of continuous residence the visa holder can apply for Indefinite Leave to Remain (ILR);</li>
                        <li>After 6 years of continuous residence the holder can apply for Naturalisation;</li>
                    </ul>
                </div>
        </div>
      </div>
       <br>
        </div>    
       </div>
       </div>
   </section> 
   
   <section id="tier4studentvisa"> 
   <div class="tier4visaback">
    <div class="text">
    <div class="about-bottom">
     <div class="container">
      <div class="section-padding center-visa">

        <div class="col-md-4">
          <div class="about-work wow animated fadeInRight" data-wow-delay=".5s">
            <h2 class="section-title"><span>Tier 4 Student Visa</span></h2>
            <p class="description">
              Students that wish to come to the United Kingdom under a Tier 4 student visa require a university, college or a similar educational institution that hold a valid licence to sponsor them. The current system grants student visas for an initial period which varies depending on the length of the course. In general, Tier 4 students can stay in the UK for the duration of a course plus 4 months (a course lasting one year or more) or two months (for courses between six months and a year). Shorter course students can only stay a week after the course is finished.
              <br> <br>
              We can help applicant prepare the necessary documents for a successful application.
            </p>
          </div>
        </div>
        <p><a href="#!" ><i class="fa fa-times fa-2x" aria-hidden="true" id="exittier4studentvisa" style="float:right;"></i></a></p>
        <br>
        <div class="visa-row row">
          <div class="visa-table text-center col-md-8">
            <div class="table"  class="wow animated fadeInLeft" data-wow-delay=".5s">
              
              <div class="top-buffer row">
               <h2 style="text-align:left;">What are you getting:</h2>
                       <br><br>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                  <div class="row"><p class="benefit-title">ILR</p></div>
                  <div class="row"><p class="benefit-text">10 years under long residency principle</p></div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                  <div class="row"><p class="benefit-title">NATURALISATION</p></div>
                  <div class="row"><p class="benefit-text">only possible by switching Tiers</p></div>
                </div>
              </div>

              <div class="bot-buffer row text-center">
               <h2 style="text-align:left; padding-left:50px;"><span>Benefits</span></h2>
                       <br><br>
                <div class="visa-first visa-item col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
                <div class="visa-first visa-item col-md-2">
                  <div class="row"><img class="visa-info" src="images/visa-table/representative.png"></div>
                  <div class="row">Luxury education system</div>
                </div>
                
                <div class="visa-item col-md-2">
                  <div class="row"><img class="visa-info" src="images/visa-table/international.png"></div>
                  <div class="row">Study in the UK for your required period</div>
                </div>
                <div class="visa-item col-md-2">
                  <div class="row"><img class="visa-info" src="images/visa-table/confirmation.png"></div>
                  <div class="row">Choose any educational facility to match what you need</div>
                </div>
                <div class="visa-item col-md-2">
                  <div class="row"><img class="visa-info" src="images/visa-table/representative.png"></div>
                  <div class="row">Apply to extend your stay</div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="row">
                  <div class="col-md-4 info-button" style="t"><a href="#!" class="ask" data-toggle="modal" data-target="#login-modal">Submit to our Lawyers</a>
                  </div>
                  
                  <div class="col-md-4 info-button" style="t"><a href="#!" class="ask" data-toggle="modal" data-target="#login-modal">Free Consultation</a>
                  </div>
                 
                  <div class="col-md-4 info-button" style="t"><a href="assessment" class="ask">Free Assessment</a>
                  </div>
         </div>
        </div>
        </div>
        <div class="text-center">
            <a href="#!" class="show_hide text-center" data-content="toggle-text">More Information</a>
        <div class="content" style="text-align:left;">
                    <p>This type of visa for students and children who are non-European and they wish to come to the UK not just to study but to exprience the lifestyle and culture of this country. </p>
                    <ul class="readmorelist">
                        <li>This visa is split into two categories, one is for students (16 years old or older) and children (aged 4-17).</li>
                        <li>You must have secured a place to study a UK based institution that is allowed to sponsor students.</li>
                        <li>You cannot study below degree level if the course includes a work placement unless this is provided by a university, college or training provider with a status of “highly trusted sponsor”.</li>
                        <li>You can bring dependent family members with you.</li>
                        <li>It is possibly to apply as a short term student.</li>
                    </ul>
                </div>
        </div>
      </div>
       <br>
        </div>  
       </div>
       </div>  
   </section> 
   
   <section id="turkishworker"> 
   <div class="turkishworkerback">
    <div class="text">
    <div class=" about-bottom">
     <div class="container">
      <div class="section-padding center-visa">

        <div class="col-md-4">
          <div class="about-work wow animated fadeInRight" data-wow-delay=".5s">
            <h2 class="section-title"><span>Turkish Worker Visa</span></h2>
            <p class="description">
              A Turkish national who is legally employed in the United Kingdom is also allowed to apply for a visa extension to prolong his/her stay. To be able to qualify for this category the individual in question has to have had a valid visa (e.g. Tier 1, Tier 2 or any other similar visa) that gave them permission to work in the UK legally (they must also have worked for the same employer). If the applicant is successful in their visa extension, they will be allowed to stay in the UK as a Turkish ECAA (European Community Association Agreement) worker.
              <br> <br>
              We can help applicant prepare the necessary documents for a successful application.
            </p>
          </div>
        </div>
        <p><a href="#!" ><i class="fa fa-times fa-2x" aria-hidden="true" id="exitturkishworker" style="float:right;"></i></a></p>
        <br>
        <div class="visa-row row">
          <div class="visa-table text-center col-md-8">
            <div class="table"  class="wow animated fadeInLeft" data-wow-delay=".5s">
              <div class="top-buffer row">
               <h2 style="text-align:left;">What are you getting:</h2>
                       <br><br>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                  <div class="row"><p class="benefit-title">ILR</p></div>
                  <div class="row"><p class="benefit-text">can only apply for extensions</p></div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                  <div class="row"><p class="benefit-title">NATURALISATION</p></div>
                  <div class="row"><p class="benefit-text">can only apply for extensions</p></div>
                </div>
              </div>

              <div class="bot-buffer row">
               <h2 style="text-align:left; padding-left:50px;"><span>Benefits</span></h2>
                       <br><br>
                <div class="visa-first visa-item col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
                <div class="visa-first visa-item col-md-2">
                  <div class="row"><img class="visa-info" src="images/visa-table/representative.png"></div>
                  <div class="row">No job restrictions</div>
                </div>
                <div class="visa-item col-md-2">
                  <div class="row"><img class="visa-info" src="images/visa-table/family.png"></div>
                  <div class="row">You can bring your family with you</div>
                </div>
                <div class="visa-item col-md-2">
                  <div class="row"><img class="visa-info" src="images/visa-table/international.png"></div>
                  <div class="row">Extend the visa</div>
                </div>
                <div class="visa-item col-md-2">
                  <div class="row"><img class="visa-info" src="images/visa-table/confirmation.png"></div>
                  <div class="row">No visa application cost</div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="row">
                  <div class="col-md-4 info-button" style="t"><a href="#!" class="ask" data-toggle="modal" data-target="#login-modal">Submit to our Lawyers</a>
                  </div>
                  
                  <div class="col-md-4 info-button" style="t"><a href="#!" class="ask" data-toggle="modal" data-target="#login-modal">Free Consultation</a>
                  </div>
                 
                  <div class="col-md-4 info-button" style="t"><a href="assessment" class="ask" >Free Assessment</a>
                  </div>
         </div>
        </div>
        </div>
        <div class="text-center">
            <a href="#!" class="show_hide text-center" data-content="toggle-text">More Information</a>
        <div class="content" style="text-align:left;">
                    <p>A person may apply for permission to stay in the UK as a Turkish worker if you are a Turkish national and have legally worked in the UK for at least 1 year.</p>
                    <ul class="readmorelist">
                        <li>You must be a Turkish national.</li>
                        <li>Have legally worked in the UK for at least 1 year.</li>
                        <li>You must have worked in the UK for the same employer for the period you are quoting in your application.</li>
                        <li>A successful applicant will be granted a visa up to 4 years.</li>
                        <li>Applicants can bring their spouse/civil partner and children.</li>
                    </ul>
                </div>
        </div>
      </div>
       <br>
        </div>  
       </div>
       </div>  
   </section> 
   
   <section id="ilr"> 
   <div class="ilrback">
    <div class="text">
    <div class="about-bottom">
     <div class="container">
      <div class="section-padding center-visa">

        <div class="col-md-4">
          <div class="about-work wow animated fadeInRight" data-wow-delay=".5s">
            <h2 class="section-title"><span>ILR & Naturalisation</span></h2>
            <p class="description">
              Settlement in the United Kingdom is called ILR (Indefinite Leave to Remain) (or Permanent Residence for EEA nationals). This type of document is granted to those individuals who have already shown a commitment to the UK on a temporary visa or visas.
              <br><br>
                After an individual has lived in the UK for a specific period of time they can apply for ILR which grants them the right to stay in the UK for as long as they wish, and apply for naturalisation.
                <br><br>
                It is possible to become a British citizen by naturalisation or registration. Generally, naturalisation as a British citizen is only possible after obtaining either Permanent Residence (for EEA nationals) or ILR and only after 12 months from the issue date of the residence document.

              <br> <br>
              We can help applicant prepare the necessary documents for a successful application.
            </p>
          </div>
        </div>
        <p><a href="#!" ><i class="fa fa-times fa-2x" aria-hidden="true" id="exitilr" style="float:right;"></i></a></p>
        <br>
        <div class="visa-row row">
          <div class="visa-table text-center col-md-8">
            <div class="table"  class="wow animated fadeInLeft" data-wow-delay=".5s">
              
              <div class="top-buffer row" >
               <h2 style="text-align:left;">What are you getting:</h2>
                       <br><br>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                  <div class="row"><p class="benefit-title">ILR</p></div>
                  <div class="row"><p class="benefit-text"> after 5 years of residence in the UK</p></div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                  <div class="row"><p class="benefit-title">NATURALISATION</p></div>
                  <div class="row"><p class="benefit-text">can be obtain by EU and non-EU citizens after 12 months of receiving ILR or PR</p></div>
                </div>
              </div>

              <div class="bot-buffer row">
               <h2 style="text-align:left; padding-left:50px;"><span>Benefits</span></h2>
                       <br><br>
                <div class="visa-first visa-item col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
                <div class="visa-first visa-item col-md-2">
                  <div class="row"><img class="visa-info" src="images/visa-table/representative.png"></div>
                  <div class="row">By obtaining naturalisation you are no longer subject to immigration rules</div>
                </div>
                <div class="visa-item col-md-2">
                  <div class="row"><img class="visa-info" src="images/visa-table/family.png"></div>
                  <div class="row">Your family can apply with you</div>
                </div>
                <div class="visa-item col-md-2">
                  <div class="row"><img class="visa-info" src="images/visa-table/international.png"></div>
                  <div class="row">No restrictions on travel, residence, work and studies</div>
                </div>
                <div class="visa-item col-md-2">
                  <div class="row"><img class="visa-info" src="images/visa-table/confirmation.png"></div>
                  <div class="row">Can apply with multiple visa types</div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="row">
                  <div class="col-md-4 info-button" style="t"><a href="#!" class="ask" data-toggle="modal" data-target="#login-modal">Submit to our Lawyers</a>
                  </div>
                  
                  <div class="col-md-4 info-button" style="t"><a href="#!" class="ask" data-toggle="modal" data-target="#login-modal">Free Consultation</a>
                  </div>
                 
                  <div class="col-md-4 info-button" style="t"><a href="assessment" class="ask">Free Assessment</a>
                  </div>
         </div>
        </div>
        </div>
        <div class="text-center">
            <a href="#!" class="show_hide text-center" data-content="toggle-text">More Information</a>
        <div class="content" style="text-align:left;">
                    <p>To apply for British citizenship an individual will first need to obtain ILR or Permanent Residence (EEA nationals). Obtaining Naturalisation will mean that a person is no longer subject to immigration control. <br><br>
                    To achieve ILR a person will have to live in the UK for a continuous period of 5 years. Cannot leave the UK for a longer period than 450 days and 90 days during the last 12 months.
                    </p>
                    <ul class="readmorelist">
                        <li>The individual has to be over 18 years old (children will need to register).</li>
                        <li>Achieve the financial and accommodation requirements.</li>
                        <li>English language requirement. </li>
                        <li>Good character.</li>
                        <li>Sound mind.</li>
                        <li>The intention to make UK their home.</li>
                        <li>References proving you have “planted your roots” in the UK.</li>
                    </ul>
                </div>
        </div>
      </div>
       <br>
        </div>   
       </div>
       </div> 
   </section>
   
   <section id="eea"> 
   <div class="eeaback">
    <div class="text">
    <div class="about-bottom">
     <div class="container">
      <div class="section-padding center-visa">

        <div class="col-md-4">
          <div class="about-work wow animated fadeInRight" data-wow-delay=".5s">
            <h2 class="section-title"><span>EEA European Citizens</span></h2>
            <p class="description">
              The Freedom of Movement allows EEA nationals to move freely within the European Union. Those who leave their home country and enter one of the Member States to work, live and/or study is exercising his/her Treaty rights.
              <br><br>
                The EEA Regulations grant the possibility for individuals to obtain permanent residence and bring their family with them, whether they are EEA nationals or are living outside of EU. 
                <br><br>
                EEA nationals can request a residence document after a certain amount of time has passed, granted their stay was for a continuous period without long-term leave.
              <br> <br>
              We can help applicant prepare the necessary documents for a successful application.
            </p>
          </div>
        </div>
        <p><a href="#!" ><i class="fa fa-times fa-2x" aria-hidden="true" id="exiteea" style="float:right;"></i></a></p>
        <br>
        <div class="visa-row row">
          <div class="visa-table text-center col-md-8">
            <div class="table"  class="wow animated fadeInLeft" data-wow-delay=".5s">
              
              <div class="top-buffer row">
               <h2 style="text-align:left;">What are you getting:</h2>
               <br>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                  <div class="row"><p class="benefit-title">ILR</p></div>
                  <div class="row"><p class="benefit-text">Permanent Residence after 5 years of continuous residence as a qualified person</p></div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                  <div class="row"><p class="benefit-title">NATURALISATION</p></div>
                  <div class="row"><p class="benefit-text">Naturalisation can be obtained after 12 months of receiving Permanent Residence (PR)</p></div>
                </div>
              </div>

              <div class="bot-buffer row">
               <h2 style="text-align:left; padding-left:50px;"><span>Benefits</span></h2>
                       <br><br>
                <div class="visa-first visa-item col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
                <div class="visa-first visa-item col-md-2">
                  <div class="row"><img class="visa-info" src="images/visa-table/representative.png"></div>
                  <div class="row">You have the right to work, live, study</div>
                </div>
                <div class="visa-item col-md-2">
                  <div class="row"><img class="visa-info" src="images/visa-table/family.png"></div>
                  <div class="row">Your family can come with you (non-EU invitation)</div>
                </div>
                <div class="visa-item col-md-2">
                  <div class="row"><img class="visa-info" src="images/visa-table/international.png"></div>
                  <div class="row">You can leave the UK and comeback as you wish</div>
                </div>
                <div class="visa-item col-md-2">
                  <div class="row"><img class="visa-info" src="images/visa-table/confirmation.png"></div>
                  <div class="row">You have access to public benefits</div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="row">
                  <div class="col-md-4 info-button" style="t"><a href="#!" class="ask" data-toggle="modal" data-target="#login-modal">Submit to our Lawyers</a>
                  </div>
                  
                  <div class="col-md-4 info-button" style="t"><a href="#!" class="ask" data-toggle="modal" data-target="#login-modal">Free Consultation</a>
                  </div>
                 
                  <div class="col-md-4 info-button" style="t"><a href="assessment" class="ask">Free Assessment</a>
                  </div>
         </div>
        </div>
        </div>
        <div class="text-center">
            <a href="#!" class="show_hide text-center" data-content="toggle-text">More Information</a>
        <div class="content" style="text-align:left;">
                    <p>All EEA nationals automatically have an initial right of residence of three months. Every national who holds a valid EU Member State nationality has a right to continue their residency as long as they are a Qualified person.
                    </p>
                    <ul class="readmorelist">
                        <li>The first point for an EEA national is to get a Registration certificate;</li>
                        <li>EEA nationals and their family members, including non-EU, can apply for a permanent residence permit after 5 years of continuous residence;</li>
                        <li>Those family members who are outside the European Union can be invited to join their European national family members in the UK; </li>
                        <li>Family members who do not have 5 years of continuous residence can apply for a family member visa;</li>

                    </ul>
                </div>
        </div>
      </div>
       <br>
        </div>
       </div>
       </div>    
   </section>
   
   <section id="sponsorship"> 
   <div class="sponsorback">
    <div class="text">
    <div class="about-bottom">
     <div class="container">
      <div class="section-padding center-visa">

        <div class="col-md-4">
          <div class="about-work wow animated fadeInRight" data-wow-delay=".5s">
            <h2 class="section-title"><span>Tier 2 Sponsorship Licence</span></h2>
            <p class="description">
              To sponsor a person under the Points Based System, a company must hold a valid sponsorship licence. Without a sponsorship licence it is impossible to transfer existing employees to the UK, apply for extension or even to apply to employ someone who is outside of the European Economic Area.
              <br><br>
                Once granted, a sponsorship licence allows you to make an application to employ a person (or continue to employ a person).
                <br><br>
               Various monitoring duties are expected to be followed and reported to the Home Office visa the SMS system. Any and all changes no matter the scope and size need to reported.
                <br><br>
              We can help applicant prepare the necessary documents for a successful application.
            </p>
          </div>
        </div>
        <p><a href="#!" ><i class="fa fa-times fa-2x" aria-hidden="true" id="exitsponsorship" style="float:right;"></i></a></p>
        <br>
        <div class="visa-row row">
          <div class="visa-table text-center col-md-8">
            <div class="table"  class="wow animated fadeInLeft" data-wow-delay=".5s">
              
              <div class="top-buffer row">
               <h2 style="text-align:left;">What are you getting:</h2>
               <br><br>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                  <div class="row"><p class="benefit-title">License</p></div>
                  <div class="row"><p class="benefit-text">A valid license to employ migrants outside the EU.</p></div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                  <div class="row"><p class="benefit-title">Extension</p></div>
                  <div class="row"><p class="benefit-text">After 4 years the license has to be extended</p></div>
                </div>
              </div>

              <div class="bot-buffer row">
               <h2 style="text-align:left; padding-left:50px;"><span>Benefits</span></h2>
                       <br><br>
                <div class="visa-first visa-item col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
                <div class="visa-first visa-item col-md-2">
                  <div class="row"><img class="visa-info" src="images/visa-table/representative.png"></div>
                  <div class="row"> Initially no limit to how many people you wish to invite</div>
                </div>
                <div class="visa-item col-md-2">
                  <div class="row"><img class="visa-info" src="images/visa-table/family.png"></div>
                  <div class="row">The migrant can come to the UK with their family.</div>
                </div>
                <div class="visa-item col-md-2">
                  <div class="row"><img class="visa-info" src="images/visa-table/international.png"></div>
                  <div class="row">Invite a skilled worker outside of the European Union</div>
                </div>
                <div class="visa-item col-md-2">
                  <div class="row"><img class="visa-info" src="images/visa-table/confirmation.png"></div>
                  <div class="row">Licence is granted for 4 years</div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="row">
                  <div class="col-md-4 info-button" style="t"><a href="#!" class="ask" data-toggle="modal" data-target="#login-modal">Submit to our Lawyers</a>
                  </div>
                  
                  <div class="col-md-4 info-button" style="t"><a href="#!" class="ask" data-toggle="modal" data-target="#login-modal">Free Consultation</a>
                  </div>
                 
                  <div class="col-md-4 info-button" style="t"><a href="assessment" class="ask">Free Assessment</a>
                  </div>
         </div>
        </div>
        </div>
        <div class="text-center">
            <a href="#!" class="show_hide text-center" data-content="toggle-text">More Information</a>
        <div class="content" style="text-align:left;">
                    <p>A Sponsor is a UK based organisation that wishes to employ an overseas applicant in the UK. In order to sponsor applicants, an employer will need to be registered with the UKBA as a licensed Sponsor. For this registration to be accepted, the employer will need to meet certain requirements for the particular category of Tier 2 and accept certain responsibilities to help with immigration control.
                    </p>
                    <ul class="readmorelist">
                        <li>The sponsor cannot have any criminal history or convictions.</li>
                        <li>The sponsor needs to assign a Certificate of Sponsorship (Cos).</li>
                        <li>The licence is valid for 4 years.</li>
                        <li>The applicant will need to send correct supporting documents to prove a business is genuine.</li>
                        <li>Before the Certificate of Sponsorship (CoS) can be assigned the employer first needs to pass the Resident Market Labour Test.</li>
                    </ul>
                </div>
        </div>
      </div>
       <br>
        </div>  
       </div>
       </div>  
   </section>
   
   <section id="sponsorship4"> 
   <div class="sponsorback4">
    <div class="text">
    <div class="about-bottom">
     <div class="container">
      <div class="section-padding center-visa">

        <div class="col-md-4">
          <div class="about-work wow animated fadeInRight" data-wow-delay=".5s">
            <h2 class="section-title"><span>Tier 4 Sponsorship Licence</span></h2>
            <p class="description">
              In order to become a licensed sponsor, the establishment concerned must be a genuine educational facility operating legally in the United Kingdom.
              <br><br>
                Those students who wish to come to the UK to study must be eligible to do so, and must have a reputable education provider who can genuinely provide adequate knowledge.
                <br><br>
               The educational facility will be expected to report any change no matter the size or scope about the student to the Home Office via the SMS system.
                <br><br>
                Failure to follow this system can result in the cancelation or downgrade of the licence.
              <br> <br>
              We can help applicant prepare the necessary documents for a successful application.
            </p>
          </div>
        </div>
        <p><a href="#!" ><i class="fa fa-times fa-2x" aria-hidden="true" id="exitsponsorship4" style="float:right;"></i></a></p>
        <br>
        <div class="visa-row row">
          <div class="visa-table text-center col-md-8">
            <div class="table"  class="wow animated fadeInLeft" data-wow-delay=".5s">
              
              <div class="top-buffer row">
               <h2 style="text-align:left;">What are you getting:</h2>
               <br><br>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                  <div class="row"><p class="benefit-title">License</p></div>
                  <div class="row"><p class="benefit-text">A valid license to enrol students outside the EU.</p></div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                  <div class="row"><p class="benefit-title">Extension</p></div>
                  <div class="row"><p class="benefit-text">After 4 years the license has to be extended</p></div>
                </div>
              </div>

              <div class="bot-buffer row">
               <h2 style="text-align:left; padding-left:50px;"><span>Benefits</span></h2>
                       <br><br>
                <div class="visa-first visa-item col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
                <div class="visa-first visa-item col-md-2">
                  <div class="row"><img class="visa-info" src="images/visa-table/representative.png"></div>
                  <div class="row">Sponsorship licence can be obtained by a school, college, university or a similar educational institution</div>
                </div>
                <div class="visa-item col-md-2">
                  <div class="row"><img class="visa-info" src="images/visa-table/family.png"></div>
                  <div class="row"> Sponsor child students aged 4-17</div>
                </div>
                <div class="visa-item col-md-2">
                  <div class="row"><img class="visa-info" src="images/visa-table/international.png"></div>
                  <div class="row">Sponsor students who are outside of the European Union</div>
                </div>
                <div class="visa-item col-md-2">
                  <div class="row"><img class="visa-info" src="images/visa-table/confirmation.png"></div>
                  <div class="row">Licence is granted for 4 years</div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="row">
                  <div class="col-md-4 info-button" style="t"><a href="#!" class="ask" data-toggle="modal" data-target="#login-modal">Submit to our Lawyers</a>
                  </div>
                  
                  <div class="col-md-4 info-button" style="t"><a href="#!" class="ask" data-toggle="modal" data-target="#login-modal">Free Consultation</a>
                  </div>
                 
                  <div class="col-md-4 info-button" style="t"><a href="assessment" class="ask">Free Assessment</a>
                  </div>
         </div>
        </div>
        </div>
        <div class="text-center">
            <a href="#!" class="show_hide text-center" data-content="toggle-text">More Information</a>
        <div class="content" style="text-align:left;">
                    <p>Any education provider that wished to enrol overseas students from outside the European Economic Area is required to sponsor them under Tier 4 of the Points Based System and must also obtain a sponsor licence from the Home Office.
                    </p>
                    <ul class="readmorelist">
                        <li>Any education establishment can make an application.</li>
                        <li>The establishment in question has to be genuine.</li>
                        <li>There cannot be any evidence of a possible threat to immigration control.</li>
                        <li>The establishment has to be able to comply with sponsorship duties.</li>
                        <li>During the application consideration the Home Office may decide to inspect the establishment or request further documents.</li>
                        <li>An approved sponsor licence is valid for 4 years.</li>
                    </ul>
                </div>
        </div>
      </div>
       <br>
        </div>  
       </div>
       </div>  
   </section>


    <section id="compliance"> 
   <div class="complianceback">
    <div class="text">
    <div class="about-bottom">
     <div class="container">
      <div class="section-padding center-visa">

        <div class="col-md-4">
          <div class="about-work wow animated fadeInRight" data-wow-delay=".5s">
            <h2 class="section-title"><span>Compliance Support</span></h2>
            <p class="description">
              Every UK business must adhere to compliance when they operate as a trading business. If a company holds a sponsor licence to employ or educate people that need permission from the Home Office, there will be an expectation from you to fulfil various duties. Failure to comply will most likely mean your sponsor licence may be revoked.
              <br><br>
                Each business who holds such a licence should know where the migrant staff are during working hours and that any changes are recorded and updated  appropriately via the SMS system.
              <br> <br>
              We can help applicant prepare the necessary documents for a successful application.
            </p>
          </div>
        </div>
        <p><a href="#!" ><i class="fa fa-times fa-2x" aria-hidden="true" id="exitcompliance" style="float:right;"></i></a></p>
        <br>
        <div class="visa-row row">
          <div class="visa-table text-center col-md-8">
            <div class="table"  class="wow animated fadeInLeft" data-wow-delay=".5s">
              
              <div class="top-buffer row" >
               <h2 style="text-align:left;">What are you getting:</h2>
               <br><br>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                  <div class="row"><p class="benefit-title">LEGAL SUPPORT</p></div>
                  <div class="row"><p class="benefit-text"> Acting as your legal representative during Home Office visits</p></div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                  <div class="row"><p class="benefit-title">RATING</p></div>
                  <div class="row"><p class="benefit-text">Assisting you in keeping an A - rating</p></div>
                </div>
              </div>

              <div class="bot-buffer row">
               <h2 style="text-align:left; padding-left:50px;"><span>Benefits</span></h2>
                       <br><br>
                <div class="visa-first visa-item col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
                <div class="visa-first visa-item col-md-2">
                  <div class="row"><img class="visa-info" src="images/visa-table/representative.png"></div>
                  <div class="row">Assisting with reporting duties.</div>
                </div>
                <div class="visa-item col-md-2">
                  <div class="row"><img class="visa-info" src="images/visa-table/family.png"></div>
                  <div class="row">Advice on how to approach reporting</div>
                </div>
                <div class="visa-item col-md-2">
                  <div class="row"><img class="visa-info" src="images/visa-table/international.png"></div>
                  <div class="row"> Advice on action plan implementation</div>
                </div>
                <div class="visa-item col-md-2">
                  <div class="row"><img class="visa-info" src="images/visa-table/confirmation.png"></div>
                  <div class="row">Keep you up to date to any relevant legal changes</div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="row">
                  <div class="col-md-4 info-button" style="t"><a href="#!" class="ask" data-toggle="modal" data-target="#login-modal">Submit to our Lawyers</a>
                  </div>
                  
                  <div class="col-md-4 info-button" style="t"><a href="#!" class="ask" data-toggle="modal" data-target="#login-modal">Free Consultation</a>
                  </div>
                 
                  <div class="col-md-4 info-button" style="t"><a href="assessment" class="ask">Free Assessment</a>
                  </div>
         </div>
        </div>
        </div>
        <div class="text-center">
            <a href="#!" class="show_hide text-center" data-content="toggle-text">More Information</a>
        <div class="content" style="text-align:left;">
                    <p>The Home Office regularly presents new rules concerning sponsorship. It is vital for businesses to be prepared, fully aware and be able to understand the various duties and different responsibilities that have to be fulfilled to remain as a sponsor. We can help you with:
                    </p>
                    <ul class="readmorelist">
                        <li>Advice on immigration with the inclusion with a right to work checks as well as help on prevention of illegal employment.</li>
                        <li>Advice on how to approach the Resident Labour Market Test.</li>
                        <li>Advice on Record keeping and monitoring duties.</li>
                        <li>Attending as legal representatives during an official audit form the Home Office.</li>
                        <li>Advice on how to prepare for an audit from the Home Office.</li>
                        <li>In the event your company achieves a B rating we can assist you in implementing the action plan to raise your rating to an A.</li>
                    </ul>
                </div>
        </div>
      </div>
       <br>
        </div>  
       </div>
       </div>  
   </section>
<!--   <section id="contact-visas" class="portfolio blog text-center">
    <div class="row">
      <h2 class="section-title"><span>Other Residence Permit</span> in the UK</h2>
    </div>

    <div class="row">
      <div class="col-lg-offset-3 col-lg-3 col-md-6 col-sm-6 col-xs-12">
          <div class="form-title row">1. Visa category</div>
          <div class="row">
            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-offset-2 col-xs-2">
              <input class="rad" type="radio" name="gender" value="other">
            </div>
            <div class="col-lg-4 col-md-5 col-sm-5 col-xs-6 text-left">
              <label class="radio-span">Student Visa</label>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-offset-2 col-xs-2">
              <input class="rad" type="radio" name="gender" value="other">
            </div>
            <div class="col-lg-4 col-md-5 col-sm-5 col-xs-6 text-left">
              <label class="radio-span">Work Visa</label>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-offset-2 col-xs-2">
              <input class="rad" type="radio" name="gender" value="other">
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 text-left">
              <label class="radio-span">Parents of students</label>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-offset-2 col-xs-2">
              <input class="rad" type="radio" name="gender" value="other">
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 text-left">
              <label class="radio-span">Wife / Husband Visa</label>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-offset-2 col-xs-2">
              <input class="rad" type="radio" name="gender" value="other">
            </div>
            <div class="col-lg-5 col-md-5 col-sm-5 col-xs-6 text-left">
              <label class="radio-span">Bride / Groom Visa</label>
            </div>
          </div>
      </div>


      <div class="col-lg-offset-1 col-lg-3 col-md-3 col-sm-offset-1 col-sm-3 col-xs-offset-1 col-xs-10">
          <div class="form-title row">2. Contact details</div>
          <div class="row">
            <input type="text" class="form-control form-input" id="formName" placeholder="Enter your name">
          </div>
          <div class="row">
            <input type="text" class="form-control form-input" id="formNumber" placeholder="Enter your phone number">
          </div>
          <div class="row">
            <input type="email" class="form-control form-input" id="formEmail" placeholder="Enter your email address">
          </div>
          <div class="row">
            <a href="" id="visa-support">Send</a>
          </div>

      </div>

    </div>

  </section> -->


  <section id="contact-visas" class="testimonial text-center" data-stellar-background-ratio="0.1" data-stellar-vertical-offset="0">
    <div class="pattern-overlay" id="contactusform">
      <div class="section-padding">
        <div class="container">
            <div class="row">
              <h2 class="section-title text-center"><span>Your question on UK immigration matters</span></h2>
              
              <div class="col-md-2">
                  
              </div>

              <div class="col-md-7 text-center">
                <div class="form-title row">Contact details</div>
                <form method="post">
                    <div class="row">
                      <input type="text" class="form-control form-input" id="formName" name="name1" placeholder="Enter your name" required>
                    </div>
                    <div class="row">
                      <input type="text" class="form-control form-input" id="formNumber" name="phone1" placeholder="Enter your phone number" required>
                    </div>
                    <div class="row">
                      <input type="email" class="form-control form-input" id="formEmail" name="email1" placeholder="Enter your email address"required>
                    </div>
                    <div class="row">
                      <textarea class="form-control" name="message1" rows="5" id="formMessage" placeholder="Enter your message" required></textarea>
                    </div>
                    <br>
                    <div class="row">
                      <input type="submit" name="submit" class="btn ask" value="Send">
                    </div>
                </form>
              </div>
              
              <div class="col-md-1">
                  
              </div>
              
            </div>
        </div>
      </div>
    </div>
  </section>






  <section id="solutions" class="blog text-center">
    <div class="section-padding">
      <div class="container">
        <div class="row">
          <div class="section-top wow animated fadeInUp" data-wow-delay=".5s">
            <h2 class="section-title"><span>Consulting</span> Solutions</h2>
            <p class="entry-content"></p>
          </div>
          
          <div class="section-details">
            <div class="post-area">

              <div class="col-md-3">
                <h4 class="entry-title"><a href="http://manns-solutions.co.uk/accounting/">Business Services<br>

                <article class="type-post post wow animated fadeInUp" data-wow-delay=".55s">
                  <div class="post-thumbnail">
                    <img src="images/services/business.jpg" class="round-pic img-responsive" alt="post image">
                  </div>

                  <div class="post-content">
                    <p class="entry-content"></p>
                  </div>
                </article>
                </a></h4>
              </div>

              <div class="col-md-3">
                <h4 class="entry-title"><a href="http://manns-solutions.co.uk/property-investment-services/">Property<br>

                <article class="type-post post wow animated fadeInUp" data-wow-delay=".35s">
                  <div class="post-thumbnail">
                    <img src="images/services/property.jpg" class="round-pic img-responsive" alt="post image">
                  </div>

                  <div class="post-content">
                    <p class="entry-content"></p>
                  </div>
                </article>
                </a></h4>
              </div>

              <div class="col-md-3">
                <h4 class="entry-title"><a href="http://manns-solutions.co.uk/uk-investment-services/">Financial Markets<br>

                <article class="type-post post wow animated fadeInUp" data-wow-delay=".75s">
                  <div class="post-thumbnail">
                    <img src="images/services/financial.jpg" class="round-pic img-responsive" alt="post image">
                  </div>

                  <div class="post-content">
                    <p class="entry-content"></p>
                  </div>
                </article>
                </a></h4>
              </div>

              <div class="col-md-3">
                <h4 class="entry-title"><a href="http://manns-solutions.co.uk/concierge/">Concierge<br>

                <article class="type-post post wow animated fadeInUp" data-wow-delay=".35s">
                  <div class="post-thumbnail">
                    <img src="images/services/concierge.jpg" class="round-pic img-responsive" alt="post image">
                  </div>

                  <div class="post-content">
                    <p class="entry-content"></p>
                  </div>
                </article>
                </a></h4>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <div class="clearfix"></div>


  <section id="testimonial" class="testimonial text-center" data-stellar-background-ratio="0.1" data-stellar-vertical-offset="0">
    <div class="pattern-overlay">
      <div class="section-padding">
        <div class="container">
          <div class="section-top wow animated fadeInUp" data-wow-delay=".5s">
            <h2 class="section-title"><span>Our</span> Testimonials</h2>
          </div>
          <div class="section-details wow animated fadeInUp" data-wow-delay=".5s">
            <div class="col-md-3 text-center">
                <center><i class="fa fa-users fa-5x" aria-hidden="true"></i>
                <h3>WHAT OUR CLIENT'S SAY</h3>
                </center>
            </div>
            <div class="col-md-9">
                <div id="testimonial-slider" class="testimonial-slider carousel slide" data-ride="carousel">

              <ol class="carousel-indicators">
                <li data-target="#testimonial-slider" data-slide-to="0" class="active"></li>
                <li data-target="#testimonial-slider" data-slide-to="1"></li>
                <li data-target="#testimonial-slider" data-slide-to="2"></li>
                <li data-target="#testimonial-slider" data-slide-to="3"></li>
              </ol>

              <div class="carousel-inner" role="listbox">
                <div class="item active">
                  <blockquote class="client-quote">
                    Chinese consultant at Mann's Solutions is so good! He help me with to get Tier 4 visa, and the accommodation is good too. — Tong W.
                    <br><br><br><br>
                  </blockquote>
                </div>
                <div class="item">
                  <blockquote class="client-quote">
                    I am so glad that I turned to Mann's Solutions for help with my investor Visa application. At first I didn’t even know where to begin and I felt so desperate, but when I decided to use the service Mann's Solutions provide, things got a lot better, adviser was very patient and responsible, always answering the call and emails on the spot. Thank you for making my application possible. — Xinyi Q.
                  </blockquote>
                </div>
                <div class="item">
                  <blockquote class="client-quote">
                    I just want to express my gratitude to you. Thanks to your experienced team of consultants, now we are settled in London and my family really enjoy staying here. — Khalid D.
                    <br><br><br>
                  </blockquote>
                </div>
                <div class="item">
                  <blockquote class="client-quote">
                    Thank you so much for the help, I have always wanted to start my own business and now I can because of you, definitely will recommend to others. — Andrey A.
                    <br><br><br><br>
                  </blockquote>
                </div>
              </div>    
              </div>
                <br><br><br>
            </div>
            
            <div class="col-md-3">
                <br><br><br>
              <img src="images/googlelogo.png" width="100px" height="100px" alt="google logo">
              <h3>GOOGLE REVIEWS</h3>
            </div>
              <div class="col-md-4 col-sm-4">
        				    <div class="block-text rel zmin">
						        <a title="" href="#">
							    <div class="mark">Their rating: <span class="rating-input"><span data-value="0" class="glyphicon glyphicon-star"></span><span data-value="1" class="glyphicon glyphicon-star"></span><span data-value="2" class="glyphicon glyphicon-star"></span><span data-value="3" class="glyphicon glyphicon-star"></span><span data-value="3" class="glyphicon glyphicon-star"></span> 
                                </span></div>
                                </a>
						        <p><br><br></p>
							    <ins class="ab zmin sprite sprite-i-triangle block"></ins>
					        </div>
							<div class="person-text rel">
				                <img src="https://lh3.googleusercontent.com/-vwoI6WjR5rI/AAAAAAAAAAI/AAAAAAAAACU/7XFLLIVLLYM/s120-c/photo.jpg" class="img-circle"/>
								<a title="" href="#">黄圣涵</a>
							</div>
						</div>
            			<div class="col-md-4 col-sm-4">
						    <div class="block-text rel zmin">
						        <a title="" href="#">
							    <div class="mark">Their rating: <span class="rating-input"><span data-value="0" class="glyphicon glyphicon-star"></span><span data-value="1" class="glyphicon glyphicon-star"></span><span data-value="2" class="glyphicon glyphicon-star"></span><span data-value="3" class="glyphicon glyphicon-star"></span><span data-value="4" class="glyphicon glyphicon-star"></span> </span></div>
                               </a>
        						<p>Professional service of  consultation,  helping my family to get the right visa. Highly recommend!</p>
					            <ins class="ab zmin sprite sprite-i-triangle block"></ins>
				            </div>
							<div class="person-text rel">
				                <img src="https://ssl.gstatic.com/images/icons/material/product/1x/avatar_circle_blue_120dp.png"/>
						        <a title="" href="#">Jan Wong</a>
							</div>
						</div>
              <div class="col-md-3">
                <br><br><br>
                <img src="images/trustpilot.png" width="100px" height="100px" alt="Trustpilot logo">
                <h3>TRUSTPILOT REVIEWS</h3>
              </div>
              <div class="col-md-9">
                
              </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="social-media" class="social-media text-center" data-stellar-background-ratio="0.1" data-stellar-vertical-offset="0">
    <div class="pattern-overlay">
      <div class="section-padding">
        <div class="container">
          <div class="section-top wow animated fadeInUp" data-wow-delay=".5s">
            <h2 class="section-title"><span>Social Media</span></h2>
            <div class="col-md-3">
                <br><br>
                <div class="post-thumbnail">
                    <a href="https://twitter.com/manns_solutions"><img src="https://upload.wikimedia.org/wikipedia/en/thumb/9/9f/Twitter_bird_logo_2012.svg/945px-Twitter_bird_logo_2012.svg.png" class="round-pic img-responsive" alt="post image"></a>
                </div>
            </div>
            <div class="col-md-9">
                <script src="//assets.juicer.io/embed.js" type="text/javascript"></script>
<link href="//assets.juicer.io/embed.css" media="all" rel="stylesheet" type="text/css" />
<ul class="juicer-feed" data-feed-id="manns-solutions" data-per="6"><h1 class="referral"><a href="https://www.juicer.io"></a></h1></ul>
            </div>
              
            <div class="col-md-3">
                <br><br>
                <div class="post-thumbnail">
                    <a href="https://www.facebook.com/manns.solutions/"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/c2/F_icon.svg/2000px-F_icon.svg.png" class="round-pic img-responsive" alt="post image"></a>
                </div>
            </div>
            <div class="col-md-9">
                <br>
                <ul class="juicer-feed" data-feed-id="mannssolutionss"><h1 class="referral"><a href="https://www.juicer.io"></a></h1></ul>
            </div>
            
          </div>
        </div>
      </div>
    </div>
  </section>
            
            
            
  <section id="solutions" class="blog text-center">
    <div id="contactinfo">
    <div class="section-padding">
      <div class="container">
        <div class="row">
          <div class="section-top wow animated fadeInUp" data-wow-delay=".5s">
            <h2 class="section-title"><span>Company Address</span></h2>
            <p class="entry-content"></p>
          </div>
          <div class="container">
              <div class="col-md-6">
                  <h4 class="section-title"><span>Head Office</span></h4>
                  <p>3 Devonshire Street<br> London <br> W1W 5DT</p>
                  <p>Tel: +44 (0) 207 99 36 346</p>
                  <p><a href="mailto:enquiries@manns-solutions.co.uk">enquiries@manns-solutions.co.uk</a></p>
                  <div class="google-maps">
                      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2482.498229309672!2d-0.14683928422945516!3d51.52242097963762!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48761ad6f95dfc55%3A0x41c21e8ad43e4733!2s3+Devonshire+St%2C+Marylebone%2C+London+W1W+5DT!5e0!3m2!1sen!2suk!4v1468791123748" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
                  </div>
              </div>
              <div class="col-md-6">
                  <h4 class="section-title"><span>Immigration Office</span></h4>
                  <p>Angel House, 225 Marsh Wall<br> London <br> E14 9FW</p>
                  <p>Tel: +44 (0) 207 99 36 346</p>
                  <p><a href="mailto:enquiries@manns-solutions.co.uk">enquiries@manns-solutions.co.uk</a></p>
                  <div class="google-maps" style="align:left;">
                      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2483.7256328791736!2d-0.014269684230303843!3d51.49990217963392!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487602bb51f909d9%3A0xd7ea1870ef2ea1ca!2sangel+house%2C+225+Marsh+Wall%2C+Isle+of+Dogs%2C+London+E14+9FW!5e0!3m2!1sen!2suk!4v1468793530470" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
                  </div>
              </div>
          </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <footer id="colophon" class="footer site-footer" role="contentinfo">

    <div class="footer-top">
      <div class="section-padding">
        <div class="container">
          <div class="row">
            <div class="col-md-4">
              <div class="widget widget_latest-blog-post">
                <ul class="terms">
                    <li><a href="#!" class="entry-title" data-toggle="modal" data-target="#myModal">Terms and Conditions</a></li>
                </ul>
                <h3 class="widget-title">Recent Blog Posts</h3>
                <div class="widget-details">
                  <div class="title-list">
                    <ul>
                      <li><a href="http://manns-solutions.co.uk/2016/03/17/uk-budget-2016-delight-news-for-businesses-and-entrepreneurs/" class="entry-title">UK Budget 2016 – News for Businesses and Entrepreneurs</a></li>
                      <li><a href="http://manns-solutions.co.uk/2016/03/14/potential-future-of-tier-1-entrepreneur-program-in-the-uk/" class="entry-title">Potential future of Tier 1 Entrepreneur program in the UK</a></li>
                      <li><a href="http://manns-solutions.co.uk/2016/03/08/reasons-to-invest-and-locate-business-in-the-united-kingdom/" class="entry-title">Reasons to invest and locate business in the United Kingdom</a></li>
                      <li><a href="http://manns-solutions.co.uk/2016/03/02/why-the-uk-economy-attracts-foreign-investors-2/" class="entry-title">Why the UK Economy Attracts Foreign Investors?</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>

                <div class="container buttonsbro text-center">
                    <div class="col-md-4">
                        <h4><span>+44 (0) 207 99 36 346</span></h4>
                        <a href="tel:+442079936346">
                           <br>	
                            <h4 style="display:inline; margin:auto;" class="footerbuttons"><i class="fa fa-phone" aria-hidden="true"></i> Telephone</h4>
                        </a>
                    </div>
                    
                    <div class="col-md-4">
                        <h4><span>enquiries@manns-solutions.co.uk</span></h4>
                        <a href="mailto:info@manns-solutions.co.uk">
                           <br>
                            <h4 style="display:inline; margin:auto;" class="footerbuttons"><i class="fa fa-envelope" aria-hidden="true"></i> Email</h4>
                        </a>
                    </div>
                </div>
                <br>
                   
                <div class="container">
                    <div class="col-md-4">
                       <br>
                        <form method="post" action="https://www.getdrip.com/forms/3662545/submissions" name="bottom-subscribe" data-drip-embedded-form="3662545" id="bottom-subscribe">
                        <input type="email" name="fields[email]" class="form-control" id="email" placeholder="Enter E-mail" width="2px">
                        <br>
                        <button type="submit" name="submit" value="Get The Emails" class="btn btn-primary btn-block">Subscribe</button>
                    </form>
                    </div>
                    <div class="col-md-8 buttonlinks text-center">
                        <h3>FOLLOW US</h3>
                        <a href="https://www.linkedin.com/company/mann's-solutions" ><i class="fa fa-linkedin-square fa-3x footerbuttons" aria-hidden="true"></i></a>
                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <a href="https://twitter.com/manns_solutions" ><i class="fa fa-twitter fa-3x footerbuttons" aria-hidden="true"></i></a>
                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <a href="https://www.facebook.com/Manns-Solutions-1689263844650221/" ><i class="fa fa-facebook-official fa-3x footerbuttons" aria-hidden="true"></i></a>
                        &nbsp;&nbsp;&nbsp;
                        <a href="https://plus.google.com/104376743347337126833" ><i class="fa fa-google-plus fa-3x footerbuttons" aria-hidden="true"></i></a>
                </div>
              </div>
          </div>
        </div>
        
      </div>
    </div>
  </footer>
  
  <!-- Created by Jafar Salami ---->
  <div class="credits">
      <div class="container text-center">
          <p>COPYRIGHT © 2015-2016 MANN'S SOLUTIONS LTD. <br> ALL RIGHTS RESERVED</p>
      </div>
  </div>
 

  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="assets/js/jquery-1.11.2.min.js"><\/script>')</script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  <!-- Jafar's JavaScript -->
  <script src="assets/js/jafar.js"></script>
  <script src="assets/js/functions.js"></script>
  <script src="assets/js/wow.min.js"></script>
  <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
  <!-- Gmap3.js For Static Maps -->
  <script src="assets/js/gmap3.js"></script>
  <!-- Include Waypoint Js -->
  <script src="//cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
  <!-- Include Ajax MailChimp Js -->
  <script src="assets/js/jquery.ajaxchimp.min.js"></script>
    <!-- Include Custom Js </-->
  <script src="assets/js/custom.min.js"></script>
  <!-- Minified Cookie Consent served from our CDN -->
<!--Start Cookie Script--> <script type="text/javascript" charset="UTF-8" src="http://chs03.cookie-script.com/s/62c9f49b18f840528737a21b500585cd.js"></script> <!--End Cookie Script-->
  <script>
 
  $zopim(function() {
    window.setTimeout(function() {
        $zopim.livechat.window.show();
    }, 0); // delay time in milliseconds
  });
 
  $("document").ready(function(){
      var result = window.location.pathname.replace(/\.[^\.\/]+$/, "").substr(1);      
  });
</script>
  <!-- Created by Jafar Salami ---->
</body>
</html>
