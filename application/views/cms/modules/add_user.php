<div class="col-md-10 col-md-offset-1">
    <div class="box box-default">
        <div class="box-body">
            <form action="<?=site_url('cms/users/Add'); ?>" method="post" enctype="multipart/formdata" class="form form-horizontal">
        <div class="form-group">
            <label for="" class="control-label col-md-3">Name</label>
            <div class="col-md-7">
                <input type="text" name="Name" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <label for="" class="control-label col-md-3">Email</label>
            <div class="col-md-7">
                <input type="text" name="email" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <label for="" class="control-label col-md-3">Designation </label>
            <div class="col-md-7">
                <input type="text" name="Designation" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <label for="" class="control-label col-md-3">ROLES</label>
            <div class="col-md-7">
                <div class="row">
                    <div class="col-md-2 text-bold">
                        Articles:
                    </div>
                    <div class="col-md-10">
                        <label class="checkbox-inline">
                            <input type="checkbox" id="inlineCheckbox1" value="edit" name="role[article][]"> Edit
                        </label>
                        <label class="checkbox-inline">
                            <input type="checkbox" id="inlineCheckbox1" value="delete" name="role[article][]"> Delete
                        </label>
                        <label class="checkbox-inline">
                            <input type="checkbox" id="inlineCheckbox1" value="disable" name="role[article][]"> Disable
                        </label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2 text-bold">
                        Users:
                    </div>
                    <div class="col-md-10">
                        <label class="checkbox-inline">
                            <input type="checkbox" id="inlineCheckbox1" value="edit" name="role[users][]"> Edit
                        </label>
                        <label class="checkbox-inline">
                            <input type="checkbox" id="inlineCheckbox1" value="delete" name="role[users][]"> Delete
                        </label>
                        <label class="checkbox-inline">
                            <input type="checkbox" id="inlineCheckbox1" value="disable" name="role[users][]"> Disable
                        </label>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="pass1" class="control-label col-md-3">Enter Password</label>
            <div class="col-md-7">
                <input type="password" name="pass1" class="form-control" id="password">
            </div>
        </div>
        <div class="form-group">
            <label for="pass2" class="control-label col-md-3">Confirm Password</label>
            <div class="col-md-7">
                 <input type="password" name="pass2" class="form-control" id="password-confirm" oninput="check(this)">
            </div>
        </div>
                <script language='javascript' type='text/javascript'>
                    function check(input) {
                        if (input.value != document.getElementById('password').value) {
                            input.setCustomValidity('Password Must be Matching.');
                        } else {
                            // input is valid -- reset the error message
                            input.setCustomValidity('');
                        }
                    }
                </script>
        <div class="form-group">
            <div class="col-md-7 col-md-offset-3">
                <div class="pull-left">
                   <?=@$elements['msg']; ?>
                </div>
                <div class="pull-right">
                    <button name="save" value="1" class="btn btn-primary">Save</button>

                </div>
            </div>
        </div>
    </form>
        </div>
    </div>
</div>