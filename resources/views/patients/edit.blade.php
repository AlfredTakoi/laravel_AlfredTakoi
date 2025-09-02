@extends('layout.app')

@section('content')
    <div class="container h-100 mt-5">
        <div class="row h-100 justify-content-center align-items-center">
            <div class="col-10 col-md-8 col-lg-6">
                <div class="d-flex justify-content-between align-items-center">
                    <h3>Edit Pasien</h3>
                    <a class="btn btn-link text-decoration-none" href="{{ route('patients.index') }}">Kembali</a>
                </div>
                <form action="{{ route('patients.update', $patient->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group mb-3">
                        <label for="title">Nama Pasien</label>
                        <input type="text" class="form-control" value="{{ $patient->patient_name }}" id="patientName" name="patient_name"
                            placeholder="Masukkan Nama Rumah Sakit" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="address">Alamat</label>
                        <textarea name="address" class="form-control" placeholder="Masukkan Alamat" id="address">{{ $patient->address }}</textarea>
                    </div>
                    <div class="form-group mb-3">
                        <label for="phone_number">No Telepon</label>
                        <input type="number" class="form-control"  value="{{ $patient->phone_number }}" id="phone_number" placeholder="Masukkan No Telepon"
                            name="phone_number" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="hospital">Rumah Sakit</label>
                        <select id="hospital" name="hospital_id" class="form-select" required  value="{{ $patient->hospital_id }}" >
                            @foreach($hospitals as $hospital)
                                <option value="{{ $hospital->id }}">{{ $hospital->hospital_name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary">Ubah Pasien</button>
                    <button type="reset" class="btn btn-secondary">Reset</button>
                </form>
            </div>
        </div>
    </div>
@endsection