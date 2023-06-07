@section('title','Pengguna | PT KAI')
@section('pengguna','active')

@include('layouts.header')

@include('layouts.navbar')

@include('layouts.sidebar')

@include('layouts.footer')
<div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Pengguna</h1>
          </div>
        </div>
      </div>
    </section>

        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Data Pengguna</h3>
                </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama</th>
                      <th>Email</th>
                      <th>Password</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach($pengguna as $a)
                      <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$a->name}}</td>
                        <td>{{$a->email}}</td>                       
                        <td>{{$a->password}}</td>
                        <td>
                          <div class="btn-group">
                            <button type="button" class="btn btn-default">Action</button>
                            <button type="button" class="btn btn-default dropdown-toggle dropdown-icon" data-toggle="dropdown">
                              <span class="sr-only">Toggle Dropdown</span>
                            </button>
                            <div class="dropdown-menu" role="menu">
                              <a class="dropdown-item" href="/pengguna/{{$a->id}}/edit">Edit</a>
                              <a class="dropdown-item" href="/pengguna/{{$a->id}}/hapus">Hapus</a>
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