@section('title','Pengajuan Ijin | PT KAI')
@section('pengajuan','active')

@include('layouts.header')

@include('layouts.navbar')

@include('layouts.sidebar')

@include('layouts.footer')
<div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Pengajuan Ijin</h1>
          </div>
        </div>
      </div>
    </section>

        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Data Pengajuan Ijin Pegawai</h3>

                  <div class="card-tools">
                    <a href="/pengajuan/tambah" class="btn btn-success btn-sm">
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
                      <th>Tanggal Mulai</th>
                      <th>Tanggal Selesai</th>
                      <th>Alasan Ijin</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach($pengajuan as $a)
                      <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$a->pegawai->nama}}</td>
                        <td>{{$a->tgl_mulaiizin}}</td>                       
                        <td>{{$a->tgl_selesaiizin}}</td>
                        <td>{{$a->ijin->alasan_ijin}}</td>
                        <td>
                          <div class="btn-group">
                            <button type="button" class="btn btn-default">Action</button>
                            <button type="button" class="btn btn-default dropdown-toggle dropdown-icon" data-toggle="dropdown">
                              <span class="sr-only">Toggle Dropdown</span>
                            </button>
                            <div class="dropdown-menu" role="menu">
                              <a class="dropdown-item" href="/pengajuan/{{$a->id}}/edit">Edit</a>
                              <a class="dropdown-item" href="/pengajuan/{{$a->id}}/hapus">Hapus</a>
                            </div>
                          </div>
                        </td>
                      </tr>
                   @endforeach
                   @method('PUT') 
                  </tbody>
                </table>
              </div>
          </div>
        </div>
    </div>
</div>