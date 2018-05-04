<?php include 'templates/header.php';?>
<body>
<?php include 'templates/navbar.php';?>
<?php include 'templates/sidebar.php';?>

<div id="page-wrapper" style="padding-top: 2%;">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Classes</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    DataTables Advanced Tables
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Topic</th>
                            <th>Date</th>
                            <th>Questions</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr class="odd gradeX">
                            <td>1</td>
                            <td>What is system design analysis and design</td>
                            <td>03-03-2018</td>
                            <td class="center">8</td>
                            <td class="center"><button type="button" class="btn btn-outline btn-success">Success</button></td>
                        </tr>
                        <tr class="even gradeC">
                            <td>2</td>
                            <td>SDLC</td>
                            <td>05-03-2018</td>
                            <td class="center">10</td>
                            <td class="center"><button type="button" class="btn btn-outline btn-success">Success</button></td>
                        </tr>
                        <tr class="odd gradeA">
                            <td>3</td>
                            <td>Feasibility test</td>
                            <td>09-03-2018</td>
                            <td class="center">18</td>
                            <td class="center"><button type="button" class="btn btn-outline btn-success">Success</button></td>
                        </tr>
                        <tr class="even gradeA">
                            <td>4</td>
                            <td>Class diagram</td>
                            <td>11-03-2018</td>
                            <td class="center">10</td>
                            <td class="center"><button type="button" class="btn btn-outline btn-success">Success</button></td>
                        </tr>



                        </tbody>
                    </table>
                    <!-- /.table-responsive -->

                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>
</body>
<?php include 'templates/footer.php';?>
</html>