<?php include 'templates/header.php';?>
<body>
<?php include 'templates/navbar.php';?>
<?php include 'templates/sidebar.php';?>

<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">What is system design analysis and design</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-4" style="background-color: #dbdbdb54; padding-top: 12px;">
            <div class="col-md-6">
                <div class="card mb-4 box-shadow">
                    <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" style="height: 225px; width: 100%; display: block;" src="images/note.jpg" data-holder-rendered="true">
                    <div class="card-body">
                        <p class="card-text">page 1</p>

                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card mb-4 box-shadow">
                    <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" style="height: 225px; width: 100%; display: block;" src="images/note1.jpg" data-holder-rendered="true">
                    <div class="card-body">
                        <p class="card-text">page 2</p>

                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card mb-4 box-shadow">
                    <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" style="height: 225px; width: 100%; display: block;" src="images/note2.png" data-holder-rendered="true">
                    <div class="card-body">
                        <p class="card-text">page 3</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-8" >
            <div class="panel panel-default">
                <div class="panel-heading">
                    DataTables Advanced Tables
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <table width="100%" class="table">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>user</th>
                            <th>question</th>
                            <th style=" padding-right: 56px; ">Date</th>
                            <th>solved</th>
                            <th>solutions</th>
                        </tr>
                        </thead>
                        <tbody >
                        <tr class="odd gradeX">
                            <td>1</td>
                            <td>Shovon</td>
                            <td>What is system design analysis and design ?
                                <br><button type="button" class="btn btn-xs btn-outline-secondary">Follow</button>
                                <button type="button" class="btn btn-xs btn-outline-secondary">Make Global</button></td>
                            <td>03-03-2018</td>
                            <td class="center">yes</td>
                            <td class="center"><button type="button" class="btn btn-outline btn-success" data-toggle="modal" data-target="#exampleModal2">View</td>
                        </tr>
                        <tr class="even gradeC">
                            <td>2</td>
                            <td>Shahin</td>
                            <td>What is SDLC?
                                <br><button type="button" class="btn btn-xs btn-outline-secondary">Follow</button>
                                <button type="button" class="btn btn-xs btn-outline-secondary">Make Global</button></td>
                            <td>05-03-2018</td>
                            <td class="center">10</td>
                            <td class="center"><button type="button" class="btn btn-outline btn-success">View</button></td>
                        </tr>
                        <tr class="odd gradeA">
                            <td>3</td>
                            <td>Oishy</td>
                            <td>Processes of Feasibility test
                                <br><button type="button" class="btn btn-xs btn-outline-secondary">Follow</button>
                                <button type="button" class="btn btn-xs btn-outline-secondary">Make Global</button></td>
                            <td>09-03-2018</td>
                            <td class="center">18</td>
                            <td class="center"><button type="button" class="btn btn-outline btn-success">View</button></td>
                        </tr>
                        <tr class="even gradeA">
                            <td>4</td>
                            <td>Naurin</td>
                            <td>What is it?
                                <br><button type="button" class="btn btn-xs btn-outline-secondary">Follow</button>
                                <button type="button" class="btn btn-xs btn-outline-secondary">Make Global</button></td>
                            <td>11-03-2018</td>
                            <td class="center">10</td>
                            <td class="center"><button type="button" class="btn btn-outline btn-success">View</button></td>
                        </tr>

                        </tbody>
                    </table>
                    <!-- /.table-responsive -->

                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    Ask a question
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <form>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Question</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputPassword" placeholder="">
                            </div>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1">
                                Anonymous
                            </label>
                        </div>
                        <button type="submit" class="btn btn-success mb-2" style="float:  right;">Submit Question</button>
                    </form>

                </div>
                <!-- /.panel-body -->
            </div>
        </div>
        <!-- /.col-lg-12 -->
    </div>
</body>
<?php include 'templates/footer.php';?>
<?php include 'templates/classroomcreate.php';?>
<?php include 'templates/Solutionpop.php';?>
</html>