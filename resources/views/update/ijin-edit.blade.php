@section('title','Edit Jenis Ijin | PT KAI')
@section('ijin','active')

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
                  <h3 class="card-title">Edit Data Jenis Ijin</h3>
                </div>
              <!-- /.card-header -->
              <div class="card-body">
              <form action="/ijin/{{$ijin->id}}" method="post">
                @csrf
                @method('PUT')
                <div class="card-body">
                  <div class="form-group">
                    <label for="nama">Alasan Ijin</label>
                    <input type="text" class="form-control" name="alasan_ijin" id="alasan_ijin" placeholder="Masukkan Alasan Ijin" value="{{$ijin->alasan_ijin}}">
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