@php
$base_url = 'http://127.0.0.1:8000/';  
$img_url = 'http://127.0.0.1:8000/storage/assets/img/';  
@endphp

@extends('layouts.template')

@section('content')


<div class="mt-5 container-fluid row align-item-center">
    <div class="mt-3 mx-auto py-5 jumbotron text-center row" style="background-image: url({{asset('storage/assets/img/home.jpeg')}}); background-size: cover; background-repeat: no-repeat; z-index: -999">
        <h1 class="align-self-center about-title m-0">TENTANG DEDIKASI MILENIAL</h1>
        <img src="{{asset('storage/assets/img/LOGO TOK.png')}}" alt="" style="width: 50%; text-align: center; margin: 0; margin-top:-60px" class="img-fluid mx-auto"  >
    </div>
</div>

{{-- <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="200px" style="margin-top: -50px; z-index: 10; position: absolute">
    <defs>
        <linearGradient id="lgrad" x1="50%" y1="0%" x2="50%" y2="100%" >
         
               <stop offset="0%" style="stop-color:rgb(255,255,255);stop-opacity:0.00" />
               <stop offset="24%" style="stop-color:rgb(33,150,243);stop-opacity:1.00" />
               <stop offset="100%" style="stop-color:rgb(1,19,255);stop-opacity:1.00" />
     
         </linearGradient>
       </defs>
       <rect x="0" y="0" width="100%" height="100%" fill="url(#lgrad)"/>
  </svg> --}}

<div class="container-fluid text-center text-white" style="background-color:background: hsla(206, 75%, 15%, 1);

background: linear-gradient(0deg, hsla(206, 75%, 15%, 1) 0%, hsla(206, 75%, 15%, 1) 78%, hsla(0, 0%, 100%, 0) 100%);">
    <div class="dedikasi-milenial">

        <h1 class="title-content text-white pb-2">DEDIKASI MILENIAL</h1>
        <div class="row cols-lg-2 justify-content-center">
            <div class="col-lg-3 col-12">
                <p style="text-align: end" class="text-right">Pengorbanan dan pengabdian tenaga-pikiran-waktu demi asa dan arsa bersama</p>
            </div>
            <div class="vl"></div>
            <div class="col-lg-3 col-12">
                <p style="text-align: start" class="text-left" >Generasi yang melangkah kedepan dengan segenap rasa, ide, dan harapan untuk mengukir karya</p>
            </div>
        </div>
    </div>
        <div class="row container"  style="text-align: start; ">
            <h2 class="title-content text-white " style="text-align: start">VISI:</h2>
            <p  style="text-align: start; font-family: Calibri">"BEM KBM IT-PLN SEBAGAI INISIATOR DEDIKASI TERHADAP KBM-IT-PLN"</p>
            <h2 class="title-content text-white " style="text-align: start">MISI:</h2>
            <ol>
                <li  style="font-family: calibri; font-size: 20px">DEDIKASI PENGABDIAN</li>
                <p  style="font-family: calibri">Lembaga yang Progresif dalamn membangun gerakan Pemberdayaan Masyarakat</p>
                <li  style="font-family: calibri; font-size: 20px">DEDIKASI PENGEMBANGAN</li>
                <p  style="font-family: calibri">Mengembangkan potensi Milenial pada kemajuan Era Society 5.0</p>
                <li  style="font-family: calibri; font-size: 20px">DEDIKASI PELAYANAN</li>
                <p  style="font-family: calibri">Menjadi wadah yang harmonis serta selaras dalam pelayanan mahasiswa berlandaskan Whole Of Government Method</p>
                <li  style="font-family: calibri; font-size: 20px">DEDIKASI PERGERAKAN</li>
                <p  style="font-family: calibri">Terciptanya Lembaga yang Proaktif, Dinamis dan Representatif di Bidang Pergerakan</p>
            </ol>
        </div>
    <br><br><br><br>
    <div class="row justify-content-center">
        <h1 class="title-budaya" style="text-decoration: underline">BUDAYA ORGANISASI</h1>
        <div class="row cols-2 g-lg-4 g-2 text-dark justify-content-center mb-5 px-5">
            <div class="col-lg-6 col-10">
                <div class="card bg-warning" style="border-radius: 15px">
                    <div class="card-header border-0 py-0" style="font-size: 30px; text-align: start; font-family: Calibri">01. GOOD THINK</div>
                    <div class="card-body py-0" style="text-align: start; font-size: 20px; font-family: Calibri">Pemikiran tajam, kritis dan solutif layaknya teknokrat</div>
                </div>
            </div>
            <div class="col-lg-6 col-10">
                <div class="card bg-warning" style="border-radius: 15px">
                    <div class="card-header border-0 py-0" style="font-size: 30px; text-align: start; font-family: Calibri">03. GOOD ATITUDE</div>
                    <div class="card-body py-0" style="text-align: start; font-size: 20px; font-family: Calibri">Merepresentasikan budi pekerti yang luhur dengan kewibawaan</div>
                </div>
            </div>
            <div class="col-lg-6 col-10">
                <div class="card bg-warning" style="border-radius: 15px">
                    <div class="card-header border-0 py-0" style="font-size: 30px; text-align: start; font-family: Calibri">02. GOOD WORDS</div>
                    <div class="card-body py-0" style="text-align: start; font-size: 20px; font-family: Calibri">Mencerminkan pribadi yang cakap dalam berkomunikasi</div>
                </div>
            </div>
            <div class="col-lg-6 col-10">
                <div class="card bg-warning" style="border-radius: 15px">
                    <div class="card-header border-0 py-0" style="font-size: 30px; text-align: start; font-family: Calibri">04. GOOD WORKS</div>
                    <div class="card-body py-0" style="text-align: start; font-size: 20px; font-family: Calibri">Terampil mdan cekatan di dalam dinamika berorganisai</div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection