@extends('layout.app')

@section('content')
    <div class="mt-5">
        <div class="d-flex mb-3 justify-content-between flex-column flex-sm-row align-items-center">
            <h1>Rumah Sakit</h1>
            <a href="{{ route('hospitals.create') }}" class="btn btn-primary">+ Tambah Rumah Sakit</a>
        </div>
        <div class="table-responsive">
            <table class="table">
                <thead class="text-nowrap">
                    <tr>
                        <th>No.</th>
                        <th>Nama Rumah Sakit</th>
                        <th>Email</th>
                        <th>Alamat</th>
                        <th>No Telepon</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($hospitals as $hospital )
                        <tr id="row-{{ $hospital->id }}">
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $hospital->hospital_name }}</td>
                            <td>{{ $hospital->email }}</td>
                            <td>{{ $hospital->address }}</td>
                            <td>{{ $hospital->phone_number }}</td>
                            <td>
                                <div class="d-flex align-items-center gap-2">
                                    <a href="{{ route('hospitals.edit', $hospital->id) }}" class="btn btn-warning">Edit</a>
                                    <a href="{{ route('hospitals.show', $hospital->id) }}" class="btn btn-info">Detail</a>
                                    <button type="button" data-id="{{ $hospital->id }}" class="btn btn-danger delete" data-url="/hospitals/">Hapus</button>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection