@extends('template.layout')

@section('content')
<div class="row">
<div class="col-lg-12 margin-tb">
    <div class="pull-left">
        <h2>Edit Data Supplier</h2>
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

<form action="{{ url('update-datasuppliers',$datasuppliers->id) }}" method="POST">
{{ csrf_field() }}
  <div class="row">
<div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
        <strong>Kode Supplier</strong>
        <input type="text" name="kode_supplier" value="{{ $datasuppliers->kode_supplier }}" class="form-control" placeholder="Kode Supplier">
    </div>
</div>

<div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
        <strong>Nama Supplier</strong>
        <input type="text" name="nama_supplier" value="{{ $datasuppliers->nama_supplier }}" class="form-control" placeholder="Nama Supplier">
    </div>
</div>

<div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
        <strong>Alamat</strong>
        <input type="text" name="alamat" value="{{ $datasuppliers->alamat }}" class="form-control" placeholder="Alamat">
    </div>
</div>

<div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
        <strong>Email</strong>
        <input type="text" name="email" value="{{ $datasuppliers->email }}" class="form-control" placeholder="Email">
    </div>
</div>

<div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
        <strong>No Telepon</strong>
        <input type="text" name="no_tlp" value="{{ $datasuppliers->no_tlp }}" class="form-control" placeholder="No Telepon">
    </div>
</div>

<div class="col-xs-12 col-sm-12 col-md-12 text-center">
  <button type="submit" class="btn btn-primary">Submit</button>
</div>
</div>
</form>
@endsection