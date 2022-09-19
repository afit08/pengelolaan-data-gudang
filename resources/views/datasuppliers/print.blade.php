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
    <title>CETAK DATA SUPPLIER</title>
</head>
<body>
    <div class="form-group">
        <p align="center"><b>Laporan Data Supplier</b></p>
        <table class="static" align="center" rules="all" border="1px" style="width: 95%;">
        <tr>
            <th>No</th>
            <th>Kode Supplier</th>
            <th>Nama Supplier</th>
            <th>Alamat</th>
            <th>Email</th>
            <th>No Telepon</th>
        </tr>
        @foreach ($datasuppliers as $datasupplier)
            <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$datasupplier->kode_supplier}} </td>
            <td>{{$datasupplier->nama_supplier}}</td>
            <td>{{$datasupplier->alamat}}</td>
            <td>{{$datasupplier->email}}</td>
            <td>{{$datasupplier->no_tlp}}</td>
            </tr>
        @endforeach
        </table>
    </div>
    <script type="text/javascript">
        window.print();
    </script>
</body>
</html>