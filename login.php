<?php
require('./components/connection.php');
require('./components/functions.php');
require('./globals.php');

$msg = '';
if (isset($_POST['submit'])) {
   $username = get_safe_value($con, $_POST['username']);
   $password = md5(get_safe_value($con, $_POST['password']));
   $sql = "select * from admin_users where username='$username' and password='$password'";
   $res = mysqli_query($con, $sql);
   $count = mysqli_num_rows($res);
   if ($count > 0) {
      $row = mysqli_fetch_assoc($res);
      if ($row['status'] == '0') {
         $msg = "Account deactivated";
      } else {
         $_SESSION['ADMIN_LOGIN'] = 'yes';
         $_SESSION['ADMIN_ID'] = $row['id'];
         $_SESSION['ADMIN_USERNAME'] = $username;
         $_SESSION['ADMIN_ROLE'] = $row['role'];
         header('location:index.php');
         die();
      }
   } else {
      $msg = "PLEASE ENTER CORRECT LOGIN DETAILS";
   }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>

   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <meta name="description" content="">
   <meta name="author" content="">

   <title>SB Admin 2 - Login</title>

   <!-- Custom fonts for this template-->
   <link href="<?php echo $base_url; ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
   <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

   <!-- Custom styles for this template-->
   <link href="<?php echo $base_url; ?>css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

   <div class="container">

      <!-- Outer Row -->
      <div class="row justify-content-center">

         <div class="col-xl-10 col-lg-12 col-md-9">

            <div class="card o-hidden border-0 shadow-lg my-5">
               <div class="card-body p-0">
                  <!-- Nested Row within Card Body -->
                  <div class="row">
                     <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                     <div class="col-lg-6">
                        <div class="p-5">
                           <div class="text-center">
                              <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                           </div>
                           <form method="post">
                              <div class="form-group">
                                 <label><b>USERNAME</b></label>
                                 <input type="text" name="username" class="form-control" placeholder="        " required>
                              </div>
                              <div class="form-group">
                                 <label><b>PASSWORD</b></label>
                                 <input type="password" name="password" class="form-control" placeholder="          " required>
                              </div>
                              <button type="submit" name="submit" class="btn btn-success btn-flat m-b-30 m-t-30">SIGN IN</button>
                           </form>
                           <div class="field_error"><?php echo $msg ?></div>
                           <hr>
                           <div class="text-center">
                              <a class="small" href="forgot-password.html">Forgot Password?</a>
                           </div>
                           <div class="text-center">
                              <a class="small" href="register.html">Create an Account!</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>

         </div>

      </div>

   </div>

   <!-- Bootstrap core JavaScript-->
   <script src="<?php echo $base_url; ?>vendor/jquery/jquery.min.js"></script>
   <script src="<?php echo $base_url; ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

   <!-- Core plugin JavaScript-->
   <script src="<?php echo $base_url; ?>vendor/jquery-easing/jquery.easing.min.js"></script>

   <!-- Custom scripts for all pages-->
   <script src="<?php echo $base_url; ?>js/sb-admin-2.min.js"></script>

</body>

</html>