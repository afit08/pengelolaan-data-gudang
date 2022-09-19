@extends('template.layout')

@section('content')
<div class="row">
<div class="col-lg-12 margin-tb">
    <div class="pull-left">
        <h2>Create Barang Masuk</h2>
    </div>
</div>
</div>
@if (session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

<form action="{{ route('save-barangmasuk') }}" method="POST">
  {{ csrf_field() }}
  <div class="form-outline mb-4">
    <label class="form-label" for="form5Example2">Jumlah Barang Masuk</label>
    <input type="text" name="jlh_brg_masuk" class="form-control @error('jlh_brg_masuk') is-invalid @enderror" placeholder="Jumlah Barang Masuk" value="{{ old('jlh_brg_masuk') }}"/>
    @error('jlh_brg_masuk')
      <div class="invalid-feedback">{{ $message }}</div>
    @enderror
  </div>

  <div class="form-outline mb-4">
    <label class="form-label" for="form5Example2">Penerima</label>
    <input type="text" name="penerima" class="form-control @error('penerima') is-invalid @enderror" placeholder="Penerima" value="{{ old('penerima') }}"/>
    @error('penerima')
      <div class="invalid-feedback">{{ $message }}</div>
    @enderror
  </div>

  <div class="form-outline mb-4">
    <label class="form-label" for="form5Example2">Tanggal</label>
    <input type="date" name="tanggal" class="form-control @error('tanggal') is-invalid @enderror" placeholder="Tanggal" value="{{ old('tanggal') }}"/>
    @error('tanggal')
      <div class="invalid-feedback">{{ $message }}</div>
    @enderror
  </div>

  <label class="form-label" for="form5Example2">Pilih Nama Barang</label>
  <select class="form-select  mb-3" aria-label="Default select example" name="databarang_id" id="databarang_id">
    @foreach ($databarangs as $item)
    <option value="{{ $item->id }}">{{ $item->nama_barang }}</option>
    @endforeach
  </select>

  <label class="form-label" for="form5Example2">Pilih Nama Supplier</label>
  <select class="form-select  mb-3" aria-label="Default select example" name="datasupplier_id" id="datasupplier_id">
    @foreach ($datasuppliers as $supp)
    <option value="{{ $supp->id }}">{{ $supp->nama_supplier }}</option>
    @endforeach
  </select>
  <!-- Submit button -->
  <button type="submit" class="btn btn-primary btn-block mb-4">Save</button>
</form>
@endsection