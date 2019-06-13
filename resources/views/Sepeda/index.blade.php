@extends('Sepeda.layout')

@section('title')
Sepeda
@endsection

@section('content')
<a href="{{ url('Sepeda/create') }}" class="btn btn-success btn-sm">
    Tambah Sepeda
</a>
<table class="table">
    <thead>
        <tr>
            <th>Id</th>
            <th>No_Seri</th>
            <th>Nama</th>
            <th>Jenis</th>
            <th>Warna</th>
        </tr>
    </thead>
    <tbody>
        @foreach($data as $i => $value)
        <tr>
            <td>{{ $i+1 }}</td>
            <td>{{ $value->no_seri }}</td>
            <td>{{ $value->nama }}</td>
            <td>{{ $value->jenis }}</td>
            <td>{{ $value->warna }}</td>
            <td>
                <a href="{{ url('Sepeda/'.$value->id.'/edit') }}" class="btn btn-warning btn-sm">Ubah</a> |
               <form action=" {{url('Sepeda/'.$value->id) }}" method="POST">
                {{ csrf_field () }}
                <input type="hidden" name="_method" value="DELETE">
                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm ('yakin kamu ingin hapus?')">
                    Hapus
                    
                </button>
               </form>
                
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection