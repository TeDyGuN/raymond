<aside id="left-panel">
    <!-- User info -->
    <div class="login-info">
        <span> <!-- User image size is adjusted inside CSS, it should stay as it -->

            <a href="javascript:void(0);" id="show-shortcut" data-action="toggleShortcut">
                <img src="{{ asset('plantilla/img/avatars/male.png') }}" alt="me" class="online" />
                <span>
                    Administrador
                </span>
            </a>

        </span>
    </div>
    <!-- end user info -->

    <!-- NAVIGATION : This navigation is also responsive-->
    <nav>
        <!--
        NOTE: Notice the gaps after each icon usage <i></i>..
        Please note that these links work a bit different than
        traditional href="" links. See documentation for details.
        -->

        <ul>
            <li class="active">
                <a href="{{ url('/') }}" title="Dashboard"><i class="fa fa-lg fa-fw fa-home"></i> <span class="menu-item-parent">Inicio</span></a>
            </li>
            <li>
                <a href="#"><i class="fa fa-lg fa-fw fa-bar-chart-o"></i> <span class="menu-item-parent">Telas</span></a>
                <ul>
                    <li>
                        <a href="#">Crear Tela</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-lg fa-fw fa-table"></i> <span class="menu-item-parent">Pedidos</span></a>
                <ul>
                    <li>
                        <a href="{{ route('admin031217.pedidos.index') }}">Ver Pedidos</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-lg fa-fw fa-cloud"><em>3</em></i> <span class="menu-item-parent">Reportes</span></a>
                <ul>
                    <li>
                        <a href="#">Telas</a>
                    </li>
                    <li>
                        <a href="{{ url('admin031217/reportes/pedidos') }}">Pedidos</a>
                    </li>
                </ul>
            </li>
        </ul>
    </nav>


    <span class="minifyme" data-action="minifyMenu">
                    <i class="fa fa-arrow-circle-left hit"></i>
                </span>

</aside>
<!-- END NAVIGATION -->
