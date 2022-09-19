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
            <th>Kode Barang</th>
            <th>Nama Barang</th>
            <th>Kode Supplier</th>
            <th>Nama Supplier</th>
            <th>Jumlah Barang Masuk</th>
            <th>Penerima</th>
            <th>Tanggal</th>
        </tr>
        @foreach ($barangmasuks as $barangmasuk)
            <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$barangmasuk->Databarang->kode_barang}}</td>
            <td>{{$barangmasuk->Databarang->nama_barang}}</td>
            <td>{{$barangmasuk->Datasupplier->kode_supplier}}</td>
            <td>{{$barangmasuk->Datasupplier->nama_supplier}}</td>
            <td>{{$barangmasuk->jlh_brg_masuk}}</td>
            <td>{{$barangmasuk->penerima}}</td>
            <td>{{$barangmasuk->tanggal}}</td>
            </tr>
        @endforeach
        </table>
    </div>
    <script type="text/javascript">
        window.print();
    </script>
</body>
</html>