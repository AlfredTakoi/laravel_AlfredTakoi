@extends('layout.app')

@section('content')
    <div class="mt-5">
        <div class="d-flex mb-3 justify-content-between flex-column flex-sm-row align-items-center">
            <h1>Pasien</h1>
            <div class="d-flex gap-3 flex-column flex-sm-row">
                <select id="hospitalFilter" data-url="{{ route('patients.filter') }}" name="hospital_id" class="form-select">
                    <option value="">-- Semua Rumah Sakit --</option>
                    @foreach($hospitals as $hospital)
                        <option value="{{ $hospital->id }}">{{ $hospital->hospital_name }}</option>
                    @endforeach
                </select>
                <a href="{{ route('patients.create') }}" class="btn btn-primary text-nowrap">+ Tambah Pasien</a>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table">
                <thead class="text-nowrap">
                    <tr>
                        <th>No.</th>
                        <th>Nama Pasien</th>
                        <th>Alamat</th>
                        <th>No Telepon</th>
                        <th>Rumah Sakit</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody id="patientsTable">
                    @foreach ($patients as $patient )
                        <tr id="row-{{ $patient->id }}">
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $patient->patient_name }}</td>
                            <td>{{ $patient->address }}</td>
                            <td>{{ $patient->phone_number }}</td>
                            <td>{{ $patient->hospital->hospital_name }}</td>
                            <td>
                                <div class="d-flex align-items-center gap-2">
                                    <a href="{{ route('patients.edit', $patient->id) }}" class="btn btn-warning">Edit</a>
                                    <a href="{{ route('patients.show', $patient->id) }}" class="btn btn-info">Detail</a>
                                    <button type="button" data-id="{{ $patient->id }}" class="btn btn-danger delete" data-url="/patients/" data-token="{{ csrf_token() }}">Hapus</button>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection