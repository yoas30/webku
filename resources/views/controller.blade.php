

<!-- Baca status terakhir relay -->
<?php

$konek = mysqli_connect ("localhost","root","","wallpa11_home");
$sql = mysqli_query($konek, "SELECT * FROM tb_kontrol");
$data = mysqli_fetch_array($sql);
//ambil status relay
$relay = $data['relay'];

?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />

        <title><?php echo  Auth::user()->name  ?></title>

        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="{{ asset('bs/assets/img/yoas.ico') }}" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{ asset('bs/css/styles.css') }}" rel="stylesheet" />
    </head>
    <body id="page-top">

        <!-- Fungsi Ubah Status -->
        
        <script type="text/javascript">
            function ubahstatus(value)
            {
                if(value==true) value="ON";
                else value="OFF";
                document.getElementById('status').innerHTML = value;
        
                //ajax untuk merubah nilai status relay
                var xmlhttp = new XMLHttpRequest();
        
                xmlhttp.onreadystatechange = function ()
                {
                    if(xmlhttp.readyState == 4 && xmlhttp.status == 200)
                    {
                        //ambil respon dari web setelah berhasil merubah nilai
                        document.getElementById('status').innerHTML = xmlhttp.responseText;                   
                    }
                }
                //eksekusi file PHP untuk merubah nilai di database
                xmlhttp.open("GET","{{ url('tombol') }}?stat=" + value, true);
                //kirim data
                xmlhttp.send();
            }
        </script>


        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="#page-top"><?php echo "<h4>KONTROL ". Auth::user()->name ."</h4>"?></a>
                <button class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-2 px-0 px-lg-3 rounded" href="#">LAMPU</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-2 px-0 px-lg-3 rounded" href="#">CAMERA</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-2 px-0 px-lg-3 rounded" href="#pompa">POMPA AIR</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-2 px-0 px-lg-3 rounded" href="/logout">LOGOUT</a></li>
                    </ul>
                </div>
            </div>
        </nav>

<!-- SECTION PROJECTKU -->
        <header class="masthead bg-primary text-white text-center">
                <section class="page-section" id="pompa">
                        {{-- @yield('main')  --}}
                        <div class="container" style="text-align: center">
                            <img class="masthead-avatar mb-5" src="{{ asset('bs/assets/img/yoas.webp') }}"alt="..." />
                            <h2 style="font-weight:bold">KONTROL POMPA AIR</h2>
                        </div>   
                        <div class="container" style="display: flex; justify-content: center">
                            <div class="card text-white bg-secondary mb-3" style="width:30rem;">

                                <div class="card-header" style="font-size: 25px; text-align:center">
                                    POMPA AIR
                                </div>
                                <div class="card-body">
                                    <div class="form-check form-switch" style="font-size: 22px; text-align:center">
                                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault" onchange="ubahstatus(this.checked)" 
                                                <?php 
                                                    if($relay==1)
                                                    echo "checked"; 
                                                    else echo "unchecked"
                                                ?>
                                        />
                                        <label class="form-check-label" for="flexSwitchCheckDefault">
                                            <span id="status">
                                                <?php 
                                                    if($relay==1)
                                                    echo "ON"; 
                                                    else echo "OFF"
                                                ?>
                                            </span>
                                        </label>         
                                    </div>
                                </div>
                            </div>
                        </div>  
                </section> 
        </header>            

        <!-- Footer-->
        <footer class="footer text-center">
            <div class="container">
                <div class="row">
                    <!-- Footer Location-->
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h4 class="text-uppercase mb-4">Location</h4>
                        <p class="lead mb-0">
                            Kotawaringin Barat, Kalimantan Tengah
                        </p>
                    </div>
                    <!-- Footer Social Icons-->
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h4 class="text-uppercase mb-4">Around the Web</h4>
                        <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-linkedin-in"></i></a>
                    </div>
                    <!-- Footer About Text-->
                    <div class="col-lg-4">
                        <h4 class="text-uppercase mb-4">About Web</h4>
                        <p class="lead mb-0">
                            Membuat menggunakan Laravel Bootstrap
                        </p>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Copyright Section-->
        <div class="copyright py-4 text-center text-white">
            <div class="container"><small>My Website 2023</small></div>
        </div>
       
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="{{ asset('bs/js/scripts.js') }}"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
