@section('title','Edit Pendidikan | PT KAI')
@section('pendidikan','active')

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
                  <h3 class="card-title">Edit Data Pendidikan</h3>
                </div>
              <!-- /.card-header -->
              <div class="card-body">
              <form action="/pendidikan/{{$pendidikan->id}}" method="post">
                @csrf
                @method('PUT')
                <div class="card-body">
                  <div class="form-group">
                    <label for="nama">Pendidikan Terakhir</label>
                    <input type="text" class="form-control" name="pendidikan_terakhir" id="pendidikan_terakhir" placeholder="Masukkan Pendidikan Terakhir" value="{{$pendidikan->pendidikan_terakhir}}">
                  </div>
                  <div class="form-group">
                    <label for="alamat">Asal Pendidikan</label>
                    <input type="text" class="form-control" name="asal_pendidikan" id="asal_pendidikan" placeholder="Masukkan Asal Pendidikan" value="{{$pendidikan->asal_pendidikan}}">
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