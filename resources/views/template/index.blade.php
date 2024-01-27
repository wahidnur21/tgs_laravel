<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
</head>
<body>
    @include('template.navbar')

    @yield('content')

    @include('template.footer')

    <script src="/bootstrap/js/bootstrap.bundle.js"></script>
    
</body>
</html>