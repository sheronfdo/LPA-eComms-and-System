<?php
if (!isset($_SESSION)) {
    session_start();
}
    //exit();

 ?>
        <!-- Main Sidebar Container -->
         <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="index.php" class="brand-link">
                <img src="images/LPA.png" alt="LPA Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">LPA eComms</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="" class="img-circle elevation-2" alt="">
                    </div>
                    <div class="info">
                    <a href="index.php" class="d-block"><?php echo "<p class='d-block'>" . $_SESSION['sess_admin_username'] . "</p>";  ?></a>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

                        <li class="nav-item">
                            <a href="index.php" class="nav-link">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Dashboard
                                </p>
                            </a>
                        </li>


                        <li class="nav-item">
                            <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-th"></i>
                                <p>
                                Stock Management
                                </p>
                                <i class="right fas fa-angle-left"></i>
                            </a>
                            <ul class="nav nav-treeview">
                            <li class="nav-item">
                                    <a href="view_stock.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>View Stock</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="add_new_stock.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Add New Stock</p>
                                    </a>
                                </li>
                               
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a href="sales_and_invoicing.php" class="nav-link">
                                <i class="nav-icon fas fa-book"></i>
                                <p>
                                    Sales and Invoicing
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="nav-icon fa fa-users" aria-hidden="true"></i>
                                        <p>
                                            Administrator Manage
                                        <i class="right fas fa-angle-left"></i>
                                        </p>
                                    </a>
                                    <ul class="nav nav-treeview" style="display: none;">
                                        <li class="nav-item">
                                            <a href="add_admin.php" class="nav-link">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>Add Administrator</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="manage_admin.php" class="nav-link">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>Manage Administrator</p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                        <li class="nav-item">
                            <a href="logout.php" class="nav-link">
                                <i class="nav-icon fas fa-sign-out-alt"></i>
                                <p>
                                    Logout
                                </p>
                            </a>
                        </li>



                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>