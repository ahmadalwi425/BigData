@php
$base_url = 'http://127.0.0.1:8000/';  
$img_url = 'http://127.0.0.1:8000/assets/img/';  
@endphp

@extends('layouts.template')

@section('content')
    
    <div class="container">
        <div class="card rounded border-1">
            <div class="card-header">
                BULETIN TERBARU
            </div>
            <div class="card-body">
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

@endsection