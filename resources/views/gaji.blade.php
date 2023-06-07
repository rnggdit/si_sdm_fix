@section('title','Gaji | PT KAI')
@section('gaji','active')

@include('layouts.header')

@include('layouts.navbar')

@include('layouts.sidebar')

@include('layouts.footer')
<div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Ijin</h1>
          </div>
        </div>
      </div>
    </section>

        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Data Gaji Pegawai</h3>

                  <div class="card-tools">
                    <a href="/gaji/cetak" target="_blank" class="btn btn-warning btn-sm">
                        <i class="fa fa-file"></i> Cetak
                    </a>
                    <a href="/gaji/tambah" class="btn btn-success btn-sm">
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
                      <th>Jumlah</th>
                      <th>Tunjangan</th>
                      <th>Total</th>
                      <th>Tanggal</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach($gaji as $a)
                      <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$a->pegawai->nama}}</td>
                        <td>{{$a->jumlah_gaji}}</td>
                        <td>{{$a->tunjangan->nilai_tunjangan}}</td>
                        <td>{{$a->total_gaji}}</td>
                        <td>{{$a->tanggal_gaji}}</td>
                        <td>
                          <div class="btn-group">
                            <button type="button" class="btn btn-default">Action</button>
                            <button type="button" class="btn btn-default dropdown-toggle dropdown-icon" data-toggle="dropdown">
                              <span class="sr-only">Toggle Dropdown</span>
                            </button>
                            <div class="dropdown-menu" role="menu">
                              <a class="dropdown-item" href="/gaji/{{$a->id}}/edit">Edit</a>
                              <a class="dropdown-item" href="/gaji/{{$a->id}}/hapus">Hapus</a>
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