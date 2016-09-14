<?php
if (isset($_POST['submit'])){
    
    if (!$_POST['name']){
        $error="<br>-Please enter your name";
    }
    if (!$_POST['email']){
        $error.="<br>-Please enter your email address";
    }
    if (!$_POST['travel']){
        $error.="<br>-Please enter will you be travelling alone?";
    }
    if (!$_POST['marriage']){
        $error.="<br>-Please enter what is your marital status?";
    }
    if (!$_POST['nation']){
        $error.="<br>-Please enter your current nationality(ies)";
    }
    if (!$_POST['dob']){
        $error.="<br>-Please enter your date of birth";
    }
    if (!$_POST['phone']){
        $error.="<br>-Please enter your phone number";
    }
    if (!$_POST['nonukaddress']){
        $error.="<br>-Please enter your current non-UK address";
    }
    if (!$_POST['ukaddress']){
        $error.="<br>-Please enter your current UK address";
    }
    if (!$_POST['history']){
        $error.="<br>-Please enter your  criminal history?";
    }
    if (!$_POST['hadvisa']){
        $error.="<br>-Please enter if you have any other visas?";
    }
    if (!$_POST['refusevisa']){
        $error.="<br>-Please enter if you have been refused a visa?";
    }
    if (!$_POST['medical']){
        $error.="<br>-Please enter if you receive any medical treatment in the UK??";
    }
    if (!$_POST['letter']){
        $error.="<br>-Please enter if you received a letter from a UK regulated financial institution confirming that original evidence of funds has been supplied?";
    }
    if (!$_POST['sole']){
        $error.="<br>-Please enter if you are the sole owner of the money?";
    }
    
    if ($error){
        $result ="<div class='alert alert-danger' role='alert'><strong>Please complete the form.</strong> Please correct the following: $error</div>";
    } else{
        mail("enquiries@manns-solutions.co.uk, edgaras@manns-solutions.co.uk ","Contact message", "Name: ".$_POST['name']."
        Email: ".$_POST['email']."
        Number of children dependants (if applicable): ".$_POST['NoChildren']."
        Number of adult dependants (if applicable): ".$_POST['NoAdults']."
        Will you be travelling alone?: ".$_POST['travel']."
        What is your marital status? ".$_POST['marriage']."
        Current nationality(ies): ".$_POST['nation']."
        Date of birth: ".$_POST['dob']."
        Phone number: ".$_POST['phone']."
        Your current non-UK address: ".$_POST['nonukaddress']."
        Your current UK address ".$_POST['ukaddress']."
        Do you have any criminal history? ".$_POST['history']."
        Have you ever had any other visas? ".$_POST['hadvisa']."
        Have you been refused a visa before? ".$_POST['refusevisa']."
        Did you receive any medical treatment in the UK? ".$_POST['medical']."
        Please enter if you received a letter from a UK regulated financial institution confirming that original evidence of funds has been supplied? ".$_POST['letter']. "Are you the sole owner of the money? ".$_POST['sole']." Additional information/questions/requests: ".$_POST['sole']);
        {
            $result="<div class='alert alert-success' role='alert'><strong>Thank you, the assessment form has been sent. </strong></div>";
        }
    }
}
if ($_POST['login']){
    mail("enquiries@manns-solutions.co.uk, edgaras@manns-solutions.co.uk ","Contact message", "Name: ".$_POST['name']."
        Fullname: ".$_POST['user']."
        Phone Number: ".$_POST['num']."
        E-mail Address: ".$_POST['email']."
        Message: ".$_POST['requestmessage']);
}
?>


    <!doctype html>
    <!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
    <!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
    <!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
    <!--[if gt IE 8]><!-->
    <!--<![endif]-->
    <html class="no-js" lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="trustpilot-one-time-domain-verification-id" content="YNuvCZWgX9VdlM4YrvToO6Zd0pgHc9T4EnyUHbF4" />
        <title>Mann's Solutions | Frequently Asked Questions | Immigration Services | Tier 1 investor | Entrepreneur | Visas</title>
        <meta name="description" content="We help our clients to obtain individual visas (Tier 2, Tier 4, Turkish Worker Visa), business visas (Tier 1 Investor and Entrepreneur, Sole Representative, Turkish Business person) and corporate visas (Tier 2 Sponsor, Tier 4 Sponsor).">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/png" href="https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcRppT0gYIRzq9Ahfry4QbmYIAhGOhLQ45GEDRkRvihjukAsRhaX" />
        <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
        <!-- Include Bootstrap Css -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <!-- Include Bootstrap Min Css -->
        <link rel="stylesheet" href="assets/css/bootstrap-theme.min.css">
        <!-- Include Style Css -->
        <link rel="stylesheet" href="assets/css/style.css">
        <!-- Include Animate Min Css -->
        <link rel="stylesheet" href="assets/css/animate.min.css">
        <!-- Include Fontawesome Min Css -->
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
        <!-- Include Magnific PopUp Css -->
        <link rel="stylesheet" href="assets/css/magnific-popup.css">
        <!-- bxSlider CSS file -->
        <link href="assets/css/jquery.bxslider.css" rel="stylesheet" />
        <!-- Include Responsive Css -->
        <link rel="stylesheet" href="assets/css/responsive.min.css">
        <!-- Include Hover Css -->
        <link rel="stylesheet" href="assets/css/hover.css">
        <!-- Include Modernizer Js -->
        <script src="assets/js/modernizr-2.8.3-respond-1.4.2.min.js"></script>
        <!-- <script src="mail.js"></script> -->
        <script>
            (function (i, s, o, g, r, a, m) {
                i['GoogleAnalyticsObject'] = r;
                i[r] = i[r] || function () {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
                a = s.createElement(o),
                    m = s.getElementsByTagName(o)[0];
                a.async = 1;
                a.src = g;
                m.parentNode.insertBefore(a, m)
            })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');
            ga('create', 'UA-77468075-2', 'auto');
            ga('send', 'pageview');
        </script>
        <!--Start of Zopim Live Chat Script-->
        <script type="text/javascript">
            window.$zopim || (function (d, s) {
                var z = $zopim = function (c) {
                        z._.push(c)
                    },
                    $ = z.s =
                    d.createElement(s),
                    e = d.getElementsByTagName(s)[0];
                z.set = function (o) {
                    z.set.
                    _.push(o)
                };
                z._ = [];
                z.set._ = [];
                $.async = !0;
                $.setAttribute("charset", "utf-8");
                $.src = "//v2.zopim.com/?46ESODXcVV7JGDsuKPS0qQAYRD8bXnPa";
                z.t = +new Date;
                $.
                type = "text/javascript";
                e.parentNode.insertBefore($, e)
            })(document, "script");
        </script>
        <!--End of Zopim Live Chat Script-->
    </head>

    <body>
        <header id="masthead" class="masthead navbar navbar-default navbar-fixed-top">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span> MENU <i class="fa fa-bars"></i>
                    </button>
                    <a href="http://manns-solutions.com/" class="navbar-brand"><img src="images/logo-text.png" alt="Site Logo"></a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <nav id="main-menu" class="collapse navbar-collapse pull-right">
                    <ul class="nav navbar-nav">
                        <li><a href="#!" data-toggle="modal" data-target="#login-modal" class="framed">Request a phone call</a></li>
                        <li>
                            <a href="tel:+442079936346" class="framed"><img class="callFlag" src="images/flags/uk.png"> +44 (0) 207 99 36 346</a>
                        </li>
                        <li><a href="fees" style="padding-top: 15px;height: 30px;">FEES</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">LANGUAGES <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="http://manns-solutions.com/" class="center-block">English<img class="language-flag" src="images/flags/uk.png"></a></li>
                                <li><a href="http://manns-solutions.com/tr" class="center-block">Turkish<img class="language-flag" src="images/flags/turkey.png"></a></li>
                                <li><a href="http://manns-solutions.com/ru" class="center-block">Russian<img class="language-flag" src="images/flags/russia.png"></a></li>
                                <li><a href="http://manns-solutions.com/zh" class="center-block">Chinese<img class="language-flag" src="images/flags/china.png"></a></li>
                            </ul>
                        </li>
                        <li><a href="faqs" style="padding-top: 15px;height: 30px;">FAQ'S</a></li>
                        <li><a href="index.php#contactinfo" id="tofooter" style="padding-top: 15px;height: 30px;">CONTACT US</a></li>
                    </ul>
                </nav>
            </div>
        </header>

        <a href="#top" id="top-link"><i class="fa fa-arrow-up fa-3x" aria-hidden="true"></i></a>


        <!---- Request a phone call modal ------>
        <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
            <div class="modal-dialog">
                <div class="loginmodal-container">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" aria-hidden="true"><i class="fa fa-times-circle-o fa-2x" aria-hidden="true"></i></button>
                    <h1>Request a callback</h1>
                    <br>
                    <form method="post">
                        <input type="text" name="user" placeholder="Full Name" required>
                        <input type="text" name="num" placeholder="Phone Number" required pattern="^\s*\(?(020[7,8]{1}\)?[ ]?[1-9]{1}[0-9{2}[ ]?[0-9]{4})|(0[1-8]{1}[0-9]{3}\)?[ ]?[1-9]{1}[0-9]{2}[ ]?[0-9]{3})\s*$">
                        <input type="text" name="email" placeholder="E-mail Address" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                        <textarea class="form-control" rows="4" name="requestmessage" id="requestmessage" placeholder="Message" required></textarea>
                        <br>
                        <input type="submit" name="login" class="login loginmodal-submit" value="Request a call">
                    </form>
                    <div class="modal-footer">
                        <p class="text-center">We will contact you
                            <br>as soon as possible</p>
                    </div>

                </div>
            </div>
        </div>

        <div class="assessback">
            <div class="questions">
                <div class="container">
                    <div class="row">
                        <br>
                        <br>
                        <center>
                            <h1>FAQ'S</h1>
                            <p style="color:white;">Frequently Asked Questions</p>
                        </center>
                        <br>
                        <br>

                        <div class="col-md-12" id="main">
                            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingOne">
                                        <h4 class="panel-title">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                      Tier 1 Entrepreneur
                    </a>
                  </h4>
                                    </div>
                                    <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                                        <div class="panel-body">
                                            <strong>1.	Who can apply for this visa?<br></strong> This visa is directed for those who wish to come to the UK and start a business and are willing to invest a certain amount of funds to do so (This does not apply to Turkish or EEA nationals).
                                            <br>
                                            <br>
                                            <strong>2.	What do I need to do to qualify for the Tier 1 Entrepreneur Visa in the UK?<br></strong> You must have £200 000 of available funds to start a business. The money must be your and not someone else’s (exceptions may apply).
                                            <br>
                                            <br>
                                            <strong>3.	Are there any other ways I can apply?<br></strong> Yes, you can also try the £50 000 route. You will need to invest in specific areas to qualify.
                                            <br>
                                            <br>
                                            <strong>4.	Do I need to pass an English requirement?<br></strong> Yes, you will need to pass an English requirement test. Various conditions apply on what type of test or proof is acceptable.
                                            <br>
                                            <br>
                                            <strong>5.	How good does my English has to be for this type of visa?<br></strong> Your English language skills must satisfy a certain rating criteria. The test consists of writing, speaking, reading and listening.
                                            <br>
                                            <br>
                                            <strong>6.	For how long can I come to the UK on this type of visa?<br></strong> The Tier 1 Entrepreneur Visa initially lasts for the period of 3 years and 4 months.
                                            <br>
                                            <br>
                                            <strong>7.	Can I extend this visa?</strong> Yes, if you meet certain criteria you can extend your visa for a further 2 years. After a total of 5-year residency (with certain restrictions and conditions) you can apply for permanent settlement.
                                            <br>
                                            <br>
                                            <strong>8.	So I can apply for Permanent Residency?<br></strong> Yes, as long as you invested £200 000 into your UK business and created full time jobs. After 5 years you can apply for indefinite leave to remain.
                                            <br>
                                            <br>
                                            <strong>9.	Is it possible to receive Permanent Residency faster?<br></strong> Yes, you can apply after 3 years if your company creates at least 10 jobs for a total of 1 year, or your company generates at least £5 Million turnover over the 3-year period.
                                            <br>
                                            <br>
                                            <strong>10.	Does this visa allow me to bring my family with me?<br></strong> Yes, you can add your family as dependants to come with you. They will be granted a similar visa to yours with a similar timeframe of leave to remain.
                                            <br>
                                            <br>
                                            <strong>11.	What kind of family can I include in the application?<br></strong> You can include your immediate family members. This includes a spouse and any children under the age of 18.
                                            <br>
                                            <br>
                                            <strong>12.	If I bring my family members with me can my children study?<br></strong> Yes, your children will have access to the UK educational system. Your children will be able to join any institution from a school to a college/university.
                                            <br>
                                            <br>
                                            <strong>13.	I am planning to have a business partner. Is that possible?<br></strong> Yes, you can apply with a business partner for this type of visa. You can combine your funds to reach the necessary £200 000 (conditions apply).
                                            <br>
                                            <br>
                                            <strong>14.	At what point do the funds need to be available?<br></strong> The funds need to be liquid at the time you decide to make an application. If you present these funds as assets it is very likely you will be refused.
                                            <br>
                                            <br>
                                            <strong>15.	What happens if my business is no longer profitable and I cannot keep operating it?<br></strong> In this scenario you can continue your stay until the end of your visa. After the expiration date you will either need to apply under a different route or you will have to leave the country, otherwise you may be sent to the detention centre.
                                            <br>
                                            <br>
                                            <strong>16.	Can I extend my visa if I close my business and work for someone else?<br></strong> No, you cannot. The point of an Entrepreneur visa is that you come to the UK to start a business and intent on keeping it without the need to start a different job.
                                            <br>
                                            <br>
                                            <strong>17.	I do not have enough funds to start an application, can I still apply?<br></strong> Yes, and no. if you do not have enough funds (£200 000) to start an application you may try to apply under the £50 000 investment route.
                                            <br>
                                            <br>
                                            <strong>18.	I wish to apply but I do not want to start a business I just want a visa; can I still apply?<br></strong> No, fraud is a serious offence in UK law. You may receive a ban on entry to UK for 10 years and any immigration adviser that does help you risks losing his licence.
                                            <br>
                                            <br>
                                            <strong>19.	I studied English in school will that be enough to qualify?<br></strong> No, you will still need to pass an English language test or have a degree that was taught in English from an educational facility that is approved by UK NORDIC.
                                            <br>
                                            <br>
                                            <strong>20.	I applied for a visa can I or my family receive public funds?<br></strong> No, under this visa not you or your family members are entitled to receive public funds.
                                            <br>
                                            <br>
                                            <strong>21.	I wish to apply for a visa but some of the funds are not mine can I apply?<br></strong> Yes, and no. As long as you can prove that you can use those funds for the benefit of the business you can. If the funds do not have a clear origin you are very likely to be refused.
                                            <br>
                                            <br>
                                            <strong> 22.  How long will it take for a decision regarding my visa application?<br></strong> The usual waiting time is up to 3 weeks. However, depending on the complexity of the case it can be sooner or much later.
                                            <br>
                                            <br>


                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingTwo">
                                        <h4 class="panel-title">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                      Tier 1 Investor visa
                    </a>
                  </h4>
                                    </div>
                                    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                        <div class="panel-body">
                                            <strong>1.	Who can obtain this visa?<br></strong> This visa is directed at investor who are able to invest a certain amount of money so that they can come to the UK.
                                            <br>
                                            <br>
                                            <strong>2.	What do I need to do to qualify for the Tier 1 Investor Visa in the UK?<br></strong> You must have £ 2 Million of available funds to invest. The funds have to be your own and not someone else’s (exceptions may apply).
                                            <br>
                                            <br>
                                            <strong>3.	Can I apply for this visa if I am an EEA citizen or Swiss?<br></strong> No, the only people who can apply for this visa are those who live outside of the European Union. EEA citizens have the freedom of movement and do not need to apply for this visa.
                                            <br>
                                            <br>
                                            <strong>4.	Do I need to pass an English requirement test?<br></strong> No, the investor visa category exempts a person from the need to proof his/her language capabilities.
                                            <br>
                                            <br>
                                            <strong> 5.	For how long can I stay in the UK with this visa?<br></strong> With the Tier 1 Investor visa you can stay up to 3 years and 4 months.
                                            <br>
                                            <br>
                                            <strong>6.	Can I extend this visa?<br></strong> Yes, if you meet certain criteria you can extend your visa for a further 2 years. After a certain period (this visa has different possibilities) you can apply for permanent settlement.
                                            <br>
                                            <br>
                                            <strong>7.	So I can apply for Permanent Residency?<br></strong> As long as you have invested the required amount you will be able to apply for permanent residence, otherwise known as Indefinite Leave to Remain.
                                            <br>
                                            <br>
                                            <strong>8.	Is there a possibility to apply for Permanent Residency faster?<br></strong> Yes, you can apply on earlier. However, that will depend how much you are willing to invest. The bigger the sum the faster you can invest (conditions apply).
                                            <br>
                                            <br>
                                            <strong>9.	Does this visa allow me to bring my family with me?<br></strong> Yes, you can add your family as dependants to come with you. They will be granted a similar visa to yours with a similar timeframe of leave to remain.
                                            <br>
                                            <br>
                                            <strong>10.	What kind of family can I include in the application?<br></strong> You can include your immediate family members. This includes a spouse and any children under the age of 18.
                                            <br>
                                            <br>
                                            <strong>11.	If I bring my family members with me can my children study?<br></strong> Yes, your children will have access to the UK educational system. Your children will be able to join any institution from a school to a college/university.
                                            <br>
                                            <br>
                                            <strong>12.	How should I keep the money?<br></strong> The money has to be in an UK bank account with the sum no less than £ 2 Million at the time of application.
                                            <br>
                                            <br>
                                            <strong>13.	I invested a couple of years before I applied for my application can I still obtain a visa?<br> </strong> No, the investment has to be no less than 12 months before the date of application. Or no less than 3 months of entry.
                                            <br>
                                            <br>
                                            <strong>14.	Do I need to explain where the money came from?<br></strong> Yes, you will have to prove that the money is yours and that you can use it as necessary. If it is your partner’s funds you will need to provide various proof that you are able to use it.
                                            <br>
                                            <br>
                                            <strong>15.	My money does not have a clear origin or I cannot, for any reason, explain fully where it came from will this block me from obtaining a visa?<br></strong> Yes, as of after November 2014 you will need to pass a “Genuineness Test” to show without a shadow of a doubt where the money came from and, if necessary, from whom (bonus documents will be necessary).
                                            <br>
                                            <br>
                                            <strong>16.	Can I apply inside the UK for an Investor type visa?<br></strong> Yes, you can apply inside the UK for this type of visa. However, conditions will apply.
                                            <br>
                                            <br>
                                            <strong>17.	What is the minimum requirement for me to extend the visa?<br></strong> You can extend the visa if you have at least £ 2 Million under your control in the UK and you have invested the funds in the UK government bonds, share capital or loan capital in active UK companies.
                                            <br>
                                            <br>
                                            <strong>18.	How long will it take for a decision regarding my visa application?<br></strong> The usual waiting time is up to 8 weeks. However, depending on the complexity of the case it can be sooner or much later.
                                            <br>
                                            <br>
                                            <strong>19.	I have the required funds but I do not want to disclose where I obtained them can I still apply?<br></strong> No, fraud is a serious offence in UK law. You may receive a ban on entry to UK for 10 years and any immigration adviser that does help you risks losing his licence.
                                            <br>
                                            <br>
                                            <strong>20.	Is there any other way I can apply for this visa?<br></strong> Yes, you will need to invest no less than £750 000 in the UK and £1 Million by purchasing assets or by maintaining the money on deposit in a UK financial institution.
                                            <br>
                                            <br>
                                            <strong>21.	 I have two account with different figures in them but combined it shows the required £2 Million can I still apply? <br></strong> No, the money needs to be in one account with no less than £2 Million. Unless, you have two UK bank accounts then it may be possible with proof to show that the funds belong to you, but it is preferable to have them in one account to avoid unnecessary proglems.
                                            <br>
                                            <br>

                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingThree">
                                        <h4 class="panel-title">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                      Sole Representative Visa
                    </a>
                  </h4>
                                    </div>
                                    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                        <div class="panel-body">
                                            <strong>1.	Who can apply for this visa?<br></strong> The Sole Representative visa is directed at people who wish to send a senior employee as a Representative of their overseas company headquarters.
                                            <br>
                                            <br>
                                            <strong>2.	How can I apply for this visa?<br></strong> To apply for the Sole Representative visa, you cannot be an EEA or Swiss citizen and you have to come as a Representative of the main headquarters of an overseas business.
                                            <br>
                                            <br>
                                            <strong>3.	I am a business owner and I wish to come to the UK with this visa to start a company branch.<br></strong> Unfortunately, if you are a business owner you cannot apply for this visa, only a senior employee that you chose can do so.
                                            <br>
                                            <br>
                                            <strong>4.	What is considered to be an owner of a company?<br></strong> Under the immigration rules an owner of a company would be a person who hold the majority of shares. The maximum of shares you can hold and still apply for this visa are 30-35%.
                                            <br>
                                            <br>
                                            <strong>5.	Is my company qualify to send a Sole Representative to the UK?<br></strong> The company in question has to be a genuine one. If it has functioned for less than a full year it is highly unlikely that you will be able to send someone.
                                            <br>
                                            <br>
                                            <strong>6.	Under what condition can I send someone to the UK?<br></strong> The individual that comes to the UK can only do so if it is for the benefit of the company and not the person. Furthermore, the budget given to this individual cannot be unrealistic in terms of starting a branch in context of the company’s size, market and profits.
                                            <br>
                                            <br>
                                            <strong>7.	I want to send someone to represent the company and then I wish to move headquarters to the UK.<br></strong> Unfortunately, the headquarters of the business in question has to remain overseas. If signs start to appear that the main branch is moving to the UK, the application is likely to be refused.
                                            <br>
                                            <br>
                                            <strong>8.	What kind of person is suitable to be moved to the UK?<br></strong> In order to send someone as a Sole Representative, the person has to be a senior employee. The suitability is enhanced if the person has stayed with the company for a long time and has a clear understanding of how the company functions.
                                            <br>
                                            <br>
                                            <strong>9.	Can the Sole Representatives family come with him/her?<br></strong> Yes, the individual may apply to bring his spouse and children under 18 with him to the UK.
                                            <br>
                                            <br>
                                            <strong>10.	Will the children be able to attend school?<br></strong> Yes, the children of that individual are entitled to the same level of education as a British child. If possible, they can attend other forms of educational facilities.
                                            <br>
                                            <br>
                                            <strong>11.	Can the wife/husband of the Sole Representative apply for employment?<br></strong> Yes, if the individual’s wife/husband wishes to do so they can apply for employment and education in a college/university (additional conditions apply for educational institutions).
                                            <br>
                                            <br>
                                            <strong>12.	How long can I stay after a successful application?<br></strong> Initially you can stay up to 3 years. After that you can extend for an additional 2 years, including your family members.
                                            <br>
                                            <br>
                                            <strong>13.	Can I apply to settle with this type of visa?<br></strong> Yes, you can apply to settle with this visa after 5 years of continuous residency in the UK. As long as you are employed in the same position at the same place.
                                            <br>
                                            <br>
                                            <strong>14.	I have terminated my contract or the branch has bankrupted; can I still extend my stay?<br></strong> No, however you can stay till the end of your visa. After the expiration you will have to leave the country as switching the visa is not possible under this category. If you wish you can reapply under the same category or a different category outside the UK.
                                            <br>
                                            <br>
                                            <strong>15.	I wish to send to people as representatives in the UK; can I do so?<br></strong> No, you can only send one person in the UK as your representative. If you apply for two people, the application form will be refused.
                                            <br>
                                            <br>
                                            <strong>16.	Can a Sole Representative act as an agent?<br></strong> No, the individual in question has to be a full-time employee fully engaged in the branch. This precludes taking secondary employment or acting on behalf of anyone other than the parent company.
                                            <br>
                                            <br>
                                            <strong> 17.	How long will I have to wait for the visa application to be processed? <br></strong> The usual waiting time is around 8 weeks. However, if the case is more complex it can extend the decision time.
                                            <br>
                                            <br>
                                            <strong>18.	Can I still apply if there already exists an incorporated branch or subsidiary in the UK?<br></strong> It may be possible. As long as the branch in question in the UK only exists as a ‘shell’ and has not yet started trading.
                                            <br>
                                            <br>
                                            <strong>19.	I wish to come on behalf of my company but I cannot do so under this category what can I do?<br></strong> If you are the owner or sole owner of a company and you wish to come to the you UK we would advise you to pick the Entrepreneur route.
                                            <br>
                                            <br>
                                            <strong>20.	Is there any other way the Sole Representative can apply faster for settlement?<br></strong> Unfortunately, no, under this category you have to stay in the UK for the full 5-year period. If you were to apply sooner it will be refused immediately.
                                            <br>
                                            <br>
                                            <strong>21.	Can the Sole Representative work a second job unrelated to my company?<br></strong> No, the individual can only work for your company. If there is proof of second employment the person will be in breach of immigration rules and may lead to the visa being cancelled.
                                            <br>
                                            <br>
                                        </div>
                                    </div>
                                </div>

                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingFour">
                                        <h4 class="panel-title">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                      Turkish Business Person Visa
                    </a>
                  </h4>
                                    </div>
                                    <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                                        <div class="panel-body">
                                            <strong>1.	Who can apply for this visa?<br></strong> This visa is directed towards Turkish nationals who wish to come to the UK with sole intention of starting a business.
                                            <br>
                                            <br>
                                            <strong>2.	I am a Turkish national and I hold two nationalities can I still apply?<br></strong> Yes, as long as you present your Turkish travel document you can apply for this category. If you hold only a nationality from any other country this route is inaccessible for you.
                                            <br>
                                            <br>
                                            <strong>3.	How can I apply for this type of visa?<br></strong> You have to be a Turkish national or a person holding a valid Turkish nationality; you must have the intention to start a business in the UK; or you wish to join an existing company and you will have an active role in it.
                                            <br>
                                            <br>
                                            <strong>4.	When can I apply for this visa?<br></strong> You can apply 3 months before your date of arrival in the UK. Any later and you will be refused entry by the UKBA.
                                            <br>
                                            <br>
                                            <strong>5.	How long will it take for my visa to be processed?<br></strong> It usually takes up to 3 months to process your visa. However, complex cases may increase the waiting time.
                                            <br>
                                            <br>
                                            <strong>6.	I wish to come to the UK under visa for how long can I stay?<br></strong> You can stay in the UK with this visa for 12 months. At the end of this period you can extend your visa.
                                            <br>
                                            <br>
                                            <strong>7.	If I choose to extend this visa. How long will the extension be?<br></strong> Upon a successful application you will be give an additional 3 years (the decision can take up to 6 months). After that you may apply for settlement.
                                            <br>
                                            <br>
                                            <strong>8.	How can I apply for extension?<br></strong> You will have to show proof that you still operate in the same business. Luckily under this visa you do not have to show increased profits or any created jobs.
                                            <br>
                                            <br>
                                            <strong>9.	What can I do with this visa?<br></strong> The primary objective of this visa is for you to come to the UK to start a business, or join and existing business. You may also switch into this category as long as you are not, at the time of the application, running a business. If you are you will need to apply for Tier 1 Entrepreneur.
                                            <br>
                                            <br>
                                            <strong>10.	Can I bring my family members with me?<br></strong> Yes, you can bring your family members with you. However, you can only bring your wife/husband and children under the age of 18.
                                            <br>
                                            <br>
                                            <strong>11.	My dependant family members are already in the UK can they still apply?<br></strong> Yes, but they will need to provide evidence that they did not break any immigration laws during their stay in the UK, they may need to provide a police registration certificate if they already have one.
                                            <br>
                                            <br>
                                            <strong>12.	What kind of documents will I have to provide in order to receive this visa?<br></strong> Mostly you will have to show your finances, relationship to family members (if you are bringing them to the UK), where you will stay during your time in the UK and other documents depending on the situation.
                                            <br>
                                            <br>
                                            <strong>13.	How long will it take for my visa extension to be approved?<br></strong> Depending on the individual circumstances your case may take up to 6 months. However, if something is missing the Home Office usually contacts your representatives for more information.
                                            <br>
                                            <br>
                                            <strong>14.	I wish to come to the UK solely for the visa, then I will work somewhere else.<br></strong> Unfortunately, you will not be able to do so as your visa is only valid if you operate your own business. Choosing second employment or not even starting your business will be in breach of immigration laws.
                                            <br>
                                            <br>
                                            <strong>15.	Do I have access to public funds?<br></strong> No, under this visa you do not have a right to receive any public funds.
                                            <br>
                                            <br>
                                            <strong>16.	Can I switch into this visa?<br></strong> Yes, you can switch into this visa from a different one. You can only do so while your old visa has not expired.
                                            <br>
                                            <br>
                                            <strong>17.	Can my wife/husband work under this visa?<br></strong> Yes, your wife or husband will be able to work under this visa.
                                            <br>
                                            <br>
                                            <strong>18.	My business has stopped or has been terminated can I still extend or apply for settlement?<br></strong> As long as the business has functioned up to the required period it may be possible to apply but it depends on the individual circumstances. However, if the business stopped functioning long before any periods you may not be able to apply.
                                            <br>
                                            <br>
                                            <strong>19.	I have obtained my visa and started my business by deception can I still apply?<br></strong> While it is possible to apply any immigration firm with knowledge I this will refuse to help you as it is a risk to every advisors’ licence. If you do apply by yourself you may be refused, deported or receive a 10-year ban.
                                            <br>
                                            <br>
                                            <strong>20.	I have been refused before because of fraudulent actions can I still apply?<br></strong> Yes, you can apply. However, your previous actions will be taken into consideration and the likelihood of refusal is high.
                                            <br>
                                            <br>
                                            <strong>21.	Can a partner come to help me run a business or can I employ people for full time positions?<br></strong> Yes, you can. However, there is no limit or legal requirement for you to do so. You can employ people to help your business. These people can work under full-time/ part-time or voluntary positions.
                                            <br>
                                            <br>
                                        </div>
                                    </div>
                                </div>

                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingFive">
                                        <h4 class="panel-title">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                      Tier 2 Sponsorship Licence
                    </a>
                  </h4>
                                    </div>
                                    <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
                                        <div class="panel-body">
                                            <strong>1.	What is a Tier 2 Sponsorship Licence?<br></strong> If an employer wishes to employ a skilled worker who currently resides outside of the European Union, the company in question will need to obtain a Tier 2 sponsor Licence.
                                            <br>
                                            <br>
                                            <strong>2.	When can I apply for a Tier 2 Sponsor Licence?<br></strong> You can apply for a Tier 2 Sponsor Licence at any time as long as your business is genuine and located in the United Kingdom (type of documents vary depending on the situation).
                                            <br>
                                            <br>
                                            <strong>3.	How long is my licence going to be valid for?<br></strong> A sponsorship licence is valid for 4 years. You can renew it after the initial period.
                                            <br>
                                            <br>
                                            <strong>4.	What type of documents will I need to send to the Home Office?<br></strong> It will depend on the type of business you are running and how much funds you receive. The list is not exhaustive; we can help you prepare all the necessary documents.
                                            <br>
                                            <br>
                                            <strong>5.	What is the rating system?<br></strong> The rating system reflects whether your company is prepared for a potential sponsorship licence. A-rated companies show that the firm has no problems with their paperwork, HR departments and etc. a B-rated company indicates that while they do meet the necessary criteria they will need to improve or correct problems.
                                            <br>
                                            <br>
                                            <strong>6.	I have received a B-rating how will this affect my business?<br></strong> If you had an A-rating before and you have been demoted to a B-rating it will mean you cannot accept any new employees outside the European Union. Also, any employees you had will have their stay reduced to 60 days.
                                            <br>
                                            <br>
                                            <strong>7.	Can I improve my rating?<br></strong> Yes, whether you have had an A-rating before or if the B-rating is the first one you ever received, you can upgrade to an A-rating under certain conditions. You will be given an “action plan” with a time frame. If you manage to complete it, you will be upgraded to an A-rating.
                                            <br>
                                            <br>
                                            <strong>8.	What is an action plan and am I required to do it?<br></strong> An action plan sets out the problems your company faces and the areas you need to improve in. If you wish to upgrade back to an A-rating it would be in your best interest to accept it.
                                            <br>
                                            <br>
                                            <strong>9.	Can I get downgraded more than once?<br></strong> Yes, it is possible to receive up to 2 B-ratings in a 4-year period. A third downgrade will mean your licence will be revoked.
                                            <br>
                                            <br>
                                            <strong>10.	My application was refused what can I do?<br></strong> Unfortunately, you cannot appeal a decision regarding a sponsorship licence. If your licence is refused you will have to wait for 12 months before reapplying again.
                                            <br>
                                            <br>
                                            <strong>11.	My licence has been removed can I reapply?<br></strong> Yes, and no, you can only apply after a 2 year “ban” is over. The date starts from the date of the refusal on the letter.
                                            <br>
                                            <br>
                                            <strong>12.	I just received my licence how many people can I employ?<br></strong> After you receive your licence you will need to state how many people you wish to employ in the SMS system. Number of Certificates of Sponsorship are limited but you can apply each month. However, the unused certificates are invalidated after some time and do not carry over. On the other hand, there is an “unlimited number” of people you can issue the certificate when you initially apply.
                                            <br>
                                            <br>
                                            <strong>13.	Will I need to do anything else after I employ people?<br></strong> If you are able to receive an A-rated Sponsorship Licence you will need to regularly report what the migrant is doing. Furthermore, any change or update regarding the migrant will have to be reported (e.g. change of address, late for work and etc.)
                                            <br>
                                            <br>
                                            <strong>14.	For how long is the Certificate of Sponsorship valid?<br></strong> The Certificate is valid for a maximum of 3 months from the date it has been issued.
                                            <br>
                                            <br>
                                            <strong>15.	The Home Office has scheduled an audit for my work place. Why?<br></strong> This procedure is normal. The Home Office might visit a work place announced or unannounced. The point of their visit is to check whether everything is in order.
                                            <br>
                                            <br>
                                            <strong>16.	I received my application can I start employing migrant workers?<br></strong> You will first need to pass the Resident Labour Market Test. You can do this test before or after you obtain your licence.
                                            <br>
                                            <br>
                                            <strong>17.	What is the Resident Market Labour Test (RLMT)?<br></strong> The RLMT is a test to present “fairness” to the UK and EU workers. It is essentially a 28 days required advertisement for the relevant job position. You are required to do this test if you wish to employ migrants (exceptions apply).
                                            <br>
                                            <br>
                                            <strong>18.	Is there a possibility to employ migrants without doing the RLMT?<br></strong> Yes, the government issues a shortage list of occupations that cannot be filled by UK or EU workers. If you require a professional from that list, you can skip the test.
                                            <br>
                                            <br>
                                            <strong>19.	I wish to employ an individual from another company what do I need to do?<br></strong> If the occupation is not present in the shortage list, you will need to do the RLMT and issue a new Certificate of Sponsorship.
                                            <br>
                                            <br>
                                            <strong>20.	I have received better/worse candidates who are from the UK or EU for the job position. Can I ignore them?<br></strong> No, under the current immigration rules you are obligated to employ an individual from UK or EU under those conditions. Unless, you can explain why you turned them down (e.g. not enough experience, language barriers and etc.)
                                            <br>
                                            <br>
                                        </div>
                                    </div>
                                </div>

                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingSix">
                                        <h4 class="panel-title">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                      Tier 4 Sponsorship Licence
                    </a>
                  </h4>
                                    </div>
                                    <div id="collapseSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix">
                                        <div class="panel-body">
                                            <strong>1.	When can I apply for a Tier 4 Sponsor Licence?<br></strong> You can apply for a Tier 4 Sponsor Licence at any time as long as your business is genuine and located in the United Kingdom (type of documents vary depending on the situation).
                                            <br>
                                            <br>
                                            <strong>2.	How long is my licence going to be valid for?<br></strong> A sponsorship licence is valid for 4 years. You can renew it after those 4 years.
                                            <br>
                                            <br>
                                            <strong>3.	Can my institution accept a short-term student?<br></strong> Yes, you can accept short-term students if you have the necessary resources.
                                            <br>
                                            <br>
                                            <strong>4.	What type of documents will I need to send to the Home Office?<br></strong> It will depend on the type of business you are running. The list is not exhaustive; we can help you prepare all the necessary documents.
                                            <br>
                                            <br>
                                            <strong>5.	What is the rating system?<br></strong> The rating system reflects whether your company is prepared for a potential sponsorship licence. A-rated companies show that the firm has no problems with their paperwork, HR departments and etc. a B-rated company indicates that while they do meet the necessary criteria they will need to improve or correct problems.
                                            <br>
                                            <br>
                                            <strong>6.	I have received a B-rating how will this affect my business?<br></strong> If you had an A-rating before and you have been demoted to a B-rating it will mean you cannot accept any new students outside the European Union.
                                            <br>
                                            <br>
                                            <strong>7.	Can I improve my rating?<br></strong> Yes, whether you have had an A-rating before or if the B-rating is the first one you ever received, you can upgrade to an A-rating under certain conditions. You will be given an “action plan” with a time frame. If you manage to complete it, you will be upgraded to an A-rating.
                                            <br>
                                            <br>
                                            <strong>8.	What is an action plan and am I required to do it?<br></strong> An action plan sets out the problems your company faces and the areas you need to improve in. If you wish to upgrade back to an A-rating it would be in your best interest to accept it.
                                            <br>
                                            <br>
                                            <strong>9.	Can I get downgraded more than once?<br></strong> Yes, it is possible to receive up to 2 B-ratings in a 4-year period. A third downgrade will mean your licence will be revoked.
                                            <br>
                                            <br>
                                            <strong>10.	 My application was refused what can I do?<br></strong> Unfortunately, you cannot appeal a decision regarding a sponsorship licence. If your licence is refused you will have to wait for 12 months before reapplying again.
                                            <br>
                                            <br>
                                            <strong>11.	My licence has been removed can I reapply?<br></strong> Yes, and no, you can only apply after a 2 year “ban” is over. The date starts from the date of the refusal on the letter.
                                            <br>
                                            <br>
                                            <strong>12.	 Will I need to do anything else after enrolling a student?<br></strong> If you are able to receive an A-rated Sponsorship Licence you will need to regularly report what the student is doing. Furthermore, any change or update regarding the migrant will have to be reported (e.g. change of address, not attending classes and etc.)
                                            <br>
                                            <br>
                                            <strong>13.	The Home Office has scheduled an audit for my work place. Why?<br></strong> This procedure is normal. Home Office might visit a work place announced or unannounced. The point of their visit is to check whether everything is in order.
                                            <br>
                                            <br>
                                            <strong>14.	A student has been avoiding classes for a long time. What will happen to the student?<br></strong> The student will probably have his sponsorship removed and may need to leave the country. If this is a frequent problem that is not properly reported the educational organization may suffer as well.
                                            <br>
                                            <br>
                                            <strong>15.	Will my organization need to issue a certificate for European students?<br></strong> No, students from the EU do not require a sponsorship to study in the UK.
                                            <br>
                                            <br>
                                            <strong>16.	Can a student switch courses or universities/colleges?<br></strong> Yes, however a new Certificate of Acceptance of Studies will need to be issued for those student who are changing a course or switching a university.
                                            <br>
                                            <br>
                                            <strong>17.	Can I terminate my licence?<br></strong> Yes, you can either wait for your licence to expire or inform the Home Office that you no longer wish to sponsor students.
                                            <br>
                                            <br>
                                            <strong>18.	Can we accept students under the age of 18?<br></strong> Yes, however additional documents will be required from the potential student.
                                            <br>
                                            <br>
                                            <strong>19.	Can the student take up supplementary studies?<br></strong> Yes, however the supplementary studies cannot interfere with the main course of study.
                                            <br>
                                            <br>
                                            <strong>20.	Can we offer English language courses to students under the age of 15?<br></strong> Yes, however they will need to come to the UK under a Short-term study visa.
                                            <br>
                                            <br>

                                        </div>
                                    </div>
                                </div>

                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingSeven">
                                        <h4 class="panel-title">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                      Compliance Support
                    </a>
                  </h4>
                                    </div>
                                    <div id="collapseSeven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSeven">
                                        <div class="panel-body">
                                            <strong>1.	What is compliance support?<br></strong> We can offer you (or your firm) compliance support in regards to your licence (Tier2 or Tier 4) and help you maintain them and keep you up to date on any new legal changes.
                                            <br>
                                            <br>
                                            <strong>2.	How can you help me?<br></strong> We can, assist you with initial consultation on how to approach a sponsorship licence application, document collection, assessing your current company competence in regards to sponsorship licences and provide advice on alternatives.
                                            <br>
                                            <br>
                                            <strong>3.	Can you assist me in preparing a sponsorship licence?<br></strong> We can offer you advice and guide you from start to finish.
                                            <br>
                                            <br>
                                            <strong>4.	My company has received a B-rated licence and an action plan. Can you help us?<br></strong> We can help you implement the plan to help you get back up to an A-rated licence.
                                            <br>
                                            <br>
                                            <strong>5.	The Home Office will do an audit in my company. How can you help us?<br></strong> We can act as your legal representatives during an audit ensuring the best possible outcome.
                                            <br>
                                            <br>
                                            <strong>6.	Do we need to have compliance support?<br></strong> While it is optional, we would recommend having compliance support to help you avoid unnecessary and time consuming problems with the Home Office.
                                            <br>
                                            <br>
                                            <strong>7.	Can I cancel compliance support?<br></strong> Yes, as long as you instruct us what kind of help you will need and for how long you will require our assistance.
                                            <br>
                                            <br>
                                            <strong>8.	Does support for Tier 2 and Tier 4 differ?<br></strong> Yes, every case has its own individual differences.
                                            <br>
                                            <br>
                                            <strong>9.	Can you help me by evaluating my chances of receiving my licence?<br></strong> Yes, if you instruct us to assist your preparation we can give you guidance on how to proceed and an estimate on a Rating.
                                            <br>
                                            <br>
                                            <strong>10.	We have students that we believe only came for a visa. How can we proceed?<br></strong> It would be best to report them to the Home Office to avoid damaging your rating. Unless, the student has exceptional evidence regarding his behaviour.
                                            <br>
                                            <br>
                                            <strong>11.	We have an employee that is missing work and is acting strangely. How can we proceed?<br></strong> Every employee’s changes need to be reported to the Home Office to avoid damaging your rating.
                                            <br>
                                            <br>
                                            <strong>12.	We have received a B-rating downgrade how will this affect us?<br></strong> You will need to implement the action plan set up by the Home Office. However, you can continue to issue Certificates of sponsorship to your current employees.
                                            <br>
                                            <br>
                                            <strong>13.	We believe that we will lose our sponsorship licence. How can we proceed?<br></strong> You can contact us and we will assess your current situation and possible progression with any alternatives.
                                            <br>
                                            <br>
                                            <strong>14.	We do not understand how to complete the Resident Labour Market Test. How can we approach it?<br></strong> To complete the test, you will need to advertise a position for 28 days in the jobcentre and on the newspaper, internet or any other outlet as long as it is freely accessible to potential job searchers.
                                            <br>
                                            <br>
                                            <strong>15.	We have current employees/students who are afraid that if the UK is leaving the EU they will need a licence. What should we tell them?<br></strong> For the moment there is no indicator for a requirement of sponsorship for Europeans. Nor is there any solid proof that they will need one.
                                            <br>
                                            <br>
                                            <strong>16.	How many people are necessary to report on migrants’ activities?<br></strong> To even the workflow you might need 3-4 people, however that depends on the size of your company and how many migrants you wish to sponsor. The positions can be easily filled in by one person.
                                            <br>
                                            <br>
                                            <strong>17.	We received notification that our employee/student wishes to leave us or change a course. How should we proceed.<br></strong> Whether you are accepting a new employee/student or agreeing that they will leave everything will need to be reported in the SMS system. The new employee/student will need to apply for new certificates as the old ones will be invalid.
                                            <br>
                                            <br>
                                            <strong>18.	Do we need to sponsor Turkish workers/students?<br></strong> Turkish workers can switch from Tier 2 to a Turkish Worker visa you will not need to sponsor them. Students will need to be sponsored.
                                            <br>
                                            <br>
                                            <strong>19.	We do can not issue any more sponsorships how long we need to wait?<br></strong> It depends if you are an A-level sponsor you will need to wait till next month. If you are a B-level sponsor, you will need to upgrade back to A if you wish to sponsor new employees/students.
                                            <br>
                                            <br>
                                            <strong>20.	My application regarding a sponsorship licence has been refused. What can I do?<br></strong> You have three options. You can either appeal the decision, apply for judicial review or reapply again.
                                            <br>
                                            <br>

                                        </div>
                                    </div>
                                </div>

                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingEight">
                                        <h4 class="panel-title">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                      Tier 2 (General) Visa
                    </a>
                  </h4>
                                    </div>
                                    <div id="collapseEight" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingEight">
                                        <div class="panel-body">
                                            <strong>1.	Who can apply for this visa?<br></strong> Individual who are skilled workers outside of the European Union can apply for this visa if they have a job offer in the UK.
                                            <br>
                                            <br>
                                            <strong>2.	What is a skilled worker?<br></strong> A skilled worker is someone who has the training, knowledge and experience in a certain field.
                                            <br>
                                            <br>
                                            <strong>3.	I never been in the UK and I cannot speak English very well. Can I still apply?<br></strong> It would not be advisable to apply for this visa if you have poor English language skills. As you will need to pass a test to prove your capabilities.
                                            <br>
                                            <br>
                                            <strong>4.	I have experience working a simple job but no higher education can I still apply?<br></strong> No, this visa category is for skilled workers with a background showing they have the knowledge, training and experience. Hence, a worker without any experience, knowledge or a possible sponsor will be refused after applying.
                                            <br>
                                            <br>
                                            <strong>5.	I have knowledge, experience and training in the field I am working in. Can I still apply?<br></strong> You may apply only if you have a job offer in the UK and the employer has a licence to sponsor migrants who live outside the European Union.
                                            <br>
                                            <br>
                                            <strong>6.	I have experience and a possible employer plus I can speak English very well. Can I apply under this category?<br></strong> Yes, granted you have proof. You will either need to pass an English language test (IELTS) or have a degree that was taught to you in English (nationals of an English speaking countries are exempt).
                                            <br>
                                            <br>
                                            <strong>7.	I have an employer who wishes to sponsor me. What does he need to do?<br></strong> Your potential employer will need to pass a Resident Market Labour Test. After the test is completed the employer can issue you a Certificate of Sponsorship you will need to use that number in the application form.
                                            <br>
                                            <br>
                                            <strong>8.	Does my employer always have to perform the Relevant Market Labour Test?<br></strong> Your employer will not need to perform this test if your occupation is specified in the Shortage of Occupation list.
                                            <br>
                                            <br>
                                            <strong>9.	I am a Temporary worker under a Tier 5 Visa. Can I still apply under this route?<br></strong> Not every Tier 5 visa holder will need a sponsor. However, in case you do need one you can apply to join a company which holds a Tier 2 licence.
                                            <br>
                                            <br>
                                            <strong>10.	I applied/extended the visa. How long will I have to wait?<br></strong> The decision time is around 3 weeks. However, it can take more time depending on the complexity of the case. If you are extending your visa, the decision time is usually 8 weeks (can be longer depending on the complexity).
                                            <br>
                                            <br>
                                            <strong>11.	How long will I be able to stay in the UK with this type of visa?<br></strong> You will be able to stay up to a maximum of 5 years and 14 days.
                                            <br>
                                            <br>
                                            <strong>12.	When can I come to the UK with this visa?<br></strong> You can come to the UK no longer than 14 days before the start date on your Certificate of Sponsorship.
                                            <br>
                                            <br>
                                            <strong>13.	I want to come to the UK and switch my job. Can I do that?<br></strong> Yes, you can switch your employer. However, you will need an employer that can sponsor you the same way that your old one did. You will also need to reapply to change.
                                            <br>
                                            <br>
                                            <strong>14.	I lived in the UK for a long time can I settle under this visa?<br></strong> Yes, you can settle with a Tier 2 visa as long as you have lived in the UK for a continuous period of 5 years. If you do not reach the 5-year requirement you can extend a Tier 2 visa (as long as your total stay is not more than 6 years).
                                            <br>
                                            <br>
                                            <strong>15.	Can I take up a second job under this visa?<br></strong> Yes, if you wish to work in the same sector at the same level you can work for 20 hours a week. However, if it is a different profession or it is not voluntary you will need to apply for a new Tier 2 visa.
                                            <br>
                                            <br>
                                            <strong>16.	I wish to apply for this visa but I would also like to study. Am I allowed?<br></strong> Yes, you are allowed to study if it does not interfere with your job that you are sponsored for.
                                            <br>
                                            <br>
                                            <strong>17.	Do I need to hold money in my account before I come to the UK?<br></strong> Yes, you will need to hold £945 for 3 months in your account before you can start your application.
                                            <br>
                                            <br>
                                            <strong>18.	My new employer has offered me a job with a salary below £20 800 per year. Can I still apply?<br></strong> No, as of April 2011 all applicant who wish to come to the UK must be offered at least £20 800 per year (some groups have exceptions to this rule).
                                            <br>
                                            <br>
                                            <strong>19.	My sponsor has offered to cover a couple of months for my living expenses. Can I accept?<br></strong> You can accept the offer if you have proof of your arrangement. If your employer is not offering to cover your accommodation cost, you will need to show evidence in regards to where you will be staying.
                                            <br>
                                            <br>
                                            <strong>20.	I am currently in the UK and I wish to switch from my old visa to Tier 2. Can I do that?<br></strong> Yes, you can switch to this visa. However, depending on your current visa type you may not be able to switch into this visa. We can advise you whether you can switch or choose a different path.
                                            <br>
                                            <br>
                                            <strong>21.	Can my family members come with me in the UK?<br></strong> Yes, your family members can come with you. However, you can only come with your spouse and children under the age of 18. You can also add a dependent child over the age of 18 if they are currently in the UK. You will also need to show extra funds per family member.
                                            <br>
                                            <br>
                                            <strong>22.	Can my sponsor provide funding for my family?<br></strong> Yes, your sponsor can provide the funds for your family. As long as your sponsor is an A-rated one and will pledge to provide at least £630 per dependant.
                                            <br>
                                            <br>
                                        </div>
                                    </div>
                                </div>

                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingNine">
                                        <h4 class="panel-title">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                      Tier 4 Student Visa
                    </a>
                  </h4>
                                    </div>
                                    <div id="collapseNine" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingNine">
                                        <div class="panel-body">
                                            <strong>1.	What is a Tier 4 Student Visa?<br></strong> A Tier 4 visa is directed towards students who live outside the European Union and wish to come to study in a University/College in the UK.
                                            <br>
                                            <br>
                                            <strong>2.	What type of visa will I need if I wish to apply for a child?<br></strong> You can apply for a Tier 4 Children visa. It is aimed at children aged 4-17.
                                            <br>
                                            <br>
                                            <strong>3.	When can I apply for this visa?<br></strong> You can apply for this visa when you have been offered a place to study and you have proof (usually IELTS exam) that you can speak, write, read and understand English at the required level of the educational institution.
                                            <br>
                                            <br>
                                            <strong>4.	I just want to come to the UK to study English not join a university/college. Do I still need to apply under this route?<br></strong> No, if you wish to come to the UK to study English at a language school, academy or any similar institution you can apply for the Short-term Study Visa. It is valid up to 11 months (6 if you are taking a short course).
                                            <br>
                                            <br>
                                            <strong>5.	Can I join any educational institution I wish?<br></strong> Yes, as long as the educational institution is properly licenced to accept students.
                                            <br>
                                            <br>
                                            <strong>6.	I am European. Do I need to apply for this visa in order to study?<br></strong> No, European citizens can study without the need to apply for a visa.
                                            <br>
                                            <br>
                                            <strong>7.	When can I arrive to the UK?<br></strong> You can arrive to the UK 1-month before the start of your course.
                                            <br>
                                            <br>
                                            <strong>8.	How long can I stay in the UK?<br></strong> How long you can stay will depend on the kind of course you are doing and what study you have already completed.
                                            <br>
                                            <br>
                                            <strong>9.	Will I be able to work?<br></strong> Yes, you are able to work a maximum of 20 hours per week of paid or unpaid work during term time if you are a degree student. You can work up to 10 hours per week if you are a language centre student. Full-time during vacations.
                                            <br>
                                            <br>
                                            <strong>10.	When my visa expires can I stay in the UK?<br></strong> It will depend on the course. The maximum amount you can stay after finishing a degree is 4 months.
                                            <br>
                                            <br>
                                            <strong>11.	I am currently in the UK can I switch into this visa?<br></strong> It is possible to switch into this visa but not all categories are permitted to do so.
                                            <br>
                                            <br>
                                            <strong>12.	How much money will I need to have in order to come to the UK?<br></strong> You will need to show at least £1265 per month if you will live in London (or £1015 if you will live outside of London). So if you are studying a university course you will need to show money for the first year. Meaning, you will need to show funds for 9months (as an academic year in the UK is 9 months).
                                            <br>
                                            <br>
                                            <strong>13.	I have already paid for accommodation and other necessities do I still need to show that amount?<br></strong> If you have already secured payment for your needs, you can deduct the amount from the amount you need to show. For instance, you paid £3000 pounds for accommodation and other necessities you can deduct that amount from the £1265 x 9 (9 as in 9months).
                                            <br>
                                            <br>
                                            <strong>14.	I wish to change my university. Is it possible?<br></strong> You will not be able to start a new course at a new university until you have applied for a new Tier 4 visa.
                                            <br>
                                            <br>
                                            <strong>15.	I wish to change my course. Is it possible?<br></strong> You will not be able to start a new course at the same university until you have applied for a new Tier 4 visa.
                                            <br>
                                            <br>
                                            <strong>16.	I wish to bring or invite my family members to join me in the UK. Is it possible?<br></strong> It is possible to bring a family member if you are sponsored by a higher education institution on a course at level 7 or above and it lasts for at least one year.
                                            <br>
                                            <br>
                                            <strong>17.	Will my family need to show any finances?<br></strong> Yes, you will need to show that your dependants can be support without the need to resort to public funds.
                                            <br>
                                            <br>
                                            <strong>18.	My university has lost its licence. What steps can I take?<br></strong> If your university or any other educational institution has lost its licence, usually you will be offered to transfer to a new place. If there is no such offer you will need to reapply for Tier 4 in a new university/college as you may be forced to go back home and reapply.
                                            <br>
                                            <br>
                                            <strong>19.	Can I settle in the UK with a Tier 4 licence?<br></strong> You can settle in the UK after a continuous residence of 10 years.
                                            <br>
                                            <br>
                                            <strong>20.	Is there any faster way to apply for settlement?<br></strong> Yes, you can switch to a different tier visa after you finish your studies. For instance, you can switch into Tier 2 and apply after 5 years of total residence.
                                            <br>
                                            <br>
                                            <strong>21.	I have a Short-term study visa can I extend or apply for settlement?<br></strong> Yes, and no, you can apply to extend the visa granted you have stayed for only 3 months and no longer than six months. In other words, you can extend your stay for 3 months (in total you can only stay for 6 months). You will not, however, be able to settle.
                                            <br>
                                            <br>

                                        </div>
                                    </div>
                                </div>

                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingTen">
                                        <h4 class="panel-title">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                      Turkish Worker Visa
                    </a>
                  </h4>
                                    </div>
                                    <div id="collapseTen" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTen">
                                        <div class="panel-body">
                                            <strong>1.	What is a Turkish worker visa?<br></strong> A Turkish worker visa is directed towards Turkish nationals who wish to come to the UK to work.
                                            <br>
                                            <br>
                                            <strong>2.	Who can apply for a Turkish worker visa?<br></strong> Any individual who holds a valid Turkish nationality can apply for this visa (conditions apply).
                                            <br>
                                            <br>
                                            <strong>3.	I have never been in the UK. Can I apply for this visa?<br></strong> No, the rules state that the individual who wishes to come under this route, has to have stayed in the UK previously and legally worked for at least 1 year.
                                            <br>
                                            <br>
                                            <strong>4.	What qualifies as a worker for the 1-year requirement?<br></strong> The people who qualify are: Turkish nationals that are or were a spouse of a British or a settled person, a holder of a valid work permit, a student that was allowed to work 20 hours per week during term time and full time during vacation periods.
                                            <br>
                                            <br>
                                            <strong>5.	How long can I stay with this visa?<br></strong> The length of time you can stay and what type of job you can do will depend on how long you have legally worked in the UK. For instance, if you worked for 1-3 years you will receive a visa up to 2 years and you will be allowed to work for the same employer; if you stayed 3-4 years you will receive 1-year and you will be able to change employers; 4+ years you will receive up to 3 years and you will be able to work in any occupation for any employer.
                                            <br>
                                            <br>
                                            <strong>6.	How can I apply for this visa?<br></strong> You will need to apply from within the UK before your current permission to stay expires.
                                            <br>
                                            <br>
                                            <strong>7.	Can I extend this visa?<br></strong> Yes, you can extend this type of visa.
                                            <br>
                                            <br>
                                            <strong>8.	Can I apply for settlement under this route?<br></strong> No, under this route you can only extend your visa.
                                            <br>
                                            <br>
                                            <strong>9.	I have worked for a different employer during the 1-year requirement can I still apply?<br></strong> No, you must have worked for the same employer for the period that you wish to quote in the application.
                                            <br>
                                            <br>
                                            <strong>10.	Do I need to request any documents from my employer?<br></strong> Yes, you will need to provide evidence from your employer showing the necessary qualifying period.
                                            <br>
                                            <br>
                                            <strong>11.	Can I include my family members in this application?<br></strong> Yes, you can include your family members. However, they will need to apply before their time on the current visa expires. You will only be able to include your spouse and children under the age of 18.
                                            <br>
                                            <br>
                                            <strong>12.	I wish to study in the UK with this visa. Am I allowed to?<br></strong> Yes, under this route you can study if you wish.
                                            <br>
                                            <br>
                                            <strong>13.	I have been working illegally in the UK will this affect my chances?<br></strong> Yes, if you have worked illegally in the UK you are very likely to be refused.
                                            <br>
                                            <br>
                                            <strong>14.	My current stay in the UK is not genuine and some document are fraudulent. Can I apply?<br></strong> It would be advisable to not apply with fraudulent documents as you will risk your stay in the UK and the advisors licence.
                                            <br>
                                            <br>
                                            <strong>15.	Will I need to prove my English language capabilities?<br></strong> No, there is no English requirement. However, if you have learned English before (in school and etc.) you can add it as supportive documents.
                                            <br>
                                            <br>
                                            <strong>16.	Will I need to show any financial requirements?<br></strong> No, there is no requirement to have a specific number of funds in the account.
                                            <br>
                                            <br>
                                            <strong>17.	When can I apply for this visa?<br></strong> You must apply for this visa before the expiration date of your current one.
                                            <br>
                                            <br>
                                            <strong>18.	Can I apply for this visa outside of the UK?<br></strong> No, you have to be in the UK to apply for this visa.
                                            <br>
                                            <br>
                                            <strong>19.	Will I be able to leave the country and comeback?<br></strong> Yes, granted your leave is for holiday reasons. If you wish to leave for medical reasons you will need to have proof.
                                            <br>
                                            <br>
                                            <strong>20.	My employment contract has terminated. What can I do?<br></strong> It will depend how long you have stayed and what permissions you have. It may range from keeping your leave to remain until your visa expires or being able to switch to a new employer without any problems.
                                            <br>
                                            <br>
                                        </div>
                                    </div>
                                </div>

                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingEleven">
                                        <h4 class="panel-title">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseEleven" aria-expanded="false" aria-controls="collapseEleven">
                      ILR/Naturalisation
                    </a>
                  </h4>
                                    </div>
                                    <div id="collapseEleven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingEleven">
                                        <div class="panel-body">
                                            <strong>1.	What is Indefinite Leave to Remain?<br></strong> Indefinite Leave to Remain (or ILR) is a document certifying settlement (or in other words permanent residence) in the UK.
                                            <br>
                                            <br>
                                            <strong>2.	What is Naturalisation?<br></strong> Naturalisation is the last step in immigration control. After obtaining Naturalisation you will receive a British passport.
                                            <br>
                                            <br>
                                            <strong>3.	When can I apply for ILR?<br></strong> The ability to apply for ILR varies depending on the visa you have. It can range anywhere from 2-10 years. However, individuals can usually apply for ILR after 5 years of continuous residence.
                                            <br>
                                            <br>
                                            <strong>4.	When can I apply for Naturalisation?<br></strong> You can apply for Naturalisation after you have lived in the UK for a continuous period of 5 years plus 12 months after receiving either ILR or Permanent Residence (Europeans) documentation.
                                            <br>
                                            <br>
                                            <strong>5.	I am European can I apply for ILR or Naturalisation?<br></strong> Europeans have to apply for Permanent Residence instead of ILR. You can apply for Naturalisation after 5 years of residence and 12 months after receiving PR (Permanent Residence).
                                            <br>
                                            <br>
                                            <strong>6.	I am a student who has lived in the UK for 5 years can I apply for ILR?<br></strong> No, students can only apply after 10 years of continuous stay. Another option is two switch to a different visa and apply then.
                                            <br>
                                            <br>
                                            <strong>7.	I am a worker who has lived here for over for 6 or more years. What can I do?<br></strong> You can apply for Indefinite Leave to Remain and if your application is successful you can immediately apply for Naturalisation.
                                            <br>
                                            <br>
                                            <strong>8.	I have a child who was born/lives here can he/she apply for ILR or Naturalisation?<br></strong> Same rules apply after 5-year residence they can apply for ILR. However, children under 18 need to register as a British citizen, whereas those over 18 need to apply for Naturalisation.
                                            <br>
                                            <br>
                                            <strong>9.	Is it enough to show an English degree or an English language test when applying for Naturalisation?<br></strong> No, those who wish to apply for Naturalisation will need to pass the Life in the UK Test (this applies to people from the ages of 18-65).
                                            <br>
                                            <br>
                                            <strong>10.	Is it enough to show an English degree or an English language test when applying for ILR?<br></strong> No, those who wish to apply for ILR will need to pass the Life in the UK Test (this applies to people from the ages of 18-65).
                                            <br>
                                            <br>
                                            <strong>11.	Should my family members apply for ILR at the same time as I do, regardless of whether or not they qualify for ILR?<br></strong> Your dependants will need to change their immigration status when you change yours. However, it depends on the situation, your family members may not even be able to apply at the same time.
                                            <br>
                                            <br>
                                            <strong>12.	I have lived in the UK for 5 years on different visas and I did not have any breaks. Can I still apply?<br></strong> No, you have to stay continuously for 5 years. However, if you stay for an additional 5 years you can apply under the 10-year route.
                                            <br>
                                            <br>
                                            <strong>13.	My visa will expire soon what is the earliest date I can apply for ILR?<br></strong> You can apply for ILR 28 days before the expiry date of your current visa.
                                            <br>
                                            <br>
                                            <strong>14.	How long is the decision time for ILR?<br></strong> With premium service you can find out the same day (extra costs apply), by post it takes 4-6 months.
                                            <br>
                                            <br>
                                            <strong>15.	How long is the decision time for Naturalisation?<br></strong> It takes around 4-6 months to reach a decision for Naturalisation.
                                            <br>
                                            <br>
                                            <strong>16.	How long can I leave the UK without my ILR status revocation?<br></strong> If you leave the country for a continuous period of 2 years, it will usually mean you are no longer to be considered as a settled individual (Applies to European nationals as well).
                                            <br>
                                            <br>
                                            <strong>17.	My current annual salary is below £35 000 will this affect my application?<br></strong> As of April 2016 a migrant worker after 6 years has to earn the required threshold of £35 000 to apply for ILR.
                                            <br>
                                            <br>
                                            <strong>18.	What are the absence requirements for migrant who wish to apply for ILR?<br></strong> Migrants who wish to apply cannot leave the country for more than 450 days and no more than 90 days during the last 12 months of the 5-year period.
                                            <br>
                                            <br>
                                            <strong>19.	I have unspent convictions will this affect my application?<br></strong> It Is highly likely that if an individual has unspent convictions it will affect the application, however it depends on the seriousness of the conviction. It is advisable to apply with a “clean slate”.
                                            <br>
                                            <br>
                                            <strong>20.	I have a Tier 1 (Entrepreneur) or Tier 1 (Investor), Turkish Business Person visa can I apply earlier for ILR?<br></strong> Yes, depending on your circumstances you can apply earlier than the required 5-year period (conditions apply).
                                            <br>
                                            <br>

                                        </div>
                                    </div>
                                </div>

                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingTwelve">
                                        <h4 class="panel-title">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwelve" aria-expanded="false" aria-controls="collapseTwelve">
                      EEA Citizens
                    </a>
                  </h4>
                                    </div>
                                    <div id="collapseTwelve" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwelve">
                                        <div class="panel-body">
                                            <strong>1.	What type of documents can I and my family receive by me being a European citizen?<br></strong> As a European you can receive Permanent Residence, Qualified Person Certificate, Family Permit and a Family Member visa.
                                            <br>
                                            <br>
                                            <strong>2.	What is a Permanent Residence document and how can I apply for it?<br></strong> Permanent Residence is a document which grants you the unlimited right to work, study and work in the UK. You can apply for this document after 5 years of continuous stay in the UK.
                                            <br>
                                            <br>
                                            <strong>3.	What is a Qualified Person Certificate?<br></strong> It is a document certifying you are a qualified person. A qualified person is: a worker, self-employed, a student and a person who is self-sufficient.
                                            <br>
                                            <br>
                                            <strong>4.	What is a Family Permit?<br></strong> Family permit enables a person who is an EEA national to invite someone from outside the European union to join them in the UK or any other EEA country.
                                            <br>
                                            <br>
                                            <strong>5.	What is a family member visa?<br></strong> A family member visa grants a 5-year visa to family member of the European citizen. The family members will have a right to work, study and live in the UK.
                                            <br>
                                            <br>
                                            <strong>6.	I am a very distant relative of a European citizen can I come to the UK?<br></strong> Yes, as long as you have proof that you are related to the European citizen you can come to the UK.
                                            <br>
                                            <br>
                                            <strong>7.	I am a European citizen how can I invite my family members to join me?<br></strong> You have to exercise your Treaty rights. This means you have to leave your European home country enter another European country and then you can invite your family members (conditions apply).
                                            <br>
                                            <br>
                                            <strong>8.	I am a family member of a European citizen and I have worked and lived in the UK for 5 years. Can I apply for permanent residence?<br></strong> Yes, you can apply for permanent residence. However, you will need to provide evidence of your employment status and your European family members employment status for 5 years.
                                            <br>
                                            <br>
                                            <strong>9.	I have worked and lived in the UK for 5 years, however I divorced my European spouse. Can I still apply?<br></strong> Yes, you can apply as long as you were married with your European spouse for at least 3 years, have evidence that you lived with your spouse for 1 year and have proof that your spouse was working during the divorce procedure.
                                            <br>
                                            <br>
                                            <strong>10.	I am a student or a self-sufficient individual. Can I apply for Permanent Residence?<br></strong> Yes, you can apply for permanent residence as long as you lived for a continuous period of 5 years and you have comprehensive health insurance to cover the relevant period.
                                            <br>
                                            <br>
                                            <strong>11.	I have received benefits or have been a job-seeker for a year. Is it possible for me to apply?<br></strong> If you have been taking benefits it will be taken into account but it should not pose a problem if you have been working and not just taking benefits as it may disqualify you. If you have been taking job-seekers allowance for more than 6 months it will disqualify you from the period.
                                            <br>
                                            <br>
                                            <strong>12.	I am a family member of a European national and I just came to the UK on a family permit. Can I work?<br></strong> No, you cannot work or study with a family permit. However, once you have arrived in the UK you can apply for a family member visa which will grant you the right to work, study and live for 5 years.
                                            <br>
                                            <br>
                                            <strong>13.	I am a student can I invite my family to the UK?<br></strong> Yes, you can invite your spouse/civil partner and dependent children.
                                            <br>
                                            <br>
                                            <strong>14.	I am British can I bring my family to the UK?<br></strong> Yes, British citizens bring their family members to the UK. However, you would need to have worked in another European country.
                                            <br>
                                            <br>
                                            <strong>15.	I am European or a Family member of the European national can I apply for Naturalisation?<br></strong> Yes, you can apply for Naturalisation whether you are European or as a family member. However, first you need to apply for Permanent Residence.
                                            <br>
                                            <br>
                                            <strong>16.	I take care of a European/British child/adult can I apply for any visa?<br></strong> Yes, primary carers of a European/British child/adult can apply for a Derivative Right of Residence. However, you will not have the right to Permanent Residence.
                                            <br>
                                            <br>
                                            <strong>17.	I have a criminal record will it affect my application?<br></strong> If you have unspent convictions it will affect your application. Also, every conviction will have to be written down for the Home Office to assess.
                                            <br>
                                            <br>
                                            <strong>18.	I have been married before will this affect my application as a family member of a European national?<br></strong> No, as long as you present all the relevant documents regarding your marriage and divorce certificate(s).
                                            <br>
                                            <br>
                                            <strong>19.	I have lived in the UK for a long time but I have gaps can I still apply?<br></strong> Yes, as long as you have at least one period of continuous stay. You are not required to use the most recent 5-year period. For instance, you can use the period from 2008-2013.
                                            <br>
                                            <br>
                                            <strong>20.	Will my family have to show an English or financial requirement if I want to invite them to the UK?<br></strong> No, although it is advisable to show you are supporting them in some way (financially). You will also have to show proof that you really are a family and that you are related (documents depend on each individual case).
                                            <br>
                                            <br>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>

            </div>




            <footer id="colophon" class="footer site-footer" role="contentinfo">

                <div class="footer-top">
                    <div class="section-padding">
                        <div class="container">
                            <div class="row">

                                <div class="col-md-4">
                                    <div class="widget widget_latest-blog-post">
                                        <h3 class="widget-title">Recent Blog Posts</h3>
                                        <div class="widget-details">
                                            <div class="title-list">
                                                <ul>
                                                    <li><a href="http://manns-solutions.com/go/?http://manns-solutions.co.uk/2016/03/17/uk-budget-2016-delight-news-for-businesses-and-entrepreneurs/" class="entry-title">UK Budget 2016 – News for Businesses and Entrepreneurs</a></li>
                                                    <li><a href="http://manns-solutions.com/go/?http://manns-solutions.co.uk/2016/03/14/potential-future-of-tier-1-entrepreneur-program-in-the-uk/" class="entry-title">Potential future of Tier 1 Entrepreneur program in the UK</a></li>
                                                    <li><a href="http://manns-solutions.com/go/?http://manns-solutions.co.uk/2016/03/08/reasons-to-invest-and-locate-business-in-the-united-kingdom/" class="entry-title">Reasons to invest and locate business in the United Kingdom</a></li>
                                                    <li><a href="http://manns-solutions.com/go/?http://manns-solutions.co.uk/2016/03/02/why-the-uk-economy-attracts-foreign-investors-2/" class="entry-title">Why the UK Economy Attracts Foreign Investors?</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-md-4" style="padding-top:20px;">
                                    <div>
                                        <i class="fa fa-phone fa-2x"></i>
                                        <p style="display: inline-block;color: #ffffff;vertical-align: middle;margin:0; font-size:20px; padding-bottom:20px; padding-left:15px;">+44 (0) 207 99 36 346</p>
                                    </div>

                                    <div>
                                        <i class="fa fa-envelope fa-2x"></i>
                                        <p style="display: inline-block;color: #ffffff;vertical-align: middle;margin:0; padding-bottom:18px;padding-left:10px;"><a style="font-size:20px;" href="mailto:enquiries@manns-solutions.co.uk">enquiries@manns-solutions.co.uk</a></p>
                                    </div>
                                </div>


                                <div class="col-md-4">
                                    <br>
                                    <form method="post" action="https://www.getdrip.com/forms/3662545/submissions" name="bottom-subscribe" data-drip-embedded-form="3662545" id="bottom-subscribe">
                                        <input type="email" name="fields[email]" class="form-control" id="email" placeholder="Enter E-mail" width="2px">
                                        <br>
                                        <button type="submit" name="submit" value="Get The Emails" class="btn btn-primary btn-block">Subscribe</button>
                                    </form>
                                    <br>
                                    <ul class="social-network social-circle">
                                        <li><a href="https://www.facebook.com/Manns-Solutions-1689263844650221/" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="https://twitter.com/manns_solutions" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="https://plus.google.com/104376743347337126833" class="icoGoogle" title="Google +"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a href="https://www.linkedin.com/company/mann's-solutions" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </footer>

            <!-- Created by Jafar Salami ---->
            <div class="credits">
                <div class="container text-center">
                    <p>COPYRIGHT © 2015-2016 MANN'S SOLUTIONS LTD.
                        <br> ALL RIGHTS RESERVED</p>
                </div>
            </div>


            <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
            <script>
                window.jQuery || document.write('<script src="assets/js/jquery-1.11.2.min.js"><\/script>')
            </script>
            <!-- Jafar's JavaScript -->
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
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

            <script>
                $zopim(function () {
                    window.setTimeout(function () {
                        $zopim.livechat.window.show();
                    }, 0); // delay time in milliseconds
                });

                $("document").ready(function () {
                    var result = window.location.pathname.replace(/\.[^\.\/]+$/, "").substr(1);
                });
            </script>

            <!-- Created by Jafar Salami ---->
    </body>

    </html>