<footer id="footer" class="m-none custom-background-color-1">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <h4 class="mb-md">Porto Real Estate</h4>
                <p class="custom-color-2">
                    <?php echo EMPRESA_DIRECCION; ?><br>
                    <?php echo trans_line('footer_tel'); ?> : <?php echo EMPRESA_TELEFONO; ?><br>
                    <?php echo trans_line('footer_email'); ?> : <a class="text-color-secondary" href="<?php echo base_url_lang_slash() . 'contacto' ?>"><?php echo EMPRESA_MAIL; ?></a>
                </p>
            </div>
            <div class="col-md-2">
                <h4 class="mb-md"><?php echo trans_line('propiedades'); ?></h4>
                <nav class="nav-footer">
                    <ul class="custom-list-style-1 pl-lg">
                        <li>
                            <a href="demo-real-estate-<?php echo trans_line('propiedades'); ?>.html"
                               class="custom-color-2 text-decoration-none">
                                <?php echo trans_line('footer_en_venta'); ?>
                            </a>
                        </li>
                        <li>
                            <a href="demo-real-estate-<?php echo trans_line('propiedades'); ?>.html"
                               class="custom-color-2 text-decoration-none">
                                <?php echo trans_line('footer_en_renta'); ?>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="col-md-2">
                <h4 class="mb-md"><?php echo trans_line('footer_links'); ?></h4>
                <nav class="nav-footer">
                    <ul class="custom-list-style-1 pl-lg">
                        <li>
                            <a href="demo-real-estate-agents.html" class="custom-color-2 text-decoration-none">
                                <?php echo trans_line('footer_agentes'); ?>
                            </a>
                        </li>
                        <li>
                            <a href="demo-real-estate-who-we-are.html"
                               class="custom-color-2 text-decoration-none">
                                <?php echo trans_line('footer_nosotros'); ?>
                            </a>
                        </li>
                        <li>
                            <a href="demo-real-estate-contact.html" class="custom-color-2 text-decoration-none">
                                <?php echo trans_line('footer_contacto'); ?>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="col-md-5">
                <h4 class="mb-md"><?php echo trans_line('footer_ultimos_tweets'); ?></h4>
                <div id="tweet" class="twitter" data-plugin-tweets
                     data-plugin-options="{'username': '<?php echo EMPRESA_TWITTER ?>', 'count': 1}">
                    <p><?php echo trans_line('footer_espere'); ?></p>
                </div>
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