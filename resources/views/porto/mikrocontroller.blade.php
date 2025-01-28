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
            <div class="container d-flex flex-column" style="text-align: center"> 
                <h1 class="masthead-heading text-uppercase mb-0">IOT (Internet of Things)<br><br></h1>
                <img class="img-fluid rounded mb-5" src="{{ asset('bs/assets/img/portfolio/mqtt.webp') }}" alt="..."
                style="display:block; margin-left: auto; margin-right: auto;" height="100%" width="100%"/>
            </div>
                <div class="container">
                    <p class="font-weight-light" style="text-align: justify">
                        <h1>MQTT</h1>
                        Hallo saya Yoas, saya memiliki minat besar dalam menghadirkan
                        solusi teknologi yang inovatif dan praktis. 
                        Salah satu proyek unggulan saya adalah sistem pengontrolan rumah pintar berbasis MQTT, 
                        yang memungkinkan kontrol perangkat rumah tangga seperti pompa air dan lampu 
                        melalui aplikasi khusus yang saya kembangkan menggunakan React Native.
                        <br>
                        Sistem ini memanfaatkan protokol MQTT untuk komunikasi data yang cepat dan ringan, 
                        memastikan perangkat terhubung dan responsif saat menerima perintah. 
                        Dengan aplikasi React Native sebagai antarmuka, pengguna dapat dengan mudah 
                        mengontrol perangkat rumah mereka dari ponsel, menciptakan rumah yang 
                        lebih cerdas dan mudah diakses. Proyek ini juga menggunakan <strong> D1 Mini dengan chip ESP8266</strong> 
                        sebagai inti penghubung, menjadikan otomatisasi rumah tangga lebih hemat energi dan efisien.
                        <br><br>
                        <h1>RANGKAIAN ELEKTRONIKA DAN APLIKASI IOT DENGAN MQTT</h1>
                    </p>    
                </div>
                <br>
                <div class="container">
                    <div class="row" style="text-align: center" >
                        <div class="col-lg-3">
                            <img class="img-fluid rounded" src="{{ asset('bs/assets/img/portfolio/fritzingtelegramcom.webp') }}" alt="" height="186px" width="280px"/>
                            <p style="text-align: center">Rangkaian dengan Wemos D1 Mini</p>
                        </div>
                
                        <div class="col-lg-3">
                            <img class="img-fluid rounded" src="{{ asset('bs/assets/img/portfolio/fritzingtelegram.webp') }}" alt="" height="213px" width="320px"/>
                            <p style="text-align: center">Rangkaian Elektronika dengan Wemos D1 Mini</p>
                        </div>

                        <div class="col-lg-2">
                            <img class="img-fluid rounded" src="{{ asset('bs/assets/img/portfolio/androidiot.webp') }}" alt="" height="320px" width="180px"/>
                            <p style="text-align: center">Kontrolling dengan Android</p>
                        </div>

                        <div class="col-lg-2">
                            <img class="img-fluid rounded" src="{{ asset('bs/assets/img/portfolio/iosiot.webp') }}" alt="" height="320px" width="180px"/>
                            <p style="text-align: center">Kontrolling dengan IOS</p>
                        </div>
                    </div>
                </div> 

                <div class="container d-flex align-items-center flex-column">
                    <p class="font-weight-light" style="text-align: justify">
                        <br>
                        Dengan rangkaian tersebut saya bisa mengontrol alat dengan Aplikasi berbasis <strong> IOT (Internet of Things)</strong>
                    </p>    
                </div>

    </header>

    @include('include.footer')
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('bs/js/scripts.js') }}"></script>
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    
</body>
</html>