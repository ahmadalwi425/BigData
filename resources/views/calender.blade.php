@php
$base_url = 'http://127.0.0.1:8000/';  
$img_url = 'http://127.0.0.1:8000/storage/assets/img/';  
@endphp

@extends('layouts.template')

@section('content')

    <div class="container">
        <div class="card rounded bg-dark">
            <div class="card-header">
                KALNEDER AKADEMIK
            </div>
            <div class="card-body bg-white p-4">
                    <table class="table table-light">
                        <thead>
                            <tr>
                                <td>NO</td>
                                <td>TANGGAL MULAI</td>
                                <td>TANGGAL SELESAI</td>
                                <td>JENIS</td>
                                <td>KETERANGAN</td>
                                <td>SEMESTER</td>
                                <td>TAHUN AJAR</td>
                                <td>AKSI</td>
                            </tr>
                        </thead>
                    </table>
            </div>
        </div>
    </div>


@endsection