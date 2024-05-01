<!-- Brand Logo -->
<a href="" class="brand-link">

    {{-- <a href="{{ route('admin.dashboard') }}" class="brand-link"> --}}

    <span class="brand-text font-weight-bold">Mutiara Laundry

    </span>

</a>

<!-- Sidebar -->
<div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
            <img src="/AdminLTE/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
            {{-- <a href="{{ route('profile.edit') }}" class="d-block">{{ Auth::user()->name }}</a> --}}
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
            <li class="nav-item">
                {{-- <a href="{{ route('admin.dashboard') }}" class="nav-link"> --}}
                <a href="" class="nav-link">
                    <i class="nav-icon fas fa-home"></i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-briefcase"></i>
                    <p>
                        Master
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route('admin.master.customer.index') }}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Customer</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('admin.master.paket.index') }}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Paket</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('admin.master.cabang.index') }}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Cabang</p>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-copy"></i>
                    <p>
                        Transaksi
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route('admin.transaksi.pesanan.index') }}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>
                                Pesanan
                            </p>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </nav>
    <!-- /.sidebar-menu -->
</div>
