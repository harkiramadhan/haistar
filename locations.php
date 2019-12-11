<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
    <link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Haistar</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <link href="assets/css/gaia.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" />

    <!--     Fonts and icons     -->
    <link href='https://fonts.googleapis.com/css?family=Cambo|Poppins:400,600' rel='stylesheet' type='text/css'>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/css/fonts/pe-icon-7-stroke.css" rel="stylesheet">
</head>

<body>

<nav class="navbar navbar-default navbar-transparent navbar-fixed-top" style="background-color: white;">
        <div class="container">
            <div class="navbar-header">
                <button id="menu-toggle" type="button" class="navbar-toggle" data-toggle="collapse" data-target="#example">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar bar1"></span>
                    <span class="icon-bar bar2"></span>
                    <span class="icon-bar bar3"></span>
                </button>
                <a href="index.php" class="navbar-brand">
                    <img src="assets/img/Haistar - Color.png" style="max-height: 30px;" alt="">
                </a>
            </div>
            <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right" style="margin-right:30px; margin-top:30px;">
                        <div>
                            <a href="https://api.whatsapp.com/send?phone=6281296555536"><img width="25" height="25" src="./assets/img/wa.png"></a>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://www.instagram.com/haistar.id/"><img width="25" height="25" src="./assets/img/icon_ig.png"></a>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://www.youtube.com/channel/UCSGE-UNRo63yCs6xOmWAfOg"><img style="padding:1px" width="25" height="25" src="./assets/img/icon_youtube.png"></a>
                            &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;<a style="color: #104C66; font-size: large; margin-bottom: -1px;" href="lokasi.php"><strong>ID</strong></a>
                            &nbsp;&nbsp;<a href="#"><img height="25px" src="./assets/img/i.png"></a>
                            &nbsp;&nbsp;<a style="color: #104C66; font-size: large; margin-bottom: -1px" href="locations.php"><strong>EN</strong></a>
                        </div>
                    </ul>
                </div>
        </div>
    </nav>
    <nav class="navbar navbar-blue navbar-fixed-top" style="margin-top: 80px">

        <div class="container">
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="index.php" style="color: #104C66">About</a>
                        </li>
                        <li >
                            <a href="services.php" style="color: #104C66">Services</a>
                        </li>
                        <li>
                            <a href="why.php" style="color: #104C66">Why Haistar</a>
                        </li>
                        <li >
                            <a href="client.php" style="color: #104C66">Clients & Partners</a>
                        </li>
                        <li class="active">
                            <a href="locations.php" style="color: #104C66">Locations</a>
                        </li>
                        <li>
                            <a href="contact_us.php" style="color: #104C66">Contact Us</a>
                        </li>
                    </ul>
                </div>
            </div>
    </nav>

    <div class="section section-header" style="margin-top:100px;">
        <div class="container">
            <div class="title-area">
                <h2 class="title-modern" style="font-family: sui generis free; color: #104C66"><strong><br><br><br> Warehouse Locations</strong></h2>
            </div>
        </div>
    </div>

    <div class="section">
        <div class="parallax">
            <div class="image" style="background: url('assets/img/polos.png');background-size: 80% 60%; background-repeat: no-repeat;  background-position: center;">
                 <div id="jakarta-spot">
                    <button type="button" class="spot" onmouseenter="jakartaShow()" onclick="jakartaShow()"></button>
                </div>
                <div id="bandung-spot">
                    <button type="button" class="spot" onmouseenter="bandungShow()" onclick="bandungShow()"></button>
                </div>
                <div id="surabaya-spot">
                    <button type="button" class="spot" onmouseenter="surabayaShow()" onclick="surabayaShow()"></button>
                </div>
                <div id="makassar-spot">
                    <button type="button" class="spot" onmouseenter="makassarShow()" onclick="makassarShow()"></button>
                </div>
                <div id="palembang-spot">
                    <button type="button" class="spot" onmouseenter="palembangShow()" onclick="palembangShow()"></button>
                </div>
                <div id="jakarta">
                    <img src="./assets/img/Arrow_JKT.png"/>
                </div>
                <div id="bandung">
                    <img src="./assets/img/Arrow_BDG.png"/>
                </div>
                <div id="surabaya">
                    <img src="./assets/img/Arrow_SBY.png"/>
                </div>
                <div id="palembang">
                    <img src="./assets/img/Arrow_PLB.png"/>
                </div>
                <div id="makassar">
                    <img src="./assets/img/Arrow_MKS.png"/>
                </div>
            </div>
        </div>
    </div>

    <div>
        
    </div>
    

    <div class="section section-header" style="margin-top: 100px;">
        <div class="container">
            <div class="content">
                <ul class="nav nav-text" role="tablist">
                    <li class="active" id="main-button">
                        <a href="#main" role="tab" data-toggle="tab" class="btn btn-default blue" onclick="jakartaShow()">Main Fuflfillment Center</a>
                    </li>
                    <li id="mini-button">
                        <a href="#mini" role="tab" data-toggle="tab" class="btn btn-default blue" onclick="makassarShow()">Mini Fuflfillment Center</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="tab-content">
        <div class="tab-pane active" id="main">
            <div class="section section-our-clients-freebie">
                <div class="container">
                    <div class="title-area" style="color: black;">
                        <h2 class="title-modern" style="font-family: sui generis free; color: #158390"><strong>Main Fuflfillment Center</strong></h2>
                    </div>

                    <ul class="nav nav-text" role="tablist">
                        <li class="active" id="jkt">
                            <a href="#testimonial1" role="tab" data-toggle="tab" onclick="jakartaShow()"><strong>Jakarta</strong></a>
                        </li>
                        <li id="bdg">
                            <a href="#testimonial2" role="tab" data-toggle="tab"onclick="bandungShow()"><strong>Bandung</strong></a>
                        </li>
                        <li id="sby">
                            <a href="#testimonial3" role="tab" data-toggle="tab" onclick="surabayaShow()"><strong>Surabaya</strong></a>
                        </li>
                    </ul>


                    <div class="tab-content">
                        <div class="tab-pane active" id="testimonial1">
                            <div class="card card-member">
                                <div class="well">
                                    <div class="title-area" style="color: black;">
                                        <h4 class="title-modern text-left text-uppercase"><strong>Jakarta</strong></h4>
                                        <div class="row">
                                            <div class="col-md-8">
                                                <p class="description text-justify">
                                                    Jl. Pegangsaan Dua No. KM 42, Pegangsaan Dua, Kelapa Gading Jakarta Utara, DKI Jakarta 14250
                                                </p>
                                                <p class="description">
                                                    <table class="text-left">
                                                        <tr>
                                                            <td>Space&nbsp;</td>
                                                            <td>&nbsp;:&nbsp;</td>
                                                            <td>&nbsp;4,300 sqm</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Storage Capacity&nbsp;</td>
                                                            <td>&nbsp;:&nbsp;</td>
                                                            <td>&nbsp;600.000 - 800.000 Items</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Inbound SLA&nbsp;</td>
                                                            <td>&nbsp;:&nbsp;</td>
                                                            <td>&nbsp;24 Hours</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Outbound SLA&nbsp;</td>
                                                            <td>&nbsp;:&nbsp;</td>
                                                            <td>&nbsp;24 Hours</td>
                                                        </tr>
                                                    </table>
                                                </p>
                                            </div>
                                            <div class="col-md-4">
                                                <div id="myCarousel" class="carousel slide" data-ride="carousel">

                                                    <!-- Wrapper for slides -->
                                                    <div class="carousel-inner">
                                                        <div class="item active">
                                                            <img src="./assets/img/gu.png">
                                                        </div>

                                                        <div class="item">
                                                            <img src="./assets/img/gu.png">
                                                        </div>

                                                        <div class="item">
                                                            <img src="./assets/img/gu.png">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="testimonial2">
                            <div class="card card-member">
                                <div class="well">
                                    <div class="title-area" style="color: black;">
                                        <h4 class="title-modern text-left text-uppercase"><strong>Bandung</strong></h4>
                                        <div class="row">
                                            <div class="col-md-8">
                                                <p class="description text-justify">
                                                Jl. Soekarno Hatta No. 480, Kota Bandung<br> (022) 875 08 919
                                                </p>
                                                <p class="description">
                                                    <table class="text-left">
                                                        <tr>
                                                            <td>Space&nbsp;</td>
                                                            <td>&nbsp;:&nbsp;</td>
                                                            <td>&nbsp;2,000 sqm</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Storage Capacity&nbsp;</td>
                                                            <td>&nbsp;:&nbsp;</td>
                                                            <td>&nbsp;200.000 - 300.000 Items</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Inbound SLA&nbsp;</td>
                                                            <td>&nbsp;:&nbsp;</td>
                                                            <td>&nbsp;24 Hours</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Outbound SLA&nbsp;</td>
                                                            <td>&nbsp;:&nbsp;</td>
                                                            <td>&nbsp;24 Hours</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Fully Operational&nbsp;</td>
                                                            <td>&nbsp;:&nbsp;</td>
                                                            <td>&nbsp;April 2019</td>
                                                        </tr>
                                                    </table>
                                                </p>
                                            </div>
                                            <div class="col-md-4">
                                                <div id="myCarousel" class="carousel slide" data-ride="carousel">

                                                    <!-- Wrapper for slides -->
                                                    <div class="carousel-inner">
                                                        <div class="item active">
                                                            <img src="./assets/img/gu.png">
                                                        </div>

                                                        <div class="item">
                                                            <img src="./assets/img/gu.png">
                                                        </div>

                                                        <div class="item">
                                                            <img src="./assets/img/gu.png">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="tab-pane" id="testimonial3">
                            <div class="card card-member">
                                <div class="well">
                                    <div class="title-area" style="color: black;">
                                        <h4 class="title-modern text-left text-uppercase"><strong>Surabaya</strong></h4>
                                        <div class="row">
                                            <div class="col-md-8">
                                                <p class="description text-justify">
                                                Jl. Kaliwaron No. 54-56, Mojo, Kota Surabaya<br> (031) 593 92 94 / (031) 593 84 26
                                                </p>
                                                <p class="description">
                                                    <table class="text-left">
                                                        <tr>
                                                            <td>Space&nbsp;</td>
                                                            <td>&nbsp;:&nbsp;</td>
                                                            <td>&nbsp; sqm</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Storage Capacity&nbsp;</td>
                                                            <td>&nbsp;:&nbsp;</td>
                                                            <td>&nbsp;Items</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Inbound SLA&nbsp;</td>
                                                            <td>&nbsp;:&nbsp;</td>
                                                            <td>&nbsp;24 Hours</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Outbound SLA&nbsp;</td>
                                                            <td>&nbsp;:&nbsp;</td>
                                                            <td>&nbsp;24 Hours</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Fully Operational&nbsp;</td>
                                                            <td>&nbsp;:&nbsp;</td>
                                                            <td>&nbsp;April 2019</td>
                                                        </tr>
                                                    </table>
                                                </p>
                                            </div>
                                            <div class="col-md-4">
                                                <div id="myCarousel" class="carousel slide" data-ride="carousel">

                                                    <!-- Wrapper for slides -->
                                                    <div class="carousel-inner">
                                                        <div class="item active">
                                                            <img src="./assets/img/gu.png">
                                                        </div>

                                                        <div class="item">
                                                            <img src="./assets/img/gu.png">
                                                        </div>

                                                        <div class="item">
                                                            <img src="./assets/img/gu.png">
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
            </div>
        </div>
        <div class="tab-pane" id="mini">
            <div class="section section-our-clients-freebie">
                <div class="container">
                    <div class="title-area" style="color: black;">
                        <h2 class="title-modern" style="font-family: sui generis free; color: #158390"><strong>Mini Fuflfillment Center</strong></h2>
                    </div>

                    <ul class="nav nav-text" role="tablist">
                        <li class="active" id="mks">
                            <a href="#testimonial4" role="tab" data-toggle="tab" onclick="makassarShow()"><strong>Makassar</strong></a>
                        </li>
                        <li id="plb">
                            <a href="#testimonial5" role="tab" data-toggle="tab"onclick="palembangShow()"><strong>Palembang</strong></a>
                        </li>
                    </ul>


                    <div class="tab-content">
                        <div class="tab-pane active" id="testimonial4">
                            <div class="card card-member">
                                <div class="well">
                                    <div class="title-area" style="color: black;">
                                        <h4 class="title-modern text-left text-uppercase"><strong>Makassar</strong></h4>
                                        <div class="row">
                                            <div class="col-md-8">
                                                <p class="description text-justify">
                                                Jl. Pelita Raya No. 34C, Kec. Rapoccini, Kota Makkassar 0852 9919 0858

                                                </p>
                                                <p class="description">
                                                    <table class="text-left">
                                                        <tr>
                                                            <td>Space&nbsp;</td>
                                                            <td>&nbsp;:&nbsp;</td>
                                                            <td>&nbsp;sqm</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Storage Capacity&nbsp;</td>
                                                            <td>&nbsp;:&nbsp;</td>
                                                            <td>&nbsp;Items</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Inbound SLA&nbsp;</td>
                                                            <td>&nbsp;:&nbsp;</td>
                                                            <td>&nbsp;24 Hours</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Outbound SLA&nbsp;</td>
                                                            <td>&nbsp;:&nbsp;</td>
                                                            <td>&nbsp;24 Hours</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Fully Operational&nbsp;</td>
                                                            <td>&nbsp;:&nbsp;</td>
                                                            <td>&nbsp;April 2019</td>
                                                        </tr>
                                                    </table>
                                                </p>
                                            </div>
                                            <div class="col-md-4">
                                                <div id="myCarousel" class="carousel slide" data-ride="carousel">

                                                    <!-- Wrapper for slides -->
                                                    <div class="carousel-inner">
                                                        <div class="item active">
                                                            <img src="./assets/img/gu.png">
                                                        </div>

                                                        <div class="item">
                                                            <img src="./assets/img/gu.png">
                                                        </div>

                                                        <div class="item">
                                                            <img src="./assets/img/gu.png">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="testimonial5">
                            <div class="card card-member">
                                <div class="well">
                                    <div class="title-area" style="color: black;">
                                        <h4 class="title-modern text-left text-uppercase"><strong>Palembang</strong></h4>
                                        <div class="row">
                                            <div class="col-md-8">
                                                <p class="description text-justify">
                                                Coming Soon 
                                                </p>
                                                <!-- <p class="description">
                                                    <table class="text-left">
                                                        <tr>
                                                            <td>Space&nbsp;</td>
                                                            <td>&nbsp;:&nbsp;</td>
                                                            <td>&nbsp;4,300 sqm</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Storage Capacity&nbsp;</td>
                                                            <td>&nbsp;:&nbsp;</td>
                                                            <td>&nbsp;600.000 - 800.000 Items</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Inbound SLA&nbsp;</td>
                                                            <td>&nbsp;:&nbsp;</td>
                                                            <td>&nbsp;24 Hours</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Outbound SLA&nbsp;</td>
                                                            <td>&nbsp;:&nbsp;</td>
                                                            <td>&nbsp;24 Hours</td>
                                                        </tr>
                                                    </table>
                                                </p> -->
                                            </div>
                                            <div class="col-md-4">
                                                <div id="myCarousel" class="carousel slide" data-ride="carousel">

                                                    <!-- Wrapper for slides -->
                                                    <div class="carousel-inner">
                                                        <div class="item active">
                                                            <img src="./assets/img/gu.png">
                                                        </div>

                                                        <div class="item">
                                                            <img src="./assets/img/gu.png">
                                                        </div>

                                                        <div class="item">
                                                            <img src="./assets/img/gu.png">
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
            </div>
        </div>
    </div>

    <!-- <footer class="footer footer-big footer-color-gray">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="info">
                        <h4 class="title" style="color: #158390;">ABOUT US</h4>
                        <p class="text-justify" style="color: #158390;">
                            Haistar is an e-logistic solutions company that aims to help business owners to scale up their businesses by eliminating space, manpower, and system barriers with Haistar's industry-standard business process and Warehouse Management System.
                        </p><br>
                    </div>

                    <div class="info">
                        <h4 class="title" style="color: #158390;">HEAD OFFIICE</h4>
                        <p class="text-justify" style="color: #158390;">
                            Jl. Pegangsaan Dua No. KM 42, Pegangsaan Dua, Kelapa Gading Jakarta Utara, DKI Jakarta 14250
                        </p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="info">
                        <h4 class="title" style="color: #158390;">CONTACT</h4>
                        <nav>
                            <ul>
                                <li style="color: #158390;"><i class="fa fa-envelope" style="color: #158390;"></i> sales@haistar.asia</li>
                                <li style="color: #158390;"><i class="fa fa-whatsapp" style="color: #158390;"></i> +62 812 9655 5536 (CS / Sales)</li>
                                <li style="color: #158390;"><i class="fa fa-building" style="color: #158390;"></i> (021) 460 42 21 (Head Office)</li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <div class="info">
                        <img src="./assets/img/Haistar - Color.png" style="max-height: 35px;">
                    </div>
                </div>
            </div>
            <hr>
            <div class="copyright">
                ©
                <script>
                    document.write(new Date().getFullYear())
                </script> Haistar
            </div>
        </div>
    </footer> -->
</body>

<!--   core js files    -->
<script src="assets/js/jquery.min.js" type="text/javascript"></script>
<script src="assets/js/bootstrap.js" type="text/javascript"></script>

<!--  js library for devices recognition -->
<script type="text/javascript" src="assets/js/modernizr.js"></script>

<!--  script for google maps   -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

<!--   file where we handle all the script from the Gaia - Bootstrap Template   -->
<script type="text/javascript" src="assets/js/gaia.js"></script>

<script type="text/javascript" src="assets/js/style.js"></script>

</html>