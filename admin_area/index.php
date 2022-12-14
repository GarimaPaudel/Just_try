<?php
session_start();
include("Footer/db.php");
if(!isset( $_SESSION['admin_email'])){
  echo"<script>window.open('login.php','_self')</script>";
}
else{

?>
<?php
$admin_session = $_SESSION['admin_email'];
$get_admin = "select * from admins where admin_email='$admin_session'";
$run_admin = mysqli_query($con,$get_admin);
$row_admin = mysqli_fetch_array($run_admin);
$admin_id = $row_admin['admin_id'];
$admin_name = $row_admin['admin_name'];
$admin_email = $row_admin['admin_email'];
$admin_image = $row_admin['admin_image'];
$admin_country = $row_admin['admin_country'];
$admin_job = $row_admin['admin_job'];
$admin_contact = $row_admin['admin_contact'];
$admin_about = $row_admin['admin_about'];

$get_pro="select * from products";
$run_pro = mysqli_query($con, $get_pro);
$count_pro = mysqli_num_rows($run_pro);

$get_cust = "select * from customers";
$run_cust = mysqli_query($con, $get_cust);
$count_cust = mysqli_num_rows($run_cust);


$get_p_cat = "select * from product_categories";
$run_p_cat = mysqli_query($con, $get_p_cat);
$count_p_cat = mysqli_num_rows($run_p_cat);

$get_order = "select * from customer_order";
$run_order = mysqli_query($con, $get_order);
$count_order = mysqli_num_rows($run_order);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>


    <div id="wrapper">
        <?php include 'includes/sidebar.php';  ?>
        <div id="page-wrapper">
            <div class="container-fluid">
                <?php
      if(isset($_GET['dashboard'])){
        include 'dashboard.php';
      }
      
      if(isset($_GET['insert_product'])){
        include 'insert_product.php';
      }

      if(isset($_GET['view_product'])){
        include 'view_product.php';
      }
      if(isset($_GET['delete_product'])){
        include 'delete_product.php';
      }
      if(isset($_GET['edit_product'])){
        include 'edit_product.php';
      }
      
   
      if(isset($_GET['view_p_cat'])){
        include 'view_p_cat.php';
      }
      if(isset($_GET['delete_p_cat'])){
        include 'delete_p_cat.php';
      }
      if(isset($_GET['edit_p_cat'])){
        include 'edit_p_cat.php';
      }
      if(isset($_GET['view_customer'])){
        include 'view_customer.php';
      }
      if(isset($_GET['customer_delete'])){
        include 'customer_delete.php';
      }

      if(isset($_GET['insert_p_cat'])){
        include 'insert_p_cat.php';
      }

      


if(isset($_GET['insert_category'])){
        include 'insert_cat.php';
      }

      if(isset($_GET['view_category'])){
        include 'view_cat.php';
      }

      if(isset($_GET['delete_cat'])){
        include 'delete_cat.php';
      }

      if(isset($_GET['edit_cat'])){
        include 'edit_cat.php';
      }

      if(isset($_GET['view_order'])){
        include 'view_order.php';
      }
      if(isset($_GET['order_delete'])){
        include 'order_delete.php';
      }

      if(isset($_GET['insert_slider'])){
        include 'insert_slider.php';
      }
      if(isset($_GET['view_slider'])){
        include 'view_slider.php';
      }
      if(isset($_GET['delete_slide'])){
        include 'delete_slider.php';
      }
      if(isset($_GET['edit_slide'])){
        include 'edit_slider.php';
      }

      if(isset($_GET['view_user'])){
          include 'view_user.php';
        }

        
        if(isset($_GET['user_delete'])){
          include 'user_delete.php';
        }
        
        if(isset($_GET['user_profile'])){
          include 'user_profile.php';
        }
      if(isset($_GET['insert_user'])){
        include 'insert_user.php';
      }
      if(isset($_GET['insert_farmer'])){
        include 'insert_farmer.php';
      }
      if(isset($_GET['view_farmer'])){
        include 'view_farmer.php';
      }
      if(isset($_GET['farmer_delete'])){
        include 'farmer_delete.php';
      }

      ?>
            </div>
        </div>
    </div>



    <script src="https://kit.fontawesome.com/828e3616f1.js" crossorigin="anonymous"></script>

    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</body>

</html>
<?php } ?>