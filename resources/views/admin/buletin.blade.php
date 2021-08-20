@extends('layouts.templateAdmin')

@section('content')
@php
    $base_url = 'http://127.0.0.1:8000/admin'; 
    $img_url = 'http://127.0.0.1:8000/storage/assets/img/';  
@endphp

<!-- Header -->
<div class="header bg-primary pb-6">
    <div class="container-fluid">
      <div class="header-body">
        <div class="row align-items-center py-4">
          <div class="col-lg-6 col-7">
            <h6 class="h2 text-white d-inline-block mb-0">Buletin</h6>
            <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
              <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                <li class="breadcrumb-item"><a href="#">admin</a></li>
                <li class="breadcrumb-item active" aria-current="page">buletin</li>
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
          <div class="card-header border-0">
            <div class="mb-0 pb-0 row justify-content-center">
              <h3 class="mb-0 col-10">Tabel Buletin</h3>
              <button type="button" data-toggle="modal" data-target="#create" class="btn-success btn col-2 mb-0">Tambah</button>
            </div>
          </div>
          <!-- Light table -->
          <div class="card-body">
            <div class="table-responsive">
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <th scope="col" class="sort" data-sort="name">No</th>
                    <th scope="col" class="sort" data-sort="budget">Judul</th>
                    <th scope="col" class="sort" data-sort="name">Cover</th>
                    <th scope="col" class="sort" data-sort="budget">Kategori</th>
                    <th scope="col" class="sort" data-sort="budget">Aksi</th>
                    <th scope="col"></th>
                  </tr>
                </thead>
                <tbody class="list">
                  @foreach ($data as $row)
                  <tr>
                    <td scope="row">
                      <div class="media align-items-center">
                        <div class="media-body">
                          <span class="name mb-0 text-sm">{{$loop->iteration}}</span>
                        </div>
                      </div>
                    </td>
                    <th class="budget text-lg">
                      {{$row->judul}}
                    </th>
                    <td>
                      <span class="badge badge-dot mr-4">
                        <button class="btn btn-primary" data-toggle="modal" data-target="#detail-{{$row->id}}" type="button">Lihat</button>
                      </span>
                    </td>
                    <td>
                      <span class="badge badge-dot mr-4">
                        {{$row->kategori_buletin->nama_kategori}}
                      </span>
                    </td>
                    <td>
                      <span class="badge badge-dot mr-4">
                        <button class="btn btn-warning" data-toggle="modal" data-target="#edit-{{$row->id}}" type="button">Edit</button>
                      </span>
                      <span class="badge badge-dot mr-4">
                        <a class="btn btn-danger" href="{{ url('buletin/destroy',$row->id) }}" onclick="del(event);">Delete</a>
                      </span>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
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
    <div class="row">
      <div class="col">
        <div class="card">
          <!-- Card header -->
          <div class="card-header border-0">
            <div class="mb-0 pb-0 row justify-ceontent-center">
              <h3 class="mb-0 col-10">Tabel Kategori</h3>
              <button type="button" data-toggle="modal" data-target="#createCat" class="btn-success btn col-2 mb-0">Tambah</button>
            </div>
          </div>
          <!-- Light table -->
          <div class="card-body">
            <div class="table-responsive">
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <th scope="col" class="sort" data-sort="name">No</th>
                    <th scope="col" class="sort" data-sort="budget">Kategori</th>
                    <th scope="col" class="sort" data-sort="budget">Aksi</th>
                    <th scope="col"></th>
                  </tr>
                </thead>
                <tbody class="list">
                  @foreach ($kategori as $row)
                  <tr>
                    <td scope="row">
                      <div class="media align-items-center">
                        <div class="media-body">
                          <span class="name mb-0 text-sm">{{$loop->iteration}}</span>
                        </div>
                      </div>
                    </td>
                    <th class="budget text-lg">
                      {{$row->nama_kategori}}
                    </th>
                    <td>
                      <span class="badge badge-dot mr-4">
                        <button class="btn btn-warning" data-toggle="modal" data-target="#editCat-{{$row->id}}" type="button">Edit</button>
                      </span>
                      <span class="badge badge-dot mr-4">
                        <a class="btn btn-danger" href="{{ url('admin/kategori_buletin/destroy',$row->id) }}" onclick="del(event);">Delete</a>
                      </span>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
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

