<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>MAS YOO</title>
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

    @include('include.navbarporto')

    <header class="masthead bg-primary text-white">
            <div class="container d-flex flex-column"> 
                <h1 class="masthead-heading text-uppercase mb-0" style="text-align: center">Mikrotik<br><br></h1>
                <img class="img-fluid rounded mb-5" src="{{ asset('bs/assets/img/portfolio/mikrotiktext.webp') }}" alt="..." 
                style="display:block; margin-left: auto; margin-right: auto;" height="50%" width="50%"/>
            </div>
                <div class="container d-flex align-items-center flex-column">
                    <p class="font-weight-light" style="text-align: justify">
                        Halo, saya seorang profesional di bidang teknologi informasi dalam penggunaan perangkat <strong>Mikrotik</strong>. 
                        Sejak awal karir saya, saya telah memperdalam pengetahuan saya dalam konfigurasi, manajemen, 
                        dan pemecahan masalah jaringan menggunakan perangkat Mikrotik. Dengan pengalaman yang luas dalam 
                        menerapkan solusi jaringan berbasis Mikrotik, saya telah berhasil mengimplementasikan mikrotik, 
                        mulai dari jaringan kecil hingga infrastruktur jaringan yang kompleks.<br>
                        Keahlian saya dalam Mikrotik mencakup berbagai fitur, termasuk routing, switching, firewall, VPN, dan manajemen bandwidth. 
                        Saya terampil dalam merancang dan mengelola jaringan yang efisien dan andal, serta mampu 
                        mengidentifikasi dan mengatasi masalah jaringan dengan cepat dan efektif.<br> 
                        Saya sangat antusias untuk terus memperluas pengetahuan dan keterampilan saya dalam teknologi, 
                        serta berkontribusi pada kemajuan dunia jaringan komunikasi. 
                    </p>
                     
                </div>
                <br>
                <div class="container">
                        <div>
                            <img class="img-fluid rounded" src="{{ asset('bs/assets/img/portfolio/ciscomikrotik.webp') }}" 
                             alt="" height="596px" width="1920px"/>
                        </div>
                </div> 

                <div class="container d-flex align-items-center flex-column">
                    <p class="font-weight-light" style="text-align: justify">
                        <br>
                        Ini adalah salah satu project saya dalam membuat mandiri dan mengelola Jaringan di tempat saya bekerja dulu. Mulai dari awal
                        sampai membuat routing jaringan perkabelan, managementnya menggunakan <strong>Mikrotik RB750Gr3</strong>.
                        Disini saya menggunakan <strong>Hotspot</strong>, <strong>Ip Binding</strong> untuk akses internet Komputer (PC),
                        <strong>Bridge</strong> pada jaringan dekat server, serta untuk mengurangi beban kinerja Mikrotik saya menggunakan <strong>PPPoE Server Mikrotik</strong>.
                        Untuk management bandwith saya menggunakan <strong>Queues untuk IP Binding, Management bandwith paket Hotspot</strong>,
                        serta <strong>Management paket pada jalur PPPoE</strong>, dan untuk akses mahasiswa dan dosen dengan Wifi
                        menggunakan paket <strong>Broadband PPPoE</strong> yang telah di setting di Mikrotik dan di Router / AccessPoint.<br>
                        Saya menggunakan <strong>Mangle</strong> untuk deteksi port aplikasi Streaming <strong>Zoom</strong>,
                        serta pemisah jalur antara browsing dan <strong>Zoom Meeting</strong> dengan menggunakan Queues.
                    </p>    
                </div>

    </header>

    @include('include.footer')
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('bs/js/scripts.js') }}"></script>
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    
</body>
</html>