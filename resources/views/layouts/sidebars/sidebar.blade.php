<aside class="main-sidebar sidebar-dark-primary elevation-2" style="background-color:  #fb5849; font-family: 'Dancing Script', cursive;">    
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
        <img src="admlte/img/Logocafe.png" alt="Logocafe" class="brand-image img-circle"
            style="opacity: .8">
        <span class="brand-text font-weight-light" style="color: white"><b>Garden <i>Cafe</i></b></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="admlte/img/user2-160x160.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block" style="color: white">{{ Auth::user()->level }}</a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
       with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="{{ route('home') }}" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p style="color: white">
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item has-treeview">
                    <a href="{{ route('product.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-th-large"></i>
                        <p style="color: white">Product</p>
                    </a>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-th-large"></i>
                        <p style="color: white">Cart</p>
                    </a>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-th-large"></i>
                        <p style="color: white">Order</p>
                    </a>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-th-large"></i>
                        <p style="color: white">Customer</p>
                    </a>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-th-large"></i>
                        <p style="color: white">Setting</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link" onclick="document.getElementById('logout-form').submit()">
                        <i class="nav-icon fas fa-sign-out-alt"></i>
                        <p style="color: white">Logout</p>
                        <form action="{{route('logout')}}" method="POST" id="logout-form">
                            @csrf
                        </form>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
