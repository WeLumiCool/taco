<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm fixed-top py-3">
    <div class="container">
        <div class="d-lg-none d-block">
            <a class="taco-link" href="/home">
                <span class="font-size-18 text-dark">TACO</span>
            </a>
        </div>

        <button class="navbar-toggler ml-auto sidebar-link" type="button" data-toggle="collapse" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">

                <!-- Authentication Links -->
                <div class="ml-auto d-flex">
                    @if(Auth::user()->role->name == 'user')
                    <div class="d-flex align-items-center dropdown">
                        <button class="btn taco-btn font-size-18 nav-item nav-link dropdown-toggle text-white" data-toggle="dropdown">Добавить рекламную кампанию</button>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('companies/online') }}">
                            Онлайн реклама
                        </a>
                        <a class="dropdown-item" href="{{ route('companies/offline') }}">
                            Оффлайн реклама
                        </a>
                        </div>
                    </div>
                    @endif
                    <div class="mx-5 d-flex align-items-center justify-content-center position-relative px-2">
                        <img src="{{ asset('images/front/svg/notification.svg') }}" alt="">
                        <div class="notification-alert d-flex align-items-center justify-content-center small text-white font-weight-bold">2</div>
                    </div>
                    <div class="user-bar d-flex align-items-center">
                        <div class="notification mr-4 d-none">
                            <i class="far fa-bell font-size-24" style="color: #939393;"></i>
                        </div>
                        <div class="rounded-circle" style="height:52px; width:52px; background-image: url({{ asset('images/front/avatar.png') }}); background-size: cover; background-position: center;"></div>
                        <p class="mb-0 ml-3 d-lg-block font-size-18 roboto">{{ Auth::user()->name }}</p>
                    </div>
                </div>
                {{--@guest--}}
                    {{--<li class="nav-item">--}}
                        {{--<a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>--}}
                    {{--</li>--}}
                    {{--@if (Route::has('register'))--}}
                        {{--<li class="nav-item">--}}
                            {{--<a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>--}}
                        {{--</li>--}}
                    {{--@endif--}}
                {{--@else--}}
                    {{--<li class="nav-item dropdown">--}}
                        {{--<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>--}}
                            {{--{{ Auth::user()->name }} <span class="caret"></span>--}}
                        {{--</a>--}}

                        {{--<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">--}}
                            {{--<a class="dropdown-item" href="{{ route('logout') }}"--}}
                               {{--onclick="event.preventDefault();--}}
                                                     {{--document.getElementById('logout-form').submit();">--}}
                                {{--{{ __('Logout') }}--}}
                            {{--</a>--}}

                            {{--<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">--}}
                                {{--@csrf--}}
                            {{--</form>--}}
                        {{--</div>--}}
                    {{--</li>--}}
                {{--@endguest--}}
            </ul>
        </div>
    </div>
</nav>
