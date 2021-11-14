@php
$base_url = 'http://127.0.0.1:8000/';  
$img_url = 'http://127.0.0.1:8000/storage/assets/img/';  
@endphp

@extends('layouts.template')

@section('content')

<div id="map py-5 mt-5">
<iframe class="mt-5" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d16779.48185811608!2d106.7168606221002!3d-6.167641387263543!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f788f60e492d%3A0x8b5ed89a85136510!2sInstitut%20Teknologi%20PLN!5e1!3m2!1sid!2sid!4v1636867081792!5m2!1sid!2sid" width="100%" height="550" style="border:0;" allowfullscreen="true" loading="lazy"></iframe>
</div>

<!-- <script
        async defer
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAFatvwAIRm2tN_nl99_HUfe1yo5tnSD7w&callback=initMap&libraries=&v=weekly"
    ></script> -->

<script>
        // let map;

        // function initMap() {
        //     map = new google.maps.Map(document.getElementById("map"), {
        //         center: { lat: -34.397, lng: 150.644 },
        //         zoom: 8,
        //     });
        // }
    
</script>

@endsection