@php
$base_url = 'http://127.0.0.1:8000/';  
$img_url = 'http://127.0.0.1:8000/storage/assets/img/';  
@endphp

@extends('layouts.template')

@section('content')


    <div class="container mt-5">
        <div class="card rounded bg-dark">
            <div class="card-header text-white text-center">
                <h3 class="title-content">KALENDER AKADEMIK</h3>
            </div>
            <div class="card-body bg-dark px-4 m-1">
                <div class="card px-1">
                    <table class="table table-responsive myTable">
                        <thead>
                            <tr>
                                <th>NO</th>
                                <th>TANGGAL MULAI</th>
                                <th>TANGGAL SELESAI</th>
                                <th>JENIS</th>
                                <th>KETERANGAN</th>
                                <th>SEMESTER</th>
                                <th>TAHUN AJAR</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $row)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$row->tgl_mulai}}</td>
                                <td>{{$row->tgl_selesai}}</td>
                                <td>{{$row->jenis_kal->nama_jenis_kal}}</td>
                                <td>{{$row->nama_kegiatan}}</td>
                                <td>{{$row->semester->semester}}</td>
                                <td>{{$row->tahun_ajar->tahun_ajar}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="card rounded bg-dark mt-5">
            <div class="card-header text-white text-center">
                <h3 class="title-content">KALENDER PEMINJAMAN</h3>
            </div>
            <div class="card-body bg-dark px-4 m-1">
                <div class="card px-1">
                    <table class="table table-responsive myTable">
                        <thead>
                            <tr>
                                <th>NO</th>
                                <th>TANGGAL MULAI</th>
                                <th>TANGGAL SELESAI</th>
                                <th>JENIS</th>
                                <th>KETERANGAN</th>
                                <th>SEMESTER</th>
                                <th>TAHUN AJAR</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>01 June 2021</td>
                                <td>01 June 2021</td>
                                <td>Hari Libur Nasional</td>
                                <td>Hari Raya Pancasila</td>
                                <td>Genap</td>
                                <td>2020/2021</td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>01 June 2021</td>
                                <td>01 June 2021</td>
                                <td>Hari Libur Nasional</td>
                                <td>Hari Raya Pancasila</td>
                                <td>Genap</td>
                                <td>2020/2021</td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>01 June 2021</td>
                                <td>01 June 2021</td>
                                <td>Hari Libur Nasional</td>
                                <td>Hari Raya Pancasila</td>
                                <td>Genap</td>
                                <td>2020/2021</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="card rounded bg-dark my-5">
            <div class="card-header text-white text-center">
                <h3 class="title-content">KALENDER KEGIATAN</h3>
            </div>
            <div class="card-body bg-dark px-4 m-1">
                <div class="card px-1">
                    <table class="table table-responsive myTable">
                        <thead>
                            <tr>
                                <th>NO</th>
                                <th>TANGGAL MULAI</th>
                                <th>TANGGAL SELESAI</th>
                                <th>JENIS</th>
                                <th>KETERANGAN</th>
                                <th>SEMESTER</th>
                                <th>TAHUN AJAR</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>01 June 2021</td>
                                <td>01 June 2021</td>
                                <td>Hari Libur Nasional</td>
                                <td>Hari Raya Pancasila</td>
                                <td>Genap</td>
                                <td>2020/2021</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

<script>
    $(document).ready( function () {
        $('.myTable').DataTable();
    } );
</script>

@endsection