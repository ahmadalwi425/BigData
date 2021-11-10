@php
$base_url = 'http://127.0.0.1:8000/';  
$img_url = 'http://127.0.0.1:8000/storage/assets/img/';  

if($link == "home") {
    $navActive = "home";
} 
else if ($link == "about") {
    $navActive = "about";
}
else if ($link == "bigdata") {
    $navActive = "bigdata";
}
else if ($link == "buletin") {
    $navActive = "buletin";
}
else if ($link == "findus") {
    $navActive = "findus";
}
else if ($link == "calender") {
    $navActive = "calender";
}
else if ($link == "shop") {
    $navActive = "shop";
}
@endphp

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="<?= $img_url ?>logo-navbar.png" type="image/x-icon">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=STIX+Two+Text:wght@400;500&display=swap" rel="stylesheet">

    {{-- Owl Carousel --}}
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="<?= $base_url ?>css/owl.theme.default.min.css">
    
    <!-- My Style -->
    <link rel="stylesheet" href="<?= $base_url ?>css/style.css">
    
    {{-- Jquery --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    {{-- DataTable --}}
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.js"></script>

    {{-- Owl Carousel --}}
    <script src="<?= $base_url ?>js/owl.carousel.min.js"></script>

    <title>Big Data</title>
  </head>
  <body>

    <!-- NAVBAR -->
    <!-- <nav class="navbar navbar-expand-lg fixed-top navbar-light bg-light">
    </nav> -->
    <nav class="navbar navbar-dark fixed-top flex-column navbar-expand-lg nav-first p-0">
        <div class="container-fluid bg-white">
            <div class="col-12 p-1">
                <a class="navbar-brand" href="#">
                    <img src="{{asset('storage/assets/img/index.jpg')}}" alt="" width="52" height="52" class="d-inline-block align-text-top">
                    <img src="{{asset('storage/assets/img/LO GO.png')}}" alt="" width="52" height="52" class="d-inline-block align-text-top">
                </a>
            </div>
        </div>
        <div class="container-fluid nav-second">
            <div class="col-12 p-1">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        @if($navActive == "home")
                            <a class="nav-link active" href="{{ url("home") }}">HOME</a>
                            <a class="nav-link" href="{{ url("about") }}">ABOUT</a>
                            <a class="nav-link" href="{{ url("bigdata") }}">BIG DATA</a>
                            <a class="nav-link" href="{{ url("buletin") }}">BULETIN</a>
                            <a class="nav-link" href="{{ url("calender") }}">CALENDER</a>
                            <a class="nav-link" href="{{ url("pembelian") }}">SHOP</a>
                            <a class="nav-link" href="{{ url("findus") }}">FIND US</a>
                        @elseif ($navActive == "about")
                            <a class="nav-link" href="{{ url("home") }}">HOME</a>
                            <a class="nav-link active" href="{{ url("about") }}">ABOUT</a>
                            <a class="nav-link" href="{{ url("bigdata") }}">BIG DATA</a>
                            <a class="nav-link" href="{{ url("buletin") }}">BULETIN</a>
                            <a class="nav-link" href="{{ url("calender") }}">CALENDER</a>
                            <a class="nav-link" href="{{ url("pembelian") }}">SHOP</a>
                            <a class="nav-link" href="{{ url("findus") }}">FIND US</a>
                        @elseif ($navActive == "bigdata")
                            <a class="nav-link" href="{{ url("home") }}">HOME</a>
                            <a class="nav-link" href="{{ url("about") }}">ABOUT</a>
                            <a class="nav-link active" href="{{ url("bigdata") }}">BIG DATA</a>
                            <a class="nav-link" href="{{ url("buletin") }}">BULETIN</a>
                            <a class="nav-link" href="{{ url("calender") }}">CALENDER</a>
                            <a class="nav-link" href="{{ url("pembelian") }}">SHOP</a>
                            <a class="nav-link" href="{{ url("findus") }}">FIND US</a>
                        @elseif ($navActive == "buletin")
                            <a class="nav-link" href="{{ url("home") }}">HOME</a>
                            <a class="nav-link" href="{{ url("about") }}">ABOUT</a>
                            <a class="nav-link" href="{{ url("bigdata") }}">BIG DATA</a>
                            <a class="nav-link active" href="{{ url("buletin") }}">BULETIN</a>
                            <a class="nav-link" href="{{ url("calender") }}">CALENDER</a>
                            <a class="nav-link" href="{{ url("pembelian") }}">SHOP</a>
                            <a class="nav-link" href="{{ url("findus") }}">FIND US</a>
                        @elseif ($navActive == "findus")
                            <a class="nav-link" href="{{ url("home") }}">HOME</a>
                            <a class="nav-link" href="{{ url("about") }}">ABOUT</a>
                            <a class="nav-link" href="{{ url("bigdata") }}">BIG DATA</a>
                            <a class="nav-link" href="{{ url("buletin") }}">BULETIN</a>
                            <a class="nav-link" href="{{ url("calender") }}">CALENDER</a>
                            <a class="nav-link" href="{{ url("pembelian") }}">SHOP</a>
                            <a class="nav-link active" href="{{ url("findus") }}">FIND US</a>
                        @elseif ($navActive == "calender") 
                            <a class="nav-link" href="{{ url("home") }}">HOME</a>
                            <a class="nav-link" href="{{ url("about") }}">ABOUT</a>
                            <a class="nav-link" href="{{ url("bigdata") }}">BIG DATA</a>
                            <a class="nav-link" href="{{ url("buletin") }}">BULETIN</a>
                            <a class="nav-link active" href="{{ url("calender") }}">CALENDER</a>
                            <a class="nav-link" href="{{ url("pembelian") }}">SHOP</a>
                            <a class="nav-link" href="{{ url("findus") }}">FIND US</a>
                        @elseif ($navActive == "shop") 
                            <a class="nav-link" href="{{ url("home") }}">HOME</a>
                            <a class="nav-link" href="{{ url("about") }}">ABOUT</a>
                            <a class="nav-link" href="{{ url("bigdata") }}">BIG DATA</a>
                            <a class="nav-link" href="{{ url("buletin") }}">BULETIN</a>
                            <a class="nav-link" href="{{ url("calender") }}">CALENDER</a>
                            <a class="nav-link active" href="{{ url("pembelian") }}">SHOP</a>
                            <a class="nav-link" href="{{ url("findus") }}">FIND US</a>
                        @endif
                        @guest
                        @else
                            @if(Auth::user()->id_level == 1)
                            <a class="nav-link active" href="{{url('admin')}}">Manage Web</a>
                            @else
                            <a class="nav-link active" href="{{url('admin/produk2')}}">Manage Data Shop</a>
                            @endif
                        @endguest
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <main class="pt-4 mt-5">
        @yield('content')
    </main>


    <!-- FOOTER -->
    <div class="container-fluid py-3 pt-5 text-white footer" style="background: hsla(191, 68%, 12%, 1);

    background: linear-gradient(0deg, hsla(191, 68%, 12%, 1) 81%, hsla(206, 75%, 15%, 1) 93%, hsla(206, 75%, 15%, 1) 100%);
    
    background: -moz-linear-gradient(0deg, hsla(191, 68%, 12%, 1) 81%, hsla(206, 75%, 15%, 1) 93%, hsla(206, 75%, 15%, 1) 100%);
    
    background: -webkit-linear-gradient(90deg, hsla(191, 68%, 12%, 1) 57%, hsla(206, 75%, 15%, 1) 93%, hsla(206, 75%, 15%, 1) 100%);
    ">
        <div class="row justify-content-center text-center">
            <div class="row justify-content-center">
                <div class="col-lg-2 mb-1 col-12"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                    width="24" height="24"
                    viewBox="0 0 172 172"
                    style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#ffffff"><path d="M154.671,44.333c-1.64833,-6.16333 -6.50733,-11.02233 -12.67067,-12.67067c-11.18,-2.99567 -56.00033,-2.99567 -56.00033,-2.99567c0,0 -44.82033,0 -56.00033,2.99567c-6.16333,1.64833 -11.02233,6.50733 -12.67067,12.67067c-2.99567,11.18 -2.99567,41.667 -2.99567,41.667c0,0 0,30.487 2.99567,41.667c1.64833,6.16333 6.50733,11.02233 12.67067,12.67067c11.18,2.99567 56.00033,2.99567 56.00033,2.99567c0,0 44.82033,0 56.00033,-2.99567c6.1705,-1.64833 11.02233,-6.50733 12.67067,-12.67067c2.99567,-11.18 2.99567,-41.667 2.99567,-41.667c0,0 0,-30.487 -2.99567,-41.667zM71.66667,104.619v-37.238c0,-2.75917 2.9885,-4.47917 5.375,-3.10317l32.25,18.619c2.3865,1.376 2.3865,4.83033 0,6.20633l-32.25,18.619c-2.3865,1.38317 -5.375,-0.344 -5.375,-3.10317z"></path></g></g></svg>Official BEM IT - PLN</div>
                <div class="col-lg-2 mb-1 col-12"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                    width="24" height="24"
                    viewBox="0 0 172 172"
                    style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#ffffff"><path d="M86,14.33333c-39.49552,0 -71.66667,32.17115 -71.66667,71.66667c0,39.49552 32.17115,71.66667 71.66667,71.66667c39.49552,0 71.66667,-32.17115 71.66667,-71.66667c0,-39.49552 -32.17115,-71.66667 -71.66667,-71.66667zM86,28.66667c1.77939,0 3.72971,0.7284 6.21485,3.09342c2.48513,2.36503 5.18351,6.3299 7.5026,11.54785c1.7654,3.97214 3.20962,8.82008 4.45117,14.02539h-36.33724c1.24155,-5.20531 2.68577,-10.05325 4.45118,-14.02539c2.31908,-5.21795 5.01748,-9.18283 7.5026,-11.54785c2.48514,-2.36503 4.43546,-3.09342 6.21485,-3.09342zM60.56673,34.64355c-0.46679,0.93814 -0.94836,1.85736 -1.38574,2.84147c-2.5923,5.83267 -4.60442,12.5828 -6.11686,19.84831h-16.71289c5.63615,-9.76691 14.06539,-17.6704 24.2155,-22.68978zM111.43327,34.64355c10.15011,5.01937 18.57934,12.92287 24.21549,22.68978h-16.71289c-1.51244,-7.26551 -3.52456,-14.01563 -6.11686,-19.84831c-0.43738,-0.98411 -0.91896,-1.90333 -1.38575,-2.84147zM30.54232,71.66667h20.32422c-0.43995,4.63598 -0.69987,9.41436 -0.69987,14.33333c0,4.91897 0.25992,9.69735 0.69987,14.33333h-20.32422c-1.17651,-4.58819 -1.87565,-9.36954 -1.87565,-14.33333c0,-4.96379 0.69914,-9.74515 1.87565,-14.33333zM65.33984,71.66667h41.32031c0.49889,4.60522 0.83985,9.36414 0.83985,14.33333c0,4.96919 -0.34096,9.72811 -0.83985,14.33333h-41.32031c-0.49888,-4.60522 -0.83984,-9.36414 -0.83984,-14.33333c0,-4.96919 0.34096,-9.72811 0.83984,-14.33333zM121.13347,71.66667h20.32422c1.17652,4.58819 1.87565,9.36954 1.87565,14.33333c0,4.96379 -0.69914,9.74515 -1.87565,14.33333h-20.32422c0.43995,-4.63598 0.69987,-9.41436 0.69987,-14.33333c0,-4.91897 -0.25992,-9.69735 -0.69987,-14.33333zM36.35124,114.66667h16.71289c1.51244,7.26551 3.52456,14.01564 6.11686,19.84831c0.43738,0.98411 0.91896,1.90333 1.38574,2.84148c-10.15011,-5.01938 -18.57934,-12.92287 -24.2155,-22.68978zM67.83138,114.66667h36.33724c-1.24155,5.20531 -2.68577,10.05325 -4.45117,14.02539c-2.31908,5.21796 -5.01748,9.18283 -7.5026,11.54785c-2.48513,2.36503 -4.43546,3.09343 -6.21485,3.09343c-1.77939,0 -3.72971,-0.7284 -6.21485,-3.09343c-2.48513,-2.36502 -5.18352,-6.32989 -7.5026,-11.54785c-1.7654,-3.97214 -3.20962,-8.82008 -4.45118,-14.02539zM118.93587,114.66667h16.71289c-5.63615,9.76691 -14.06539,17.67041 -24.21549,22.68978c0.46679,-0.93815 0.94837,-1.85737 1.38575,-2.84148c2.5923,-5.83267 4.60442,-12.5828 6.11686,-19.84831z"></path></g></g></svg>https://kbm.itpln.ac.id</div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-2 mb-1 col-12"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                    width="25" height="25"
                    viewBox="0 0 172 172"
                    style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#ffffff"><path d="M30.96,13.76c-9.4944,0 -17.2,7.7056 -17.2,17.2v110.08c0,9.4944 7.7056,17.2 17.2,17.2h110.08c9.4944,0 17.2,-7.7056 17.2,-17.2v-110.08c0,-9.4944 -7.7056,-17.2 -17.2,-17.2zM86,37.84c28.4488,0 51.6,18.43571 51.6,41.10531c0,9.0472 -3.58002,17.23977 -11.07922,25.28937c-5.4008,6.1232 -14.1685,12.86345 -22.2525,18.43625c-8.084,5.504 -15.51628,9.83652 -18.26828,10.97172c-1.1008,0.4472 -1.9264,0.65172 -2.58,0.65172c-2.2704,0 -2.06669,-2.40209 -1.89469,-3.39969c0.1376,-0.7568 0.75922,-4.34031 0.75922,-4.34031c0.172,-1.2728 0.34131,-3.29595 -0.17469,-4.56875c-0.5848,-1.4104 -2.88987,-2.13522 -4.57547,-2.47922c-24.768,-3.2336 -43.13437,-20.26509 -43.13437,-40.56109c0,-22.6696 23.1512,-41.10531 51.6,-41.10531zM82.53313,65.35328c-1.7331,0.03215 -3.41313,1.35477 -3.41313,3.44672v20.64c0,1.89888 1.54112,3.44 3.44,3.44c1.89888,0 3.44,-1.54112 3.44,-3.44v-9.90344l7.51828,11.8989c1.94704,2.72448 6.24172,1.35165 6.24172,-1.99547v-20.64c0,-1.89888 -1.54112,-3.44 -3.44,-3.44c-1.89888,0 -3.44,1.54112 -3.44,3.44v10.32l-7.51828,-12.31547c-0.73014,-1.02168 -1.78873,-1.47054 -2.82859,-1.45125zM51.6,65.36c-1.89888,0 -3.44,1.54112 -3.44,3.44v20.64c0,1.89888 1.54112,3.44 3.44,3.44h10.32c1.89888,0 3.44,-1.54112 3.44,-3.44c0,-1.89888 -1.54112,-3.44 -3.44,-3.44h-6.88v-17.2c0,-1.89888 -1.54112,-3.44 -3.44,-3.44zM72.24,65.36c-1.89888,0 -3.44,1.54112 -3.44,3.44v20.64c0,1.89888 1.54112,3.44 3.44,3.44c1.89888,0 3.44,-1.54112 3.44,-3.44v-20.64c0,-1.89888 -1.54112,-3.44 -3.44,-3.44zM106.64,65.36c-1.89888,0 -3.44,1.54112 -3.44,3.44v20.64c0,1.89888 1.54112,3.44 3.44,3.44h10.32c1.89888,0 3.44,-1.54112 3.44,-3.44c0,-1.89888 -1.54112,-3.44 -3.44,-3.44h-6.88v-3.44h6.88c1.90232,0 3.44,-1.54112 3.44,-3.44c0,-1.89888 -1.53768,-3.44 -3.44,-3.44h-6.88v-3.44h6.88c1.89888,0 3.44,-1.54112 3.44,-3.44c0,-1.89888 -1.54112,-3.44 -3.44,-3.44z"></path></g></g></svg>@tak5005y</div>
                <div class="col-lg-2 mb-1 col-12"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                    width="24" height="24"
                    viewBox="0 0 172 172"
                    style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#ffffff"><path d="M28.66667,28.66667c-4.773,0 -8.98151,2.34406 -11.57585,5.94889c-1.74867,2.42233 -0.97612,5.85595 1.55371,7.43262l62.93229,39.2207c2.709,1.69133 6.13735,1.69133 8.84636,0l62.66634,-39.55664c2.63017,-1.66267 3.28592,-5.27623 1.34375,-7.69857c-2.61583,-3.25367 -6.60643,-5.34701 -11.09993,-5.34701zM154.19531,57.94922c-0.59931,0.00661 -1.20792,0.17178 -1.77767,0.5319l-61.99446,39.09472c-2.70901,1.68417 -6.13736,1.67734 -8.84636,-0.014l-62.00846,-38.63281c-2.279,-1.419 -5.23503,0.22396 -5.23503,2.91146v67.15951c0,7.91917 6.41417,14.33333 14.33333,14.33333h114.66667c7.91917,0 14.33333,-6.41417 14.33333,-14.33333v-67.62142c0,-2.021 -1.67342,-3.44918 -3.47135,-3.42936z"></path></g></g></svg>bemkbm@itpln.ac.id</div>
                <div class="col-lg-2 mb-1 col-12"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                    width="24" height="24"
                    viewBox="0 0 172 172"
                    style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#ffffff"><path d="M57.33333,21.5c-19.7585,0 -35.83333,16.07483 -35.83333,35.83333v57.33333c0,19.7585 16.07483,35.83333 35.83333,35.83333h57.33333c19.7585,0 35.83333,-16.07483 35.83333,-35.83333v-57.33333c0,-19.7585 -16.07483,-35.83333 -35.83333,-35.83333zM57.33333,35.83333h57.33333c11.85367,0 21.5,9.64633 21.5,21.5v57.33333c0,11.85367 -9.64633,21.5 -21.5,21.5h-57.33333c-11.85367,0 -21.5,-9.64633 -21.5,-21.5v-57.33333c0,-11.85367 9.64633,-21.5 21.5,-21.5zM121.83333,43c-3.95804,0 -7.16667,3.20863 -7.16667,7.16667c0,3.95804 3.20863,7.16667 7.16667,7.16667c3.95804,0 7.16667,-3.20863 7.16667,-7.16667c0,-3.95804 -3.20863,-7.16667 -7.16667,-7.16667zM86,50.16667c-19.7585,0 -35.83333,16.07483 -35.83333,35.83333c0,19.7585 16.07483,35.83333 35.83333,35.83333c19.7585,0 35.83333,-16.07483 35.83333,-35.83333c0,-19.7585 -16.07483,-35.83333 -35.83333,-35.83333zM86,64.5c11.85367,0 21.5,9.64633 21.5,21.5c0,11.85367 -9.64633,21.5 -21.5,21.5c-11.85367,0 -21.5,-9.64633 -21.5,-21.5c0,-11.85367 9.64633,-21.5 21.5,-21.5z"></path></g></g></svg>Instagram</div>
            </div>
            <div class="row justify-content-center mt-lg-0 mt-3">
                <div class="col-lg-12 col-12">2021 BEM KBM INSTITUT TEKNOLOGI PLN</div>
            </div>
        </div>
    </div>



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>