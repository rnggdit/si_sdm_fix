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
    <title>DATA PEGAWAI</title>
</head>
<body>
    <div class="form-group">
        <p align="center"><b>Laporan Data Pegawai</b></p>
        <table class="static" align="center" rules="all" border="1px" style="width: 95%;">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>No Handphone</th>
            <th>Jabatan</th>
        </tr>
        @foreach($pegawai as $p)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$p->nama}}</td>
            <td>{{$p->alamat}}</td>
            <td>{{$p->nomor_handphone}}</td>
            <td>{{$p->jabatan}}</td>
        </tr>
        @endforeach
        </table>
    </div>

    <script type="text/javascript">
        window.print();
    </script>
</body>
</html>