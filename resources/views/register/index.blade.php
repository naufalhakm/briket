<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

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
                    <a href=""><img src="img/Briketbg.png" alt="Logo"></a>
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
                                        <p class="font_light text-center">Sudah punya akun Briket? <a
                                                href="{{ route('login.index') }}">Masuk</a></p>
                                    </div>
                                    <div class="form__div mb-2">
                                        <input type="text" name="name" id="name" class="form__input" placeholder=" ">
                                        <label for="name" class="form__label">Nama</label>
                                    </div>
                                    <div class="form__div">
                                        <input type="email" name="email" id="email" class="form__input"
                                            placeholder=" ">
                                        <label for="email" class="form__label">Email</label>
                                    </div>
                                    <div class="mb-2">
                                        <span class="font_light2">Example: email@briket.com</span>
                                    </div>
                                    <div class="form__div">
                                        <input type="password" name="password" id="password" class="form__input"
                                            placeholder=" ">
                                        <label for="password" class="form__label">Password</label>
                                    </div>
                                    <div class="mb-2">
                                        <span class="font_light2">Min. 8 karakter berupa kombinasi angka,
                                            huruf besar dan huruf kecil.
                                        </span>
                                    </div>
                                    <div class="form__div mb-2">
                                        <input type="number" name="phone" id="phone" class="form__input"
                                            placeholder=" ">
                                        <label for="phone" class="form__label">Nomor Ponsel</label>
                                    </div>
                                    <div class="form__div mb-4">
                                        <input type="text" name="address" id="address" class="form__input"
                                            placeholder=" ">
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

</html>
