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
        <!-- Navigation-->
        @include('include.navbar')

        <!-- Masthead-->
        @include('include.header')

        <!-- Portfolio Section-->
        <section class="page-section portfolio" id="portfolio">
            <div class="container">
                <!-- Portfolio Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Portfolio</h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Portfolio Grid Items-->
                <div class="row justify-content-center">
                    <!-- Portfolio Item 0-->
                    <div class="col-md-6 col-lg-4 mb-5">
                        <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal0">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="{{ asset('bs/assets/img/portfolio/iot.webp') }}" alt="..." />
                        </div>
                    </div>
                    <!-- Portfolio Item 1-->
                    <div class="col-md-6 col-lg-4 mb-5">
                        <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal1">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="{{ asset('bs/assets/img/portfolio/mikrotik.webp') }}" alt="..." />
                        </div>
                    </div>
                    <!-- Portfolio Item 2-->
                    <div class="col-md-6 col-lg-4 mb-5">
                        <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal2">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="{{ asset('bs/assets/img/portfolio/wordpress.webp') }}" alt="..." />
                        </div>
                    </div>
                    <!-- Portfolio Item 3-->
                    <div class="col-md-6 col-lg-4 mb-5">
                        <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal3">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="{{ asset('bs/assets/img/portfolio/laravel.webp') }}" alt="..." />
                        </div>
                    </div>
                    <!-- Portfolio Item 4-->
                    <div class="col-md-6 col-lg-4 mb-5 mb-lg-0">
                        <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal4">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="{{ asset('bs/assets/img/portfolio/photoshop.webp') }}" alt="..." />
                        </div>
                    </div>
                    <!-- Portfolio Item 5-->
                    <div class="col-md-6 col-lg-4 mb-5 mb-md-0">
                        <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal5">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="{{ asset('bs/assets/img/portfolio/premiere.webp') }}" alt="..." />
                        </div>
                    </div>
                    <!-- Portfolio Item 6-->
                    <div class="col-md-6 col-lg-4 mb-5 mb-md-0">
                        <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal6">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="{{ asset('bs/assets/img/portfolio/nodejs.webp') }}" alt="..." />
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- About Section-->
        <section class="page-section bg-primary text-white mb-0" id="about">
            <div class="container">
                <!-- About Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-white">About Me</h2>
                <!-- Icon Divider-->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- About Section Content-->
                <div class="divider-custom divider-light">
                    <span style="font-size: 24px"><b>PERSONAL INFO</b></span>
                </div>

                <div class="row">
                    <div class="col-lg-6 ms-auto">
                    <p class="lead" style="align-content: left"> 
                        <br>Nama : Yoas Albert Rinatan 
                        <br>Umur : 29 Tahun 
                        <br>Email : yoas@masyoo.my.id / yoas.rinatan30@gmail.com 
                        <br>Address : Kotawaringin Barat, Kalimantan Tengah, Indonesia
                    </p>
                    </div>
                    <div class="col-lg-4 ms-auto">
                        <p class="lead" style="align-content: left">
                            <br>Freelance : - 
                            <br>Skill : IT Support / IT Programmer
                            <br>Experience : < 4 Years
                            <br>Language : Indonesia 
                        </p>
                    </div>
                </div>
                <!-- About Section Button-->
                <div class="text-center mt-4">
                        <a class="btn btn-xl btn-outline-light" href="{{ url ('mycv')}}" target='blank'>
                            <i class="fas fa-download me-2"></i>
                            Lihat Portofolio
                        </a>
                </div>
            </div>
        </section>


<!-- SECTION PROJECTKU -->

{{-- 
                <section class="page-section" id="project">
                    <div class="container-fluid">

                        @yield('main') 

                    </div>
                </section> 
--}}



  <!-- Education Section-->

        <section class="page-section" id="education">
            <div class="container">
                <!-- Contact Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Education</h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Contact Section Form-->
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-xl-10" style="text-align: center">
                            <h2>Yogyakarta Amikom University<br>
                                Bachelor of Computer Science (S.Kom)</h2>
                            <h4>University of Amikom - (2013-2018)</h4>
                            <br>
                    </div>
                </div>


                <div class="row">
                    <div class="col-lg-5 ms-auto">
                    <p class="lead" style="align-content: justify; font-size:17px" >    
                        <h4><strong >HAI I AM YOAS</strong></h4>
                        Saya telah bekerja di bagian IT Support selama
                        tiga tahun terakhir dan saya memiliki pengalaman dalam merancang dan mengembangkan IT untuk instansi. 
                        <br>Saya sangat tertarik dengan teknologi baru dan perkembangan di bidang Teknologi.
                        Saya senang terus belajar dan berinovasi untuk membawa perubahan positif dalam perusahaan dan industri secara keseluruhan
                    </p>
                    </div>
                    <div class="col-lg-5 ms-auto">
                        <p class="lead" style="align-content: justify">
                            <img class="img-fluid" src="{{ asset('bs/assets/img/portfolio/iamyoas.webp') }}" alt="..." />
                        </p>
                    </div>
                </div>


            </div>
        </section>

