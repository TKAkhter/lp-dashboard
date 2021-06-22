<?php

// Must include in every page
require('./components/is-logged.php');
isAdmin();
// require('footer.inc.php');

$username = $password = $email = $mobile = $msg = '';

if (isset($_GET['id']) && $_GET['id'] != '') {
    $image_required = '';
    $id = get_safe_value($con, $_GET['id']);
    $res = mysqli_query($con, "select * from admin_users where id='$id'");
    $check = mysqli_num_rows($res);
    if ($check > 0) {
        $row = mysqli_fetch_assoc($res);
        $username = $row['username'];
        $email = $row['email'];
        $mobile = $row['mobile'];
        $password = $row['password'];
    } else {
        header('location:invoice.php');
        die();
    }
}

if (isset($_POST['submit'])) {
    $username = get_safe_value($con, $_POST['username']);
    $email = get_safe_value($con, $_POST['email']);
    $mobile = get_safe_value($con, $_POST['mobile']);
    $password = get_safe_value($con, $_POST['password']);

    $res = mysqli_query($con, "select * from admin_users where username='$username'");
    $check = mysqli_num_rows($res);
    if ($check > 0) {
        if (isset($_GET['id']) && $_GET['id'] != '') {
            $getData = mysqli_fetch_assoc($res);
            if ($id == $getData['id']) {
            } else {
                $msg = "Username already exist";
            }
        } else {
            $msg = "Username already exist";
        }
    }


    if ($msg == '') {
        if (isset($_GET['id']) && $_GET['id'] != '') {
            $update_sql = "update admin_users set username='$username',password='$password',email='$email',mobile='$mobile' where id='$id'";
            mysqli_query($con, $update_sql);
        } else {
            mysqli_query($con, "insert into admin_users(username,password,email,mobile,role,status) values('$username','$password','$email','$mobile',1,1)");
        }
        header('location:invoice.php');
        die();
    }
}

require('./globals.php');
include('./components/head.php');
include('./components/sidebar.php');
include('./components/navbar.php');

?>

<div class="content pb-0">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header"><strong>VENDOR MANAGEMENT FORM</strong><small> </small></div>
                    <form method="post" enctype="multipart/form-data">
                        <div class="card-body card-block">


                            <div class="form-group">
                                <label for="username" class=" form-control-label">Username</label>
                                <input type="text" name="username" placeholder="Enter username" class="form-control" required value="<?php echo $username ?>">
                            </div>
                            <div class="form-group">
                                <label for="password" class=" form-control-label">Password</label>
                                <input type="text" name="password" placeholder="Enter password" class="form-control" required value="<?php echo $password ?>">
                            </div>

                            <div class="form-group">
                                <label for="password" class=" form-control-label">Email</label>
                                <input type="email" name="email" placeholder="Enter email" class="form-control" required value="<?php echo $email ?>">
                            </div>
                            <div class="form-group">
                                <label for="categories" class=" form-control-label">Mobile</label>
                                <input type="text" name="mobile" placeholder="Enter mobile" class="form-control" required value="<?php echo $mobile ?>">
                            </div>


                            <button id="payment-button" name="submit" type="submit" class="btn btn-lg btn-info btn-block">
                                <span id="payment-button-amount">SUBMIT</span>
                            </button>
                            <div class="field_error"><?php echo $msg ?></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Custom Page content -->

<div class="row profile-mobile">
    <div class="d-sm-flex align-items-center justify-content-between mb-4 flex-sm-column flex-lg-row flex-md-column w-100">
        <h1 class="h3 custom-secondary mb-0">Profile Information</h1>
        <?php include('./components/tabs-add.php'); ?>
    </div>
    <div class="col-lg-9 col-md-9 col-sm-9 mb-4">
        <form class="needs-validation" novalidate>
            <div class="form-row">
                <div class="col-md-6 mb-3">
                    <label for="validationCustom01">First name</label>
                    <input type="text" class="form-control" id="validationCustom01" value="John" required>
                    <div class="valid-feedback">
                        OK!
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="validationCustom02">Last name</label>
                    <input type="text" class="form-control" id="validationCustom02" value="Doe" required>
                    <div class="valid-feedback">
                        OK!
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-6 mb-3">
                    <label for="validationCustom03">City</label>
                    <input type="text" class="form-control" id="validationCustom03" required>
                    <div class="invalid-feedback">
                        Please provide a valid city.
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="exampleFormControlSelect2">Roles</label>
                    <select multiple class="form-control" id="exampleFormControlSelect2" rows="5">
                        <option>Super Admin</option>
                        <option>Administrator</option>
                        <option>Editor</option>
                        <option>Author</option>
                        <option>Publisher</option>
                        <option>Reporter</option>
                        <option>Spectator</option>
                    </select>
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-6 mb-3">
                    <label for="validationCustom05">Phone Number</label>
                    <input type="text" class="form-control" id="validationCustom05" required>
                    <div class="invalid-feedback">
                        Please provide a valid Phone Number.
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="validationCustom04">Department</label>
                    <select class="custom-select" id="validationCustom04" required>
                        <option selected disabled value="">Choose...</option>
                        <option>Marketing</option>
                        <option>Product</option>
                        <option>IT</option>
                        <option>Sales</option>
                        <option>Finance</option>
                        <option>Operation</option>
                    </select>
                    <div class="invalid-feedback">
                        Please select a valid Department.
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-6 mb-3">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="johndoe@test.com">
                </div>
            </div>
            <div class="form-row">

            </div>
            <button class="btn btn-primary mb-3" type="submit">Publish Changes</button>
        </form>
    </div>
    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function() {
            'use strict';
            window.addEventListener('load', function() {
                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                var forms = document.getElementsByClassName('needs-validation');
                // Loop over them and prevent submission
                var validation = Array.prototype.filter.call(forms, function(form) {
                    form.addEventListener('submit', function(event) {
                        if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                    }, false);
                });
            }, false);
        })();
    </script>
</div>

<?php
// Custom Page content

// Must include in every page
include('./components/footer.php');
include('./components/scroll-to-top.php');
include('./components/modal.php');
require('./components/libraries.php');
// Must include in every page

?>