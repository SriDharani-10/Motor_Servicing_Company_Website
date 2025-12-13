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
 	$img_fol="images-admin/products/";

 	$img_url=$img_fol.basename($_FILES['image']['name']);
 	if(!move_uploaded_file($_FILES['image']['tmp_name'], $img_url)){
 		echo "uploaded";
 	}

 	$sub_img_url=$img_fol.basename($_FILES['sub-image']['name']);
 	if(!move_uploaded_file($_FILES['sub-image']['tmp_name'], $sub_img_url)){
 		echo "";
 	}

 	$pro_name=$_POST['pro_name'];
 	$price=$_POST['price'];
 	$description=$_POST['description'];
 	$features=$_POST['features'];
 	$ri1=$img_fol.basename($_FILES['rel_img1']['name']);
 	if(!move_uploaded_file($_FILES['rel_img1']['tmp_name'],$ri1)){echo "";}
 	$ri2=$img_fol.basename($_FILES['rel_img2']['name']);
 	if(!move_uploaded_file($_FILES['rel_img2']['tmp_name'],$ri2)){echo "";}
 	$ri3=$img_fol.basename($_FILES['rel_img3']['name']);
 	if(!move_uploaded_file($_FILES['rel_img3']['tmp_name'],$ri3)){echo "";}
 	$ri4=$img_fol.basename($_FILES['rel_img4']['name']);
 	if(!move_uploaded_file($_FILES['rel_img4']['tmp_name'],$ri4)){echo "";}
 	
 	$status=$_POST['status'];

 	$insert_data="insert into products set image='$img_url', sub_img='$sub_img_url',pro_name='$pro_name',price='$price',description='$description',features='$features',rel_img1='$ri1',rel_img2='$ri2',rel_img3='$ri3',rel_img4='$ri4',status='$status'";

 	$execute_insert=mysqli_query($connect,$insert_data);

 	if($execute_insert){
 		header("Location:list_products.php");
 		// echo "inserted";
 	}
 	else{
 		// echo "not inserted";
 	}
}
 	
// -------------------------------UPDATING Products-----------------------------
 $uid=$_GET['uid'] ?? null;
// echo $uid;
 $updated_data="select * from products where id='$uid'";
 $x_up=mysqli_query($connect,$updated_data);

 if(mysqli_num_rows($x_up)>0){
 	$ud=mysqli_fetch_assoc($x_up);

 	$u_id=$ud['id'];
 	$u_img=$ud['image'];

 	// echo $u_img;
 	$u_sub_img=$ud['sub_img'];
 	$u_pro_name=$ud['pro_name'];
 	$u_price=$ud['price'];
 	$u_features=$ud['features'];
 	$u_description=$ud['description'];
 	$u_status=$ud['status'];
 	$u_ri1=$ud['rel_img1'];
 	$u_ri2=$ud['rel_img2'];
 	$u_ri3=$ud['rel_img3'];
 	$u_ri4=$ud['rel_img4'];

 }


