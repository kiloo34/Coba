<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <link href="{{ asset('dist/css/app.css') }}" rel="stylesheet">
    </head>

    <body class="app">

        <!-- BEGIN: Mobile Menu -->
        <div class="mobile-menu md:hidden">
            <div class="mobile-menu-bar">
                <a href="" class="flex mr-auto">
                    <img alt="Midone Tailwind HTML Admin Template" class="w-6" src="dist/images/logo.svg">
                </a>
                <a href="javascript:;" id="mobile-menu-toggler"> <i data-feather="bar-chart-2"
                        class="w-8 h-8 text-white transform -rotate-90"></i> </a>
            </div>
            <ul class="border-t border-theme-24 py-5 hidden">
                <li>
                    <a href="index.html" class="menu">
                        <div class="menu__icon"> <i data-feather="home"></i> </div>
                        <div class="menu__title"> Dashboard </div>
                    </a>
                </li>
                <li>
                    <a href="javascript:;" class="menu">
                        <div class="menu__icon"> <i data-feather="box"></i> </div>
                        <div class="menu__title"> Menu Layout <i data-feather="chevron-down" class="menu__sub-icon"></i>
                        </div>
                    </a>
                    <ul class="">
                        <li>
                            <a href="index.html" class="menu">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> Side Menu </div>
                            </a>
                        </li>
                        <li>
                            <a href="simple-menu-dashboard.html" class="menu">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> Simple Menu </div>
                            </a>
                        </li>
                        <li>
                            <a href="top-menu-dashboard.html" class="menu">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> Top Menu </div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="side-menu-inbox.html" class="menu">
                        <div class="menu__icon"> <i data-feather="inbox"></i> </div>
                        <div class="menu__title"> Inbox </div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-file-manager.html" class="menu">
                        <div class="menu__icon"> <i data-feather="hard-drive"></i> </div>
                        <div class="menu__title"> File Manager </div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-point-of-sale.html" class="menu">
                        <div class="menu__icon"> <i data-feather="credit-card"></i> </div>
                        <div class="menu__title"> Point of Sale </div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-chat.html" class="menu">
                        <div class="menu__icon"> <i data-feather="message-square"></i> </div>
                        <div class="menu__title"> Chat </div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-post.html" class="menu">
                        <div class="menu__icon"> <i data-feather="file-text"></i> </div>
                        <div class="menu__title"> Post </div>
                    </a>
                </li>
                <li class="menu__devider my-6"></li>
                <li>
                    <a href="javascript:;" class="menu">
                        <div class="menu__icon"> <i data-feather="edit"></i> </div>
                        <div class="menu__title"> Crud <i data-feather="chevron-down" class="menu__sub-icon"></i> </div>
                    </a>
                    <ul class="">
                        <li>
                            <a href="side-menu-crud-data-list.html" class="menu">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> Data List </div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-crud-form.html" class="menu">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> Form </div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:;" class="menu">
                        <div class="menu__icon"> <i data-feather="users"></i> </div>
                        <div class="menu__title"> Users <i data-feather="chevron-down" class="menu__sub-icon"></i>
                        </div>
                    </a>
                    <ul class="">
                        <li>
                            <a href="side-menu-users-layout-1.html" class="menu">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> Layout 1 </div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-users-layout-2.html" class="menu">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> Layout 2 </div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-users-layout-3.html" class="menu">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> Layout 3 </div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:;" class="menu">
                        <div class="menu__icon"> <i data-feather="trello"></i> </div>
                        <div class="menu__title"> Profile <i data-feather="chevron-down" class="menu__sub-icon"></i>
                        </div>
                    </a>
                    <ul class="">
                        <li>
                            <a href="side-menu-profile-overview-1.html" class="menu">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> Overview 1 </div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-profile-overview-2.html" class="menu">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> Overview 2 </div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-profile-overview-3.html" class="menu">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> Overview 3 </div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:;.html" class="menu menu--active">
                        <div class="menu__icon"> <i data-feather="layout"></i> </div>
                        <div class="menu__title"> Pages <i data-feather="chevron-down" class="menu__sub-icon"></i>
                        </div>
                    </a>
                    <ul class="menu__sub-open">
                        <li>
                            <a href="javascript:;" class="menu">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> Wizards <i data-feather="chevron-down"
                                        class="menu__sub-icon"></i> </div>
                            </a>
                            <ul class="">
                                <li>
                                    <a href="side-menu-wizard-layout-1.html" class="menu">
                                        <div class="menu__icon"> <i data-feather="zap"></i> </div>
                                        <div class="menu__title">Layout 1</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="side-menu-wizard-layout-2.html" class="menu">
                                        <div class="menu__icon"> <i data-feather="zap"></i> </div>
                                        <div class="menu__title">Layout 2</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="side-menu-wizard-layout-3.html" class="menu">
                                        <div class="menu__icon"> <i data-feather="zap"></i> </div>
                                        <div class="menu__title">Layout 3</div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:;.html" class="menu menu--active">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> Blog <i data-feather="chevron-down"
                                        class="menu__sub-icon"></i> </div>
                            </a>
                            <ul class="menu__sub-open">
                                <li>
                                    <a href="side-menu-blog-layout-1.html" class="menu">
                                        <div class="menu__icon"> <i data-feather="zap"></i> </div>
                                        <div class="menu__title">Layout 1</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="side-menu-blog-layout-2.html" class="menu menu--active">
                                        <div class="menu__icon"> <i data-feather="zap"></i> </div>
                                        <div class="menu__title">Layout 2</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="side-menu-blog-layout-3.html" class="menu">
                                        <div class="menu__icon"> <i data-feather="zap"></i> </div>
                                        <div class="menu__title">Layout 3</div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:;" class="menu">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> Pricing <i data-feather="chevron-down"
                                        class="menu__sub-icon"></i> </div>
                            </a>
                            <ul class="">
                                <li>
                                    <a href="side-menu-pricing-layout-1.html" class="menu">
                                        <div class="menu__icon"> <i data-feather="zap"></i> </div>
                                        <div class="menu__title">Layout 1</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="side-menu-pricing-layout-2.html" class="menu">
                                        <div class="menu__icon"> <i data-feather="zap"></i> </div>
                                        <div class="menu__title">Layout 2</div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:;" class="menu">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> Invoice <i data-feather="chevron-down"
                                        class="menu__sub-icon"></i> </div>
                            </a>
                            <ul class="">
                                <li>
                                    <a href="side-menu-invoice-layout-1.html" class="menu">
                                        <div class="menu__icon"> <i data-feather="zap"></i> </div>
                                        <div class="menu__title">Layout 1</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="side-menu-invoice-layout-2.html" class="menu">
                                        <div class="menu__icon"> <i data-feather="zap"></i> </div>
                                        <div class="menu__title">Layout 2</div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:;" class="menu">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> FAQ <i data-feather="chevron-down" class="menu__sub-icon"></i>
                                </div>
                            </a>
                            <ul class="">
                                <li>
                                    <a href="side-menu-faq-layout-1.html" class="menu">
                                        <div class="menu__icon"> <i data-feather="zap"></i> </div>
                                        <div class="menu__title">Layout 1</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="side-menu-faq-layout-2.html" class="menu">
                                        <div class="menu__icon"> <i data-feather="zap"></i> </div>
                                        <div class="menu__title">Layout 2</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="side-menu-faq-layout-3.html" class="menu">
                                        <div class="menu__icon"> <i data-feather="zap"></i> </div>
                                        <div class="menu__title">Layout 3</div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="login-login.html" class="menu">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> Login </div>
                            </a>
                        </li>
                        <li>
                            <a href="login-register.html" class="menu">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> Register </div>
                            </a>
                        </li>
                        <li>
                            <a href="main-error-page.html" class="menu">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> Error Page </div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-update-profile.html" class="menu">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> Update profile </div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-change-password.html" class="menu">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> Change Password </div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="menu__devider my-6"></li>
                <li>
                    <a href="javascript:;" class="menu">
                        <div class="menu__icon"> <i data-feather="inbox"></i> </div>
                        <div class="menu__title"> Components <i data-feather="chevron-down" class="menu__sub-icon"></i>
                        </div>
                    </a>
                    <ul class="">
                        <li>
                            <a href="javascript:;" class="menu">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> Grid <i data-feather="chevron-down"
                                        class="menu__sub-icon"></i> </div>
                            </a>
                            <ul class="">
                                <li>
                                    <a href="side-menu-regular-table.html" class="menu">
                                        <div class="menu__icon"> <i data-feather="zap"></i> </div>
                                        <div class="menu__title">Regular Table</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="side-menu-datatable.html" class="menu">
                                        <div class="menu__icon"> <i data-feather="zap"></i> </div>
                                        <div class="menu__title">Datatable</div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="side-menu-accordion.html" class="menu">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> Accordion </div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-button.html" class="menu">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> Button </div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-modal.html" class="menu">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> Modal </div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-alert.html" class="menu">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> Alert </div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-progress-bar.html" class="menu">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> Progress Bar </div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-tooltip.html" class="menu">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> Tooltip </div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-dropdown.html" class="menu">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> Dropdown </div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-toast.html" class="menu">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> Toast </div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-typography.html" class="menu">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> Typography </div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-icon.html" class="menu">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> Icon </div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-loading-icon.html" class="menu">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> Loading Icon </div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:;" class="menu">
                        <div class="menu__icon"> <i data-feather="sidebar"></i> </div>
                        <div class="menu__title"> Forms <i data-feather="chevron-down" class="menu__sub-icon"></i>
                        </div>
                    </a>
                    <ul class="">
                        <li>
                            <a href="side-menu-regular-form.html" class="menu">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> Regular Form </div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-datepicker.html" class="menu">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> Datepicker </div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-select2.html" class="menu">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> Select2 </div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-file-upload.html" class="menu">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> File Upload </div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-wysiwyg-editor.html" class="menu">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> Wysiwyg Editor </div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-validation.html" class="menu">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> Validation </div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:;" class="menu">
                        <div class="menu__icon"> <i data-feather="hard-drive"></i> </div>
                        <div class="menu__title"> Widgets <i data-feather="chevron-down" class="menu__sub-icon"></i>
                        </div>
                    </a>
                    <ul class="">
                        <li>
                            <a href="side-menu-chart.html" class="menu">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> Chart </div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-slider.html" class="menu">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> Slider </div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-image-zoom.html" class="menu">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> Image Zoom </div>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- END: Mobile Menu -->
        <!-- BEGIN: Top Bar -->
        <div class="border-b border-theme-24 -mt-10 md:-mt-5 -mx-3 sm:-mx-8 px-3 sm:px-8 pt-3 md:pt-0 mb-10">
            <div class="top-bar-boxed flex items-center">
                <!-- BEGIN: Logo -->
                <a href="" class="-intro-x hidden md:flex">
                    <img alt="Midone Tailwind HTML Admin Template" class="w-6" src="dist/images/logo.svg">
                    <span class="text-white text-lg ml-3"> App<span class="font-medium">Ku</span> </span>
                </a>
                <!-- END: Logo -->
                <!-- BEGIN: Breadcrumb -->
                <div class="-intro-x breadcrumb breadcrumb--light mr-auto">
                </div>
                {{-- <div class="-intro-x breadcrumb breadcrumb--light mr-auto">
                    <a href="" class="">Application</a>
                    <i data-feather="chevron-right" class="breadcrumb__icon"></i>
                    <a href="" class="breadcrumb--active">Dashboard</a>
                </div> --}}
                <!-- END: Breadcrumb -->
                <!-- BEGIN: Search -->
                <div class="intro-x relative mr-3 sm:mr-6">
                    <div class="search hidden sm:block">
                        <input type="text" class="search__input input placeholder-theme-13" placeholder="Search...">
                        <i data-feather="search" class="search__icon"></i>
                    </div>
                    <a class="notification notification--light sm:hidden" href=""> <i data-feather="search"
                            class="notification__icon"></i> </a>
                    <div class="search-result">
                        <div class="search-result__content">
                            <div class="search-result__content__title">Pages</div>
                            <div class="mb-5">
                                <a href="" class="flex items-center">
                                    <div
                                        class="w-8 h-8 bg-theme-18 text-theme-9 flex items-center justify-center rounded-full">
                                        <i class="w-4 h-4" data-feather="inbox"></i> </div>
                                    <div class="ml-3">Mail Settings</div>
                                </a>
                                <a href="" class="flex items-center mt-2">
                                    <div
                                        class="w-8 h-8 bg-theme-17 text-theme-11 flex items-center justify-center rounded-full">
                                        <i class="w-4 h-4" data-feather="users"></i> </div>
                                    <div class="ml-3">Users & Permissions</div>
                                </a>
                                <a href="" class="flex items-center mt-2">
                                    <div
                                        class="w-8 h-8 bg-theme-14 text-theme-10 flex items-center justify-center rounded-full">
                                        <i class="w-4 h-4" data-feather="credit-card"></i> </div>
                                    <div class="ml-3">Transactions Report</div>
                                </a>
                            </div>
                            <div class="search-result__content__title">Users</div>
                            <div class="mb-5">
                                <a href="" class="flex items-center mt-2">
                                    <div class="w-8 h-8 image-fit">
                                        <img alt="Midone Tailwind HTML Admin Template" class="rounded-full"
                                            src="dist/images/profile-4.jpg">
                                    </div>
                                    <div class="ml-3">Al Pacino</div>
                                    <div class="ml-auto w-48 truncate text-gray-600 text-xs text-right">
                                        alpacino@left4code.com</div>
                                </a>
                                <a href="" class="flex items-center mt-2">
                                    <div class="w-8 h-8 image-fit">
                                        <img alt="Midone Tailwind HTML Admin Template" class="rounded-full"
                                            src="dist/images/profile-8.jpg">
                                    </div>
                                    <div class="ml-3">Al Pacino</div>
                                    <div class="ml-auto w-48 truncate text-gray-600 text-xs text-right">
                                        alpacino@left4code.com</div>
                                </a>
                                <a href="" class="flex items-center mt-2">
                                    <div class="w-8 h-8 image-fit">
                                        <img alt="Midone Tailwind HTML Admin Template" class="rounded-full"
                                            src="dist/images/profile-2.jpg">
                                    </div>
                                    <div class="ml-3">Kevin Spacey</div>
                                    <div class="ml-auto w-48 truncate text-gray-600 text-xs text-right">
                                        kevinspacey@left4code.com</div>
                                </a>
                                <a href="" class="flex items-center mt-2">
                                    <div class="w-8 h-8 image-fit">
                                        <img alt="Midone Tailwind HTML Admin Template" class="rounded-full"
                                            src="dist/images/profile-10.jpg">
                                    </div>
                                    <div class="ml-3">Brad Pitt</div>
                                    <div class="ml-auto w-48 truncate text-gray-600 text-xs text-right">
                                        bradpitt@left4code.com</div>
                                </a>
                            </div>
                            <div class="search-result__content__title">Products</div>
                            <a href="" class="flex items-center mt-2">
                                <div class="w-8 h-8 image-fit">
                                    <img alt="Midone Tailwind HTML Admin Template" class="rounded-full"
                                        src="dist/images/preview-1.jpg">
                                </div>
                                <div class="ml-3">Nike Air Max 270</div>
                                <div class="ml-auto w-48 truncate text-gray-600 text-xs text-right">Sport &amp; Outdoor
                                </div>
                            </a>
                            <a href="" class="flex items-center mt-2">
                                <div class="w-8 h-8 image-fit">
                                    <img alt="Midone Tailwind HTML Admin Template" class="rounded-full"
                                        src="dist/images/preview-12.jpg">
                                </div>
                                <div class="ml-3">Sony Master Series A9G</div>
                                <div class="ml-auto w-48 truncate text-gray-600 text-xs text-right">Electronic</div>
                            </a>
                            <a href="" class="flex items-center mt-2">
                                <div class="w-8 h-8 image-fit">
                                    <img alt="Midone Tailwind HTML Admin Template" class="rounded-full"
                                        src="dist/images/preview-4.jpg">
                                </div>
                                <div class="ml-3">Nike Tanjun</div>
                                <div class="ml-auto w-48 truncate text-gray-600 text-xs text-right">Sport &amp; Outdoor
                                </div>
                            </a>
                            <a href="" class="flex items-center mt-2">
                                <div class="w-8 h-8 image-fit">
                                    <img alt="Midone Tailwind HTML Admin Template" class="rounded-full"
                                        src="dist/images/preview-9.jpg">
                                </div>
                                <div class="ml-3">Nike Air Max 270</div>
                                <div class="ml-auto w-48 truncate text-gray-600 text-xs text-right">Sport &amp; Outdoor
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- END: Search -->
                <!-- BEGIN: Account Menu -->
                @if (Route::has('login'))
                <div class="intro-x relative mr-3 ">
                    @auth
                    @else
                    <a href="{{ route('login') }}" class="text-white text-lg ml-3">Login</a>
                    @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="text-white text-lg ml-3">Register</a>
                    @endif
                    @endif
                </div>
                @endif
                <!-- END: Account Menu -->
            </div>
        </div>
        <!-- END: Top Bar -->
        <!-- BEGIN: Top Menu -->
        <nav class="top-nav">
            <ul>
                <li>
                    <a href="top-menu-dashboard.html" class="top-menu">
                        <div class="top-menu__icon"> <i data-feather="home"></i> </div>
                        <div class="top-menu__title"> Home </div>
                    </a>
                </li>
                <li>
                    <a href="#" class="top-menu">
                        <div class="top-menu__icon"> <i data-feather="layout"></i> </div>
                        <div class="top-menu__title"> Pages </div>
                    </a>
                </li>

            </ul>
        </nav>
        <!-- END: Top Menu -->
        <div class="content">
            <div class="intro-y flex flex-col sm:flex-row items-center mt-8">
                <h2 class="text-lg font-medium mr-auto">
                    Post
                </h2>
            </div>
            <div class="intro-y grid grid-cols-12 gap-6 mt-5">
                <!-- BEGIN: Blog Layout -->
                <div class="intro-y blog col-span-12 md:col-span-6 box">
                    <div class="blog__preview image-fit">
                        <img alt="Midone Tailwind HTML Admin Template" class="rounded-t-md"
                            src="dist/images/preview-10.jpg">
                        <div class="absolute w-full flex items-center px-5 pt-6 z-10">
                            <div class="w-10 h-10 flex-none image-fit">
                                <img alt="Midone Tailwind HTML Admin Template" class="rounded-full"
                                    src="dist/images/profile-4.jpg">
                            </div>
                            <div class="ml-3 text-white mr-auto">
                                <a href="" class="font-medium">Russell Crowe</a>
                                <div class="text-xs">29 minutes ago</div>
                            </div>
                            <div class="dropdown relative ml-3">
                                <a href="javascript:;"
                                    class="blog__action dropdown-toggle w-8 h-8 flex items-center justify-center rounded-full">
                                    <i data-feather="more-vertical" class="w-4 h-4 text-white"></i> </a>
                                <div class="dropdown-box mt-8 absolute w-40 top-0 right-0 z-20">
                                    <div class="dropdown-box__content box p-2">
                                        <a href=""
                                            class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md">
                                            <i data-feather="edit-2" class="w-4 h-4 mr-2"></i> Edit Post </a>
                                        <a href=""
                                            class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md">
                                            <i data-feather="trash" class="w-4 h-4 mr-2"></i> Delete Post </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="absolute bottom-0 text-white px-5 pb-6 z-10"> <span
                                class="blog__category px-2 py-1 rounded">PC &amp; Laptop</span> <a href=""
                                class="block font-medium text-xl mt-3">Desktop publishing software like Aldus
                                PageMaker</a> </div>
                    </div>
                    <div class="p-5 text-gray-700">Lorem Ipsum is simply dummy text of the printing and typesetting
                        industry. Lorem Ipsum has been the industry&#039;s standard dummy text ever since the 1500</div>
                    <div class="flex items-center px-5 py-3 border-t border-gray-200">
                        <a href=""
                            class="intro-x w-8 h-8 flex items-center justify-center rounded-full border border-gray-500 text-gray-600 mr-2 tooltip"
                            title="Bookmark"> <i data-feather="bookmark" class="w-3 h-3"></i> </a>
                        <div class="intro-x flex mr-2">
                            <div class="intro-x w-8 h-8 image-fit">
                                <img alt="Midone Tailwind HTML Admin Template"
                                    class="rounded-full border border-white zoom-in tooltip"
                                    src="dist/images/profile-4.jpg" title="Russell Crowe">
                            </div>
                            <div class="intro-x w-8 h-8 image-fit -ml-4">
                                <img alt="Midone Tailwind HTML Admin Template"
                                    class="rounded-full border border-white zoom-in tooltip"
                                    src="dist/images/profile-12.jpg" title="Kate Winslet">
                            </div>
                            <div class="intro-x w-8 h-8 image-fit -ml-4">
                                <img alt="Midone Tailwind HTML Admin Template"
                                    class="rounded-full border border-white zoom-in tooltip"
                                    src="dist/images/profile-13.jpg" title="Christian Bale">
                            </div>
                        </div>
                        <a href=""
                            class="intro-x w-8 h-8 flex items-center justify-center rounded-full bg-theme-14 text-theme-10 ml-auto tooltip"
                            title="Share"> <i data-feather="share-2" class="w-3 h-3"></i> </a>
                        <a href=""
                            class="intro-x w-8 h-8 flex items-center justify-center rounded-full bg-theme-1 text-white ml-2 tooltip"
                            title="Download PDF"> <i data-feather="share" class="w-3 h-3"></i> </a>
                    </div>
                    <div class="px-5 pt-3 pb-5 border-t border-gray-200">
                        <div class="w-full flex text-gray-600 text-xs sm:text-sm">
                            <div class="mr-2"> Comments: <span class="font-medium">44</span> </div>
                            <div class="mr-2"> Views: <span class="font-medium">52k</span> </div>
                            <div class="ml-auto"> Likes: <span class="font-medium">25k</span> </div>
                        </div>
                        <div class="w-full flex items-center mt-3">
                            <div class="w-8 h-8 flex-none image-fit mr-3">
                                <img alt="Midone Tailwind HTML Admin Template" class="rounded-full"
                                    src="dist/images/profile-4.jpg">
                            </div>
                            <div class="flex-1 relative text-gray-700">
                                <input type="text"
                                    class="input w-full rounded-full bg-gray-200 pr-10 placeholder-theme-13"
                                    placeholder="Post a comment...">
                                <i data-feather="smile" class="w-4 h-4 absolute my-auto inset-y-0 mr-3 right-0"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="intro-y blog col-span-12 md:col-span-6 box">
                    <div class="blog__preview image-fit">
                        <img alt="Midone Tailwind HTML Admin Template" class="rounded-t-md"
                            src="dist/images/preview-14.jpg">
                        <div class="absolute w-full flex items-center px-5 pt-6 z-10">
                            <div class="w-10 h-10 flex-none image-fit">
                                <img alt="Midone Tailwind HTML Admin Template" class="rounded-full"
                                    src="dist/images/profile-1.jpg">
                            </div>
                            <div class="ml-3 text-white mr-auto">
                                <a href="" class="font-medium">Brad Pitt</a>
                                <div class="text-xs">29 seconds ago</div>
                            </div>
                            <div class="dropdown relative ml-3">
                                <a href="javascript:;"
                                    class="blog__action dropdown-toggle w-8 h-8 flex items-center justify-center rounded-full">
                                    <i data-feather="more-vertical" class="w-4 h-4 text-white"></i> </a>
                                <div class="dropdown-box mt-8 absolute w-40 top-0 right-0 z-20">
                                    <div class="dropdown-box__content box p-2">
                                        <a href=""
                                            class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md">
                                            <i data-feather="edit-2" class="w-4 h-4 mr-2"></i> Edit Post </a>
                                        <a href=""
                                            class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md">
                                            <i data-feather="trash" class="w-4 h-4 mr-2"></i> Delete Post </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="absolute bottom-0 text-white px-5 pb-6 z-10"> <span
                                class="blog__category px-2 py-1 rounded">Sport &amp; Outdoor</span> <a href=""
                                class="block font-medium text-xl mt-3">Popularised in the 1960s with the release of
                                Letraset</a> </div>
                    </div>
                    <div class="p-5 text-gray-700">Contrary to popular belief, Lorem Ipsum is not simply random text. It
                        has roots in a piece of classical Latin literature from 45 BC, making it over 20</div>
                    <div class="flex items-center px-5 py-3 border-t border-gray-200">
                        <a href=""
                            class="intro-x w-8 h-8 flex items-center justify-center rounded-full border border-gray-500 text-gray-600 mr-2 tooltip"
                            title="Bookmark"> <i data-feather="bookmark" class="w-3 h-3"></i> </a>
                        <div class="intro-x flex mr-2">
                            <div class="intro-x w-8 h-8 image-fit">
                                <img alt="Midone Tailwind HTML Admin Template"
                                    class="rounded-full border border-white zoom-in tooltip"
                                    src="dist/images/profile-1.jpg" title="Brad Pitt">
                            </div>
                            <div class="intro-x w-8 h-8 image-fit -ml-4">
                                <img alt="Midone Tailwind HTML Admin Template"
                                    class="rounded-full border border-white zoom-in tooltip"
                                    src="dist/images/profile-8.jpg" title="Christian Bale">
                            </div>
                            <div class="intro-x w-8 h-8 image-fit -ml-4">
                                <img alt="Midone Tailwind HTML Admin Template"
                                    class="rounded-full border border-white zoom-in tooltip"
                                    src="dist/images/profile-3.jpg" title="Charlize Theron">
                            </div>
                        </div>
                        <a href=""
                            class="intro-x w-8 h-8 flex items-center justify-center rounded-full bg-theme-14 text-theme-10 ml-auto tooltip"
                            title="Share"> <i data-feather="share-2" class="w-3 h-3"></i> </a>
                        <a href=""
                            class="intro-x w-8 h-8 flex items-center justify-center rounded-full bg-theme-1 text-white ml-2 tooltip"
                            title="Download PDF"> <i data-feather="share" class="w-3 h-3"></i> </a>
                    </div>
                    <div class="px-5 pt-3 pb-5 border-t border-gray-200">
                        <div class="w-full flex text-gray-600 text-xs sm:text-sm">
                            <div class="mr-2"> Comments: <span class="font-medium">71</span> </div>
                            <div class="mr-2"> Views: <span class="font-medium">43k</span> </div>
                            <div class="ml-auto"> Likes: <span class="font-medium">117k</span> </div>
                        </div>
                        <div class="w-full flex items-center mt-3">
                            <div class="w-8 h-8 flex-none image-fit mr-3">
                                <img alt="Midone Tailwind HTML Admin Template" class="rounded-full"
                                    src="dist/images/profile-1.jpg">
                            </div>
                            <div class="flex-1 relative text-gray-700">
                                <input type="text"
                                    class="input w-full rounded-full bg-gray-200 pr-10 placeholder-theme-13"
                                    placeholder="Post a comment...">
                                <i data-feather="smile" class="w-4 h-4 absolute my-auto inset-y-0 mr-3 right-0"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="intro-y blog col-span-12 md:col-span-6 box">
                    <div class="blog__preview image-fit">
                        <img alt="Midone Tailwind HTML Admin Template" class="rounded-t-md"
                            src="dist/images/preview-6.jpg">
                        <div class="absolute w-full flex items-center px-5 pt-6 z-10">
                            <div class="w-10 h-10 flex-none image-fit">
                                <img alt="Midone Tailwind HTML Admin Template" class="rounded-full"
                                    src="dist/images/profile-6.jpg">
                            </div>
                            <div class="ml-3 text-white mr-auto">
                                <a href="" class="font-medium">Angelina Jolie</a>
                                <div class="text-xs">24 seconds ago</div>
                            </div>
                            <div class="dropdown relative ml-3">
                                <a href="javascript:;"
                                    class="blog__action dropdown-toggle w-8 h-8 flex items-center justify-center rounded-full">
                                    <i data-feather="more-vertical" class="w-4 h-4 text-white"></i> </a>
                                <div class="dropdown-box mt-8 absolute w-40 top-0 right-0 z-20">
                                    <div class="dropdown-box__content box p-2">
                                        <a href=""
                                            class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md">
                                            <i data-feather="edit-2" class="w-4 h-4 mr-2"></i> Edit Post </a>
                                        <a href=""
                                            class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md">
                                            <i data-feather="trash" class="w-4 h-4 mr-2"></i> Delete Post </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="absolute bottom-0 text-white px-5 pb-6 z-10"> <span
                                class="blog__category px-2 py-1 rounded">Smartphone &amp; Tablet</span> <a href=""
                                class="block font-medium text-xl mt-3">Desktop publishing software like Aldus
                                PageMaker</a> </div>
                    </div>
                    <div class="p-5 text-gray-700">Lorem Ipsum is simply dummy text of the printing and typesetting
                        industry. Lorem Ipsum has been the industry&#039;s standard dummy text ever since the 1500</div>
                    <div class="flex items-center px-5 py-3 border-t border-gray-200">
                        <a href=""
                            class="intro-x w-8 h-8 flex items-center justify-center rounded-full border border-gray-500 text-gray-600 mr-2 tooltip"
                            title="Bookmark"> <i data-feather="bookmark" class="w-3 h-3"></i> </a>
                        <div class="intro-x flex mr-2">
                            <div class="intro-x w-8 h-8 image-fit">
                                <img alt="Midone Tailwind HTML Admin Template"
                                    class="rounded-full border border-white zoom-in tooltip"
                                    src="dist/images/profile-6.jpg" title="Angelina Jolie">
                            </div>
                            <div class="intro-x w-8 h-8 image-fit -ml-4">
                                <img alt="Midone Tailwind HTML Admin Template"
                                    class="rounded-full border border-white zoom-in tooltip"
                                    src="dist/images/profile-15.jpg" title="Charlize Theron">
                            </div>
                            <div class="intro-x w-8 h-8 image-fit -ml-4">
                                <img alt="Midone Tailwind HTML Admin Template"
                                    class="rounded-full border border-white zoom-in tooltip"
                                    src="dist/images/profile-1.jpg" title="Matt Damon">
                            </div>
                        </div>
                        <a href=""
                            class="intro-x w-8 h-8 flex items-center justify-center rounded-full bg-theme-14 text-theme-10 ml-auto tooltip"
                            title="Share"> <i data-feather="share-2" class="w-3 h-3"></i> </a>
                        <a href=""
                            class="intro-x w-8 h-8 flex items-center justify-center rounded-full bg-theme-1 text-white ml-2 tooltip"
                            title="Download PDF"> <i data-feather="share" class="w-3 h-3"></i> </a>
                    </div>
                    <div class="px-5 pt-3 pb-5 border-t border-gray-200">
                        <div class="w-full flex text-gray-600 text-xs sm:text-sm">
                            <div class="mr-2"> Comments: <span class="font-medium">46</span> </div>
                            <div class="mr-2"> Views: <span class="font-medium">22k</span> </div>
                            <div class="ml-auto"> Likes: <span class="font-medium">59k</span> </div>
                        </div>
                        <div class="w-full flex items-center mt-3">
                            <div class="w-8 h-8 flex-none image-fit mr-3">
                                <img alt="Midone Tailwind HTML Admin Template" class="rounded-full"
                                    src="dist/images/profile-6.jpg">
                            </div>
                            <div class="flex-1 relative text-gray-700">
                                <input type="text"
                                    class="input w-full rounded-full bg-gray-200 pr-10 placeholder-theme-13"
                                    placeholder="Post a comment...">
                                <i data-feather="smile" class="w-4 h-4 absolute my-auto inset-y-0 mr-3 right-0"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="intro-y blog col-span-12 md:col-span-6 box">
                    <div class="blog__preview image-fit">
                        <img alt="Midone Tailwind HTML Admin Template" class="rounded-t-md"
                            src="dist/images/preview-10.jpg">
                        <div class="absolute w-full flex items-center px-5 pt-6 z-10">
                            <div class="w-10 h-10 flex-none image-fit">
                                <img alt="Midone Tailwind HTML Admin Template" class="rounded-full"
                                    src="dist/images/profile-5.jpg">
                            </div>
                            <div class="ml-3 text-white mr-auto">
                                <a href="" class="font-medium">Sylvester Stallone</a>
                                <div class="text-xs">22 hours ago</div>
                            </div>
                            <div class="dropdown relative ml-3">
                                <a href="javascript:;"
                                    class="blog__action dropdown-toggle w-8 h-8 flex items-center justify-center rounded-full">
                                    <i data-feather="more-vertical" class="w-4 h-4 text-white"></i> </a>
                                <div class="dropdown-box mt-8 absolute w-40 top-0 right-0 z-20">
                                    <div class="dropdown-box__content box p-2">
                                        <a href=""
                                            class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md">
                                            <i data-feather="edit-2" class="w-4 h-4 mr-2"></i> Edit Post </a>
                                        <a href=""
                                            class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md">
                                            <i data-feather="trash" class="w-4 h-4 mr-2"></i> Delete Post </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="absolute bottom-0 text-white px-5 pb-6 z-10"> <span
                                class="blog__category px-2 py-1 rounded">Sport &amp; Outdoor</span> <a href=""
                                class="block font-medium text-xl mt-3">Popularised in the 1960s with the release of
                                Letraset</a> </div>
                    </div>
                    <div class="p-5 text-gray-700">Contrary to popular belief, Lorem Ipsum is not simply random text. It
                        has roots in a piece of classical Latin literature from 45 BC, making it over 20</div>
                    <div class="flex items-center px-5 py-3 border-t border-gray-200">
                        <a href=""
                            class="intro-x w-8 h-8 flex items-center justify-center rounded-full border border-gray-500 text-gray-600 mr-2 tooltip"
                            title="Bookmark"> <i data-feather="bookmark" class="w-3 h-3"></i> </a>
                        <div class="intro-x flex mr-2">
                            <div class="intro-x w-8 h-8 image-fit">
                                <img alt="Midone Tailwind HTML Admin Template"
                                    class="rounded-full border border-white zoom-in tooltip"
                                    src="dist/images/profile-5.jpg" title="Sylvester Stallone">
                            </div>
                            <div class="intro-x w-8 h-8 image-fit -ml-4">
                                <img alt="Midone Tailwind HTML Admin Template"
                                    class="rounded-full border border-white zoom-in tooltip"
                                    src="dist/images/profile-1.jpg" title="Kate Winslet">
                            </div>
                            <div class="intro-x w-8 h-8 image-fit -ml-4">
                                <img alt="Midone Tailwind HTML Admin Template"
                                    class="rounded-full border border-white zoom-in tooltip"
                                    src="dist/images/profile-13.jpg" title="Sean Connery">
                            </div>
                        </div>
                        <a href=""
                            class="intro-x w-8 h-8 flex items-center justify-center rounded-full bg-theme-14 text-theme-10 ml-auto tooltip"
                            title="Share"> <i data-feather="share-2" class="w-3 h-3"></i> </a>
                        <a href=""
                            class="intro-x w-8 h-8 flex items-center justify-center rounded-full bg-theme-1 text-white ml-2 tooltip"
                            title="Download PDF"> <i data-feather="share" class="w-3 h-3"></i> </a>
                    </div>
                    <div class="px-5 pt-3 pb-5 border-t border-gray-200">
                        <div class="w-full flex text-gray-600 text-xs sm:text-sm">
                            <div class="mr-2"> Comments: <span class="font-medium">198</span> </div>
                            <div class="mr-2"> Views: <span class="font-medium">108k</span> </div>
                            <div class="ml-auto"> Likes: <span class="font-medium">25k</span> </div>
                        </div>
                        <div class="w-full flex items-center mt-3">
                            <div class="w-8 h-8 flex-none image-fit mr-3">
                                <img alt="Midone Tailwind HTML Admin Template" class="rounded-full"
                                    src="dist/images/profile-5.jpg">
                            </div>
                            <div class="flex-1 relative text-gray-700">
                                <input type="text"
                                    class="input w-full rounded-full bg-gray-200 pr-10 placeholder-theme-13"
                                    placeholder="Post a comment...">
                                <i data-feather="smile" class="w-4 h-4 absolute my-auto inset-y-0 mr-3 right-0"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="intro-y blog col-span-12 md:col-span-6 box">
                    <div class="blog__preview image-fit">
                        <img alt="Midone Tailwind HTML Admin Template" class="rounded-t-md"
                            src="dist/images/preview-13.jpg">
                        <div class="absolute w-full flex items-center px-5 pt-6 z-10">
                            <div class="w-10 h-10 flex-none image-fit">
                                <img alt="Midone Tailwind HTML Admin Template" class="rounded-full"
                                    src="dist/images/profile-5.jpg">
                            </div>
                            <div class="ml-3 text-white mr-auto">
                                <a href="" class="font-medium">Leonardo DiCaprio</a>
                                <div class="text-xs">30 seconds ago</div>
                            </div>
                            <div class="dropdown relative ml-3">
                                <a href="javascript:;"
                                    class="blog__action dropdown-toggle w-8 h-8 flex items-center justify-center rounded-full">
                                    <i data-feather="more-vertical" class="w-4 h-4 text-white"></i> </a>
                                <div class="dropdown-box mt-8 absolute w-40 top-0 right-0 z-20">
                                    <div class="dropdown-box__content box p-2">
                                        <a href=""
                                            class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md">
                                            <i data-feather="edit-2" class="w-4 h-4 mr-2"></i> Edit Post </a>
                                        <a href=""
                                            class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md">
                                            <i data-feather="trash" class="w-4 h-4 mr-2"></i> Delete Post </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="absolute bottom-0 text-white px-5 pb-6 z-10"> <span
                                class="blog__category px-2 py-1 rounded">Sport &amp; Outdoor</span> <a href=""
                                class="block font-medium text-xl mt-3">Dummy text of the printing and typesetting
                                industry</a> </div>
                    </div>
                    <div class="p-5 text-gray-700">It is a long established fact that a reader will be distracted by the
                        readable content of a page when looking at its layout. The point of using Lorem </div>
                    <div class="flex items-center px-5 py-3 border-t border-gray-200">
                        <a href=""
                            class="intro-x w-8 h-8 flex items-center justify-center rounded-full border border-gray-500 text-gray-600 mr-2 tooltip"
                            title="Bookmark"> <i data-feather="bookmark" class="w-3 h-3"></i> </a>
                        <div class="intro-x flex mr-2">
                            <div class="intro-x w-8 h-8 image-fit">
                                <img alt="Midone Tailwind HTML Admin Template"
                                    class="rounded-full border border-white zoom-in tooltip"
                                    src="dist/images/profile-5.jpg" title="Leonardo DiCaprio">
                            </div>
                            <div class="intro-x w-8 h-8 image-fit -ml-4">
                                <img alt="Midone Tailwind HTML Admin Template"
                                    class="rounded-full border border-white zoom-in tooltip"
                                    src="dist/images/profile-15.jpg" title="Hugh Jackman">
                            </div>
                            <div class="intro-x w-8 h-8 image-fit -ml-4">
                                <img alt="Midone Tailwind HTML Admin Template"
                                    class="rounded-full border border-white zoom-in tooltip"
                                    src="dist/images/profile-9.jpg" title="Keira Knightley">
                            </div>
                        </div>
                        <a href=""
                            class="intro-x w-8 h-8 flex items-center justify-center rounded-full bg-theme-14 text-theme-10 ml-auto tooltip"
                            title="Share"> <i data-feather="share-2" class="w-3 h-3"></i> </a>
                        <a href=""
                            class="intro-x w-8 h-8 flex items-center justify-center rounded-full bg-theme-1 text-white ml-2 tooltip"
                            title="Download PDF"> <i data-feather="share" class="w-3 h-3"></i> </a>
                    </div>
                    <div class="px-5 pt-3 pb-5 border-t border-gray-200">
                        <div class="w-full flex text-gray-600 text-xs sm:text-sm">
                            <div class="mr-2"> Comments: <span class="font-medium">36</span> </div>
                            <div class="mr-2"> Views: <span class="font-medium">136k</span> </div>
                            <div class="ml-auto"> Likes: <span class="font-medium">30k</span> </div>
                        </div>
                        <div class="w-full flex items-center mt-3">
                            <div class="w-8 h-8 flex-none image-fit mr-3">
                                <img alt="Midone Tailwind HTML Admin Template" class="rounded-full"
                                    src="dist/images/profile-5.jpg">
                            </div>
                            <div class="flex-1 relative text-gray-700">
                                <input type="text"
                                    class="input w-full rounded-full bg-gray-200 pr-10 placeholder-theme-13"
                                    placeholder="Post a comment...">
                                <i data-feather="smile" class="w-4 h-4 absolute my-auto inset-y-0 mr-3 right-0"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="intro-y blog col-span-12 md:col-span-6 box">
                    <div class="blog__preview image-fit">
                        <img alt="Midone Tailwind HTML Admin Template" class="rounded-t-md"
                            src="dist/images/preview-11.jpg">
                        <div class="absolute w-full flex items-center px-5 pt-6 z-10">
                            <div class="w-10 h-10 flex-none image-fit">
                                <img alt="Midone Tailwind HTML Admin Template" class="rounded-full"
                                    src="dist/images/profile-10.jpg">
                            </div>
                            <div class="ml-3 text-white mr-auto">
                                <a href="" class="font-medium">Keanu Reeves</a>
                                <div class="text-xs">26 seconds ago</div>
                            </div>
                            <div class="dropdown relative ml-3">
                                <a href="javascript:;"
                                    class="blog__action dropdown-toggle w-8 h-8 flex items-center justify-center rounded-full">
                                    <i data-feather="more-vertical" class="w-4 h-4 text-white"></i> </a>
                                <div class="dropdown-box mt-8 absolute w-40 top-0 right-0 z-20">
                                    <div class="dropdown-box__content box p-2">
                                        <a href=""
                                            class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md">
                                            <i data-feather="edit-2" class="w-4 h-4 mr-2"></i> Edit Post </a>
                                        <a href=""
                                            class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md">
                                            <i data-feather="trash" class="w-4 h-4 mr-2"></i> Delete Post </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="absolute bottom-0 text-white px-5 pb-6 z-10"> <span
                                class="blog__category px-2 py-1 rounded">Photography</span> <a href=""
                                class="block font-medium text-xl mt-3">200 Latin words, combined with a handful of model
                                sentences</a> </div>
                    </div>
                    <div class="p-5 text-gray-700">There are many variations of passages of Lorem Ipsum available, but
                        the majority have suffered alteration in some form, by injected humour, or randomi</div>
                    <div class="flex items-center px-5 py-3 border-t border-gray-200">
                        <a href=""
                            class="intro-x w-8 h-8 flex items-center justify-center rounded-full border border-gray-500 text-gray-600 mr-2 tooltip"
                            title="Bookmark"> <i data-feather="bookmark" class="w-3 h-3"></i> </a>
                        <div class="intro-x flex mr-2">
                            <div class="intro-x w-8 h-8 image-fit">
                                <img alt="Midone Tailwind HTML Admin Template"
                                    class="rounded-full border border-white zoom-in tooltip"
                                    src="dist/images/profile-10.jpg" title="Keanu Reeves">
                            </div>
                            <div class="intro-x w-8 h-8 image-fit -ml-4">
                                <img alt="Midone Tailwind HTML Admin Template"
                                    class="rounded-full border border-white zoom-in tooltip"
                                    src="dist/images/profile-13.jpg" title="Nicolas Cage">
                            </div>
                            <div class="intro-x w-8 h-8 image-fit -ml-4">
                                <img alt="Midone Tailwind HTML Admin Template"
                                    class="rounded-full border border-white zoom-in tooltip"
                                    src="dist/images/profile-8.jpg" title="Hugh Jackman">
                            </div>
                        </div>
                        <a href=""
                            class="intro-x w-8 h-8 flex items-center justify-center rounded-full bg-theme-14 text-theme-10 ml-auto tooltip"
                            title="Share"> <i data-feather="share-2" class="w-3 h-3"></i> </a>
                        <a href=""
                            class="intro-x w-8 h-8 flex items-center justify-center rounded-full bg-theme-1 text-white ml-2 tooltip"
                            title="Download PDF"> <i data-feather="share" class="w-3 h-3"></i> </a>
                    </div>
                    <div class="px-5 pt-3 pb-5 border-t border-gray-200">
                        <div class="w-full flex text-gray-600 text-xs sm:text-sm">
                            <div class="mr-2"> Comments: <span class="font-medium">201</span> </div>
                            <div class="mr-2"> Views: <span class="font-medium">47k</span> </div>
                            <div class="ml-auto"> Likes: <span class="font-medium">115k</span> </div>
                        </div>
                        <div class="w-full flex items-center mt-3">
                            <div class="w-8 h-8 flex-none image-fit mr-3">
                                <img alt="Midone Tailwind HTML Admin Template" class="rounded-full"
                                    src="dist/images/profile-10.jpg">
                            </div>
                            <div class="flex-1 relative text-gray-700">
                                <input type="text"
                                    class="input w-full rounded-full bg-gray-200 pr-10 placeholder-theme-13"
                                    placeholder="Post a comment...">
                                <i data-feather="smile" class="w-4 h-4 absolute my-auto inset-y-0 mr-3 right-0"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END: Blog Layout -->

            </div>
        </div>
        <script
            src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js">
        </script>

        <script src="{{ asset('dist/js/app.js') }}"></script>
    </body>

</html>
