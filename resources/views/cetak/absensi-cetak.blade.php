<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <style>
        table.static {
            position: relative;
            border: 1px solid #543535;
        }
    </style>
    <title>DATA ABSENSI</title>
</head>
<body>
    <div class="form-group">
        <p align="center"><b>Laporan Data Absensi Pegawai</b></p>
        <table class="static" align="center" rules="all" border="1px" style="width: 95%;">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Tanggal</th>
            <th>Jam Masuk</th>
            <th>Jam Istirahat</th>
        </tr>
        @foreach($absensi as $a)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$a->pegawai->nama}}</td>
            <td>{{$a->tanggal_kerja}}</td>
            <td>{{$a->jam_masuk}}</td>
            <td>{{$a->jam_istirahat}}</td>
        </tr>
        @endforeach
        </table>
    </div>

    <script type="text/javascript">
        window.print();
    </script>
</body>
</html>