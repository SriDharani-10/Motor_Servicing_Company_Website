<?php 

session_start();
if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    header("Location: index.php"); 
    exit;
}


// include "default.php";
include "db_conn.php";

 // ----------------------------------DELETING---------------------------------------
$did=$_GET['did'] ?? null;

$get_data="select * from gallery where id='$did'";
$execute_ret=mysqli_query($connect,$get_data);
$x=mysqli_fetch_assoc($execute_ret);
$get_file_name=$x['image']??null;

if(!empty($get_file_name) && file_exists($get_file_name) && is_file($get_file_name)){
	unlink($get_file_name);
	// $deleting_data="delete from gallery where id='$did'";
	// $execute_delete=mysqli_query($connect,$deleting_data);
}

$deleting_data="delete from gallery where id='$did'";
$execute_delete=mysqli_query($connect,$deleting_data);


// if($execute_delete){
// 	echo "Data deleted successfuly";
// }
// else{
// 	echo "data not deleted";
// }
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>List Gallery</title>
	<link rel="stylesheet" type="text/css" href="files-admin/css/new.css">
    <!-- <link rel="stylesheet" type="text/css" href="files-admin/css/main.css"> -->

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous" />

    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body class="body-bg">
	<?php
	include "default.php";
	?>
	<div class="inner-body">
		<h1 class="blue-heading">Gallery List</h1>

			<div class="table-div"> 

		<!-- <div class="table-header" style="width:77vw;position: fixed; ">
		 <div class="table-row d-flex flex-row justify-content-around" style="width: 60vw;">
			<p class="table-heading">ID</p>
			<p class="table-heading">Image_url</p>
			<p class="table-heading">Image_Name</p>
			<p class="table-heading">Status</p>
			<p class="table-heading">Edit</p>
		</div>
		</div> -->

			<table class="table-container" style="width:77vw;">
				<thead class="table-header">
					<tr class="table-row">
						<th class="table-heading">ID</th>
						<th class="table-heading">Image_url</th>
						<th class="table-heading">Image_Name</th>
						<th class="table-heading">Status</th>
						<th class="table-heading">Edit</th>
					</tr>
				</thead>

				<tbody class="table-body">
					<!-- <tr class="table-row"> -->
						<?php 
							 $retrieve_data="select * from gallery";
							 $execute=mysqli_query($connect,$retrieve_data);

							 if(mysqli_num_rows($execute)>0){
							 	while($x=mysqli_fetch_array($execute)){
							 		$id_ret=$x['id'];
							 		$img_url_ret=$x['image'];
							 		$img_name_ret=$x['img_name'];
							 		$status_ret=$x['status'];
							 		?>


							 			<tr class="table-row">
										<td class="table-data"><?php echo $id_ret; ?></td>

										<td class="table-data">
											<img src="<?php echo $img_url_ret; ?>" style="height: 50px;width: 70px;/">
										</td>

										<td class="table-data"><?php echo $img_name_ret; ?></td>

										<td class="table-data"><?php echo $status_ret; ?></td>

										<td class="table-data"><a href="add_gallery.php?uid=<?php echo $id_ret;?>"><img src="images-admin/edit.png"/></a> 
										 <a href="list_gallery.php?did=<?php echo $id_ret;?>"><img src="images-admin/trash.png"/></a></td>
										


									</tr>


							 		<?php


							 	}
							 }
						?>
					<!-- </tr> -->
				</tbody>
			</table>
		</div>
	</div>
</body>
</html>