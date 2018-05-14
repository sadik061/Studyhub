
<div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="exampleModalLabel">Sign In</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form role="form" action="../study/connection/signin.php" method="post">
                    <fieldset>
                        <div class="form-group">
                            <input class="form-control" placeholder="Name" name="Name" type="text" autofocus>
                        </div>
                        <div class="form-group">
                            <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus>
                        </div>
                        <div class="form-group">
                            <input class="form-control" placeholder="Password" name="password" type="password" value="">
                        </div>
                        <div class="form-group">
                            <input class="form-control" placeholder="Contact" name="Contact" type="text" autofocus>
                        </div>
                        <!-- Change this to a button or input when using this as a form -->
                        <input type="Submit" class="btn btn-success btn-outline" placeholder="Log in">
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>
