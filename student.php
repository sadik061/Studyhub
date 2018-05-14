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
                    Details
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <table width="100%" class="table" >
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Questions</th>
                            <th>Solved</th>
                            <th>Unsolved</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                            $servername = "localhost";
                            $username = "root";
                            $password = "";
                            $dbname = "study";
                            error_reporting(1);
                            $conn = new mysqli($servername, $username, $password, $dbname);
                            if ($conn->connect_error) {
                                die("Connection failed: " . $conn->connect_error);
                            }
                            $sql = "SELECT * FROM classmember NATURAL JOIN user where classid=".$_SESSION["classroomid"];
                            $result = mysqli_query($conn, $sql);
                            if ($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()) {
                                  echo  '<tr class="odd gradeX">
                            <td>'.$row["name"].'</td>
                            <td>'.$row["email"].'</td>
                            <td>10</td>
                            <td class="center">8</td>
                            <td class="center">2</td>
                        </tr>';
                                }

                                }
                                ?>

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