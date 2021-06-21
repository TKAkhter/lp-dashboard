<?php

require('./globals.php');

?>

<!-- Page Wrapper -->
<div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion toggled" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <button id="sidebarToggleTop" class="btn sidebar-toggle d-mobile-none">
            <i class="fa fa-bars"></i>
        </button>
        <a class="d-sm-none d-md-none d-lg-none sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo $base_url; ?>/user">
            <div class="">
                <img src="<?php echo $base_url; ?>img/Loreal Pakistan Logo.png" class="mx-auto img-fluid" alt="L'Oréal pakistan">
            </div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item active">
            <a class="nav-link" href="<?php echo $base_url; ?>/user">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            Finance
        </div>

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseInvoices" aria-expanded="true" aria-controls="collapseInvoices">
                <i class="fas fa-file-invoice"></i>
                <span>Invoices</span>
            </a>
            <div id="collapseInvoices" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Options:</h6>
                    <a class="collapse-item" href="<?php echo $base_url; ?>user/invoice.php">Invoices</a>
                    <a class="collapse-item" href="<?php echo $base_url; ?>user/invoice-add.php">Add New</a>
                </div>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseEstimates" aria-expanded="true" aria-controls="collapseEstimates">
                <i class="fas fa-calculator"></i>
                <span>Estimates</span>
            </a>
            <div id="collapseEstimates" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Options:</h6>
                    <a class="collapse-item" href="<?php echo $base_url; ?>user/estimates.php">Estimates</a>
                    <a class="collapse-item" href="<?php echo $base_url; ?>user/estimates-add.php">Add New</a>
                </div>
            </div>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            Customer
        </div>

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseCustomer" aria-expanded="true" aria-controls="collapseCustomer">
                <i class="fas fa-users"></i>
                <span>Customer</span>
            </a>
            <div id="collapseCustomer" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Options:</h6>
                    <a class="collapse-item" href="<?php echo $base_url; ?>user/customer.php">Customer</a>
                    <a class="collapse-item" href="<?php echo $base_url; ?>user/customer-add.php">Add New</a>
                </div>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="<?php echo $base_url; ?>user/profile.php">
                <i class="far fa-user-circle"></i>
                <span>Profile</span>
            </a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            Notification
        </div>

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseNotification" aria-expanded="true" aria-controls="collapseNotification">
                <i class="far fa-user-circle"></i>
                <span>Notification</span>
            </a>
            <div id="collapseNotification" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Options:</h6>
                    <a class="collapse-item" href="<?php echo $base_url; ?>user/alerts.php">Alerts</a>
                    <a class="collapse-item" href="<?php echo $base_url; ?>user/messages.php">Messages</a>
                </div>
            </div>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            Admin
        </div>

        <li class="nav-item">
            <a class="nav-link collapsed" href="<?php echo $base_url; ?>user/settings.php">
                <i class="fas fa-cog"></i>
                <span>Settings</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="<?php echo $base_url; ?>user/activity.php">
                <i class="fas fa-clipboard-list"></i>
                <span>Activity Log</span>
            </a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>
    </ul>
    <!-- End of Sidebar -->