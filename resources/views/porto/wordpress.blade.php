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
                <h1 class="masthead-heading text-uppercase mb-0" style="text-align: center">Wordpress<br><br></h1>
                <img class="img-fluid rounded mb-5" src="{{ asset('bs/assets/img/portfolio/wordpressdeskrip.webp') }}" alt="..." 
                style="display:block; margin-left: auto; margin-right: auto;" />
            </div>
                <div class="container d-flex align-items-center flex-column">
                    <p class="font-weight-light" style="text-align: justify">
                        Salam, saya Yoas, seorang ahli di bidang pengembangan web dengan keahlian khusus dalam 
                        menggunakan platform WordPress. Sebagai pengguna WordPress, saya telah berhasil 
                        menciptakan dan mengelola berbagai jenis situs web, mulai dari blog pribadi hingga situs kantor.
                        Salah satu pencapaian saya adalah pembuatan dan pengelolaan situs web 
                        <br>
                        <strong>
                            <a href="{{ url('https://www.stikesbcm.ac.id') }}" target="_blank" style="color: black; text-decoration: none;"> 
                                www.stikesbcm.ac.id</a> dan 
                            <a href="{{ url('https://www.masyoo.my.id') }}" target="_blank" style="color: black; text-decoration: none;">
                                www.masyoo.my.id </a> serta 
                            <a href="{{ url('https://nikahku.bluesphotograpystudio.com') }}" target="_blank" style="color: black; text-decoration: none;">
                                www.nikahku.bluesphotograpystudio.com</a> .
                        </strong>
                        <br>
                        Situs web ini tidak hanya merupakan wadah bagi kreativitas dan gagasan saya, tetapi juga 
                        menjadi platform untuk berbagi informasi, layanan, atau produk kepada audiens saya. 
                        Dengan menggunakan WordPress, saya telah berhasil menghadirkan desain yang menarik, 
                        fungsionalitas yang kuat, dan pengalaman pengguna yang menyenangkan bagi pengunjung situs.
                        <br>
                        Saya memiliki pemahaman tentang berbagai fitur dan plugin WordPress, serta kemampuan 
                        untuk menyesuaikan dan mengoptimalkan situs web sesuai dengan kebutuhan dan tujuan tertentu. 
                        Saya juga terampil dalam analisis situs web untuk memastikan performa 
                        optimal dan mencapai hasil yang diinginkan. Selain itu, saya juga memiliki 
                        keterampilan dalam pemeliharaan dan pembaruan situs web, termasuk manajemen hosting, dan penanganan masalah teknis. 
                        Saya berkomitmen untuk terus memperluas pengetahuan dan keterampilan saya dalam pengembangan web, 
                        serta memberikan kontribusi yang berarti dalam dunia online melalui proyek-proyek yang saya kerjakan
                        menggunakan platform WordPress.
                    </p>
                     
                </div>
                <br>
                <div class="container">
                    <div class="row" style="align-items: baseline">
                        <div class="col-lg-6">
                            <a href="{{ url('https://www.masyoo.my.id') }}" target="_blank">
                                <img class="img-fluid rounded" src="{{ asset('bs/assets/img/portfolio/webmasyoo.webp') }}"/>
                            </a>
                        </div>
                        <div class="col-lg-6">
                            <a href="{{ url('https://www.stikesbcm.ac.id') }}" target="_blank">
                                 <img class="img-fluid rounded" src="{{ asset('bs/assets/img/portfolio/webstikes.webp') }}"/>
                            </a>
                        </div>
                    </div>
                </div> 
                <br>
                <div class="container" style="align-content: baseline">
                        <a href="{{ url('https://nikahku.bluesphotograpystudio.com') }}" target="_blank">
                            <img class="img-fluid rounded" src="{{ asset('bs/assets/img/portfolio/webnikah.webp') }}" 
                            height="50%" width="50%" style="display:block; margin-left: auto; margin-right: auto;" />
                        </a>
                </div>
    </header>

    @include('include.footer')
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('bs/js/scripts.js') }}"></script>
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    
</body>
</html>