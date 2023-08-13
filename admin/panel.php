<?php
    session_start();
    if(!isset($_SESSION['AdminLoginId'])){
        header("location: index1.php");
    }
    require("../connect.php")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
     <!-- bootstrap css link-->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        div.head{
            font-family: poppins;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0px 60px;
            background-color: #204969;
        }
        div.head button{
            background-color: #f0f0f0;
            font-size:16px;
            font-weight:550;
            padding: 8px 12px;
            border: 2px solid black;
        }
        table {
  border-collapse: collapse;
  width: 100%;
  margin-bottom: 20px;
}

th, td {
  text-align: left;
  padding: 8px;
  border: 1px solid #ddd;
}

th {
  background-color: #f2f2f2;
}

tr:nth-child(even) {
  background-color: #f2f2f2;
}

tr:hover {
  background-color: #ddd;
}

td img {
  display: block;
  max-width: 100%;
  height: auto;
  margin: 0 auto;
}
.order_img{
  width: 90px;
  object-fit:contain;
}
.contain{
  margin:5px !important;
  width:100% !important;
}


    </style>
</head>
<body>
<div class="row">
            <div class="col-md-12 bg-secondary p-1 d-flex align-items-center">
                <div class="p-0">
                    <a href="#"><img src="../images/logo.png" alt="" class="admin_image"></a>
                    <p class="text-light text-center">Admin Name</p>
                </div>
                
            </div>
        </div>
    <div class="head">
    <h1>welcome To Admin Panel <?php echo $_SESSION['AdminLoginId'] ?></h1>
    
    </div>
        <div class="contain w-100 text-center">
        <form method="POST" class="mb-5">
            
            
            <button name="Logout">Log Out</button>
        </form>
        <div class="col-md-6 m-auto">
            <a href="addsrv.php"><button>Add Service Category</button></a><br><br>
            <a href="addcat.php"><button>Add Service Sub Category</button></a>
        </div>
        

      <!--  <table>
            <thead>
              <tr>
                  <th>Serial No.</th>
                <th>Client Name</th>
                <th>Contact No.</th>
                <th>Email</th>
                <th>Work Required</th>
                <th>Image</th>      
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              
              
            </tbody>
        </table>-->

                </div>
              <div class="container">
                <?php
                if(isset($_GET['delete_order'])){
                  include('delete_order.php');
                }
                ?>
               
              </div>
                
              
                <?php
                if(isset($_POST['Logout'])){
                    session_destroy();
                    header("location: index1.php");
                }
                
                ?>

</body>
</html>