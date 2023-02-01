<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <!-- Css -->    
    @yield('css')

    <!-- Header JS -->
    @yield('header_js')

</head>
<body class="antialiased">

    @yield('content')
    <div class="container">
        <div class="row row-cols-6">
            <div class="col card">
                <img class="cardImg py-3" src="{{ asset('img/to_be_continued.png') }}" alt="">
                <h3 class="cardTitle text-center">Title</h3>
            </div>
        </div>
    </div>


    @yield('footer_js')
</body>

</html>
