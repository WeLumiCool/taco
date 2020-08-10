<div class="col-lg-2 col-12 px-0 position-relative sidebar pb-5" style="z-index: 9999; background:#2A2F42;">
    <div class="position-absolute d-lg-none d-block sidebar-close" style="top:5%; right: 5%; z-index: 99999;">
        <i class="fas fa-times text-white fa-lg"></i>
    </div>
<div class="pt-5" id="sidebar" style="position: sticky; top:0%;">
    <div class="d-flex align-items-center justify-content-center" >
        <a class="taco-link" href="{{ route('home') }}">
            <p class="font-weight-bold opensans text-white" style="font-size: 36px;">TACO</p>
        </a>
    </div>
    <div class="pl-3">
        <div class="accordion" id="accordionExample">
        <div class="p-3 d-flex align-items-center sidebar-point position-relative" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
            <div class="d-flex align-items-center"><i class="far fa-user fa-lg" style="width:50px;"></i></div><span class="ml-2 sidebar-name font-size-16 line-height-120 opensans">Профиль</span>
        </div>
            <div id="collapseOne" class="collapse ml-4 border-bottom" aria-labelledby="headingOne" data-parent="#accordionExample">
                <a class="taco-link" href="{{ route('profile/edit') }}">
                <div class="p-3 d-flex align-items-center sidebar-point">
                    <div class="d-flex align-items-center"><i class="fas fa-cogs" style="width:30px;"></i></div><span class="ml-1 sidebar-name font-size-16 line-height-120 opensans">редактировать</span>
                </div>
                </a>
                <a class="taco-link" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                <div class="p-3 d-flex align-items-center sidebar-point">
                    <div class="d-flex align-items-center"><i class="fas fa-door-open" style="width:30px;"></i></div><span class="ml-1 sidebar-name font-size-16 line-height-120 opensans">выход</span>
                </div>
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
                </form>
            </div>
        </div>
        @if(Auth::user()->role->name == 'admin')
        <a class="taco-link" href="{{ route('companies/index') }}">
        <div class="p-3 d-flex align-items-center sidebar-point">
            <div class="d-flex align-items-center"><i class="far fa-handshake fa-lg" style="width:50px;"></i></div><span class="ml-2 sidebar-name font-size-16 line-height-120 opensans">Рекламные компании</span>
        </div>
        </a>

        <a class="taco-link" href="{{ route('analytics/index') }}">
        <div class="p-3 d-flex align-items-center sidebar-point">
            <div class="d-flex align-items-center"><i class="fas fa-chart-line fa-lg" style="width:50px;"></i></div><span class="ml-2 sidebar-name font-size-16 line-height-120 opensans">Аналитика</span>
        </div>
        </a>
        <a class="taco-link" href="{{ route('finances/index') }}">
        <div class="p-3 d-flex align-items-center sidebar-point">
            <div class="d-flex align-items-center"><i class="far fa-money-bill-alt fa-lg" style="width:50px;"></i></div><span class="ml-2 sidebar-name font-size-16 line-height-120 opensans">Финансы</span>
        </div>
        </a>
                <div class="d-flex align-items-center dropdown d-lg-none d-block mt-3">
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
        @if(Auth::user()->role->name == 'user')
            <a class="taco-link" href="{{ route('bid/index') }}">
                <div class="p-3 d-flex align-items-center sidebar-point">
                    <div class="d-flex align-items-center"><i class="far fa-handshake fa-lg" style="width:50px;"></i></div><span class="ml-2 sidebar-name font-size-16 line-height-120 opensans">Заявки</span>
                </div>
            </a>
            <a class="taco-link" href="{{ route('bid/market') }}">
                <div class="p-3 d-flex align-items-center sidebar-point">
                    <div class="d-flex align-items-center"><i class="fas fa-chart-line fa-lg" style="width:50px;"></i></div><span class="ml-2 sidebar-name font-size-16 line-height-120 opensans">Биржа</span>
                </div>
            </a>
            <a class="taco-link" href="{{ route('calendar/index') }}">
                <div class="p-3 d-flex align-items-center sidebar-point">
                    <div class="d-flex align-items-center"><i class="far fa-money-bill-alt fa-lg" style="width:50px;"></i></div><span class="ml-2 sidebar-name font-size-16 line-height-120 opensans">Календарь</span>
                </div>
            </a>
            <a class="taco-link" href="{{ route('finances/index2') }}">
                <div class="p-3 d-flex align-items-center sidebar-point">
                    <div class="d-flex align-items-center"><i class="far fa-money-bill-alt fa-lg" style="width:50px;"></i></div><span class="ml-2 sidebar-name font-size-16 line-height-120 opensans">Аналитика и финансы</span>
                </div>
            </a>
        @endif
    </div>
</div>
</div>