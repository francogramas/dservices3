<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <link rel="stylesheet" href="">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
        <link href="<?php echo e(asset('css/admin.css')); ?>" rel="stylesheet">        
    </head>

    <body class="home">
        <div class="container-fluid display-table">
            <div class="row display-table-row">
                <div class="col-md-2 col-sm-1 hidden-xs display-table-cell v-align box" id="navigation">
                    <div class="logo">
                        <a hef="home.html">
                        </a>
                    </div>
                    <div class="navi">
                        <ul>
                            <li class="active">
                                <a href=<?php echo e(route('admsolicitudes.index')); ?> ><i class="fa fa-home" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Solicitudes</span></a>
                            </li>
                            <li>
                                <a href=<?php echo e(route('contratistas.index')); ?>><i class="fas fa-address-card" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Contratistas</span></a>
                            </li>
                            <li>
                                <a href=<?php echo e(route('servicioscontratistas.index')); ?>><i class="fa fa-cogs" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Servicios</span></a>
                            </li>
                            <li>
                                <a href=<?php echo e(route('admusuarios.index')); ?>><i class="fa fa-users" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Usuarios</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-10 col-sm-11 display-table-cell v-align">
                    <!--<button type="button" class="slide-toggle">Slide Toggle</button> -->
                    <div class="row">
                        <header>
                            <div class="col-md-7">
                                <nav class="navbar-default pull-left">
                                    <div class="navbar-header">
                                        <button type="button" class="navbar-toggle collapsed" data-toggle="offcanvas" data-target="#side-menu" aria-expanded="false">
                                            <span class="sr-only">Toggle navigation</span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                        </button>
                                    </div>
                                </nav>
                                <div class="search hidden-xs hidden-sm">
                                    <label for="">D'Services VIP. Módulo administrativo</label>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="header-rightside">
                                    <ul class="list-inline header-top pull-right">
                                        <span id="demoList">
                                        </span>
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                                Usuario
                                                <b class="caret"></b></a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <div class="navbar-content">
                                                        <span><?php echo e(Auth::user()->name); ?></span>
                                                        <p class="text-muted small">
                                                            <?php echo e(Auth::user()->email); ?>

                                                            <input type="hidden" id="sedes_id" name="sedes_id" value=<?php echo e(dservices\Model\sedesusers::select('sedes_id')->where('users_id',Auth::user()->id)->first()->sedes_id); ?>>
                                                        </p>
                                                        <div class="divider">
                                                        </div>
                                                        
                                                        <a class="view btn-sm active form-control" href="<?php echo e(route('logout')); ?>"
                                                            onclick="event.preventDefault();
                                                                     document.getElementById('logout-form').submit();">
                                                             Salir
                                                        </a>
                                                        <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                                            <?php echo e(csrf_field()); ?>

                                                        </form>

                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </header>
                    </div>
                    <div class="user-dashboard">                        
                        <?php echo $__env->yieldContent('content'); ?>
                    </div>
                </div>
            </div>

        </div>

        <!-- Modal -->
        <div id="add_project" class="modal fade" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header login-header">
                        <button type="button" class="close" data-dismiss="modal">×</button>
                        <h4 class="modal-title">Add Project</h4>
                    </div>
                    <div class="modal-body">
                                <input type="text" placeholder="Project Title" name="name">
                                <input type="text" placeholder="Post of Post" name="mail">
                                <input type="text" placeholder="Author" name="passsword">
                                <textarea placeholder="Desicrption"></textarea>                            
                        </div>
                    <div class="modal-footer">
                        <button type="button" class="cancel" data-dismiss="modal">Close</button>
                        <button type="button" class="add-project" data-dismiss="modal">Save</button>
                    </div>
                </div>

            </div>
        </div>       
        <script src="/js/app.js"></script>            
        <script src="/js/admin.js"></script>
        <script src="/js/dservices.js"></script>
    </body>


</html>