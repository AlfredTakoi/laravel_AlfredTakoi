<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/js/app.js', 'resources/sass/app.scss'])
</head>

<body>
    <div class="container-fluid">
        <div class="vh-100 d-flex justify-content-center align-items-center">
            <div class="col-lg-4 col-12 col-sm-6 col-md-12 m-auto">
                <div class="card px-3 py-3 shadow-sm">
                    <div class="card-body">
                        <h1 class="text-center mb-4">Login</h1>
                        @error('message')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                        @enderror
                        <form action="{{ route( 'login') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="username-input" class="form-label">Username</label>
                                <input type="text" class="form-control" name="username" id="username-input"
                                    placeholder="Masukkan username Anda" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label for="password-input" class="form-label">Password</label>
                                <input type="password" name="password" class="form-control" placeholder="Masukkan Password Anda"
                                    id="password-input">
                            </div>
                            <button type="submit" class="btn btn-primary w-100">Masuk</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>