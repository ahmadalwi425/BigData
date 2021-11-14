@php
$base_url = 'http://127.0.0.1:8000/';  
$img_url = 'http://127.0.0.1:8000/storage/assets/img/';  
@endphp

@extends('layouts.template')

@section('content')
    
    <div class="container mt-5 pt-3">
        <div class="card bg-light my-5 text-white rounded border-1">
            <div class="card-header">
                <h1 class="text-prime h3 text-dark title-table">
                    BULETIN TERBARU
                </h1>
            </div>
            <div class="card-body bg-white text-center">
                <img src="{{asset('storage/assets/img/home.jpeg')}}" style="width:70%; max-height:30%;" alt="" height="150" class="text-center">
            </div>
            <div class="card-footer text-center">
                <button class="btn btn-warning text-prime text-white btn-next">
                    SELANJUTNYA
                </button>
            </div>
        </div>
    </div>

    <div class="container mt-3">
        @foreach($kategori as $rowkat)


        <hr>
        <h1 class="text-prime title-table text-center">
            {{$rowkat->nama_kategori}}
        </h1>
        <hr>

        <div class="owl-carousel owl-theme my-5 row cols-lg-3 g-4 cols-1 justify-content center text-center">
            @foreach($data as $row)
            @if($rowkat->id == $row->id_kategori_buletin)
            <div class="card item align-self-center">
                <div class="card-body">
                <img src="{{asset('storage/'.$row->cover)}}" alt="" class="card-img">
                </div>
                <div class="card-footer">
                    <h3 class="title-card">{{$row->judul}}</h3>
                    <div class="text-center">
                        <button class="btn btn-danger btn-card">
                            SELENGKAPNYA
                        </button>
                    </div>
                </div>
            </div>
            @endif
            @endforeach 
            <div id="navhere" style="background-color: red"></div>
        </div>

        @endforeach

        <!-- <hr>
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
        </div> -->
        
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