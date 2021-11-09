@php
$base_url = 'http://127.0.0.1:8000/';  
$img_url = 'http://127.0.0.1:8000/storage/assets/img/';  
@endphp

@extends('layouts.template')

@section('content')

 <!-- JUMBOTRON -->
 <div class="container-fluid">
    <div class=" mt-5 jumbotron text-end" style="background-image: url({{asset('storage/assets/img/home.jpeg')}}); background-size: cover; background-repeat: no-repeat;">
        <!-- <img src="<?= $img_url ?>IMG_6877.JPG" alt="" class="img-fluid mt-5"> -->
        <br><br><br><br><br><br><br><br><br><br><br><br><br>
        <div class="jumbotron-text align-self-center">
            <h1 class="home-title">WELCOME TO</h1>
            <h3 class="home-subtitle">MOBILE BEM</h3>
            <h3 class="home-subtitle">KBM IT PLN</h3>
        </div>
    </div>
</div>

<br><br>

<!-- CONTENT -->
<div class="container text-center mt-3 mb-5">
    <h1 class="title-content">
        BIG DATA
    </h1>
    <p class="isi-content">Big Data merupakan sebuah portal informasi yang berisikan data demografis, kemahasiswaan, dan pergerakan Mahasiswa Institut Teknologi PLN untuk mewujudkan BEM KBM IT-PLN yang terintegrasi pada pusat data yaitu BigData. BigData terintregasi pada website <a href="http://www.bemkbmitpln.com">http://www.bemkbmitpln.com</a> dan mobile BEM, sehingga pengguna dapat secara leluasauntuk mengakses. BigData tersebut, baik dari website maupun mobile phone.</p>
    <p class="isi-content">BigData terdapat pula berbagai macam database yang cukup berguna bagi civitas IT-PLN. Hasil dari database ini diharapkan dapat dimanfaatkan oleh seluruh mahasiswa IT-PLN dengan bijak. Database diperoleh dari stakeholder/instansi yang berada di lingkungan kampus.</p>

    <br><br>

    <div class="container mx-auto rounded text-cemter row flex-row justify-content-center my-bg py-4">
        <h1 class="title-content text-white">INFORMASI TERKINI</h1>
        <div class="row g-lg-4 g-2 card-group">
            @foreach($data as $row)
            <div class="col-sm-12 col-lg-4">
                <div class="card border-0">
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