@section('title','Tambah Absensi | PT KAI')
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
                  <h3 class="card-title">Tambah Data Absensi</h3>
                </div>
              <!-- /.card-header -->
              <div class="card-body">
              <form action="/absensi/store" method="post">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="nama">Nama</label>
                    <select class="form-control select2" style="width:100%;" name="pegawai_id" id="pegawai_id">
                    <option disabled value>Pilih Nama Anda</option>
                    @foreach ($peg as $a)
                    <option value="{{ $a->id }}">{{$a->nama}}</option>
                    @endforeach
                    </select>
                  </div>  
                  <div class="form-group">
                    <label for="alamat">Jam Masuk</label>
                    <input type="time" class="form-control" name="jam_masuk" id="jam_masuk">
                  </div>
                  <div class="form-group">
                    <label for="alamat">Jam Istirahat</label>
                    <input type="time" class="form-control" name="jam_istirahat" id="jam_istirahat">
                  </div>
                  <div class="form-group">
                    <label for="nomor_handphone">Tanggal Kerja</label>
                    <input type="date" class="form-control" name="tanggal_kerja" id="tanggal_kerja">
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