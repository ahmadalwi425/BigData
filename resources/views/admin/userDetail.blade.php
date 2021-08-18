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
          <h1 class="display-2 text-white">Hello Jesse</h1>
          <p class="text-white mt-0 mb-3">This is your profile page.</p>
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
                      <input type="text" id="nama" class="form-control" name="nama" placeholder="Nama" value="lucky.jesse">
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label class="form-control-label" for="email">Email address</label>
                      <input type="email" name="email" id="email" class="form-control" placeholder="bigdata@example.com">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label class="form-control-label" for="no_hp">Nomer HP</label>
                      <input type="text" id="no_hp" class="form-control" placeholder="Nomer HP (08xxxxxx)" value="Lucky">
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label class="form-control-label" for="input-last-name">NIM</label>
                      <input type="text" id="input-last-name" class="form-control" placeholder="Last name" value="Jesse" disabled>
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
                      <input name="jurusan" type="text" id="jurusan" class="form-control" placeholder="Jurusan" value="Teknik Informatika">
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label" for="level">Level</label>
                      <input type="number" id="level" class="form-control" placeholder="Postal code">
                    </div>
                  </div>
                  <hr class="my-4" />
                  <div class="form-group align-self-end text-end">
                    <button type="submit" class="btn btn-primary">Edit</button>
                    <a class="btn btn-secondary" href="" onclick="return confirm('Are you sure wanna delete this user?');">Kembali</a>
                  </div>
                </div>
              </div>
              
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection