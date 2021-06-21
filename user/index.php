<?php

// Must include in every page
require('./globals.php');

$file_name = basename($_SERVER["SCRIPT_FILENAME"], '.php');

include('./components/head.php');
include('./components/sidebar.php');
include('./components/navbar.php');
// Must include in every page

// Custom Page content
?>

<!-- Content Row -->

<div class="row">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4 flex-sm-column flex-lg-row flex-md-column w-100">
        <h1 class="h3 custom-secondary mb-0">Dashboard</h1>
        <?php include('./components/tabs-add.php'); ?>
    </div>
    <div class="col-lg-5 col-md-8 col-sm-12 main-columns">
        <div id="brand-overview" class="col box-round bg-white px-4 py-2 mb-3 pb-4">
            <div class="d-flex justify-content-between pb-2">
                <h6 class="extra-padding">Overview</h6>
                <span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots-vertical" viewBox="0 0 16 16">
                        <path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z" />
                    </svg></span>
            </div>
            <div class="d-flex justify-content-around">
                <div class="row gy-3">
                    <div class="col-lg-3 col-md-3 col-sm-6">
                        <div class="box-round custom-bg-light h-100">
                            <div class="inner-block p-2 d-flex mx-1">
                                <h4>100k</h4>
                                <p>No. Of contacts</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6">
                        <div class="box-round custom-bg-light h-100">
                            <div class="inner-block p-2 d-flex mx-1">
                                <h4>20</h4>
                                <p>No. Of cities</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6">
                        <div class="box-round custom-bg-light h-100">
                            <div class="inner-block p-2 d-flex mx-1">
                                <h4>50k</h4>
                                <p>No. Of products</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6">
                        <div class="box-round custom-bg-light h-100">
                            <div class="inner-block p-2 d-flex mx-1">
                                <h4>37</h4>
                                <p>No. Of campaign</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div id="brand-overview-contact" class="col-lg-6 col-md-6 col-sm-6">
                <div class="col box-round bg-white px-4 py-2 mb-3">
                    <div class="d-flex justify-content-between pb-2 py-2">
                        <h6 class="extra-padding">No. of Contact as per Cities</h6>
                        <span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots-vertical" viewBox="0 0 16 16">
                                <path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z">
                                </path>
                            </svg></span>
                    </div>
                    <div class="px-1">
                        <table class="table">
                            <thead>
                                <tr class="bg-color-scheme-2">
                                    <th scope="col">Cities</th>
                                    <th scope="col">Total Number</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Karachi</td>
                                    <td class="custom-color-primary fw-bold">25,000</td>
                                </tr>
                                <tr>
                                    <td>Karachi</td>
                                    <td class="custom-color-primary fw-bold">25,000</td>
                                </tr>
                                <tr>
                                    <td>Karachi</td>
                                    <td class="custom-color-primary fw-bold">25,000</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div id="brand-overview-campaign" class="col-lg-6 col-md-6 col-sm-6">
                <div class="col box-round bg-white px-4 py-2 mb-3">
                    <div class="d-flex justify-content-between pb-2 py-2">
                        <h6 class="extra-padding">No. of Campaign as per Cities</h6>
                        <span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots-vertical" viewBox="0 0 16 16">
                                <path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z">
                                </path>
                            </svg></span>
                    </div>
                    <div class="px-1">
                        <table class="table">
                            <thead>
                                <tr class="bg-color-scheme-2">
                                    <th scope="col">Cities</th>
                                    <th scope="col">Total Number</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Karachi</td>
                                    <td class="custom-color-primary fw-bold">25,000</td>
                                </tr>
                                <tr>
                                    <td>Karachi</td>
                                    <td class="custom-color-primary fw-bold">25,000</td>
                                </tr>
                                <tr>
                                    <td>Karachi</td>
                                    <td class="custom-color-primary fw-bold">25,000</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div id="brand-audience" class="col-lg-3 col-md-4 col-sm-12 main-columns">
        <div class="col box-round bg-white px-4 py-2 mb-3">
            <div class="d-flex justify-content-between pb-2">
                <h6 class="extra-padding">Audience</h6>
                <span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots-vertical" viewBox="0 0 16 16">
                        <path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z">
                        </path>
                    </svg></span>
            </div>
            <div class="row">
                <div class="col">
                    <canvas id="myChart"></canvas>
                </div>
            </div>
        </div>
        <div class="col box-round bg-white px-4 py-2 mb-3">
            <div class="d-flex justify-content-between pb-2">
                <h6 class="extra-padding">Successful Campaigns</h6>
                <span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots-vertical" viewBox="0 0 16 16">
                        <path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z">
                        </path>
                    </svg></span>
            </div>
            <div>
                <img src="<?php echo $base_url; ?>img/campaign.png" class="mx-auto img-fluid" alt="Graph">
            </div>
        </div>
    </div>
    <div id="brand-block" class="col-lg-4 col-md-12 col-sm-12 main-columns overflow-auto">
        <div class="col box-round bg-white px-4 py-2 mb-3">
            <div class="d-flex justify-content-between pb-2">
                <h6 class="extra-padding">Brands</h6>
                <span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots-vertical" viewBox="0 0 16 16">
                        <path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z">
                        </path>
                    </svg></span>
            </div>
            <div class="d-flex box-round custom-bg-light h-100 p-2 align-items-center mb-2">
                <div class="col-lg-3 col-md-3 col-sm-3">
                    <div class="">
                        <img src="<?php echo $base_url; ?>img/loreal-pakistan-logo-black.jpg" class="mx-auto img-fluid rounded" alt="L'Oréal pakistan">
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 ps-3 border-end">
                    <div id="border-right" class="">
                        <p>No. Of contact</p>
                        <h4>1,000</h4>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 ps-3">
                    <div class="">
                        <p>No. Of campaign</p>
                        <h4>5</h4>
                    </div>
                </div>
                <div class="col-lg-1 col-md-1 col-sm-1">
                    <span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots-vertical" viewBox="0 0 16 16">
                            <path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z" />
                        </svg></span>
                </div>
            </div>
            <div class="d-flex box-round custom-bg-light h-100 p-2 align-items-center mb-2">
                <div class="col-lg-3 col-md-3 col-sm-3">
                    <div class="">
                        <img src="<?php echo $base_url; ?>img/loreal-pakistan-logo-black.jpg" class="mx-auto img-fluid rounded" alt="L'Oréal pakistan">
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 ps-3 border-end">
                    <div class="">
                        <p>No. Of contact</p>
                        <h4>1,000</h4>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 ps-3">
                    <div class="">
                        <p>No. Of campaign</p>
                        <h4>5</h4>
                    </div>
                </div>
                <div class="col-lg-1 col-md-1 col-sm-1">
                    <span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots-vertical" viewBox="0 0 16 16">
                            <path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z" />
                        </svg></span>
                </div>
            </div>
            <div class="d-flex box-round custom-bg-light h-100 p-2 align-items-center mb-2">
                <div class="col-lg-3 col-md-3 col-sm-3">
                    <div class="">
                        <img src="<?php echo $base_url; ?>img/loreal-pakistan-logo-black.jpg" class="mx-auto img-fluid rounded" alt="L'Oréal pakistan">
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 ps-3 border-end">
                    <div class="">
                        <p>No. Of contact</p>
                        <h4>1,000</h4>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 ps-3">
                    <div class="">
                        <p>No. Of campaign</p>
                        <h4>5</h4>
                    </div>
                </div>
                <div class="col-lg-1 col-md-1 col-sm-1">
                    <span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots-vertical" viewBox="0 0 16 16">
                            <path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z" />
                        </svg></span>
                </div>
            </div>
            <div class="d-flex box-round custom-bg-light h-100 p-2 align-items-center mb-2">
                <div class="col-lg-3 col-md-3 col-sm-3">
                    <div class="">
                        <img src="<?php echo $base_url; ?>img/loreal-pakistan-logo-black.jpg" class="mx-auto img-fluid rounded" alt="L'Oréal pakistan">
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 ps-3 border-end">
                    <div class="">
                        <p>No. Of contact</p>
                        <h4>1,000</h4>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 ps-3">
                    <div class="">
                        <p>No. Of campaign</p>
                        <h4>5</h4>
                    </div>
                </div>
                <div class="col-lg-1 col-md-1 col-sm-1">
                    <span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots-vertical" viewBox="0 0 16 16">
                            <path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z" />
                        </svg></span>
                </div>
            </div>
            <div class="d-flex box-round custom-bg-light h-100 p-2 align-items-center mb-2">
                <div class="col-lg-3 col-md-3 col-sm-3">
                    <div class="">
                        <img src="<?php echo $base_url; ?>img/loreal-pakistan-logo-black.jpg" class="mx-auto img-fluid rounded" alt="L'Oréal pakistan">
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 ps-3 border-end">
                    <div class="">
                        <p>No. Of contact</p>
                        <h4>1,000</h4>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 ps-3">
                    <div class="">
                        <p>No. Of campaign</p>
                        <h4>5</h4>
                    </div>
                </div>
                <div class="col-lg-1 col-md-1 col-sm-1">
                    <span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots-vertical" viewBox="0 0 16 16">
                            <path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z" />
                        </svg></span>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Content Row -->

<?php
// Custom Page content

// Must include in every page
include('./components/footer.php');
include('./components/scroll-to-top.php');
include('./components/modal.php');
require('./components/libraries.php');
// Must include in every page

?>