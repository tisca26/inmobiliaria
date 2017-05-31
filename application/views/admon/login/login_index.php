<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php echo EMPRESA_NOMBRE; ?></title>

    <link href="<?php echo cdn_assets(); ?>/admon/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo cdn_assets(); ?>/admon/font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="<?php echo cdn_assets(); ?>/admon/css/animate.css" rel="stylesheet">
    <link href="<?php echo cdn_assets(); ?>/admon/css/style.css" rel="stylesheet">

</head>

<body class="gray-bg">

<div class="middle-box text-center loginscreen animated fadeInDown">
    <div>
        <div>

            <h1 class="logo-name"><?php echo 'OI'; ?></h1>

        </div>
        <h3>Panel de Administrador</h3>
        <p>Panel de administración para <?php echo EMPRESA_NOMBRE; ?>, si requiere apoyo llame al administrador.
        </p>
        <p>Ingrese sus datos correctamente</p>
        <?php echo get_bootstrap_alert(); ?>
        <form class="m-t" role="form" action="<?php echo base_url() . 'admon/login/entrar'; ?>" method="POST">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Username" name="nombre_usr" required="">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" placeholder="Password" name="pass_usr" required="">
            </div>
            <button type="submit" class="btn btn-primary block full-width m-b">Entrar</button>

        </form>
        <p class="m-t">
            <small><?php echo EMPRESA_NOMBRE; ?> &copy; 2017</small>
        </p>
    </div>
</div>

<!-- Mainly scripts -->
<script src="<?php echo cdn_assets(); ?>/admon/js/jquery-3.1.1.min.js"></script>
<script src="<?php echo cdn_assets(); ?>/admon/js/bootstrap.min.js"></script>

</body>

</html>
