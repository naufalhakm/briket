@extends('home.main')
@section('css')
    <link rel="stylesheet" href="css/order.css">
    <link rel="stylesheet" href="css/account.css">
    <link rel="stylesheet" href="css/sign.css">
@endsection
@section('content')

    <div class="desktop d-flex">
        <div class="cont_or1">
            <div class="cont_or2">
                <div class="list_lf">
                    <span>
                        <div class="css-list r-1 r-br1 r-bs1 r-bw-1 r-xy r-pbt16" style="background-color: #FFFFFF;">
                            <div class="css-list r-bbw1 r-1 r-bs1 r-mb8 r-pb16 r-prl16">
                                <div class="css-list r-bwx">
                                    <div class="css-list r-jcc">
                                        <div class="r-hd" style="color: rgb(3, 18, 26);">
                                            {{ auth()->user()->name }}</div>
                                        <div class="r-hd2" style="color: rgb(104, 113, 118);">
                                            {{ auth()->user()->email }}</div>
                                    </div>
                                </div>
                            </div>
                            <div class="css-list r-pr">
                                <div class="css-list" style="transition-duration: 0s;">
                                    <h3 class="r-prl16 r-pbt8 r-hd3">Pesanan Saya</h3>
                                </div>
                            </div>
                        </div>
                    </span>
                </div>
                <div class="list_rg">
                    <div class="profile-wrapper">
                        <div class="white-wrap account-details">
                            <div class="title l-hd l-hds">Detail Akun</div>
                            <form action="{{ route('user.update') }}" method="POST">
                                @csrf
                                @method('PUT')

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
                                        value="{{ old('name') ?? $user->name }}" placeholder=" ">
                                    <label for="name" class="form__label">Nama</label>
                                </div>
                                <div class="form__div mb-2">
                                    <input type="text" name="phone" id="phone"
                                        class="form-control @error('phone')
                                            is-invalid
                                        @enderror"
                                        value="{{ old('phone') }}" placeholder=" " onkeypress="return isNumber(event)">
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
                                    <button class="w-100 btn btn-lg btn-primary" type="submit">Simpan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
@endsection
