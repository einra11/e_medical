<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>E MED</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <style>
            html, body {
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 45vh;
            }
            .full-height-main {
                height: 45vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 25px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
                color: #fff;
            }

            .links > a {
                color: #fff;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            .main-page{
                background-image: url('/storage/page_imgs/image6.jpg');
                background-position-y: -250px;
            }
            .contact-page{
                background-image: url('/storage/page_imgs/image7.jpg');
                background-position-y: -250px;
            }
            .about-page{
                background-image: url('/storage/page_imgs/image8.jpg');
                background-position-y: -250px;
            }
            .patient-page{
                background-image: url('/storage/page_imgs/image11.jpg');
                background-position-y: -130px;

            }
            .medicine-page{
                background-image: url('/storage/page_imgs/image12.jpg');
                background-position-y: -50px;
            }
            .appointment-page{
                background-image: url('/storage/page_imgs/image10.jpg');
                background-position-y: -10px;
            }
        </style>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
            <div id="app">
                    <div class="flex-center position-ref">
                            @if (Route::has('login'))
                                <div class="top-right links">
                                    @auth
                                    <div class="dropdown">
                                            <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                {{ Auth::user()->name }} <span class="caret"></span>
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                             <a class="dropdown-item" href="{{ url('/home') }}">Home</a>
                                             <a class="dropdown-item" href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                                                document.getElementById('logout-form').submit();">
                                                    {{ __('Logout') }}
                                                </a>

                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                    @csrf
                                                </form>
                                            </div>
                                    </div>
                                    {{-- @else
                                        <a href="{{ route('login') }}">Login</a>
                                        <a href="{{ route('register') }}">Register</a> --}}
                                    @endauth
                                </div>
                            @endif
                        </div>
        @yield('content')
        </div>
    </body>
</html>
