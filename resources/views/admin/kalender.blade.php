@extends('layouts.templateAdmin')

@section('content')


<!-- Header -->
<div class="header bg-primary pb-6">
    <div class="container-fluid">
      <div class="header-body">
        <div class="row align-items-center py-4">
          <div class="col-lg-6 col-7">
            <h6 class="h2 text-white d-inline-block mb-0">Kalender</h6>
            <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
              <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                <li class="breadcrumb-item"><a href="#">dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">kalender</li>
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
      @isset($errors)
          @foreach ($errors->all() as $message)
              <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>{{ $message }}</strong> 
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
            @endforeach
          @endisset
        <div class="card">
          <!-- Card header -->
          <div class="card-header border-0">
            <div class="mb-0 pb-0 row justify-ceontent-center">
              <h3 class="mb-0 col-10">Tabel</h3>
              <button type="button" data-toggle="modal" data-target="#create" class="btn-success btn col-2 mb-0">Tambah</button>
            </div>
          </div>
          <!-- Light table -->
          <div class="table-responsive">
            <table class="table align-items-center table-flush">
              <thead class="thead-light">
                <tr>
                  <th scope="col" class="sort" data-sort="name">No</th>
                  <th scope="col" class="sort" data-sort="name">Tgl Mulai</th>
                  <th scope="col" class="sort" data-sort="name">Tgl Selesai</th>
                  <th scope="col" class="sort" data-sort="name">Jenis</th>
                  <th scope="col" class="sort" data-sort="name">Nama Kegiatan</th>
                  <th scope="col" class="sort" data-sort="name">Semester</th>
                  <th scope="col" class="sort" data-sort="name">Aksi</th>
                  <th scope="col"></th>
                </tr>
              </thead>
              <tbody class="list">
                @foreach($data as $row)
                <tr>
                  <td scope="row">
                    <div class="media align-items-center">
                      <div class="media-body">
                        <span class="name mb-0 text-sm">{{$loop->iteration}}</span>
                      </div>
                    </div>
                  </td>
                  <td>
                      {{$row->tgl_mulai}}
                  </td>
                  <td>
                      {{$row->tgl_selesai}}
                  </td>
                  <td>
                      {{$row->jenis_kal->nama_jenis_kal}}
                  </td>
                  <th class="budget text-lg">
                      {{$row->nama_kegiatan}}
                  </th>
                  <td>
                      {{$row->semester->semester}}
                  </td>
                  <td>
                      <button class="btn btn-warning" type="button"data-toggle="modal" data-target="#exampleModal">Detail</button>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
          <!-- Card footer -->
          <div class="card-footer py-4">
            <nav aria-label="...">
              <ul class="pagination justify-content-end mb-0">
                <li class="page-item disabled">
                  <a class="page-link" href="#" tabindex="-1">
                    <i class="fas fa-angle-left"></i>
                    <span class="sr-only">Previous</span>
                  </a>
                </li>
                <li class="page-item active">
                  <a class="page-link" href="#">1</a>
                </li>
                <li class="page-item">
                  <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                </li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                  <a class="page-link" href="#">
                    <i class="fas fa-angle-right"></i>
                    <span class="sr-only">Next</span>
                  </a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <div class="row col-md-12">
          <div class="card col-md-6">
          <!-- Card header -->
          <div class="card-header border-0">
            <div class="mb-0 pb-0 row justify-ceontent-center">
              <h3 class="mb-0 col-8">Jenis Event</h3>
              <button type="button" data-toggle="modal" data-target="#create" class="btn-success btn col-4 mb-0">Tambah</button>
            </div>
          </div>
          <!-- Light table -->
          <div class="table-responsive">
            <table class="table align-items-center table-flush">
              <thead class="thead-light">
                <tr>
                  <th scope="col" class="sort" data-sort="name">Nama Jenis</th>
                  <th scope="col" class="sort" data-sort="name">Aksi</th>
                  <th scope="col"></th>
                </tr>
              </thead>
              <tbody class="list">
                @foreach($jenis_kal as $row)
                <tr>
                  <td>
                      {{$row->nama_jenis_kal}}
                  </td>
                  <td>
                      <button class="btn btn-warning" type="button"data-toggle="modal" data-target="#exampleModal">Detail</button>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
          <!-- Card footer -->
          <div class="card-footer py-4">
            <nav aria-label="...">
              <ul class="pagination justify-content-end mb-0">
                <li class="page-item disabled">
                  <a class="page-link" href="#" tabindex="-1">
                    <i class="fas fa-angle-left"></i>
                    <span class="sr-only">Previous</span>
                  </a>
                </li>
                <li class="page-item active">
                  <a class="page-link" href="#">1</a>
                </li>
                <li class="page-item">
                  <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                </li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                  <a class="page-link" href="#">
                    <i class="fas fa-angle-right"></i>
                    <span class="sr-only">Next</span>
                  </a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <div class="card col-md-6">
          <!-- Card header -->
          <div class="card-header border-0">
            <div class="mb-0 pb-0 row justify-ceontent-center">
              <h3 class="mb-0 col-8">Tahun Ajar</h3>
              <button type="button" data-toggle="modal" data-target="#create" class="btn-success btn col-4 mb-0">Tambah</button>
            </div>
          </div>
          <!-- Light table -->
          <div class="table-responsive">
            <table class="table align-items-center table-flush">
              <thead class="thead-light">
                <tr>
                  <th scope="col" class="sort col-md-6" data-sort="name">Tahun Ajar</th>
                  <th scope="col" class="sort col-md-6" data-sort="name">Aksi</th>
                  <th scope="col"></th>
                </tr>
              </thead>
              <tbody class="list">
                @foreach($tahun_ajar as $row)
                <tr>
                  <td class="col-md-6">
                      {{$row->tahun_ajar}}
                  </td>
                  <td  class="col-md-6">
                      <button class="btn btn-warning" type="button"data-toggle="modal" data-target="#exampleModal">Detail</button>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
          <!-- Card footer -->
          <div class="card-footer py-4">
            <nav aria-label="...">
              <ul class="pagination justify-content-end mb-0">
                <li class="page-item disabled">
                  <a class="page-link" href="#" tabindex="-1">
                    <i class="fas fa-angle-left"></i>
                    <span class="sr-only">Previous</span>
                  </a>
                </li>
                <li class="page-item active">
                  <a class="page-link" href="#">1</a>
                </li>
                <li class="page-item">
                  <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                </li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                  <a class="page-link" href="#">
                    <i class="fas fa-angle-right"></i>
                    <span class="sr-only">Next</span>
                  </a>
                </li>
              </ul>
            </nav>
          </div>
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

