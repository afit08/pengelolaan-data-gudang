@extends('template.layout')

@section('content')
<div class="row">
<div class="col-lg-12 margin-tb">
    <div class="pull-left">
        <h2>Create Barang Keluar</h2>
    </div>
</div>
</div>
@if (session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

<form action="{{ route('save-barangkeluar') }}" method="POST">
  {{ csrf_field() }}
  <div class="form-outline mb-4">
    <label class="form-label" for="form5Example2">Jumlah Barang Keluar</label>
    <input type="text" name="jlh_brg_keluar" class="form-control @error('jlh_brg_keluar') is-invalid @enderror" placeholder="Jumlah Barang Keluar" value="{{ old('jlh_brg_keluar') }}"/>
    @error('jlh_brg_keluar')
      <div class="invalid-feedback">{{ $message }}</div>
    @enderror
  </div>

  <div class="form-outline mb-4">
    <label class="form-label" for="form5Example2">Tujuan</label>
    <input type="text" name="tujuan" class="form-control @error('tujuan') is-invalid @enderror" placeholder="Tujuan" value="{{ old('tujuan') }}"/>
    @error('tujuan')
      <div class="invalid-feedback">{{ $message }}</div>
    @enderror
  </div>

  <div class="form-outline mb-4">
    <label class="form-label" for="form5Example2">Tanggal</label>
    <input type="date" name="tanggal_keluar" class="form-control @error('tanggal_keluar') is-invalid @enderror" placeholder="Tanggal" value="{{ old('tanggal_keluar') }}"/>
    @error('tanggal_keluar')
      <div class="invalid-feedback">{{ $message }}</div>
    @enderror
  </div>

  <div class="form-outline mb-4">
    <label class="form-label" for="form5Example2">Operator</label>
    <input type="text" name="operator" class="form-control @error('operator') is-invalid @enderror" placeholder="Operator" value="{{ old('operator') }}"/>
    @error('operator')
      <div class="invalid-feedback">{{ $message }}</div>
    @enderror
  </div>

  <label class="form-label" for="form5Example2">Pilih Nama Barang</label>
  <select class="form-select  mb-3" aria-label="Default select example" name="databarang_id" id="databarang_id">
    @foreach ($databarangs as $item)
    <option value="{{ $item->id }}">{{ $item->nama_barang }}</option>
    @endforeach
  </select>

  <!-- Submit button -->
  <button type="submit" class="btn btn-primary btn-block mb-4">Save</button>
</form>
@endsection