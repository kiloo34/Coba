<nav class="side-nav">
    <a href="" class="intro-x flex items-center pl-5 pt-4">
        <img alt="Midone Tailwind HTML Admin Template" class="w-6" src="dist/images/logo.svg">
        <span class="hidden xl:block text-white text-lg ml-3"> Mid<span class="font-medium">one</span> </span>
    </a>
    <div class="side-nav__devider my-6"></div>
    <ul>
        <li>
            <a href="{{ route('dashboard') }}" class="side-menu {{ request()->is('/') ? 'side-menu--active' : '' }}">
                <div class="side-menu__icon"> <i data-feather="home"></i> </div>
                <div class="side-menu__title"> Dashboard </div>
            </a>
        </li>
        <li class="side-nav__devider my-6"></li>
        <li>
            <a href="javascript:;.html" class="side-menu {{ request()->is('kriteria') || request()->is('alternatif')  ? 'side-menu--active' : '' }}">
                <div class="side-menu__icon"> <i data-feather="edit"></i> </div>
                <div class="side-menu__title"> Data Sapi <i data-feather="chevron-down"
                        class="side-menu__sub-icon"></i> </div>
            </a>
            <ul class="">
                <li>
                    <a href="side-menu-crud-data-list.html" class="side-menu">
                        <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                        <div class="side-menu__title"> Kriteria </div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-crud-form.html" class="side-menu">
                        <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                        <div class="side-menu__title"> Alternatif </div>
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="index.html" class="side-menu {{ request()->is('/itung') ? 'side-menu--active' : '' }} ">
                <div class="side-menu__icon"> <i data-feather="slack"></i> </div>
                <div class="side-menu__title"> Perhitungan </div>
            </a>
        </li>
        <li class="side-nav__devider my-6"></li>
        <li>
            <a href="{{ route('post.index') }}" class="side-menu {{ request()->is('post') ? 'side-menu--active' : '' }}">
                <div class="side-menu__icon"> <i data-feather="book"></i> </div>
                <div class="side-menu__title"> Post </div>
            </a>
        </li>
    </ul>
</nav>