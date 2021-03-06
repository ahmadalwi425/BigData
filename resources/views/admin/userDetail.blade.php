@extends('layouts.templateAdmin')

@section('content')


<!-- Header -->
<div class="header pb-6 d-flex align-items-center" style="min-height: 500px; background-image: url(../assets/img/theme/profile-cover.jpg); background-size: cover; background-position: center top;">
    <!-- Mask -->
    <span class="mask bg-gradient-default opacity-8"></span>
    <!-- Header container -->
    <div class="container-fluid d-flex align-items-center">
      <div class="row">
        <div class="col-lg-12 col-md-12">
          <h1 class="display-2 text-white">Halo {{$data->nama}} !</h1>
          <p class="text-white mt-0 mb-3">Ini adalah halaman profil <strong>{{$data->nama}}</strong>.</p>
        </div>
      </div>
    </div>
  </div>
  <!-- Page content -->
  <div class="container-fluid mt--6">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <div class="row align-items-center">
              <div class="col-8">
                <h3 class="mb-0">Edit profile </h3>
              </div>
            </div>
          </div>
          <div class="card-body">
            <form>
              <h6 class="heading-small text-muted mb-4">User information</h6>
              <div class="pl-lg-4">
                <div class="row">
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label class="form-control-label" for="nama">Nama</label>
                      <input type="text" id="nama" class="form-control" name="nama" placeholder="Nama" value="{{$data->nama}}">
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label class="form-control-label" for="email">Email address</label>
                      <input type="email" name="email" id="email" class="form-control" placeholder="bigdata@example.com" value="{{$data->email}}">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label class="form-control-label" for="no_hp">Nomer HP</label>
                      <input type="text" id="no_hp" class="form-control" placeholder="Nomer HP (08xxxxxx)" value="{{$data->no_hp}}">
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label class="form-control-label" for="input-last-name">NIM</label>
                      <input type="text" id="input-last-name" class="form-control" placeholder="Last name" value="{{$data->nim}}" disabled>
                    </div>
                  </div>
                </div>
              </div>
              <hr class="my-4" />
              <!-- Address -->
              <h6 class="heading-small text-muted mb-4">Education</h6>
              <div class="pl-lg-4">
                <div class="row">
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label" for="fakultas">Fakultas</label>
                      <input type="text" id="fakultas" class="form-control" placeholder="Fakultas" value="Teknik">
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label" for="jurusan">Jurusan</label>
                      <input name="jurusan" type="text" id="jurusan" class="form-control" placeholder="Jurusan" value="{{$data->jurusan->nama_jurusan}}">
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label" for="level">Level</label>
                      <input type="text" id="level" class="form-control" placeholder="Postal code" value="{{$data->level->nama_level}}">
                    </div>
                  </div>
                </div>
            </div>
            <hr class="my-4" />
            <div class="row justify-content-end">
              <button type="submit" class="col-2 btn btn-primary align-self-end ">Edit</button>
              <a class="col-2 btn btn-secondary align-self-end " href="" onclick="return confirm('Are you sure wanna delete this user?');">Kembali</a>
            </div>
              
            </form>
          </div>
        </div>
      </div>
    </div>

    <!-- Footer -->
    <footer class="footer pt-0">
      <div class="row align-items-center justify-content-lg-between">
        <div class="col-lg-6">
          <div class="copyright text-center  text-lg-left  text-muted">
            &copy; 2021 <a href="https://www.creative-tim.com" class="font-weight-bold ml-1" target="_blank">SantriNgoding</a>
          </div>
        </div>
        <div class="col-lg-6">
          <ul class="nav nav-footer justify-content-center justify-content-lg-end">
            <li class="nav-item">
              <a href="https://www.creative-tim.com" class="nav-link" target="_blank">Creative Tim</a>
            </li>
            <li class="nav-item">
              <a href="https://www.creative-tim.com/presentation" class="nav-link" target="_blank">About Us</a>
            </li>
            <li class="nav-item">
              <a href="http://blog.creative-tim.com" class="nav-link" target="_blank">Blog</a>
            </li>
            <li class="nav-item">
              <a href="https://github.com/creativetimofficial/argon-dashboard/blob/master/LICENSE.md" class="nav-link" target="_blank">MIT License</a>
            </li>
          </ul>
        </div>
      </div>
    </footer>
  </div>

@endsection