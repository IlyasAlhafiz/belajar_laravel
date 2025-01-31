@extends('layouts.app')

@section('content')
@include('sweetalert::alert')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Data penerbit</div>
                <div class="card-body">
                    <div class="mb-3">
                    <a href="{{ route('penerbit.create') }}" class="btn btn-primary">Add</a>
                    <a href="{{ route('buku.index') }}" class="btn btn-primary">Buku</a>
                    </div>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Nama penerbit</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $id = 1; @endphp
                            @foreach($penerbit as $data)
                            <tr>
                                <th scope="row">{{ $id++ }}</th>
                                <td>{{ $data->nama_penerbit }}</td>
                                <td>
                                    <a href="{{ route('penerbit.edit', $data->id) }}" class="btn btn-success">Edit</a>
                                    <a href="{{ route('penerbit.show', $data->id) }}" class="btn btn-warning">Show</a>
                                    <form action="{{ route('penerbit.destroy', $data->id) }}" method="POST" style="display:inline-block;">
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