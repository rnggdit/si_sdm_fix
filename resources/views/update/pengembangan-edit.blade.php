@section('title','Edit Pengembangan Diri | PT KAI')
@section('pengembangan','active')

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
                  <h3 class="card-title">Edit Data Pengembangan Diri</h3>
                </div>
              <!-- /.card-header -->
              <div class="card-body">
              <form action="/pengembangan/{{$pengembangan->id}}" method="post">
                @csrf
                @method('PUT')
                <div class="card-body">
                  <div class="form-group">
                    <label for="nama">Nama</label>
                    <select class="form-control select2" style="width:100%;" name="pegawai_id" id="pegawai_id">
                    <option value="{{ $pengembangan->pegawai_id }}">{{$pengembangan->pegawai->nama}}</option>
                    @foreach ($peg as $a)
                    <option value="{{ $a->id }}">{{$a->nama}}</option>
                    @endforeach
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="nama">Nama Pengembangan</label>
                    <input type="text" class="form-control" name="nama_pengembangan" id="nama_pengembangan" placeholder="Masukkan Nama Pengembangan Diri" value="{{$pengembangan->nama_pengembangan}}">
                  </div>
                  <div class="form-group">
                    <label for="nama">Pendidikan Terakhir</label>
                    <select class="form-control select2" style="width:100%;" name="pendidikan_id" id="pendidikan_id">
                    <option value="{{ $pengembangan->pendidikan_id }}">{{$pengembangan->pendidikan->asal_pendidikan}}</option>
                    @foreach ($pend as $a)
                    <option value="{{ $a->id }}">{{$a->asal_pendidikan}}</option>
                    @endforeach
                    </select>
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