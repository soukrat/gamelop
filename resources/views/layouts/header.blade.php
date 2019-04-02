<nav id="sidebar">
    <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 253px;"><div id="sidebar-scroll" style="overflow: hidden; width: auto; height: 253px;">
            <div class="sidebar-content">
                <div class="content-header content-header-fullrow px-15">
                    <div class="content-header-section sidebar-mini-visible-b">
                    <span class="content-header-item font-w700 font-size-xl float-left animated fadeIn">
                        <span class="text-dual-primary-dark">c</span><span class="text-primary">b</span>
                    </span>
                    </div>
                    <div class="content-header-section text-center align-parent sidebar-mini-hidden">
                        <button type="button" class="btn btn-circle btn-dual-secondary d-lg-none align-v-r" data-toggle="layout" data-action="sidebar_close">
                            <i class="fa fa-times text-danger"></i>
                        </button>
                        <div class="content-header-item">
                            <a class="link-effect font-w700" href="">

                                <span class="font-size-xl text-dual-primary-dark">Moro</span><span class="font-size-xl text-primary">Pass</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="content-side content-side-full px-10 align-parent">
                    <div class="sidebar-mini-visible-b align-v animated fadeIn">
                        <img class="img-avatar img-avatar32" src="" alt="">
                    </div>
                    <div class="sidebar-mini-hidden-b text-center">

                        <ul class="list-inline mt-10">
                            <li class="list-inline-item">
                                <a class="link-effect text-dual-primary-dark font-size-xs font-w600 text-uppercase" href="">{{ Auth::user()->nom }} {{ Auth::user()->prenom }}</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="{{ route('logout') }}" class="link-effect text-dual-primary-dark"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    <i class="si si-logout"></i>
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>

            <!-- Side Navigation -->
            <div class="content-side content-side-full">
                <ul class="nav-main">
                    <li class="open">
                        <a href="/home"><i class="si si-home fa-3x text-primary-light"></i><span class="sidebar-mini-hide">Dashboard</span></a>
                    </li>
                    <li>
                        <a href="/cridite"><i class="si si-call-out  fa-3x text-earth-light"></i><span class="sidebar-mini-hide">Ajouter Cap</span></a>
                    </li>
                    <li>
                        <a href="/store"><i class="si si-game-controller fa-3x text-elegance-light"></i><span class="sidebar-mini-hide">Boutique</span></a>
                    </li>
                    <li>
                        <a href="/parametre"><i class="fa fa-money  fa-3x text-corporate-light"></i><span class="sidebar-mini-hide">Demande</span></a>
                    </li>
                </ul>
            </div>
            <!-- END Side Navigation -->
        </div>
        <!-- Sidebar Content -->
    </div>
    </div>
    <!-- END Sidebar Scroll Container -->
</nav>
<!-- END Sidebar -->

<!-- Header -->
<header id="page-header">
    <!-- Header Content -->
    <div class="content-header">
        <!-- Left Section -->
        <div class="content-header-section">
            <!-- Toggle Sidebar -->
            <button type="button" class="btn btn-circle btn-dual-secondary" data-toggle="layout" data-action="sidebar_toggle">
                <i class="fa fa-navicon"></i>
            </button>
            {{--<!-- END Logo -->--}}
        </div>
        <!-- END Left Section -->

        <!-- Right Section -->
        <div class="content-header-section">
            <!-- User Dropdown -->
            <div class="btn-group" role="group">
                <button type="button" class="btn btn-rounded btn-dual-secondary" id="page-header-user-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    {{ Auth::user()->nom }}<i class="fa fa-angle-down ml-5"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-right min-width-150" aria-labelledby="page-header-user-dropdown">
                    <a href="{{ route('logout') }}" class="dropdown-item"
                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        Deconnecter
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </div>
            </div>
            <!-- END User Dropdown -->
        </div>
        <!-- END Right Section -->
    </div>
    <!-- END Header Content -->



    <!-- Header Loader -->
    <!-- Please check out the Activity page under Elements category to see examples of showing/hiding it -->
    <div id="page-header-loader" class="overlay-header bg-primary">
        <div class="content-header content-header-fullrow text-center">
            <div class="content-header-item">
                <i class="fa fa-sun-o fa-spin text-white"></i>
            </div>
        </div>
    </div>
    <!-- END Header Loader -->
</header>
<!-- END Header -->