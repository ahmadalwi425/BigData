@php
$base_url = 'http://127.0.0.1:8000/';  
$img_url = 'http://127.0.0.1:8000/storage/assets/img/';  
@endphp

@extends('layouts.template')

@section('content')

 <!-- JUMBOTRON -->
 <div class="container-fluid">
    <div class="p-2 mt-5 jumbotron text-end" style="background-image: url(<?= $img_url ?>IMG_6877.JPG);">
        <!-- <img src="<?= $img_url ?>IMG_6877.JPG" alt="" class="img-fluid mt-5"> -->
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        <div class="jumbotron-text align-self-center">
            <h1>WELCOME TO</h1>
            <h3>MOBILE BEM</h3>
            <h3>KBM IT PLN</h3>
        </div>
    </div>
</div>

<br><br>

<!-- CONTENT -->
<div class="container text-center my-5">
    <h1 class="title-content">
        BIG DATA
    </h1>
    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Reiciendis eaque illum inventore sequi asperiores dolores odit. Laudantium fugit ipsum maiores, voluptatibus dicta vero soluta perspiciatis, doloremque, quaerat nesciunt temporibus aliquid dolor libero deserunt pariatur sed veritatis? Dolorem exercitationem, sed commodi iusto sequi explicabo, obcaecati eum quidem dignissimos animi hic quo magnam! Dolorum exercitationem perspiciatis, assumenda, a molestiae adipisci quis praesentium temporibus ducimus alias tempora possimus cumque! Facere similique dolores veniam at eaque. Magnam ipsam et omnis ipsum alias, earum doloremque non fugit qui officia, delectus modi vero atque odio. Nihil ipsum nemo accusantium laudantium? Cumque doloribus deserunt culpa repudiandae aliquam?</p>

    <br><br>

    <div class="container mx-auto rounded text-cemter row flex-row justify-content-center my-bg py-4">
        <h1 class="title-content text-white">INFORMASI TERKINI</h1>
        <div class="row g-lg-4 g-2 card-group">
            @foreach($data as $row)
            <div class="col-sm-12 col-lg-4">
                <div class="card">
                    <img src="{{asset('storage/'.$row->cover)}}" alt="" class="card-img">
                    <div class="card-img-overlay">
                        <button class="btn btn-primary rounded float-end">
                            SELENGKAPNYA
                        </button>
                    </div>
                </div>
            </div>
            @if ($loop->iteration == 3)
                @break
            @endif
            @endforeach
            
        </div>
    </div>

</div>

@endsection