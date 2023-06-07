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
    <title>DATA GAJI</title>
</head>
<body>
    <div class="form-group">
        <p align="center"><b>Laporan Data Gaji Pegawai</b></p>
        <table class="static" align="center" rules="all" border="1px" style="width: 95%;">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Jumlah</th>
            <th>Tunjangan</th>
            <th>Total</th>
            <th>Tanggal</th>
        </tr>
        </thead>
        <tbody>
        @foreach($gaji as $a)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$a->pegawai->nama}}</td>
            <td>{{$a->jumlah_gaji}}</td>
            <td>{{$a->tunjangan->nilai_tunjangan}}</td>
            <td>{{$a->total_gaji}}</td>
            <td>{{$a->tanggal_gaji}}</td>
        </tr>
        @endforeach
        </table>
    </div>

    <script type="text/javascript">
        window.print();
    </script>
</body>
</html>