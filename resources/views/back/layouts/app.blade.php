<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <meta http-equiv='X-UA-Compatible' content='ie=edge'>
    <link rel='stylesheet' href='{{ asset('css/app.css') }}'>
        <link rel="stylesheet" href="{{ asset('css/sidebar.css') }}">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <title>Document</title>
</head>
<body>
    @yield('content')
    <script src='{{ asset('js/app.js') }}'></script>
</body>
</html>