@section('modal')
    
<!-- Modal -->  
{{-- TAMBAH --}}
<div class="modal fade" id="create" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Agenda</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
        <form action="{{url('admin/kalender/create')}}" method="post" enctype="multipart/form-data">
          @csrf
          <div class="form-group">
              <label for="nama_kegiatan">Nama Agenda</label>
              <input type="text" name="nama_kegiatan" class="form-control" id="nama_kegiatan" aria-describedby="nama_kegiatan" value="">
          </div>
          <div class="form-group">
              <label for="tgl_mulai">Tgl Mulai</label>
              <input type="text" name="tgl_mulai" class="form-control datepicker" id="tgl_mulai" aria-describedby="tgl_mulai" value="">
          </div>
          <div class="form-group">
              <label for="tgl_selesai">Tgl Selesai</label>
              <input type="text" name="tgl_selesai" class="form-control datepicker" id="tgl_selesai" aria-describedby="tgl_selesai" value="">
          </div>
          <div class="form-group">
              <label for="jenis_kal">Jenis</label>
              <select class="form-control" name="id_jenis_kal" id="">
                <option value="">Pilih Jenis Agenda ...</option>
                @foreach ($jenis_kal as $item)
                    <option value='{{$item->id}}'>{{$item->nama_jenis_kal}}</option>
                @endforeach
              </select>
          </div>
          <div class="form-group">
              <label for="jenis_kal">Semester</label>
              <select class="form-control" name="id_semester" id="">
                <option value="">Pilih Semester ...</option>
                @foreach ($semester as $item)
                    <option value='{{$item->id}}'>{{$item->semester}}</option>
                @endforeach
              </select>
          </div>
          <div class="form-group">
              <label for="jenis_kal">Jenis</label>
              <select class="form-control" name="id_tahun_ajar" id="">
                <option value="">Pilih Tahun Ajar ...</option>
                @foreach ($tahun_ajar as $item)
                    <option value='{{$item->id}}'>{{$item->tahun_ajar}}</option>
                @endforeach
              </select>
          </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Tambah</button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
        </div>
      </form>
    </div>
  </div>
</div> 

<script>
  $(function() {
        $(".datepicker").datepicker({
            format: 'yyyy-mm-dd',
            autoclose: true,
            todayHighlight: true,
        });
    });
</script>
@endsection
