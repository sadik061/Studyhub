<?php include 'templates/header.php';?>
<body>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
    <span aria-hidden="true">&times;</span>
</button>
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Enter Enrollment key</h3>
                </div>
                <div class="panel-body">
                    <form role="form" action="connection/enroll.php?classroomid=<?php echo $_GET["classroomid"]?>" method="post">
                        <fieldset>
                            <div class="form-group">
                                <input class="form-control" placeholder="Password" name="password" type="password" value="">
                            </div>

                            <!-- Change this to a button or input when using this as a form -->
                            <input type="Submit">
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
<?php include 'templates/footer.php';?>
</html>
