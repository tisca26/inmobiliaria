<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header">
                <div class="dropdown profile-element">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold"><?php echo get_attr_session('usr_nombre') . ' ' . get_attr_session('usr_apellidos'); ?></strong>
                             </span> <span class="text-muted text-xs block"><?php echo EMPRESA_NOMBRE; ?> <b class="caret"></b></span> </span> </a>
                    <ul class="dropdown-menu animated fadeInRight m-t-xs">
                        <li><a href="<?php echo base_url() . 'admon/login/salir'; ?>">Salir</a></li>
                    </ul>
                </div>
                <div class="logo-element">
                    OI
                </div>
            </li>
            <li>
                <a href="<?php echo base_url('admon/agentes'); ?>"><i class="fa fa-th-large"></i> <span class="nav-label">Agentes</span></a>
            </li>
            <li>
                <a href="<?php echo base_url('admon/propiedades'); ?>"><i class="fa fa-th-large"></i> <span class="nav-label">Propiedades</span> </a>
            </li>
        </ul>

    </div>
</nav>