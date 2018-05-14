<?php
session_start();
error_reporting(1);
?>
<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark" style="position:  fixed;">
    <a class="navbar-brand btn btn-bd-download" href="<?php echo 'index.php';?>" style="   font-size:  32px;">S</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse float-right" id="navbarCollapse">
        <ul class="navbar-nav mr-auto" style="margin-left: 66%;">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown05" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Notes</a>
                <div class="dropdown-menu" aria-labelledby="dropdown05">
                    <a class="dropdown-item" href="#">NSU</a>
                    <a class="dropdown-item" href="<?php echo 'note.php';?>">UIU</a>
                    <a class="dropdown-item" href="#">BRAC</a>
                </div>
            </li>
            <li class="nav-item" style="margin-left: 19px;"><a class="nav-link" href="#">Projects</a></li>
            <li class="nav-item" style="margin-left: 19px;">
                <a class="nav-link" href="../study/Questions.php">Q&A</a>
            </li>
            <button type="button" class="btn btn-bd-download" data-toggle="modal" data-target="#exampleModal" style="margin-left: 15px;">
                Create New Classroom
            </button>
            <?php
            if($_SESSION["login"]=="true")
            {
                echo '<li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle active" style="margin-left: 19px;" href="#" id="dropdown05" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">User</a>
                <div class="dropdown-menu" aria-labelledby="dropdown05">
                    <a class="dropdown-item" href="../Study/dashboard.php">Dashboard</a>
                    <a class="dropdown-item" href="">Notifications</a>
                    <a class="dropdown-item" href="../Study/Classromms.php">Classrooms</a>
                    <a class="dropdown-item" href="../study/connection/logout.php">Logout</a>
                </div>
            </li>';
            }
            else{
                echo '<button type="button" class="btn btn-bd-download" data-toggle="modal" data-target="#exampleModal1">';
                echo 'Login </button>';


            }

            ?>


        </ul>

    </div>
</nav>



