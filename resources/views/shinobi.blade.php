<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>DATA SPREADSHEET</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="{{ asset('bs/assets/favicon.ico') }}" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{ asset('bs/css/styles.css') }}" rel="stylesheet" />
    </head>
    <body class="p-3 mb-2 bg-success text-white">
        <h1 style="text-align: center">SPREADSHEET</h1>
        <br>
        <div style="align-items: center">
                <table class="table table-dark table-hover">
                    <thead>
                        <tr style="text-align: center">
                                <th>NO</th>
                                <th>NAMA</th>
                                <th>ALAMAT</th>
                        </tr>
                    </thead>
            
                    <tbody>
                        @foreach ($result as $row)
                            <tr class="table-active" style="text-align: center">
                                <td>{{ $row->No }}</td>
                                <td>{{ $row->Nama }}</td>
                                <td>{{ $row->Alamat }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
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
  