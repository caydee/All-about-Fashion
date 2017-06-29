<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?=site_url().$_SESSION["userimg"]; ?>" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p><?=$_SESSION["Name"]; ?></p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
        
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li class="active">
                <a href="<?=site_url("cms"); ?>">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                </a>
            </li>
            <li class="treeview">
                <a href="">
                    <i class="fa fa-y-combinator-square"></i> <span>Categories</span> <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?=site_url("cms/Category/Add"); ?>"><i class="fa fa-plus"></i>Add Category</a></li>
                    <li><a href="<?=site_url("cms/Category/View"); ?>"><i class="fa fa-binoculars"></i>View Categories</a></li>                   
                </ul>
            </li>
             <li class="treeview">
                <a href="">
                    <i class="fa fa-newspaper-o"></i> <span>Articles</span> <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?=site_url("cms/Article/Add"); ?>"><i class="fa fa-plus"></i>Add Article</a></li>
                    <li><a href="<?=site_url("cms/Article/View"); ?>"><i class="fa fa-binoculars"></i>View Articles</a></li>                   
                </ul>
            </li>
            <li class="treeview">
                <a href="">
                    <i class="fa fa-gears"></i> <span>Page SetUp</span> <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?=site_url("cms/Home"); ?>"><i class="fa fa-home"></i>HomePage</a></li>
                    <li><a href="<?=site_url("cms/Portfolio"); ?>"><i class="fa fa-binoculars"></i>PortFolio</a></li>
                    <li><a href="<?=site_url("cms/AboutUs"); ?>"><i class="fa fa-info"></i>About Us</a></li>
                   
                </ul>
            </li>
            <li class="treeview">
                <a href="">
                    <i class="fa fa-users"></i> <span>User Management</span> <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?=site_url("cms/users/Add"); ?>"><i class="fa fa-user-plus"></i>Add User</a></li>
                    <li><a href="<?=site_url("cms/users/View"); ?>"><i class="fa fa-wpexplorer"></i>View Users</a></li>

                </ul>
            </li>

        </ul>
    </section>
    <!-- /.sidebar -->
</aside>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Dashboard
            <small>Control panel</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
       <!-- Main row -->
        <div class="row">
            <div class="container">
                <?php $this->view("cms/modules/".$elements["view"],$elements); ?>
            </div>
        </div><!-- /.row (main row) -->
    </section><!-- /.content -->
</div><!-- /.content-wrapper -->