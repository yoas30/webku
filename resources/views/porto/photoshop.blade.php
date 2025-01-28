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
                <h1 class="masthead-heading text-uppercase mb-0" style="text-align: center">Adobe Photoshop<br><br></h1>
                <img class="img-fluid rounded mb-5" src="{{ asset('bs/assets/img/portfolio/photoshop.webp') }}" alt="..." height="50%" width="50%"
                style="display:block; margin-left: auto; margin-right: auto;" />
            </div>
                <div class="container d-flex align-items-center flex-column">
                    <p class="font-weight-light" style="text-align: justify">
                        Hai, saya Yoas, seorang desainer grafis pengguna Adobe Photoshop 
                        untuk menciptakan berbagai jenis materi promosi dan desain visual. 
                        Dengan keahlian dan pengalaman saya dalam menggunakan Photoshop, saya menghasilkan karya-karya yang menarik 
                        dalam memenuhi kebutuhan klien dan proyek-proyek saya sendiri.                    
                        Saya memiliki kemampuan untuk menghasilkan berbagai jenis desain, mulai dari <strong>Banner</strong> untuk media sosial, 
                        <strong>Spanduk</strong> untuk acara promosi, <strong>Poster untuk Iklan</strong>, hingga <strong>Sertifikat</strong> 
                        acara atau penghargaan. Dengan pemahaman yang mendalam tentang berbagai alat dan fitur Photoshop, saya mampu menciptakan 
                        desain yang kreatif dan sesuai dengan keinginan dan tujuan yang diinginkan.<br>
                        Selain itu, saya juga memiliki kemampuan untuk memadukan elemen-elemen desain seperti teks, gambar, warna, 
                        dan efek visual untuk menciptakan komposisi yang bagus dan mudah dipahami oleh target audiens. 
                        <br>
                        Ini adalah beberapa contoh design buatan saya..
                    </p>
                     
                </div>
                <br>
                <div class="container">
                    <div class="row" style="align-items: baseline">
                        <div class="col-lg-6">
                            <img class="img-fluid rounded" src="{{ asset('bs/assets/img/portfolio/photoshop/brosur.webp') }}"
                            style="box-shadow: 10px 10px 15px rgba(0, 0, 0, 0.2)"/>
                        </div>
                        <div class="col-lg-6">
                            <img class="img-fluid rounded" src="{{ asset('bs/assets/img/portfolio/photoshop/brosur2.webp') }}"
                            style="box-shadow: 10px 10px 15px rgba(0, 0, 0, 0.2)"/>
                        </div>
                    </div>
                </div> 
                <br>
                <div class="container">
                    <div class="row" style="align-items: baseline">
                        <div>
                            <img class="img-fluid rounded" src="{{ asset('bs/assets/img/portfolio/photoshop/spanduk.webp') }}"
                            style="box-shadow: 10px 10px 15px rgba(0, 0, 0, 0.2)"/>
                        </div>
                    </div>
                </div> 
                <br>
                <div class="container" style="align-content: baseline">
                        <div>
                            <img class="img-fluid rounded" src="{{ asset('bs/assets/img/portfolio/photoshop/sertif.webp') }}" 
                            height="50%" width="50%" style="display:block; margin-left: auto; margin-right: auto; box-shadow: 10px 10px 15px rgba(0, 0, 0, 0.2);"/>
                        </div>
                </div> 
    </header>

    @include('include.footer')
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('bs/js/scripts.js') }}"></script>
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    
</body>
</html>