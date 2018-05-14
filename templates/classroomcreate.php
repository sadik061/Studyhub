<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="exampleModalLabel">CREATE NEW CLASSROOM</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form role="form" action="../study/connection/createclassroom.php" method="post">
                    <fieldset>
                        <div class="form-group">
                            <input class="form-control" placeholder="Class Name" name="Name" type="text" autofocus>
                        </div>
                        <div class="form-group">
                            <input class="form-control" placeholder="subject" name="subject" type="text" value="">
                        </div>
                        <div class="form-group">
                            <input class="form-control" placeholder="department" name="department" type="text" value="">
                        </div>
                        <div class="form-group">
                            <input class="form-control" placeholder="Enroll" name="Enroll" type="text" value="">
                        </div>
                        <!-- Change this to a button or input when using this as a form -->
                        <button type="Submit" class="btn btn-success btn-outline">Create</button>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>
