@section('title','Edit Pengguna | PT KAI')
@section('pengguna','active')

@include('layouts.header')

@include('layouts.navbar')

@include('layouts.sidebar')

@include('layouts.footer')
<div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
        </div>
      </div>
    </section>

        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Edit Data Pengguna</h3>
                </div>
              <!-- /.card-header -->
              <div class="card-body">
              <form action="/pengguna/{{$pengguna->id}}" method="post">
                @csrf
                @method('PUT')
                <div class="card-body">
                  <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Masukkan Nama Pengguna" value="{{$pengguna->name}}">
                  </div>
                  <div class="form-group">
                    <label for="nama">Email Pengguna</label>
                    <input type="text" class="form-control" name="email" id="email" placeholder="Masukkan Email Pengguna" value="{{$pengguna->email}}">
                  </div>
                  <div class="form-group">
                    <label for="nilai">Password Pengguna</label>
                    <input type="text" class="form-control" name="password" id="password" placeholder="Masukkan Password Pengguna" value="{{$pengguna->password}}">
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="submit" value="Save" class="btn btn-success">Simpan</button>
                </div>
              </form>
              </div>
              <!-- /.card-body -->
          </div>
        </div>
      </div>
</div>