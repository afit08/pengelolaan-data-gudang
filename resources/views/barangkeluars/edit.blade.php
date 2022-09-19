@extends('template.layout')

@section('content')
<div class="row">
<div class="col-lg-12 margin-tb">
    <div class="pull-left">
        <h2>Edit Barang Keluar</h2>
    </div>
</div>
</div>
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@foreach($barangkeluars as $bk)
<form action="/barangkeluar/update" method="POST">
{{ csrf_field() }}
  <div class="row">
  <input type="hidden" name="id" value="{{ $bk->id }}"> <br/>
<div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
        <strong>Jumlah Barang Keluar</strong>
        <input type="text" name="jlh_brg_keluar" value="{{ $bk->jlh_brg_keluar }}" class="form-control" placeholder="Name">
    </div>
</div>

<div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
        <strong>Tujuan</strong>
        <input type="text" name="tujuan" value="{{ $bk->tujuan }}" class="form-control" placeholder="Name">
    </div>
</div>

<div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
        <strong>Tanggal</strong>
        <input type="date" name="tanggal_keluar" value="{{ $bk->tanggal_keluar }}" class="form-control" placeholder="Name">
    </div>
</div>

<div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
        <strong>Operator</strong>
        <input type="text" name="operator" value="{{ $bk->operator }}" class="form-control" placeholder="Name">
    </div>
</div>
<input type="hidden" name="databarang_id" value="{{ $bk->databarang_id }}">
<div class="col-xs-12 col-sm-12 col-md-12 text-center">
  <button type="submit" class="btn btn-primary">Submit</button>
</div>
</div>
</form>
@endforeach
@endsection