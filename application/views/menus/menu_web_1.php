<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<nav>
    <ul class="nav nav-pills" id="mainNav">
        <li class="dropdown-full-color dropdown-quaternary <?php echo $menu_root === '' ? 'active' : ''; ?>">
            <a href="<?php echo base_url_lang(); ?>">
                <?php echo trans_line('menu_inicio'); ?>
            </a>
        </li>
        <li class="dropdown-full-color dropdown-quaternary <?php echo $menu_root === 'propiedades' ? 'active' : ''; ?>">
            <a href="<?php echo base_url_lang_slash() . 'propiedades'; ?>">
                <?php echo trans_line('menu_propiedades'); ?>
            </a>
        </li>

        <li class="dropdown dropdown-full-color dropdown-quaternary <?php echo $menu_root === 'acerca' ? 'active' : ''; ?>">
            <a class="dropdown-toggle" href="<?php echo base_url_lang_slash() . 'nosotros'; ?>">
                <?php echo trans_line('menu_acerca'); ?>
            </a>
            <ul class="dropdown-menu">
                <li><a href="<?php echo base_url_lang_slash() . 'agentes'; ?>"><?php echo trans_line('menu_agentes'); ?></a></li>
                <li><a href="<?php echo base_url_lang_slash() . 'nosotros'; ?>"><?php echo trans_line('menu_nosotros'); ?></a></li>
            </ul>
        </li>
        <li class="dropdown-full-color dropdown-quaternary <?php echo $menu_root === 'contacto' ? 'active' : ''; ?>">
            <a href="<?php echo base_url_lang_slash() . 'contacto'; ?>">
                <?php echo trans_line('menu_contacto'); ?>
            </a>
        </li>
        <li class="dropdown dropdown-full-color dropdown-quaternary dropdown-mega"
            id="headerSearchProperties">
            <a class="dropdown-toggle" href="#">
                <?php echo trans_line('menu_buscar'); ?> <i class="fa fa-search"></i>
            </a>
            <ul class="dropdown-menu custom-fullwidth-dropdown-menu">
                <li>
                    <div class="dropdown-mega-content">
                        <form id="propertiesFormHeader" action="<?php echo base_url_lang_slash() . 'propiedades/buscar'?>" method="POST">
                            <div class="container p-none">
                                <div class="row">
                                    <?php $busqueda_dto = obtener_buscador_dto(); ?>
                                    <div class="col-md-2">
                                        <div class="form-control-custom mb-md">
                                            <select class="form-control text-uppercase font-size-sm"
                                                    name="propertiesPropertyType"
                                                    data-msg-required="This field is required." id="propertiesPropertyType">
                                                <option value=""><?php echo trans_line('buscador_tipo_propiedad'); ?></option>
                                                <?php foreach ($busqueda_dto->tipos_propiedades as $busqueda_tipos_propiedades): ?>
                                                    <option value="<?php echo $busqueda_tipos_propiedades->tipo_propiedad_id; ?>"><?php echo trans_line($busqueda_tipos_propiedades->nombre); ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-control-custom mb-md">
                                            <select class="form-control text-uppercase font-size-sm"
                                                    name="propertiesLocation" data-msg-required="This field is required."
                                                    id="propertiesLocation">
                                                <option value=""><?php echo trans_line('buscador_estado'); ?></option>
                                                <?php foreach ($busqueda_dto->ubicaciones as $busqueda_ubicacion): ?>
                                                    <option value="<?php echo $busqueda_ubicacion->estado; ?>"><?php echo $busqueda_ubicacion->estado; ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-control-custom mb-md">
                                            <select class="form-control text-uppercase font-size-sm"
                                                    name="propertiesMinBeds" data-msg-required="This field is required."
                                                    id="propertiesMinBeds" >
                                                <option value=""><?php echo trans_line('buscador_cuartos'); ?></option>
                                                <?php foreach ($busqueda_dto->cuartos as $busqueda_cuarto): ?>
                                                    <option value="<?php echo $busqueda_cuarto; ?>"><?php echo $busqueda_cuarto; ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-control-custom mb-md">
                                            <select class="form-control text-uppercase font-size-sm"
                                                    name="propertiesMinPrice" data-msg-required="This field is required."
                                                    id="propertiesMinPrice">
                                                <option value=""><?php echo trans_line('buscador_precio_min'); ?></option>
                                                <?php foreach ($busqueda_dto->precios as $busqueda_precio): ?>
                                                    <option value="<?php echo $busqueda_precio; ?>">$<?php echo number_format($busqueda_precio); ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-control-custom mb-md">
                                            <select class="form-control text-uppercase font-size-sm"
                                                    name="propertiesMaxPrice" data-msg-required="This field is required."
                                                    id="propertiesMaxPrice">
                                                <option value=""><?php echo trans_line('buscador_precio_max'); ?></option>
                                                <?php foreach ($busqueda_dto->precios as $busqueda_precio): ?>
                                                    <option value="<?php echo $busqueda_precio; ?>">$<?php echo number_format($busqueda_precio); ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <input type="submit" value="<?php echo trans_line('buscar'); ?>"
                                               class="btn btn-secondary btn-lg btn-block text-uppercase font-size-sm">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </li>
            </ul>
        </li>
    </ul>
</nav>