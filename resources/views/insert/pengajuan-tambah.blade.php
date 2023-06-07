@section('title','Tambah Pengajuan Ijin | PT KAI')
@section('pengajuan','active')

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
                  <h3 class="card-title">Tambah Data Pengajuan Ijin</h3>
                </div>
              <!-- /.card-header -->
              <div class="card-body">
              <form action="/pengajuan/store" method="post">
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
                    <label for="mulaiizin">Tanggal Mulai Izin</label>
                    <input type="date" class="form-control" name="tgl_mulaiizin" id="tgl_mulaiizin">
                  </div>  
                  <div class="form-group">
                    <label for="selesaiizin">Tanggal Selesai Izin</label>
                    <input type="date" class="form-control" name="tgl_selesaiizin" id="tgl_selesaiizin">
                  </div>
                  <div class="form-group">
                    <label for="tglpengajuan">Tanggal Pengajuan</label>
                    <input type="date" class="form-control" name="tgl_pengajuan" id="tgl_pengajuan">
                  </div>
                  <div class="form-group">
                    <label for="nama">Alasan Ijin</label>
                    <select class="form-control select2" style="width:100%;" name="ijin_id" id="ijin_id">
                    <option disabled value>Pilih Alasan Ijin</option>
                    @foreach ($jin as $a)
                    <option value="{{ $a->id }}">{{$a->alasan_ijin}}</option>
                    @endforeach
                    </select>
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