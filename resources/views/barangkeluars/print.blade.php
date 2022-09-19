<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <style>
        table.static{
            position: relative;
            border: 1px solid #543535;
        }
    </style>
    <title>CETAK DATA BARANG KELUAR</title>
</head>
<body>
    <div class="form-group">
        <p align="center"><b>Laporan Data Barang Keluar</b></p>
        <table class="static" align="center" rules="all" border="1px" style="width: 95%;">
        <tr>
            <th>No</th>
            <th>Kode Barang</th>
            <th>Nama Barang</th>
            <th>Jumlah Barang Keluar</th>
            <th>Tujuan</th>
            <th>Tanggal</th>
            <th>Operator</th>
        </tr>
        @foreach ($barangkeluars as $barangkeluar)
            <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$barangkeluar->Databarang->kode_barang}}</td>
            <td>{{$barangkeluar->Databarang->nama_barang}}</td>
            <td>{{$barangkeluar->jlh_brg_keluar}}</td>
            <td>{{$barangkeluar->tujuan}}</td>
            <td>{{$barangkeluar->tanggal_keluar}}</td>
            <td>{{$barangkeluar->operator}}</td>
            </tr>
        @endforeach
        </table>
    </div>
    <script type="text/javascript">
        window.print();
    </script>
</body>
</html>