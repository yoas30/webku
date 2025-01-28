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
                <h1 class="masthead-heading text-uppercase mb-0" style="text-align: center">Node JS Server<br><br></h1>
                <img class="img-fluid rounded mb-5" src="{{ asset('bs/assets/img/portfolio/nodebotwa.webp') }}" alt="..." 
                style="display:block; margin-left: auto; margin-right: auto;" />
            </div>
                <div class="container d-flex align-items-center flex-column">
                    <p class="font-weight-light" style="text-align: justify">
                        Halo, saya Yoas, seorang pengembang teknologi yang berfokus pada solusi inovatif 
                        untuk mempermudah kehidupan masyarakat. Saya memiliki pengalaman luas dalam mengintegrasikan 
                        berbagai teknologi modern untuk menciptakan sistem yang andal dan responsif. 
                        Salah satu proyek yang saya banggakan adalah pengembangan bot WhatsApp yang dapat mengambil data 
                        dari Google Spreadsheet maupun database MySQL, kemudian menyajikannya secara langsung kepada pengguna melalui WhatsApp. 
                        <br>
                        Bot ini dirancang untuk menangani berbagai kebutuhan pengguna, mulai dari menampilkan data penting 
                        hingga membantu proses otomatisasi pesan. Dalam pengembangannya, saya menggunakan bahasa pemrograman 
                        JavaScript yang fleksibel serta Google Script untuk menghubungkan Google Spreadsheet sebagai sumber data dinamis. 
                        Data yang ada pada Spreadsheet ini bisa langsung ditampilkan atau diteruskan ke WhatsApp pengguna secara real-time. 
                        <br>
                        Selain itu, saya juga menggunakan REST API untuk mengintegrasikan database MySQL, 
                        memberikan akses data yang cepat dan aman. REST API ini memungkinkan bot untuk mengambil 
                        data besar dari server, mengolahnya, dan mengirimkan hasilnya kepada pengguna dalam bentuk 
                        pesan yang mudah dipahami. Infrastruktur ini memastikan bot dapat digunakan dalam berbagai skenario, 
                        termasuk untuk kebutuhan bisnis atau layanan berbasis data yang kompleks.
                        <br><br>
                        Salah satu implementasi spesifik dari keahlian saya adalah pembuatan bot untuk PLN. 
                        Dalam proyek ini, saya merancang bot yang dapat mengambil data pesanan dari Google Spreadsheet. 
                        Setelah diproses, data tersebut kemudian dikirimkan ke WhatsApp menggunakan REST API kepada pengguna 
                        yang mengajukan permintaan. Proses ini dirancang untuk memastikan komunikasi yang cepat dan tepat waktu, 
                        meningkatkan efisiensi operasional bagi PLN maupun penggunanya.
                        <br><br>
                        Untuk memastikan kinerja yang andal, sistem ini dijalankan di server VPS berbasis Ubuntu. 
                        Dengan memanfaatkan server VPS, saya memastikan bahwa bot dapat menangani banyak permintaan secara 
                        bersamaan tanpa mengorbankan performa. Teknologi ini memungkinkan pembaruan sistem secara mudah dan menjaga keamanan data pengguna.
                        <br>
                        Framework Node.js menjadi pilihan utama saya dalam pengembangan aplikasi server-side. 
                        Node.js sangat efektif dalam menangani proses asynchronous, memungkinkan bot untuk merespons 
                        banyak pengguna secara bersamaan tanpa gangguan. Dengan kombinasi teknologi ini—JavaScript, 
                        Google Script, REST API, serta infrastruktur VPS berbasis Ubuntu—saya menciptakan solusi yang efisien dan relevan dengan kebutuhan digital modern.
                        <br>
                        <br>
                        Ini adalah tampilan WA dan Server BOT saya : 
                    </p>                    
                    
                    <div class="container">
                        <div class="row" style="align-items: baseline">
                            <div class="col-lg-6">
                                <img class="img-fluid rounded" src="{{ asset('bs/assets/img/portfolio/botwa.webp') }}"
                                style="box-shadow: 10px 10px 15px rgba(0, 0, 0, 0.2)"/>
                            </div>
                            <div class="col-lg-6">
                                <img class="img-fluid rounded" src="{{ asset('bs/assets/img/portfolio/serverwa.webp') }}"
                                style="box-shadow: 10px 10px 15px rgba(0, 0, 0, 0.5)"/>
                        </div>
                    </div>
                    <br>
                    <p class="font-weight-light" style="text-align: justify">
                        Saya percaya bahwa teknologi harus memberikan dampak positif yang nyata dalam kehidupan sehari-hari. 
                        Dengan pendekatan yang fokus pada kebutuhan pengguna, saya terus berinovasi untuk menciptakan sistem yang tidak hanya 
                        fungsional tetapi juga mudah digunakan. Proyek-proyek yang saya kembangkan, seperti bot PLN dan bot WhatsApp 
                        berbasis database, adalah langkah nyata saya untuk membawa teknologi lebih dekat ke masyarakat, 
                        meningkatkan produktivitas, dan memberikan solusi yang hemat waktu. Saya berkomitmen untuk terus mengeksplorasi 
                        teknologi baru dan menghadirkan solusi yang lebih canggih di masa depan.
                    </p>
                </div>        
            </div>

                
    </header>

    @include('include.footer')
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('bs/js/scripts.js') }}"></script>
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    
</body>
</html>