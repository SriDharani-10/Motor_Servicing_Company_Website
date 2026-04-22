<?php

session_start();
if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    header("Location: index.php"); 
    exit;
}


 include "db_conn.php";
include "default.php";

// ----------------------------------DELETING---------------------------------------
$did=$_GET['did'] ?? null;
$deleting_data="delete from enquiry where id='$did'";
$execute_delete=mysqli_query($connect,$deleting_data);

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>List Enquiries</title>
	<!-- <link rel="stylesheet" type="text/css" href="files-admin/css/stl.css"> -->
	<!-- <link rel="stylesheet" type="text/css" href="files-admin/css/style.css"> -->
    <!-- <link rel="stylesheet" type="text/css" href="files-admin/css/main.css"> -->
    <link rel="stylesheet" type="text/css" href="files-admin/css/new.css">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous" />

    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body class="body-bg">
	<div class="inner-body animate__animated">
		<h1 class="blue-heading">Enquiry List</h1>

		<div class="table-div">
			<table class="table-container">
			<thead class="table-header">
				<tr class="table-row">
					<th class="table-heading">ID</th>
					<th class="table-heading">Name</th>
					<th class="table-heading">Phone</th>
					<th class="table-heading">Email</th>
					<th class="table-heading">Product</th>
					<th class="table-heading">Message</th>
					<th class="table-heading">Edit</th>
				</tr>
			</thead>

			<tbody class="table-body">
				<tr class="table-row">
					<?php 
						 $retrieve_data="select * from enquiry";
						 $execute=mysqli_query($connect,$retrieve_data);

						 if(mysqli_num_rows($execute)>0){
						 	while($x=mysqli_fetch_array($execute)){
						 		$id_ret=$x['id'];
						 		$name_ret=$x['name'];
						 		$phone_ret=$x['phone'];
						 		$email_ret=$x['email'];
						 		$product_ret=$x['product'];
						 		$message_ret=$x['message'];
						 		?>


						 			<tr class="table-row">
									<td class="table-data"><?php echo $id_ret; ?></td>

									<td class="table-data"> <?php echo $name_ret; ?></td>

									<td class="table-data"><?php echo $phone_ret; ?></td>

									<td class="table-data"><?php echo $email_ret; ?></td>

									<td class="table-data"><?php echo $product_ret; ?></td>

									<td class="table-data"><?php echo $message_ret; ?></td>

									<td class="table-data">
									  <a href="list_enquiry.php?did=<?php echo $id_ret;?>">
									  <img src="images-admin/trash.png"/>
									  </a>
									</td>
									


								</tr>


						 		<?php


						 	}
						 }
					?>
				</tr>
			</tbody>
		</table>
		</div>
	</div>
</body>




<script>
function hideSidebar() {
  const sidebar = document.getElementById("sidebar");
  const menuIcon = document.getElementById("menuIcon");

  sidebar.classList.add("animate__fadeOutLeft");

  sidebar.addEventListener("animationend", function handler() {
    sidebar.style.display = "none";
    menuIcon.classList.add("animate__fadeIn");
    menuIcon.style.display = "block";
    const innerbody=document.getElementsByClassName("inner-body")[0];

    // innerbody.classList.add("animate__fadeOutBottomLeft");
    innerbody.classList.add("animate_table");
    // innerbody.style.marginLeft="30px";
    // innerbody.style.marginTop="-530px";
    // innerbody.style.display="block";
    sidebar.removeEventListener("animationend", handler);
  });
}

function showSidebar() {
  const sidebar = document.getElementById("sidebar");
  const menuIcon = document.getElementById("menuIcon");

  menuIcon.style.display = "none";
  sidebar.style.display = "block";

  sidebar.classList.remove("animate__fadeOutLeft");
  sidebar.classList.add("animate__fadeInLeft");
  const innerbody=document.getElementsByClassName("inner-body")[0];
  innerbody.classList.add("animate_reverse_table");
  innerbody.style.display="block";
}
</script>


</html>