@php
    $role = Auth::user()->role;
@endphp

<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-radius-lg fixed-start ms-2  bg-white my-2"
    id="sidenav-main">
    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-dark opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
            aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand px-4 py-3 m-0" href=" https://demos.creative-tim.com/material-dashboard/pages/dashboard "
            target="_blank">
            <img src="../assets/img/logo-ct-dark.png" class="navbar-brand-img" width="26" height="26" alt="main_logo">
            <span class="ms-1 text-sm text-dark">Simagang</span>
        </a>
    </div>
    <hr class="horizontal dark mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
        <ul class="navbar-nav">

            {{-- sidebar admin --}}
            @if ($role === 'admin')
                <li class="nav-item">
                    <a class="nav-link text-dark" href="{{ route('admin.dashboard') }}">
                        <i class="material-symbols-rounded opacity-5">dashboard</i>
                        <span class="nav-link-text ms-1">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="{{ route('admin.tables') }}">
                        <i class="material-symbols-rounded opacity-5">table_view</i>
                        <span class="nav-link-text ms-1">Tables Admin</span>
                    </a>
                </li>
                <li class="nav-item mt-3">
                    <h6 class="ps-4 ms-2 text-uppercase text-xs text-dark font-weight-bolder opacity-5">Account pages
                    </h6>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="{{ route('admin.profile') }}">
                        <i class="material-symbols-rounded opacity-5">person</i>
                        <span class="nav-link-text ms-1">Profile Admin</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="">
                        <form action="{{ route('logout') }}">
                            @csrf
                            <button class="btn btn-icon btn-3 btn-primary text-center" type="submit">
                                <span class="btn-inner--icon"><i class="ni ni-button-play"></i></span>
                                <span class="btn-inner--text">Logout</span>
                            </button>
                        </form>
                    </a>
                </li>

            {{-- Mentor --}}
            @elseif($role === 'mentor')
                <li class="nav-item">
                    <a class="nav-link text-dark" href="{{ route ('mentor.dashboard') }}">
                        <i class="material-symbols-rounded opacity-5">dashboard</i>
                        <span class="nav-link-text ms-1">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="{{ route ('mentor.tables') }}">
                        <i class="material-symbols-rounded opacity-5">table_view</i>
                        <span class="nav-link-text ms-1">Tables Mentor</span>
                    </a>
                </li>
                <li class="nav-item mt-3">
                    <h6 class="ps-4 ms-2 text-uppercase text-xs text-dark font-weight-bolder opacity-5">Account pages
                    </h6>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="{{ route ('mentor.profile') }}">
                        <i class="material-symbols-rounded opacity-5">person</i>
                        <span class="nav-link-text ms-1">Profile Mentor</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="">
                        <form action="{{ route('logout') }}">
                            @csrf
                            <button class="btn btn-icon btn-3 btn-primary text-center" type="submit">
                                <span class="btn-inner--icon"><i class="ni ni-button-play"></i></span>
                                <span class="btn-inner--text">Logout</span>
                            </button>
                        </form>
                    </a>
                </li>

                {{-- sidebar role peserta --}}
            @elseif($role === 'peserta')
                <li class="nav-item">
                    <a class="nav-link text-dark" href="{{ route ('peserta.dashboard') }}">
                        <i class="material-symbols-rounded opacity-5">dashboard</i>
                        <span class="nav-link-text ms-1">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="{{ route ('peserta.tables') }}">
                        <i class="material-symbols-rounded opacity-5">table_view</i>
                        <span class="nav-link-text ms-1">Tables Peserta</span>
                    </a>
                </li>
                <li class="nav-item mt-3">
                    <h6 class="ps-4 ms-2 text-uppercase text-xs text-dark font-weight-bolder opacity-5">Account pages
                    </h6>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="{{ route ('peserta.profile') }}">
                        <i class="material-symbols-rounded opacity-5">person</i>
                        <span class="nav-link-text ms-1">Profile Peserta</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="">
                        <form action="{{ route('logout') }}">
                            @csrf
                            <button class="btn btn-icon btn-3 btn-primary text-center" type="submit">
                                <span class="btn-inner--icon"><i class="ni ni-button-back"></i></span>
                                <span class="btn-inner--text">Logout</span>
                            </button>
                        </form>
                    </a>
                </li>
            @endif
        </ul>
    </div>
</aside>