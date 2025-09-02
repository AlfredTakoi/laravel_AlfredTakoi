@extends('layout.app')

@section('content')
    <div class="container h-100 mt-5">
        <div class="row h-100 justify-content-center align-items-center">
            <div class="col-10 col-md-8 col-lg-6">
                <div class="d-flex justify-content-between align-items-center">
                    <h3>Tambah Rumah Sakit Baru</h3>
                    <a class="btn btn-link text-decoration-none" href="{{ route('hospitals.index') }}">Kembali</a>
                </div>
                <form action="{{ route('hospitals.store') }}" method="POST">
                    @csrf
                    <div class="form-group mb-3">
                        <label for="title">Nama Rumah Sakit</label>
                        <input type="text" class="form-control" id="hospitalsName" name="hospital_name"
                            placeholder="Masukkan Nama Rumah Sakit" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan Email"
                            required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="address">Alamat</label>
                        <textarea name="address" class="form-control" placeholder="Masukkan Alamat" id="address"></textarea>
                    </div>
                    <div class="form-group mb-3">
                        <label for="phone_number">No Telepon</label>
                        <input type="number" class="form-control" id="phone_number" placeholder="Masukkan No Telepon"
                            name="phone_number" required>
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary">Buat Rumah Sakit</button>
                    <button type="reset" class="btn btn-secondary">Reset</button>
                </form>
            </div>
        </div>
    </div>
@endsection