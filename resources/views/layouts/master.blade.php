<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <title>Hello, world!</title>
        
        <style>
            html, body {
                height: 100%;
                margin: 0;
                padding: 0;
            }
            
            body {
                display: flex;
                flex-direction: column;
            }
            
            .container {
                flex: 1 0 auto;  /* ni yang penting! */
            }
            
            footer {
                flex-shrink: 0;
            }
        </style>

    </head>
    <body>
        {{-- navbar --}}
        @include('layouts.navbar')

        <div class="container mt-3">
            {{-- ISI CONTENET DI SINI --}}
            @yield('content')
        </div>

        {{-- FOOTER --}}
        @include('layouts.footer')
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>