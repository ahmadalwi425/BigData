<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>BigData - Shop</title>
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/prettyPhoto.cs')}}s" rel="stylesheet">
    <link href="{{asset('css/price-range.css')}}" rel="stylesheet">
    <link href="{{asset('css/animate.css')}}" rel="stylesheet">
	<link href="{{asset('css/main.css')}}" rel="stylesheet">
	<link href="{{asset('css/responsive.css')}}" rel="stylesheet">
    {{-- Own CSS --}}
    <link rel="stylesheet" href="{{asset('css/myShop.css')}}">
    
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="shortcut icon" href="{{asset('storage/assets/img/LO GO.png')}}" type="image/x-icon">
	{{-- Sweetalert --}}
	<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head><!--/head-->

<header id="header"><!--header-->
    
    <div class="header-bottom"><!--header-bottom-->
        <div class="container">
            <div class="row">
                <div class="col-sm-9">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="mainmenu pull-left">
                        <ul class="nav navbar-nav collapse navbar-collapse">
                            <li><a href="{{ url("") }}">Home</a></li>
                            <li class="dropdown"><a href="#">Shop<i class="fa fa-angle-down"></i></a>
                                <ul role="menu" class="sub-menu">
                                    <li><a href="{{ url("pembelian") }}">Products</a></li>
                                    <li><a href="{{ url("konfirmasi") }}">Checkout</a></li> 
                                    <li><a href="{{ url("keranjang") }}">Cart</a></li> 
                                </ul>
                            </li> 
                            <li><a href="{{ url("about") }}">About</a></li> 
                            <li><a href="{{ url("bigdata") }}">Big Data</a></li> 
                            <li><a href="{{ url("buletin") }}">Buletin</a></li> 
                            <li><a href="{{ url("calender") }}">Calender</a></li> 
                            <li><a href="{{ url("findus") }}">Find Us</a></li> 
                        </ul>
                    </div>
                </div>
                <div class="col-sm-3 mt--3">
                    <div class="shop-menu pull-right">
                        <ul class="nav navbar-nav">
                            <li><a href="{{ url("konfirmasi") }}"><i class="fa fa-crosshairs"></i> Checkout</a></li>
                            <li><a href="{{ url("keranjang") }}"><i class="fa fa-shopping-cart"></i> Cart</a></li>
                            <li><a href="{{ url("logout") }}"><i class="fa fa-lock"></i> Log Out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/header-bottom-->
</header><!--/header-->


<body>

    <main class="main-content" id="panel">
        @yield('content')
    </main>

@if(Session::has('success'))
    <script>
        Swal.fire(
          'Berhasil!',
          '{{session()->get('success')}}',
          'success'
        )
    </script>
  	@endif

    <script src="{{asset('js/jquery.js')}}"></script>
	<script src="{{asset('js/price-range.js')}}"></script>
    <script src="{{asset('js/jquery.scrollUp.min.js')}}"></script>
	<script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/jquery.prettyPhoto.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>
</body>
</body>
</html>