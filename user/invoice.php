<?php

// Must include in every page
require('./globals.php');
include('./components/head.php');
include('./components/sidebar.php');
include('./components/navbar.php');
// Must include in every page

// Custom Page content
?>

<div class="row">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4 flex-sm-column flex-lg-row flex-md-column w-100">
        <h1 class="h3 custom-secondary mb-0">Invoices</h1>
        <?php include('./components/tabs-add.php'); ?>
    </div>
    <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
        For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Invoices</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Date</th>
                            <th>Customer</th>
                            <th>Status</th>
                            <th>Invoice No.</th>
                            <th>Amount</th>
                            <th>Pre-Payment</th>
                            <th>Reminders</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Date</th>
                            <th>Customer</th>
                            <th>Status</th>
                            <th>Invoice No.</th>
                            <th>Amount</th>
                            <th>Pre-Payment</th>
                            <th>Reminders</th>
                            <th></th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <tr>
                            <td>01 Aug 2020</td>
                            <td>John Doe</td>
                            <td>Draft</td>
                            <td>Invoice No.</td>
                            <td>Rs.2,500</td>
                            <td>Eligible</td>
                            <td>
                                <label class="switch">
                                    <input type="checkbox">
                                    <span class="slider round"></span>
                                </label>
                            </td>
                            <td>
                                <div class="row flex-nowrap">
                                    <div class="col-3">
                                        <i class="far fa-edit"></i>
                                    </div>
                                    <div class="col-3">
                                        <i class="far fa-eye"></i>
                                    </div>
                                    <div class="col-3">
                                        <i class="far fa-trash-alt"></i>
                                    </div>
                                    <div class="col-3 col-3 custom-primary">
                                        <i class="fas fa-ellipsis-v"></i>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?php
// Must include in every page
include('./components/footer.php');
include('./components/scroll-to-top.php');
include('./components/modal.php');
require('./components/libraries.php');
// Must include in every page

?>