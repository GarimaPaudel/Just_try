<?php 
if(!isset($_SESSION['admin_email'])){
  echo"<script>window.open('login.php','_self')</script>";
}
else{
    
?>
<?php
if(isset($_GET['edit_cat'])){
    $edit_id=$_GET['edit_cat'];
    $edit_cat="select * from categories where cat_id='$edit_id'";
    $run_edit=mysqli_query($con,$edit_cat);
    $row_edit=mysqli_fetch_array($run_edit);
    $c_id=$row_edit['cat_id'];
    $c_title=$row_edit['cat_title'];
    $c_desc=$row_edit['cat_desc'];
}
?>
 <br>
        <br><br><br><br>
    <div class="row">
        <div class= "col-lg-12">
            <ol class="breadcrumb">
                <li class="active">
                    <i class="fa fa-dasboard"></i> Dashboard / Edit category
                </li>
            <ol>
        </div>
    </div>
    
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <i class="fa fa-money fa-fw"></i>Edit Category
                    </h3>
                </div>

                <div class="panel-body">
                <form class="form-horizontal" action="" method="post">


            <div class="form-group">
                <label class="col-md-3 control-label">Category Title</label>
                <div class="col-md-6">
            <input type="text" name="cat_title" class="form-control" value="<?php echo $c_title; ?>">
        </div>
            </div>

<div class="form-group">
            <label class="col-md-3 control-label">Category Description</label>
            <div class="col-md-6">
            <textarea type="text" name="cat_desc" class="form-control" >
                <?php echo $c_desc; ?>
        </textarea>
        </div>
</div>
 
<div class="form-group">
            <label class="col-md-3 control-label"></label>
        <div class="col-md-6">
            <input type="submit" name="update" value="Update Category" class="btn btn-primary form-control" >
        </div>
        </div>

</form>
</div>
</div>
<div>
</div>


<?php
if(isset($_POST['update'])){
    $cat_title=$_POST['cat_title'];
    $cat_desc=$_POST['cat_desc'];
    $update_cat="UPDATE categories set cat_title='$cat_title',cat_desc='$cat_desc' where cat_id='$c_id'";
    $run_cat=mysqli_query($con,$update_cat);
    if($run_cat){
        echo"<script>alert('One Category has been updated')</script>";

        echo"<script>window.open('index.php?view_category','_self')</script>";
    }
}
?>
<?php } ?>




