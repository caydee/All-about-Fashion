<!--form action="" class="" method="post"-->
 <?php
 $attributes = array('class' => 'form form-horizontal', 'method' => 'post');
 echo form_open_multipart('cms/article/Add',$attributes); 
 ?>
    <div class="form-group">
        <label for="title" class="control-label col-md-3">Article Title</label>
        <div class="col-md-7">
            <input type="text" required autofocus autocomplete="off" class="form-control col-md-6" name="title">
        </div>
    </div>
   
    <div class="form-group">
        <label for="story" class="control-label col-md-3">Story</label>

        <div class="col-md-7">
            <textarea name="story"  class="summernote form-control"></textarea>
        </div>
    </div>
    <div class="form-group">
        <label for="listorder" class="control-label col-md-3">List order</label>
        <div class="col-md-7">
            <input type="number" required autofocus autocomplete="off" class="form-control col-md-6" min="0" max='10' name="listorder">
        </div>
    </div>
    <div class="form-group">
        <label for="keywords" class="control-label col-md-3">Keywords</label>
        <div class="col-md-7">
            <input type="text" required autofocus autocomplete="off" class="form-control col-md-6" placeholder="keywords separated by semicolon eg Nike;sport clothing;mordern wear;new technology;" name="keywords">
        </div>
    </div>
    <div class="form-group">
        <label for="category" class="control-label col-md-3">Article Category</label>
        <div class="col-md-7">
            <select name="category" id="" class="form-control">
                <option value="">Please select</option>
            
             <?php
             
               foreach($elements["categorylist"] as $cat)
                   {
                      echo'<option value="'.$cat->id.'">'.$cat->categoryname.'</option>';
                   }
             ?>   
            </select>    
        </div>
    </div>
     <div class="form-group">
        <label for="photo" class="control-label col-md-3">Photo</label>
        <div class="col-md-7" style="padding: 0 !important;">
             <div class="col-md-5 col-sm-12" >
                <input type="file" required autofocus autocomplete="off" name="image" >
            </div>
            <div class="col-md-7 col-sm-12" >
                <label for="caption" class="control-label col-md-3">Caption</label>
                <div class="col-md-9" style="padding: 0 !important;">
                    <input type="text" required autofocus autocomplete="off" class="form-control" name="caption">
                </div>
            </div>
        </div>
    </div>
    <!--div class="form-group">
        <div class="checkbox col-md-offset-3 col-md-7">
            <label>
              <input type="checkbox"> Featured Article
            </label>
        </div>
    </div-->    
    <div class="form-group">
        <div class="col-md-10">
            <div class="pull-left test text-danger">
               <small><?=$msg; ?></small>
            </div>
            <div class="pull-right">
                <button name="save" value="1" class="btn btn-primary">SAVE</button>
                <button name="publish" value="1" class="btn btn-primary">PUBLISH</button>
            </div>
        </div>
    </div>
</form>
