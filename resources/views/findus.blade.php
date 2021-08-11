@php
$base_url = 'http://127.0.0.1:8000/';  
$img_url = 'http://127.0.0.1:8000/storage/assets/img/';  
@endphp

@extends('layouts.template')

@section('content')

<div id="map"></div>

<script
        async defer
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAFatvwAIRm2tN_nl99_HUfe1yo5tnSD7w&callback=initMap&libraries=&v=weekly"
    ></script>

<script>
        let map;

        function initMap() {
            map = new google.maps.Map(document.getElementById("map"), {
                center: { lat: -34.397, lng: 150.644 },
                zoom: 8,
            });
        }
    
</script>

@endsection