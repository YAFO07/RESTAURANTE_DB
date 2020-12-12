<div class="sidebar">
        <nav class="sidebar-nav">
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link active" href="main.html"><i class="icon-speedometer"></i> Escritorio</a>
                </li>
                <li class="nav-title">
                    Maestras
                </li>
                <li class="nav-item nav-dropdown">
                    <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-bag"></i> General</a>
                    <ul class="nav-dropdown-items">
                        <li @click="menu=1" class="nav-item">
                            <a class="nav-link" href="#"><i class="icon-bag"></i> Cliente</a>
                        </li>
                        <li @click="menu=2" class="nav-item">
                            <a class="nav-link" href="#"><i class="icon-bag"></i> Pedido</a>
                        </li>
                        <li @click="menu=3" class="nav-item">
                            <a class="nav-link" href="#"><i class="icon-bag"></i> Plato</a>
                        </li>
                        <li @click="menu=4" class="nav-item">
                            <a class="nav-link" href="#"><i class="icon-bag"></i> Det_Pedido</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item nav-dropdown">
                    <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-wallet"></i>Registro</a>
                    <ul class="nav-dropdown-items">
                        <li class="nav-item">
                            <a class="nav-link" href="i#"><i class="icon-wallet"></i>Pedido</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="icon-notebook"></i>Solicitud Pedido</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="icon-bag"></i>Usuarios</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="icon-bag"></i>Clientes</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="main.html"><i class="icon-book-open"></i> Ayuda <span class="badge badge-danger">PDF</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="main.html"><i class="icon-info"></i> Acerca de...<span class="badge badge-info">IT</span></a>
                </li>
            </ul>
        </nav>
        <button class="sidebar-minimizer brand-minimizer" type="button"></button>
    </div>
