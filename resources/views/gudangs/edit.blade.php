@extends('template.layout')

@section('content')
<div class="row">
<div class="col-lg-12 margin-tb">
    <div class="pull-left">
        <h2>Edit Data Barang</h2>
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

<form action="{{ url('update-gudangs',$users->id) }}" method="POST">
{{ csrf_field() }}
  <div class="row">
  <div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
        <strong>Full Name</strong>
        <input type="text" name="name" value="{{ $users->name }}" class="form-control" placeholder="Full Name">
    </div>
</div>

<div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
        <strong>Level</strong>
        <input type="text" name="level" value="{{ $users->level }}" class="form-control" placeholder="Level">
    </div>
</div>

<div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
        <strong>Address</strong>
        <input type="text" name="address" value="{{ $users->address }}" class="form-control" placeholder="Address">
    </div>
</div>

<div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
        <strong>Number Phone</strong>
        <input type="text" name="num_phone" value="{{ $users->num_phone }}" class="form-control" placeholder="Number Phone">
    </div>
</div>

<div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
        <strong>Email</strong>
        <input type="text" name="email" value="{{ $users->email }}" class="form-control" placeholder="Email">
    </div>
</div>

<div class="col-xs-12 col-sm-12 col-md-12 text-center">
  <button type="submit" class="btn btn-primary">Submit</button>
</div>
</div>
</form>
@endsection