<?php

// Must include in every page
require('./globals.php');
include('./components/head.php');
include('./components/sidebar.php');
include('./components/navbar.php');
// Must include in every page

// Custom Page content
?>

<div class="row profile-mobile">
    <div class="d-sm-flex align-items-center justify-content-between mb-4 flex-sm-column flex-lg-row flex-md-column w-100">
        <h1 class="h3 custom-secondary mb-0">Customer Information</h1>
        <?php include('./components/tabs-add.php'); ?>
    </div>
</div>
<!-- Add include here -->

<?
// Custom Page content

// Must include in every page
include('./components/footer.php');
include('./components/scroll-to-top.php');
include('./components/modal.php');
require('./components/libraries.php');
// Must include in every page

?>