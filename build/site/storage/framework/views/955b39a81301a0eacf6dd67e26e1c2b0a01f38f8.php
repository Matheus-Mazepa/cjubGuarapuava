<!DOCTYPE html>
<html lang="<?php echo e(app()->getLocale()); ?>">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title>Cjub Guarapuava</title>

    <!-- Styles -->
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/theme.css')); ?>" rel="stylesheet">
</head>
<body>
    <div id="app">
        <?php if(session('success')): ?>
            <div class="alert alert-success" style="padding-top: 100px;">
                <?php echo e(session('success')); ?>

            </div>
        <?php endif; ?>
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a href="<?php echo e(url('/')); ?>">
                        <img src="/images/logo2.jpeg" alt="Logo cjub" height="70px" align="left">
                    </a>
                    <a class="navbar-brand" href="<?php echo e(url('/')); ?>">
                        Cjub Guarapuava
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="<?php echo e(route('programming')); ?>">Programação</a></li>
                        <li><a href="<?php echo e(route('accommodation')); ?>">Alojamento</a></li>
                        <li><a href="<?php echo e(route('speakers')); ?>">Palestrantes</a></li>
                        <li><a href="<?php echo e(route('participants.create')); ?>">Inscreva-se</a></li>
                        <li><a href="<?php echo e(route('workshops.index')); ?>">Oficinas</a></li>
                        <!-- Authentication Links -->
                    <?php if(auth()->guard()->guest()): ?>
                            <li><a href="<?php echo e(route('login')); ?>">Entrar</a></li>
                        <?php else: ?>
                                <li><a href="<?php echo e(route('register')); ?>">Resgistrar</a></li>
                                <li><a href="<?php echo e(route('participants.index')); ?>">Inscrições</a></li>

                                <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    <?php echo e(Auth::user()->name); ?> <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="<?php echo e(route('logout')); ?>"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Sair
                                        </a>

                                        <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                            <?php echo e(csrf_field()); ?>

                                        </form>
                                    </li>
                                </ul>
                            </li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </nav>
            <?php echo $__env->yieldContent('content'); ?>


    </div>

    <!-- Scripts -->
    <script src="<?php echo e(asset('js/app.js')); ?>"></script>
    <script src="<?php echo e(asset('js/theme.js')); ?>"></script>
</body>
</html>
