<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Pudding Mom's Bee</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{ url('images/logo.png') }}" width="50" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->

                        @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                        @endif
                        @else
                        <li class="nav-item">
                            <?php
                            $pesanan_utama = \App\Pesanan::where('user_id', Auth::user()->id)->where('status', 0)->first();
                            if (!empty($pesanan_utama)) {
                                $notif = \App\PesananDetail::where('pesanan_id', $pesanan_utama->id)->count();
                            }
                            ?>
                            <a class="nav-link" href="{{ url('check-out') }}">
                                <i class="fa fa-shopping-cart"></i>
                                @if(!empty($notif))
                                <span class="badge badge-danger">{{ $notif }}</span>
                                @endif
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ url('profile') }}">
                                    Profile
                                </a>

                                <a class="dropdown-item" href="{{ url('history') }}">
                                    Riwayat Pemesanan
                                </a>

                                <a class="dropdown-item" href="{{ url('faqs') }}">
                                    FAQs
                                </a>

                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <footer class="footer mt-auto py-3 bg-primary">
            <div class="container">
                <div class="row align-items-start">
                    <div class="col">
                        <span><strong>Pudding Mom's Bee</strong></span>
                        <hr>
                        <justify>
                            <p align="justify">Pudding Mom's Bee adalah salah satu toko online yang berjualan dessert sejak tahun 2020. Berlokasi di Jakarta Timur, Pudding Mom's Bee merupakan spesialis dessert bertema unik.</p>
                        </justify>
                    </div>
                    <div class="col">
                    </div>
                    <div class="col">
                        <span>
                            <strong>Find Us!</strong>
                        </span>
                        <hr>
                        <p class="lead">
                            </p>
                            <a href="https://shopee.co.id/irasusanti24"><img src="{{url('images/shopee.png')}}" width="30em" alt=""></a>
                            &nbsp;&nbsp;&nbsp;
                            <a href="https://www.tokopedia.com/pudingmomsbee"><img src="{{url('images/tokped.png')}}" width="30em" alt=""></a>
                            &nbsp;&nbsp;&nbsp;
                            <a href="https://www.instagram.com/pudingmomsbee/"><img src="{{url('images/instagram.png')}}" width="30em" alt=""></a>
                            &nbsp;&nbsp;&nbsp;
                            <a href=" https://wa.me/6282113565600"><img src="{{url('images/whatsapp.png')}}" width="30em" alt=""></a>
                            &nbsp;&nbsp;&nbsp;
                            <a href="https://goo.gl/maps/LFV8MA12koxdFPy69"><img src="{{url('images/maps.png')}}" width="30em" alt=""></a>
                                            </div>
                </div>
                </div>
            </div>
        </div>
        
    </div>
</div>
<center>
                
                    <a href="{{ url('home') }}" style="color: black;">
                        © Pudding Mom's Bee
                    </a>
                </center>
            </div>
        </footer>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    @include('sweet::alert')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>