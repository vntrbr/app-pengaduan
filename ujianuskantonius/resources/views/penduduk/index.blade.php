
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="TemplateMo">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>KuyLapor!</title>
<!--

Lava Landing Page

https://templatemo.com/tm-540-lava-landing-page

-->

    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="/assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="/assets/css/font-awesome.css">

    <link rel="stylesheet" href="/assets/css/templatemo-lava.css">

    <link rel="stylesheet" href="/assets/css/owl-carousel.css">
    <link rel="icon" type="image/png" href="/form/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/form/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/form/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/form/vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/form/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/form/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/form/css/util.css">
	<link rel="stylesheet" type="text/css" href="/form/css/main.css">
    </head>
<div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- ***** Preloader End *****

    <!-- header / navbar-->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="/login" class="logo">
                            KUYLAPOR!
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="/">Home</a>
                          

                         
                            </li>
                            <li class="submenu">
                                <a href="javascript:;">Pilihan</a>
                                <ul>
                                  
                                 
                                    <li><a href="/riwayat">Respon</a></li>
                                    <li><a href="/input">Riwayat Laporan</a></li>
                            
                            
                                </ul>
                            </li>
                            <li class="scroll-to-section"><a href="/login" class="logo">Login</a>
                           
                        </ul>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <body>
    <div class="welcome-area" id="welcome">

<!-- ***** Header Text Start ***** -->
<div class="header-text">
    <div class="container">
        <div class="row">
            <div class="left-text col-lg-6 col-md-12 col-sm-12 col-xs-12"
                data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">

                    


				<div class="wrap-input1 validate-input" data-validate = "NIK is required">
                   
<form  action="{{ route('penduduk.store') }}" method="post"  autocomplete="off" class="contact1-form validate-form">
@csrf   
<span class="contact1-form-title">
					VERIFIKASI DATA DIRI
				</span>
	<div class="wrap-input1 validate-input" data-validate = "NIK is required">
					<input class="input1" type="text" name="nik" required placeholder="Masukkan NIK Anda">
					<span class="shadow-input1"></span>
				</div>
                <div class="wrap-input1 validate-input" data-validate = "Alamat is required">
					<input class="input1" type="text" name="alamat" required placeholder="Masukkan Alamat Anda">
					<span class="shadow-input1"></span>
				</div>

                <p>Sudah Terverifikasi? <a href="/input/create" style="color: blue">Klik Disini</p>
                
                <div class="container-contact1-form-btn">
					<button class="contact1-form-btn">
                        
						<span>
							LANJUTKAN
							<i class="fa fa-long-arrow-right" aria-hidden="true"></i>
						</span>
					</button>
				</div>
                                            
                    </div>
                </div>
              
            </div>
        </div>
    </div>
</div>
                  
                
    </section>
    <script src="/assets/js/jquery-2.1.0.min.js"></script>

<!-- Bootstrap -->
<script src="/assets/js/popper.js"></script>
<script src="/assets/js/bootstrap.min.js"></script>

<!-- Plugins -->
<script src="/assets/js/owl-carousel.js"></script>
<script src="/assets/js/scrollreveal.min.js"></script>
<script src="/assets/js/waypoints.min.js"></script>
<script src="/assets/js/jquery.counterup.min.js"></script>
<script src="/assets/js/imgfix.min.js"></script>

<!-- Global Init -->
<script src="/assets/js/custom.js"></script>
    
</body>
</html>
