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
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            Usuarios
                            <i class="fas fa-angle-left right"></i>
                            <span class="badge badge-info right"></span>
                        </p>
                    </a>

                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="?Op=RUser" class="nav-link">
                                <i class="far fa-edit nav-icon"></i>
                                <p>Registrar</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="?Op=CUser" class="nav-link">
                                <i class="fas fa-search nav-icon"></i>
                                <p>Consultar</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="?Op=AUser" class="nav-link">
                                <i class="fas fa-undo nav-icon"></i>
                                <p>Actualizar</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-user-md"></i>
                        <p>
                            Clientes
                            <i class="fas fa-angle-left right"></i>
                            <span class="badge badge-info right"></span>
                        </p>
                    </a>

                    <ul class="nav nav-treeview">
                        
                        <li class="nav-item">
                            <a href="?Op=AClient" class="nav-link">
                                <i class="fas fa-undo nav-icon"></i>
                                <p>Actualizar</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-shopping-cart"></i>
                        <p>
                            Productos
                            <i class="fas fa-angle-left right"></i>
                            <span class="badge badge-info right"></span>
                        </p>
                    </a>

                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="?Op=RProduct" class="nav-link">
                                <i class="far fa-edit nav-icon"></i>
                                <p>Registrar</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="?Op=CProduct" class="nav-link">
                                <i class="fas fa-search nav-icon"></i>
                                <p>Consultar</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="?Op=AProduct" class="nav-link">
                                <i class="fas fa-undo nav-icon"></i>
                                <p>Actualizar</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
            
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-fax"></i>
                        <p>
                            Ventas
                            <i class="fas fa-angle-left right"></i>
                            <span class="badge badge-info right"></span>
                        </p>
                    </a>

                    <ul class="nav nav-treeview">
                        
                        <li class="nav-item">
                            <a href="?Op=ASale" class="nav-link">
                                <i class="fas fa-undo nav-icon"></i>
                                <p>Actualizar</p>
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
                            <a href="?Op=APurchases" class="nav-link">
                                <i class="fas fa-undo nav-icon"></i>
                                <p>Actualizar</p>
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