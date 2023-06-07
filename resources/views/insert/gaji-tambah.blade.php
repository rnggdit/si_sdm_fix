@section('title','Tambah Gaji | PT KAI')
@section('gaji','active')

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
                  <h3 class="card-title">Tambah Data Gaji</h3>
                </div>
              <!-- /.card-header -->
              <div class="card-body">
              <form action="/gaji/store" method="post">
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
                    <label for="nama">Jumlah Gaji</label>
                    <input type="text" class="form-control" name="jumlah_gaji" id="jumlah_gaji" placeholder="Masukkan Jumlah Gaji">
                  </div>
                  <div class="form-group">
                    <label for="nama">Tunjangan</label>
                    <select class="form-control select2" style="width:100%;" name="tunjangan_id" id="tunjangan_id">
                    <option disabled value>Pilih Jenis Tunjangan</option>
                    @foreach ($tun as $a)
                    <option value="{{ $a->id }}">{{$a->nama_tunjangan}}</option>
                    @endforeach
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="alamat">Total Gaji</label>
                    <input type="text" class="form-control" name="total_gaji" id="total_gaji" placeholder="Masukkan Total Gaji">
                  </div>
                  <div class="form-group">
                    <label for="nomor_handphone">Tanggal Gajian</label>
                    <input type="date" class="form-control" name="tanggal_gaji" id="tanggal_gaji">
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