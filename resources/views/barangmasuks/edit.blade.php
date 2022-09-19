@extends('template.layout')

@section('content')
<div class="row">
<div class="col-lg-12 margin-tb">
    <div class="pull-left">
        <h2>Edit Barang Masuk</h2>
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

@foreach($barangmasuks as $bm)
<form action="/barangmasuk/update" method="POST">
{{ csrf_field() }}
  <div class="row">
<input type="hidden" name="id" value="{{ $bm->id }}"> <br/>
<div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
        <strong>Jumlah Barang Masuk</strong>
        <input type="text" name="jlh_brg_masuk" value="{{ $bm->jlh_brg_masuk }}" class="form-control" placeholder="Name">
    </div>
</div>

<div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
        <strong>Penerima</strong>
        <input type="text" name="penerima" value="{{ $bm->penerima }}" class="form-control" placeholder="Name">
    </div>
</div>

<div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
        <strong>Tanggal</strong>
        <input type="date" name="tanggal" value="{{ $bm->tanggal }}" class="form-control" placeholder="Name">
    </div>
</div>

<input type="hidden" name="databarang_id" value="{{ $bm->databarang_id }}">

<div class="col-xs-12 col-sm-12 col-md-12 text-center">
  <button type="submit" class="btn btn-primary">Submit</button>
</div>
</div>
</form>
@endforeach
@endsection