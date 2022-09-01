

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>KuyLapor!</title>

        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ ('/mazer/assets/css/bootstrap.css') }}">

        <link rel="stylesheet" href="{{ ('/mazer/assets/vendors/perfect-scrollbar/perfect-scrollbar.css') }}">
        <link rel="stylesheet" href="{{ ('/mazer/assets/vendors/bootstrap-icons/bootstrap-icons.css') }}">
        <link rel="stylesheet" href="{{ ('/mazer/assets/css/app.css') }}">
        <link rel="shortcut icon" href="{{ ('/mazer/assets/images/favicon.svg') }}" type="image/x-icon">
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
    </head>



    <script src="{{ ('/mazer/assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
        <script src="{{ ('/mazer/assets/js/bootstrap.bundle.min.js') }}"></script>

        <script src="{{ ('/mazer/assets/js/main.js') }}"></script>

        <body>
        <div class="right-image-decor"></div>

<!-- ***** Testimonials Starts ***** -->
<section class="section" id="testimonials">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="center-heading">
                <h2> RESPON <em>PENGADUAN</em></h2>
                
                                    
                                    <p class="text-subtitle text-muted">DATA RESPON LAPORAN </p>
                                </div>
                                <div class="col-12 col-md-6 order-md-2 order-first">
                                   
                                </div>
                            </div>
                        </div>
                        @if(Session::has('message'))
                        <div class="alert alert-success">
                            {{Session::get('message')}}
                        </div>
                        @endif
                        <section class="section">
                            <div class="row" id="basic-table">
                                <div class="col-12 col-md-12">

                                    <div class="card">
                                        <div class="card-header">

                                        <a href="{{ route('input.create') }}">
                                                <button type="submit"
                                                                        class="main-button">Kuy Lapor</button>
                                            </a>
                                           
                                        
                                            <a href="/">
                                                <button type="submit"
                                                                        class="main-button">Home</button>
                                            </a>
                                            <a href="{{ route('input.index') }}">
                                                <button type="submit"
                                                                        class="main-button">Riwayat</button>
                                            </a>

                                           <div style="float:right">
                                        <form class="form" method="get" action="{{ route('search') }}">
       
         
                <input type="text" name="searchtanggapan" class="submit-1" id="search" placeholder="Masukkan NIK">
                <button type="submit" class="main-button    ">Cari</button>
            </div>
        </form>


                                        <div class="card-content">
                                            <div class="card-body">

                                                <!-- Table with outer spacing -->
                                                <div class="table-responsive">
                                                    <table class="table table-lg">
                                                        <thead>
                                                            <tr>
                                                            <th style="text-align: center;">ID LAPORAN</th>
                                                           
                    <th style="text-align: center;">Status</th>
                    <th style="text-align: center;">Lokasi</th>
                    <th style="text-align: center;">Keterangan</th>
                    <th style="text-align: center;">Feedback</th>
            
                                                              
                                                            
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                        @php 
                                    $i=1;
                                    @endphp
                                
                                                            @foreach ($aspirasi as $aspirasi)
                                                            


                                                            <tr>
                                                                <td style="text-align: center;">{{ $aspirasi->inpspirasi->id_pelaporan }}</td>
                                                              
                    <td style="text-align: center;">{{ $aspirasi->status }}</td>
                    <td style="text-align: center;">{{ $aspirasi->inpspirasi->lokasi }}</td>
                    <td style="text-align: center;">{{ $aspirasi->inpspirasi->ket }}</td>
                    <td style="text-align: center;">{{ $aspirasi->feedback }}</td>
                  
        </div>
                                                                <td>
                                                                 
                                                                
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                            @php
                                    $i++;
                                    @endphp
                                    @endforeach    
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                        <!-- // Basic Horizontal form layout section end -->


                        <!-- // Basic Vertical form layout section end -->


                        <!-- // Basic multiple Column Form section start -->

                        <!-- // Basic multiple Column Form section end -->
                    </div>

              
                 
            <script src="/assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
            <script src="/assets/js/bootstrap.bundle.min.js"></script>

            <script src="/assets/js/main.js"></script>
        </body>
