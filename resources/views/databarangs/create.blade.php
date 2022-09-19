@extends('template.layout')

@section('content')
<div class="row">
<div class="col-lg-12 margin-tb">
    <div class="pull-left">
        <h2>Create Data Barang</h2>
    </div>
</div>
</div>

@if (session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

<form action="{{ route('save-databarang') }}" method="POST">
  {{ csrf_field() }}
  <div class="form-outline mb-4">
    <label class="form-label" for="form5Example1">Kode Barang</label>
    <input type="text" name="kode_barang" class="form-control @error('kode_barang') is-invalid @enderror" placeholder="Kode Barang" value="{{ old('kode_barang') }}"/>
    @error('kode_barang')
      <div class="invalid-feedback">{{ $message }}</div>
    @enderror
  </div>

  <div class="form-outline mb-4">
    <label class="form-label" for="form5Example2">Nama Barang</label>
    <input type="text" name="nama_barang" class="form-control @error('nama_barang') is-invalid @enderror" placeholder="Nama Barang" value="{{ old('nama_barang') }}"/>
    @error('nama_barang')
      <div class="invalid-feedback">{{ $message }}</div>
    @enderror
  </div>
 
  <div class="form-outline mb-4">
    <label class="form-label" for="form5Example2">Stok</label>
    <input type="text" name="stok" class="form-control @error('stok') is-invalid @enderror" placeholder="Stok" value="{{ old('stok') }}"/>
    @error('stok')
      <div class="invalid-feedback">{{ $message }}</div>
    @enderror
  </div>

  <!-- Submit button -->
  <button type="submit" class="btn btn-primary btn-block mb-4">Save</button>
</form>
@endsection