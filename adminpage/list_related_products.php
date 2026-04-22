<?php

session_start();
if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    header("Location: index.php"); 
    exit;
}


 include "db_conn.php";
include "default.php";

// 	--------------------------DELETING----------------------

$did=$_GET['did'] ?? null;
$delete="delete from products where id='$did'";
$execute_delete=mysqli_query($connect,$delete);

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>List Related Products</title>
	<link rel="stylesheet" type="text/css" href="files-admin/css/new.css">
    <!-- <link rel="stylesheet" type="text/css" href="files-admin/css/stl.css"> -->
	<!-- <link rel="stylesheet" type="text/css" href="files-admin/css/main.css"> -->

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous" />

    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body class="body-bg">

	<div class="inner-body">
			<h1 class="blue-heading">Related Products List</h1>

			<div class="table-div">
			<table class="table-container">
			<thead class="table-header">
				<tr class="table-row">
					<th class="table-heading">ID</th>
					<th class="table-heading">Main Image</th>
					<!-- <th class="table-heading">Sub Image</th>
					<th class="table-heading">Product Name</th>
					<th class="table-heading">Status</th>
					<th class="table-heading">Price</th>
					<th class="table-heading">Description</th>
					<th class="table-heading">Features</th> -->
					<th class="table-heading">Related Image1</th>
					<th class="table-heading">Related Image2</th>
					<th class="table-heading">Related Image3</th>
					<th class="table-heading">Related Image4</th>
					<th class="table-heading">Update</th>
					<th class="table-heading">Delete</th>
				</tr>
			</thead>




		<tbody class="table-body">
					<?php 
						 $retrieve_data="select * from products";
						 $execute=mysqli_query($connect,$retrieve_data);

						 if(mysqli_num_rows($execute)>0){
						 	while($x=mysqli_fetch_array($execute)){
						 		$id_ret=$x['id'];
						 		$img_ret=$x['image'];
						 		// $sub_img_ret=$x['sub_img'];
						 		// $pro_name_ret=$x['pro_name'];
						 		// $status_ret=$x['status'];
						 		// $price_ret=$x['price'];
						 		// $description_ret=$x['description'];
						 		// $features_ret=$x['features'];
						 		$ri1_ret=$x['rel_img1'];
						 		$ri2_ret=$x['rel_img2'];
						 		$ri3_ret=$x['rel_img3'];
						 		$ri4_ret=$x['rel_img4'];

						 		?>


						 			<tr class="table-row">
									<td class="table-data"><?php echo $id_ret; ?></td>
									<td class="table-data">
										<img src="<?php echo $img_ret; ?>" style="height: 50px;width: 70px;"/>
									</td>
									



									<td class="table-data"><img src="<?php echo $ri1_ret; ?>" style="height: 50px;width: 70px;"/></td>
									<td class="table-data"><img src="<?php echo $ri2_ret; ?>" style="height: 50px;width: 70px;"/></td>
									<td class="table-data"><img src="<?php echo $ri3_ret; ?>" style="height: 50px;width: 70px;"/></td>
									<td class="table-data"><img src="<?php echo $ri4_ret; ?>" style="height: 50px;width: 70px;"/></td>

									<!-- <td class="table-data d-flex align-items-center justify-content-center">
										<a href="add_products.php?uid=<?php echo $id_ret;?>" style="margin-right: 10px;">
											<img src="images-admin/edit.png"/>
											Update -->
										<!-- </a> 
									</td> -->



									<!-- <td class="table-data d-flex align-items-center justify-content-center">
										<a href="list_products.php?did=<?php echo $id_ret;?>" style="">
											<img src="images-admin/trash.png"/> -->
											<!-- Delete
										</a>
									</td> -->









									<!-- <tr> -->
										  <td class="table-data text-center">
										    <a href="add_products.php?ruid=<?php echo $id_ret;?>" class="me-2">
										      <img src="images-admin/edit.png" alt="Edit"/>
										    </a>
										  </td>

										  <td class="table-data text-center">
										    <a href="list_products.php?did=<?php echo $id_ret;?>">
										      <img src="images-admin/trash.png" alt="Delete"/>
										    </a>
										  </td>
									<!-- </tr> -->

								</tr>


						 		<?php


						 	}
						 }
					?>
				
			</tbody>

			
		</table>
		</div>
	</div>
</body>
</html>
