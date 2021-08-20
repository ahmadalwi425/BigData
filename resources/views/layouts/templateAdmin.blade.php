@php
    $base_url = 'http://127.0.0.1:8000/admin';  
    $img_url = 'http://127.0.0.1:8000/storage/assets/img/';  
    $base_url = 'http://127.0.0.1:8000/admin'; 

    if($link == "dashboard") {
    $navActive = "Dashboard";
    } 
    else if ($link == "buletin") {
        $navActive = "Buletin";
    }
    else if ($link == "user") {
        $navActive = "User";
    }
    else if ($link == "ormawa") {
        $navActive = "Ormawa";
    }
    else if ($link == "data_kampus") {
        $navActive = "Data Kampus";
    }
    else if ($link == "kalender_akademik") {
        $navActive = "Kalender Akademik";
    }
    else if ($link == "divisi") {
        $navActive = "Divisi";
    }
    else if ($link == "subdivisi") {
        $navActive = "Sub Divisi";
    }
    else if ($link == "jurusan") {
        $navActive = "Jurusan";
    }
    else if ($link == "kalender") {
        $navActive = "Kalender";
    }
    else if ($link == "peminjaman") {
        $navActive = "Peminjaman";
    }

@endphp

<!--
=========================================================
* Argon Dashboard - v1.2.0
=========================================================
* Product Page: https://www.creative-tim.com/product/argon-dashboard


