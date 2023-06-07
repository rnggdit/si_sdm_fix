@section('title','Pegawai | PT KAI')
@section('pegawai','active')

@include('layouts.header')

@include('layouts.navbar')

@include('layouts.sidebar')

@include('layouts.footer')
<div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Pegawai</h1>
          </div>
        </div>
      </div>
    </section>

        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Data Pegawai</h3>

                  <div class="card-tools">
                    <a href="/pegawai/cetak" target="_blank" class="btn btn-warning btn-sm">
                        <i class="fa fa-file"></i> Cetak
                    </a>
                    <a href="/pegawai/tambah" class="btn btn-success btn-sm">
                        <i class="fa fa-plus"></i> Tambah
                    </a>
                  </div>
                </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama</th>
                      <th>Alamat</th>
                      <th>No Handphone</th>
                      <th>Jabatan</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody> 
                  @foreach($pegawai as $p)
                  <tr>
                      <td>{{$loop->iteration}}</td>
                      <td>{{$p->nama}}</td>
                      <td>{{$p->alamat}}</td>
                      <td>{{$p->nomor_handphone}}</td>
                      <td>{{$p->jabatan}}</td>
                      <td>
                        <div class="btn-group">
                          <button type="button" class="btn btn-default">Action</button>
                          <button type="button" class="btn btn-default dropdown-toggle dropdown-icon" data-toggle="dropdown">
                            <span class="sr-only">Toggle Dropdown</span>
                          </button>
                          <div class="dropdown-menu" role="menu">
                            <a class="dropdown-item" href="/pegawai/{{$p->id}}/edit">Edit</a>
                            <a class="dropdown-item" href="/pegawai/{{$p->id}}/hapus">Hapus</a>
                          </div>
                        </div>
                      </td>
                    </tr>
                  @endforeach   
                  </tbody>
                </table>
              </div>
              @method('PUT')
          </div>
        </div>
      </div>
</div>