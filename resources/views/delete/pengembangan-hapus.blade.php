@section('title','Hapus Pengembangan | PT KAI')
@section('pengembangan','active')

@include('layouts.header')

@include('layouts.navbar')

@include('layouts.sidebar')

@include('layouts.footer')
<div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Pengembangan</h1>
          </div>
        </div>
      </div>
    </section>

        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Hapus Data Pengembangan</h3>
                </div>
              <!-- /.card-header -->
              <div class="card-body">
                @csrf
                @method('PUT')
                <div class="card-body">
                <h4>Ingin Menghapus Data ?</h4>
                    <button type="submit" class="btn btn-block btn-danger btn-lg" name="hapus" style="width: 40%; margin: 20px auto;">
                    <a href="/pengembangan/{{$pengembangan->id}}/destroy">
                    Yes
                    </a>
                    </button>
                    <button type="submit" class="btn btn-block btn-success btn-lg" name="tidak" style="width: 40%; margin: 20px auto;">
                        <a href="/pengembangan">
                        No
                        </a>
                    </button>

              </div>
              <!-- /.card-body -->
          </div>
        </div>
      </div>
</div>