<?php
require("../connect.php")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin-Login</title>
    <link rel="shortcut icon" href="../images/favicon.ico" type="">
    <!--- bootsrap CSS link--->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!----- font awesome link--->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
    
    <div class="container-fluid m-3">
        <h2 class="text-center">Admin Login</h2>
        <div class="row d-flex align-items-center justify-content-center mt-5">
            <div class="col-lg-12 col-xl-6">
            <form action="" method="post">
                <!--username field-->
                <div class="form-outline mb-4">
                    <label for="name" class="form-label">Admin User Name</label>
                    <input type="text" id="name" class="form-control" placeholder="enter your username" autocomplete="off" required="required" name="AdminName"/>
                </div>
                <!--password field-->
                <div class="form-outline mb-4">
                    <label for="pass" class="form-label">User password</label>
                    <input type="password" id="pass" class="form-control" placeholder="enter your password" autocomplete="off" required="required" name="AdminPassword"/>
                </div>
                
                <div class="mt-4 pt-2">
                    <input type="submit" value="Login" class="bg-info border-0 py-2 px-3" name="Signin">
                </div>

            </form>    
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="https://cdn.datatables.net/1.10.9/js/jquery.dataTables.min.js"></script>

<?php
    if(isset($_POST['Signin']))
    {
        $query="SELECT * FROM `admin_login` WHERE `Admin_Name`='$_POST[AdminName]' AND `Admin_Password`='$_POST[AdminPassword]' ";
        $result=mysqli_query($con,$query);
        if(mysqli_num_rows($result)==1){
            session_start();
            $_SESSION['AdminLoginId']=$_POST['AdminName'];
            echo "<script>window.open('panel.php','_self')</script>";
        }
        else{
            echo "<script>alert('Invalid Credentials')</script>";
        }
        
    }

?>


</body>
</html>