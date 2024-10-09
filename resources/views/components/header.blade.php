<nav class="navbar navbar-expand-lg bg-white py-3">
    <div class="container-fluid">
        <a href="." class="navbar-brand logo">
            <img src="assets/images/logo.png" alt=""> KasirOnlen
        </a>
        <button class="navbar-toggler border-0 shadow-none" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarMenu">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarMenu">
            <ul class="navbar-nav mx-auto gap-2">
                <li class="nav-item">
                    <a href="{{ route('dashboard') }}"
                        class="nav-link px-4 {{ request()->routeIs('dashboard') ? 'active' : '' }}">
                        <i class="bx bxs-dashboard"></i> Dashboard
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('menus.index') }}"
                        class="nav-link px-4 {{ request()->routeIs('menus.index') ? 'active' : '' }}">
                        <i class="bx bx-food-menu"></i> Menu
                    </a>
                </li>
                <li class="nav-item">
                    <a href="dashboard-pendapatan.html" class="nav-link px-4">
                        <i class="bx bx-money"></i> Pendapatan
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('cashiers.index') }}"
                        class="nav-link px-4 {{ request()->routeIs('cashiers.index') ? 'active' : '' }}">
                        <i class="bx bx-user-pin"></i> Kasir
                    </a>
                </li>
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        {{ auth()->user()->name }}
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end mt-2">
                        <li><a class="dropdown-item" href="#">Setting</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li>
                            <form action="{{ route('logout') }}" method="post">
                                @csrf
                                <button class="dropdown-item" type="submit">Log Out</button>
                            </form>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
