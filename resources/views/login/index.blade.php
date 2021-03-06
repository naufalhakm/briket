<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="img/bri.png" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Style Template -->
    <link rel="stylesheet" href="css/sign.css">

    <title>Log in</title>
</head>

<body>
    <div class="wrapper">
        <div class="logo-header">
            <div class="container">
                <div class="justify-content-center d-flex">
                    <a href="{{ route('home.index') }}"><img src="img/Briketbg.png" alt="Logo"></a>
                </div>
            </div>
        </div>
        <div class="wrong">

        </div>
        <div class="content-briket">
            <div class="container mp-0">
                <div class="row g-0">
                    <div class="image-warpper col-sm-6 col-md-8">
                        <img src="img/bali.png" alt="" style="width: 600px;" class="center">
                    </div>
                    <div class="card-wrapper col-6 col-md-4 align-self-center">
                        @if (session()->has('LoginError'))
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                {{ session()->get('LoginError') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        @endif
                        <div class="card shadow">
                            <div class="card-body">
                                <div class="container overflow-hidden">
                                    <div class="row gx-5 mb-1 pt-2">
                                        <div class="col">
                                            <h1 class="h5 m-0 font_bold">
                                                Masuk</h1>
                                        </div>
                                        <div class="col">
                                            <a href="{{ route('register.index') }}"
                                                class="h6 m-0 d-flex justify-content-end sign">Daftar</a>
                                        </div>
                                    </div>
                                </div>
                                <form action="{{ route('login.authenticate') }}" method="POST">
                                    @csrf
                                    <div class="mb-4">
                                        <p class="font_light">Nikmati perjalanan serumu di sini.</p>
                                    </div>
                                    <div class="form__div mb-2">
                                        <input type="email" name="email" id="email"
                                            class="form-control @error('email')
                                            is-invalid
                                        @enderror"
                                            placeholder=" " value="{{ old('email') }}">
                                        <label for="email" class="form__label">Email</label>
                                    </div>
                                    <div>
                                        @error('email')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form__div mb-4">
                                        <input type="password" name="password" id="password" class="form-control"
                                            placeholder=" ">
                                        <label for="password" class="form__label">Password</label>
                                    </div>
                                    <div class="pb-5">
                                        <button class="w-100 btn btn-lg btn-primary" type="submit">Masuk</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer -->
        <footer class="cpright">
            <div>
                <span>&copy; 2021 Briket | Teknik Komputer</span>
            </div>
        </footer>
        <!-- End of Footer -->
    </div>
</body>

</html>
