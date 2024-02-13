<?php
require_once "../../functions/user.php";

if (isset($_GET['logout'])) {
    logoutUser();
}

checkUserLoggedIn();
preventCache();
?>

<?php include_once '../../templates/header.php'; ?>

<!-- Site wrapper -->
<div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
        </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <?php include_once '../../templates/sidedbar.php'; ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Admin Dashboard</h1>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
       <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat boxes) -->
            <div class="row">
                <div class="col-lg-3 col-6">
                    <!-- small box for User Management -->
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3>User Management</h3>
                            <p>Manage Users, Roles, and Permissions</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-users"></i>
                        </div>
                        <a href="user_management.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box for Inventory Management -->
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3>Inventory</h3>
                            <p>Overview and Reports</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-warehouse"></i>
                        </div>
                        <a href="inventory_management.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box for Procurement -->
                    <div class="small-box bg-warning">
                        <div class="inner">
                            <h3>Procurement</h3>
                            <p>Supplier and Orders Management</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-truck-loading"></i>
                        </div>
                        <a href="procurement_management.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box for System Settings -->
                    <div class="small-box bg-danger">
                        <div class="inner">
                            <h3>Settings</h3>
                            <p>Configure System Parameters</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-cogs"></i>
                        </div>
                        <a href="system_settings.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
            </div>
            <!-- /.row -->

            <!-- Main row -->
            <div class="row">
                <!-- Left col -->
                <section class="col-lg-7 connectedSortable">
                    <!-- Custom tabs (Charts with tabs) -->
                    <!-- Replace with your content -->
                </section>
                <!-- right col -->
                <section class="col-lg-5 connectedSortable">
                    <!-- Replace with your content -->
                </section>
                <!-- right col -->
            </div>
            <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <footer class="main-footer">
        <div class="float-right d-none d-sm-block">
            <b>Version</b> 3.0.5
        </div>
        <strong>Copyright &copy; 2024 <a href="#">DMMSU Thesis</a>.</strong> All rights reserved.
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<?php include_once '../../templates/footer.php'; ?>
