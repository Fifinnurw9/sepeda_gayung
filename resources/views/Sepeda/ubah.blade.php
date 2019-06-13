@extends('Sepeda.layout')

@section('title')
Ubah Data Sepeda
@endsection

@section('content')
<a href="{{ url('Sepeda') }}" class="btn btn-success btn-sm">
	Daftar Mahasiswa
</a>
<form method="post" action="{{ url('Sepeda/'.$spd->id) }}">
	{{ csrf_field() }}
	<input type="hidden" name="_method" value="PUT">
	<div class="form-group">
		<label>No_seri Sepeda</label>
		<input type="no_seri" name="no_seri" value="{{ $spd->no_seri }}" class="form-control">
	</div>
	<div class="form-group">
		<label>Nama Sepeda</label>
		<input type="text" name="nama" value="{{ $spd->nama }}" class="form-control">
	</div>
	<div class="form-group">
		<label>Jenis Sepeda</label>
		<input type="text" name="jenis" value="{{ $spd->jenis }}" class="form-control">
	</div>
	<div class="form-group">
		<label>Warna Sepeda</label>
		<input type="text" name="warna" value="{{ $spd->warna }}" class="form-control">
	</div>
	<!-- <div class="form-group">
		<label>Jenis Sepeda</label>
		<textarea name="jenis" class="form-control">{{ $spd->jenis }}</textarea>
	</div>
	<div class="form-group">
		<label>Warna Sepeda</label>
		<textarea name="warna" class="form-control">{{ $spd->warna }}</textarea>
	</div> -->
	<button type="submit" class="btn btn-warning btn-block">
		Ubah Data
	</button>
</form>
@endsection