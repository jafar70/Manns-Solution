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
    <html class="no-js" lang="ru">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="trustpilot-one-time-domain-verification-id" content="YNuvCZWgX9VdlM4YrvToO6Zd0pgHc9T4EnyUHbF4" />
        <title>Mann's Solutions - Free Assessment to obtain your visa</title>
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
                    <a href="http://manns-solutions.com/ru" class="navbar-brand"><img src="images/logo-text.png" alt="Site Logo"></a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <nav id="main-menu" class="collapse navbar-collapse pull-right">
                    <ul class="nav navbar-nav">
                        <li><a href="#!" data-toggle="modal" data-target="#login-modal" class="framed">Заказать звонок</a></li>
                        <li>
                            <a href="tel:+442079936346" class="framed"><img class="callFlag" src="images/flags/uk.png"> +44 (0) 207 99 36 346</a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Языки <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="http://manns-solutions.com/" class="center-block">английский<img class="language-flag" src="images/flags/uk.png"></a></li>
                                <li><a href="http://manns-solutions.com/tr" class="center-block">турецкий<img class="language-flag" src="images/flags/turkey.png"></a></li>
                                <li><a href="http://manns-solutions.com/ru" class="center-block">русский<img class="language-flag" src="images/flags/russia.png"></a></li>
                                <li><a href="http://manns-solutions.com/zh" class="center-block">Китайский<img class="language-flag" src="images/flags/china.png"></a></li>
                            </ul>
                        </li>
                        <li><a href="faqs" style="padding-top: 15px;height: 30px;">FAQ'S</a></li>
                        <li><a href="index.php#contactinfo" id="contactus">Контакты</a></li>
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
                    <h1>Запросить обратный звонок</h1>
                    <br>
                    <form method="post">
                        <input type="text" name="user" placeholder="Полное имя" required>
                        <input type="text" name="num" placeholder="Номер телефона" required pattern="^\s*\(?(020[7,8]{1}\)?[ ]?[1-9]{1}[0-9{2}[ ]?[0-9]{4})|(0[1-8]{1}[0-9]{3}\)?[ ]?[1-9]{1}[0-9]{2}[ ]?[0-9]{3})\s*$">
                        <input type="text" name="email" placeholder="E-mail" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                        <textarea class="form-control" rows="4" name="requestmessage" id="requestmessage" placeholder="Сообщение" required></textarea>
                        <br>
                        <input type="submit" name="login" class="login loginmodal-submit" value="Запросить звонок">
                    </form>
                    <div class="modal-footer">
                        <p class="text-center">Мы свяжемся с вами
                            <br> в ближайшее время.</p>
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
                            <h1>Бесплатная оценка шансов на визу</h1>
                            <p style="color:white;">Заполните форму заявки</p>
                        </center>
                        <?php echo $result;?>
                            <form method="post" role="form">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="inputdefault">Полное имя</label>
                                        <input type="text" name="name" class="form-control" placeholder="your name" value="<?php echo $_POST['name']; ?>">
                                    </div>

                                    <div class="form-group">
                                        <label for="inputdefault">E-mail</label>
                                        <input type="email" name="email" class="form-control" placeholder="your email" value="<?php echo $_POST['email']; ?>">
                                    </div>

                                    <div class="form-group">
                                        <label for="inputdefault">Количество детей на иждивении (если применимо):</label>
                                        <input type="NoChildren" name="NoChildren" class="form-control" placeholder="" value="<?php echo $_POST['NoChildren']; ?>">
                                    </div>

                                    <div class="form-group">
                                        <label for="inputdefault">Количество взрослых на иждивении (если применимо):</label>
                                        <input type="NoAdults" name="NoAdults" class="form-control" placeholder="" value="<?php echo $_POST['NoAdults']; ?>">
                                    </div>

                                    <div class="form-group">
                                        <label for="inputdefault">Вы путешествуете один/одна?</label>
                                        <select class="form-control" type="travel" name="travel" id="sel1" value="<?php echo $_POST['travel']; ?>">
                                            <option>Yes </option>
                                            <option>No </option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="inputdefault">Ваше семейное положение:</label>
                                        <select class="form-control" type="marriage" name="marriage" id="sel1" value="<?php echo $_POST['marriage']; ?>">
                                            <option>Married </option>
                                            <option>Single </option>
                                            <option>Divorced </option>
                                            <option>Widowed </option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="inputdefault">Ваша национальность (национальности):</label>
                                        <input type="nation" name="nation" class="form-control" placeholder="" value="<?php echo $_POST['nation']; ?>">
                                    </div>

                                    <div class="form-group">
                                        <label for="inputdefault">Дата рождения:</label>
                                        <input type="dob" name="dob" class="form-control" pattern="\d{1,2}/\d{1,2}/\d{4}" placeholder="DD/MM/YYYY" value="<?php echo $_POST['dob']; ?>">
                                    </div>

                                    <div class="form-group">
                                        <label for="inputdefault">Номер телефона:</label>
                                        <input type="phone" name="phone" class="form-control" placeholder="" value="<?php echo $_POST['phone']; ?>">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="inputdefault">Адресс за пределами Великобритании:</label>
                                        <input type="nonukaddress" name="nonukaddress" class="form-control" placeholder="" value="<?php echo $_POST['nonukaddress']; ?>">
                                    </div>

                                    <div class="form-group">
                                        <label for="inputdefault">Адресс в Великобритании:</label>
                                        <input type="ukaddress" name="ukaddress" class="form-control" placeholder="" value="<?php echo $_POST['ukaddress']; ?>">
                                    </div>

                                    <div class="form-group">
                                        <label for="inputdefault">У вас имеется криминальная история?</label>
                                        <select class="form-control" type="history" name="history" id="sel1" value="<?php echo $_POST['history']; ?>">
                                            <option>Yes </option>
                                            <option>No </option>
                                        </select>

                                    </div>

                                    <div class="form-group">
                                        <label for="inputdefault">Вы когда-нибудь получали другие визы?</label>
                                        <select class="form-control" type="hadvisa" name="hadvisa" id="sel1" value="<?php echo $_POST['hadvisa']; ?>">
                                            <option>Yes </option>
                                            <option>No </option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="inputdefault">Вам когда-либо отказывали в визе?</label>
                                        <select class="form-control" type="refusevisa" name="refusevisa" id="sel1" value="<?php echo $_POST['refusevisa']; ?>">
                                            <option>Yes </option>
                                            <option>No </option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="inputdefault">Вы получали медицинскую помощь в Великобритании?</label>
                                        <select class="form-control" type="medical" name="medical" id="sel1" value="<?php echo $_POST['medical']; ?>">
                                            <option>Yes </option>
                                            <option>No </option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="inputdefault">Имеете ли вы документ от финансового учреждения Великобритании, подтверждающий источник получения денежных средств?</label>
                                        <select class="form-control" type="letter" name="letter" id="sel1" value="<?php echo $_POST['letter']; ?>">
                                            <option>Yes </option>
                                            <option>No </option>
                                            <option>Not Applicable </option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="inputdefault">Вы единственный владелец денежных средств?</label>
                                        <select class="form-control" type="sole" name="sole" id="sel1" value="<?php echo $_POST['sole']; ?>">
                                            <option>Yes </option>
                                            <option>No </option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="inputdefault">Дополнительная информация/вопросы/пожелания:</label>
                                        <textarea type="additional" name="additional" rows="5" class="form-control" value="<?php echo $_POST['additional']; ?>"></textarea>
                                    </div>
                                </div>


                                <div class="text-center">
                                    <input type="submit" name="submit" class="btn btn-default" value="Отправить заявку">
                                </div>
                            </form>
                            <br>
                            <br>
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