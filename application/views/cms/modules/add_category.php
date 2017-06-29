<form  action="<?=site_url("cms/Category/Add/new"); ?>" class="form form-horizontal" method="post">
    <div class="form-group">
        <label for="" class="control-label col-md-3">Category Name</label>
        <div class="col-md-7">
            <input type="text" name="catName" required autofocus autocomplete="off" class="form-control col-md-6">
        </div>
    </div>
	<div class="form-group">
        <label for="" class="control-label col-md-3">Description</label>

        <div class="col-md-7">
            <textarea name="description"  cols="30" rows="10" class="summernote form-control"></textarea>
        </div>
    </div>
    <div class="form-group">
        <label for="" class="control-label col-md-3">Category List Order</label>
        <div class="col-md-7">
            <input type="number" name="categorylistorder" required autofocus autocomplete="off" class="form-control col-md-6" min="0" max="15">
        </div>
    </div>
    <div class="form-group clearfix">
        <div class="col-md-10">
            <div class="pull-left text text-danger">
            <?=$elements["resp"]; ?>
            </div>
            <div class="pull-right">
                <button name="save" value="1" class="btn btn-primary">SAVE</button>
                <button name="publish" value="1" class="btn btn-primary">PUBLISH</button>
            </div>
        </div>
    </div>
</form>