@php
$base_url = 'http://127.0.0.1:8000/';  
$img_url = 'http://127.0.0.1:8000/storage/assets/img/';  
@endphp

@extends('layouts.template')

@section('content')


<div class="container-fluid row align-item-center">
    <div class="p-2 py-5 jumbotron text-center row" style="background-image: url(<?= $img_url ?>IMG_6877.JPG);">
        <!-- <img src="<?= $img_url ?>IMG_6877.JPG" alt="" class="img-fluid mt-5"> -->
        <br><br><br><br>
        <br><br><br><br>
        <h1 class="align-self-center">TENTANG DEDIKASI MILENIAL</h1>
        <br><br><br><br>
        <br><br><br><br>
        <img src="" alt="">
    </div>
</div>

<svg xmlns="http://www.w3.org/2000/svg" width="100%" height="200px" style="margin-top: -50px; z-index: 10; position: absolute">
    <defs>
        <linearGradient id="lgrad" x1="50%" y1="0%" x2="50%" y2="100%" >
         
               <stop offset="0%" style="stop-color:rgb(255,255,255);stop-opacity:0.00" />
               <stop offset="24%" style="stop-color:rgb(33,150,243);stop-opacity:1.00" />
               <stop offset="100%" style="stop-color:rgb(1,19,255);stop-opacity:1.00" />
     
         </linearGradient>
       </defs>
       <rect x="0" y="0" width="100%" height="100%" fill="url(#lgrad)"/>
  </svg>

<div class="container-fluid text-center text-white" style="background-color:#0113FF;">
    <div class="dedikasi-milenial">

        <h1 class="title-dedikasi">DEDIKASI MILENIAL</h1>
        <div class="row cols-lg-2 justify-content-center">
            <div class="col-lg-3 col-12">
                <p>Pengorbanan dan pengabdian tenaga-pikiran-waktu demi asa dan arsa bersama</p>
            </div>
            <div class="col-lg-3 col-12">
                <p>Generasi yang melangkah kedepan dengan segenap rasa, ide, dan harapan untuk mengukir karya</p>
            </div>
        </div>
    </div>
        <div class="row">
            <h2 class="title-visi">VISI:</h2>
            <p>"BEM KBM IT-PLN SEBAGAI INISIATOR DEDIKASI TERHADAP KBM-IT-PLN"</p>
            <h2 class="title-misi">MISI:</h2>
            <ol>
                <li>DEDIKASI PENGABDIAN</li>
                <p>Lembaga yang Progresif dalamn membangun gerakan Pemberdayaan Masyarakat</p>
                <li>DEDIKASI PENGEMBANGAN</li>
                <p>Mengembangkan potensi Milenial pada kemajuan Era Society 5.0</p>
                <li>DEDIKASI PELAYANAN</li>
                <p>Menjadi wadah yang harmonis serta selaras dalam pelayanan mahasiswa berlandaskan Whole Of Government Method</p>
                <li>DEDIKASI PERGERAKAN</li>
                <p>Terciptanya Lembaga yang Proaktif, Dinamis dan Representatif di Bidang Pergerakan</p>
            </ol>
        </div>
    <br><br><br><br>
    <div class="row justify-content-center">
        <h1 class="title-budaya">BUDAYA ORGANISASI</h1>
        <div class="row cols-2 g-lg-4 g-2 text-dark justify-content-center mb-5 px-5">
            <div class="col-lg-6 col-10">
                <div class="card bg-warning">
                    <div class="card-header">01. GOOD THINK</div>
                    <div class="card-body">Pemikiran tajam, kritis dan solutif layaknya teknokrat</div>
                </div>
            </div>
            <div class="col-lg-6 col-10">
                <div class="card bg-warning">
                    <div class="card-header">03. GOOD ATITUDE</div>
                    <div class="card-body">Merepresentasikan budi pekerti yang luhur dengan kewibawaan</div>
                </div>
            </div>
            <div class="col-lg-6 col-10">
                <div class="card bg-warning">
                    <div class="card-header">02. GOOD WORDS</div>
                    <div class="card-body">Mencerminkan pribadi yang cakap dalam berkomunikasi</div>
                </div>
            </div>
            <div class="col-lg-6 col-10">
                <div class="card bg-warning">
                    <div class="card-header">04. GOOD WORKS</div>
                    <div class="card-body">Terampil mdan cekatan di dalam dinamika berorganisai</div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection