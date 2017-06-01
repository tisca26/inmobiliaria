<footer id="footer" class="m-none custom-background-color-1">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <h4 class="mb-md"><?php echo EMPRESA_NOMBRE; ?></h4>
                <p class="custom-color-2">
                    <?php echo EMPRESA_DIRECCION; ?><br>
                    <?php echo trans_line('footer_tel'); ?> : <?php echo EMPRESA_TELEFONO; ?><br>
                    <?php echo trans_line('footer_email'); ?> : <a class="text-color-secondary" href="<?php echo base_url_lang_slash() . 'contacto' ?>"><?php echo EMPRESA_MAIL; ?></a>
                </p>
            </div>
            <div class="col-md-2">
                <?php $busqueda_dto = obtener_buscador_dto(); ?>
                <h4 class="mb-md"><?php echo trans_line('footer_propiedades'); ?></h4>
                <nav class="nav-footer">
                    <ul class="custom-list-style-1 pl-lg">
                        <?php foreach ($busqueda_dto->tipos_propiedades as $busqueda_tipos_propiedades): ?>
                            <li>
                                <a href="<?php echo base_url_lang_slash() . 'propiedades/ver_tipo/' . $busqueda_tipos_propiedades->tipo_propiedad_id; ?>" class="custom-color-2 text-decoration-none">
                                    <?php echo trans_line($busqueda_tipos_propiedades->nombre); ?>
                                </a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </nav>
            </div>
            <div class="col-md-2">
                <h4 class="mb-md"><?php echo trans_line('footer_links'); ?></h4>
                <nav class="nav-footer">
                    <ul class="custom-list-style-1 pl-lg">
                        <li>
                            <a href="<?php echo base_url_lang_slash() . 'agentes';?>" class="custom-color-2 text-decoration-none">
                                <?php echo trans_line('footer_agentes'); ?>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo base_url_lang_slash() . 'nosotros';?>"
                               class="custom-color-2 text-decoration-none">
                                <?php echo trans_line('footer_nosotros'); ?>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo base_url_lang_slash() . 'contacto';?>" class="custom-color-2 text-decoration-none">
                                <?php echo trans_line('footer_contacto'); ?>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="col-md-5">
                <h4 class="mb-md"><?php echo trans_line('footer_redes_sociales'); ?></h4>
                <nav class="nav-footer">
                    <ul class="custom-list-style-1 pl-lg">
                        <li>
                            <a href="<?php echo EMPRESA_FACEBOOK;?>" class="custom-color-2 text-decoration-none" target="_blank">
                                <?php echo trans_line('footer_facebook'); ?>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo EMPRESA_TWITTER;?>" class="custom-color-2 text-decoration-none" target="_blank">
                                <?php echo trans_line('footer_twitter'); ?>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <div class="footer-copyright custom-background-color-1 pb-none">
        <div class="container">
            <div class="row pt-md pb-md">
                <div class="col-md-12 left m-none">
                    <p><?php echo trans_line('footer_copyright'); ?></p>
                </div>
            </div>
        </div>
    </div>
</footer>