* Copyright  Creative Tim (http://www.creative-tim.com)
* Coded by www.creative-tim.com



=========================================================
* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>Big Data - <?= $navActive ?></title>
  <!-- Favicon -->
  <link rel="icon" href="" type="image/png">
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href="{{asset('css/nucleo.css')}}" type="text/css">
  <link rel="stylesheet" href="{{asset('css/fontawesome.min.css')}}" type="text/css">
  <link rel="stylesheet" href="../assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
  <!-- Page plugins -->
  <!-- Argon CSS -->
  <link rel="stylesheet" href="{{asset('css/argon.css')}}" type="text/css">
  {{-- DatePicker --}}
  <link rel="stylesheet" href="{{asset('css/datepicker.css')}}" type="text/css">
  {{-- Sweetalert --}}
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script>
    const reader = new FileReader();

    const changeImg = (param) => {
      document.getElementById(param).click()
    }

    const readUrl = (input, id) => {
      if (input.files && input.files[0]) {
        reader.onload = function(e) {
                  $('#' + id)
                      .attr('src', e.target.result)
              };

              reader.readAsDataURL(input.files[0]);
      }
    }

    const del = (event) => {
      event.preventDefault()
      const link = event.target.href;
      Swal.fire({
        title: 'Apakah Anda yakin  ingin menghapus?',
        text: "Anda tidak dapat membatalkan ini",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        cancelButtonText: 'Batal',
        confirmButtonText: 'Iya, hapus saja!'
      }).then((result) => {
        if (result.isConfirmed) {
          window.location.href = link;
        }
      })
    }
</script>
</head>

<body>
  <!-- Sidenav -->
  <nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-dark bg-default" id="sidenav-main">
    <div class="scrollbar-inner">
      <!-- Brand -->
      <div class="sidenav-header  align-items-center">
        <a class="navbar-brand" href="javascript:void(0)">
          <img src="../assets/img/brand/blue.png" class="navbar-brand-img" alt="...">
        </a>
      </div>
      <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Nav items -->
          <ul class="navbar-nav">

            @php
                
if($navActive == 'Dashboard') {
  echo '
  <li class="nav-item">
    <a class="nav-link active" href=' . $base_url .'>
      <i class="ni ni-tv-2 text-primary"></i>
      <span class="nav-link-text text-dark">Dashboard</span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="' . $base_url .'/user">
      <i class="ni ni-single-02 text-yellow"></i>
      <span class="nav-link-text">User</span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="' . $base_url .'/buletin">
      <i class="ni ni-books text-green"></i>
      <span class="nav-link-text">Buletin</span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="' . $base_url .'/ormawa">
      <i class="ni ni-circle-08 text-red"></i>
      <span class="nav-link-text">Ormawa</span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="' . $base_url .'/data_kampus">
      <i class="ni ni-hat-3 text-grey"></i>
      <span class="nav-link-text">Data Kampus</span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="' . $base_url .'/divisi">
      <i class="ni ni-chart-pie-35 text-blue"></i>
      <span class="nav-link-text">Divisi</span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="' . $base_url .'/jurusan">
      <i class="ni ni-building text-orange"></i>
      <span class="nav-link-text">Jurusan</span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="' . $base_url .'/kalender">
      <i class="ni ni-calendar-grid-58 text-green"></i>
      <span class="nav-link-text">Kalender</span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="' . $base_url .'/peminjaman">
      <i class="ni ni-folder-17 text-primary"></i>
      <span class="nav-link-text">Peminjaman</span>
    </a>
  </li>
    ';
  }
  elseif ($navActive == 'Buletin') {
    echo '
  <li class="nav-item">
    <a class="nav-link" href=' . $base_url .'>
      <i class="ni ni-tv-2 text-primary"></i>
      <span class="nav-link-text">Dashboard</span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="' . $base_url .'/user">
      <i class="ni ni-single-02 text-yellow"></i>
      <span class="nav-link-text">User</span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" href="' . $base_url .'/buletin">
      <i class="ni ni-books text-green"></i>
      <span class="nav-link-text text-dark">Buletin</span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="' . $base_url .'/ormawa">
      <i class="ni ni-circle-08 text-red"></i>
      <span class="nav-link-text">Ormawa</span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="' . $base_url .'/data_kampus">
      <i class="ni ni-hat-3 text-grey"></i>
      <span class="nav-link-text">Data Kampus</span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="' . $base_url .'/divisi">
      <i class="ni ni-chart-pie-35 text-blue"></i>
      <span class="nav-link-text">Divisi</span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="' . $base_url .'/jurusan">
      <i class="ni ni-building text-orange"></i>
      <span class="nav-link-text">Jurusan</span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="' . $base_url .'/kalender">
      <i class="ni ni-calendar-grid-58 text-green"></i>
      <span class="nav-link-text">Kalender</span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="' . $base_url .'/peminjaman">
      <i class="ni ni-folder-17 text-primary"></i>
      <span class="nav-link-text">Peminjaman</span>
    </a>
  </li>
    ';
  }
  elseif ($navActive == 'Buletin') {
    echo '
  <li class="nav-item">
    <a class="nav-link" href=' . $base_url .'>
      <i class="ni ni-tv-2 text-primary"></i>
      <span class="nav-link-text">Dashboard</span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="' . $base_url .'/user">
      <i class="ni ni-single-02 text-yellow"></i>
      <span class="nav-link-text">User</span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" href="' . $base_url .'/buletin">
      <i class="ni ni-books text-green"></i>
      <span class="nav-link-text text-dark">Buletin</span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="' . $base_url .'/ormawa">
      <i class="ni ni-circle-08 text-red"></i>
      <span class="nav-link-text">Ormawa</span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="' . $base_url .'/data_kampus">
      <i class="ni ni-hat-3 text-grey"></i>
      <span class="nav-link-text">Data Kampus</span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="' . $base_url .'/divisi">
      <i class="ni ni-chart-pie-35 text-blue"></i>
      <span class="nav-link-text">Divisi</span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="' . $base_url .'/jurusan">
      <i class="ni ni-building text-orange"></i>
      <span class="nav-link-text">Jurusan</span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="' . $base_url .'/kalender">
      <i class="ni ni-calendar-grid-58 text-green"></i>
      <span class="nav-link-text">Kalender</span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="' . $base_url .'/peminjaman">
      <i class="ni ni-folder-17 text-primary"></i>
      <span class="nav-link-text">Peminjaman</span>
    </a>
  </li>
    ';
  }
  elseif ($navActive == 'User') {
    echo '
  <li class="nav-item">
    <a class="nav-link" href=' . $base_url .'>
      <i class="ni ni-tv-2 text-primary"></i>
      <span class="nav-link-text">Dashboard</span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" href="' . $base_url .'/user">
      <i class="ni ni-single-02 text-yellow"></i>
      <span class="nav-link-text text-dark">User</span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="' . $base_url .'/buletin">
      <i class="ni ni-books text-green"></i>
      <span class="nav-link-text">Buletin</span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="' . $base_url .'/ormawa">
      <i class="ni ni-circle-08 text-red"></i>
      <span class="nav-link-text">Ormawa</span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="' . $base_url .'/data_kampus">
      <i class="ni ni-hat-3 text-grey"></i>
      <span class="nav-link-text">Data Kampus</span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="' . $base_url .'/divisi">
      <i class="ni ni-chart-pie-35 text-blue"></i>
      <span class="nav-link-text">Divisi</span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="' . $base_url .'/jurusan">
      <i class="ni ni-building text-orange"></i>
      <span class="nav-link-text">Jurusan</span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="' . $base_url .'/kalender">
      <i class="ni ni-calendar-grid-58 text-green"></i>
      <span class="nav-link-text">Kalender</span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="' . $base_url .'/peminjaman">
      <i class="ni ni-folder-17 text-primary"></i>
      <span class="nav-link-text">Peminjaman</span>
    </a>
  </li>
    ';
  }
  elseif ($navActive == 'Ormawa') {
    echo '
  <li class="nav-item">
    <a class="nav-link" href=' . $base_url .'>
      <i class="ni ni-tv-2 text-primary"></i>
      <span class="nav-link-text">Dashboard</span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="' . $base_url .'/user">
      <i class="ni ni-single-02 text-yellow"></i>
      <span class="nav-link-text">User</span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="' . $base_url .'/buletin">
      <i class="ni ni-books text-green"></i>
      <span class="nav-link-text">Buletin</span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" href="' . $base_url .'/ormawa">
      <i class="ni ni-circle-08 text-red"></i>
      <span class="nav-link-text text-dark">Ormawa</span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="' . $base_url .'/data_kampus">
      <i class="ni ni-hat-3 text-grey"></i>
      <span class="nav-link-text">Data Kampus</span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="' . $base_url .'/divisi">
      <i class="ni ni-chart-pie-35 text-blue"></i>
      <span class="nav-link-text">Divisi</span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="' . $base_url .'/jurusan">
      <i class="ni ni-building text-orange"></i>
      <span class="nav-link-text">Jurusan</span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="' . $base_url .'/kalender">
      <i class="ni ni-calendar-grid-58 text-green"></i>
      <span class="nav-link-text">Kalender</span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="' . $base_url .'/peminjaman">
      <i class="ni ni-folder-17 text-primary"></i>
      <span class="nav-link-text">Peminjaman</span>
    </a>
  </li>
    ';
  }
  elseif ($navActive == 'Data Kampus') {
    echo '
  <li class="nav-item">
    <a class="nav-link" href=' . $base_url .'>
      <i class="ni ni-tv-2 text-primary"></i>
      <span class="nav-link-text">Dashboard</span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="' . $base_url .'/user">
      <i class="ni ni-single-02 text-yellow"></i>
      <span class="nav-link-text">User</span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="' . $base_url .'/buletin">
      <i class="ni ni-books text-green"></i>
      <span class="nav-link-text">Buletin</span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="' . $base_url .'/ormawa">
      <i class="ni ni-circle-08 text-red"></i>
      <span class="nav-link-text">Ormawa</span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" href="' . $base_url .'/data_kampus">
      <i class="ni ni-hat-3 text-yellow"></i>
      <span class="nav-link-text text-dark">Data Kampus</span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="' . $base_url .'/divisi">
      <i class="ni ni-chart-pie-35 text-blue"></i>
      <span class="nav-link-text">Divisi</span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="' . $base_url .'/jurusan">
      <i class="ni ni-building text-orange"></i>
      <span class="nav-link-text">Jurusan</span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="' . $base_url .'/kalender">
      <i class="ni ni-calendar-grid-58 text-green"></i>
      <span class="nav-link-text">Kalender</span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="' . $base_url .'/peminjaman">
      <i class="ni ni-folder-17 text-primary"></i>
      <span class="nav-link-text">Peminjaman</span>
    </a>
  </li>
    ';
  }
  elseif ($navActive == 'Kalender') {
    echo '
  <li class="nav-item">
    <a class="nav-link" href=' . $base_url .'>
      <i class="ni ni-tv-2 text-primary"></i>
      <span class="nav-link-text">Dashboard</span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="' . $base_url .'/user">
      <i class="ni ni-single-02 text-yellow"></i>
      <span class="nav-link-text">User</span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="' . $base_url .'/buletin">
      <i class="ni ni-books text-green"></i>
      <span class="nav-link-text">Buletin</span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="' . $base_url .'/ormawa">
      <i class="ni ni-circle-08 text-red"></i>
      <span class="nav-link-text">Ormawa</span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="' . $base_url .'/data_kampus">
      <i class="ni ni-hat-3 text-grey"></i>
      <span class="nav-link-textk">Data Kampus</span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="' . $base_url .'/divisi">
      <i class="ni ni-chart-pie-35 text-blue"></i>
      <span class="nav-link-text">Divisi</span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="' . $base_url .'/jurusan">
      <i class="ni ni-building text-orange"></i>
      <span class="nav-link-text">Jurusan</span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" href="' . $base_url .'/kalender">
      <i class="ni ni-calendar-grid-58 text-green"></i>
      <span class="nav-link-text text-dark">Kalender</span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="' . $base_url .'/peminjaman">
      <i class="ni ni-folder-17 text-primary"></i>
      <span class="nav-link-text">Peminjaman</span>
    </a>
  </li>
    ';
  }
  elseif ($navActive == 'Divisi') {
    echo '
  <li class="nav-item">
    <a class="nav-link" href=' . $base_url .'>
      <i class="ni ni-tv-2 text-primary"></i>
      <span class="nav-link-text">Dashboard</span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="' . $base_url .'/user">
      <i class="ni ni-single-02 text-yellow"></i>
      <span class="nav-link-text">User</span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="' . $base_url .'/buletin">
      <i class="ni ni-books text-green"></i>
      <span class="nav-link-text">Buletin</span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="' . $base_url .'/ormawa">
      <i class="ni ni-circle-08 text-red"></i>
      <span class="nav-link-text">Ormawa</span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="' . $base_url .'/data_kampus">
      <i class="ni ni-hat-3 text-grey"></i>
      <span class="nav-link-text">Data Kampus</span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" href="' . $base_url .'/divisi">
      <i class="ni ni-chart-pie-35 text-blue"></i>
      <span class="nav-link-text text-dark">Divisi</span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="' . $base_url .'/jurusan">
      <i class="ni ni-building text-orange"></i>
      <span class="nav-link-text">Jurusan</span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="' . $base_url .'/kalender">
      <i class="ni ni-calendar-grid-58 text-green"></i>
      <span class="nav-link-text">Kalender</span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="' . $base_url .'/peminjaman">
      <i class="ni ni-folder-17 text-primary"></i>
      <span class="nav-link-text">Peminjaman</span>
    </a>
  </li>
    ';
  }
  elseif ($navActive == 'Jurusan') {
    echo '
  <li class="nav-item">
    <a class="nav-link" href=' . $base_url .'>
      <i class="ni ni-tv-2 text-primary"></i>
      <span class="nav-link-text">Dashboard</span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="' . $base_url .'/user">
      <i class="ni ni-single-02 text-yellow"></i>
      <span class="nav-link-text">User</span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="' . $base_url .'/buletin">
      <i class="ni ni-books text-green"></i>
      <span class="nav-link-text">Buletin</span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="' . $base_url .'/ormawa">
      <i class="ni ni-circle-08 text-red"></i>
      <span class="nav-link-text">Ormawa</span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="' . $base_url .'/data_kampus">
      <i class="ni ni-hat-3 text-grey"></i>
      <span class="nav-link-text">Data Kampus</span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="' . $base_url .'/divisi">
      <i class="ni ni-chart-pie-35 text-blue"></i>
      <span class="nav-link-text">Divisi</span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" href="' . $base_url .'/jurusan">
      <i class="ni ni-building text-orange"></i>
      <span class="nav-link-text text-dark">Jurusan</span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="' . $base_url .'/kalender">
      <i class="ni ni-calendar-grid-58 text-green"></i>
      <span class="nav-link-text">Kalender</span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="' . $base_url .'/peminjaman">
      <i class="ni ni-folder-17 text-primary"></i>
      <span class="nav-link-text">Peminjaman</span>
    </a>
  </li>
    ';
  }
  elseif ($navActive == 'Peminjaman') {
    echo '
  <li class="nav-item">
    <a class="nav-link" href=' . $base_url .'>
      <i class="ni ni-tv-2 text-primary"></i>
      <span class="nav-link-text">Dashboard</span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="' . $base_url .'/user">
      <i class="ni ni-single-02 text-yellow"></i>
      <span class="nav-link-text">User</span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="' . $base_url .'/buletin">
      <i class="ni ni-books text-green"></i>
      <span class="nav-link-text">Buletin</span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="' . $base_url .'/ormawa">
      <i class="ni ni-circle-08 text-red"></i>
      <span class="nav-link-text">Ormawa</span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="' . $base_url .'/data_kampus">
      <i class="ni ni-hat-3 text-grey"></i>
      <span class="nav-link-text">Data Kampus</span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="' . $base_url .'/divisi">
      <i class="ni ni-chart-pie-35 text-blue"></i>
      <span class="nav-link-text">Divisi</span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="' . $base_url .'/jurusan">
      <i class="ni ni-building text-orange"></i>
      <span class="nav-link-text">Jurusan</span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="' . $base_url .'/kalender">
      <i class="ni ni-calendar-grid-58 text-green"></i>
      <span class="nav-link-text">Kalender</span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" href="' . $base_url .'/peminjaman">
      <i class="ni ni-folder-17 text-primary"></i>
      <span class="nav-link-text text-dark">Peminjaman</span>
    </a>
  </li>
    ';
  }elseif ($navActive == 'Sub Divisi') {
    echo '
    <li class="nav-item">
    <a class="nav-link" href=' . $base_url .'>
      <i class="ni ni-tv-2 text-primary"></i>
      <span class="nav-link-text">Dashboard</span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="' . $base_url .'/user">
      <i class="ni ni-single-02 text-yellow"></i>
      <span class="nav-link-text">User</span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="' . $base_url .'/buletin">
      <i class="ni ni-books text-green"></i>
      <span class="nav-link-text">Buletin</span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="' . $base_url .'/ormawa">
      <i class="ni ni-circle-08 text-red"></i>
      <span class="nav-link-text">Ormawa</span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="' . $base_url .'/data_kampus">
      <i class="ni ni-hat-3 text-grey"></i>
      <span class="nav-link-text">Data Kampus</span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" href="' . $base_url .'/divisi">
      <i class="ni ni-chart-pie-35 text-blue"></i>
      <span class="nav-link-text text-dark">Divisi</span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="' . $base_url .'/jurusan">
      <i class="ni ni-building text-orange"></i>
      <span class="nav-link-text">Jurusan</span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="' . $base_url .'/kalender">
      <i class="ni ni-calendar-grid-58 text-green"></i>
      <span class="nav-link-text">Kalender</span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="' . $base_url .'/peminjaman">
      <i class="ni ni-folder-17 text-primary"></i>
      <span class="nav-link-text">Peminjaman</span>
    </a>
  </li>
    ';
  }

@endphp
            {{-- <li class="nav-item">
              <a class="nav-link" href="icons.html">
                <i class="ni ni-planet text-orange"></i>
                <span class="nav-link-text">Icons</span>
              </a>
            </li> --}}
            {{-- <li class="nav-item">
              <a class="nav-link" href="map.html">
                <i class="ni ni-pin-3 text-primary"></i>
                <span class="nav-link-text">Google</span>
              </a>
            </li> --}}
            
            {{-- <li class="nav-item">
              <a class="nav-link" href="tables.html">
                <i class="ni ni-bullet-list-67 text-default"></i>
                <span class="nav-link-text">Tables</span>
              </a>
            </li> --}}
            {{-- <li class="nav-item">
              <a class="nav-link" href="login.html">
                <i class="ni ni-key-25 text-info"></i>
                <span class="nav-link-text">Login</span>
              </a>
            </li> --}}
            {{-- <li class="nav-item">
              <a class="nav-link" href="register.html">
                <i class="ni ni-circle-08 text-pink"></i>
                <span class="nav-link-text">Register</span>
              </a>
            </li> --}}
          </ul>
          <!-- Divider -->
          <hr class="my-3">
          {{-- <!-- Heading -->
          <h6 class="navbar-heading p-0 text-muted">
            <span class="docs-normal">Documentation</span>
          </h6>
          <!-- Navigation -->
          <ul class="navbar-nav mb-md-3">
            <li class="nav-item">
              <a class="nav-link" href="https://demos.creative-tim.com/argon-dashboard/docs/getting-started/overview.html" target="_blank">
                <i class="ni ni-spaceship"></i>
                <span class="nav-link-text">Getting started</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="https://demos.creative-tim.com/argon-dashboard/docs/foundation/colors.html" target="_blank">
                <i class="ni ni-palette"></i>
                <span class="nav-link-text">Foundation</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="https://demos.creative-tim.com/argon-dashboard/docs/components/alerts.html" target="_blank">
                <i class="ni ni-ui-04"></i>
                <span class="nav-link-text">Components</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="https://demos.creative-tim.com/argon-dashboard/docs/plugins/charts.html" target="_blank">
                <i class="ni ni-chart-pie-35"></i>
                <span class="nav-link-text">Plugins</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link active active-pro" href="upgrade.html">
                <i class="ni ni-send text-dark"></i>
                <span class="nav-link-text">Upgrade to PRO</span>
              </a>
            </li>
          </ul> --}}
        </div>
      </div>
    </div>
  </nav>

  <div class="main-content" id="panel">
      <!-- Topnav -->
      <nav class="navbar navbar-top navbar-expand navbar-dark bg-primary border-bottom">
          <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <!-- Search form -->
              <form class="navbar-search navbar-search-light form-inline mr-sm-3" id="navbar-search-main">
                <div class="form-group mb-0">
                  <div class="input-group input-group-alternative input-group-merge">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-search"></i></span>
                    </div>
                    <input class="form-control" placeholder="Search" type="text">
                  </div>
                </div>
                <button type="button" class="close" data-action="search-close" data-target="#navbar-search-main" aria-label="Close">
                  <span aria-hidden="true">×</span>
                </button>
              </form>
              <!-- Navbar links -->
              <ul class="navbar-nav align-items-center  ml-md-auto ">
                <li class="nav-item d-xl-none">
                  <!-- Sidenav toggler -->
                  <div class="pr-3 sidenav-toggler sidenav-toggler-dark" data-action="sidenav-pin" data-target="#sidenav-main">
                    <div class="sidenav-toggler-inner">
                      <i class="sidenav-toggler-line"></i>
                      <i class="sidenav-toggler-line"></i>
                      <i class="sidenav-toggler-line"></i>
                    </div>
                  </div>
                </li>
                <li class="nav-item d-sm-none">
                  <a class="nav-link" href="#" data-action="search-show" data-target="#navbar-search-main">
                    <i class="ni ni-zoom-split-in"></i>
                  </a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="ni ni-bell-55"></i>
                  </a>
                  <div class="dropdown-menu dropdown-menu-xl  dropdown-menu-right  py-0 overflow-hidden">
                    <!-- Dropdown header -->
                    <div class="px-3 py-3">
                      <h6 class="text-sm text-muted m-0">You have <strong class="text-primary">13</strong> notifications.</h6>
                    </div>
                    <!-- List group -->
                    <div class="list-group list-group-flush">
                      <a href="#!" class="list-group-item list-group-item-action">
                        <div class="row align-items-center">
                          <div class="col-auto">
                            <!-- Avatar -->
                            <img alt="Image placeholder" src="../assets/img/theme/team-1.jpg" class="avatar rounded-circle">
                          </div>
                          <div class="col ml--2">
                            <div class="d-flex justify-content-between align-items-center">
                              <div>
                                <h4 class="mb-0 text-sm">John Snow</h4>
                              </div>
                              <div class="text-right text-muted">
                                <small>2 hrs ago</small>
                              </div>
                            </div>
                            <p class="text-sm mb-0">Let's meet at Starbucks at 11:30. Wdyt?</p>
                          </div>
                        </div>
                      </a>
                      <a href="#!" class="list-group-item list-group-item-action">
                        <div class="row align-items-center">
                          <div class="col-auto">
                            <!-- Avatar -->
                            <img alt="Image placeholder" src="../assets/img/theme/team-2.jpg" class="avatar rounded-circle">
                          </div>
                          <div class="col ml--2">
                            <div class="d-flex justify-content-between align-items-center">
                              <div>
                                <h4 class="mb-0 text-sm">John Snow</h4>
                              </div>
                              <div class="text-right text-muted">
                                <small>3 hrs ago</small>
                              </div>
                            </div>
                            <p class="text-sm mb-0">A new issue has been reported for Argon.</p>
                          </div>
                        </div>
                      </a>
                      <a href="#!" class="list-group-item list-group-item-action">
                        <div class="row align-items-center">
                          <div class="col-auto">
                            <!-- Avatar -->
                            <img alt="Image placeholder" src="../assets/img/theme/team-3.jpg" class="avatar rounded-circle">
                          </div>
                          <div class="col ml--2">
                            <div class="d-flex justify-content-between align-items-center">
                              <div>
                                <h4 class="mb-0 text-sm">John Snow</h4>
                              </div>
                              <div class="text-right text-muted">
                                <small>5 hrs ago</small>
                              </div>
                            </div>
                            <p class="text-sm mb-0">Your posts have been liked a lot.</p>
                          </div>
                        </div>
                      </a>
                      <a href="#!" class="list-group-item list-group-item-action">
                        <div class="row align-items-center">
                          <div class="col-auto">
                            <!-- Avatar -->
                            <img alt="Image placeholder" src="../assets/img/theme/team-4.jpg" class="avatar rounded-circle">
                          </div>
                          <div class="col ml--2">
                            <div class="d-flex justify-content-between align-items-center">
                              <div>
                                <h4 class="mb-0 text-sm">John Snow</h4>
                              </div>
                              <div class="text-right text-muted">
                                <small>2 hrs ago</small>
                              </div>
                            </div>
                            <p class="text-sm mb-0">Let's meet at Starbucks at 11:30. Wdyt?</p>
                          </div>
                        </div>
                      </a>
                      <a href="#!" class="list-group-item list-group-item-action">
                        <div class="row align-items-center">
                          <div class="col-auto">
                            <!-- Avatar -->
                            <img alt="Image placeholder" src="../assets/img/theme/team-5.jpg" class="avatar rounded-circle">
                          </div>
                          <div class="col ml--2">
                            <div class="d-flex justify-content-between align-items-center">
                              <div>
                                <h4 class="mb-0 text-sm">John Snow</h4>
                              </div>
                              <div class="text-right text-muted">
                                <small>3 hrs ago</small>
                              </div>
                            </div>
                            <p class="text-sm mb-0">A new issue has been reported for Argon.</p>
                          </div>
                        </div>
                      </a>
                    </div>
                    <!-- View all -->
                    <a href="#!" class="dropdown-item text-center text-primary font-weight-bold py-3">View all</a>
                  </div>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="ni ni-ungroup"></i>
                  </a>
                  <div class="dropdown-menu dropdown-menu-lg dropdown-menu-dark bg-default  dropdown-menu-right ">
                    <div class="row shortcuts px-4">
                      <a href="#!" class="col-4 shortcut-item">
                        <span class="shortcut-media avatar rounded-circle bg-gradient-red">
                          <i class="ni ni-calendar-grid-58"></i>
                        </span>
                        <small>Calendar</small>
                      </a>
                      <a href="#!" class="col-4 shortcut-item">
                        <span class="shortcut-media avatar rounded-circle bg-gradient-orange">
                          <i class="ni ni-email-83"></i>
                        </span>
                        <small>Email</small>
                      </a>
                      <a href="#!" class="col-4 shortcut-item">
                        <span class="shortcut-media avatar rounded-circle bg-gradient-info">
                          <i class="ni ni-credit-card"></i>
                        </span>
                        <small>Payments</small>
                      </a>
                      <a href="#!" class="col-4 shortcut-item">
                        <span class="shortcut-media avatar rounded-circle bg-gradient-green">
                          <i class="ni ni-books"></i>
                        </span>
                        <small>Reports</small>
                      </a>
                      <a href="#!" class="col-4 shortcut-item">
                        <span class="shortcut-media avatar rounded-circle bg-gradient-purple">
                          <i class="ni ni-pin-3"></i>
                        </span>
                        <small>Maps</small>
                      </a>
                      <a href="#!" class="col-4 shortcut-item">
                        <span class="shortcut-media avatar rounded-circle bg-gradient-yellow">
                          <i class="ni ni-basket"></i>
                        </span>
                        <small>Shop</small>
                      </a>
                    </div>
                  </div>
                </li>
              </ul>
              <ul class="navbar-nav align-items-center  ml-auto ml-md-0 ">
                <li class="nav-item dropdown">
                  <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="media align-items-center">
                      <span class="avatar avatar-sm rounded-circle">
                        <img alt="Image placeholder" src="../assets/img/theme/team-4.jpg">
                      </span>
                      <div class="media-body  ml-2  d-none d-lg-block">
                        <span class="mb-0 text-sm  font-weight-bold">John Snow</span>
                      </div>
                    </div>
                  </a>
                  <div class="dropdown-menu  dropdown-menu-right ">
                    <div class="dropdown-header noti-title">
                      <h6 class="text-overflow m-0">Welcome!</h6>
                    </div>
                    <a href="#!" class="dropdown-item">
                      <i class="ni ni-single-02"></i>
                      <span>My profile</span>
                    </a>
                    <a href="#!" class="dropdown-item">
                      <i class="ni ni-settings-gear-65"></i>
                      <span>Settings</span>
                    </a>
                    <a href="#!" class="dropdown-item">
                      <i class="ni ni-calendar-grid-58"></i>
                      <span>Activity</span>
                    </a>
                    <a href="#!" class="dropdown-item">
                      <i class="ni ni-support-16"></i>
                      <span>Support</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#!" class="dropdown-item">
                      <i class="ni ni-user-run"></i>
                      <span>Logout</span>
                    </a>
                  </div>
                </li>
              </ul>
            </div>
          </div>
      </nav>
      
      <main class="main-content" id="panel">
        @yield('content')
      </main>
    </div>

    
    
    <!-- Argon Scripts -->
    <!-- Core -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('js/js.cookie.js')}}"></script>
    <script src="{{asset('js/jquery.scrollbar.min.js')}}"></script>
    <script src="{{asset('js/jquery-scrollLock.min.js')}}"></script>
    <!-- Optional JS -->
    <script src="{{asset('js/Chart.min.js')}}"></script>
    <script src="{{asset('js/Chart.extension.js')}}"></script>
    <!-- Argon JS -->
    <script src="{{asset('js/argon.js?v=1.2.0')}}"></script>
    {{-- Datepicker --}}
    <script src="{{asset('js/bootstrap-datepicker.js')}}"></script>
    {{-- Datatables --}}
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.25/datatables.min.js"></script>

    @yield('modal')

    <script>
      $(function() {
        $(".datepicker").datepicker({
            format: 'yyyy-mm-dd',
            autoclose: true,
            todayHighlight: true,
        });
    });
    $(document).ready(function() {
        $('.datatables').DataTable();
        const headerTable = $('.search-place');
        const headerTable2 = $('.search-place2');
        $('.dataTables_filter input').addClass('form-control')
        $('.dataTables_filter').find(`[aria-controls='DataTables_Table_0']`).appendTo(headerTable)
        $('.dataTables_filter').find(`[aria-controls='DataTables_Table_1']`).appendTo(headerTable2)
        $('.search-place input, .search-place2 input').attr("placeholder", "Cari data ...");
        $('.dataTables_filter label').html('');
        $('.dataTables_paginate span').addClass('page-item');
        $('.dataTables_paginate span a').addClass('page-link');

        $('.dataTables_length').html('');

    } );

    </script>
  </body>

</html>