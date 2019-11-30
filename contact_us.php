<?php 
    session_start();

    if(isset($_POST['submit'])){

        $_SESSION['pesan'] = 'Pesan Terkirim';
        echo'<script>window.location="user.php"</script>';
    }


?>


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
    <link href="assets/css/gaia.css" rel="stylesheet"/>

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
                    <ul class="nav navbar-nav navbar-right navbar-uppercase">
                        <li>
                            <a href="https://api.whatsapp.com/send?phone=6281296555536"><img height="25px" src="./assets/img/wa.png"></a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com/haistar.id/"><img height="25px" src="./assets/img/icon_ig.png"></a>
                        </li>
                        <li>
                            <a href="https://www.youtube.com/channel/UCSGE-UNRo63yCs6xOmWAfOg"><img height="25px" src="./assets/img/icon_youtube.png"></a>
                        </li>
                        <li>
                            <a style="color: #104C66" href="beranda.php"><strong>ID</strong></a>
                        </li>
                        <li>
                            <a href="hubungi_kami.php"><img height="25px" src="./assets/img/i.png"></a>
                        </li>
                        <li>
                            <a style="color: #104C66" href="contact_us.php"><strong>EN</strong></a>
                        </li>
                    </ul>
                </div>
        </div>
    </nav>
    <nav class="navbar navbar-blue navbar-fixed-top" style="margin-top: 80px">

        <div class="container">
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right navbar-uppercase">
                        <li>
                            <a href="index.php" style="color: #104C66">About</a>
                        </li>
                        <li >
                            <a href="service.php" style="color: #104C66">Service</a>
                        </li>
                        <li>
                            <a href="why.php" style="color: #104C66">Why Haistar</a>
                        </li>
                        <li >
                            <a href="client.php" style="color: #104C66">Clients & Partners</a>
                        </li>
                        <li >
                            <a href="locations.php" style="color: #104C66">Location</a>
                        </li>
                        <li class="active">
                            <a href="contact_us.php" style="color: #104C66">Contact Us</a>
                        </li>
                    </ul>
                </div>
            </div>
    </nav>

    <br>
    <br>
    <div class="section section-header" style="margin-top: 50px;">
        <div class="parallax">
            <div class="image"
                style="background-image: url('assets/img/Contact.png');">
            </div>
        </div>
    </div>

    <div class="section">
        <div class="container" >
            <div class="row">
                <div class="col-md-3 text-center">
                    <h1><img style="max-height: 70px;" src="assets/img/Location.png"></h1>
                    <h3 class="title-modern pt-5" style="color: #158390;">Head Quarter</h3>   
                    <p class="text-justify">
                        <br>
                        Jl. Pegangsaan Dua No. KM 42, Pegangsaan Dua, Kelapa Gading  
                        Jakarta Utara, DKI Jakarta
                        14250
                    </p>
                </div>
                <div class="col-md-3 text-center">
                    <h1><img style="max-height: 70px;" src="assets/img/Call Us.png"></h1>
                    <h3 class="title-modern pt-5" style="color: #158390;">Head Office</h3>
                    <br>   
                    <p class="text-center">(021) 460 42 21</p>
                </div>
                <div class="col-md-3 text-center">
                    <h1><img style="max-height: 70px;" src="assets/img/whatsapp.png"></h1>
                    <h3 class="title-modern pt-5" style="color: #158390;"> Sales / Costumer Service</h3>   
                    <p class="text-center">+62 812 9655 5536</p>
                </div>
                <div class="col-md-3 text-center"> 
                    <h1><img style="max-height: 70px;" src="assets/img/Mail.png"></i></h1>
                    <h3 class="title-modern pt-5" style="color: #158390;">Mails</h3>
                    <br>   
                    <p class="text-center">&nbsp;&nbsp;&nbsp;&nbsp;sales@haistar.asia</p>
                </div>
            </div>
        </div>
    </div>

    <div class="section" style="background-color:white">
        <div class="container">
            <div class="row">
                <form method="post" action="tambah.php">
                    <div class="col-md-6">
                        <div class="form-group">
                            <b><input type="text" name="firstname" class="form-control" placeholder="First Name" required style="background-color:#f2f2f2;"></b>
                        </div>
                        <div class="form-group">
                            <b><input type="email" name="email" class="form-control" placeholder="Email" required style="background-color:#f2f2f2;"></b>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <b><input type="text" name="lastname" class="form-control" placeholder="Last Name" required style="background-color:#f2f2f2;"></b>
                        </div>
                        <div class="form-group">
                            <b><input type="text" name="phone" class="form-control" placeholder="Phone Number" required style="background-color:#f2f2f2;"></b>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <b><textarea name="pesan" id="" cols="30" rows="10" class="form-control" placeholder="Enter Your Message Here" required style="background-color:#f2f2f2;"></textarea></b>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <input type="submit" value="Send Masage" class="btn btn-fill" style="background-color: #158390;"></input>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <footer class="footer footer-big footer-color-gray">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="info">
                        <h4 class="title" style="color: #158390;">ABOUT US</h4>
                        <p class="text-justify" style="color: #158390;">
                            Haistar adalah perusahaan penyedia solusi e-logistics yang bertujuan membantu pemilik bisnis untuk memperbesar skala bisnis dengan mengeliminasi masalah space, tenaga kerja, dan sistem dengan proses bisnis dan sistem pengelolaan gudang yang sesuai dengan standar industri.
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
    </footer>

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

<script src="assets/js/style.js"></script>

</html>
