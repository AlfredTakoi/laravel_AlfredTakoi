@extends('layout.app')

@section('content')
    <div class="mt-5">
        <h1>Selamat Datang {{Auth::user()->username}}</h1>
    </div>
@endsection