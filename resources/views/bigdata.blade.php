@php
$base_url = 'http://127.0.0.1:8000/';  
$img_url = 'http://127.0.0.1:8000/assets/img/';  
@endphp

@extends('layouts.template')

@section('content')

{{-- JUMBOTRON --}}
<div class="container-fluid">
    <div class="mt-5 jumbotron jumbotron-bigdata text-center row justify-content-center" style="background-image: url(<?= $img_url ?>IMG_6877.JPG);">
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        <div class="jumbotron-text align-self-center text-dark">
            <h1>BIG DATA</h1>
            <h3>BEM KBM IT-PLN</h3>
        </div>
    </div>
</div>

{{-- TABEL --}}
<div class="container-fluid bg-white">
    <div class="card rounded-3 p-3 my-5 card-table">
        <h3>TABEL BIG DATA IT - PLN</h3>
        <table class="table table-light table-striped table-hover">
            <thead class="fw-bold">
                <tr>
                    <td>Kategori</td>
                    <td>Total</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Fakultas</td>
                    <td>10</td>
                </tr>
                <tr>
                    <td>Program Studi</td>
                    <td>15</td>
                </tr>
                <tr>
                    <td>Dosen</td>
                    <td>2</td>
                </tr>
                <tr>
                    <td>Mahsiswa</td>
                    <td>1000</td>
                </tr>
                <tr>
                    <td>Himpunan Mahasiswa</td>
                    <td>10</td>
                </tr>
                <tr>
                    <td>Unit Kegiatan Mahasiswa (UKM)</td>
                    <td>90</td>
                </tr>
                <tr>
                    <td>Himpunan Daerah</td>
                    <td>8</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

{{-- BIG DATA ORGANISASI --}}
<hr>
<h1 class="text-center title-bigdata">
    BIGDATA ORGANISASI MAHASISWA
</h1>
<hr>
<div class="container text-center mb-5">
    <p class="desc-bigdata mx-5">
        Bigdata organisasi mahasiswa merupakan data tentang organisasi mahasiswa di lingkungan Institut Teknologi PLN yang di peroleh dari Biro Kominfo BEM KBM IT-PLN
    </p>
        <div class="row gx-lg-4 cols-lg-4 gx-2 cols-1 justify-content-center mx-5">
            <div class="button-wrapper text-center col-lg-3 col-10 ">
                <button class="btn btn-danger btn-bigdata">
                    Bigdata BEM KBM IT-PLN
                </button>
            </div>
            <div class="button-wrapper text-center col-lg-2 col-10">
                <button class="btn btn-danger btn-bigdata">
                    Bigdata UKM
                </button>
            </div>
            <div class="button-wrapper text-center col-lg-4 col-10">
                <button class="btn btn-danger btn-bigdata">
                    Bigdata Himpunan Mahasiswa
                </button>
            </div>
            <div class="button-wrapper text-center col-lg-3 col-10">
                <button class="btn btn-danger btn-bigdata">
                    Bigdata Himpunan Daerah
                </button>
            </div>
        </div>
</div>

{{-- BIGDATA KEMENTRIAN BEM KBM IT-PLN --}}
<hr>
<h1 class="text-center title-bigdata">
    BIGDATA ORGANISASI MAHASISWA
</h1>
<hr>
<div class="container text-center mb-5">
    <p class="desc-bigdata mx-5">
        Bigdata organisasi mahasiswa merupakan data tentang organisasi mahasiswa di lingkungan Institut Teknologi PLN yang di peroleh dari Biro Kominfo BEM KBM IT-PLN
    </p>
        <div class="row gx-lg-4 cols-lg-4 gx-2 cols-1 justify-content-center mx-5">
            <div class="button-wrapper text-center col-lg-3 col-10 ">
                <button class="btn btn-danger btn-bigdata">
                    Bigdata BEM KBM IT-PLN
                </button>
            </div>
            <div class="button-wrapper text-center col-lg-2 col-10">
                <button class="btn btn-danger btn-bigdata">
                    Bigdata UKM
                </button>
            </div>
            <div class="button-wrapper text-center col-lg-4 col-10">
                <button class="btn btn-danger btn-bigdata">
                    Bigdata Himpunan Mahasiswa
                </button>
            </div>
            <div class="button-wrapper text-center col-lg-3 col-10">
                <button class="btn btn-danger btn-bigdata">
                    Bigdata Himpunan Daerah
                </button>
            </div>
        </div>
</div>

{{-- BIGDATA BIRO BEM KBM IT-PLN --}}
<hr>
<h1 class="text-center title-bigdata">
    BIGDATA ORGANISASI MAHASISWA
</h1>
<hr>
<div class="container text-center mb-5">
    <p class="desc-bigdata mx-5">
        Bigdata organisasi mahasiswa merupakan data tentang organisasi mahasiswa di lingkungan Institut Teknologi PLN yang di peroleh dari Biro Kominfo BEM KBM IT-PLN
    </p>
        <div class="row gx-lg-4 cols-lg-4 gx-2 cols-1 justify-content-center mx-5">
            <div class="button-wrapper text-center col-lg-3 col-10 ">
                <button class="btn btn-danger btn-bigdata">
                    Bigdata BEM KBM IT-PLN
                </button>
            </div>
            <div class="button-wrapper text-center col-lg-2 col-10">
                <button class="btn btn-danger btn-bigdata">
                    Bigdata UKM
                </button>
            </div>
            <div class="button-wrapper text-center col-lg-4 col-10">
                <button class="btn btn-danger btn-bigdata">
                    Bigdata Himpunan Mahasiswa
                </button>
            </div>
            <div class="button-wrapper text-center col-lg-3 col-10">
                <button class="btn btn-danger btn-bigdata">
                    Bigdata Himpunan Daerah
                </button>
            </div>
        </div>
</div>
    
@endsection