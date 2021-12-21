<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>SAFES</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="/assets/css/app.min.css">
        <link rel="stylesheet" href="/assets/bundles/weather-icon/css/weather-icons.min.css">
        <link rel="stylesheet" href="/assets/bundles/weather-icon/css/weather-icons-wind.min.css">
        <!-- Template CSS -->
        <link rel="stylesheet" href="/assets/css/style.css">
        <link rel="stylesheet" href="/assets/css/components.css">
        <!-- Custom style CSS -->
        <link rel="stylesheet" href="/assets/css/custom.css">
        <link rel='shortcut icon' type='image/x-icon' href='/assets/img/favicon.ico' />
       
    </head>
    <body>
        <div class="flex-center position-ref full-height" id="root">

        </div>
    
        <script type="text/javascript" src ="{{asset('js/app.js')}}"></script>
        <!-- General JS Scripts -->
        <script src="/assets/js/app.min.js"></script>
        <!-- JS Libraies -->
        <!-- Page Specific JS File -->
        <!-- Template JS File -->
        <script src="/assets/js/scripts.js"></script>
        <!-- Custom JS File -->
        <script src="/assets/js/custom.js"></script>
    </body>
</html>