if(isset($_POST['update'])){

	$img_fol="images-admin/products/";

	// ------------MAIN IMAGE------------
	// If New image uploaded - keep new
	if(!empty($_FILES['image']['name'])){
		$updated_img=$img_fol.basename($_FILES['image']['name']);
		if(!move_uploaded_file($_FILES['image']['tmp_name'] ?? null,$updated_img))
			{
				echo $updated_img;
			}
	}
	// If no image uploaded- keep old
	else{
		$updated_img=$u_img;
	}



	// ------------SUB IMAGE------------
	// If New image uploaded - keep new
	if(!empty($_FILES['sub-image']['name'])){
	 	$updated_sub_img=$img_fol.basename($_FILES['sub-image']['name']);
		if(!move_uploaded_file($_FILES['sub-image']['tmp_name'] ?? null,$updated_sub_img)){
			echo $updated_sub_img;
		}
	}
	// If no image uploaded- keep old
	else{
		$updated_sub_img=$u_sub_img;
	}

 	$updated_pro_name=$_POST['pro_name'];
 	$updated_price=$_POST['price'];
 	$updated_features=$_POST['features'];
 	$updated_description=$_POST['description'];
 	$updated_status=$_POST['status'];



 	// ------------RELATED IMAGE 1------------
	// If New image uploaded - keep new
	if(!empty($_FILES['rel_img1']['name'])){
	 	$updated_ri1=$img_fol.basename($_FILES['rel_img1']['name']);
		if(!move_uploaded_file($_FILES['rel_img1']['tmp_name'] ?? null,$updated_ri1)){
			echo "";
		}
	}
	// If no image uploaded- keep old
	else{
		$updated_ri1=$u_ri1;
	}

 	


 	// ------------RELATED IMAGE 2------------
	// If New image uploaded - keep new
	if(!empty($_FILES['rel_img2']['name'])){
	 	$updated_ri2=$img_fol.basename($_FILES['rel_img2']['name']);
		if(!move_uploaded_file($_FILES['rel_img2']['tmp_name'] ?? null,$updated_ri2)){
			echo "";
		}
	}
	// If no image uploaded- keep old
	else{
		$updated_ri2=$u_ri2;
	}



		// ------------RELATED IMAGE 3------------
	if (!empty($_FILES['rel_img3']['name'])) {
	    $updated_ri3 = $img_fol . basename($_FILES['rel_img3']['name']);
	    if (!move_uploaded_file($_FILES['rel_img3']['tmp_name'] ?? null, $updated_ri3)) {
	        echo "";
	    }
	} else {
	    $updated_ri3 = $u_ri3;
	}




	// ------------RELATED IMAGE 4------------
	if (!empty($_FILES['rel_img4']['name'])) {
	    $updated_ri4 = $img_fol . basename($_FILES['rel_img4']['name']);
	    if (!move_uploaded_file($_FILES['rel_img4']['tmp_name'] ?? null, $updated_ri4)) {
	        echo "";
	    }
	} else {
	    $updated_ri4 = $u_ri4;
	}


 	$update_query="update products set image='$updated_img',sub_img='$updated_sub_img',pro_name='$updated_pro_name',price='$updated_price',
 	features='$updated_features',description='$updated_description',status='$updated_status',rel_img1='$updated_ri1',rel_img2='$updated_ri2',rel_img3='$updated_ri3',rel_img4='$updated_ri4' where id='$uid'";

 	$execute_update=mysqli_query($connect,$update_query);
 	if($execute_update){
 		header("Location:list_products.php");
 		// echo "Data Updated";
 	}
 	else{
 		echo "Data not updated";
 	}
 	// header("Location:list_products.php");
}




//--------------------------UPDATING Related Products-----------------------------
 $ruid=$_GET['ruid'] ?? null;
// echo $uid;
 $updated_data="select * from products where id='$ruid'";
 $x_up=mysqli_query($connect,$updated_data);

 if(mysqli_num_rows($x_up)>0){
 	$ud=mysqli_fetch_assoc($x_up);

 	$ru_id=$ud['id'];
 	$ru_img=$ud['image'];

 	// echo $ru_img;
 	$ru_sub_img=$ud['sub_img'];
 	$ru_pro_name=$ud['pro_name'];
 	$ru_price=$ud['price'];
 	$ru_features=$ud['features'];
 	$ru_description=$ud['description'];
 	$ru_status=$ud['status'];
 	$ru_ri1=$ud['rel_img1'];
 	$ru_ri2=$ud['rel_img2'];
 	$ru_ri3=$ud['rel_img3'];
 	$ru_ri4=$ud['rel_img4'];

 }


