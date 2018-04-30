<?php
session_start();
?>
<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <a class="navbar-brand" href="<?php echo 'index.php';?>" style="   font-size:  32px;">STUDY HUB</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse float-right" id="navbarCollapse">
        <ul class="navbar-nav mr-auto" style="margin-left: 62%;">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown05" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Notes</a>
                <div class="dropdown-menu" aria-labelledby="dropdown05">
                    <a class="dropdown-item" href="#">NSU</a>
                    <a class="dropdown-item" href="<?php echo 'note.php';?>">UIU</a>
                    <a class="dropdown-item" href="#">BRAC</a>
                </div>
            </li>
            <li class="nav-item" style="margin-left: 19px;">
                <a class="nav-link" href="#">Projects</a>
            </li>
            <li class="nav-item" style="margin-left: 19px;">
                <a class="nav-link" href="#">Q&A</a>
            </li>
            <li class="nav-item" style="margin-left: 19px;">
                <a class="nav-link" href="#">Create new Classroom</a>
            </li>
            <li class="nav-item" style="margin-left: 19px;">
                <a class="nav-link" href="<?php echo 'dashboard.php';?>">Dashboard</a>
            </li>
        </ul>

    </div>
</nav>



