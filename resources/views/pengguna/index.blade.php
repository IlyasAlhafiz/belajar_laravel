@extends('layouts.app')

@section('content')
@include('sweetalert::alert')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Data Pengguna</div>
                <div class="card-body">
                
                    <div class="mb-3">
                        <a href="{{ route('pengguna.create') }}" class="btn btn-primary">Add</a>
                        <a href="{{ route('telepon.index') }}" class="btn btn-primary">Tambah Telepon</a>
                    </div>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Nama Lengkap</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $id = 1; @endphp
                            @foreach($pengguna as $data)
                            <tr>
                                <th scope="row">{{ $id++ }}</th>
                                <td>{{ $data->nama }}</td>
                                <td>
                                    <a href="{{ route('pengguna.edit', $data->id) }}" class="btn btn-success">Edit</a>
                                    <a href="{{ route('pengguna.show', $data->id) }}" class="btn btn-warning">Show</a>
                                    <form action="{{ route('pengguna.destroy', $data->id) }}" method="POST" style="display:inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin?')">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach 
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection