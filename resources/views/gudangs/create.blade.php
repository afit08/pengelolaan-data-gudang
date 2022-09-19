@extends('template.layout')

@section('content')
<div class="row">
<div class="col-lg-12 margin-tb">
    <div class="pull-left">
        <h2>Create Data Barang</h2>
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

      <form action="{{route('save-gudang')}}" method="post">
        {{csrf_field()}}
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Full name" name="name">
        </div>

        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Address" name="address">
        </div>

        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Number Phone" name="num_phone">
        </div>

        <div class="input-group mb-3">
          <input type="email" class="form-control" placeholder="Email" name="email">
        </div>

        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Password" name="password">
        </div>
        <div class="row">
          <!-- /.col -->
          <div class="col-12">
            <button type="submit" class="btn btn-primary btn-block">Register</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
      @endsection

