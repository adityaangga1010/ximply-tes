<!DOCTYPE html>
<html lang="en" class=" scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
    <script src="http://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
    <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
    <link rel="shortcut icon" href="{{asset('img/logo.svg')}}">
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')

</head>
<body class=" font-DMSANS">

    @yield('content')

    <script src="{{asset('js/app..js')}}"></script>

</body>
</html>
