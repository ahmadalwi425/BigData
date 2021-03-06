@extends('layouts.templateAdmin')

@section('content')


<!-- Header -->
<div class="header bg-primary pb-6">
    <div class="container-fluid">
      <div class="header-body">
        <div class="row align-items-center py-4">
          <div class="col-lg-6 col-7">
            <h6 class="h2 text-white d-inline-block mb-0">Peminjaman</h6>
            <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
              <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                <li class="breadcrumb-item"><a href="{{url('/admin')}}"><i class="fa fa-home text-primary"></i> Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">peminjaman</li>
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
          <div class="card-header border-0 pb-0">
            <div class="mb-0 pb-0 row justify-content-between">
              <h3 class="mb-0 col-5 col-lg-2 text-lg-left">Tables</h3>
              <div class="search-place col-7 text-lg-left text-center"></div>
              <button type="button" data-toggle="modal" data-target="#create" class="btn-success btn col-lg-2 col-12 mt-3 mt-lg-0 mb-0 mb-lg-2">
                <div class="row justify-content-center align-items-center">
                  
                  <div class="col-1 ml--2">
                    <i class="ni ni-fat-add text-white text-md m-0 pt-1 text-lg"></i> 
                  </div>
                  <div class="col-6">
                    <span class="d-inline-block pt--4">Tambah</span>
                  </div>
                </div>
              </button>
            </div>
          </div>
          <!-- Light table -->
          <div class="table-responsive">
            <table class="table align-items-center table-flush datatables">
              <thead class="thead-light">
                <tr>
                  <th scope="col" class="sort" data-sort="name">No</th>
                  <th scope="col" class="sort" data-sort="name">Peminjam</th>
                  <th scope="col" class="sort" data-sort="name">Tgl Pinjam</th>
                  <th scope="col" class="sort" data-sort="name">Tgl Kembali</th>
                  <th scope="col" class="sort" data-sort="name">Barang</th>
                  <th scope="col" class="sort" data-sort="name">Status</th>
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
                    {{$row->user->nama}}
                  </th>
                  <td>
                    {{$row->tgl_pinjam}}
                  </td>
                  <td>
                    {{$row->tgl_kembali}}
                  </td>
                  <th class="text-lg">
                    {{$row->barang}}
                  </th>
                  @if($row->status == "dipinjam")
                  <td class="text-warning">
                    <strong>DIPINJAM</strong>
                  </td>
                  @elseif($row->status == "dikembalikan")
                  <td class="text-success">
                    <strong>DIKEMBALIKAN</strong>
                  </td>
                  @endif
                  <td>
                    @if($row->status == "dipinjam")
                      <a class="btn btn-danger" id="link-{{$row->id}}" href="{{ url('admin/peminjaman/edit',$row->id) }}" onclick="kembali(event);"><div class="row justify-content-center align-items-center">
                        <div class="col-1">
                          <i class="ni ni-box-2 text-white mt--1 ml--3 text-md"></i> 
                        </div>
                        <div class="col-6">
                          <span class="ml--4 pr-2">
                            Kembalikan
                          </span>
                        </div>
                      </div></a>
                    @else
                      <a class="btn btn-secondary" aria-disabled="true" style="pointer-events: none" id="link-{{$row->id}}" href=""><div class="row justify-content-center align-items-center">
                        <div class="col-1">
                          <i class="ni ni-box-2 text-dark mt--1 ml--3 text-md"></i> 
                        </div>
                        <div class="col-6">
                          <span class="ml--4 pr-2 text-grey">
                            Kembalikan
                          </span>
                        </div>
                      </div></a>

                  @endif
                      <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#exampleModal"><i class="ni ni-archive-2 text-white mt--1 mr-2 text-lg"></i> Detail</button>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
          <!-- Card footer -->
          <!-- <div class="card-footer py-4">
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
          </div> -->
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

{{-- TAMBAH --}}
<div class="modal fade" id="create" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Peminjaman</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
        <form action="{{url('admin/peminjaman/create')}}" method="post" enctype="multipart/form-data">
          @csrf
          <div class="form-group">
              <label class="form-control-label" for="level">Peminjam</label>
              <select class="form-control" name="id_user" id="">
                <option value="">Pilih Peminjam...</option>
                @foreach ($user as $item)
                    <option value="{{ $item->id }}">{{ $item->nama}}</option>
                @endforeach
              </select>
          </div>
          <div class="form-group">
              <label for="tgl_pinjam">Tanggal Pinjam</label>
              <input type="text" name="tgl_pinjam" class="form-control datepicker" id="tgl_pinjam" aria-describedby="tgl_pinjam" value="">
          </div>
          <div class="form-group">
              <label for="tgl_kembali">Tanggal Kembali</label>
              <input type="text" name="tgl_kembali" class="form-control datepicker" id="tgl_kembali" aria-describedby="tgl_kembali" value="">
          </div>
          <div class="form-group">
              <label for="barang">Barang</label>
              <input type="text" name="barang" class="form-control" id="barang" aria-describedby="barang" value="">
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