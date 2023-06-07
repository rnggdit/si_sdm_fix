@section('title','Tambah Pegawai | PT KAI')
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
                  <h3 class="card-title">Tambah Data Pegawai</h3>
                </div>
              <!-- /.card-header -->
              <div class="card-body">
              <form action="/pegawai/store" method="post">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="nama">Nama Pegawai</label>
                    <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukkan Nama">
                  </div>
                  <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Masukkan Alamat">
                  </div>
                  <div class="form-group">
                    <label for="nomor_handphone">No Handphone</label>
                    <input type="text" class="form-control" name="nomor_handphone" id="nomor_handphone" placeholder="Masukkan Nomor Handphone">
                  </div>
                  <div class="form-group">
                    <label for="Jabatan">Jabatan</label>
                    <input type="text" class="form-control" name="jabatan" id="Jabatan" placeholder="Masukkan Jabatan">
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="submit" value="Save" class="btn btn-primary">Simpan</button>
                </div>
              </form>
              </div>
              <!-- /.card-body -->
          </div>
        </div>
      </div>
</div>