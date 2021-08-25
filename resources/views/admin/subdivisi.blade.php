@extends('layouts.templateAdmin')

@section('content')


<!-- Header -->
<div class="header bg-primary pb-6">
    <div class="container-fluid">
      <div class="header-body">
        <div class="row align-items-center py-4">
          <div class="col-lg-6 col-7">
            <h6 class="h2 text-white d-inline-block mb-0">Sub Divisi</h6>
            <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
              <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                <li class="breadcrumb-item"><a href="#"><i class="fa fa-home text-primary"></i> Dashboard</a></li>
                <li class="breadcrumb-item"><a href="#">divisi</a></li>
                <li class="breadcrumb-item active" aria-current="page">subdivisi</li>
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
                  <th scope="col" class="sort" data-sort="name">Sub Divisi</th>
                  <th scope="col" class="sort" data-sort="name">Sub Menu</th>

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
                    {{$row->nama_subdivisi}}
                  </th>
                  <td>
                    <select class="form-control" onchange="location = this.value" name="" id="">
                      <option value="">Pilih Menu ...</option>
                      @foreach ($submenu as $item)
                          @if($item->id_subdiv == $row->id)
                          <option value="{{url('/admin/submenu',$item->id)}}">{{$item->judul}}</option>
                          @endif
                      @endforeach
                    </select>
                  </td>
                  <td>
                    <span class="badge badge-dot mr-4">
                      <a class="btn btn-primary" href="{{ url('admin/submenu/add', $row->id) }}"><div class="row justify-content-center align-items-center">
                        <div class="col-1">
                          <i class="ni ni-fat-add text-white mt--4 ml--3 text-xl"></i> 
                        </div>
                        <div class="col-6">
                          <span class="ml--3">
                            Tambah
                          </span>
                        </div>
                      </div></a>
                    </span>
                    <span class="badge badge-dot mr-4">
                      <button class="btn btn-warning" data-toggle="modal" data-target="#edit-{{$row->id}}" type="button"><i class="ni ni-ruler-pencil text-white mt--2 mr-3"></i> Edit</button>
                    </span>
                    <span class="badge badge-dot mr-4">
                      <a class="btn btn-danger" href="{{ url('admin/subdivisi/destroy',$row->id) }}" onclick="del(event);"><div class="row justify-content-center align-items-center">
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
            &copy; 2020 <a href="https://www.creative-tim.com" class="font-weight-bold ml-1" target="_blank">Creative Tim</a>
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
    
{{-- EDIT --}}
@foreach ($data as $row)
<div class="modal fade" id="edit-{{$row->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit {{$row->nama_divisi}}</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
        <form action="{{url('admin/subdivisi/update',$row->id)}}" method="post" enctype="multipart/form-data">
          @csrf
          @method('PUT')
          <div class="form-group">
              <label for="nama_divisi">Nama</label>
              <input type="text" name="nama_subdivisi" class="form-control" id="nama_divisi" aria-describedby="nama_divisi" value="{{ $row->nama_subdivisi }}">
          </div>
          <div class="form-group">
              <label for="deskripsi">Divisi</label>
              <select class="form-control" name="jurusan" id="">
                <option value="">Pilih Divisi ...</option>
                @foreach ($divisi as $item)
                    @if($row->id_divisi == $item->id)
                    <option value="{{ $item->id }}" selected>{{ $item->nama_divisi}}</option>
                    @else
                      <option value="{{ $item->id }}">{{ $item->nama_divisi}}</option>
                    @endif
                @endforeach
              </select>
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
        <h5 class="modal-title" id="exampleModalLabel">Tambah Sub Divisi</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
        <form action="{{url('admin/subdivisi/create')}}" method="post">
          @csrf
          <div class="form-group">
              <label for="nama_subdivisi">Nama</label>
              <input type="text" name="nama_subdivisi" class="form-control" id="nama_subdivisi" aria-describedby="nama_subdivisi" value="">
          </div>
          <div class="form-group">
              <label for="id_divisi">Divisi</label>
              <select class="form-control" name="id_divisi" id="id_divisi">
                <option value="">Pilih Divisi ...</option>
                @foreach ($divisi as $item)
                    @if($row->id_divisi == $item->id)
                    <option value="{{ $item->id }}" selected>{{ $item->nama_divisi}}</option>
                    @endif
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

@endsection