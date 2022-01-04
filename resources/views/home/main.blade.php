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
    <link rel="stylesheet" href="css/nav.css">
    @yield('css')


    <title>Briket</title>
</head>

<body>
    <!-- Navbar Headers -->
    <div class="nav">
        <div class="nav_list font_thin">
            <div class="nav_listlogo">
                <a href="{{ route('home.index') }}"><img src="img/ibriket.png" alt=""></a>
            </div>
            @auth
                <div class="nav_listitem">
                    <a href="{{ route('order.index') }}">
                        Pesanan
                    </a>
                </div>
            @endauth
            @auth
                <div class="nav_listitem">{{ auth()->user()->name }}
                    <div class="nav_listitemdrop" id="ap">
                        <a href="{{ route('user.edit') }}" id="i">Setting</a>
                        <form action="{{ route('login.logout') }}" method="POST">
                            @csrf
                            <button href="" id="i">Logout</button>
                        </form>
                    </div>
                </div>
            @else
                <a href="{{ route('register.index') }}" class="nav_listitem">Daftar</a>
                <a href="{{ route('login.index') }}" class="login_btn">Login</a>
            @endauth
        </div>
    </div>

    <!-- Content Headers -->

    @yield('content')

    <!-- Footer -->
    <footer class="cpright">
        <div>
            <span>&copy; 2021 Briket | Teknik Komputer</span>
        </div>
    </footer>
    <!-- End of Footer -->
</body>

</html>
