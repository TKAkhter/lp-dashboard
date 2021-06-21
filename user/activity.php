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
        <h1 class="h3 custom-secondary mb-0">Activity</h1>
        <?php include('./components/tabs-add.php'); ?>
    </div>
    <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
        For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.
    </p>
</div>

<?php
// Must include in every page
include('./components/footer.php');
include('./components/scroll-to-top.php');
include('./components/modal.php');
require('./components/libraries.php');
// Must include in every page

?>