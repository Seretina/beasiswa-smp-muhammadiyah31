<header class="app-header navbar">
    <button class="navbar-toggler sidebar-toggler d-lg-none mr-auto" type="button" data-toggle="sidebar-show">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="#">
        <img class="navbar-brand-full" src="{{ asset('assets/img_asset/logo.png') }}" width="40px" height="30px"
            alt="SPK-TOPSIS">
        <img class="navbar-brand-minimized" src="{{ asset('assets/img_asset/logo.png') }}" width="40" height="20"
            alt="WarungData-Logo">
    </a>
    <button class="navbar-toggler sidebar-toggler d-md-down-none" type="button" data-toggle="sidebar-lg-show">
        <span class="navbar-toggler-icon"></span>
    </button>
    <ul class="nav navbar-nav ml-auto">

        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
                aria-expanded="false">
                <img class="img-avatar" src="{{ asset('assets/img/avatars/user.png') }}"
                    alt="admin@bootstrapmaster.com">
            </a>
            <span
                style="padding-right: 10px; color: red">
                <div class="dropdown-menu dropdown-menu-right">
                    <div class="dropdown-header text-center">
                        <i class="fa fa-user"></i>&nbsp;&nbsp;
                        <span style="color: #c80064">
                        </span>
                    </div>
                    <div class="divider"></div>
                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                        <i class="fa fa-lock"></i>
                        <span>
                            Logout
                        </span>
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
        </li>
    </ul>
</header>
