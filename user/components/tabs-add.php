<?php

require('./globals.php');

?>

<div class="d-flex align-items-center justify-content-between add-options-mobile">
    <a href="<?php echo $base_url; ?>user/invoice-add.php" class="text-decoration-none mr-4 flex-nowrap">
        <span>Add New Invoice</span>
        <div class="d-inline-block custom-bg-primary btn ml-2">
            <i class="fas fa-plus fa-sm text-white"></i>
        </div>
    </a>
    <a href="<?php echo $base_url; ?>user/estimates-add.php" class="text-decoration-none mr-4 flex-nowrap">
        <span>Add New Estimate</span>
        <div class="d-inline-block custom-bg-primary btn ml-2">
            <i class="fas fa-plus fa-sm text-white"></i>
        </div>
    </a>
    <a href="<?php echo $base_url; ?>user/customer-add.php" class="text-decoration-none mr-4 flex-nowrap">
        <span>Add New Customer</span>
        <div class="d-inline-block custom-bg-primary btn ml-2">
            <i class="fas fa-plus fa-sm text-white"></i>
        </div>
    </a>
</div>