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
    <title>CETAK DATA BARANG</title>
</head>
<body>
    <div class="form-group">
        <p align="center"><b>Laporan Data Barang</b></p>
        <table class="static" align="center" rules="all" border="1px" style="width: 95%;">
        <tr>
            <th>No</th>
            <th>Kode Barang</th>
            <th>Nama Barang</th>
            <th>Stok</th>
        </tr>
        @foreach($databarangs as $databarang)
    <tr>
        <td>{{$loop->iteration}}</td>
        <td>{{ $databarang->kode_barang }}</td>
		<td>{{ $databarang->nama_barang }}</td>
	    <td>{{ $databarang->stok }}</td>
    </tr>
@endforeach
        </table>
    </div>
    <script type="text/javascript">
        window.print();
    </script>
</body>
</html>