{{-- MODAL DETAIL COVER --}}
@foreach ($data as $row)
<div class="modal fade" id="detail-{{$row->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">{{$row->judul}}</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <img src="<?= $img_url ?>{{$row->cover}}" alt="{{$row->judul}}" class="img-fluid">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div> 
@endforeach

{{-- MODAL EDIT BULETIN --}}
@foreach ($data as $row)
<div class="modal fade" id="edit-{{$row->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit {{$row->judul}}</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
        <form action="{{url('admin/buletin/update',$row->id)}}" method="post" enctype="multipart/form-data">
          @csrf
          @method('PUT')
          <div class="form-group">
              <label for="judul">Judul</label>
              <input type="text" name="judul" class="form-control" id="judul" aria-describedby="judul" value="{{ $row->judul }}">
          </div>
          <div class="form-group">
              <label for="id_kategori">Kategori</label>
              <select name="id_kategori_buletin" id="id_kategori" class="form-control">
                  @foreach($kategori as $datacat)
                  <option value="{{$datacat->id}}">{{$datacat->nama_kategori}}</option>
                  @endforeach
              </select>
          </div>
          <div class="form-group">
              <label for="konten col-12">Konten</label>
              <textarea name="konten" class="col-12 ckeditor" id="ckeditor">{!!$row->konten!!}</textarea>
          </div>
          <div class="form-group">
              <label for="cover">Foto cover</label>
              <img id="img{{ $row->id }}" onclick="return changeImg('buletinImg{{ $row->id }}')" src="<?= $img_url ?>{{$row->cover}}" alt="{{ $row->judul }}" class="img-thumbnail">
              <div style='height: 0px;width:0px; overflow:hidden;'>
                <input id="buletinImg{{ $row->id }}" onchange="readUrl(this, 'img{{ $row->id }}')" type="file" name="cover" class="form-control" id="cover" aria-describedby="cover buletin" >
              </div>
          </div>
          <div class="form-group">
            <button class="btn btn-primary">Edit</button>
          </div>
        </form>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div> 
@endforeach

{{-- MODAL TAMBAH BULETIN --}}
<div class="modal fade" id="create" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Buletin</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
        <form action="{{url('admin/buletin/create')}}" method="post" enctype="multipart/form-data">
          @csrf
          <div class="form-group">
              <label for="judul">Judul</label>
              <input type="text" name="judul" class="form-control" id="judul" aria-describedby="judul" value="">
          </div>
          <div class="form-group">
              <label for="id_kategori">Kategori</label>
              <select name="id_kategori_buletin" id="id_kategori" class="form-control">
                <option value="">Pilih Kategori ...</option>
                  @foreach($kategori as $datacat)
                  <option value="{{$datacat->id}}">{{$datacat->nama_kategori}}</option>
                  @endforeach
              </select>
          </div>
          <div class="form-group">
              <label for="konten col-12">Konten</label>
              <textarea name="konten" class="col-12 ckeditor" id="ckeditor"></textarea>
          </div>
          <div class="form-group">
              <label for="cover col-12">Foto cover</label>
              <img id="imgCreate" src="" alt="" class="img-thumbnail">
              <input id="buletinImg" placeholder="Pilih Gambar ..." onchange="readUrl(this, 'imgCreate')" type="file" name="cover" class="form-control" id="cover" aria-describedby="cover buletin" >
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

{{-- MODAL TAMBAH KATEGORI BULETIN --}}
<div class="modal fade" id="createCat" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Kategori Buletin</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
        <form action="{{url('admin/kategori_buletin/store')}}" method="post">
          @csrf
          <div class="form-group">
              <label for="judul">Nama Kategori</label>
              <input type="text" name="nama_kategori" class="form-control" id="judul" aria-describedby="judul" value="">
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

{{-- MODAL EDIT KATEGORI BULETIN --}}
@foreach ($kategori as $row)
<div class="modal fade" id="editCat-{{$row->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Kategori Buletin</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
        <form action="{{url('admin/kategori_buletin/update', $row->id)}}" method="post">
          @csrf
          @method('PUT')
          <div class="form-group">
              <label for="judul">Nama Kategori</label>
              <input type="text" name="nama_kategori" class="form-control" id="judul" aria-describedby="judul" value="{{$row->nama_kategori}}">
          </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Edit</button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </form>
    </div>
  </div>
</div> 
@endforeach

@endsection