<?php
/*session_start();
if (!isset($_SESSION['sessao'])){
    header('Location: ../index.html');
}
*/?>

<!DOCTYPE html>
<html lang="en">
<link rel="shortcut icon" href="../../resources/image/favicon/favicon-32x32.png">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Grinalda Soares">

    <title>GIP Online</title>
    <!-- Bootstrap Core CSS -->
    <link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Menu CSS -->
    <link href="../plugins/bower_components/sidebar-nav.min.css" rel="stylesheet">
    <!-- toast CSS -->
    <link href="../plugins/bower_components/toast-master/css/jquery.toast.css" rel="stylesheet">
    <!-- morris CSS -->
    <script src="../plugins/bower_components/morris/morris.css"></script>
    <!-- animation CSS -->
    <link href="css/animate.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
    <!-- color CSS -->
    <link href="css/colors/default.css" id="theme" rel="stylesheet">
    <!--datatables-->
    <link href="../plugins/bower_components/jquery.dataTables.min.css" rel="stylesheet" type="text/css">

    <link href="../html/css/admin.css" rel="stylesheet" type="text/css">

</head>

<body class="fix-header">

   <!-- <div class="preloader">
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
                                    Grinalda Soares
                            </b><span class="caret"></span> </a>
                        <ul class="dropdown-menu dropdown-user animated flipInY">
                            <li>
                                <div class="dw-user-box">
                                    <div class="u-img"><img src="../../resources/image/avatar.png" alt="user" ></div>
                                    <div class="u-text">
                                        <h4>
                                           Grinalda Soares
                                        </h4>
                                        <p class="text-muted"> NIF:
                                           123456
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
                    <h3><span class="fa-fw open-close"><i class="ti-close ti-menu"></i></span> <span >Planificação</span></h3>
                </div>
                <ul class="nav" id="side-menu">
                    <li style="margin-top: 8rem">
                        <a href="#" class="waves-effect active"><i class="fa fa-clock-o fa-fw" aria-hidden="true"></i>Dasboard</a>
                    </li>
                    <li>
                        <a href="registros.php" class="waves-effect"><i class="fa fa-table fa-fw" aria-hidden="true"></i>Diários Publicados</a>
                    </li>
                    <li>
                        <a href="#" class="waves-effect"><i class="fa fa-clock-o fa-fw" aria-hidden="true"></i>Técnicos</a>
                    </li>
                    <li>
                        <a href="registros.php" class="waves-effect"><i class="fa fa-table fa-fw" aria-hidden="true"></i>Configurações</a>
                    </li>
                </ul>
            </div>
            
        </div>

        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Dashboard</h4> </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <ol class="breadcrumb">
                            <li><a href="#">Dashboard</a></li>
                        </ol>
                    </div>
                </div>

                <div class="sttabs tabs-style-iconbox" id="tableDasbord">
                    <nav>
                        <ul>
                            <li class="tab-current"><a href="#section-iconbox-1" class="sticon fa fa-cloud-download"><span>Entrada</span></a></li>
                            <li class=""><a href="#section-iconbox-2" class="sticon fa fa-hourglass-start"><span>Planificação</span></a></li>
                            <li class=""><a href="#section-iconbox-3" class="sticon fa fa-pencil-square-o"><span>Planificados</span></a></li>
                            <li class=""><a href="#section-iconbox-4" class="sticon fa fa-check-square-o "><span>Saída</span></a></li>
                            <li class=""><a href="#section-iconbox-5" class="sticon fa Example of money fa-money"><span>Por Pagar</span></a></li>
                        </ul>
                    </nav>
                    <div class="content-wrap">
                        <section id="section-iconbox-1" class="content-current">
                            <div class="row" style="border-bottom: 1px solid #eeeeee; padding: .3rem">
                                <div class="pull-left">
                                    <h3>Listagem de Entrada</h3>
                                </div>
                                <div class="pull-right areaButton ">
