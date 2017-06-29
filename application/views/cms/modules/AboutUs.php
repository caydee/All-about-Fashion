
    <div class="col-md-10 col-md-offset-1">
        <div class="box box-primary">
            <div class="box-panel">
                <h1 class="box-header">Test</h1>
            </div>
            <div class="box-body">
                <form action="<?=site_url('cms/AboutUs'); ?>" method="post" enctype="multipart/formdata" class="form form-horizontal">
                    <div class="form-group hidden">
                        <label for="id" class="control-label col-md-2">ID</label>
                        <div class="col-md-8">
                            <input type="number" name="id" class="form-control" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="" class="control-label col-md-2">About Us</label>
                        <div class="col-md-9">
                            <textarea name="aboutus"  class="summernote form-control"></textarea>
                        </div>
                    </div>
                    <div class="form-group">

                            <label for="latitude" class="control-label col-md-2">Latitude</label>
                            <div class="col-md-4">
                                <input type="number" name="latitude" class="form-control" />
                            </div>
                            <label for="longitude" class="control-label col-md-1">Longitude</label>
                            <div class="col-md-4">
                                <input type="number" name="longitude" class="form-control" />
                            </div>
                    </div>
                    <div class="form-group">

                        <label for="locmarkup" class="control-label col-md-2">Location Markup</label>
                        <div class="col-md-9">
                            <input type="text" name="locationMarkup" class="form-control" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="Fax" class="control-label col-md-2">Fax</label>
                        <div class="col-md-4">
                            <input type="text" name="fax" class="form-control" />
                        </div>

                        <label for="telno" class="control-label col-md-1">Tel No</label>
                        <div class="col-md-4">
                            <input type="text" name="telno" class="form-control" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email-address" class="control-label col-md-2">Email Address</label>
                        <div class="col-md-4">
                            <input type="text" name="email-address" class="form-control" />
                        </div>
                        <label for="postal-address" class="control-label col-md-1">Postal Address</label>
                        <div class="col-md-4">
                            <input type="text" name="postal-address" class="form-control" />
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-11">
                            <div class="pull-right">
                                <button name="save" value="update" class="btn btn-google">UPDATE</button>
                                <button name="save" value="submit" class="btn btn-success">SUBMIT</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
