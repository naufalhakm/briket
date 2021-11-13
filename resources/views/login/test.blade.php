<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Log in</title>
</head>

<body>
    <div class="container mp-0">
        <div class="row g-0">
            <div class="image-warpper col-sm-6 col-md-8">
                <img src="" alt="">
            </div>
            <div class="card-wrapper col-6 col-md-4">
                <div class="card shadow">
                    <div class="card-body">
                        <div class="container overflow-hidden">
                            <div class="row gx-5 mb-1">
                                <div class="col">
                                    <h1 class="h5 m-0 font-weight-bold">
                                        Masuk</h6>
                                </div>
                                <div class="col">
                                    <a href="{{ route('register.index') }}"
                                        class="h6 m-0 font-weight-bold d-flex justify-content-end">Daftar</a>
                                </div>
                            </div>
                        </div>
                        <div class="mb-4">
                            <p class="fw-light">Nikmati perjalanan serumu.</p>
                        </div>
                        <div class="form-floating mb-4">
                            <input type="email" class="form-control" id="floatingInput"
                                placeholder="name@example.com">
                            <label for="floatingInput">Email
                                address</label>
                        </div>
                        <div class="form-floating mb-5">
                            <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                            <label for="floatingPassword">Password</label>
                        </div>
                        <div class="pb-4">
                            <button class="w-100 btn btn-lg btn-primary" type="submit">Masuk</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
