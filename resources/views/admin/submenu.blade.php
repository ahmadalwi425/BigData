@extends('layouts.templateAdmin')

@section('content')


<!-- Header -->
<div class="header bg-primary pb-6">
    <div class="container-fluid">
      <div class="header-body">
        <div class="row align-items-center py-4">
          <div class="col-lg-6 col-7">
            <h6 class="h2 text-white d-inline-block mb-0">Sub Menu</h6>
            <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
              <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                <li class="breadcrumb-item"><a href="#">dashboard</a></li>
                <li class="breadcrumb-item"><a href="#">divisi</a></li>
                <li class="breadcrumb-item"><a href="#">subdivisi</a></li>
                <li class="breadcrumb-item active" aria-current="page">submenu</li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </div>
</div>
  <!-- Page content -->
  <div class="container-fluid mt--6">
    <div class="row">
      <div class="col">
        <div class="card">
          <!-- Card header -->
          <form action="{{url('/admin/submenu/update/', $data->id )}}" method="post">
          <div class="card-header border-0">
                @csrf
                @method('PUT')
                <div class="mb-0 pb-0 row justify-content-between">
                <h3 class="mb-0 col-lg-2 col-12">Isi Menu <strong>{{ $data->judul }}</strong></h3>
                <button type="submit" disabled class="btn-simpan btn col-lg-2 col-12 mb-0 mt-3 mt-lg-0">Simpan</button>
                </div>
            </div>
            <div class="card-body">
                <textarea onchange="setBtn" name="ckeditor" class="ckeditor" id="ckeditor">{!!$data->konten!!}</textarea>
            </div>
        </form>
          <!-- Card footer -->
          <div class="card-footer py-4">
            
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
  <script type="text/javascript">
        const ck = CKEDITOR.replace('ckeditor',{tabSpaces:4});
        ck.on('change', function() { 
            console.log("TEST");
            $('.btn-simpan').removeAttr("disabled")
            $('.btn-simpan').addClass("btn-success")
        });

        
    </script>
@endsection
