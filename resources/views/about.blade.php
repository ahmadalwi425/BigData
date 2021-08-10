@php
$base_url = 'http://127.0.0.1:8000/';  
$img_url = 'http://127.0.0.1:8000/assets/img/';  
@endphp

@extends('layouts.template')

@section('content')

<div class="container-fluid row align-item-center">
    <div class="p-2 py-5 jumbotron text-center" style="background-image: url(<?= $img_url ?>IMG_6877.JPG);">
        <!-- <img src="<?= $img_url ?>IMG_6877.JPG" alt="" class="img-fluid mt-5"> -->
        <br><br><br><br>
        <br><br><br><br>
        <h1>TENTANG DEDIKASI MILENIAL</h1>
        <br><br><br><br>
        <br><br><br><br>
        <img src="" alt="">
    </div>
</div>

<div class="container text-center">
    <div class="dedikasi-milenial my-5">

        <h1>DEDIKASI MILENIAL</h1>
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
            <h2>VISI:</h2>
            <p>"BEM KBM IT-PLN SEBAGAI INISIATOR DEDIKASI TERHADAP KBM-IT-PLN"</p>
            <h2>MISI:</h2>
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
        <h1>BUDAYA ORGANISASI</h1>
        <div class="row cols-2">
            <div class="col-lg-4 col-12">
                <div class="card">
                    <div class="card-header">01. GOOD THINK</div>
                    <div class="card-body">Pemikiran tajam, kritis dan solutif layaknya teknokrat</div>
                </div>
            </div>
            <div class="col-lg-4 col-12">
                <div class="card">
                    <div class="card-header">03. GOOD ATITUDE</div>
                    <div class="card-body">Merepresentasikan budi pekerti yang luhur dengan kewibawaan</div>
                </div>
            </div>
            <div class="col-lg-4 col-12">
                <div class="card">
                    <div class="card-header">02. GOOD WORDS</div>
                    <div class="card-body">Mencerminkan pribadi yang cakap dalam berkomunikasi</div>
                </div>
            </div>
            <div class="col-lg-4 col-12">
                <div class="card">
                    <div class="card-header">04. GOOD WORKS</div>
                    <div class="card-body">Terampil mdan cekatan di dalam dinamika berorganisai</div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection