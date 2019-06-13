@extends('Sepeda.layout')

@section('title')
Tambah Data Sepeda
@endsection

@section('content')
<a href="{{ url('Sepeda') }}" class="btn btn-success btn-sm">
	Daftar Sepeda
</a>
<form method="post" action="{{ url('Sepeda') }}">
	{{ csrf_field() }}
	<div class="form-group">
		<label>No_seri Sepeda</label>
		<input type="number" name="no_seri" class="form-control">
	</div>
	<div class="form-group">
		<label>Nama Sepeda</label>
		<input type="text" name="nama" class="form-control">
	</div>
	<div class="form-group">
		<label>Jenis Sepeda</label>
		<textarea name="jenis" class="form-control"></textarea>
	</div>
	<div class="form-group">
		<label>Warna Sepeda</label>
		<textarea name="warna" class="form-control"></textarea>
	</div>
	<button type="submit" class="btn btn-success btn-block">
		Tambah Data
	</button>
</form>
@endsection