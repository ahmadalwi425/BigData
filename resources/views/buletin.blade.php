@php
$base_url = 'http://127.0.0.1:8000/';  
$img_url = 'http://127.0.0.1:8000/storage/assets/img/';  
@endphp

@extends('layouts.template')

@section('content')
    
    <div class="container mt-5">
        <div class="card bg-dark my-5 text-white rounded border-1">
            <div class="card-header">
                <h1>
                    BULETIN TERBARU
                </h1>
            </div>
            <div class="card-body bg-white">
                <img src="" alt="">
                <br><br><br>
            </div>
            <div class="card-footer text-center">
                <button class="btn btn-primary btn-next">
                    SELANJUTNYA
                </button>
            </div>
        </div>
    </div>

    <div class="container">
        <hr>
        <h1 class="title-content text-center">
            KAJIAN BEM KBM IT-PLN
        </h1>
        <hr>

        <div class="owl-carousel owl-theme my-5 row cols-lg-3 g-4 cols-1 justify-content center text-center">
            <div class="card item align-self-center">
                <div class="card-body">
                    tes
                </div>
                <div class="card-footer">
                    <h3 class="title-card">KAJIAN ...</h3>
                    <div class="text-center">
                        <button class="btn btn-danger btn-card">
                            SELENGKAPNYA
                        </button>
                    </div>
                </div>
            </div>
            <div class="card item align-self-center">
                <div class="card-body">
                    tes
                </div>
                <div class="card-footer">
                    <h3 class="title-card">KAJIAN ...</h3>
                    <div class="text-center">
                        <button class="btn btn-danger btn-card">
                            SELENGKAPNYA
                        </button>
                    </div>
                </div>
            </div>
            <div class="card item align-self-center">
                <div class="card-body">
                    tes
                </div>
                <div class="card-footer">
                    <h3 class="title-card">KAJIAN ...</h3>
                    <div class="text-center">
                        <button class="btn btn-danger btn-card">
                            SELENGKAPNYA
                        </button>
                    </div>
                </div>
            </div>
            <div id="navhere" style="background-color: red"></div>
        </div>

        <hr>
        <h1 class="title-content text-center">
            KAJIAN BEM KBM IT-PLN
        </h1>
    <hr>

        <div class="owl-carousel owl-theme my-5 row cols-lg-3 g-4 cols-1 justify-content center text-center">
            <div class="card item align-self-center">
                <div class="card-body">
                    tes
                </div>
                <div class="card-footer">
                    <h3 class="title-card">KAJIAN ...</h3>
                    <div class="text-center">
                        <button class="btn btn-danger btn-card">
                            SELENGKAPNYA
                        </button>
                    </div>
                </div>
            </div>
            <div class="card item align-self-center">
                <div class="card-body">
                    tes
                </div>
                <div class="card-footer">
                    <h3 class="title-card">KAJIAN ...</h3>
                    <div class="text-center">
                        <button class="btn btn-danger btn-card">
                            SELENGKAPNYA
                        </button>
                    </div>
                </div>
            </div>
            <div class="card item align-self-center">
                <div class="card-body">
                    tes
                </div>
                <div class="card-footer">
                    <h3 class="title-card">KAJIAN ...</h3>
                    <div class="text-center">
                        <button class="btn btn-danger btn-card">
                            SELENGKAPNYA
                        </button>
                    </div>
                </div>
            </div>
            <div id="navhere" style="background-color: red"></div>
        </div>
        
    </div>

    <script>
        $(document).ready(function(){
            $(".owl-carousel").owlCarousel({
                nav:true,
                pagination: true,
                loop:true,
                margin:30,
                nacContainer: '#navhere',
                navElement: 'button',
                center: true,
                dots: true,
                responsive:{
                    0:{
                        items:2
                    },
                    600:{
                        items:2
                    },
                    1000:{
                        items:3
                    }
                }
            });
        });
    </script>

@endsection