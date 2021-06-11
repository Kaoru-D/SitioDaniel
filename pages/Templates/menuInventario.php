<!-- Sidebar Menu -->
<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="true">
        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
        <li class="nav-item menu-open">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-briefcase"></i>
                <p>
                    Módulos
                    <i class="right fas fa-angle-left"></i>
                </p>
            </a>



            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-truck"></i>
                        <p>
                            Proveedores
                            <i class="fas fa-angle-left right"></i>
                            <span class="badge badge-info right"></span>
                        </p>
                    </a>

                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="?Op=RProvider" class="nav-link">
                                <i class="far fa-edit nav-icon"></i>
                                <p>Registrar</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="?Op=CProvider" class="nav-link">
                                <i class="fas fa-search nav-icon"></i>
                                <p>Consultar</p>
                            </a>
                        </li>

                    </ul>
                </li>
            </ul>

            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-dollar-sign"></i>
                        <p>
                            Compras
                            <i class="fas fa-angle-left right"></i>
                            <span class="badge badge-info right"></span>
                        </p>
                    </a>

                    <ul class="nav nav-treeview">

                        <li class="nav-item">
                            <a href="?Op=RPurchases" class="nav-link">
                                <i class="far fa-edit nav-icon"></i>
                                <p>Registrar</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="?Op=CPurchases" class="nav-link">
                                <i class="fas fa-search nav-icon"></i>
                                <p>Consultar</p>
                            </a>
                        </li>

                    </ul>
                </li>
            </ul>

        </li>
        <li class="nav-item">
            <a href="?Op=Profile" class="nav-link">
                <i class="nav-icon fas fa-cogs"></i>
                <p>Perfil</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="?Op=SignOut" class="nav-link">
                <i class="nav-icon fa fa-ban"></i>
                <p>Cerrar Sesión</p>
            </a>
        </li>
    </ul>
</nav>