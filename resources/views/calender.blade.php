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
                    <table id="myTable" class="table">
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
                        <tbody>
                            @foreach ($data as $row)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$row->tgl_mulai}}</td>
                                <td>{{$row->tgl_selesai}}</td>
                                <td>{{$row->jenis_kal->nama_jenis_kal}}</td>
                                <td>{{$row->nama_kegiatan}}</td>
                                <td>{{$row->semester}}</td>
                                <td>{{$row->tahun_ajar->tahun_ajar}}</td>
                                <td>
                                    <button class="btn btn-danger btn-action">Del</button>
                                    <button class="btn btn-warning btn-action">Edit</button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
            </div>
        </div>
    </div>

<script>
    $(document).ready( function () {
        $('#myTable').DataTable();
    } );
</script>

@endsection