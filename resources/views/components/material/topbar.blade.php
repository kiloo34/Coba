<div class="top-bar">
    {{-- {{dd($title)}} --}}
    <x-material.breadcrumb>
        @slot('title')
        {{ ucfirst($title) }}
        @endslot
    </x-material.breadcrumb>

    <!-- BEGIN: Search -->
    <div class="intro-x relative mr-3 sm:mr-6">
        <div class="search hidden sm:block">
            <input type="text" class="search__input input placeholder-theme-13" placeholder="Search...">
            <i data-feather="search" class="search__icon"></i>
        </div>
        <a class="notification sm:hidden" href=""> <i data-feather="search" class="notification__icon"></i>
        </a>
        <div class="search-result">
            <div class="search-result__content">
                <div class="search-result__content__title">Pages</div>
                <div class="mb-5">
                    <a href="" class="flex items-center">
                        <div class="w-8 h-8 bg-theme-18 text-theme-9 flex items-center justify-center rounded-full">
                            <i class="w-4 h-4" data-feather="inbox"></i> </div>
                        <div class="ml-3">Mail Settings</div>
                    </a>
                    <a href="" class="flex items-center mt-2">
                        <div class="w-8 h-8 bg-theme-17 text-theme-11 flex items-center justify-center rounded-full">
                            <i class="w-4 h-4" data-feather="users"></i> </div>
                        <div class="ml-3">Users & Permissions</div>
                    </a>
                    <a href="" class="flex items-center mt-2">
                        <div class="w-8 h-8 bg-theme-14 text-theme-10 flex items-center justify-center rounded-full">
                            <i class="w-4 h-4" data-feather="credit-card"></i> </div>
                        <div class="ml-3">Transactions Report</div>
                    </a>
                </div>
                <div class="search-result__content__title">Users</div>
                <div class="mb-5">
                    <a href="" class="flex items-center mt-2">
                        <div class="w-8 h-8 image-fit">
                            <img alt="Midone Tailwind HTML Admin Template" class="rounded-full"
                                src="dist/images/profile-10.jpg">
                        </div>
                        <div class="ml-3">Johnny Depp</div>
                        <div class="ml-auto w-48 truncate text-gray-600 text-xs text-right">
                            johnnydepp@left4code.com</div>
                    </a>
                    <a href="" class="flex items-center mt-2">
                        <div class="w-8 h-8 image-fit">
                            <img alt="Midone Tailwind HTML Admin Template" class="rounded-full"
                                src="dist/images/profile-7.jpg">
                        </div>
                        <div class="ml-3">Leonardo DiCaprio</div>
                        <div class="ml-auto w-48 truncate text-gray-600 text-xs text-right">
                            leonardodicaprio@left4code.com</div>
                    </a>
                    <a href="" class="flex items-center mt-2">
                        <div class="w-8 h-8 image-fit">
                            <img alt="Midone Tailwind HTML Admin Template" class="rounded-full"
                                src="dist/images/profile-4.jpg">
                        </div>
                        <div class="ml-3">Johnny Depp</div>
                        <div class="ml-auto w-48 truncate text-gray-600 text-xs text-right">
                            johnnydepp@left4code.com</div>
                    </a>
                    <a href="" class="flex items-center mt-2">
                        <div class="w-8 h-8 image-fit">
                            <img alt="Midone Tailwind HTML Admin Template" class="rounded-full"
                                src="dist/images/profile-5.jpg">
                        </div>
                        <div class="ml-3">Tom Cruise</div>
                        <div class="ml-auto w-48 truncate text-gray-600 text-xs text-right">
                            tomcruise@left4code.com</div>
                    </a>
                </div>
                <div class="search-result__content__title">Products</div>
                <a href="" class="flex items-center mt-2">
                    <div class="w-8 h-8 image-fit">
                        <img alt="Midone Tailwind HTML Admin Template" class="rounded-full"
                            src="dist/images/preview-7.jpg">
                    </div>
                    <div class="ml-3">Sony Master Series A9G</div>
                    <div class="ml-auto w-48 truncate text-gray-600 text-xs text-right">Electronic</div>
                </a>
                <a href="" class="flex items-center mt-2">
                    <div class="w-8 h-8 image-fit">
                        <img alt="Midone Tailwind HTML Admin Template" class="rounded-full"
                            src="dist/images/preview-5.jpg">
                    </div>
                    <div class="ml-3">Nike Air Max 270</div>
                    <div class="ml-auto w-48 truncate text-gray-600 text-xs text-right">Sport &amp; Outdoor
                    </div>
                </a>
                <a href="" class="flex items-center mt-2">
                    <div class="w-8 h-8 image-fit">
                        <img alt="Midone Tailwind HTML Admin Template" class="rounded-full"
                            src="dist/images/preview-10.jpg">
                    </div>
                    <div class="ml-3">Samsung Q90 QLED TV</div>
                    <div class="ml-auto w-48 truncate text-gray-600 text-xs text-right">Electronic</div>
                </a>
                <a href="" class="flex items-center mt-2">
                    <div class="w-8 h-8 image-fit">
                        <img alt="Midone Tailwind HTML Admin Template" class="rounded-full"
                            src="dist/images/preview-10.jpg">
                    </div>
                    <div class="ml-3">Nikon Z6</div>
                    <div class="ml-auto w-48 truncate text-gray-600 text-xs text-right">Photography</div>
                </a>
            </div>
        </div>
    </div>
    <!-- END: Search -->
    <!-- BEGIN: Notifications -->
    <div class="intro-x dropdown relative mr-auto sm:mr-6">
        <div class="dropdown-toggle notification notification--bullet cursor-pointer"> <i data-feather="bell"
                class="notification__icon"></i> </div>
        <div
            class="notification-content dropdown-box mt-8 absolute top-0 left-0 sm:left-auto sm:right-0 z-20 -ml-10 sm:ml-0">
            <div class="notification-content__box dropdown-box__content box">
                <div class="notification-content__title">Notifications</div>
                <div class="cursor-pointer relative flex items-center ">
                    <div class="w-12 h-12 flex-none image-fit mr-1">
                        <img alt="Midone Tailwind HTML Admin Template" class="rounded-full"
                            src="dist/images/profile-10.jpg">
                        <div class="w-3 h-3 bg-theme-9 absolute right-0 bottom-0 rounded-full border-2 border-white">
                        </div>
                    </div>
                    <div class="ml-2 overflow-hidden">
                        <div class="flex items-center">
                            <a href="javascript:;" class="font-medium truncate mr-5">Johnny Depp</a>
                            <div class="text-xs text-gray-500 ml-auto whitespace-no-wrap">06:05 AM</div>
                        </div>
                        <div class="w-full truncate text-gray-600">There are many variations of passages of
                            Lorem Ipsum available, but the majority have suffered alteration in some form,
                            by injected humour, or randomi</div>
                    </div>
                </div>
                <div class="cursor-pointer relative flex items-center mt-5">
                    <div class="w-12 h-12 flex-none image-fit mr-1">
                        <img alt="Midone Tailwind HTML Admin Template" class="rounded-full"
                            src="dist/images/profile-7.jpg">
                        <div class="w-3 h-3 bg-theme-9 absolute right-0 bottom-0 rounded-full border-2 border-white">
                        </div>
                    </div>
                    <div class="ml-2 overflow-hidden">
                        <div class="flex items-center">
                            <a href="javascript:;" class="font-medium truncate mr-5">Leonardo DiCaprio</a>
                            <div class="text-xs text-gray-500 ml-auto whitespace-no-wrap">03:20 PM</div>
                        </div>
                        <div class="w-full truncate text-gray-600">Lorem Ipsum is simply dummy text of the
                            printing and typesetting industry. Lorem Ipsum has been the industry&#039;s
                            standard dummy text ever since the 1500</div>
                    </div>
                </div>
                <div class="cursor-pointer relative flex items-center mt-5">
                    <div class="w-12 h-12 flex-none image-fit mr-1">
                        <img alt="Midone Tailwind HTML Admin Template" class="rounded-full"
                            src="dist/images/profile-4.jpg">
                        <div class="w-3 h-3 bg-theme-9 absolute right-0 bottom-0 rounded-full border-2 border-white">
                        </div>
                    </div>
                    <div class="ml-2 overflow-hidden">
                        <div class="flex items-center">
                            <a href="javascript:;" class="font-medium truncate mr-5">Johnny Depp</a>
                            <div class="text-xs text-gray-500 ml-auto whitespace-no-wrap">01:10 PM</div>
                        </div>
                        <div class="w-full truncate text-gray-600">Lorem Ipsum is simply dummy text of the
                            printing and typesetting industry. Lorem Ipsum has been the industry&#039;s
                            standard dummy text ever since the 1500</div>
                    </div>
                </div>
                <div class="cursor-pointer relative flex items-center mt-5">
                    <div class="w-12 h-12 flex-none image-fit mr-1">
                        <img alt="Midone Tailwind HTML Admin Template" class="rounded-full"
                            src="dist/images/profile-5.jpg">
                        <div class="w-3 h-3 bg-theme-9 absolute right-0 bottom-0 rounded-full border-2 border-white">
                        </div>
                    </div>
                    <div class="ml-2 overflow-hidden">
                        <div class="flex items-center">
                            <a href="javascript:;" class="font-medium truncate mr-5">Tom Cruise</a>
                            <div class="text-xs text-gray-500 ml-auto whitespace-no-wrap">03:20 PM</div>
                        </div>
                        <div class="w-full truncate text-gray-600">Lorem Ipsum is simply dummy text of the
                            printing and typesetting industry. Lorem Ipsum has been the industry&#039;s
                            standard dummy text ever since the 1500</div>
                    </div>
                </div>
                <div class="cursor-pointer relative flex items-center mt-5">
                    <div class="w-12 h-12 flex-none image-fit mr-1">
                        <img alt="Midone Tailwind HTML Admin Template" class="rounded-full"
                            src="dist/images/profile-4.jpg">
                        <div class="w-3 h-3 bg-theme-9 absolute right-0 bottom-0 rounded-full border-2 border-white">
                        </div>
                    </div>
                    <div class="ml-2 overflow-hidden">
                        <div class="flex items-center">
                            <a href="javascript:;" class="font-medium truncate mr-5">Kevin Spacey</a>
                            <div class="text-xs text-gray-500 ml-auto whitespace-no-wrap">06:05 AM</div>
                        </div>
                        <div class="w-full truncate text-gray-600">There are many variations of passages of
                            Lorem Ipsum available, but the majority have suffered alteration in some form,
                            by injected humour, or randomi</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END: Notifications -->
    <!-- BEGIN: Account Menu -->
    <div class="intro-x dropdown w-8 h-8 relative">
        <div class="dropdown-toggle w-8 h-8 rounded-full overflow-hidden shadow-lg image-fit zoom-in">
            <img alt="Midone Tailwind HTML Admin Template" src="dist/images/profile-8.jpg">
        </div>
        <div class="dropdown-box mt-10 absolute w-56 top-0 right-0 z-20">
            <div class="dropdown-box__content box bg-theme-38 text-white">
                <div class="p-4 border-b border-theme-40">
                    <div class="font-medium">{{ Auth::user()->name }}</div>
                </div>
                <div class="p-2">
                    <a href="#"
                        class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 rounded-md">
                        <i data-feather="user" class="w-4 h-4 mr-2"></i> Profile </a>
                    {{-- <a href=""
                        class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 rounded-md">
                        <i data-feather="edit" class="w-4 h-4 mr-2"></i> Add Account </a>
                    <a href=""
                        class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 rounded-md">
                        <i data-feather="lock" class="w-4 h-4 mr-2"></i> Reset Password </a>
                    <a href=""
                        class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 rounded-md">
                        <i data-feather="help-circle" class="w-4 h-4 mr-2"></i> Help </a> --}}
                </div>
                <div class="p-2 border-t border-theme-40">
                    <a href="{{ route('logout') }}"
                        class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 rounded-md"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        <i data-feather="toggle-right" class="w-4 h-4 mr-2"></i> Logout </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="">
                        @csrf
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- END: Account Menu -->
</div>