<!-- Contact Section-->

        <section class="page-section bg-primary text-white mb-0" id="contact">
            <div class="container">
                <!-- Contact Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-white">Contact Me</h2>
                <!-- Icon Divider-->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>   
                    <div align="center">         
                        <h4 class="text-uppercase mb-4">Sosial Media</h4>
                        <a class="btn btn-outline-light btn-social mx-1" href="https://t.me/yoas30" target="_blank"><i class="fab fa-fw fa-telegram"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="https://www.facebook.com/yoas30" target="_blank"><i class="fab fa-fw fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="https://www.instagram.com/yoasrinatan_" target="_blank"><i class="fab fa-fw fa-instagram"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="https://www.linkedin.com/in/yoas30/" target="_blank"><i class="fab fa-fw fa-linkedin-in"></i></a>
                    </div>
            </div>
        </section>





        <!-- Footer-->
        @include('include.footer')

        <!-- Copyright Section-->
        <div class="copyright py-4 text-center text-white">
            <div class="container"><small>My Website 2024</small></div>
        </div>

        <!-- Portfolio Modals 0-->
        <div class="portfolio-modal modal fade" id="portfolioModal0" tabindex="-1" aria-labelledby="portfolioModal0" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                    <div class="modal-body text-center pb-5">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">IOT (Internet of Things)</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Image-->
                                    <img class="img-fluid rounded mb-5" src="{{ asset('bs/assets/img/portfolio/iot.webp') }}" alt="..." />
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-4" style="text-align: justify">
                                        Hai Saya adalah seorang IT dengan pengalaman dalam <strong>IOT (Internet of Things)</strong>,
                                        memiliki pemikiran analitis yang kuat dan kemampuan pemecahan masalah.
                                        Kemampuan saya dalam memahami dan mengintegrasikan berbagai jenis perangkat elektronik 
                                        untuk berkomunikasi dan berinteraksi satu sama lain menunjukkan keahlian teknis yang tinggi.
                                        Memiliki minat yang kuat dalam pemantauan dan pengelolaan data. 
                                        IoT seringkali melibatkan pengumpulan besar-besaran data dari berbagai sensor dan perangkat. 
                                        Saya senang berkontribusi dan berkolaborasi dalam tim 
                                        untuk mencapai keunggulan dalam pengelolaan IOT di kehidupan nyata.    
                                    </p>
                                    <button class="btn btn-danger" data-bs-dismiss="modal">
                                        <i class="fas fa-xmark fa-fw"></i>
                                        Close Window
                                    </button>
                                    <a class="btn btn-primary" href="{{ url('iot') }}" role="button">
                                        <i class="fa-solid fa-door-open"></i>
                                        Buka Portfolio
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio Modal 1-->
        <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" aria-labelledby="portfolioModal1" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                    <div class="modal-body text-center pb-5">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Mikrotik</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Image-->
                                    <img class="img-fluid rounded mb-5" src="{{ asset('bs/assets/img/portfolio/mikrotik.webp') }}" alt="..." />
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-4" style="text-align: justify">
                                        Hai Saya adalah seorang IT dengan pengalaman dalam mengoperasikan dan mengelola perangkat jaringan <strong>MikroTik</strong>.
                                        Telah memiliki pengetahuan dan keterampilan dalam konfigurasi, 
                                        administrasi, dan pemecahan masalah pada perangkat MikroTik.
                                        Saya selalu berusaha untuk mengikuti perkembangan terbaru dalam teknologi MikroTik dan mengambil inisiatif untuk belajar lebih lanjut tentang fitur-fitur terbaru yang ditawarkan oleh perangkat ini. Saya juga terbiasa bekerja dalam lingkungan jaringan yang padat dan dapat menghadapi tantangan dengan cepat dan efektif.
                                        Kemampuan dalam mengoperasikan MikroTik telah membantu meningkatkan 
                                        performa jaringan di berbagai proyek dan mendukung bisnis atau 
                                        organisasi untuk mencapai tujuan dalam hal konektivitas 
                                        dan keamanan.<br>
                                        Saya senang berkontribusi dan berkolaborasi dalam tim 
                                        untuk mencapai keunggulan dalam pengelolaan jaringan 
                                        menggunakan perangkat MikroTik.    
                                    </p>
                                    <button class="btn btn-danger" data-bs-dismiss="modal">
                                        <i class="fas fa-xmark fa-fw"></i>
                                        Close Window
                                    </button>
                                    <a class="btn btn-primary" href="{{ url('mikrotik') }}" role="button">
                                        <i class="fa-solid fa-door-open"></i>
                                        Buka Portfolio
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio Modal 2-->
        <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" aria-labelledby="portfolioModal2" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                    <div class="modal-body text-center pb-5">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Wordpress</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Image-->
                                    <img class="img-fluid rounded mb-5" src="{{ asset('bs/assets/img/portfolio/wordpress.webp') }}" alt="..." />
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-4">
                                        Hai saya seorang pengembangan web WordPress memiliki pengetahuan 
                                        tentang platform WordPress, termasuk cara menginstal, 
                                        mengonfigurasi, dan mengelola situs WordPress.
                                        Saya terampil dalam mengembangkan tema kustom, memodifikasi plugin, 
                                        dan menyesuaikan fungsionalitas situs sesuai dengan kebutuhan.</p>
                                    <button class="btn btn-danger" data-bs-dismiss="modal">
                                        <i class="fas fa-xmark fa-fw"></i>
                                        Close Window
                                    </button>
                                    <a class="btn btn-primary" href="{{ url('wordpress') }}" role="button">
                                        <i class="fa-solid fa-door-open"></i>
                                        Buka Portfolio
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio Modal 3-->
        <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" aria-labelledby="portfolioModal3" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                    <div class="modal-body text-center pb-5">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Laravel</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Image-->
                                    <img class="img-fluid rounded mb-5" src="{{ asset('bs/assets/img/portfolio/laravel.webp') }}" alt="..." />
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-4">
                                        Hai saya seorang pengembangan web Junior Laravel dan React memiliki pengetahuan tentang framework Laravel.
                                        Saya bisa membuat web dan aplikasi sederhana dengan menggunakan Laravel dan React.
                                    </p>
                                    <button class="btn btn-danger" data-bs-dismiss="modal">
                                        <i class="fas fa-xmark fa-fw"></i>
                                        Close Window
                                    </button>
                                    <a class="btn btn-primary" href="{{ url('laravelreact') }}" role="button">
                                        <i class="fa-solid fa-door-open"></i>
                                        Buka Portfolio
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio Modal 4-->
        <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" aria-labelledby="portfolioModal4" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                    <div class="modal-body text-center pb-5">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Adobe Photoshop</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Image-->
                                    <img class="img-fluid rounded mb-5" src="{{ asset('bs/assets/img/portfolio/photoshop.webp') }}" alt="..." />
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-4">
                                        Hai saya seorang editor dalam Software Adobe Photoshop memiliki kemampuan yang mendalam 
                                        dalam mengoperasikan perangkat lunak ini dan menguasai 
                                        berbagai fitur dan alat yang ditawarkan. Mengerti dan dapat menggunakan 
                                        berbagai alat dan fitur Photoshop dengan baik, seperti alat seleksi, 
                                        lapisan, pengaturan warna, penyesuaian, manipulasi dan lain-lain
                                    </p>
                                    <button class="btn btn-danger" data-bs-dismiss="modal">
                                        <i class="fas fa-xmark fa-fw"></i>
                                        Close Window
                                    </button>
                                    <a class="btn btn-primary" href="{{ url('photoshop') }}" role="button">
                                        <i class="fa-solid fa-door-open"></i>
                                        Buka Portfolio
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio Modal 5-->
        <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" aria-labelledby="portfolioModal5" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                    <div class="modal-body text-center pb-5">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Adobe Premiere</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Image-->
                                    <img class="img-fluid rounded mb-5" src="{{ asset('bs/assets/img/portfolio/premiere.webp') }}" alt="..." />
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-4">
                                        Hai saya seorang editor dalam Software Adobe Premiere memiliki kemampuan
                                        dalam mengoperasikan perangkat lunak ini dan menguasai 
                                        berbagai fitur dan alat yang ditawarkan. Mengerti dan dapat menggunakan 
                                        berbagai alat dan fitur Adobe Premiere dengan baik.
                                        Penguasaan Efek dan Transisi, memiliki pemahaman yang baik tentang penggunaan efek, transisi, dan animasi dalam video.
                                        Kreatif dan Inovatif, mampu berpikir kreatif untuk menciptakan efek visual dan narasi yang unik dalam video.
                                    </p>
                                    <button class="btn btn-danger" data-bs-dismiss="modal">
                                        <i class="fas fa-xmark fa-fw"></i>
                                        Close Window
                                    </button>
                                    <a class="btn btn-primary" href="{{ url('premiereae') }}" role="button">
                                        <i class="fa-solid fa-door-open"></i>
                                        Buka Portfolio
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio Modal 6-->
        <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" aria-labelledby="portfolioModal6" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                    <div class="modal-body text-center pb-5">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Server Node JS</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Image-->
                                    <img class="img-fluid rounded mb-5" src="{{ asset('bs/assets/img/portfolio/nodebotwa.webp') }}" alt="..." />
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-4">
                                        Saya adalah Yoas, dengan minat mendalam dalam mengembangkan solusi teknologi yang praktis dan bermanfaat. 
                                        Salah satu proyek unggulan saya adalah pembuatan <strong>bot WhatsApp</strong> yang mampu menampilkan data langsung dari database, 
                                        baik dari <strong>Google Spreadsheet melalui API</strong>, maupun dari database <strong>MySQL menggunakan REST API.</strong> </p>
                                    <button class="btn btn-danger" data-bs-dismiss="modal">
                                        <i class="fas fa-xmark fa-fw"></i>
                                        Close Window
                                    </button>
                                    <a class="btn btn-primary" href="{{ url('nodejs') }}" role="button">
                                        <i class="fa-solid fa-door-open"></i>
                                        Buka Portfolio
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
