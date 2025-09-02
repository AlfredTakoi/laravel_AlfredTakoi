@extends('layout.app')

@section('content')
    <div class="container h-100 mt-5">
        <div class="row h-100 justify-content-center align-items-center">
            <div class="col-10 col-md-8 col-lg-6">
                <div class="d-flex justify-content-between align-items-center">
                    <h3>Tambah Rumah Sakit Baru</h3>
                    <a class="btn btn-link text-decoration-none" href="{{ route('hospitals.index') }}">Kembali</a>
                </div>
                <form action="{{ route('hospitals.update', $hospital->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group mb-3">
                        <label for="title">Nama Rumah Sakit</label>
                        <input type="text" class="form-control" id="hospitalsName" value="{{ $hospital->hospital_name }}" name="hospital_name"
                            placeholder="Masukkan Nama Rumah Sakit" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" value="{{ $hospital->email }}" name="email" placeholder="Masukkan Email"
                            required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="address">Alamat</label>
                        <textarea name="address" class="form-control" placeholder="Masukkan Alamat" id="address">{{ $hospital->address }}</textarea>
                    </div>
                    <div class="form-group mb-3">
                        <label for="phone_number">No Telepon</label>
                        <input type="number" class="form-control" value="{{ $hospital->phone_number }}" id="phone_number" placeholder="Masukkan No Telepon"
                            name="phone_number" required>
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary">Ubah Rumah Sakit</button>
                    <button type="reset" class="btn btn-secondary">Reset</button>
                </form>
            </div>
        </div>
    </div>
@endsection