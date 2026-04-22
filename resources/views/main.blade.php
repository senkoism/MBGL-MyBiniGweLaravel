<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    @section('navbar')
        <b> Navbar Utama</b> <br />
    @show
    @section('banner')
        
    @show
    <div class="container">
        @yield('content')
    </div>
    //blade bukan cuma untuk template, silahkan bisa kalian cek di https://laravel.com/docs/13.x
</body>
</html>