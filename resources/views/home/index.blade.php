@extends('home.main')

@section('css')
    <link rel="stylesheet" href="css/home.css">
@endsection

@section('content')
    <!-- Content Headers -->
    <div class="container-fluid py-5">
        <div class="justify-content-center d-flex ">
            <div class="card-wrapper col-md-11 justify-content-center ">
                <div class="card shadow cont">
                    <div class="card-body">
                        <div class="product-list-container">
                            <div class="product-box active">
                                <div class="item-logo">
                                    <img src="img/plane.png" alt="">
                                </div>
                                <span class="item-list">Pesawat</span>
                            </div>
                            <a class="product-box" href="{{ route('train.index') }}">
                                <div class="item-logo">
                                    <img src="img/train.png" alt="">
                                </div>
                                <span class="item-list">Kereta</span>
                            </a>
                        </div>
                        <div class="product-form">
                            <div class="header-form pb-3">
                                <div class="subtitle">Pergi liburan yuk</div>
                                <div class="title">Pesan tiket sekarang !</div>
                            </div>
                            <form action="{{ route('home.store') }}" method="POST">
                                @csrf
                                <div class="content-form">
                                    <div class="content-form-left">
                                        <div class="form_plane">
                                            <label for="asal" class="form_label">Dari</label>
                                            <select id="asal" class="form-control" placeholder=" " name="asal">
                                                <option value="Jakarta" selected>Jakarta</option>
                                                <option value="Surabaya">Surabaya</option>
                                                <option value="Yogyakarta">Yogyakarta</option>
                                                <option value="Medan">Medan</option>
                                            </select>
                                        </div>
                                        <div class="form_plane">
                                            <label for="tujuan" class="form_label">Ke</label>
                                            <select id="tujuan" class="form-control" placeholder=" " name="tujuan">
                                                <option value="Surabaya" selected>Surabaya</option>
                                                <option value="Jakarta">Jakarta</option>
                                                <option value="Yogyakarta">Yogyakarta</option>
                                                <option value="Medan">Medan</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="content-form-right">
                                        <div class="form_sub">
                                            <div class="content-form-left">
                                                <div class="form_plane" id="tanggal">
                                                    <label for="tanggal" class="form_label">Tanggal</label>
                                                    <input type="date" id="tanggal" class="form-control" placeholder=" "
                                                        value="<?php echo date('Y-m-d'); ?>" name="tanggal">
                                                </div>
                                            </div>
                                            <div class="content-form-right">
                                                <div class="form_plane" id="jumlah">
                                                    <label for="kelas" class="form_label"> Kelas Kabin</label>
                                                    <select id="kelas" class="form-control" placeholder=" " name="kelas">
                                                        <option value="Ekonomi" selected>Ekonomi</option>
                                                        <option value="Bisnis">Bisnis</option>
                                                        <option value="First">First</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form_sub">
                                            <div class="content-form-left">
                                                <div class="form_plane" id="jumlah">
                                                    <label for="jumlah" class="form_label"> Jumlah</label>
                                                    <input type="number" id="jumlah" class="form-control" placeholder=" "
                                                        min="1" value="1" name="jumlah">
                                                </div>
                                            </div>
                                            <div class="content-form-right">
                                                <div class="form_plane btn-pad">
                                                    <button class="w-100 btn btn-lg btn-primary" type="submit">Pesan
                                                        Tiket</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="px-4">
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <div class="col">
                    <div class="card h-100">
                        <img src="img/brm.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text"><b>Gunung Bromo </b>atau dalam bahasa Tengger dieja "Brama", adalah
                                sebuah
                                gunung berapi aktif di Jawa Timur, Indonesia. </p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img src="img/labuan.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text"><b>Labuan Bajo </b>merupakan salah satu kelurahan yang berada di
                                kecamatan Komodo, Kabupaten Manggarai Barat, provinsi Nusa Tenggara Timur, Indonesia.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img src="img/bali.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text"><b>Bali </b> adalah sebuah provinsi di Indonesia yang ibu kotanya
                                bernama Denpasar.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
<script>
    var date = new Date();

    var day = date.getDate();
    var month = date.getMonth() + 1;
    var year = date.getFullYear();

    if (month < 10) month = "0" + month;
    if (day < 10) day = "0" + day;

    var today = year + "-" + month + "-" + day;
    document.getElementById("tanggal").value = today;

    // Listen for input event on numInput.
    number.onkeydown = function(e) {
        if (!((e.keyCode > 95 && e.keyCode < 106) ||
                (e.keyCode > 47 && e.keyCode < 58) ||
                e.keyCode == 8)) {
            return false;
        }
    }
</script>
