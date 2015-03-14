<?php
require_once("includes/functions.php");
if(!isset($_COOKIE["idUsuario"])) {
header("Location: login.php");
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>UCOL | Proyectos</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
        <!-- Data Tables -->
        <link href="css/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet">
        <link href="css/plugins/dataTables/dataTables.responsive.css" rel="stylesheet">
        <link href="css/plugins/dataTables/dataTables.tableTools.min.css" rel="stylesheet">
        <link href="css/animate.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
        <div id="wrapper">
            <?php
            require_once("includes/menu.php");
            ?>
            <div id="page-wrapper" class="gray-bg">
                <div class="row border-bottom">
                    <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
                        <div class="navbar-header">
                            <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
                        </div>
                        <ul class="nav navbar-top-links navbar-right">
                            <li><a href="includes/logout.php"><i class="fa fa-sign-out"></i> Cerrar Sesión</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="row wrapper border-bottom white-bg page-heading">
                    <div class="col-sm-12">
                        <h2>Proyectos</h2>
                        <ol class="breadcrumb">
                            <li>
                                <a href="index.php">Inicio</a>
                            </li>
                            <li class="active">
                                <strong>Proyectos</strong>
                            </li>
                        </ol>
                    </div>
                </div>
                <div class="row">
                    <div class="wrapper wrapper-content animated fadeInRight">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="ibox float-e-margins">
                                    <div class="ibox-title">
                                        <div class="ibox-tools">
                                            <a class="collapse-link">
                                                <i class="fa fa-chevron-up"></i>
                                            </a>
                                            <a class="close-link">
                                                <i class="fa fa-times"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="ibox-content">

                                            <table class="table table-striped table-bordered table-hover dataTables-example dataTable dtr-inline" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                                                <thead>
                                                    <tr role="row">
                                                        <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">No Proyecto</th>
                                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Proyecto</th>
                                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">Valor del proyecto</th>
                                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Cobros efectivos</th>
                                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Gastos</th>
                                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Saldo</th>
                                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Saldo Final</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr class="gradeA odd" role="row">
                                                        <td class="sorting_1">1</td>
                                                        <td>KMS</td>
                                                        <td>$5,000.00</td>
                                                        <td class="center">$4,000.00</td>
                                                        <td class="center">$1,800.00</td>
                                                        <td class="center">$2,200.00</td>
                                                        <td class="center">$3,200.00</td>
                                                    </tr>
                                                    <tr class="gradeA even" role="row">
                                                        <td class="sorting_1">2</td>
                                                        <td>CEA JALISCO</td>
                                                        <td>$6,000.00</td>
                                                        <td class="center">$3,000.00</td>
                                                        <td class="center">$2,500.00</td>
                                                        <td class="center">$500.00</td>
                                                        <td class="center">$3,500.00</td>
                                                    </tr>
                                                    <tr class="gradeA odd" role="row">
                                                        <td class="sorting_1">3</td>
                                                        <td>AUTOPISTAS</td>
                                                        <td>$4,000.00</td>
                                                        <td class="center">$4,000.00</td>
                                                        <td class="center">$1,800.00</td>
                                                        <td class="center">$2,200.00</td>
                                                        <td class="center">$2,200.00</td>
                                                    </tr>
                                                    <tr class="gradeA even" role="row">
                                                        <td class="sorting_1">4</td>
                                                        <td>CNA MORELIA</td>
                                                        <td>$3,000.00</td>
                                                        <td class="center">$1,800.00</td>
                                                        <td class="center">$1,900.00</td>
                                                        <td class="center">$100.00</td>
                                                        <td class="center">$1,100.00</td>
                                                    </tr>
                                                    <tr class="gradeA odd" role="row">
                                                        <td class="sorting_1">5</td>
                                                        <td>API</td>
                                                        <td>$8,500.00</td>
                                                        <td class="center">$5,000.00</td>
                                                        <td class="center">$7,000.00</td>
                                                        <td class="center">$2,000.00</td>
                                                        <td class="center">$1,500.00</td>
                                                    </tr>
                                                </tbody>
                                                <tfoot>
                                                <tr>
                                                    <th rowspan="1" colspan="1">No Proyecto</th>
                                                    <th rowspan="1" colspan="1">Proyecto</th>
                                                    <th rowspan="1" colspan="1">Valor del proyecto</th>
                                                    <th rowspan="1" colspan="1">Cobros efectivos</th>
                                                    <th rowspan="1" colspan="1">Gastos</th>
                                                    <th rowspan="1" colspan="1">Saldo</th>
                                                    <th rowspan="1" colspan="1">Saldo Final</th>
                                                </tr>
                                                </tfoot>
                                            </table>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div style="clear:both;"></div>
</div>
</div>
<!-- Mainly scripts -->
<script src="js/jquery-2.1.1.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
<script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
<!-- Data Tables -->
<script src="js/plugins/dataTables/jquery.dataTables.js"></script>
<script src="js/plugins/dataTables/dataTables.bootstrap.js"></script>
<script src="js/plugins/dataTables/dataTables.responsive.js"></script>
<script src="js/plugins/dataTables/dataTables.tableTools.min.js"></script>
<!-- Custom and plugin javascript -->
<script src="js/inspinia.js"></script>
<script src="js/plugins/pace/pace.min.js"></script>
<!-- Page-Level Scripts -->
<script>
    $(document).ready(function() {
        $('.dataTables-example').dataTable({
            responsive: true,
            "language": {
                "search": "Busca: ",
                "paginate": {
                    "next": "Siguiente",
                    "previous": "Anterior"
                }
            },
            dom: 'T<"clear">lfrtip',
            "tableTools": {
                "sSwfPath": "js/plugins/dataTables/swf/copy_csv_xls_pdf.swf"
            }
        });
    });
</script>
<style>
    body.DTTT_Print {
        background: #fff;
    }
    .DTTT_Print #page-wrapper {
        margin: 0;
        background:#fff;
    }
    button.DTTT_button, div.DTTT_button, a.DTTT_button {
        border: 1px solid #e7eaec;
        background: #fff;
        color: #676a6c;
        box-shadow: none;
        padding: 6px 8px;
    }
    button.DTTT_button:hover, div.DTTT_button:hover, a.DTTT_button:hover {
        border: 1px solid #d2d2d2;
        background: #fff;
        color: #676a6c;
        box-shadow: none;
        padding: 6px 8px;
    }
    .dataTables_filter label {
        margin-right: 5px;
    }
</style>
</body>
</html>