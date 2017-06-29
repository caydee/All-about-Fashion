<div class="col-md-10 col-md-offset-1">
    <div class="box">
        <div class="box-body">
            <div class="table-responsive">
                <table class="table table-condensed text-center table-striped table-hover table-fixed">
                    <thead>
                         <tr>
                             <th>Photo</th>
                             <th>Name</th>
                             <th>Designation</th>
                             <th>Email Address</th>
                             <th>Tel No</th>
                             <th>Password Status</th>
                             <th>Access Status</th>
                             <th>ACTION</th>
                         </tr>
                    </thead>
                    <tbody>
                    <?php
                      foreach($elements["value"] as $value) {
                          $pass_stat=($value->pass_status==0)?"Change":"Okay";
                          $access=($value->user_status==0)?"Denied":"Accepted";
                          echo '<tr >
                            <td ><img src="'.site_url().$value->userimg.'" alt="'.$value->Name.'" class="img " width="80" height="80"></td >
                            <td >'.$value->Name.'</td >
                            <td >'.$value->Designation.'</td >
                            <td >'.$value->email.'</td >
                            <td >'.$value->telno.'</td >
                            <td >'.$pass_stat.'</td >
                            <td >'.$access.'</td >
                            <td >
                                <div class="btn-group" style="margin-bottom:5px;" >
                                    <a data-toggle="dropdown" href="#" class="btn btn-primary btn-sm btn-block dropdown-toggle" >
                                        <i class="icon-wrench"></i>Manage<span class="caret"></span>
                                    </a> 
                                    <ul class="dropdown-menu bg-primary">
                                        <li>
                                            <a class="btn  btn-sm btn-block " > Deactivate</a >
                                        </li>
                                        <li>
                                             <a class="btn  btn-sm btn-block " > Password</a >
                                        </li>
                                        <li>
                                            <a class="btn  btn-sm btn-block " > Roles</a >
                                        </li>
                                    </ul>
                                    
                                   
                                    
                                </div ></td >
                        </tr >';
                        }
                    ?>
                    </tbody>
                    <tfooter>
                        <tr>
                            <td colspan="8" class="text-right"><?=@$link; ?></td>
                        </tr>
                    </tfooter>
                </table>
            </div>
        </div>
    </div>
</div>