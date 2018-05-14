<?php include 'templates/header.php';?>
<body>
<?php include 'templates/navbar.php';?>
<?php include 'templates/sidebar.php';?>
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Students info</h1>
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
                    <table width="100%" class="table" >
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>ID</th>
                            <th>Questions</th>
                            <th>Solved</th>
                            <th>Unsolved</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr class="odd gradeX">
                            <td>Naurin Azad</td>
                            <td>011151313</td>
                            <td>10</td>
                            <td class="center">8</td>
                            <td class="center">2</td>
                        </tr>
                        <tr class="even gradeC">
                            <td>Anika Hossain Oishy</td>
                            <td>011151134</td>
                            <td>15</td>
                            <td class="center">10</td>
                            <td class="center">5</td>
                        </tr>
                        <tr class="odd gradeA">
                            <td>Hasibur Rahman Shovon</td>
                            <td>011151122</td>
                            <td>20</td>
                            <td class="center">18</td>
                            <td class="center">2</td>
                        </tr>
                        <tr class="even gradeA">
                            <td>Shahinur Islam</td>
                            <td>011151148</td>
                            <td>10</td>
                            <td class="center">10</td>
                            <td class="center">0</td>
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
<?php include 'templates/classroomcreate.php';?>
</html>