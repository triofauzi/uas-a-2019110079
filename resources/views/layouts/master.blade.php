<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'FoodDB') | FoodDB</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('css/style1.css') }}"> --}}
    @stack('css_after')
</head>

<body>
    {{-- Top Navbar --}}
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <a class="navbar-brand">
            <i class="fa fa-film fa-fw" aria-hidden="true"></i>
            <span class="menu-collapsed">DELICIUS FOOD</span>
        </a>
        <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link text-light" href="{{ route('home.index') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="{{ route('menus.create') }}">Tambah Menu</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="{{ route('orders.index') }}">Daftar Order</a>
                </li>

                <li class="nav-item">
                    {{-- <a class="nav-link text-light" href="{{ route('order.index') }}">Order</a> --}}
                </li>
            </ul>
        </div>
    </nav>
    {{-- Top Navbar END --}}
    <div class="row" id="body-row">
        {{-- Sidebar --}}
        <div id="sidebar-container" class="sidebar-expanded d-none d-md-block">
            {{-- Menu List --}}
            <ul class="list-group">

                {{-- Menu List END --}}
        </div>
        {{-- Sidebar END --}}
        {{-- Content --}}
        <div class="col p-4">
            @yield('content')
        </div>
        {{-- Content END --}}
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/app1.js') }}"></script>
    @stack('js_after')
</body>

</html>
