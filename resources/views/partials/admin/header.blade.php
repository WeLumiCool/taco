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
                    {{--<div class="mx-5 d-flex align-items-center justify-content-center position-relative px-2">--}}
                        {{--<img src="{{ asset('images/front/svg/notification.svg') }}" alt="">--}}
                        {{--<div class="notification-alert d-flex align-items-center justify-content-center small text-white font-weight-bold">2</div>--}}
                    {{--</div>--}}
                    <div class="user-bar d-flex align-items-center">
                        <div class="notification mr-4 d-none">
                            <i class="far fa-bell font-size-24" style="color: #939393;"></i>
                        </div>
                        <div class="rounded-circle" style="height:52px; width:52px; background-image: url({{ asset('images/front/avatar.png') }}); background-size: cover; background-position: center;"></div>
                        <p class="mb-0 ml-3 d-lg-block font-size-18 roboto">{{ Auth::user()->name }}</p>
                    </div>
                </div>
            </ul>
        </div>
    </div>
</nav>