if(isset($_POST['update'])){

	$img_fol="images-admin/products/";

	// ------------MAIN IMAGE------------
	// If New image uploaded - keep new
	if(!empty($_FILES['image']['name'])){
		$updated_img=$img_fol.basename($_FILES['image']['name']);
		if(!move_uploaded_file($_FILES['image']['tmp_name'] ?? null,$updated_img))
			{
				// echo $updated_img;
			}
	}
	// If no image uploaded- keep old
	else{
		$updated_img=$ru_img;
	}



	// ------------SUB IMAGE------------
	// If New image uploaded - keep new
	// if(!empty($_FILES['sub-image']['name'])){
	//  	$updated_sub_img=$img_fol.basename($_FILES['sub-image']['name']);
	// 	if(!move_uploaded_file($_FILES['sub-image']['tmp_name'] ?? null,$updated_sub_img)){
	// 		// echo $updated_sub_img;
	// 	}
	// }
	// If no image uploaded- keep old
	// else{
	// 	$updated_sub_img=$u_sub_img;
	// }

 	// $updated_pro_name=$_POST['pro_name'];
 	// $updated_price=$_POST['price'];
 	// $updated_features=$_POST['features'];
 	// $updated_description=$_POST['description'];
 	// $updated_status=$_POST['status'];



 	// ------------RELATED IMAGE 1------------
	// If New image uploaded - keep new
	if(!empty($_FILES['rel_img1']['name'])){
	 	$updated_ri1=$img_fol.basename($_FILES['rel_img1']['name']);
		if(!move_uploaded_file($_FILES['rel_img1']['tmp_name'] ?? null,$updated_ri1)){
			echo "";
		}
	}
	// If no image uploaded- keep old
	else{
		$updated_ri1=$ru_ri1;
	}

 	


 	// ------------RELATED IMAGE 2------------
	// If New image uploaded - keep new
	if(!empty($_FILES['rel_img2']['name'])){
	 	$updated_ri2=$img_fol.basename($_FILES['rel_img2']['name']);
		if(!move_uploaded_file($_FILES['rel_img2']['tmp_name'] ?? null,$updated_ri2)){
			echo "";
		}
	}
	// If no image uploaded- keep old
	else{
		$updated_ri2=$ru_ri2;
	}



		// ------------RELATED IMAGE 3------------
	if (!empty($_FILES['rel_img3']['name'])) {
	    $updated_ri3 = $img_fol . basename($_FILES['rel_img3']['name']);
	    if (!move_uploaded_file($_FILES['rel_img3']['tmp_name'] ?? null, $updated_ri3)) {
	        echo "";
	    }
	} else {
	    $updated_ri3 = $ru_ri3;
	}




	// ------------RELATED IMAGE 4------------
	if (!empty($_FILES['rel_img4']['name'])) {
	    $updated_ri4 = $img_fol . basename($_FILES['rel_img4']['name']);
	    if (!move_uploaded_file($_FILES['rel_img4']['tmp_name'] ?? null, $updated_ri4)) {
	        echo "";
	    }
	} else {
	    $updated_ri4 = $ru_ri4;
	}


 	$update_query="update products set image='$updated_img',rel_img1='$updated_ri1',rel_img2='$updated_ri2',rel_img3='$updated_ri3',rel_img4='$updated_ri4' where id='$ruid'";

 	// sub_img='$updated_sub_img',pro_name='$updated_pro_name',price='$updated_price',
 	// features='$updated_features',description='$updated_description',status='$updated_status',

 	$execute_update=mysqli_query($connect,$update_query);
 	if($execute_update){
 		header("Location:list_related_products.php");
 		// echo "Data Updated";
 	}
 	else{
 		echo "Data not updated";
 	}
 	// header("Location:list_products.php");
}
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Add Products</title>
	<link rel="stylesheet" type="text/css" href="files-admin/css/new.css">
    <!-- <link rel="stylesheet" type="text/css" href="files-admin/css/main.css"> -->
    <!-- <link rel="stylesheet" type="text/css" href="files-admin/css/style.css"> -->
    <!-- <link rel="stylesheet" type="text/css" href="files-admin/css/new.css"> -->
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
		  color: #2b2285;/* text color */
		  font-family: Arial, Helvetica, sans-serif;  /* change font */
		  font-weight: 600;
		}
    </style>
</head>
<body class="body-bg">
	<?php
 include "default.php";
	?>
	<div>
	<form method="POST" enctype="multipart/form-data" class="form-container inner-body" style="height:80vh;overflow-y:scroll;width: 80vw;z-index: -2000;">
		<h1 class="blue-heading">Add Product</h1>

		<div class="row">
			<div class="col-lg-6">
				<!-- MAIN IMAGE -->
				<label class="form-label">Upload Main Image</label>
				<input type="file" name="image" class="form-input" value="<?php if (!empty($uid)) {
					echo $u_img;}if (!empty($ruid)) {echo $ru_img;}?>
