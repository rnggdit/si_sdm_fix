@section('title','Pendidikan | PT KAI')
@section('pendidikan','active')

@include('layouts.header')

@include('layouts.navbar')

@include('layouts.sidebar')

@include('layouts.footer')
<div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Pendidikan</h1>
          </div>
        </div>
      </div>
    </section>

        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Data Daftar Pendidikan</h3>

                  <div class="card-tools">
                    <a href="/pendidikan/tambah" class="btn btn-success btn-sm">
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
                      <th>Pendidikan Terakhir</th>
                      <th>Asal</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach($pendidikan as $a)
                      <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$a->pendidikan_terakhir}}</td>
                        <td>{{$a->asal_pendidikan}}</td>
                        <td>
                          <div class="btn-group">
                            <button type="button" class="btn btn-default">Action</button>
                            <button type="button" class="btn btn-default dropdown-toggle dropdown-icon" data-toggle="dropdown">
                              <span class="sr-only">Toggle Dropdown</span>
                            </button>
                            <div class="dropdown-menu" role="menu">
                              <a class="dropdown-item" href="/pendidikan/{{$a->id}}/edit">Edit</a>
                              <a class="dropdown-item" href="/pendidikan/{{$a->id}}/hapus">Hapus</a>
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