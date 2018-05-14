<?php include 'templates/header.php';?>
<body>
<?php include 'templates/navbar.php';?>
<?php include 'templates/sidebar.php';?>

<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Classes</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
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
        $sql = "SELECT * FROM classmember where classid=".$_SESSION["classroomid"]." AND id=".$_SESSION["userid"];
        //echo $sql;
        $result = mysqli_query($conn, $sql);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $role = $row["typee"];
        }
        $conn->close();
        if($role=="Moderator")
        {
        echo '<div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Add a class
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <form action="../study/connection/createclass.php" method="post">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="topic" name="topic" type="text" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="date" name="date" type="text" autofocus>
                                </div>

                                <input type="Submit" class="btn btn-success btn-outline" placeholder="Create class">
                            </fieldset>

                    </form>

                </div>
                <!-- /.panel-body -->
            </div>
        </div>';
        }
        ?>

        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    All classes
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <table width="100%" class="table">
                        <thead>
                        <tr>
                            <th>Topic</th>
                            <th>Date</th>

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
                        $sql = "SELECT * FROM class where classroomid=".$_SESSION["classroomid"];
                        $result = mysqli_query($conn, $sql);
                        if ($result->num_rows > 0) {
                            while($row = $result->fetch_assoc()) {
                                echo '<td class="odd gradeX">'.$row["topic"].'</td><td>'.$row["datee"].'</td><td class="center"><a href="viewclass.php" class="btn btn-outline btn-success" role="button" aria-pressed="true">View</a></td></tr>';
                            }
                        }
                        $conn->close();

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