@php
$base_url = 'http://127.0.0.1:8000/';  
$img_url = 'http://127.0.0.1:8000/storage/assets/img/';  
@endphp

@extends('layouts.template')

@section('content')

    

<script>
    $(document).ready( function () {
        $('#myTable').DataTable();
    } );
</script>

@endsection