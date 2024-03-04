<html lang="en"><head>

    <title>FreshCart - eCommerce HTML Template</title>
    <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="FreshCart is a beautiful eCommerce HTML template specially designed for multipurpose shops &amp; online stores selling products. Most Loved by Developers to build a store website easily.">
  <meta content="Codescandy" name="author">
  
  
  <!-- Favicon icon-->
  <link rel="shortcut icon" type="image/x-icon" href="../assets/images/favicon/favicon.ico">
  
  
  <!-- Libs CSS -->
  <link href="{{asset('dashboard')}}/assets/libs/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
  <link href="{{asset('dashboard')}}/assets/libs/feather-webfont/dist/feather-icons.css" rel="stylesheet">
  <link href="{{asset('dashboard')}}/assets/libs/slick-carousel/slick/slick.css" rel="stylesheet">
  <link href="{{asset('dashboard')}}/assets/libs/slick-carousel/slick/slick-theme.css" rel="stylesheet">
  <link href="{{asset('dashboard')}}/assets/libs/simplebar/dist/simplebar.min.css" rel="stylesheet">
  <link href="{{asset('dashboard')}}/assets/libs/nouislider/dist/nouislider.min.css" rel="stylesheet">
  <link href="{{asset('dashboard')}}/assets/libs/tiny-slider/dist/tiny-slider.css" rel="stylesheet">
  <link href="{{asset('dashboard')}}/assets/libs/dropzone/dist/min/dropzone.min.css" rel="stylesheet">
  <link href="{{asset('dashboard')}}/assets/libs/prismjs/themes/prism-okaidia.min.css" rel="stylesheet">
  
  <!-- Theme CSS -->
  <link rel="stylesheet" href="{{asset('dashborad')}}/assets/css/theme.min.css">
  <style type="text/css" data-href="lib\style.css">.star-rating {
    width: 0;
    position: relative;
    display: inline-block;
    background-image: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxMDguOSIgaGVpZ2h0PSIxMDMuNiIgdmlld0JveD0iMCAwIDEwOC45IDEwMy42Ij48ZGVmcz48c3R5bGU+LmNscy0xe2ZpbGw6I2UzZTZlNjt9PC9zdHlsZT48L2RlZnM+PHRpdGxlPnN0YXJfMDwvdGl0bGU+PGcgaWQ9IkxheWVyXzIiIGRhdGEtbmFtZT0iTGF5ZXIgMiI+PGcgaWQ9IkxheWVyXzEtMiIgZGF0YS1uYW1lPSJMYXllciAxIj48cG9seWdvbiBjbGFzcz0iY2xzLTEiIHBvaW50cz0iMTA4LjkgMzkuNiA3MS4zIDM0LjEgNTQuNCAwIDM3LjYgMzQuMSAwIDM5LjYgMjcuMiA2Ni4xIDIwLjggMTAzLjYgNTQuNCA4NS45IDg4LjEgMTAzLjYgODEuNyA2Ni4xIDEwOC45IDM5LjYiLz48L2c+PC9nPjwvc3ZnPg0K);
    background-position: 0 0;
    background-repeat: repeat-x;
    cursor: pointer;
  }
  .star-rating .star-value {
    position: absolute;
    height: 100%;
    width: 100%;
    background: url('data:image/svg+xml;base64,PHN2Zw0KCXhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgd2lkdGg9IjEwOC45IiBoZWlnaHQ9IjEwMy42IiB2aWV3Qm94PSIwIDAgMTA4LjkgMTAzLjYiPg0KCTxkZWZzPg0KCQk8c3R5bGU+LmNscy0xe2ZpbGw6I2YxYzk0Nzt9PC9zdHlsZT4NCgk8L2RlZnM+DQoJPHRpdGxlPnN0YXIxPC90aXRsZT4NCgk8ZyBpZD0iTGF5ZXJfMiIgZGF0YS1uYW1lPSJMYXllciAyIj4NCgkJPGcgaWQ9IkxheWVyXzEtMiIgZGF0YS1uYW1lPSJMYXllciAxIj4NCgkJCTxwb2x5Z29uIGNsYXNzPSJjbHMtMSIgcG9pbnRzPSI1NC40IDAgNzEuMyAzNC4xIDEwOC45IDM5LjYgODEuNyA2Ni4xIDg4LjEgMTAzLjYgNTQuNCA4NS45IDIwLjggMTAzLjYgMjcuMiA2Ni4xIDAgMzkuNiAzNy42IDM0LjEgNTQuNCAwIi8+DQoJCTwvZz4NCgk8L2c+DQo8L3N2Zz4NCg==');
    background-repeat: repeat-x;
  }
  .star-rating.disabled {
    cursor: default;
  }
  .star-rating.is-busy {
    cursor: wait;
  }
  .star-rating .star-value.rtl {
    -moz-transform: scaleX(-1);
    -o-transform: scaleX(-1);
    -webkit-transform: scaleX(-1);
    transform: scaleX(-1);
    filter: FlipH;
    -ms-filter: "FlipH";
    right: 0;
    left: auto;
  }
  </style></head>
  
  <body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('#') }}">
                    ShortenUrl
                </a>
                

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                {{-- <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li> --}}
                            @endif

                            @if (Route::has('register'))
                                {{-- <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li> --}}
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
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
    
    <!-- Javascript-->
    <!-- Libs JS -->
  <script src="{{asset('dashboard')}}/assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="{{asset('dashboard')}}/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="{{asset('dashboard')}}/assets/libs/jquery-countdown/dist/jquery.countdown.min.js"></script>
  <script src="{{asset('dashboard')}}/assets/libs/slick-carousel/slick/slick.min.js"></script>
  <script src="{{asset('dashboard')}}/assets/libs/simplebar/dist/simplebar.min.js"></script>
  <script src="{{asset('dashboard')}}/assets/libs/nouislider/dist/nouislider.min.js"></script>
  <script src="{{asset('dashboard')}}/assets/libs/wnumb/wNumb.min.js"></script>
  <script src="{{asset('dashboard')}}/assets/libs/rater-js/index.js"></script>
  <script src="{{asset('dashboard')}}/assets/libs/prismjs/prism.js"></script>
  <script src="{{asset('dashboard')}}/assets/libs/prismjs/components/prism-scss.min.js"></script>
  <script src="{{asset('dashboard')}}/assets/libs/prismjs/plugins/toolbar/prism-toolbar.min.js"></script>
  <script src="{{asset('dashboard')}}/assets/libs/prismjs/plugins/copy-to-clipboard/prism-copy-to-clipboard.min.js"></script>
  <script src="{{asset('dashboard')}}/assets/libs/tiny-slider/dist/min/tiny-slider.js"></script>
  <script src="{{asset('dashboard')}}/assets/libs/dropzone/dist/min/dropzone.min.js"></script>
  <script src="{{asset('dashboard')}}/assets/libs/flatpickr/dist/flatpickr.min.js"></script>
  <script src="{{asset('dashboard')}}/assets/libs/inputmask/dist/jquery.inputmask.min.js"></script>
  <!-- Theme JS -->
  <script src="{{asset('dashborad')}}/assets/js/theme.min.js"></script>
</body>
</html>
