@section('title','Tambah Tunjangan | PT KAI')
@section('tunjangan','active')

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
                  <h3 class="card-title">Tambah Tunjangan</h3>
                </div>
              <!-- /.card-header -->
              <div class="card-body">
              <form action="/tunjangan/store" method="post">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="nama">Nama Tunjangan</label>
                    <input type="text" class="form-control" name="nama_tunjangan" id="nama_tunjangan" placeholder="Masukkan Nama Tunjangan">
                  </div>
                  <div class="form-group">
                    <label for="nilai">Nilai Tunjangan</label>
                    <input type="text" class="form-control" name="nilai_tunjangan" id="nilai_tunjangan" placeholder="Masukkan Nilai Tunjangan">
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