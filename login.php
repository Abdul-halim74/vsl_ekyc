
<?php include 'database_connection.php';
    

?>
    

<?php

if (isset($_POST['email']) and isset($_POST['password'])) {
    $email=$_POST['email'];
    $password=md5($_POST['password']);
    //echo $password;die;
    $query = "SELECT * FROM `user` WHERE `email`='$email' and `password`='$password'";
 
    $result = mysqli_query($connect, $query) or die(mysqli_error($connect));
    $count = mysqli_num_rows($result);

    if ($count == 1){
        
        $_SESSION['userLogin'] = "Loggedin";
        header("Location:index.php");
    

    }else{

        echo "<script type='text/javascript'>alert('Sorry , email or password check')</script>";
    
    }

    
  
}

?>
<!DOCTYPE html>
<html>


<!-- Mirrored from webapplayers.com/inspinia_admin-v2.9.3/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 02 Sep 2020 06:09:02 GMT -->
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>INSPINIA | Login</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

</head>

<body class="gray-bg">

    <div class="middle-box text-center loginscreen animated fadeInDown">
        <div>
            <div>

                <h1 class="logo-name">IN+</h1>

            </div>
            <h3>Welcome to IN+</h3>
            <p>Perfectly designed and precisely prepared admin theme with over 50 pages with extra new web app views.
                <!--Continually expanded and constantly improved Inspinia Admin Them (IN+)-->
            </p>
            <p>Login in. To see it in action.</p>
            <form class="m-t" role="form" action="" method="post">
                <div class="form-group">
                    <input type="email" name="email" class="form-control" placeholder="Username" required="">
                </div>
                <div class="form-group">
                    <input type="password" name="password" class="form-control" placeholder="Password" required="">
                </div>
                <input type="submit" name="submit" class="btn btn-primary block full-width m-b">Login</button>

                <a href="#"><small>Forgot password?</small></a>
                <p class="text-muted text-center"><small>Do not have an account?</small></p>
                <a class="btn btn-sm btn-white btn-block" href="register.html">Create an account</a>
            </form>
            <p class="m-t"> <small>Inspinia we app framework base on Bootstrap 3 &copy; 2014</small> </p>
        </div>
    </div>

    <!-- Mainly scripts -->
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.js"></script>

</body>


<!-- Mirrored from webapplayers.com/inspinia_admin-v2.9.3/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 02 Sep 2020 06:09:02 GMT -->
</html>
