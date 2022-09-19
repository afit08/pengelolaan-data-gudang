@extends('template/user')

@section('content')
<h1 class="mb-5">Selamat Datang, {{auth()->user()->name}}</h1>

<p>Nama         : {{auth()->user()->name}}</p>
<p>Alamat       : {{auth()->user()->address}}</p>
<p>Email        : {{auth()->user()->email}}</p>
<p>No.Telepon   : {{auth()->user()->num_phone}}</p>
@endsection