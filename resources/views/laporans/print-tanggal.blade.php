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
    <title>CETAK DATA BARANG MASUK</title>
</head>
<body>
    <div class="form-group">
        <p align="center"><b>Laporan Data Barang Masuk</b></p>
        <table class="static" align="center" rules="all" border="1px" style="width: 95%;">
        <tr>
            <th>No</th>
            <th>Tanggal Masuk</th>
            <th>Jumlah Barang Masuk</th>
            <th>Tanggal Keluar</th>
            <th>Jumlah Barang Keluar</th>
            <th>Kode Barang</th>
            <th>Nama Barang</th>
            <th>Stok Akhir</th>
        </tr>
        @foreach($laporans as $l => $item)
    <tr>
        <td>{{$loop->iteration}}</td>
        <td>{{$item->tanggal}}</td>
        <td>{{$item->jlh_brg_masuk}}</td>
        <td>{{$item->tanggal_keluar}}</td>
        <td>{{$item->jlh_brg_keluar}}</td>
        <td>{{$item->Databarang->kode_barang}}</td>
        <td>{{$item->Databarang->nama_barang}}</td>
        <td>{{$item->Databarang->stok}}</td>
    </tr>
@endforeach
        </table>
    </div>
    <script type="text/javascript">
        window.print();
    </script>
</body>
</html>