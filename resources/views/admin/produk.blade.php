@php
    $img_url = 'http://127.0.0.1:8000/storage/assets/';  
@endphp
@extends('layouts.templateAdmin')

@section('content')


<!-- Header -->
<div class="header bg-primary pb-6">
    <div class="container-fluid">
      <div class="header-body">
        <div class="row align-items-center py-4">
          <div class="col-lg-6 col-7">
            <h6 class="h2 text-white d-inline-block mb-0">Produk</h6>
            <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
              <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                <li class="breadcrumb-item"><a href="{{url('/admin')}}"><i class="fa fa-home text-primary"></i> Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">produk</li>
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
            <div class="mb-0 pb-0 row justify-content-between">
              <h3 class="mb-0 col-2">Tabel</h3>
              <div class="search-place"></div>
              <button type="button" data-toggle="modal" data-target="#create" class="btn-success btn col-2 mb-0"><div class="row justify-content-center align-items-center">
                  
                <div class="col-1 ml--2">
                  <i class="ni ni-fat-add text-white text-md m-0 pt-1 text-lg"></i> 
                </div>
                <div class="col-6">
                  <span class="d-inline-block pt--4">Tambah</span>
                </div>
              </div></button>
            </div>
          </div>
          <!-- Light table -->
          <div class="table-responsive">
            <table class="table align-items-center table-flush datatables">
              <thead class="thead-light">
                <tr>
                  <th scope="col" class="sort" data-sort="name">No</th>
                  <th scope="col" class="sort" data-sort="name">Nama Produk</th>
                  <th scope="col" class="sort" data-sort="name">Gambar</th>
                  <th scope="col" class="sort" data-sort="name">Jenis</th>
                  <th scope="col" class="sort" data-sort="name">Stok</th>
                  <th scope="col" class="sort" data-sort="name">Aksi</th>
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
                    {{$row->nama_produk}}
                  </th>
                  <th>
                    <span class="badge badge-dot mr-4">
                      <button class="btn btn-primary" data-toggle="modal" data-target="#detail-{{$row->id}}" type="button"><i class="ni ni-image text-white mt--2 mr-3"></i>Lihat</button>
                    </span>
                  </th>
                  <th class="budget text-lg">
                    {{$row->jenis_produk->jenis_produk}}
                  </th>
                  <th class="budget text-lg">
                    {{$row->stok}}
                  </th>
                  <td>
                    <span class="badge badge-dot mr-4">
                      <button class="btn btn-warning" data-toggle="modal" data-target="#edit-{{$row->id}}" type="button"><i class="ni ni-ruler-pencil text-white mt--2 mr-3"></i> Edit</button>
                    </span>
                    <span class="badge badge-dot mr-4">
                      <a class="btn btn-danger" href="{{ url('produk/destroy',$row->id) }}" onclick="return confirm('Are you sure wanna delete this user?');"><div class="row justify-content-center align-items-center">
                        <div class="col-1">
                          <i class="ni ni-fat-remove text-white mt--4 ml--3 text-xl"></i> 
                        </div>
                        <div class="col-6">
                          <span class="ml--3">
                            Delete
                          </span>
                        </div>
                      </div></a>
                    </span>
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
        <h5 class="modal-title" id="exampleModalLabel">{{$row->nama_produk}}</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <img src="{{asset('storage/'.$row->gambar)}}" alt="{{$row->judul}}" class="img-fluid">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div> 
@endforeach

{{-- EDIT --}}
@foreach ($data as $row)
<div class="modal fade" id="edit-{{$row->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit {{$row->nama_produk}}</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{url('admin/produk/updatestok',$row->id)}}" method="post" enctype="multipart/form-data">
          @csrf
          @method('PUT')
          <div class="form-group">
              <label for="nama_produk">Nama</label>
              <input type="text" name="nama_produk" class="form-control" id="nama_produk" aria-describedby="nama_produk" value="{{ $row->nama_produk }}">
          </div>
          <div class="form-group">
              <label for="stok">Stok</label>
              <input type="number" name="stok" class="form-control" id="stok" aria-describedby="stok" value="{{ $row->stok }}">
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

{{-- TAMBAH --}}
<div class="modal fade" id="create" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Produk</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
        <form action="{{url('admin/produk/create')}}" method="post" enctype="multipart/form-data">
          @csrf
          <div class="form-group">
              <label for="nama_produk">Nama</label>
              <input type="text" name="nama_produk" class="form-control" id="nama_produk" aria-describedby="nama_produk" value="">
          </div>
          <div class="form-group">
              <label for="nama_produk">Jenis</label>
              <input type="text" name="nama_produk" class="form-control" id="nama_produk" aria-describedby="nama_produk" value="">
          </div>
          <div class="form-group">
              <label for="nama_produk">Stok</label>
              <input type="text" name="nama_produk" class="form-control" id="nama_produk" aria-describedby="nama_produk" value="">
          </div>
          <div class="form-group">
              <label for="nama_produk">Harga</label>
              <input type="text" name="nama_produk" class="form-control" id="nama_produk" aria-describedby="nama_produk" value="">
          </div>
          <div class="form-group">
              <label for="nama_produk">Foto</label>
              <input type="text" name="nama_produk" class="form-control" id="nama_produk" aria-describedby="nama_produk" value="">
          </div>
          @if(Auth::User()->id_level == 1)
          <div class="form-group">
              <label for="nama_produk">Nama Penjual</label>
              <select name="id_penjual" id=""  class="form-control">
                  @foreach($user as $row)
                  <option value="{{$row->id}}">{{$row->nama}}</option>
                  @endforeach
              </select>
          </div>
          @else
            <input type="hidden" name="id_penjual" value="{{Auth::User()->id}}">
          @endif
          
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Tambah</button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
        </div>
      </form>
    </div>
  </div>
</div> 

@endsection