<!--                                    <button type="button" class="btn btn-primary" >Open modal for @mdo</button>-->
                                    <li><a href="#" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo"><span class="circle circle-sm bg-success di"><i class="fa fa-plus"></i></span><span> Nova Entrada</span></a></li>
                                </div>
                            </div>

                            <div class="areaTable row" >
                                <div class="col-sm-12">
                                    <div class="white-box">

                                        <div class="table-responsive">
                                            <div id="example23_wrapper" class="dataTables_wrapper"><div class="dt-buttons"><a class="dt-button buttons-copy buttons-html5" tabindex="0" aria-controls="example23" href="#"><span>Copy</span></a><a class="dt-button buttons-csv buttons-html5" tabindex="0" aria-controls="example23" href="#"><span>CSV</span></a><a class="dt-button buttons-excel buttons-html5" tabindex="0" aria-controls="example23" href="#"><span>Excel</span></a><a class="dt-button buttons-pdf buttons-html5" tabindex="0" aria-controls="example23" href="#"><span>PDF</span></a><a class="dt-button buttons-print" tabindex="0" aria-controls="example23" href="#"><span>Print</span></a></div><div id="example23_filter" class="dataTables_filter"><label>Search:<input type="search" class="" placeholder="" aria-controls="example23"></label></div><table id="example23" class="display nowrap dataTable" cellspacing="0" width="100%" role="grid" aria-describedby="example23_info" style="width: 100%;">
                                                    <thead>
                                                        <tr>
                                                            <th rowspan="1" colspan="1">Nº Entrada</th>
                                                            <th rowspan="1" colspan="1">Data</th>
                                                            <th rowspan="1" colspan="1">Instituição</th>
                                                            <th rowspan="1" colspan="1">Tipo doc</th>
                                                            <th rowspan="1" colspan="1">Nº Tip Doc</th>
                                                            <th rowspan="1" colspan="1">Ação</th>
                                                        </tr>
                                                    </thead>
                                                    <tfoot>
                                                    <tr>
                                                        <th rowspan="1" colspan="1">Nº Entrada</th>
                                                        <th rowspan="1" colspan="1">Data</th>
                                                        <th rowspan="1" colspan="1">Instituição</th>
                                                        <th rowspan="1" colspan="1">Tipo doc</th>
                                                        <th rowspan="1" colspan="1">Nº Tip Doc</th>
                                                        <th rowspan="1" colspan="1">Ação</th>
                                                    </tr>
                                                    </tfoot>
                                                    <tbody>
                                                        <tr role="row" class="odd">
                                                            <td  class="sorting_1">38</td>
                                                            <td>27/01/2017</td>
                                                            <td> Minist da Justiça/Minist das Finanças</td>
                                                            <td>Despacho Conjunto</td>
                                                            <td>04/2017</td>
                                                            <td>Planificar</td>
                                                        </tr>
                                                        <tr role="row" class="even">
                                                            <td  class="sorting_1">38</td>
                                                            <td>27/01/2017</td>
                                                            <td> Minist da Justiça/Minist das Finanças</td>
                                                            <td>Despacho Conjunto</td>
                                                            <td>04/2017</td>
                                                            <td>Planificar</td>
                                                        </tr>
                                                        <tr role="row" class="odd">
                                                            <td  class="sorting_1">38</td>
                                                            <td>27/01/2017</td>
                                                            <td> Minist da Justiça/Minist das Finanças</td>
                                                            <td>Despacho Conjunto</td>
                                                            <td>04/2017</td>
                                                            <td>Planificar</td>
                                                        </tr>
                                                        <tr role="row" class="even">
                                                            <td  class="sorting_1">38</td>
                                                            <td>27/01/2017</td>
                                                            <td> Minist da Justiça/Minist das Finanças</td>
                                                            <td>Despacho Conjunto</td>
                                                            <td>04/2017</td>
                                                            <td>Planificar</td>
                                                        </tr>
                                                        <tr role="row" class="odd">
                                                            <td  class="sorting_1">38</td>
                                                            <td>27/01/2017</td>
                                                            <td> Minist da Justiça/Minist das Finanças</td>
                                                            <td>Despacho Conjunto</td>
                                                            <td>04/2017</td>
                                                            <td>Planificar</td>
                                                        </tr>
                                                        <tr role="row" class="even">
                                                            <td  class="sorting_1">38</td>
                                                            <td>27/01/2017</td>
                                                            <td> Minist da Justiça/Minist das Finanças</td>
                                                            <td>Despacho Conjunto</td>
                                                            <td>04/2017</td>
                                                            <td>Planificar</td>
                                                        </tr>
                                                    </tbody>
                                                </table><div class="dataTables_info" id="example23_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div><div class="dataTables_paginate paging_simple_numbers" id="example23_paginate"><a class="paginate_button previous disabled" aria-controls="example23" data-dt-idx="0" tabindex="0" id="example23_previous">Previous</a><span><a class="paginate_button current" aria-controls="example23" data-dt-idx="1" tabindex="0">1</a><a class="paginate_button " aria-controls="example23" data-dt-idx="2" tabindex="0">2</a><a class="paginate_button " aria-controls="example23" data-dt-idx="3" tabindex="0">3</a><a class="paginate_button " aria-controls="example23" data-dt-idx="4" tabindex="0">4</a><a class="paginate_button " aria-controls="example23" data-dt-idx="5" tabindex="0">5</a><a class="paginate_button " aria-controls="example23" data-dt-idx="6" tabindex="0">6</a></span><a class="paginate_button next" aria-controls="example23" data-dt-idx="7" tabindex="0" id="example23_next">Next</a></div></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section id="section-iconbox-2" class="">
                            <h2>Planificação</h2>
                        </section>
                        <section id="section-iconbox-3" class="">
                            <h2>Planificados - Em Edição</h2>
                        </section>
                        <section id="section-iconbox-4" class="">
                            <h2>Saída</h2>
                        </section>
                        <section id="section-iconbox-5" class="">
                            <h2>Por pagar</h2>
                        </section>

                    </div>
                    <!-- /content -->
                </div>


                <footer class="footer text-center"> 2017 &copy; GIP Online </footer>
            </div>
        </div>
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                        <h4 class="modal-title" id="exampleModalLabel1">Nova Entrada</h4> </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group">
                                <label for="" class="control-label">Nº de Entrada:</label>
                                <label for="" class="control-label">45</label></div>
                            <div class="form-group">
                                <label for="" class="control-label">Instituição</label>
                                <input type="text" class="form-control" id=""> </div>
                            <div class="form-group">
                                <label for="" class="control-label">Tipo de Documento:</label>
                                <select name="" id="" class="form-control"></select>
                            </div>
                            <div class="form-group">
                                <label for="" class="control-label">Nº Ofício:</label>
                                <input type="text" class="form-control" id="">
                            </div>
                            <div class="form-group">
                                <label for="" class="control-label">Upload do Documento:</label>
                                    <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                                        <div class="form-control" data-trigger="fileinput"> <i class="glyphicon glyphicon-file fileinput-exists"></i> <span class="fileinput-filename"></span></div> <span class="input-group-addon btn btn-default btn-file"> <span class="fileinput-new">Select file</span> <span class="fileinput-exists">Change</span>
                                            <input type="file" name="..."> </span> <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a> </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                        <button type="button" class="btn btn-primary">Salvar Entrada</button>
                    </div>
                </div>
            </div>
        </div>

    <div class="areaMoreInfo out col-md-12">
        <div class="col-md-12">
            <div class="panel panel-info">
                <div class="panel-heading"> Mais Informações <span class="pull-right btn btn-circle btn-default btclose">X</span></div>
                <div class="panel-wrapper collapse in" aria-expanded="true">
                    <div class="panel-body">
                        <form class="form-horizontal" role="form">
                            <div class="form-body">
                                <h3 class="box-title">Informações Pessoais</h3>
                                <hr class="m-t-0 m-b-40">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label col-md-6">Tipo de Pessoa:</label>
                                            <div class="col-md-6">
                                                <p class="form-control-static" id="tipoPess">  </p>
                                            </div>
                                        </div>
                                    </div>
                                    <!--/span-->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label col-md-6">Nome Completo</label>
                                            <div class="col-md-6">
                                                <p class="form-control-static" id="nome"> </p>
                                            </div>
                                        </div>
                                    </div>
                                    <!--/span-->
                                </div>


                                <!--/row-->
                                <h3 class="box-title">INFORMAÇÕES SOBRE A PARTICIPAÇÃO</h3>
                                <hr class="m-t-0 m-b-40">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label col-md-6">Tipo de Participação</label>
                                            <div class="col-md-6">
                                                <p class="form-control-static" id="tipoPart"></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label col-md-6">Data de Registro:</label>
                                            <div class="col-md-6">
                                                <p class="form-control-static" id="dataReg"> </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <h3 class="box-title">INFORMAÇÕES SOBRE O PROCESSO</h3>
                                <hr class="m-t-0 m-b-40">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Estado do Processo:</label>
                                        <div class="col-md-7" style="display: flex; justify-content: space-between">
                                            <article class="articleMaster">
                                                <p class="form-control-static" id="estadoProcess"> </p>
                                                <label class="btn btn-info btn-circle iconEdit" title="editar"><i class="fa fa-pencil" ></i></label>
                                            </article>
                                                <select name="" id="selectProcess" class="hidden">
                                                    <option value="">*Selecione*</option>
                                                    <option value="1">Pendente</option>
                                                    <option value="2">Em curso</option>
                                                    <option value="3">Arquivado</option>
                                                    <option value="4">Concluído</option>
                                                </select>
                                            <label class="btn btn-primary btEditPross hidden"> <i class="fa fa-plus"></i> Salvar</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr class="m-t-0 m-b-10">
                            <div class="form-actions">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="row">
                                            <div class="col-md-offset-3 col-md-9">
                                                <button type="button" class="btn btn-default" id="btCancel">Cancelar</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6"> </div>
                                </div>
                            </div>
                            <div id="alerttopright" class="myadmin-alert myadmin-alert-img alert-danger myadmin-alert-top-right " >
                                <i class="fa fa-exclamation-triangle img" style="font-size: 2.5rem; padding: 1rem" id="alertIcon"></i><a href="#" class="closed">x</a>
                                <smal class="textAlert"><h4>Erro!</h4> Preenha os campos obrigatórios</smal>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="../plugins/bower_components/jquery/dist/jquery.min.js"></script>

    <!--Morris-->
    <script src="../plugins/bower_components/morris/morris.js"></script>
    <script src="../plugins/bower_components/morris/raphael-min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- Menu Plugin JavaScript -->
    <script src="../plugins/bower_components/sidebar-nav.min.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>

    <script src="js/custom.min.js"></script>
    <script src="../plugins/bower_components/toast-master/js/jquery.toast.js"></script>

    <script src="../../resources/js/utilitarios.js"></script>
    <script src="../../resources/js/funcoes.js"></script>
<!--    <script src="js/dasboard.js"></script>-->
    <script src="js/admin.js"></script>

    <script src="../plugins/bower_components/jquery.dataTables.min.js"></script>

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/jszip-2.5.0/dt-1.10.16/af-2.2.2/b-1.4.2/b-colvis-1.4.2/b-flash-1.4.2/b-html5-1.4.2/b-print-1.4.2/cr-1.4.1/fc-3.2.3/kt-2.3.2/r-2.2.0/datatables.min.css"/>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/jszip-2.5.0/dt-1.10.16/af-2.2.2/b-1.4.2/b-colvis-1.4.2/b-flash-1.4.2/b-html5-1.4.2/b-print-1.4.2/cr-1.4.1/fc-3.2.3/kt-2.3.2/r-2.2.0/datatables.min.js"></script>

   <script src="../plugins/bower_components/cbpFWTabs.js"></script>
   <script type="text/javascript">
       (function() {
           [].slice.call(document.querySelectorAll('.sttabs')).forEach(function(el) {
               new CBPFWTabs(el);
           });
       })();
       $('#exampleModal').modal();
   </script>

</body>

</html>

