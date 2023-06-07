@section('title','Tunjangan | PT KAI')
@section('tunjangan','active')

@include('layouts.header')

@include('layouts.navbar')

@include('layouts.sidebar')

@include('layouts.footer')
<div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Tunjangan</h1>
          </div>
        </div>
      </div>
    </section>

        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Data Tunjangan Pegawai</h3>

                  <div class="card-tools">
                    <a href="/tunjangan/tambah" class="btn btn-success btn-sm">
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
                      <th>Jenis Tunjangan</th>
                      <th>Nilai</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach($tunjangan as $a)
                      <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$a->nama_tunjangan}}</td>                       
                        <td>{{$a->nilai_tunjangan}}</td>
                        <td>
                          <div class="btn-group">
                            <button type="button" class="btn btn-default">Action</button>
                            <button type="button" class="btn btn-default dropdown-toggle dropdown-icon" data-toggle="dropdown">
                              <span class="sr-only">Toggle Dropdown</span>
                            </button>
                            <div class="dropdown-menu" role="menu">
                              <a class="dropdown-item" href="/tunjangan/{{$a->id}}/edit">Edit</a>
                              <a class="dropdown-item" href="/tunjangan/{{$a->id}}/hapus">Hapus</a>
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