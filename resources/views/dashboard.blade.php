@section('title','Dashboard | PT KAI')
@section('dashboard','active')

@include('layouts.header')

@include('layouts.navbar')

@include('layouts.sidebar')

@include('layouts.footer')
<div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div>
            <div class="col-sm-6">
          </div>
        </div>
      </div>
    </div>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>3</h3>

                <p>Pegawai</p>
              </div>
              <div class="icon">
                <i class="ion ion-person"></i>
              </div>
              <a href="/pegawai" class="small-box-footer">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>2</h3>

                <p>Absensi</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="/absensi" class="small-box-footer">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>3</h3>

                <p>Pengajuan Ijin</p>
              </div>
              <div class="icon">
                <i class="ion ion-calendar"></i>
              </div>
              <a href="/pengajuan" class="small-box-footer">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>3</h3>

                <p>Gaji</p>
              </div>
              <div class="icon">
                <i class="ion ion-cash"></i>
              </div>
              <a href="/gaji" class="small-box-footer">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>