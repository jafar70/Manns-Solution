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
                $.src = "//v2.zopim.com/?4C0vppx8UdfsJ4BMMf7mgzdAKlAXb4NM";
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
                    <a href="http://manns-solutions.com/tr" class="navbar-brand"><img src="images/logo-text.png" alt="Site Logo"></a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <nav id="main-menu" class="collapse navbar-collapse pull-right">
                    <ul class="nav navbar-nav">
                        <li><a href="#!" data-toggle="modal" data-target="#login-modal" class="framed">Arama talep edin</a></li>
                        <li>
                            <a href="tel:+442079936346" class="framed"><img class="callFlag" src="images/flags/uk.png"> +44 (0) 207 99 36 346</a>
                        </li>
                        <li><a href="fees" style="padding-top: 15px;height: 30px;">ÜCRETLER</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Diller<b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="http://manns-solutions.com/" class="center-block">İngiliz<img class="language-flag" src="images/flags/uk.png"></a></li>
                                <li><a href="http://manns-solutions.com/tr" class="center-block">Türk<img class="language-flag" src="images/flags/turkey.png"></a></li>
                                <li><a href="http://manns-solutions.com/ru" class="center-block">Rusça<img class="language-flag" src="images/flags/russia.png"></a></li>
                                <li><a href="http://manns-solutions.com/zh" class="center-block">Çince<img class="language-flag" src="images/flags/china.png"></a></li>
                            </ul>
                        </li>
                        <li><a href="faqs" style="padding-top: 15px;height: 30px;">SSS</a></li>
                        <li><a href="index.php#contactinfo" id="contactus">İletişim</a></li>
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
                    <h1>Arama talep edin</h1>
                    <br>
                    <form method="post">
                        <input type="text" name="user" placeholder="İsim Soyisim" required>
                        <input type="text" name="num" placeholder="Telefon Numaranız" required pattern="^\s*\(?(020[7,8]{1}\)?[ ]?[1-9]{1}[0-9{2}[ ]?[0-9]{4})|(0[1-8]{1}[0-9]{3}\)?[ ]?[1-9]{1}[0-9]{2}[ ]?[0-9]{3})\s*$">
                        <input type="text" name="email" placeholder="E-mail Adresiniz" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                        <textarea class="form-control" rows="4" name="requestmessage" id="requestmessage" placeholder="Mesajınız" required></textarea>
                        <br>
                        <input type="submit" name="login" class="login loginmodal-submit" value="Arama talep edin">
                    </form>
                    <div class="modal-footer">
                        <p class="text-center">En yakın zamanda
                            <br>iletişime geçeceğiz</p>
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
                            <p style="color:white;"></p>
                        </center>
                        <br>
                        <br>

                        <div class="col-md-12" id="main">
                            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingOne">
                                        <h4 class="panel-title">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                      Tier 1 Girişimci Vizesi 
                    </a>
                  </h4>
                                    </div>
                                    <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                                        <div class="panel-body">
                                            <strong>1.	Bu vizeye kim başvurabilir? <br></strong> Bu vize türüne Birleşik Krallık’ta bir işletme kurmak isteyen ve belirli bir miktar yatırım yapmak isteyen kişiler başvurabilir.
                                            <br>
                                            <br>
                                            <br>
                                            <br>
                                            <strong>2.	Yeterlilik koşulu nedir?<br></strong> İşletmeyi kurabilmek için £200 000 kaynağınız olması gerekir. Buna ek olarak paranın size ait olması şartı aranır(İstisnalar dışında).
                                            <br>
                                            <br>
                                            <strong>3.	Başka bir yolu var mı? <br></strong> Evet, £50 000 şartlı yolu da seçebilirsiniz ancak bu durumda yatırımı yapacağınız yerlerin özel yerler olması gerekir.
                                            <br>
                                            <br>
                                            <strong>4.	İngilizce dil koşulu mevcutmudur? <br></strong> Evet, bu vizeye başvurmak için İngilizce dil yeterliliği testini geçmeniz gerekmektedir.
                                            <br>
                                            <br>
                                            <strong>5.	İngilizcemin ne seviyede olması gerekir?<br></strong> İngilizce yeterliliğiniz belirli bir seviyenin altında olmamalıdır, bu seviye yatırımınızın içeriğine göre değişebilir.
                                            <br>
                                            <br>
                                            <strong>6.	Bu vize türü ile ne süre ile Birleşik Krallık’ta bulunabilirim? <br></strong> Tier 1 Girişimci vizesi 3 sene 4 ay süre ile verilmektedir.
                                            <br>
                                            <br>
                                            <strong>7.	Vizeyi uzatma imkanım var mı? <br></strong> Evet, şartları yerine getirmek koşulu ile 2 yıl süre ile uzatma imkanınız bulunmaktadır.
                                            <br>
                                            <br>
                                            <strong>8.	Daimi ikametgaha başvurabilirmiyim?<br></strong> Evet, Birleşik Krallıktaki ticari işletmenize £200 000 yatırım yapmanız halinde, 5 sene sonunda sınırsız ikametgah hakkına başvurabilirsiniz.
                                            <br>
                                            <br>
                                            <strong> 9.	Daimi ikametgahı daha önce kazanma imkanım var mı? <br></strong> Evet, 1 sene boyunca 10 tane iş imkanı yaratmanız koşulu ile 3 sene sonunda başvurabilirsiniz.
                                            <br>
                                            <br>
                                            <strong>10.	Bu vize ailemi yanımda getirmeme izin sağlar mı? <br></strong> Evet, ailenizi yanınızda getirebilirsiniz. Onlar da sizin vizenize benzer bir vizeye sahip olacaklardır.
                                            <br>
                                            <br>
                                            <strong>11.	Hangi aile üyeleri başvuruda bulunabilir? <br></strong> Eşiniz ve 18 yaşından küçük çocuklarınız başvuruda bulunma hakkına sahiptir.
                                            <br>
                                            <br>
                                            <strong>12.	Aile üyelerimi yanımda getirdiğim zaman çocuklarım öğrenim görebilir mi? <br></strong> Evet, çocuklarınız Birleşik Krallık eğitim sistemine ulaşım hakkına sahip olacaktır.
                                            <br>
                                            <br>
                                            <strong>13.	Ticari partner olmamın imkanı var mı? <br></strong> Evet, bu vize türü için partner olarak başvuruda bulunabilirsiniz. Bu durumda toplam yatırımın £200 000 olması gerekmektedir.
                                            <br>
                                            <br>
                                            <strong>14.	Kaynağın ne zaman uygun olması gerekir? <br></strong> Kaynak başvuru yapmaya karar verdiğiniz anda paraya çevirilebilir olmak zorundadır.
                                            <br>
                                            <br>
                                            <strong>15.	Ticari işletmem kar yapamaz ve ben yönetemez isem?<br></strong> Bu durumda vize tarihinizin sonuna kadar Birleşik Krallıkta kalma imkanınız vardır. Sona erme tarihinden sonra ya yeni bir vizeye başvurmak ihtiyacınız ya da ülkeyi terketme durumunuz doğar.
                                            <br>
                                            <br>
                                            <strong>16.	İşletmemi kapatıp başkasının yanında çalışırken vizemi uzatabilirmiyim? <br></strong> Hayır, böyle bir durum söz konusu olmamaktadır.
                                            <br>
                                            <br>
                                            <strong>17.	Başvuru yapmak için gerekli kaynağa sahip değilim, yine de başvurabilir miyim? <br></strong> Bu durumda başvurunuz yetersiz kabul edilecektir.
                                            <br>
                                            <br>
                                            <strong>18.	Başvuruda bulunmak istiyorum ancak işletme kurmak değil vize istiyorum, mümkün mü? <br></strong> Hayır, sahte başvuru Birleşik Krallıkta en ciddi suçlardan birisidir. Bu durumda Birleşik Krallığa girmekten men edilebilirsiniz ve başvurunuza yardımcı olan danışmanlar zor durumda kalabilir.
                                            <br>
                                            <br>
                                            <strong>19.	Okulda’ki İngilizce eğitimim yeterli olur mu? <br></strong> Bu durumda yine İngilizce test sınavını tamamlamanız gerekmektedir.
                                            <br>
                                            <br>
                                            <strong>20.	Ailem ve ben devlet desteği alabilirmiyiz?<br></strong> Bu vize türünde aileniz veya kendiniz devlet yardımına hak kazanamazsınız.
                                            <br>
                                            <br>
                                            <strong>21.	Bu vize türüne başvurmak istiyorum, ancak kaynağın bir kısmı kendime ait değil. Başvurabilir miyim? <br></strong> Bu kaynakları işletmenizin yararına kullanabilme imkanınız olduğunu kanıtladığınız sürece evet.
                                            <br>
                                            <br>
                                            <strong>22.	Başvurumun sonucu ne kadar sürede belli olur? <br></strong> Genelde bekleme süresi 3 hafta olmakla birlikte, bu süre başvurunuzun ne kadar kompleks olduğu ile de alakalıdır.
                                            <br>
                                            <br>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingTwo">
                                        <h4 class="panel-title">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                      Tier 1 Yatırımcı Vizesi
                    </a>
                  </h4>
                                    </div>
                                    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                        <div class="panel-body">
                                            <strong>1.	Bu vizeye kim başvurabilir? <br></strong> Bu vize türüne Birleşik Krallık’ta bir işletme kurmak isteyen ve belirli bir miktar yatırım yapmak isteyen kişiler başvurabilir.
                                            <br>
                                            <br>
                                            <strong>2.	Yeterlilik koşulu nedir? <br></strong> İşletmeyi kurabilmek için £2 milyon kaynağınız olması gerekir. Buna ek olarak paranın size ait olması şartı aranır(İstisnalar dışında).
                                            <br>
                                            <br>
                                            <strong>3.	Avrupa Birliği vatandaşı olarak başvurabilir miyim?<br></strong> Hayır, bu vize Avrupa Birliği veya İsviçre vatandaşı olmayan yabancı ülke vatandaşları için mevcuttur.
                                            <br>
                                            <br>
                                            <strong>4.	İngilizce dil koşulu mevcutmudur? <br></strong> Hayır, yatırımcı vizesi başvuru sahiplerini İngilizce dil koşulundan muhaf tutan bir vize türüdür.
                                            <br>
                                            <br>
                                            <strong>5.	Bu vize türü ile ne süre ile Birleşik Krallık’ta bulunabilirim? <br></strong> Tier 1 yatırımcı vizesi 3 sene 4 ay süre ile verilmektedir.
                                            <br>
                                            <br>
                                            <strong>6.	Vizeyi uzatma imkanım var mı? <br></strong> Evet, şartları yerine getirmek koşulu ile 2 yıl süre ile uzatma imkanınız bulunmaktadır.
                                            <br>
                                            <br>
                                            <strong>7.	Daimi ikametgaha başvurabilirmiyim? <br></strong> Gerekli miktar yatırım yaptığınız sürece sınırsız oturum hakkına başvurabilmektesiniz.
                                            <br>
                                            <br>
                                            <strong>8.	Daimi ikametgahı daha önce kazanma imkanım var mı? <br></strong> Evet ancak bu durum yatırım yapacağınız miktara göre değişebilmektedir. Büyük miktarda yapılan yatırımlar sonucu daha hızlı almak imkanı vardır.
                                            <br>
                                            <br>
                                            <strong>9.	Bu vize ailemi yanımda getirmeme izin sağlar mı? <br></strong> Evet, ailenizi yanınızda getirebilirsiniz. Onlar da sizin vizenize benzer bir vizeye sahip olacaklardır.
                                            <br>
                                            <br>
                                            <strong>10.	Hangi aile üyeleri başvuruda bulunabilir? <br></strong> Eşiniz ve 18 yaşından küçük çocuklarınız başvuruda bulunma hakkına sahiptir.
                                            <br>
                                            <br>
                                            <strong>11.	Aile üyelerimi yanımda getirdiğim zaman çocuklarım öğrenim görebilir mi?<br></strong> Evet, çocuklarınız Birleşik Krallık eğitim sistemine ulaşım hakkına sahip olacaktır.
                                            <br>
                                            <br>
                                            <strong>12.	Sermayeyi nasıl bulundurmalıyım?<br></strong> Home Office başvuru sırasında £ 2 milyon’un Birleşik Krallıktaki bir bankada bulunması koşulunu aramaktadır.
                                            <br>
                                            <br>
                                            <strong>13.	Başvuru süremden bir kaç yıl önce yatırım yaptım, vize hakkım var mı? <br></strong> Hayır, yatırım başvuru tarihinden 12 ay önce veya giriş tarihinden 3 ay önce yapılmış olmalıdır.
                                            <br>
                                            <br>
                                            <strong>14.	Paranın kaynağını açıklamak zorunda mıyım? <br></strong> Evet, paranın sizin olduğunu ve onu istediğiniz gibi kullanacağınızı kanıtlamanız gerekmektedir.
                                            <br>
                                            <br>
                                            <strong>15.	Bu kaynağı kanıtlayamadığım zaman sonucu ne olur? <br></strong> Bu durumda vizeniz kabul edilmeyecektir.
                                            <br>
                                            <br>
                                            <strong>16.	Birleşik Krallık içerisinden bu vizeye başvurabilir miyim? <br></strong> Evet.
                                            <br>
                                            <br>
                                            <strong>17.	Vizemi uzatmak için ne gerekli? <br></strong> Vizenizi uzatabilmeniz için £ 2 Milyon’un kontrolunuz altında ve Devlet hisselerine yatırmış olmanız gerekmektedir
                                            <br>
                                            <br>
                                            <strong>18.	Başvurumun sonucu ne kadar sürede belli olur? <br></strong> Genelde bekleme süresi 3 hafta olmakla birlikte, bu süre başvurunuzun ne kadar kompleks olduğu ile de alakalıdır.
                                            <br>
                                            <br>
                                            <strong>19.	Bu vizeye başka türlü başvurma imkanım var mı? <br></strong> Evet, bu durumda £750 000’dan az olmamak koşuluyla Birleşik Krallığa yatırım yapmanız ve £1 Milyon’u bir Birleşik Krallık firmasına deposit etmeniz gerekmektedir
                                            <br>
                                            <br>
                                            <strong>20.	£2 Milyon farklı banka hesaplarında bulunması halinde vize alabilirmiyim? <br></strong> Hayır, miktarın aynı banka hesabında olması gerekir.
                                            <br>
                                            <br>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingThree">
                                        <h4 class="panel-title">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                      Tek Temsilci Vizesi
                    </a>
                  </h4>
                                    </div>
                                    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                        <div class="panel-body">
                                            <strong>1.	Bu vizeye kim başvurabilir?<br></strong> Bu vize türü çalışanlarını Birleşik Krallığa şubelerine temsilci olarak göndermek isteyen kişiler içindir.
                                            <br>
                                            <br>
                                            <strong>2.	Nasıl başvurabilirim? <br></strong> Bu vizeye basvurmak isteyen firmalar, çalışanını İngilterede kendi ülkesinde mevcut firmasının şubesini açmaya göndermektedir.
                                            <br>
                                            <br>
                                            <strong>3.	Ben bir işletme sahibiyim ve Londra’ya bu vize ile gelip bir şirket şubesi açmak istiyorum. <br></strong> Maalesef, işletme sahipleri bu vizeye şahısları adına başvuramamaktadır.
                                            <br>
                                            <br>
                                            <strong>4.	Kimler işletme sahibi sayılır?<br></strong> Göçmenlik kuralları çerçevesinde işletme sahipleri işletmenin genel payını elinde bulunduranlardır. Bu vizeye başvurmak için elinizde en fazla %30-35 hissenin hakimiyeti bulunmalıdır.
                                            <br>
                                            <br>
                                            <strong>5.	Şirketim tek temsilci vizesi için başvurmaya yetkili midir?<br></strong> Şirketin mevcut ve gerçek olması gerekmektedir. Bir seneden az bir geçmişi olan şirketler bu vizeyi almakta çok başarılı olmayacaktır.
                                            <br>
                                            <br>
                                            <strong>6.	Hangi  koşullarda işçimi gönderebilirim? <br></strong> Birleşik Krallığa gelecek temsilcinin bu eylemi kişiden çok firmanın yararına olması gerekmektedir. Buna ek olarak, temsilciye verilen bütçe Birleşik Krallıkta şube açmak için gerçekçi olması gerekmektedir.
                                            <br>
                                            <br>
                                            <strong>7.	Öncelikle Birleşik Krallığa birisini tek temsilci olarak göndermek daha sonra firmanın merkezini londraya taşımak istiyorum. <br></strong> Maalesef böyle bir olanak bulunmamakla, şirketin merkezinin yabancı bir ülkede bulunması gerekir.
                                            <br>
                                            <br>
                                            <strong>8.	Kim Birleşik Krallığa gelmeye uygundur?<br></strong> Bu kişinin kıdemli çalışan olması gerekmektedir. Uygunluk denetlenirken kıdemli çalışanın ne süreyle firmada bulunduğu ve firmanın işleyişi hakkında ne kadar bilgi sahibi olduğu göz önünde bulundurulacaktır.
                                            <br>
                                            <br>
                                            <strong>9.	Bu vize  tek temsilcinin ailesini yanında getirmesine izin sağlar mı? <br></strong> Evet, tek temsilciler ailenizi yanınızda getirebilirsiniz. Onlar da sizin vizenize benzer bir vizeye sahip olacaklardır.
                                            <br>
                                            <br>
                                            <strong>10.	Aile üyeleri yanımda getirdiğim zaman çocuklarım öğrenim görebilir mi? <br></strong> Evet, tek temsilci çocukları Birleşik Krallık eğitim sistemine ulaşım hakkına sahip olacaktır.
                                            <br>
                                            <br>
                                            <strong>11.	Temsilcinin eşleri çalışma hakkına sahip midir? <br></strong> Evet, bu durumda eşler işe başvurabilir veya eğitim alabilirler.
                                            <br>
                                            <br>
                                            <strong>12.	Başvurunun başarılı olması halinde ne kadar kalabilirim? <br></strong> 3 senelik bir vize temin edilir, eğer gerek görülürse 2 senelik uzatma bu süreden sonra mümkündür.
                                            <br>
                                            <br>
                                            <strong>13.	Bu vize sonunda kalmak için başvurabilirmiyim?<br></strong> Evet, vize sonucunda 5 senenin sonunda oturuma başvuru hakkınız doğar.
                                            <br>
                                            <br>
                                            <strong>14.	Şube ile olan antlaşmamı kestim veya şube iflas etti, uzatmaya başvurabilirmiyim?<br></strong> Hayır, ancak vize tarihinin sonuna kadar oturma hakkınız devam edecektir.
                                            <br>
                                            <br>
                                            <strong>15.	Birden fazla kişi temsilci olarak Birleşik Krallığa gönderilebilir mi? <br></strong> Hayır, bu vize için sadece 1 tane temsilci gönderebilirsiniz.
                                            <br>
                                            <br>
                                            <strong>16.	Tek temsilci acente gibi çalışabilir mi?<br></strong> Hayır, temsilci tam süre ile çalışığ şubede bulunmak zorundadır. Bu durumda 2. Bir işi veya acente olarak çalışma imkanı bulunmamaktadır.
                                            <br>
                                            <br>
                                            <strong>17.	Başvurumun sonucu ne kadar sürede belli olur? <br></strong> Genelde bekleme süresi 3 hafta olmakla birlikte, bu süre başvurunuzun ne kadar kompleks olduğu ile de alakalıdır.
                                            <br>
                                            <br>
                                            <strong>18.	Birleşik Krallıkta mevcut bir şube olması durumunda yine de başvuruda bulunulabilir mi? <br></strong> Mümkün olabilir.
                                            <br>
                                            <br>
                                            <strong>19.	Şirketim adına Birleşik Krallığa gelmek istiyorum başka bir yol var mı? <br></strong> Evet, bu durumda Tier 1 Girişimci vizesine başvurabilirsiniz.
                                            <br>
                                            <br>
                                            <strong>20.	Oturum izni daha kısa sürede alma imkanım var mı? <br></strong> Bu vize türü için maalesef.
                                            <br>
                                            <br>
                                            <strong>21.	Tek temsilci 2. Bir işte çalışabilir mi?  <br></strong> Hayır, sadece firmanın şubesinde çalışabilir. Kişinin 2. Bir işte çalıştığı ortaya cıkması halinde göçmenlik hukuku kuralları çerçevesinde kişi ceza ile karşı karşıya kalabilir.
                                            <br>
                                            <br>

                                        </div>
                                    </div>
                                </div>

                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingFour">
                                        <h4 class="panel-title">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                      Ankara Antlaşması Vizesi
                    </a>
                  </h4>
                                    </div>
                                    <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                                        <div class="panel-body">
                                            <strong>1.	Kimler başvurabilir? <br></strong> Bu vize Birleşik Krallıkta ticari işletme açmak isteyen Türk vatandaşlarını hedef almaktadır.
                                            <br>
                                            <br>
                                            <strong>2.	Çift vatandaşlığım bulunması durumunda başvuru yapabilir miyim? <br></strong> Evet, Türk vatandaşlığınızı kanıtlayabildiğiniz sürece bu vizeye başvuru hakkınız mevcuttur.
                                            <br>
                                            <br>
                                            <strong>3.	Nasıl Başvurabilirim? <br></strong> Öncelikle, Türk vatandaşı olmalısınız ve Birleşik Krallıkta bir işletme açma, mevcut bir işletmeye ortak olmak iradenizin bulunması gerekir.
                                            <br>
                                            <br>
                                            <strong>4.	Ne zaman başvurabilirim? <br></strong> Birleşik Krallığa gelme tarihinizden 3 ay önceye kadar başvuru hakkınız mevcuttur.
                                            <br>
                                            <br>
                                            <strong>5.	Vizemi almam ne kadar sürer? <br></strong> Genelde 3 ay sürmektedir, ancak başvurunun içeriğine göre bu süre uzayıp kısalabilmektedir.
                                            <br>
                                            <br>
                                            <strong>6.	Bu vize ile Birleşik Krallıkta ne kadar kalabilirim?<br></strong> 12 ay süre ile Birleşik Krallıkta kalma hakkı kazanırsınız. Bu sürenin sonunda uzatma için başvuruda bulunulur.
                                            <br>
                                            <br>
                                            <strong>7.	Bu vizeyi uzatmak istediğim zaman uzatma süresi ne kadardır? <br></strong> Başarılı olan uzatma isteği sonunda başvuru sahibi 3 senelik bir uzatmaya hak kazanır. Bu süreden sonra ise Oturuma başvurabilir.
                                            <br>
                                            <br>
                                            <strong>8.	Uzatmaya nasıl başvurabilirim? <br></strong> Başvuru sırasında hala aynı işletmeyi işlettiğinizi kanıtlamanız gerekmektedir. Bu vize türünde gelir artışınızı veya iş yaratmanızı kanıtlamak zorunda değilsiniz.
                                            <br>
                                            <br>
                                            <strong>9.	Bu vize ile ne yapabilirim? <br></strong> Bu vizenin amacı sizin Birleşik Krallıkta iş açmanıza olanak sağlamaktır. Bu vize türüne diğer vize türlerinden de geçiş imkanı bulunmaktadır başvuru sırasında bir işletme sahibi olmamak koşulu ile.
                                            <br>
                                            <br>
                                            <strong>10.	Bu vize ailemi yanımda getirmeme izin sağlar mı? <br></strong> Evet, ailenizi yanınızda getirebilirsiniz. Onlar da sizin vizenize benzer bir vizeye sahip olacaklardır.
                                            <br>
                                            <br>
                                            <strong>11.	Aile üyelerim halihazırda Birleşik Krallıkta, başvuru yapabilirler mi? <br></strong> Evet, ancak bu durumda göçmenlik kurallarına aykırı hareket etmediklerini kanıtlamaları gerekecektir.
                                            <br>
                                            <br>
                                            <strong>12.	Hangi belgeleri sağlamam gerekir? <br></strong> Ekonomik durumunuzu kanıtlayan, aile fertleri ile ilişkinizi kanıtlayan ve kalacağınız yeri kanıtlayan belgelere ihtiyaç vardır.
                                            <br>
                                            <br>
                                            <strong>13.	Vize uzatma talebimin kararı ne kadar sürer? <br></strong> Genelde 6 ay kadar sürmekte olup her olayın içeriğine göre değişmektedir.
                                            <br>
                                            <br>
                                            <strong>14.	Birleşik Krallığa sadece vizeyi almak için gelmek istiyorum, daha sonra başka bir işte çalışacağım. <br></strong> Böyle bir şey söz konusu olmamaktadır, 2. Bir iş yaptığınız anlaşılması halinde Birleşik Krallık’a girmekten med edilebilirsiniz.
                                            <br>
                                            <br>
                                            <strong>15.	 Devlet yardımı alabilir miyim? <br></strong> Hayır, bu vize altında devlet yardımı almanız mümkün değildir.
                                            <br>
                                            <br>
                                            <strong>16.	Bu vize türüne geçiş yapabilir miyim?<br></strong> Eski vizenizin süresi dolmadığı sürece başvuruda bulunabilirsiniz.
                                            <br>
                                            <br>
                                            <strong>17.	Eşim bu vize ile çalışabilir mi? <br></strong> Evet bu vize ile başvuru sahiplerinin eşleri çalışma hakkı kazanır.
                                            <br>
                                            <br>
                                            <strong>18.	Vize için hak kazandım ve işletmemi aldatma ile kurdum başvuru yapabilirmiyim?<br></strong> Böyle durumlarda danışmanlar çekingen davranmaktadır.
                                            <br>
                                            <br>
                                            <strong>19.	Daha önce sahte dokumandan dolayı reddedildim, başvurabilir miyim?<br></strong> Evet bu bir engel değildir ancak başvurunuzu etkileyecek bir durumdur.
                                            <br>
                                            <br>
                                            <strong>20.	Bir kişi ortak olarak firmama gelebilir mi ve işçi çalıştırabilir miyim?<br></strong> Pek tabii ki.
                                            <br>
                                            <br>

                                        </div>
                                    </div>
                                </div>

                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingFive">
                                        <h4 class="panel-title">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                      Tier 2 Sponsor Lisansı
                    </a>
                  </h4>
                                    </div>
                                    <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
                                        <div class="panel-body">
                                            <strong>1. Tier 2 sponsor lisansı nedir? <br></strong> Tier 2 kapsamında sponsor, Birleşik Krallık menşeli ve yabancı bir çalışanı işe almak isteyen bir firma anlamına gelmektedir.
                                            <br>
                                            <br>
                                            <strong>2. Tier 2 sponsor lisansı için ne zaman başvurulur? <br></strong> Şirketinizin Birleşik Krallıkta olması durumunda sponsor lisansı için her an başvurma imkanınız vardır.
                                            <br>
                                            <br>
                                            <strong>3.	Lisansın geçerlilik süresi nedir?<br></strong> Sponsor lisansı 4 sene süre ile geçerlidir, bu süreden sonra yenileme imkanı mevcuttur.
                                            <br>
                                            <br>
                                            <strong>4.	Hangi evrakları Home Office’e göndermeliyim? <br></strong> Bu evraklar işletmenin türüne göre değişebilmektedir. Liste sınırlı olmamakla birlikte, size bu konuda yardımcı olabiliriz.
                                            <br>
                                            <br>
                                            <strong>5.	Derecelendirme sistemi nedir? <br></strong> Derecelendirme sistemi şirketinizin sponsor lisansı alabilmek için yeterli olup olmadığınızı ölçer. A Derece şirketler en iyi şirketler olarak geçer, B derece ise şirketin bazı şeyleri düzeltmesi gerektiğini belirtir.
                                            <br>
                                            <br>
                                            <strong>6.	B Derecesi edindim, işletmemi ne yönde etkiler?  <br></strong> Eğer A’dan B derecesine düştü iseniz veya B derecesi ilk dereceniz ise her zaman A derecesine çıkma imkanınız bulunmaktadır. Bu durumda hareket planı ve belirli bir zaman dilimi belirli problemlerin düzeltilmesi için tanınır.
                                            <br>
                                            <br>
                                            <strong>7.	Derecemi geliştirebilir miyim? <br></strong> Eğer A’dan B derecesine düştü iseniz veya B derecesi ilk dereceniz ise her zaman A derecesine çıkma imkanınız bulunmaktadır. Bu durumda hareket planı ve belirli bir zaman dilimi belirli problemlerin düzeltilmesi için tanınır.
                                            <br>
                                            <br>
                                            <strong>8.	Eylem planı nedir, yapmak zorunda mıyım? <br></strong> Eylem planı şirketinizin mevcut problemlerini, geliştirilmesi gereken alanları size gösterir. A Derecesine yükselme amacınız var ise eylem planına göre hareket etmek sizin işinize yarayacaktır.
                                            <br>
                                            <br>
                                            <strong>9.	Bir kereden fazla sefer derece düşme ihtimali var mı? <br></strong> Evet, 4 sene içerisinde 2 kere B derecesi alma riskiniz mevcut, 3 . seferde lisansınız iptal edilir.
                                            <br>
                                            <br>
                                            <strong>10.	Başvurum reddedildi ne yapmalıyım? <br></strong> Maalesef bu durumda itiraz hakkınız bulunmamaktadır ve 12 ay süre beklemeniz gerekmektedir yeni lisans için.
                                            <br>
                                            <br>
                                            <strong>11.	Lisansım iptal edildi tekrar başvurabilir miyim? <br></strong> 2 yıllık yasağın sonlanması ile birlikte başvuru hakkınız mevcuttur.
                                            <br>
                                            <br>
                                            <strong>12.	Lisansımı yeni aldım kaç kişi çalıştırabilirim? <br></strong> Lisansınızı elde ettikten sonra kaç kişi çalıştırmak istediğinizi SMS sisteminde belirtmeniz gerekmektedir. Sponsor lisansları sınırlı sayıda olmakla beraber her ay başvurabilirsiniz. Kullanılmayan lisanslar belirli bir süre sonra iptal olacaktır. Diğer yandan, özellikle anlaşarak sayısız insan’a lisans verebilirsiniz.
                                            <br>
                                            <br>
                                            <strong>13.	İnsanları işe aldıktan sonra yapmam gereken nedir? <br></strong> A derece bir firma iseniz göçmenin ne yaptığı hakkında bir rapor sunmanız beklenir.
                                            <br>
                                            <br>
                                            <strong>14.	Sponsor Lisansı ne kadar süre ile geçerli? <br></strong> Lisansın alınmasından itibaren 3 ay ile sınırlı.
                                            <br>
                                            <br>
                                            <strong>15.	Home office iş yerimle ilgili denetleme ayarladı neden? <br></strong> Bu genel bir prosedürdür. Home Office, iş yerinizi kontrol etmek her şeyin yolunda olup olmadığına bakmak yetkisine sahiptir.
                                            <br>
                                            <br>
                                            <strong>16.	Lisansımı aldım, göçmen işçi alabilirmiyim?<br></strong> Öncelikle RLM test ini geçmeniz gerekmektedir.
                                            <br>
                                            <br>
                                            <strong>17.	RLM Testi nedir? <br></strong> Bu test İngiliz ve Avrupalı çalışanlar için yapılan adillik testidir.
                                            <br>
                                            <br>
                                            <strong>18.	RLMT olmadan göçmen çalıştırabilir miyim? <br></strong> Evet eğer devletin belirlediği eksiklik olan iş alanlarından birisinde çalışıyorsanız bu hak mevcuttur.
                                            <br>
                                            <br>
                                            <strong>19.	Başka bir firmadan çalışan çalıştırmak istiyorum. <br></strong> Eğer kişi eksiklik listesinde değil ise RLM testine girmesi gerekmektedir.
                                            <br>
                                            <br>
                                            <strong>20.	İngiliz ve Avrupa Birliği vatandaşı olan kişilerden başvuru aldım, onları görmezden gelebilir miyim?<br></strong> Hayır mevcut göçmenlik yasaları çerçevesinde İngiliz veya Avrupa Birliği vatandaşını görevlendirmelisiniz. Bu durumu açıklayabilirseniz bu kişileri kabul etmeme hakkına sahipsiniz.
                                            <br>
                                            <br>

                                        </div>
                                    </div>
                                </div>

                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingSix">
                                        <h4 class="panel-title">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                      Tier 4 Sponsor Lisansı
                    </a>
                  </h4>
                                    </div>
                                    <div id="collapseSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix">
                                        <div class="panel-body">
                                            <strong>1.	Tier 4 Sponsor lisansına ne zaman başvurabilirim? <br></strong> Tier 4 lisansına Birleşik Krallıkta yerleşik ve hakiki bir işletmeniz olduğu sürece her zaman başvurabilirsiniz.
                                            <br>
                                            <br>
                                            <br>
                                            <br>
                                            <strong>2.	Lisansımın geçerlilik süresi ne kadaradır? <br></strong> Sponsorship lisansı 4 sene geçerli olmak üzere verilmektedir. Bu süre sonunda yenileme imkanınız mevcuttur.
                                            <br>
                                            <br>
                                            <strong>3.	Kurumuma kısa süreli öğrenci kabul edebilir miyim? <br></strong> Evet.
                                            <br>
                                            <br>
                                            <strong>4.	Home Office’e hangi belgeleri göndermem gerekir?<br></strong> Bu durum işletmenizin tipine göre değişmektedir. Mann’s Solutions belgeler konusunda size yardım etmeye hazırdır.
                                            <br>
                                            <br>
                                            <strong>5.	Derecelendirme sistemi nedir?<br></strong> Derecelendirme sistemi şirketinizin sponsor lisansına ne kadar hazır olduğunu değerlendirir. Şirketinizin A derece alması herhangi bir sponsor lisansı alırken problem yaşamayacağınızı gösterir. B derece şirketlerde ise şirketin kriterleri yerine getirdiği ancak geliştirmesi gereken unsurlar olduğunu göstermektedir.
                                            <br>
                                            <br>
                                            <strong>6.	Şirketim B ile derecelendirildi işletmemi etkiler mi? <br></strong> Eğer bundan önce A Derecesine sahipseniz ve B derecesine düşüş mevcutsa, Avrupa Birliği dışarısından öğrenci kabul edemezsiniz.
                                            <br>
                                            <br>
                                            <strong>7.	Derecemi geliştirebilir miyim? <br></strong> Eğer A’dan B derecesine düştü iseniz veya B derecesi ilk dereceniz ise her zaman A derecesine çıkma imkanınız bulunmaktadır. Bu durumda hareket planı ve belirli bir zaman dilimi belirli problemlerin düzeltilmesi için tanınır.
                                            <br>
                                            <br>
                                            <strong>8.	Eylem planı nedir, yapmak zorunda mıyım? <br></strong> Eylem planı şirketinizin mevcut problemlerini, geliştirilmesi gereken alanları size gösterir. A Derecesine yükselme amacınız var ise eylem planına göre hareket etmek sizin işinize yarayacaktır.
                                            <br>
                                            <br>
                                            <strong>9.	Bir kereden fazla sefer derece düşme ihtimali var mı? <br></strong> Evet, 4 sene içerisinde 2 kere B derecesi alma riskiniz mevcut, 3 . seferde lisansınız iptal edilir.
                                            <br>
                                            <br>
                                            <strong>10.	Başvurum reddedildi ne yapmalıyım? <br></strong> Maalesef bu durumda itiraz hakkınız bulunmamaktadır ve 12 ay süre beklemeniz gerekmektedir yeni lisans için.
                                            <br>
                                            <br>
                                            <strong>11.	Lisansım iptal edildi tekrar başvurabilir miyim? <br></strong> 2 yıllık yasağın sonlanması ile birlikte başvuru hakkınız mevcuttur.
                                            <br>
                                            <br>
                                            <strong>12.	Öğrencinin kursa kayıdından sonra ne yapmalıyım?<br></strong> Eğer A derece bir eğitim kurumu iseniz öğrencinin yıl boyunca neler yaptığını raporlamalısınız.
                                            <br>
                                            <br>
                                            <strong>13.	Home office iş yerimle ilgili denetleme ayarladı neden? <br></strong> Bu genel bir prosedürdür. Home Office, iş yerinizi kontrol etmek her şeyin yolunda olup olmadığına bakmak yetkisine sahiptir.
                                            <br>
                                            <br>
                                            <strong>14.	Öğrenci uzun süredir derslere gelmiyor, öğrencinin durumu ne olacak? <br></strong> Böyle durumlarda öğrencinin sponsorluğunun iptal olması gündeme gelebilir. Bu problem devamlılık kazanır ve Home Office’e raporda bulunmaz ise eğitim kurumu da sonunda zarar görebilir.
                                            <br>
                                            <br>
                                            <strong>15.	Kurumum Avrupa Birliği öğrencilerine de sertifika vermeli mi? <br></strong> Hayır, Avrupa Birliği vatandaşı öğrencilerin Birleşik Krallıkta okumaları için sponsora ihtiyaçları yoktur.
                                            <br>
                                            <br>
                                            <strong>16.	Öğrenci üniversite veya kurs değiştirebilir mi? <br></strong> Evet, ancak bu durumda öğrencinin CAS belgesini sağlaması gerekmektedir.
                                            <br>
                                            <br>
                                            <strong>17.	Lisansımı iptal etmelimiyim? <br></strong> Evet, lisansınızın bitmesini bekleyebilir veya Home Office ile iletişime geçim lisansınızı sona erdirebilirsiniz.
                                            <br>
                                            <br>
                                            <strong>18.	18 yaşın altında öğrenci kabul edebilirmiyim?<br></strong> Evet, bu durumda öğrenci adayından ek belgeler talep edilebilir.
                                            <br>
                                            <br>
                                            <strong>19.	Öğrenciler ek ders alabilirler mi? <br></strong> Evet, ancak ek derslerin asıl alınan eğitimi engellememesi gerekmektedir.
                                            <br>
                                            <br>
                                            <strong>20.	15 yaşının altındaki öğrencilere İngilizce eğitimi vere bilirmiyim?<br></strong> Evet, bu durumda öğrenci adayı ancak ve ancak kısa süreli öğrenci vizesine başvurabilmektedir.
                                            <br>
                                            <br>


                                        </div>
                                    </div>
                                </div>

                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingSeven">
                                        <h4 class="panel-title">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                      Uygunluk Yardımı
                    </a>
                  </h4>
                                    </div>
                                    <div id="collapseSeven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSeven">
                                        <div class="panel-body">
                                            <strong>1.	Uygunluk yardımı nedir? <br></strong> Mann’s Solutions Tier 2 ve Tier 4 Sponsor lisanslarının yasal uyumluluğu içine size yardım eder, ve şirketinizi değişen yasal düzenlemelerden haber eder.
                                            <br>
                                            <br>
                                            <strong>2.	Nasıl yardım edebilirsiniz? <br></strong> Şirket olarak sponsor lisansı almanızda ve bu sürede yapmanız gerekenler hakkında yardım sağlayabiliriz. Lisans başvurusu sürecinde toplamanız gereken belgeler, şirketinizin sponsor lisansı şartları ile uyumluluğu konusunda size yardım edebilir başarı ihtimalini arttırabiliriz.
                                            <br>
                                            <br>
                                            <strong>3.	Sponsor Lisansı hazırlamama yardımcı olurmusunuz? <br></strong> Başından sonuna kadar size rehberlik edebilir tavsiyelerde bulunabiliriz.
                                            <br>
                                            <br>
                                            <strong>4.	Şirketim B Derece lisans aldı ve eylem planı önerildi yardım edebilir misiniz? <br></strong> Size eylem planını yoluna koyma ve yerine getirip tekrar A Derece almanız için yardım edebiliriz.
                                            <br>
                                            <br>
                                            <strong>5.	Home Office şirketimde denetim yapmak istiyor. Nasıl yardımcı olursunuz? <br></strong> Bu durumda sizin yasal temsilciniz konumunda bulunabilir, ve denetleme süresi boyunca sonucun iyi çıkması adına yararınıza çalışabiliriz.
                                            <br>
                                            <br>
                                            <strong>6.	Uygunluk yardımı almak zorunda mıyım? <br></strong> Uygunluk yardımı zorunlu olmamakla birlikte, bu hizmet firmanızın ileri dönemlerde Home Office ile bir problem yaşamaması ve zaman kaybının önlenmesi amacıyla Mann’s Solutions tarafından önerilmektedir.
                                            <br>
                                            <br>
                                            <strong>7.	Uygunluk yardımını iptal edebilir miyim? <br></strong> Evet, bize ne alanda yardım almak istediğinizi ve ne kadar süre ile yardım almak istediğiniz bildirdiğiniz sürece mümkün.
                                            <br>
                                            <br>
                                            <strong>8.	Uygunluk yardımı Tier 2 ve Tier 4 için değişiklik gösterir mi? <br></strong> Evet, her şirketin kendi özelliklerine göre farklı uygunluk şartları aranır.
                                            <br>
                                            <br>
                                            <strong>9.	Lisans almak yolunda şansımı arttırabilir misiniz? <br></strong> Evet, bizden yardım istediğiniz anda sizin için rehberlik hizmeti hazırlanır ve alabileceğiniz derecelendirme hesaplanır.
                                            <br>
                                            <br>
                                            <strong>10.	Sadece vize almak amacıyla gelen öğrencilerimiz mevcut ne yapabiliriz? <br></strong> Böyle durumlarda bu bilgiyi Home Office ‘e raporlamanız şirketinizin geleceği ve derecesi açısından önemlidir.
                                            <br>
                                            <br>
                                            <strong>11.	İşyerimde işe gelmeyen işçi mevcut ne yapmalıyım? <br></strong> Böyle durumlarda bu bilgiyi Home Office ‘e raporlamanız şirketinizin geleceği ve derecesi açısından önemlidir.
                                            <br>
                                            <br>
                                            <strong>12.	Şirketimin derecesi B’ye düşürüldü, nasıl etkiler? <br></strong> Bu durumda Home Office tarafından hazırlanan eylem planını harekete geçirmeniz gerekmekte. Ancak yine de mevcut çalışanlarınız için sponsor lisansı çıkarabilirsiniz.
                                            <br>
                                            <br>
                                            <strong>13.	Sponsorluk Lisansımın iptal olacağını düşünüyorum, ne yapabilirim? <br></strong> Bize ulaşmanız halinde yapmanız gerekenleri beraber inceleyip bir yol haritası çizebiliriz.
                                            <br>
                                            <br>
                                            <strong>14.	RLM Testini tamamlamak için ne yapmamız gerektiğini bilmiyoruz. <br></strong> Testi tamamlamak için belirli bir iş pozisyonu için 28 gün boyunca iş merkezinde ve gazetelerde ilan vermeniz gerekmektedir.
                                            <br>
                                            <br>
                                            <strong>15.	 Birleşik Krallığın Avrupa Birliğinden çıkması vizeleri etkiler mi? <br></strong> Şu an için herhangi bir sonuç gözükmemektedir. Dolayısıyla Avrupa Birliği vatandaşları için henüz vize şartı yoktur.
                                            <br>
                                            <br>
                                            <strong>16.	Kaç tane göçmen çalıştırabilirim? <br></strong> Bu sayı firmanızın büyüklüğü ile değişmektedir.
                                            <br>
                                            <br>
                                            <strong>17.	 Çalışanımız/Öğrencimiz bizi terk edip başka bir iş veya kurs bulmak istiyor. Ne yapmalıyız?<br></strong> İşe alırken veya öğrenime alırken olduğu gibi çıkma talepleri sırasında da göçmenlerin bu durumu hakkında SMS sistemine raporda bulunulması gerekir.
                                            <br>
                                            <br>
                                            <strong>18.	Türk vatandaşları için sponsor olabilir miyiz? <br></strong> Türk çalışanlar Tier 2 çalışan vizesinde Türk çalışan vizesine geçiş yapma hakkına sahiplerdir.
                                            <br>
                                            <br>
                                            <strong>19.	Daha fazla sponsorluk veremiyoruz ne kadar beklememiz lazım? <br></strong> Bu duruma göre farklılık gösterir. A derece sponsorluk lisansınız bulunuyor ise genelde gelecek ayı beklersiniz. B level sponsorluk lisansınız mevcutsa yeni sponsorluk verebilmeniz için A derecesine yükselmeniz beklenir.
                                            <br>
                                            <br>
                                            <strong>20.	 Sponsorluk Lisansı başvurum reddedildi ne yapabilirim?<br></strong> 3 farklı şansınız mevcuttur. Karara itiraz edebilirsiniz, kararın tekrar incelenmesini isteyebilirsiniz veya yeniden başvuruda bulunabilirsiniz.
                                            <br>
                                            <br>

                                        </div>
                                    </div>
                                </div>

                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingEight">
                                        <h4 class="panel-title">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                      Tier 2 (Genel) Vizesi
                    </a>
                  </h4>
                                    </div>
                                    <div id="collapseEight" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingEight">
                                        <div class="panel-body">
                                            <strong>1.	Bu vizeye kimler başvurabilir? <br></strong> Bu vizeye Avrupa Birliği veya İsviçre vatandaşı olmayan Birleşik Krallıkta iş teklifi alan yabancı ülke yetenekli işçileri başvurabilir.
                                            <br>
                                            <br>
                                            <strong>2.	Yetenekli işçi nedir? <br></strong> Yetenekli işçi özel bir antrenman almış, iş alanında belirli bir eğitim öğrenim ve tecrübe geçmişi olan bireyleri tanımlamaktadır.
                                            <br>
                                            <br>
                                            <br>
                                            <br>
                                            <strong>3.	İngilizce bilgim iyi değil, yine de başvurabilir miyim?<br></strong> Evet, ancak İngilizce bilginizin düşük olması halinde bu vizeye başvuru önerilmemektedir, çünkü belirli bir testi geçmeniz beklenir.
                                            <br>
                                            <br>
                                            <strong>4.	Basit bir işte tecrübem bulunmakta ancak yüksek eğitimim yok yine de başvurabilir miyim? <br></strong> Hayır, bu vize türü tecrübesi ve eğitimi olan yetenekli işçiler için mevcuttur.
                                            <br>
                                            <br>
                                            <strong>5.	Yetenekli bir işçinin sahip olması gereken tüm şartlara sahibim başvuru yapabilir miyim?<br></strong> Bu şartlar yerine getirildikten sonra, Birleşik Krallık’ta çalışabilmeniz için Tier 2 Sponsorluk Lisansı mevcut bir firmadan iş teklifi almanız gerekmektedir.
                                            <br>
                                            <br>
                                            <strong>6.	Tecrübem ve iş teklifim mevcut başvuru yapabilir miyim? <br></strong> Evet, kanıtlayabildiğiniz sürece başvuru yapabilirsiniz. Bu durumda İngilizce yeterlilik sınavını(IELTS) geçmeniz beklenecektir.
                                            <br>
                                            <br>
                                            <strong>7.	Birleşik Krallıkta iş vermek isteyen biri beni işe almak için ne yapması gerekir?<br></strong> Bu durumda, işverenin daha önceki sorularda belirtildiği üzere RLM test’ini yerine getirmesi gerekir. Bu testten sonra işveren size sponsorluk lisansını gösteren bir numara verir ve bu numara vize başvurusunda kullanılır.
                                            <br>
                                            <br>
                                            <strong>8.	İşverenim RLM testini her zaman tamamlamak zorunda mıdır? <br></strong> Eğer iş alanınız eksikler listesinde yer alıyor ise bu testin yapılması zorunlu değildir.
                                            <br>
                                            <br>
                                            <strong>9.	Tier 5 vizesi ile çalışmaktayım, bu vizeye başvuru hakkım var mı?  <br></strong> Tier 2 Sponsorluk Lisansı olan bir firmadan iş teklifi almanız halinde mümkündür.
                                            <br>
                                            <br>
                                            <strong>10.	Vize başvurusunda bulundum ne kadar sürer? <br></strong> Karar süresi genellikle 3 hafta civarıdır.Bu süre iş başvurunuzun içeriğine göre değişebilmektedir. Uzatma başvuruları ise genelde 8 hafta sürebilmektedir.
                                            <br>
                                            <br>
                                            <strong>11.	Tier 2 Vizesi ile ne kadar süre Birleşik Krallıkta kalabilirim? <br></strong> Bu vize ile maksimum 5 sene 14 gün Birleşik Krallık’ta kalabilirsiniz.
                                            <br>
                                            <br>
                                            <strong>12.	Tier 2 Vizesi ile ne zaman Birleşik Krallık’a gelebilirim? <br></strong> İşinizin başlayacağı tarihten itibaren 14 gün önce Birleşik Krallığa gelebilirsiniz.
                                            <br>
                                            <br>
                                            <strong>13.	Birleşik Krallık’a gelip işimi değiştirebilirmiyim? <br></strong> Evet, çalıştığınız firmayı değiştirme imkanınız var. Ancak işvereninizin Tier 2 Sponsorluk Lisansına sahip olması ve tekrar başvuru yapmanız gerekmektedir.
                                            <br>
                                            <br>
                                            <strong>14.	Bu vize ile Birleşik Krallık’a yerleşebilir miyim?<br></strong> Evet, devamlı bir şekilde 5 sene Birleşik Krallık’ta bulunmanız koşulu ile başvurabilirsiniz. 5 seneniz tamamlanmadığı takdirde uzatma talebinde bulunabilirsiniz.
                                            <br>
                                            <br>
                                            <strong>15.	Bu vize türü ile 2. Bir işte çalışma imkanım var mı? <br></strong> Evet, 2.bir işte haftada 20 saatten fazla olmamak koşulu ile çalışmanız mümkündür.
                                            <br>
                                            <br>
                                            <strong>16.	Bu vizeye başvurmak istiyorum ancak aynı zamanda eğitimime devam etmek istiyorum.<br></strong> Tier 2 vizesi ile aynı zamanda eğitim almanız mümkündür.
                                            <br>
                                            <br>
                                            <strong>17.	Birleşik Krallık’a gelmeden önce banka hesabımda para bulundurmalı mıyım?<br></strong> Evet, £945 miktarı 3 ay süre ile banka hesabınızda bulundurmanız gerekmektedir.
                                            <br>
                                            <br>
                                            <strong>18.	İşveren’im £20 800’ un altında bir kontrat teklif etti, yine de bu vizeye başvurabilir miyim? <br></strong> Maalesef, göçmenlik yasaları çerçevesinde bu vizeye başvurabilmek için en az £20 800 değerinde bir çalışma kontratı bulmanız gerekmektedir.
                                            <br>
                                            <br>
                                            <strong>19.	Sponsorum ilk bir kaç ay yaşam giderlerimi karşılamayı teklif etti, kabul edebilir miyim? <br></strong> Teklifi, düzenlemeyi kanıtlayabildiğiniz sürece kabul edebilirsiniz. İşvereniniz kalacağınız yeri karşılamadığı halde, nerede kalacağınız kanıtlayabilmeniz gerekmektedir.
                                            <br>
                                            <br>
                                            <strong>20.	Birleşik Krallık’ta vizeye sahibim Tier 2 vizesine geçiş yapabilir miyim? <br></strong> Evet, mevcut vizenizin türüne göre bu vizeye geçme hakkına sahipsiniz. Değiştirme konusunda size yardımcı olabiliriz.
                                            <br>
                                            <br>
                                            <strong>21.	Ailem benimle birlikte Birleşik Krallık’a gelebilir mi? <br></strong> Evet, Aile fertleri de vize sahibi bile Birleşik Krallık’a gelmeye hak kazanır, ancak sadece 18 yaşın altında çocuklar bu hakka sahiptir.
                                            <br>
                                            <br>
                                            <strong>22.	Sponsor’um Ailemin geçimi için kaynak sağlayabilir mi? <br></strong> Evet, Sponsorun A derece sponsorluk lisansına sahip olması ve fert başına ayda £630’ dan az olmamak üzere yardım sağlaması koşulu ile.
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
                                            <strong>1.	Tier 4 Öğrenci Vizesi nedir? <br></strong> Bu vize Avrupa Birliği veya İsviçre vatandaşı olmayıp Birleşik Krallık’da eğitim görmek isteyen yabancı öğrenciler içindir.
                                            <br>
                                            <br>
                                            <strong>2.	18 yaşından küçük biri için hangi vizeye başvurabilirim?<br></strong> Tier 4 çocuk vizesi 14-17 yaş arası öğrenciler için mevcuttur.
                                            <br>
                                            <br>
                                            <strong>3.	Bu vize için ne zaman başvurabilirim? <br></strong> Bu vizeye eğitim teklifi almanız ve bunu kanıtlamanız koşulu ile başvurabilirsiniz. Buna ek olarak İngilice Dil bilgisi de vize başvurusunda önemli bir yere sahip olacaktır.
                                            <br>
                                            <br>
                                            <strong>4.	Birleşik Krallık’a İngilizce öğrenmek için geliyorum bu vizeye başvurabilir miyim?<br></strong>
                                            <br>
                                            <br> Hayır, Birleşik Krallık’a İngilizce kursu, akedemi ve buna benzer eğitimler için gelen öğrencilere kısa süreli öğrenci vizesi mevcuttur.
                                            <br>
                                            <br>
                                            <strong>5.	İstediğim eğitim kurumuna katılabilir miyim? <br></strong> Kurumun Tier 4 sponsorluk lisansı bulunduğu sürece evet.
                                            <br>
                                            <br>
                                            <strong>6.	Avrupa Birliği vatandaşları bu vizeye başvurmak zorunda mı?<br></strong> Hayır, Avrupa Birliği vatandaşları vizeden muaflardır.
                                            <br>
                                            <br>
                                            <strong>7.	Birleşik Krallık’a ne zaman gelebilirim?<br></strong> Eğitiminizin başlama tarihinden 1 ay öncesine kadar giriş hakkınız mevcuttur.
                                            <br>
                                            <br>
                                            <strong>8.	Birleşik Krallık’ta ne kadar kalabilirim? <br></strong> Bu husus hangi kursu aldığınız ve kursunuzun süresi ile alakalı olarak değişiklik göstermektedir.
                                            <br>
                                            <br>
                                            <strong>9.	Bu vize ile çalışabilir miyim? <br></strong> Evet, Tier 4 Öğrenci vizesi sahiplerine haftada 20 saati aşmamak kaydı ile çalışma hakkı tanımaktadır. Eğer İngilizce öğrenmeye geldi iseniz bu süre 10 saattir.
                                            <br>
                                            <br>
                                            <strong>10.	Vizemin bitmesi halinde Birleşik Krallık’ta kalmaya devam edebilir miyim? <br></strong> Kursunuzun içeriğine bağlı olarak değişmekle beraber maksimum 4 ay süre ile kalabilirsiniz.
                                            <br>
                                            <br>
                                            <strong>11.	Bu vizeye geçiş yapabilir miyim? <br></strong> Evet bu vizeye geçiş yapabilmek mümkün ancak her vize türü bu vizeye geçiş için uygun değildir.
                                            <br>
                                            <br>
                                            <strong>12.	Birleşik Krallık’a gelmek için ne kadar param olması gerekir? <br></strong> Başvurunuzda Londra için her ay için en az £1265 göstermek zorundasınız. Eğer bir üniversite eğitimi alıyor iseniz bu süre 9 ay’dır.
                                            <br>
                                            <br>
                                            <strong>13.	Yurt ve diğer gereklilikler için ödemeyi yaptım, yine de bu miktarı göstermek zorunda mıyım?  <br></strong> Ödeme yaptığınız yurt ve gereklilikleri yukarıdaki toplam rakamdan çıkarabilme imkanınız vardır.
                                            <br>
                                            <br>
                                            <strong>14.	Üniverstemi değiştirmek istiyorum. <br></strong> Bu durumda yeni bir Tier 4 vizesine başvurmanız gerekmektedir.
                                            <br>
                                            <br>
                                            <strong>15.	Birleşik Krallık’ a ailemi getirmek istiyorum mümkün mü? <br></strong> Eğer bir yüksek eğitim kurumunda öğrenim görüyor iseniz 1 yıl’ı aşmamak kaydı ile evet.
                                            <br>
                                            <br>
                                            <strong>16.	Ailem gelir göstermek zorunda olacak mı? <br></strong> Evet, bu durumda aileniz geçimini karşılayabilecek bir miktarı kanıt olarak göstermek zorundadır.
                                            <br>
                                            <br>
                                            <strong>17.	Üniverstem Lisansını kaybetti, ne yapabilirim?<br></strong> Böyle bir durumda sizin yeni bir eğitim kurumuna geçmeniz için teklifte bulunulacaktır. Böyle bir teklif olmaması halinde Tier 4 için yeniden başvurmanız gerekecektir.
                                            <br>
                                            <br>
                                            <strong>18.	Tier 4 Vizesi ile oturum hakkı alabilirmiyim? <br></strong> 10 sene süre ile yaşadıktan sonra oturum hakkına sahip olabilirsiniz.
                                            <br>
                                            <br>
                                            <strong>19.	Yerleşim için daha hızlı bir alternatif var mı? <br></strong> Evet, diğer vize türlerine geçiş yapıp toplam 5 sene sonunda yerleşim izni alabilirsiniz.
                                            <br>
                                            <br>
                                            <strong>20.	Kısa süreli öğrenci vizesi ile uzatma veya yerleşme başvurusu yapabilir miyim? <br></strong> Vizenizi 3 ay süre ile uzatma imkanınız vardır ancak, yerleşim’e başvurma hakkınız mevcut değildir.
                                            <br>
                                            <br>

                                        </div>
                                    </div>
                                </div>

                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingTen">
                                        <h4 class="panel-title">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                      Ankara Antlaşması (Türk) Çalışan Vizesi
                    </a>
                  </h4>
                                    </div>
                                    <div id="collapseTen" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTen">
                                        <div class="panel-body">
                                            <strong>1.	Türk çalışan vizesi nedir? <br></strong> Bu vize türü Birleşik Krallık’ta çalışmak isteyen Türk vatandaşları içindir.
                                            <br>
                                            <br>
                                            <br>
                                            <br>
                                            <br>
                                            <br>
                                            <strong>2.	Kim başvurabilir? <br></strong> Türk pasaportu olan her birey bu vizeye başvurabilir(Şartlar Dahilinde).
                                            <br>
                                            <br>
                                            <br>
                                            <br>
                                            <strong>3.	Birleşik Krallık’ta hiç bulunmadım bu vizeye başvurabilirmiyim?<br></strong> Hayır, bu vizeye başvurabilmeniz için Birleşik Krallık’da daha önceden 1 sene yaşamış ve yasal olarak çalışmış olmak gerekmektedir.
                                            <br>
                                            <br>
                                            <strong>4.	1 yıllık zaman için hangi çalışanlar yeterli sayılır?<br></strong> Birleşik Krallık vatandaşı bir eşe sahip Türk vatandaşları, çalışma izni olan, öğrenci olarak 20 saatlik çalışma izni olan Türk vatandaşları.
                                            <br>
                                            <br>
                                            <strong>5.	Bu vize türü ile ne kadar kalabilirim? <br></strong> Bu süre daha önce ne kadar süre ile Birleşik Krallıkta çalıştığınız ve hangi işleri yapabileceğinize göre değişiklik göstermektedir.
                                            <br>
                                            <br>
                                            <strong>6.	Bu vizeye nasıl başvurabilirim? <br></strong> Bu vizeye Birleşik Krallık’ta önceki vizenizin süresi dolmadan başvurmanız gerekmektedir.
                                            <br>
                                            <br>
                                            <strong>7.	Uzatma hakkım var mı? <br></strong> Evet.
                                            <br>
                                            <br>
                                            <strong>8.	Oturum’a başvurma hakkım var mı? <br></strong> Bu vize oturum hakkı için başvuru yapmanıza olanak sağlamayacaktır.
                                            <br>
                                            <br>
                                            <strong>9.	Bu vizeye başvurmadan önce başka bir işveren ile 1 sene çalıştım başvurabilir miyim?<br></strong> Bu vizenin en önemli şartı aynı işveren ile çalışmaktır.
                                            <br>
                                            <br>
                                            <strong>10.	İşverenimden herhangi bir belge talep etmelimiyim? <br></strong> Evet, işvereninizden 1 senelik çalıştığınızı kanıtlayacak bir belge talep etmeniz gerekecektir.
                                            <br>
                                            <br>
                                            <strong>11.	Aile üyelerimi de başvuruya dahil edebilir miyim? <br></strong> Evet, ancak onlar da vizeleri bitmeden önce bu vizeye geçişe başvurmalıdırlar. Aile fertleri eş ve 18 yaşından küçük çocukları kapsayacaktır.
                                            <br>
                                            <br>
                                            <strong>12.	Bu vize ile Birleşik Krallık’ta eğitim alabilir miyim? <br></strong> Evet.
                                            <br>
                                            <br>
                                            <strong>13.	Birleşik Krallıkta yasal olmayan yollardan çalıştım, şansımı etkiler mi? <br></strong> Evet, bu durum başarınızın başarılı olması önünde büyük bir engel olacaktır.
                                            <br>
                                            <br>
                                            <strong>14.	İngilizce dil bilgisi gereksinimi var mı? <br></strong> Hayır, ancak İngilizce dil bilgisini başvurunuza koymanız başarı oranınızı arttıracaktır.
                                            <br>
                                            <br>
                                            <strong>15.	Ekonomik gelirimi gösteren belge sunmalı mıyım? <br></strong> Hayır, bu vize türü için gerekli olmayacaktır.
                                            <br>
                                            <br>
                                            <strong>16.	Ne zaman bu vizeye başvurabilirim? <br></strong> Eski vizenizin bitimini beklemeden bu vizeye başvurmalısınız.
                                            <br>
                                            <br>
                                            <strong>17.	Birleşik Krallık dışından bu vizeye başvurabilir miyim? <br></strong> Hayır, bu vize türü için başvurular Birleşik Krallık içerisinde kabul edilmektedir.
                                            <br>
                                            <br>
                                            <strong>18.	Vize ile Birleşik Krallık’tan çıkıp geri girebilir miyim? <br></strong> Evet, çıkış sebebinizin tatil olması koşulunda mümkündür. Sağlık nedenleri ile çıkmanız durumunda bunu kanıtlamanız beklenir.
                                            <br>
                                            <br>
                                            <strong>19.	İşverenim işime son verdi ne yapabilirim? <br></strong> Bu durum Birleşik Krallık’ta ne kadar süredir bulunduğunuz ve vizenizin ne kadar süresinin kaldığı ile alakalı olarak değişecektir.
                                            <br>
                                            <br>

                                        </div>
                                    </div>
                                </div>

                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingEleven">
                                        <h4 class="panel-title">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseEleven" aria-expanded="false" aria-controls="collapseEleven">
                      Oturum ve Vatandaşlık
                    </a>
                  </h4>
                                    </div>
                                    <div id="collapseEleven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingEleven">
                                        <div class="panel-body">
                                            <strong>1.	Oturum nedir? <br></strong> Oturum başvurusunun başarılı geçmesi halinde başvuru sahibi Birleşik Krallıkta sınırsız oturum hakkı elde etmektedir.
                                            <br>
                                            <br>
                                            <strong>2.	Vatandaşlık nedir? <br></strong> Bu başvuru sonucunda başvuru sahibi Birleşik Krallık pasaportuna haiz olmaktadır.
                                            <br>
                                            <br>
                                            <strong>3.	Oturum için ne zaman başvurabilirim? <br></strong> Bu başvuru sahip olduğunuz vizenin türüne göre 2 seneden 10 seneye kadar farklılık gösterebilmektedir. Ancak genellikle bireyler 5 senelik devamlı Birleşik Krallıkta bulunmaları halinde oturum için başvuruda bulunabilir.
                                            <br>
                                            <br>
                                            <strong>4.	Vatandaşlık için ne zaman başvuruda bulunabilirim? <br></strong> 5 senelik oturumunuzdan ve bunun sonunda alacağınız oturum hakkından 12 ay
                                            <br>
                                            <br>
                                            <strong>5.	AB vatandaşları oturum ve vatandaşlık’a başvurabilir mi?<br></strong> AB vatandaşları daimi oturma iznine başvurabilir ve vatandaşlık başvurusunda bulunabilirler.
                                            <br>
                                            <br>
                                            <strong>6.	 5 senedir öğrenci olarak Birleşik Krallık’ta yaşıyorum, başvuruda bulunabilir miyim?<br></strong> Öğrencilerin oturuma başvurabilmesi için 10 sene süre ile devamlı olarak Birleşik Krallık’ta bulunmaları gerekmektedir. Bir diğer seçenek ise Tier 4 vizesini değiştirip başka bir vizeye geçtikten sonra başvurmaktır.
                                            <br>
                                            <br>
                                            <strong>7.	Birleşik Krallık’ta 6 senedir çalışan olarak bulunuyorum ne yapabilirim?<br></strong> Bu durumda oturum hakkına başvurma şansınız bulunmaktadır. Bu başvurunun başarılı olması halinde vatandaşlık başvurusu yapabilirsiniz.
                                            <br>
                                            <br>
                                            <strong>8.	Birleşik Krallıkta yaşayan/doğmuş çocuğum oturum veya vatandaşlığa başvurabilir mi?<br></strong> Bazı koşullarda 5 sene yaşamdan sonra başvuru hakkı dopar. Ancak 18 yaşından küçük bireyler İngiliz vatandaşı olarak kaydedilir, 18 yaşından büyükler ise yurttaşlığa kabul statüsünden geçmeleri gerekir.
                                            <br>
                                            <br>
                                            <strong>9.	İngilizce seviyesini veya İngilizce dil bilgisi testini yurttaşlığa kabul için sunmak yeterli mi? <br></strong> Hayır, yurttaşlığa kabul edilmek isteyen bireyşer Birleşik Krallık’ta yaşam testine tabi tutulup başarılı olmaları beklenir.
                                            <br>
                                            <br>
                                            <strong>10.	İngilizce seviyesini veya İngilizce dil bilgisi testini oturum hakkına başvuru için sunmak yeterli mi? <br></strong> Hayır, bu durumda Birleşik Krallıkta yaşam testini geçmeniz gerekmektedir.
                                            <br>
                                            <br>
                                            <strong>11.	Aile bireylerim benimle birlikte oturum hakkına başvurabilirler mi?<br></strong> Göçmenlik durumunuz değiştiği anda aile fertleriniz göçmenlik durumlarını değiştirmek zorundadır. Koşullara göre aile bireylerinizin sizinle aynı anda başvuru hakkı olmayadabilir.
                                            <br>
                                            <br>
                                            <strong>12.	Birleşik Krallıkta 5 sene boyunca farklı vizeler altında bulundum, başvuruda bulunabilir miyim? <br></strong> Bu durumda başvuru hakkınız bulunmamaktadır, yapabileceğiniz 5 sene daha Birleşik Krallıkta kalıp 10 sene sonunda başvuruda bulunabilirsiniz.
                                            <br>
                                            <br>
                                            <strong>13.	Vizem kısa sürede sona erecek, oturum için en erken ne zaman başvurabilirim? <br></strong> Oturum için vizenizin son tarihinden 28 gün önce başvuru yapabilirsiniz.
                                            <br>
                                            <br>
                                            <strong>14.	Oturum için karar süresi nedir? <br></strong> Premium servis ile aynı günde öğrenme olanağınız olmakla birlikte, normal servis ile 4-6 ay kadar sürebilmektedir.
                                            <br>
                                            <br>
                                            <strong>15.	Vatandaşlık için karar süresi nedir? <br></strong> Vatandaşlık kararının belirlenmesi 4 ile 6 ay arasında sürmektedir.
                                            <br>
                                            <br>
                                            <strong>16.	Oturum iznimin iptal olmaması için Birleşik Krallık dışında en fazla ne kadar bulunabilirim? <br></strong> Ülkeyi 2 yıl süreyle devamlı bir şekilde terk etmeniz durumunda oturum izninizin iptal edildiği kabul edilir.
                                            <br>
                                            <br>
                                            <strong>17.	Yıllık maaşım £35000’un altında, bu durum başvurumu etkiler mi? <br></strong> Nisan 2016 ‘da verilen bir karar ile, 6 senenin sonunda göçmen işçilerin oturum’a başvurabilmesi için £35000 sınırının üstünde kazanmaları gerekmektedir.
                                            <br>
                                            <br>
                                            <strong>18.	Oturum hakkına başvuracak göçmenler hangi süre ile yurt dışında bulunabilir? <br></strong> İşçi, yurt dışında 450 günden fazla bulunamaz, buna ek olarak 5 senelik sürenin son 12 ayında 90 günden fazla yurt dışına çıkmamalıdırlar.
                                            <br>
                                            <br>
                                            <strong>19.	Hapis cezam var ve yerine getirmedim, başvurumu etkiler mi? <br></strong> Bu durum pek tabii ki başvurunuzu etkileyecektir, ancak bunun etkisi cezanın ciddiyeti ile de alakalıdır. Temiz bir sabıka ile başvuru yapmak her zaman için önerilendir.
                                            <br>
                                            <br>
                                            <strong>20.	Tier 1 Girişimci/ Tier 1 Yatırımcı / Ankara Antlaşması vizesine sahibim, oturum için daha erken başvuru imkanım var mı? <br></strong> Evet, durumun şartlarına göre bu vize sahipleri 5 senelik zaman diliminden daha erken başvuru hakkına sahip olabilmektedirler.
                                            <br>
                                            <br>


                                        </div>
                                    </div>
                                </div>

                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingTwelve">
                                        <h4 class="panel-title">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwelve" aria-expanded="false" aria-controls="collapseTwelve">
                      Avrupa Birliği Vatandaşları
                    </a>
                  </h4>
                                    </div>
                                    <div id="collapseTwelve" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwelve">
                                        <div class="panel-body">
                                            <strong>1.	AB vatandaşlığımdan dolayı ailem ve şahsım hangi evrakları edinebilir? <br></strong> AB vatandaşları, oturum izni, qualified person sertifikası, aile izni ve aile bireyi vizesi alabilirler.
                                            <br>
                                            <br>
                                            <strong>2.	AB vatandaşları için oturum izni nedir ve nasıl başvurulur? <br></strong> Oturum izni sahibine, sınırsız çalışma, eğitim hakkı sağlar. 5 sene süre ile Birleşik Krallıkta bulunduktan başvuru mevcuttur.
                                            <br>
                                            <br>
                                            <strong>3.	Qualified person sertifikası nedir? <br></strong> Bu sertifika sayesinde sizin yetenekli birey olduğunuz belgelenir. Bu birey, çalışan, kendi işinin sahibi, öğrenci ve kendisini geçindirebilecek birisidir.
                                            <br>
                                            <br>
                                            <strong>4.	Aile izni ne demektir? <br></strong> Aile izni sayesinde AB vatandaşı AB vatandaşı olmayan bir vatandaşı aile olarak Birleşik Krallığa çağırma hakkı tanır.
                                            <br>
                                            <br>
                                            <strong>5.	Aile üyesi vizesi nedir? <br></strong> Aile üyesi vizesi, aile ferdine 5 senelik vize sağlar. Bu vize sahipleri bir işyerinde çalışabilir, eğitim görüp yaşamlarına Birleşik Krallık’ta devam edebilir.
                                            <br>
                                            <br>
                                            <strong>6.	AB vatandaşlığı olan birisi ile uzaktan akrabayım, Birleşik Krallık’a gelebilir miyim? <br></strong> Evet, bu durumu kanıtlayabildiğiniz sürece mümkün olmaktadır.
                                            <br>
                                            <br>
                                            <strong>7.	AB vatandaşıyım ailemi nasıl davet edebilirim? <br></strong> Bu durumda AB sözleşmesi çerçevesinde hakkınız mevcut. Bu sözleşme ile AB üyesi ülkenizi terkedip başka bir AB ülkesinde hayat kurup ailenizi yanınıza alabilirsiniz.
                                            <br>
                                            <br>
                                            <strong>8.	AB vatandaşı olan birisinin aile üyesiyim, 5 sene boyunca Birleşik Krallıkta yaşadım ve çalıştım, AB vatandaşları için oturum iznine başvurabilir miyim? <br></strong> Evet, ancak bu durumda 5 senelik çalışmanızı ve AB vatandaşı birisinin aile üyesi olduğunu kanıtlamanız gerekmektedir.
                                            <br>
                                            <br>
                                            <strong>9.	Birleşik Krallıkta 5 sene boyunca çalıştım ve yaşadım, ancak AB vatandaşı eşimden ayrıldım, başvurabilir miyim? <br></strong> AB vatandaşı eşiniz ile 3 sene boyunca evli kalmanız koşuluyla başvuru imkanınız var. Bu evliliği kanıtlamanız ve AB vatandaşı eşinizin ayrılma sırasında çalıştığını kanıtlamanız gerekmektedir.
                                            <br>
                                            <br>
                                            <strong>10.	Öğrenci veya kendini geçindiren biri olarak oturuma başvurabilir miyim? <br></strong> 5 sene boyunca devamlı bir şekilde Birleşik Krallık’ta yaşadıysanız ve sağlık sigortanız bulunuyorsa başvuru imkanınız mevcuttur.
                                            <br>
                                            <br>
                                            <strong>11.	Bir süredir iş arıyorum ve devlet yardımı alıyorum başvurabilir miyim? <br></strong> Devlet yardımı aldığınız dönemde çalışıyor iseniz bu durum başvurunuzu etkilemeyecektir. Ancak 6 aydan uzun süredir işsizseniz ve devlet yardımı alıyorsanız bu durum başvurunuzu negatif anlamda etkileyecektir.
                                            <br>
                                            <br>
                                            <strong>12.	AB vatandaşı birisinin aile ferdiyim ve Aile izni ile Birleşik Krallık’a geldim, çalışmam mümkün mü? <br></strong> Hayır, Aile izni ile birlikte çalışmanız veya öğrenim görmeniz mümkün değildir. Ancak Birleşik Krallık’a geldiğiniz zaman Aile vizesine başvurursanız ve başarılı olursanız 5 sene ile çalışabilir ve öğrenim görebilirsiniz.
                                            <br>
                                            <br>
                                            <strong>13.	Öğrenciyim ailemi davet edebilir miyim? <br></strong> Evet, eşinizi veya partnerinizi ve çocuklarınız davet edebilirsiniz.
                                            <br>
                                            <br>
                                            <strong>14.	Birleşik Krallık vatandaşıyım, ailemi davet edebilir miyim? <br></strong> Avrupada başka bir ülkede çalışmış olmanız halinde, Evet davet edebilirsiniz.
                                            <br>
                                            <br>
                                            <strong>15.	AB vatandaşıyım yurttaşlığa başvurabilir miyim? <br></strong> Yurttaşlığa başvura bilirsiniz, ancak öncelikle oturum izni almanız gerekmektedir.
                                            <br>
                                            <br>
                                            <strong>16.	AB/ Birleşik Krallık vatandaşı bireye bakmakla yükümlüyüm, vize başvurusu yapabilir miyim?  <br></strong> Evet bu durumda hazırlanmış olan özel vizeye başvurabilirsiniz ancak oturum izni alamamaktasınız.
                                            <br>
                                            <br>
                                            <strong>17.	Sabıka kaydımın olması başvurumu etkiler mi? <br></strong> Eğer cezasını çekmediğiniz bir suç var ise bu başvurunuzu etkileyecektir. Buna ek olarak her türlü suç geçmişi Home Office’e bildirilmesi gerekir.
                                            <br>
                                            <br>
                                            <strong>18.	Daha önce AB vatandaşı ile evliydim bu başvurumu etkiler mi? <br></strong> Hayır, evli olduğunuzu ve ayrıldığınızı kanıtlayabildiğiniz sürece bu bir engel oluşturmayacaktır.
                                            <br>
                                            <br>
                                            <strong>19.	Birleşik Krallık’ta uzun süre yaşadım ancak belirli boşluklarda bulunmadım yine de başvurabilir miyim? <br></strong> Evet başvurabilirsiniz, bu durumda bu süre içinde 5 sene devamlı olarak yaşadığınızı kanıtlamanız gerekmektedir.
                                            <br>
                                            <br>
                                            <strong>20.	Ailemi getirdiğim durumda İngilizce ve ekonomik gelir şartı onlar içinde aranacak mı? <br></strong> Bu tarz dokumanlar yardımcı dokumanlar ve basvurunuzu guclendirmekle birlikte şart değildir. Bu durumda gerçek bir aile olduğunuzu kanıtlamanız gerekmektedir.
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