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
                <h1 class="masthead-heading text-uppercase mb-0" style="text-align: center">ADOBE PREMIERE & ADOBE AE <br><br></h1>
                <img class="img-fluid rounded mb-5" src="{{ asset('bs/assets/img/portfolio/premiere.webp') }}" alt="..." height="50%" width="50%"
                style="display:block; margin-left: auto; margin-right: auto;" />
            </div>
                <div class="container d-flex align-items-center flex-column">
                    <p class="font-weight-light" style="text-align: justify">
                        Salam, saya Yoas, seorang pengguna bidang produksi dan pengeditan video dengan keahlian khusus 
                        dalam menggunakan perangkat lunak <strong>Adobe Premiere</strong> dan <strong>Adobe After Effects</strong>. 
                        Saya telah mempunyai pengetahuan dan keterampilan saya dalam menciptakan konten video yang 
                        menarik dan berkualitas tinggi.
                        Dengan menggunakan Adobe Premiere, saya mampu membuat dan mengedit video dengan profesionalisme yang tinggi. 
                        <br>
                        Saya memiliki pemahaman tentang alur kerja pengeditan video, 
                        termasuk pemotongan, penggabungan, penyesuaian warna, dan penambahan efek visual. 
                        Saya juga terampil dalam mengoptimalkan audio, menambahkan musik latar, 
                        dan menyelaraskan klip video dengan tepat untuk menciptakan narasi yang kohesif dan menarik.
                        Selain itu, keahlian saya dalam Adobe After Effects memungkinkan saya untuk menciptakan 
                        efek visual dan memperkaya pengalaman menonton video. Saya dapat membuat 
                        animasi, grafis bergerak, efek transisi yang halus, dan banyak lagi menggunakan berbagai 
                        fitur yang ditawarkan oleh After Effects. Dengan kombinasi keahlian dalam Adobe Premiere 
                        dan Adobe After Effects, saya bisa menghasilkan karya-karya video yang kreatif dan memukau. 
                        Saya percaya bahwa video adalah medium yang kuat untuk menyampaikan pesan, cerita, 
                        dan emosi, dan saya bersemangat untuk terus mengembangkan bakat saya dalam mengedit video 
                        untuk menciptakan konten yang berdampak dan menginspirasi.
                        <br><br>
                        Ini adalah beberapa contoh karya saya..
                    </p>
                     
                </div>
                <br>
                <div class="container">
                    <div class="row" style="align-items: baseline">
                        <div class="col-lg-6">
                            <a href="{{ url('https://www.youtube.com/@yoselyumita5851/videos') }}" target="_blank">
                                <img class="img-fluid rounded" src="{{ asset('bs/assets/img/portfolio/premiere/premiere1.webp') }}"/>
                            </a>
                        </div>
                        <div class="col-lg-6">
                            <a href="{{ url('https://www.youtube.com/@IlustraStory30/shorts') }}" target="_blank">
                                <img class="img-fluid rounded" src="{{ asset('bs/assets/img/portfolio/premiere/premiere2.webp') }}"/>
                            </a>
                        </div>
                    </div>
                </div> 
                <br>
    </header>

    @include('include.footer')
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('bs/js/scripts.js') }}"></script>
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    
</body>
</html>