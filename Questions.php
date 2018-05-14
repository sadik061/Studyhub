<?php include 'templates/header.php';?>
<body>
<?php include 'templates/navbar.php';?>
<div class="row" style="   padding-top:  76px;    margin-left: 30px;   margin-right: 30px;" >
    <div class="col-md-12">
        <script>
            $('#myTabs a').click(function (e) {
                e.preventDefault()
                $(this).tab('show')
            })
            $('#myTabs a[href="#CSE"]').tab('show') // Select tab by name
            $('#myTabs a[href="#eee"]').tab('show') // Select tab by name
        </script>
        <div>

            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
                <li role="presentation"><a href="#CSE" aria-controls="CSE" role="tab" data-toggle="tab">C.S.E</a></li>
                <li role="presentation"><a href="#eee" aria-controls="eee" role="tab" data-toggle="tab">E.E.E</a></li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane active"  id="CSE"><div class="content-panel">
                        <div class="col-lg-8" >
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    C.S.E Questions
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

                        </div>
                        <div class="col-lg-4" >
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
                    </div>
                </div>

                <div role="tabpanel" class="tab-pane" id="eee"><div class="content-panel">
                        <div class="col-lg-8" >
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    E.E.E Questions
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

                        </div>
                        <div class="col-lg-4" >
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
                    </div>
                </div>

        </div>
    </div>
</div>

</body>
<?php include 'templates/footer.php';?>
<?php include 'templates/classroomcreate.php';?>
<?php include 'templates/Solutionpop.php';?>

</html>