" /><br><br>
				<img src="<?php
								if (!empty($uid)) {
								    echo $u_img;   // Image for A
								} elseif (!empty($ruid)) {
								    echo $ru_img;  // Image for B
								} else {
								    echo "";       // Nothing
								}
						  ?>" style="height: 40px;width: 60px;" class="<?php if (empty($uid) && empty($ruid)) { echo "style_gal";} else {echo "";}?>">

				<label class="form-label">Product Name</label>
				<input type="text" name="pro_name"  class="form-input" value="<?php if($uid==""){echo "";}else{ echo $u_pro_name;}?>" /><br><br>
				
			</div>

			<div class="col-lg-6">
				<!-- SUB IMAGE -->
				<label class="form-label">Upload Sub Image</label>
				<input type="file" name="sub-image" class="form-input" value="<?php if($uid==""){echo "";}else{echo $u_sub_img;}?>"/><br><br>
				<img src="<?php if($uid==""){echo "";}else{ echo $u_sub_img;}?>" style="height: 40px;width: 60px;" class="<?php if($uid==""){echo "style_gal";}else{echo "";}?>">

				<label class="form-label" style="<?php if($ruid!=""){echo "margin-top: 40px;";}?>">Price</label>
				<input type="number" name="price"  class="form-input" value="<?php if($uid==""){echo "";}else{ echo $u_price;}?>" /><br><br>

				
				<!-- <textarea type="text" name="description" rows="5" cols="80" class="form-textarea"></textarea><br><br> -->
						
			</div>
			<div class="col-lg-12">
				<label class="form-label">Description</label>
				<input type="text" name="description"  class="form-input" value="<?php if($uid==""){echo "";}else{ echo $u_description;}?>" /><br><br>
				
			</div>

			<div class="col-lg-12">
				<label class="form-label">Features</label>
				<input type="text" name="features"  class="form-input" value="<?php if($uid==""){echo "";}else{ echo $u_features;}?>" /><br><br>
				
			</div>
			<div class="col-lg-12">
				<h5 class="form-heading">Status</h5>
				<label class="radio-label">
				  <input type="radio" name="status" value="1" class="form-radio" <?php if($uid != "" && $u_status == 1){ echo "checked"; } ?>/>
				  Active
				</label>

				<label class="radio-label">
				  <input type="radio" name="status" value="0" class="form-radio" <?php if($uid != "" && $u_status == 0){ echo "checked"; } ?>/>
				  Inactive
				</label><br><br>
				
			</div>

			<div class="col-lg-12 d-flex">

				<div>
					<label class="form-label">Related Image 1</label>
				<input type="file" name="rel_img1" class="form-input mr-2" value="<?php if (!empty($uid)) {echo $u_ri1;}
					if (!empty($ruid)) {echo $ru_ri1;}?>" /><br><br>
				<img src="<?php
								if (!empty($uid)) {
								    echo $u_ri1;   // Image for A
								} elseif (!empty($ruid)) {
								    echo $ru_ri1;  // Image for B
								} else {
								    echo "";       // Nothing
								}
						  ?>" style="height: 40px;width: 60px;" class="<?php if (empty($uid) && empty($ruid)) { echo "style_gal";} else {echo "";}?>">
				</div>


				<div>
					<label class="form-label">Related Image 2</label>
				<input type="file" name="rel_img2" class="form-input ml-2" value="<?php if (!empty($uid)) {echo $u_ri2;}if (!empty($ruid)) {echo $ru_ri2;}?>"/><br><br>
				<img src="<?php
								if (!empty($uid)) {
								    echo $u_ri2;   // Image for A
								} elseif (!empty($ruid)) {
								    echo $ru_ri2;  // Image for B
								} else {
								    echo "";       // Nothing
								}
						  ?>" style="height: 40px;width: 60px;" class="<?php if (empty($uid) && empty($ruid)) { echo "style_gal";} else {echo "";}?>">
				</div>
				<div>
				</div>
				
			</div>

			<div class="col-lg-12 d-flex">

				<div>
					<label class="form-label">Related Image 3</label>
				<input type="file" name="rel_img3" class="form-input mr-2" value="<?php
if (!empty($uid)) {
    echo $u_ri3;
}

if (!empty($ruid)) {
    echo $ru_ri3;
}
?>"/><br><br>
				<img src="<?php
								if (!empty($uid)) {
								    echo $u_ri3;   // Image for A
								} elseif (!empty($ruid)) {
								    echo $ru_ri3;  // Image for B
								} else {
								    echo "";       // Nothing
								}
						  ?>" style="height: 40px;width: 60px;" class="<?php if (empty($uid) && empty($ruid)) { echo "style_gal";} else {echo "";}?>">
				</div>
				<div>
					<label class="form-label">Related Image 4</label>
				<input type="file" name="rel_img4" class="form-input ml-2" value="<?php
if (!empty($uid)) {
    echo $u_ri4;
}

if (!empty($ruid)) {
    echo $ru_ri4;
}
?>"/><br><br>
				<img src="<?php
								if (!empty($uid)) {
								    echo $u_ri4;   // Image for A
								} elseif (!empty($ruid)) {
								    echo $ru_ri4;  // Image for B
								} else {
								    echo "";       // Nothing
								}
						  ?>" style="height: 40px;width: 60px;" class="<?php if (empty($uid) && empty($ruid)) { echo "style_gal";} else {echo "";}?>">
				</div>
				<div>
				</div>
				
			</div>
			
		</div>
		

		

		

		<!-- <input type="submit" name="add" value="Add" class="submit-btn"/>

		<input type="submit" name="update" value="Update" class="submit-btn"/> -->

		<input type="submit" name="<?php if($uid==""&&$ruid==""){echo "add";}else{echo "update";}?>" class="submit-btn" value="<?php if($uid==""&&$ruid==""){echo "Add";}else{echo "Update";}?>" style="<?php if($uid==""&&$ruid==""){echo "";}else{echo "margin-top:10px;";}?>" />
	</form>
	</div>
</body>
</html>