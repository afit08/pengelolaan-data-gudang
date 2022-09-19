@extends('template/layout')

@section('content')
<div class="row">
<div class="col-lg-12 margin-tb">
    <div class="pull-left">
        <h2>Data Bagian Gudang</h2>
    </div>
    <div class="pull-right" style="text-align: right;">
        <a class="btn btn-success" href="{{ route('create-gudang') }}"> Create</a>
    </div>
</div>
</div>
@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div> 
@endif
<br>
<div class="table-responsive">
<table class="table align-middle mb-0 bg-white" id="dataTable">
  <thead class="bg-light">
    <tr>
      <th>No</th>
      <th>Full Name</th>
      <th>Level</th>
      <th>Address</th>
      <th>Number Phone</th>
      <th>Email</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($users as $user)
    <tr>
      <td>{{$loop->iteration}}</td>
      <td>{{$user->name}} </td>
      <td>{{$user->level}}</td>
      <td>{{$user->address}}</td>
      <td>{{$user->num_phone}}</td>
      <td>{{$user->email}}</td>
      <td>
          <a href="{{ url('edit-gudangs',$user->id) }}">Edit</a> 
          | 
          <a href="{{ url('delete-gudangs',$user->id) }}">Hapus</a>
          |
          <a href="{{ 'password' }}">Ubah Password</a>
      </td>
    </tr>
@endforeach
  </tbody>
</table>
</div>
@endsection