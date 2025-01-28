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
                <h1 class="masthead-heading text-uppercase mb-0" style="text-align: center">Laravel React Js<br><br></h1>
                <img class="img-fluid rounded mb-5" src="{{ asset('bs/assets/img/portfolio/laravelreactjs.webp') }}" alt="..." 
                style="display:block; margin-left: auto; margin-right: auto;" />
            </div>
                <div class="container d-flex align-items-center flex-column">
                    <p class="font-weight-light" style="text-align: justify">
                        Salam, saya Yoas, seorang junior developer dengan fokus pada pengembangan web dan aplikasi mobile 
                        menggunakan Framework Laravel dan dasar pemrograman JavaScript React js. 
                        Meskipun saya masih berada di level junior, saya memiliki dedikasi yang tinggi dalam 
                        mempelajari dan meningkatkan keterampilan saya dalam pengembangan perangkat lunak.
                        Dengan keahlian saya dalam Framework Laravel, saya membuat web portofolio saya di alamat web ini 
                        <a href="{{ url('https://www.pfo.masyoo.my.id') }}" target="_blank" style="color: black; text-decoration: none;"> www.pfo.masyoo.my.id</a> .
                        <br>
                        <br>
                            <a href="{{ url('https://www.pfo.masyoo.my.id') }}" target="_blank">
                                <img class="img-fluid rounded" src="{{ asset('bs/assets/img/portfolio/pfoku.webp') }}" 
                                style="box-shadow: 10px 10px 15px rgba(0, 0, 0, 0.2)"/>
                            </a>
                        <br>
                        <br>
                        Saya memiliki pemahaman tentang struktur MVC (Model-View-Controller) 
                        dan konsep-konsep lainnya dalam pengembangan web menggunakan Laravel.
                        Selain itu, saya juga memiliki dasar dalam pemrograman JavaScript dan penggunaan 
                        React.js untuk pengembangan antarmuka pengguna (UI) yang responsif dan dinamis. 
                        Saya percaya bahwa belajar adalah proses yang berkelanjutan, dan saya selalu bersemangat 
                        untuk terus memperluas pengetahuan dan keterampilan saya dalam dunia pengembangan 
                        perangkat lunak. Saya siap untuk mengambil tantangan baru dan berkontribusi dalam proyek-proyek 
                        yang memungkinkan saya untuk terus berkembang sebagai seorang developer.
                    </p>
                     
                </div>
    </header>

    @include('include.footer')
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('bs/js/scripts.js') }}"></script>
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    
</body>
</html>