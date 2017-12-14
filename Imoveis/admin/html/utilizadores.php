<?php
session_start();
if (!isset($_SESSION['sessao'])){
    header('Location: ../index.html');
}
?>
<!DOCTYPE html>
<html lang="pt">
<link rel="shortcut icon" href="../../resources/image/favicon/favicon-32x32.png">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>GIP Online</title>
    <!-- Bootstrap Core CSS -->
    <link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Menu CSS -->
    <link href="../plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet">
    <!-- toast CSS -->
    <link href="../plugins/bower_components/toast-master/css/jquery.toast.css" rel="stylesheet">
    <!-- morris CSS -->
    <link href="../plugins/bower_components/morrisjs/morris.css" rel="stylesheet">
    <!-- chartist CSS -->
    <link href="../plugins/bower_components/chartist-js/dist/chartist.min.css" rel="stylesheet">
    <link href="../plugins/bower_components/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css" rel="stylesheet">
    <!-- animation CSS -->
    <link href="css/animate.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
    <!-- color CSS -->
    <link href="css/colors/default.css" id="theme" rel="stylesheet">
    <link href="../plugins/bower_components/jquery.dataTables.min.css" rel="stylesheet" type="text/css">
    <link href="https://cdn.datatables.net/buttons/1.2.2/css/buttons.dataTables.min.css" rel="stylesheet" type="text/css">


    <link href="../html/css/admin.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="fix-header">
    <!-- Preloader -->
    <!--<div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
        </svg>
    </div>-->
    <div id="wrapper">

        <nav class="navbar navbar-default navbar-static-top m-b-0">
            <div class="navbar-header">
                <div class="top-left-part">
                    <!-- Logo -->
                    <a class="logo" href="dasboard.php">
                        <b>
                            <img src="../plugins/images/gip.PNG" alt="home" class="dark-logo" />
                        </b>
                        <span class="hidden-xs">
                       <img src="../plugins/images/gip.PNG" alt="home" class="dark-logo" /><img src="../plugins/images/gip.PNG" alt="home" class="light-logo" style="width: 15rem"/>
                     </span> </a>
                </div>

                <ul class="nav navbar-top-links navbar-right pull-right">

                    <li>
                        <form role="search" class="app-search hidden-sm hidden-xs m-r-10">
                            <input type="text" placeholder="Search..." class="form-control"> <a href=""><i class="fa fa-search"></i></a> </form>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false">
                            <img src="../../resources/image/avatar.png" width="36" class="img-circle"><b class="hidden-xs">
                                <?php
                                echo $_SESSION["sessao"]['utilizador_nome'];
                                ?>
                            </b><span class="caret"></span> </a>
                        <ul class="dropdown-menu dropdown-user animated flipInY">
                            <li>
                                <div class="dw-user-box">
                                    <div class="u-img"><img src="../../resources/image/avatar.png" alt="user" ></div>
                                    <div class="u-text">
                                        <h4>
                                            <?php
                                            echo $_SESSION["sessao"]['utilizador_nome'];
                                            ?>
                                        </h4>
                                        <p class="text-muted"> NIF:
                                            <?php
                                            echo $_SESSION["sessao"]['utilizador_nif'];
                                            ?>
                                        </p>
                                    </div>
                                </div>
                            </li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#" id="logout"  >
                                    <i class="fa fa-power-off"></i> Logout
                                </a>
                            </li>
                        </ul>
                        <!-- /.dropdown-user -->
                    </li>

                </ul>
            </div>
        </nav>

        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav slimscrollsidebar">
                <div class="sidebar-head">
                    <h3><span class="fa-fw open-close"><i class="ti-close ti-menu"></i></span> <span class="hide-menu">Navigation</span></h3>
                </div>
                <ul class="nav" id="side-menu">
                    <li style="padding: 70px 0 0;">
                        <a href="#" class="waves-effect"><i class="fa fa-clock-o fa-fw" aria-hidden="true"></i>Dashboard</a>
                    </li>
                    <li>
                        <a href="#" class="waves-effect active"><i class="fa fa-user fa-fw" aria-hidden="true"></i>Utilizadores</a>
                    </li>
                    <li>
                        <a href="#" class="waves-effect"><i class="fa fa-table fa-fw" aria-hidden="true"></i>Registros</a>
                    </li>

                </ul>
            </div>
            
        </div>

        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Gestão dos Utilizadores</h4> </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <ol class="breadcrumb">
                            <a href="#" class="btn btn-success pull-right waves-effect waves-light" style="color: white" id="btNewUser"><i class="fa fa-user"></i> Novo Utilizador</a>
                        </ol>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                        <h3 class="box-title m-b-0">Utilizadores</h3>
                        <p class="text-muted m-b-30">Listagem dos Utilizadores</p>

                            <div class="table-responsive">
                                <div id="example23_wrapper" class="dataTables_wrapper">

                                    <table id="example23" class="display nowrap dataTable tableUser" cellspacing="0" width="100%" role="grid" aria-describedby="example23_info" style="width: 100%;">
                                        <thead>
                                        <tr role="row">
                                            <th class="sorting" tabindex="0" aria-controls="example23" rowspan="1" colspan="1" style="width: 100px;">Nome</th>
                                            <th class="sorting" tabindex="0" aria-controls="example23" rowspan="1" colspan="1" style="width: 50px;">NIF</th>
                                            <th class="sorting" tabindex="0" aria-controls="example23" rowspan="1" colspan="1" style="width: 10px;">Data Reg</th>
                                            <th class="sorting" tabindex="0" aria-controls="example23" rowspan="1" colspan="1" style="width: 10px;">Estado</th>
                                            <th class="sorting" tabindex="0" aria-controls="example23" rowspan="1" colspan="1" style="width: 10px;">Ação</th>
                                        </tr>
                                        </thead>
                                        <tbody >

                                        </tbody>
                                        <tfoot>
                                        <tr>
                                            <th rowspan="1" colspan="1">Nome</th>
                                            <th rowspan="1" colspan="1">NIF</th>
                                            <th rowspan="1" colspan="1">Data Registro</th>
                                            <th rowspan="1" colspan="1">Estado</th>
                                            <th rowspan="1" colspan="1">Ação</th></tr>
                                        </tfoot>
                                    </table>
                                    <div class="dataTables_info" id="example23_info" role="status" aria-live="polite"></div>
                                    <div class="dataTables_paginate paging_simple_numbers" id="example23_paginate"></div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            <!-- /.container-fluid -->
        <footer class="footer text-center"> 2017 &copy; GIP Online </footer>
        </div>
            </div>
    </div>
    <div class="areaMoreInfo out col-md-12">
        <div class="col-md-12">
            <div class="panel panel-info">
                <div class="panel-heading"> Registro de um novo Utilizador <span class="pull-right btn btn-circle btn-default btclose">X</span></div>
                <div class="panel-wrapper collapse in" aria-expanded="true">
                    <div class="panel-body">
                        <form class="form-horizontal form-material" id="formUtilizador">
                            <div class="form-group">
                                <label class="col-md-12">Nome Completo</label>
                                <div class="col-md-12">
                                    <input type="text" placeholder="Johnathan Doe" id="nome" name="nome" class="form-control form-control-line"> </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">NIF</label>
                                <div class="col-md-12">
                                    <input type="text" placeholder="1587...." class="form-control form-control-line" name="nif" id="nif"> </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Password</label>
                                <div class="col-md-12">
                                    <input type="password" value="" id="pass" name="pass" class="form-control form-control-line"> </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Confirmar Password</label>
                                <div class="col-md-12">
                                    <input type="password" value="" id="confPass" name="confPass" class="form-control form-control-line"> </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <button class="btn btn-success waves-effect waves-light" type="button" id="btSave"><span class="btn-label"><i class="fa fa-check"></i></span> Salvar</button>
                                    <!--<button class="btn btn-success" id="btSave" type="button">Salvar</button>-->
                                    <div id="alerttopright" class="myadmin-alert myadmin-alert-img alert-danger myadmin-alert-top-right">
                                        <i class="fa fa-exclamation-triangle img" style="font-size: 2.5rem; padding: 1rem" id="alertIcon"></i><a href="#" class="closed">x</a>
                                        <smal class="textAlert"><h4>Erro!</h4> Preenha os campos obrigatórios</smal>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="../plugins/bower_components/jquery/dist/jquery.min.js"></script>


    <!-- Bootstrap Core JavaScript -->
    <script src="bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- Menu Plugin JavaScript -->
    <script src="../plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>

    <!--Wave Effects -->
    <script src="js/waves.js"></script>

    <script src="../plugins/bower_components/jquery.dataTables.min.js"></script>
    <script src="js/admin.js"></script>
    <script src="../../resources/js/utilitarios.js"></script>
    <script src="../../resources/js/funcoes.js"></script>
    <script src="js/utilizadores.js"></script>


    <!-- <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
     <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
     <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
     <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>

     <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>-->

</body>

</html>
