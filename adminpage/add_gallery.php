<?php

session_start();
if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    header("Location: index.php"); 
    exit;
}


 include "db_conn.php";
// include "default.php";

// ----------------------------------------INSERTING---------------------------------------
 if(isset($_POST['add'])){
 	$img_fol="images-admin/gallery/";
 	$img_url=$img_fol.basename($_FILES['image']['name']);
 	if(move_uploaded_file($_FILES['image']['tmp_name'], $img_url)){
 		// echo "uploaded";
 	}

 	$img_name=$_POST['img_name'];
 	$status=$_POST['status'];

 	$insert_image="insert into gallery set image='$img_url',img_name='$img_name',status='$status'";

 	$execute_insert=mysqli_query($connect,$insert_image);

 	if($execute_insert){
 		header("Location:list_gallery.php");
 		// echo "inserted";
 	}
 	else{
 		echo "not inserted";
 	}
}
 	// echo $insert_image;












 // ********************************UPDATING*********************************
 $uid=$_GET['uid'] ?? null;
 $updating_data="select * from gallery where id='$uid'";
 $u_data_x=mysqli_query($connect,$updating_data);

 if(mysqli_num_rows($u_data_x)>0){
 	$u_data=mysqli_fetch_assoc($u_data_x);

 	$u_id=$u_data['id'];
 	$u_image_url = $u_data['image'];
 	$u_image_name=$u_data['img_name'];
 	$u_status=$u_data['status'];

 	// echo $u_image_url;
 }

 if(isset($_POST['update'])){
 	// $updated_image_url=$_POST['image'];
 	$updated_image_name=$_POST['img_name'];
 	$updated_status=$_POST['status'];
 	$img_fol="images-admin/gallery/";
 	// $img_url=$img_fol.basename($_FILES['image']['name']);
 	// if(!move_uploaded_file($_FILES['image']['tmp_name'], $img_url)){
 	// 	echo "uploaded";
 	// }

 	if(!empty($_FILES['image']['name'])){
		$img_url=$img_fol.basename($_FILES['image']['name']);
		if(!move_uploaded_file($_FILES['image']['tmp_name'] ?? null,$img_url))
			{
				// echo $updated_img;
				echo "";
			}
	}
	// If no image uploaded- keep old
	else{
		$img_url=$u_image_url;
	}

 	$img_name=$_POST['img_name'];
 	$status=$_POST['status'];
 	// echo $updated_image_url;
 	// echo $updated_image_name;
 	// echo $updated_status;

 	$updating_in_db="update gallery set img_name='$updated_image_name',status='$updated_status',image='$img_url' where id='$uid'";
 	$update_executed=mysqli_query($connect,$updating_in_db);
 	if($update_executed){
 		header("Location:list_gallery.php");
 		// echo "Query updated";
 	}
 	else{
 		echo "Query not updated";
 	}
 }

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Add Gallery</title>
	<!-- <link rel="stylesheet" type="text/css" href="files-admin/css/style.css"> -->
    <!-- <link rel="stylesheet" type="text/css" href="files-admin/css/main.css"> -->
    <link rel="stylesheet" type="text/css" href="files-admin/css/new.css">
    <!-- <link rel="stylesheet" type="text/css" href="files-admin/css/style_new.css"> -->

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous" />

    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
    	.style_gal{
    		display: none;
    	}
    	.blue-heading {
		  color: #2b2285;          /* text color */
		  font-family: Arial, Helvetica, sans-serif;  /* change font */
		  font-weight: 600;
		}


    </style>
</head>
<body class="body-bg">

<?php
include "default.php";
?>

	<form method="POST" enctype="multipart/form-data" class="form-container inner-body">
		<h1 class="blue-heading">Add Gallery</h1>
		<label class="form-label">Upload Image</label>
		<input type="file" name="image" class="form-input" value="<?php if($uid==""){echo "";}else{echo $img_url;}?>" /><br><br>
		<img src="<?php if($uid==""){echo ""; }else{echo $u_image_url;}?>" style="height: 40px;width: 60px;" class="<?php if($uid==""){echo "style_gal";}else{echo "";}?>">

		<!-- PROBLEM AREA FOR UPLOAD IMAGE -->
		

		<label class="form-label">Image Name</label>
		<input type="text" name="img_name"  class="form-input" value="<?php if($uid==""){echo "";}
		else{echo $u_image_name;}?>" /><br><br>
		<!-- <textarea type="text" name="description" rows="5" cols="80" class="form-textarea"></textarea><br><br> -->

		<h5 class="form-heading">Status</h5>
		<label class="radio-label">
		  <input type="radio" name="status" value="1" class="form-radio" <?php if($uid != "" && $u_status == 1){ echo "checked"; } ?>/>
		  Active
		</label>

		<label class="radio-label">
		  <input type="radio" name="status" value="0" class="form-radio" <?php if($uid != "" && $u_status == 0){ echo "checked"; } ?>/>
		  Inactive
		</label><br><br>

		<!-- <input type="submit" name="add" value="Add" class="submit-btn"/>

		<input type="submit" name="update" value="Update" class="submit-btn"/> -->

		<input type="submit" <?php if($uid==""){echo 'name="add" value="Add"';}
		else{echo 'name="update" value="Update"';}?> class="submit-btn"/>
	</form>




	<!-- <script>
        window.addEventListener('scroll', function () {
  const header = document.getElementById('head-admin');
  const sticky = header.offsetTop;

  if (window.pageYOffset > sticky) {
        header.classList.add('sticky-admin');
  } else {
    header.classList.remove('sticky-admin');
  }
});
    </script> -->

    <!-- <script src="starkmotors/file-starkmotors/js/phone.js"></script> -->
</body>
</html>