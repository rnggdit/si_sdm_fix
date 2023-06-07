@section('title','Absensi | PT KAI')
@section('absensi','active')

@include('layouts.header')

@include('layouts.navbar')

@include('layouts.sidebar')

@include('layouts.footer')

  <div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Absensi</h1>
          </div>
        </div>
      </div>
    </section>

        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Data Absensi</h3>

                  <div class="card-tools">
                    <a href="/absensi/cetak" target="_blank" class="btn btn-warning btn-sm">
                          <i class="fa fa-file"></i> Cetak
                      </a>
                    <a href="/absensi/tambah" class="btn btn-success btn-sm">
                        <i class="fa fa-plus"></i> Tambah
                    </a>
                  </div>
                </div>
                
                  <div class="card-body">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Nama</th>
                          <th>Tanggal</th>
                          <th>Jam Masuk</th>
                          <th>Jam Istirahat</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach($absensi as $a)
                      <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$a->pegawai->nama}}</td>
                        <td>{{$a->tanggal_kerja}}</td>
                        <td>{{$a->jam_masuk}}</td>
                        <td>{{$a->jam_istirahat}}</td>
                        <td>
                          <div class="btn-group">
                            <button type="button" class="btn btn-default">Action</button>
                            <button type="button" class="btn btn-default dropdown-toggle dropdown-icon" data-toggle="dropdown">
                              <span class="sr-only">Toggle Dropdown</span>
                            </button>
                            <div class="dropdown-menu" role="menu">
                              <a class="dropdown-item" href="/absensi/{{$a->id}}/edit">Edit</a>
                              <a class="dropdown-item" href="/absensi/{{$a->id}}/hapus">Hapus</a>
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