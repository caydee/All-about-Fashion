<div class="col-md-10 col-md-offset-1">

            <table class="table table-striped table-condensed">
                <tbody>
                <?php
                foreach($elements["value"] as $value) {
                    echo ' <tr class="admin-list container">
                    <td>
                        <img class="img-bordered" height="100" width="100" src="'.site_url("uploads/").$value->thumburl.'"/>
                    </td>
                    <td>
                        <div class="title"><h3>'.$value->title.'</h3></div>
                        <div class="info">BY: '.@$value->author.' · Created: '.@$value->publishdate.' · Last Updated: '.@$value->updateddate.' </div>
                        <div class="bottom-list">
                            <span class="pull-left">
                                <a href="'.site_url("cms/Article/preview/".$value->id).'" class="btn btn-sm bg-aqua"><b class="fa fa-search"></b> Preview</a>
                                <a href="https://www.standardmedia.co.ke/ureport/cms/moderatorupdate/2000129851" class="btn btn-sm bg-navy"><b class="fa fa-edit"></b> MODERATE</a>
                            </span>
                            <span class="pull-right">
                                <b class="text text-danger">'.@$value->categoryname.'</b>
                            </span>

                        </div>
                    </td>
                </tr>';
                }
                   ?>
                </tbody>
          </table>
        </div>

<div class="clearfix"></div>