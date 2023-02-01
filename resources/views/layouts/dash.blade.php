<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" style="height: 100%;">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!-- Primary Meta Tags -->
    <title>{{ config('myglobals.app_name') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="title" content="{{ config('myglobals.app_name') }}">
    <meta name="author" content="{{ config('myglobals.app_name') }}">
    <meta name="description" content="{{ config('myglobals.seo.description') }}">
    <meta name="keywords" content="{{ config('myglobals.seo.keywords') }}" />

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ config('app.url') }}">
    <meta property="og:title" content="{{ config('myglobals.app_name') }}">
    <meta property="og:description" content="{{ config('myglobals.seo.description') }}">
    <meta property="og:image" content="{{ asset('images/banner.png') }}">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="{{ config('app.url') }}">
    <meta property="twitter:title" content="{{ config('myglobals.app_name') }}">
    <meta property="twitter:description" content="{{ config('myglobals.seo.description') }}">
    <meta property="twitter:image" content="{{ asset('images/banner.png') }}">

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('images/favicon/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/favicon/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('images/favicon/site.webmanifest') }}">
    <meta name="msapplication-TileColor" content="#D44B25">
    <meta name="theme-color" content="#ffffff">

    <!-- Sweet Alert -->
    <link type="text/css" href="{{ asset('vendor/sweetalert2/dist/sweetalert2.min.css') }}" rel="stylesheet">

    <!-- Notyf -->
    <link type="text/css" href="{{ asset('vendor/notyf/notyf.min.css') }}" rel="stylesheet">

    <!-- Dashboard CSS -->
    <link type="text/css" href="{{ asset('css/dash.css') }}" rel="stylesheet">

</head>

<body>

    <nav id="sidebarMenu" class="sidebar d-lg-block bg-gray-800 text-white collapse" data-simplebar>
        <div class="sidebar-inner px-4 pt-3">
            <div
                class="user-card d-flex d-md-none align-items-center justify-content-between justify-content-md-center pb-4">
                <div class="d-flex align-items-center">
                    <div class="d-block">
                        <h2 class="h5 mb-3">Hi, {{ Auth::user()->username }}</h2>
                        <a href="{{ route('logout') }}"
                            class="btn btn-secondary btn-sm d-inline-flex align-items-center">
                            <svg class="icon icon-xxs me-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1">
                                </path>
                            </svg>
                            Sign Out
                        </a>
                    </div>
                </div>
                <div class="collapse-close d-md-none">
                    <a href="#sidebarMenu" data-bs-toggle="collapse" data-bs-target="#sidebarMenu"
                        aria-controls="sidebarMenu" aria-expanded="true" aria-label="Toggle navigation">
                        <svg class="icon icon-xs" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </a>
                </div>
            </div>
            <ul class="nav flex-column pt-3 pt-md-0">
                <li class="nav-item">
                    <span class="sidebar-icon">
                        <img src="{{ asset('images/brand/light.svg') }}" height="20" width="20" alt="logo">
                    </span>
                    <span class="mt-1 ms-1 sidebar-text">{{ config('myglobals.app_name') }}</span>
                </li>
                <li class="nav-item @if (Request::is('home')) active @endif">
                    <a href="{{ route('home') }}" class="nav-link">
                        <span class="sidebar-icon">
                            <svg class="icon icon-xs me-2" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z">
                                </path>
                            </svg>
                        </span>
                        <span class="sidebar-text">Overview</span>
                    </a>
                </li>
                <li class="nav-item @if (Request::is('deposit')) active @endif">
                    <a href="{{ route('deposit') }}" class="nav-link d-flex justify-content-between">
                        <span>
                            <span class="sidebar-icon">
                                <svg class="icon icon-xs me-2" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M4 4a2 2 0 00-2 2v1h16V6a2 2 0 00-2-2H4z"></path>
                                    <path fill-rule="evenodd"
                                        d="M18 9H2v5a2 2 0 002 2h12a2 2 0 002-2V9zM4 13a1 1 0 011-1h1a1 1 0 110 2H5a1 1 0 01-1-1zm5-1a1 1 0 100 2h1a1 1 0 100-2H9z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </span>
                            <span class="sidebar-text">Make Invest</span>
                        </span>
                    </a>
                </li>
                <li class="nav-item @if (Request::is('deposit_list')) active @endif">
                    <a href="{{ route('deposit_list') }}" class="nav-link">
                        <span class="sidebar-icon">
                            <svg class="icon icon-xs me-2" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z"></path>
                                <path fill-rule="evenodd"
                                    d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm3 4a1 1 0 000 2h.01a1 1 0 100-2H7zm3 0a1 1 0 000 2h3a1 1 0 100-2h-3zm-3 4a1 1 0 100 2h.01a1 1 0 100-2H7zm3 0a1 1 0 100 2h3a1 1 0 100-2h-3z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </span>
                        <span class="sidebar-text">My Investments</span>
                    </a>
                </li>
                <li class="nav-item @if (Request::is('referrals')) active @endif">
                    <a href="{{ route('referrals') }}" class="nav-link">
                        <span class="sidebar-icon">
                            <svg class="icon icon-xs me-1" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                                enable-background="new 0 0 64 64" viewBox="0 0 64 64">
                                <path
                                    d="M32.01 35.15c3.74 0 7.42-6.08 7.42-12.27 0-6.46-4.04-7.82-7.42-7.82-3.4 0-7.42 1.36-7.42 7.82C24.59 29.07 28.26 35.15 32.01 35.15zM44.45 39.76c-1.56-.48-3.39-1.26-5.41-2.32-.96-.52-1.98-1.09-3.01-1.71-1.2.93-2.56 1.48-4.02 1.48-1.46 0-2.82-.55-4.03-1.48-.8.49-1.84 1.1-3.02 1.71-.55.29-1.08.55-1.58.79-1.41.67-2.68 1.18-3.82 1.53-4.14 1.29-5.19 6.83-5.44 9.17h35.77C49.63 46.6 48.6 41.06 44.45 39.76zM50.91 34.22c.76 0 1.5-.35 2.18-.95.03-.02.05-.05.08-.07 1.71-1.57 3.02-4.71 3.02-7.9 0-4.62-2.88-5.59-5.29-5.59-2.42 0-5.3.97-5.3 5.59 0 3.2 1.33 6.36 3.05 7.92C49.37 33.84 50.14 34.22 50.91 34.22zM60.16 38.18c-1.16-.35-2.49-.92-4.1-1.75-.82-.43-1.55-.86-2.12-1.2-.91.66-1.94 1.06-3.02 1.06-1.1 0-2.12-.39-3.03-1.06-.71.43-1.42.84-2.12 1.2-.68.36-1.33.67-1.93.93.43.17.84.3 1.23.42 3.36 1.05 5.1 4.01 6 6.75H64C63.77 42.7 62.95 39.06 60.16 38.18zM10.91 33.26c.68.6 1.43.95 2.18.95.77 0 1.53-.36 2.23-.98.02-.02.03-.03.04-.04 1.72-1.57 3.03-4.71 3.03-7.9 0-4.62-2.88-5.59-5.3-5.59-2.41 0-5.29.97-5.29 5.59 0 3.18 1.3 6.32 3.01 7.89C10.85 33.21 10.88 33.23 10.91 33.26zM18.95 37.79c.39-.11.81-.26 1.23-.42-.6-.27-1.24-.58-1.94-.93-.82-.42-1.54-.85-2.12-1.2-.91.66-1.93 1.06-3.02 1.06s-2.11-.39-3.02-1.06c-.54.33-1.27.76-2.13 1.2-1.58.83-2.93 1.4-4.08 1.75C1.06 39.06.24 42.7 0 44.54h12.94C13.84 41.79 15.58 38.83 18.95 37.79z" />
                            </svg>
                        </span>
                        <span class="sidebar-text">My Referral</span>
                    </a>
                </li>
                <li class="nav-item @if (Request::is('withdraw')) active @endif">
                    <a href="{{ route('withdraw') }}" class="nav-link">
                        <span class="sidebar-icon">
                            <svg class="icon icon-xs me-2" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M4 3a2 2 0 100 4h12a2 2 0 100-4H4z"></path>
                                <path fill-rule="evenodd"
                                    d="M3 8h14v7a2 2 0 01-2 2H5a2 2 0 01-2-2V8zm5 3a1 1 0 011-1h2a1 1 0 110 2H9a1 1 0 01-1-1z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </span>
                        <span class="sidebar-text">Withdraw Funds</span>
                    </a>
                </li>
                <li class="nav-item @if (Request::is('edit_account')) active @endif">
                    <a href="{{ route('profile') }}" class="nav-link">
                        <span class="sidebar-icon">
                            <svg class="icon icon-xs me-2" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </span>
                        <span class="sidebar-text">Profile</span>
                    </a>
                </li>
            </ul>
        </div>
    </nav>

    <main class="content">

        {{-- User Icon --}}
        <nav class="navbar navbar-top navbar-expand navbar-dashboard navbar-dark ps-0 pe-2 pb-0">
            <div class="container-fluid px-0">
                <div class="d-flex justify-content-between w-100" id="navbarSupportedContent">
                    <div class="d-flex align-items-center">
                        <button class="btn btn-tertiary d-lg-none collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false"
                            aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                    </div>
                    <!-- Navbar links -->
                    <ul class="navbar-nav align-items-center">
                        <li class="nav-item dropdown ms-lg-3">
                            <a class="nav-link dropdown-toggle pt-1 px-0" href="#" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <div class="media d-flex align-items-center">
                                    <svg class="avatar rounded-circle text-gray-400" fill="currentColor"
                                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    <div class="media-body ms-2 text-dark align-items-center d-none d-lg-block">
                                        <span
                                            class="mb-0 font-small fw-bold text-gray-900">{{ Auth::user()->username }}</span>
                                    </div>
                                </div>
                            </a>
                            <div class="dropdown-menu dashboard-dropdown dropdown-menu-end mt-2 py-1">
                                <a class="dropdown-item d-flex align-items-center" href="{{ route('profile') }}">
                                    <svg class="dropdown-icon text-gray-400 me-2" fill="currentColor"
                                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    My Profile
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="{{ url('settings') }}">
                                    <svg class="dropdown-icon text-gray-400 me-2" fill="currentColor"
                                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    Settings
                                </a>
                                <div role="separator" class="dropdown-divider my-1"></div>
                                <a href="{{ route('logout') }}" class="dropdown-item d-flex align-items-center"
                                    onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    <svg class="dropdown-icon text-danger me-2" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1">
                                        </path>
                                    </svg>
                                    Logout
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')

        <footer class="bg-white rounded shadow p-3 mb-4 mt-4">
            <div class="row">
                <div class="col-12 col-md-4 col-xl-6 mb-4 mb-md-0">
                    <p class="mb-0 text-center text-lg-start">© 2021-<span class="current-year"></span> <a
                            class="text-indigo fw-normal" href="{{ config('app.url') }}"
                            target="_blank">{{ config('myglobals.app_name') }}</a></p>
                </div>
            </div>
        </footer>
    </main>

    <script src="{{ asset('vendor/@popperjs/core/dist/umd/popper.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('vendor/onscreen/dist/on-screen.umd.min.js') }}"></script>
    <script src="{{ asset('vendor/nouislider/dist/nouislider.min.js') }}"></script>
    <script src="{{ asset('vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js') }}"></script>
    <script src="{{ asset('vendor/chartist/dist/chartist.min.js') }}"></script>
    <script src="{{ asset('vendor/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js') }}"></script>
    <script src="{{ asset('vendor/vanillajs-datepicker/dist/js/datepicker.min.js') }}"></script>
    <script src="{{ asset('vendor/sweetalert2/dist/sweetalert2.all.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.27.0/moment.min.js"></script>
    <script src="{{ asset('vendor/vanillajs-datepicker/dist/js/datepicker.min.js') }}"></script>
    <script src="{{ asset('vendor/notyf/notyf.min.js') }}"></script>
    <script src="{{ asset('vendor/simplebar/dist/simplebar.min.js') }}"></script>
    <script src="{{ asset('js/dash.js') }}"></script>
    @yield('script')
</body>

</html>
