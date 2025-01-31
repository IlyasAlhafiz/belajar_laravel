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
                        <a href="{{ route('telepon.create') }}" class="btn btn-primary">Add</a>
                        <a href="{{ route('pengguna.index') }}" class="btn btn-primary">Tambah Pengguna</a>
                    </div>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Nomor</th>
                                <th scope="col">Pengguna</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $id = 1; @endphp
                            @foreach($telepon as $data)
                            <tr>
                                <th scope="row">{{ $id++ }}</th>
                                <td>{{ $data->nomor }}</td>
                                <td>{{ $data->pengguna->nama }}</td>
                                <td>
                                    <a href="{{ route('telepon.edit', $data->id) }}" class="btn btn-success">Edit</a>
                                    <a href="{{ route('telepon.show', $data->id) }}" class="btn btn-warning">Show</a>
                                    <form action="{{ route('telepon.destroy', $data->id) }}" method="POST" style="display:inline-block;">
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