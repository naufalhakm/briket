<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Style CSS -->
    <style>
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

    </style>

    <title>Register</title>
</head>

<body>
    <div class="container mp-0">
        <div class="row g-0">
            <div class="image-warpper col-sm-4 col-md-7">
                <img src="" alt="">
            </div>
            <div class="card-wrapper col-6 col-md-5">
                <div class="card shadow">
                    <div class="card-body">
                        <div class="mb-2">
                            <h1 class="h5 m-0 font-weight-bold d-flex justify-content-center">Daftar</h1>
                        </div>
                        <div class="mb-4">
                            <p class="fw-light text-center">Sudah punya akun ? <a
                                    href="{{ route('login.index') }}">Masuk</a></p>
                        </div>
                        <div class="form-floating mb-4 ">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Nama">
                            <label class="col-sm-2 col-form-label col-form-label-sm" for="name">Name</label>
                        </div>
                        <div class="form-floating mb-4">
                            <input type="text" name="username" class="form-control" id="username"
                                placeholder="Username">
                            <label for="username">Username</label>
                        </div>
                        <div class="form-floating mb-4">
                            <input type="email" name="email" class="form-control" id="email"
                                placeholder="name@example.com">
                            <label for="email">Email address</label>
                        </div>
                        <div class="form-floating mb-4">
                            <input type="password" name="password" class="form-control" id="password"
                                placeholder="Password">
                            <label for="password">Password</label>
                        </div>
                        <div class="form-floating mb-5">
                            <input type="number" name="no_phone" class="form-control" id="no_phone"
                                placeholder="Nomer Ponsel">
                            <label for="no_phone">Nomer Ponsel</label>
                        </div>
                        <div class="pb-4">
                            <button class="w-100 btn btn-lg btn-primary" type="submit">Buat Akun</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
