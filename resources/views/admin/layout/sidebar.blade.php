<div>
    <div class="wrapper">
        <nav class="main-header navbar navbar-expand navbar-light">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item mr-3">
                    <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                        <i class="fa-solid fa-gear mr-2"></i> </a>
                    <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right mr-3">
                        <div class=" dropdown-header noti-title">
                            <h6 class="text-overflow m-0" style="text-align: left;">Welcome! {{ auth()->user()->name }}
                            </h6>
                        </div>
                        <a href="#" class="dropdown-item">
                            <i class="fa fa-user mr-2"></i>
                            <span>My profile</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        {{-- <a href="#" class="dropdown-item" data-toggle="modal" data-target="#logout">
                            <i class="fa-solid fa-arrow-right-from-bracket mr-2"></i>
                            <span>Logout</span>
                        </a> --}}

                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="dropdown-item"><i
                                    class="fa-solid fa-arrow-right-from-bracket mr-2"></i><span>Logout</span></button>
                        </form>
                    </div>
                </li>
            </ul>
        </nav>
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <a href="/admin/dashboard" class="brand-link">
                <img src="/images/logo.png" alt="MDC logo" class="brand-image img-circle elevation-0"
                    style="opacity: .8; border-radius: 50%;">
                <span class="brand-text"><strong id="branding-mdc">MDC-GIS-SHS</strong></span>
            </a>
            <div class="sidebar">
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img id="sidebar-img" src="{{ Auth::user()->profile_image === null ? url('images/profile.jpg') : Storage::url(Auth::user()->profile_image) }}" class="img-circle elevation-2" alt="User Image"
                            style="border-radius: 50%; width: 40px; height: 40px;">
                    </div>
                    <div class="info">
                        <a href="/admin/profile" class="d-block">Welcome, {{ auth()->user()->name }}</a>
                    </div>
                </div>
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar nav-child-indent flex-column" data-widget="treeview"
                        role="menu">
                        <li class="nav-item">
                            <a href="/admin/dashboard"
                                class="nav-link {{ 'admin/dashboard' == request()->path() ? 'active2' : '' }}">
                                <i class="nav-icon fa-solid fa-gauge-max"></i>
                                <p>
                                    Dashboard
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/admin/announcements"
                                class="nav-link {{ 'admin/announcements' == request()->path() ? 'active2' : '' }}">
                                <i class="nav-icon fa-solid fa-bullhorn"></i>
                                <p>
                                    Announcement
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/admin/messages"
                                class="nav-link {{ 'admin/messages' == request()->path() ? 'active2' : '' }}">
                                <i class="nav-icon fa-solid fa-inbox"></i>
                                <p>
                                    Messages
                                </p>
                            </a>
                        </li>
                        <li class="nav-item menu-close">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fa-solid fa-list"></i>
                                <p>
                                    List
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="nav-icon far fa-circle"></i>
                                        <p>List</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-header">SETTING MANAGEMENT</li>
                        <li class="nav-item menu-open">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fa-solid fa-gear"></i>
                                <p>
                                    Settings
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">

                                <li class="nav-item">
                                    <a href="#/"
                                        class="nav-link {{ 'admin/#' == request()->path() ? 'active2' : '' }}">
                                        <i class="fa-solid fa-user nav-icon"></i>
                                        <p>My Profile</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <button style="margin-left: -62px;" type="submit" class="btn nav-link" data-toggle="modal"
                                            data-target="#logout">
                                            <i class="fa-solid fa-right-from-bracket nav-icon"></i>
                                            <span>Logout</span>
                                        </button>
                                    </form>
                                </li>

                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <div class="content-wrapper px-4 py-2">
            <div class="content-header">
                @yield('content-header')
            </div>
            <hr>
            <div class="content px-2">

                @yield('content')

            </div>
        </div>

        <footer class="main-footer">
            <div class="float-right d-none d-sm-inline">
                <span id="date"></span>
                <span id="time"></span></span>
            </div>
            <strong>Copyright &copy; 2023-2024 <a href="#" target="_blank">MDC-GIS-SHS</a>.</strong> All rights
            reserved.
        </footer>
    </div>
</div>


<style>
    .active2 {
        background-color: #597da0 !important;
        color: whitesmoke !important;
    }
</style>
