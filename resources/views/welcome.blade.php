<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- Font Awesome -->
    <script src="https://use.fontawesome.com/releases/v5.12.1/js/all.js"></script>
    <title>Async Sport Center </title>
    <link rel="stylesheet" href="{{ asset('cssfile/welcome-style.css') }}">
</head>

<body>
    <div class="container">
        <div class="pattern"></div>
        <div class="nav">
            <div class="menu">
                <ul>
                    <li><a href="{{ route('about') }}">Tentang</a></li>
                    <li><a href="{{ route('layanan') }}">Layanan</a></li>
                    <li><a href="{{ route('contact') }}">Kontak</a></li>
                </ul>
            </div>
        </div>

        <div class="square-1 square"></div>
        <div class="square-2 square"></div>
        <div class="square-3 square"></div>

        <div class="title-1">ASYNC</div>
        <div class="title-2">Sport Center</div>

        <div class="player">
            <img src="img/football.png" alt="">
        </div>

        <div class="content">
            <p>Async Sport Center berlokasi di Bukit Cimaggu City, Cluster PineWood Blok E nomor 2</p>
            <a href="{{ route('booking') }}" class="btn btn-primary">Booking Sekarang</a>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.2/TweenMax.min.js"></script>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>

    <script type="text/javascript" src="/js/home-script.js"></script>
</body>

</html>
