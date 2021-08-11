@php
$base_url = 'http://127.0.0.1:8000/';  
$img_url = 'http://127.0.0.1:8000/storage/assets/img/';  
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
                @foreach($data as $row)
                <tr>
                    <td>{{$row->kategori}}</td>
                    <td>{{$row->total}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@foreach($datadiv as $rowdiv)
<hr>
<h1 class="text-center title-bigdata">
    {{$rowdiv->nama_divisi}}
</h1>
<hr>
<div class="container text-center mb-5">
    <p class="desc-bigdata mx-5">
        {{$rowdiv->deskripsi}}
    </p>
        <div class="row gx-lg-4 cols-lg-4 gy-2 cols-1 justify-content-center mx-5">
            @foreach($datasub as $rowsub)
            @if($rowsub->id_divisi == $rowdiv->id)
            <div class="button-wrapper text-center col-lg-3 col-10 ">
                <button class="btn btn-danger btn-bigdata">
                    {{$rowsub->nama_subdivisi}}
                </button>
            </div>
            @endif
            @endforeach
        </div>
</div>
@endforeach
<!-- {{-- BIG DATA ORGANISASI --}} -->
<!-- <hr>
<h1 class="text-center title-bigdata">
    BIGDATA ORGANISASI MAHASISWA
</h1>
<hr>
<div class="container text-center mb-5">
    <p class="desc-bigdata mx-5">
        Bigdata organisasi mahasiswa merupakan data tentang organisasi mahasiswa di lingkungan Institut Teknologi PLN yang di peroleh dari Biro Kominfo BEM KBM IT-PLN
    </p>
        <div class="row gx-lg-4 cols-lg-4 gy-2 cols-1 justify-content-center mx-5">
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
</div> -->
<!-- 
{{-- BIGDATA KEMENTRIAN BEM KBM IT-PLN --}}
<hr>
<h1 class="text-center title-bigdata">
    BIGDATA KEMENTRIAN BEM KBM IT-PLN
</h1>
<hr>
<div class="container text-center mb-5">
    <p class="desc-bigdata mx-5">
        Bigdata Kemnetrian merupakan data tentang kementrian yang ada di BEM KBM IT-PLN yang diperoleh dari Biro Kominfo
    </p>
        <div class="row gx-lg-4 cols-lg-4 gy-2 cols-1 justify-content-center mx-5">
            <div class="button-wrapper text-center col-lg-3 col-6 ">
                <button class="btn btn-danger btn-bigdata-2">
                    ADKESMA
                </button>
            </div>
            <div class="button-wrapper text-center col-lg-2 col-6">
                <button class="btn btn-danger btn-bigdata-2">
                    DEDMAS
                </button>
            </div>
            <div class="button-wrapper text-center col-lg-4 col-6">
                <button class="btn btn-danger btn-bigdata-2">
                    EKOKRAF
                </button>
            </div>
            <div class="button-wrapper text-center col-lg-3 col-6">
                <button class="btn btn-danger btn-bigdata-2">
                    HARMAWA
                </button>
            </div>
        </div>
        <div class="row gx-lg-4 cols-lg-4 gy-2 cols-1 justify-content-center mt-1 mx-5">
            <div class="button-wrapper text-center col-lg-3 col-6 ">
                <button class="btn btn-danger btn-bigdata-2">
                    KASTRAT
                </button>
            </div>
            <div class="button-wrapper text-center col-lg-2 col-6">
                <button class="btn btn-danger btn-bigdata-2">
                    AGAMA
                </button>
            </div>
            <div class="button-wrapper text-center col-lg-4 col-6">
                <button class="btn btn-danger btn-bigdata-2">
                    PSDM
                </button>
            </div>
            <div class="button-wrapper text-center col-lg-3 col-6">
                <button class="btn btn-danger btn-bigdata-2">
                    KPP
                </button>
            </div>
        </div>
        <div class="row gx-lg-4 cols-lg-4 gy-2 cols-1 justify-content-center mt-1 mx-5">
            <div class="button-wrapper text-center col-lg-3 col-6 ">
                <button class="btn btn-danger btn-bigdata-2">
                    ADKESMA
                </button>
            </div>
            <div class="button-wrapper text-center col-lg-2 col-6">
                <button class="btn btn-danger btn-bigdata-2">
                    DEDMAS
                </button>
            </div>
            <div class="button-wrapper text-center col-lg-4 col-6">
                <button class="btn btn-danger btn-bigdata-2">
                    EKOKRAF
                </button>
            </div>
        </div>
</div>

{{-- BIGDATA BIRO BEM KBM IT-PLN --}}
<hr>
<h1 class="text-center title-bigdata">
    BIGDATA BIRO BEM KBM IT-PLN
</h1>
<hr>
<div class="container text-center mb-5">
    <p class="desc-bigdata mx-5">
        Bigdata Biro merupakan data tentang kebiroan yang ada di BEM KBM IT-PLN yang diperoleh dari Biro Kominfo
    </p>
        <div class="row gx-lg-4 cols-lg-4 gy-2 cols-1 justify-content-center mx-5">
            <div class="button-wrapper text-center col-lg-4 col-10 ">
                <button class="btn btn-danger btn-bigdata-3">
                    KESEKRETARIATAN
                </button>
            </div>
            <div class="button-wrapper text-center col-lg-4 col-10">
                <button class="btn btn-danger btn-bigdata-3">
                    INVENTARIS
                </button>
            </div>
            <div class="button-wrapper text-center col-lg-4 col-10">
                <button class="btn btn-danger btn-bigdata-3">
                    KEUANGAN
                </button>
            </div>
        </div>
</div> -->
    
@endsection