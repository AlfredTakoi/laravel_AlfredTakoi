@extends('layout.app')

@section('content')
    <div class="container h-100 mt-5">
        <div class="row h-100 justify-content-center align-items-center">
            <div class="col-10 col-md-8 col-lg-6">
                <div class="d-flex justify-content-between align-items-center">
                    <h3>Detail Rumah Sakit</h3>
                    <a class="btn btn-link text-decoration-none" href="{{ route('hospitals.index') }}">Kembali</a>
                </div>
                <table class="table w-100">
                    <tbody>
                        <tr>
                            <td>Nama Rumah Sakit</td>
                            <td>:</td>
                            <td>{{ $hospital->hospital_name }}</td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td>:</td>
                            <td>{{ $hospital->email }}</td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td>:</td>
                            <td>{{ $hospital->address }}</td>
                        </tr>
                         <tr>
                            <td>No Telepon</td>
                            <td>:</td>
                            <td>{{ $hospital->phone_number }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection