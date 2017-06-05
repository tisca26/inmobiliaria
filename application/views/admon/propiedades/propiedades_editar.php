<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Propiedades | <?php echo EMPRESA_NOMBRE; ?></title>

    <link href="<?php echo cdn_assets(); ?>/admon/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo cdn_assets(); ?>/admon/font-awesome/css/font-awesome.css" rel="stylesheet">

    <!-- Sweet Alert -->
    <link href="<?php echo cdn_assets(); ?>/admon/css/plugins/sweetalert/sweetalert.css" rel="stylesheet">

    <link href="<?php echo cdn_assets(); ?>/admon/css/animate.css" rel="stylesheet">
    <link href="<?php echo cdn_assets(); ?>/admon/css/style.css" rel="stylesheet">

</head>

<body>
<div id="wrapper">

    <?php $this->menu_manager->generar_menu('menu_app_1'); ?>

    <div id="page-wrapper" class="gray-bg">
        <div class="row border-bottom">
            <nav class="navbar navbar-static-top white-bg" role="navigation" style="margin-bottom: 0">
                <div class="navbar-header">
                    <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i>
                    </a>
                </div>
                <ul class="nav navbar-top-links navbar-right">
                    <li>
                        <a href="<?php echo base_url() . 'admon/login/salir'; ?>">
                            <i class="fa fa-sign-out"></i> Salir
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center m-t-lg">
                        <h1>
                            Propiedades disponibles
                        </h1>
                    </div>
                    <br>
                </div>
            </div>
            <div class="row">
                <div class="ibox-title">
                    <h5>Datos de la propiedad
                        <small>Los datos con <strong>*</strong> son obligatorios.</small>
                    </h5>
                </div>
                <div class="ibox-content">
                    <?php echo get_bootstrap_alert(); ?>
                    <?php echo validation_errors("<div class='alert alert-danger'>", "</div>"); ?>
                    <?php echo form_open_multipart('admon/propiedades/edicion', array('id' => 'postFrm', 'class' => 'form-horizontal')); ?>
                    <input type="hidden" name="propiedades_id" value="<?php echo $propiedad->propiedades_id; ?>">
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Tipo de propiedad*</label>
                        <div class="col-sm-10">
                            <select class="form-control m-b" name="tipo_propiedad_id"
                                    data-msg-required="Campo requerido" required>
                                <?php foreach ($tipos_propiedades as $tipo): ?>
                                    <option value="<?php echo $tipo->tipo_propiedad_id; ?>" <?php echo set_select('tipo_propiedad_id', $tipo->tipo_propiedad_id); ?>>
                                        <?php echo $tipo->nombre; ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Estatus de propiedad*</label>
                        <div class="col-sm-10">
                            <select class="form-control m-b" name="estatus_propiedad_id"
                                    data-msg-required="Campo requerido" required>
                                <option value="">-Seleccionar-</option>
                                <?php foreach ($estatus_props as $status): ?>
                                    <option value="<?php echo $status->estatus_propiedad_id; ?>" <?php echo ($status->nombre == $propiedad->estatus_propiedad) ? 'selected' : '' ?>>
                                        <?php echo $status->nombre; ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="hr-line-dashed"></div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Descripción Español*</label>
                        <div class="col-sm-10">
                            <textarea rows="3" cols="30" placeholder="Descripción de la propiedad en español"
                                      name="descripcion_es" class="form-control"
                                      minlength="5" data-msg-minlength="Se requieren al menos {0} caracteres"
                                      data-msg-required="Campo requerido"
                                      required><?php echo set_value('descripcion_es', $propiedad->descripcion_es); ?></textarea>
                        </div>
                    </div>
                    <div class="hr-line-dashed"></div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Descripción Ingles*</label>
                        <div class="col-sm-10">
                            <textarea rows="3" cols="30" placeholder="Descripción de la propiedad en ingles"
                                      name="descripcion_en" class="form-control"
                                      minlength="5" data-msg-minlength="Se requieren al menos {0} caracteres"
                                      data-msg-required="Campo requerido"
                                      required><?php echo set_value('descripcion_en', trim($propiedad->descripcion_en)); ?></textarea>
                        </div>
                    </div>
                    <div class="hr-line-dashed"></div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Metros de la propiedad*</label>
                        <div class="col-sm-5">
                            <input type="text" placeholder="M2 Utilizables"
                                   value="<?php echo set_value('metros_utiles', $propiedad->metros_utiles); ?>"
                                   name="metros_utiles" class="form-control"
                                   data-rule-number="true" data-msg-number="Solo acepta números"
                                   data-msg-required="Campo requerido" required>
                            <span class="help-block m-b-none">M2 Terreno*</span>
                        </div>
                        <div class="col-sm-5">
                            <input type="text" placeholder="M2 Construcidos"
                                   value="<?php echo set_value('metros_construidos', $propiedad->metros_construidos); ?>"
                                   name="metros_construidos" class="form-control"
                                   data-rule-number="true" data-msg-number="Solo acepta números"
                                   data-msg-required="Campo requerido" required>
                            <span class="help-block m-b-none">M2 Construcción*</span>
                        </div>
                    </div>
                    <div class="hr-line-dashed"></div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Interior de la propiedad*</label>
                        <div class="col-sm-2">
                            <input type="text" placeholder="# Cuartos"
                                   value="<?php echo set_value('cuartos', $propiedad->cuartos); ?>"
                                   name="cuartos" class="form-control"
                                   data-rule-number="true" data-msg-number="Solo acepta números"
                                   data-msg-required="Campo requerido" required>
                            <span class="help-block m-b-none"># Cuartos*</span>
                        </div>
                        <div class="col-sm-2">
                            <input type="text" placeholder="# Salas"
                                   value="<?php echo set_value('salas', $propiedad->salas); ?>"
                                   name="salas" class="form-control"
                                   data-rule-number="true" data-msg-number="Solo acepta números"
                                   data-msg-required="Campo requerido" required>
                            <span class="help-block m-b-none"># Salas*</span>
                        </div>
                        <div class="col-sm-2">
                            <input type="text" placeholder="# Cocinas"
                                   value="<?php echo set_value('cocinas', $propiedad->cocinas); ?>"
                                   name="cocinas" class="form-control"
                                   data-rule-number="true" data-msg-number="Solo acepta números"
                                   data-msg-required="Campo requerido" required>
                            <span class="help-block m-b-none"># Cocinas*</span>
                        </div>
                        <div class="col-sm-2">
                            <input type="text" placeholder="# Baños"
                                   value="<?php echo set_value('banos', $propiedad->banos); ?>"
                                   name="banos" class="form-control"
                                   data-rule-number="true" data-msg-number="Solo acepta números"
                                   data-msg-required="Campo requerido" required>
                            <span class="help-block m-b-none"># Baños*</span>
                        </div>
                        <div class="col-sm-2">
                            <input type="text" placeholder="# Cajones Estacionamiento"
                                   value="<?php echo set_value('cajones_estacionamiento', $propiedad->cajones_estacionamiento); ?>"
                                   name="cajones_estacionamiento" class="form-control"
                                   data-rule-number="true" data-msg-number="Solo acepta números"
                                   data-msg-required="Campo requerido" required>
                            <span class="help-block m-b-none"># Cajones Estacionamiento*</span>
                        </div>
                    </div>
                    <div class="hr-line-dashed"></div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Costo de la propiedad*</label>
                        <div class="col-sm-5">
                            <input type="text" placeholder="Precio Avalúo" id="precio_avaluo"
                                   value="<?php echo set_value('precio_avaluo', $propiedad->precio_avaluo); ?>"
                                   name="precio_avaluo" class="form-control"
                                   data-rule-number="true" data-msg-number="Solo acepta números"
                                   data-msg-required="Campo requerido" required>
                            <span class="help-block m-b-none">Precio Avalúo*</span>
                        </div>
                        <div class="col-sm-5">
                            <input type="text" placeholder="Precio Público" id="precio_publico"
                                   value="<?php echo set_value('precio_publico', $propiedad->precio_publico); ?>"
                                   name="precio_publico" class="form-control"
                                   data-rule-number="true" data-msg-number="Solo acepta números"
                                   data-msg-required="Campo requerido" required>
                            <span class="help-block m-b-none">Precio Público*</span>
                        </div>
                    </div>
                    <div class="hr-line-dashed"></div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Ubicación de la propiedad*</label>
                        <div class="col-sm-5">
                            <input type="text" placeholder="Longitud"
                                   value="<?php echo set_value('longitud', $propiedad->longitud); ?>"
                                   name="longitud" class="form-control"
                                   data-rule-number="true" data-msg-number="Solo acepta números"
                                   data-msg-required="Campo requerido" required>
                            <span class="help-block m-b-none">Longitud*</span>
                        </div>
                        <div class="col-sm-5">
                            <input type="text" placeholder="Latitud"
                                   value="<?php echo set_value('latitud', $propiedad->latitud); ?>"
                                   name="latitud" class="form-control"
                                   data-rule-number="true" data-msg-number="Solo acepta números"
                                   data-msg-required="Campo requerido" required>
                            <span class="help-block m-b-none">Latitud*</span>
                        </div>
                    </div>
                    <div class="hr-line-dashed"></div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Dirección de la propiedad*</label>
                        <div class="col-sm-3">
                            <input type="text" placeholder="Calle"
                                   value="<?php echo set_value('calle', $propiedad->calle); ?>"
                                   name="calle" class="form-control"
                                   data-msg-required="Este campo es requerido" required>
                            <span class="help-block m-b-none">Calle*</span>
                        </div>
                        <div class="col-sm-1">
                            <input type="text" placeholder="# Exterior"
                                   value="<?php echo set_value('no_exterior', $propiedad->no_exterior); ?>"
                                   name="no_exterior" class="form-control"
                                   data-msg-required="Este campo es requerido" required>
                            <span class="help-block m-b-none"># Ext *</span>
                        </div>
                        <div class="col-sm-1">
                            <input type="text" placeholder="# Interior"
                                   value="<?php echo set_value('no_interior', $propiedad->no_interior); ?>"
                                   name="no_interior" class="form-control">
                            <span class="help-block m-b-none"># Int</span>
                        </div>
                        <div class="col-sm-3">
                            <input type="text" placeholder="Colonia"
                                   value="<?php echo set_value('colonia', $propiedad->colonia); ?>"
                                   name="colonia" class="form-control"
                                   data-msg-required="Este campo es requerido" required>
                            <span class="help-block m-b-none">Colonia*</span>
                        </div>
                        <div class="col-sm-2">
                            <input type="text" placeholder="CP"
                                   value="<?php echo set_value('codigo_postal', $propiedad->codigo_postal); ?>"
                                   name="codigo_postal" class="form-control"
                                   data-msg-required="Este campo es requerido" required>
                            <span class="help-block m-b-none">CP*</span>
                        </div>
                    </div>
                    <div class="hr-line-dashed"></div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Direccion de la Propiedad* </label>
                        <div class="col-sm-3">
                            <select class="form-control m-b" name="pais" id="pais"
                                    data-msg-required="Campo requerido" required>
                                <option value="">-Seleccionar-</option>
                                <?php foreach ($paises as $pais): ?>
                                    <option value="<?php echo $pais->nombre; ?>"
                                            data-val="<?php echo $pais->cat_paises_id; ?>" <?php echo ($pais->nombre == $propiedad->pais) ? 'selected' : '' ?>>
                                        <?php echo $pais->nombre; ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                            <span class="help-block m-b-none">Pais*</span>
                        </div>
                        <div class="col-sm-3">
                            <select class="form-control m-b" name="estado" id="estado"
                                    data-msg-required="Campo requerido" required>
                                <option value="">-Seleccionar-</option>
                                <?php foreach ($estados as $estado): ?>
                                    <option value="<?php echo $estado->nombre; ?>"
                                            data-val="<?php echo $estado->cat_estados_id; ?>" <?php echo ($estado->nombre == $propiedad->estado) ? 'selected' : '' ?>>
                                        <?php echo $estado->nombre; ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                            <span class="help-block m-b-none">Estado*</span>
                        </div>
                        <div class="col-sm-4">
                            <select class="form-control m-b" name="municipio" id="municipio"
                                    data-msg-required="Campo requerido" required>
                                <option value="">-Seleccionar-</option>
                                <?php foreach ($municipios as $municipio): ?>
                                    <option value="<?php echo $municipio->nombre; ?>"
                                            data-val="<?php echo $municipio->cat_municipios_id; ?>" <?php echo ($municipio->nombre == $propiedad->municipio) ? 'selected' : '' ?>>
                                        <?php echo $municipio->nombre; ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                            <span class="help-block m-b-none">Municipio*</span>
                        </div>
                    </div>
                    <div class="hr-line-dashed"></div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">¿Dónde se ve en web? </label>
                        <div class="col-sm-10">
                            <div>
                                <label>
                                    <input type="checkbox" name="destacada"
                                           value="1" <?php echo set_checkbox('destacada', '1', (bool)$propiedad->destacada); ?>>
                                    Propiedad destacada <small>(hasta el momento hay <?php echo $cuantas_destacadas; ?> propiedades, se recomiendan max 5)</small>
                                </label>
                            </div>
                            <div>
                                <label>
                                    <input type="checkbox" name="pagina_inicio"
                                           value="1" <?php echo set_checkbox('pagina_inicio', '1', (bool)$propiedad->pagina_inicio); ?>>
                                    Propiedad Página de Inicio <small>(hasta el momento hay <?php echo $cuantas_pag_inicial; ?> propiedades, se recomiendan max 6)</small>
                                </label>
                            </div>
                            <div>
                                <label>
                                    <input type="checkbox" name="oferta_especial"
                                           value="1" <?php echo set_checkbox('oferta_especial', '1', (bool)$propiedad->oferta_especial); ?>>
                                    Propiedad Oferta Especial <small>(hasta el momento hay <?php echo $cuantas_oferta_esp; ?> propiedades, se recomiendan max 2)</small>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="hr-line-dashed"></div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">¿Aparece en web? </label>
                        <div class="col-sm-10">
                            <div>
                                <label>
                                    <input type="checkbox" name="estatus"
                                           value="1" <?php echo set_checkbox('estatus', '1', (bool)$propiedad->estatus); ?>>
                                    ¿Se muestra en sitio web?
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="hr-line-dashed"></div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Imágenes (Normal: 912x608 | Descatado: 1920x650)</label>
                        <div class="col-sm-10">
                            <input type="file" name="img_profile[]" class="form-control" accept="image/*" multiple>
                        </div>
                    </div>
                    <div class="hr-line-dashed"></div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Imágenes cargadas</label>
                        <div class="col-sm-10">
                            <?php foreach ($imagenes as $k => $img): ?>
                                <span class="span_imgs">
                                    <a class="a_img" href="<?php echo $img ?>" target="_blank">Imagen #<?php echo ++$k; ?></a>
                                    <a data-url="<?php echo $img ?>" class="btn btn-danger btn-xs borrar">Borrar imagen</a>
                                    <br><br>
                                </span>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <div class="hr-line-dashed"></div>
                    <div class="form-group">
                        <div class="col-sm-12">
                            <a class="btn btn-white" href="<?php echo base_url('admon/propiedades'); ?>">Cancelar</a>
                            <button class="btn btn-primary" type="submit">Guardar</button>
                        </div>
                    </div>
                    <?php echo form_close(); ?>
                </div>
            </div>
        </div>
        <?php echo $this->cargar_elementos_manager->carga_con_lang('footers/footers_app_1'); ?>
    </div>
</div>

<!-- Mainly scripts -->
<script src="<?php echo cdn_assets(); ?>/admon/js/jquery-3.1.1.min.js"></script>
<script src="<?php echo cdn_assets(); ?>/admon/js/bootstrap.min.js"></script>
<script src="<?php echo cdn_assets(); ?>/admon/js/plugins/metisMenu/jquery.metisMenu.js"></script>
<script src="<?php echo cdn_assets(); ?>/admon/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

<!-- Custom and plugin javascript -->
<script src="<?php echo cdn_assets(); ?>/admon/js/inspinia.js"></script>
<script src="<?php echo cdn_assets(); ?>/admon/js/plugins/pace/pace.min.js"></script>

<script src="<?php echo cdn_assets(); ?>/admon/js/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Sweet alert -->
<script src="<?php echo cdn_assets(); ?>/admon/js/plugins/sweetalert/sweetalert.min.js"></script>

<!-- Jquery Validate -->
<script src="<?php echo cdn_assets(); ?>/admon/js/plugins/validate/jquery.validate.min.js"></script>

<script>

    function obtener_estados_por_pais(cat_paises_id, sel_id) {
        var my_url = "<?php echo base_url('admon/propiedades/estados_por_pais/'); ?>" + cat_paises_id;
        $.get(
            my_url
        ).done(function (data) {
            genera_select_estados(data, sel_id);
        }).fail(function () {
            alert("Error al obtener los estados");
        });
    }

    function genera_select_estados(data, sel_id) {
        var $select = $('#' + sel_id);
        $select.empty();
        $select.append('<option data-val="0" value="">-Seleccionar-</option>');
        for (var idx in data) {
            $select.append('<option data-val="' + data[idx].cat_estados_id + '" value="' + data[idx].nombre + '">' + data[idx].nombre + '</option>');
        }
    }

    function obtener_municipios_por_estado(cat_estados_id, sel_id) {
        var my_url = "<?php echo base_url('admon/propiedades/municipios_por_estado/'); ?>" + cat_estados_id;
        $.get(
            my_url
        ).done(function (data) {
            genera_select_municipio(data, sel_id);
        }).fail(function () {
            alert("Error al obtener los municipios");
        });
    }

    function genera_select_municipio(data, sel_id) {
        var $select = $('#' + sel_id);
        $select.empty();
        $select.append('<option data-val="0" value="">-Seleccionar-</option>');
        for (var idx in data) {
            $select.append('<option data-val="' + data[idx].cat_municipios_id + '" value="' + data[idx].nombre + '">' + data[idx].nombre + '</option>');
        }
    }
    $(document).ready(function () {
        $("#postFrm").validate();

        $(document).on('change', '#pais', function () {
            var cat_paises_id = $(this).find(":selected").attr('data-val');
            obtener_estados_por_pais(cat_paises_id, 'estado');
        });
        $(document).on('change', '#estado', function () {
            var cat_estados_id = $(this).find(":selected").attr('data-val');
            obtener_municipios_por_estado(cat_estados_id, 'municipio');
        });

        $(document).on("click", ".borrar", function () {
            var btn = $(this);
            swal({
                    title: "¿Desea borrar esta imagen?",
                    text: "No podrá recuperar la imagen",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#DD6B55",
                    confirmButtonText: "Si, borrala",
                    cancelButtonText: "¡No, cancelar!",
                    closeOnConfirm: false,
                    closeOnCancel: false
                },
                function (isConfirm) {
                    if (isConfirm) {
                        $.ajax({
                            method: "POST",
                            data: {
                                'url': btn.attr('data-url')
                            },
                            url: '<?php echo base_url('admon/propiedades/borrar_foto_json')?>',
                            dataType: 'json'
                        }).done(function (data) {
                            var obj = JSON.stringify(data);
                            swal("¡Borrada!", "La foto fue borrada.", "success");
                            btn.closest('span.span_imgs').remove();
                        }).fail(function (jqXHR, textStatus) {
                            swal("Error", "Hubo un error al borrar " + textStatus, "error");
                        });
                    } else {
                        swal("Cancelado", "No se realizó ningún cambio", "error");
                    }
                }
            );
        });

        $("#precio_avaluo,#precio_publico").each(function(){
            $(this).keydown(function (e) {
                // Allow: backspace, delete, tab, escape, enter and .
                if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
                    // Allow: Ctrl+A, Command+A
                    (e.keyCode === 65 && (e.ctrlKey === true || e.metaKey === true)) ||
                    // Allow: home, end, left, right, down, up
                    (e.keyCode >= 35 && e.keyCode <= 40)) {
                    // let it happen, don't do anything
                    return;
                }
                // Ensure that it is a number and stop the keypress
                if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
                    e.preventDefault();
                }
            });
        });
    });

</script>
</body>

</html>
