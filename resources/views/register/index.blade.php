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
    <div class="wrapper">
        <div class="logo-header">
            <div class="container">
                <div class="justify-content-center d-flex">
                    <a href="{{ route('home.index') }}"><img src="img/Briketbg.png" alt="Logo"></a>
                </div>
            </div>
        </div>
        <div class="content-briket">
            <div class="container mp-0">
                <div class="row g-0">
                    <div class="image-warpper col-sm-4 col-md-7">
                        <img src="img/bali.png" alt="" style="width: 600px;">
                    </div>
                    <div class="card-wrapper col-6 col-md-5 align-self-center">
                        <div class="card shadow">
                            <div class="card-body">
                                <form action="{{ route('register.store') }}" method="POST">
                                    @csrf
                                    <div class="mb-2 pt-2">
                                        <h1 class="h5 m-0 font_bold d-flex justify-content-center">Daftar</h1>
                                    </div>
                                    <div class="mb-4">
                                        <p class="font_light text-center sign">Sudah punya akun Briket? <a
                                                href="{{ route('login.index') }}">Masuk</a></p>
                                    </div>

                                    <div class="error-message">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>

                                    <div class="form__div mb-2">
                                        <input type="text" name="name" id="name"
                                            class="form-control @error('name')
                                            is-invalid
                                        @enderror"
                                            value="{{ old('name') }}" placeholder=" ">
                                        <label for="name" class="form__label">Nama</label>
                                    </div>
                                    <div class="form__div">
                                        <input type="email" name="email" id="email"
                                            class="form-control @error('email')
                                            is-invalid
                                        @enderror"
                                            value="{{ old('email') }}" placeholder=" ">
                                        <label for="email" class="form__label">Email</label>
                                    </div>
                                    <div class="mb-2">
                                        <span class="font_light2">Example: email@briket.com</span>
                                    </div>
                                    <div class="form__div">
                                        <input type="password" name="password" id="password"
                                            class="form-control @error('password')
                                            is-invalid
                                        @enderror"
                                            value="{{ old('password') }}" placeholder=" ">
                                        <label for="password" class="form__label">Password</label>
                                    </div>
                                    <div class="mb-2">
                                        <span class="font_light2">Min. 8 karakter berupa kombinasi angka,
                                            huruf besar dan huruf kecil.
                                        </span>
                                    </div>
                                    <div class="form__div mb-2">
                                        <input type="text" name="phone" id="phone"
                                            class="form-control @error('phone')
                                            is-invalid
                                        @enderror"
                                            value="{{ old('phone') }}" placeholder=" "
                                            onkeypress="return isNumber(event)">
                                        <label for="phone" class="form__label">Nomor Ponsel</label>
                                    </div>
                                    <div class="form__div mb-4">
                                        <input type="text" name="address" id="address"
                                            class="form-control @error('address')
                                            is-invalid
                                        @enderror"
                                            value="{{ old('address') }}" placeholder=" ">
                                        <label for="address" class="form__label">Alamat</label>
                                    </div>
                                    <div class="pb-5">
                                        <button class="w-100 btn btn-lg btn-primary" type="submit">Buat Akun</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer -->
        <div class="cpright">
            <span>&copy; 2021 Briket | Teknik Komputer</span>
        </div>
        <!-- End of Footer -->
    </div>
</body>
<script>
    function isNumber(evt) {
        evt = (evt) ? evt : window.event;
        var charCode = (evt.which) ? evt.which : evt.keyCode;
        if (charCode > 31 && (charCode < 48 || charCode > 57)) {
            return false;
        }
        return true;
    }
</script>

</html>
