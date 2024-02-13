<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <span class="brand-text font-weight-light">Inventory System</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="info">
                <a href="#" class="d-block">Welcome <?php echo htmlspecialchars($_SESSION["Username"]); ?></a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Common Dashboard Menu for All Users -->
                <li class="nav-item">
                    <a href="dashboard.php" class="nav-link active">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Dashboard</p>
                    </a>
                </li>

                <?php if (isset($_SESSION['RoleName']) && $_SESSION['RoleName'] == 'Admin'): ?>
                    <!-- Menus exclusive to Admin -->
                                   <!-- Inventory Items Menu -->
                    <li class="nav-item">
                        <a href="inventory_items.php" class="nav-link">
                            <i class="nav-icon fas fa-boxes"></i>
                            <p>Inventory Items</p>
                        </a>
                    </li>
                    <!-- Transaction Records Menu -->
                    <li class="nav-item">
                        <a href="transactions.php" class="nav-link">
                            <i class="nav-icon fas fa-exchange-alt"></i>
                            <p>Transactions</p>
                        </a>
                    </li>
                    <!-- User Details Menu -->
                    <li class="nav-item">
                        <a href="user_details.php" class="nav-link">
                            <i class="nav-icon fas fa-user-cog"></i>
                            <p>User Details</p>
                        </a>
                    </li>
                    <!-- Supplier/Vendor Information Menu -->
                    <li class="nav-item">
                        <a href="suppliers.php" class="nav-link">
                            <i class="nav-icon fas fa-truck"></i>
                            <p>Suppliers</p>
                        </a>
                    </li>
                    <!-- Departments/Sections Details Menu -->
                    <li class="nav-item">
                        <a href="departments.php" class="nav-link">
                            <i class="nav-icon fas fa-building"></i>
                            <p>Departments</p>
                        </a>
                    </li>
                    <!-- User Roles and Permissions Menu -->
                    <li class="nav-item">
                        <a href="roles_permissions.php" class="nav-link">
                            <i class="nav-icon fas fa-users-cog"></i>
                            <p>Roles & Permissions</p>
                        </a>
                    </li>

                <?php endif; ?>

                <?php if (isset($_SESSION['RoleName']) && $_SESSION['RoleName'] == 'Inventory Manager'): ?>
                    <!-- Menus exclusive to Inventory Manager -->
                    <li class="nav-item">
                        <a href="inventory_items.php" class="nav-link">
                            <i class="nav-icon fas fa-boxes"></i>
                            <p>Inventory Items</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="transactions.php" class="nav-link">
                            <i class="nav-icon fas fa-exchange-alt"></i>
                            <p>Transactions</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="suppliers.php" class="nav-link">
                            <i class="nav-icon fas fa-truck"></i>
                            <p>Suppliers</p>
                        </a>
                    </li>
                    <!-- Other Inventory Manager Menus -->
                <?php endif; ?>

                <!-- Common Logout Menu for All Users -->
                <li class="nav-item">
                    <a href="/inventoryv1/public/index.php?action=logout" class="nav-link">
                        <i class="nav-icon fas fa-sign-out-alt"></i>
                        <p>Logout</p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
