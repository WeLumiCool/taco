<div class="col-lg-2 col-12 px-0 position-relative sidebar pb-5" style="z-index: 9999; background:#2A2F42;">
    <div class="position-absolute d-lg-none d-block sidebar-close" style="top:5%; right: 5%; z-index: 99999;">
        <i class="fas fa-times text-white fa-lg"></i>
    </div>
    <div class="pt-5" id="sidebar" style="position: sticky; top:0%;">
        <div class="d-flex align-items-center justify-content-center" >
            <a class="taco-link" href="{{ route('profile/admin') }}">
                <p class="font-weight-bold opensans text-white" style="font-size: 36px;">TACO</p>
            </a>
        </div>
        <div class="pl-3">
            <router-link to="/users" style="text-decoration: none;">
                    <div class="p-3 d-flex align-items-center sidebar-point" data-type="users">
                        <div class="d-flex align-items-center"><i class="far fa-user fa-lg" style="width:50px;"></i></div><span class="ml-2 sidebar-name font-size-16 line-height-120 opensans">Пользователи</span>
                    </div>
            </router-link>
            <router-link to="/advertisers" style="text-decoration: none;">
            <div class="p-3 d-flex align-items-center sidebar-point" data-type="advertisers">
                <div class="d-flex align-items-center"><i class="far fa-user fa-lg" style="width:50px;"></i></div><span class="ml-2 sidebar-name font-size-16 line-height-120 opensans">Рекламодатели</span>
            </div>
            </router-link>


                <a class="taco-link" href="{{ route('finances/index') }}">
                    <div class="p-3 d-flex align-items-center sidebar-point">
                        <div class="d-flex align-items-center"><i class="far fa-handshake fa-lg" style="width:50px;"></i></div><span class="ml-2 sidebar-name font-size-16 line-height-120 opensans">Рекламные компании</span>
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
        </div>
    </div>
</div>

