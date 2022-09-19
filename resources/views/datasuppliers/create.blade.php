@extends('template.layout')

@section('content')
<div class="row">
<div class="col-lg-12 margin-tb">
    <div class="pull-left">
        <h2>Create Data Supplier</h2>
    </div> 
</div>
</div>
@if (session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

<form action="{{ route('save-datasupplier') }}" method="POST">
{{ csrf_field() }}
  <div class="form-outline mb-4">
    <label class="form-label" for="form5Example1">Kode Supplier</label>
    <input type="text" name="kode_supplier" class="form-control @error('kode_supplier') is-invalid @enderror" placeholder="Kode Supplier" value="{{ old('kode_supplier') }}"/>
    @error('kode_supplier')
      <div class="invalid-feedback">{{ $message }}</div>
    @enderror
  </div>

  <div class="form-outline mb-4">
    <label class="form-label" for="form5Example2">Nama Supplier</label>
    <input type="text" name="nama_supplier" class="form-control @error('nama_supplier') is-invalid @enderror" placeholder="Nama Supplier" value="{{ old('nama_supplier') }}"/>
    @error('nama_supplier')
      <div class="invalid-feedback">{{ $message }}</div>
    @enderror
  </div>

  <div class="form-outline mb-4">
    <label class="form-label" for="form5Example2">Alamat</label>
    <input type="text" name="alamat" class="form-control @error('alamat') is-invalid @enderror" placeholder="Alamat" value="{{ old('alamat') }}"/>
    @error('alamat')
      <div class="invalid-feedback">{{ $message }}</div>
    @enderror
  </div>

  <div class="form-outline mb-4">
    <label class="form-label" for="form5Example2">Email</label>
    <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" value="{{ old('email') }}"/>
    @error('email')
      <div class="invalid-feedback">{{ $message }}</div>
    @enderror
  </div>
  
  <div class="form-outline mb-4">
    <label class="form-label" for="form5Example2">No Telepon</label>
    <input type="text" name="no_tlp" class="form-control @error('no_tlp') is-invalid @enderror" placeholder="No Telepon" value="{{ old('no_tlp') }}"/>
    @error('no_tlp')
      <div class="invalid-feedback">{{ $message }}</div>
    @enderror
  </div>

  <!-- Submit button -->
  <button type="submit" class="btn btn-primary btn-block mb-4">Save</button>
</form>
@endsection