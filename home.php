<?php

session_start();
if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    // If user not loggedin and trying ot reach this page(home.php) using url or path, the session will
  // take the user to index.php page. user cannot able to access the page without signin.
    header("Location: index.php"); 
    exit;
}
?>




<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin Dashboard</title>

  <!-- CSS STYLES -->
	<link rel="stylesheet" type="text/css" href="files-admin/css/style_new.css">
  <!-- <link rel="stylesheet" type="text/css" href="files-admin/css/new.css"> -->
  <!-- <link rel="stylesheet" type="text/css" href="files-admin/css/main.css"> -->

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous" />

    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>


<body>
	<!-- Top Section -->
  <div id="head-admin">
	<div class="d-flex flex-row justify-content-between top-style shadow">
    <!-- <img src="images-admin/hamburgernew.png" class="ham-style" /> -->
		<div class="d-flex flex-row justify-content-center mb-3">
            <img src="\adminpage\logonew.png" class="top-logo" />
            <h2 class="title-style top-text1">Speed Motors</h2>
    </div>
		<div style="margin-top:10px;">
			<a href="signout.php" style="text-decoration: none;color: #020469;" class="top-text2">Sign Out  <i class="fa fa-sign-out" aria-hidden="true"></i></a>
		</div>
	</div>
  </div>


<!-- Sidebar -->
<div class="d-flex animate__animated" id="sidebar">
  <!-- Sidebar -->
  <div class="text-white p-3 vh-100" style="width: 240px;background-color: #171f91;">
    <h4 class="mb-4" style="font-weight: bold;">
      MENU
    </h4>

    <!-- Gallery -->
    <div class="mb-3">
      <button class="btn btn-primary w-100 text-left d-flex justify-content-between align-items-center font-style-bar extra-size"
              data-toggle="collapse" data-target="#galleryMenu" aria-expanded="false">
        Gallery
        <!-- <i class="fa fa-caret-down rotate"></i> -->
      </button>
      <div id="galleryMenu" class="collapse">
        <a href="add_gallery.php" class="d-block pl-4 py-2 text-white font-style-bar" style="background-color:#2a35c9;text-decoration: none;">Add Gallery</a>
        <a href="list_gallery.php" class="d-block pl-4 py-2 text-white font-style-bar" style="background-color:#2a35c9;border-bottom-left-radius: 5px;border-bottom-right-radius: 5px;text-decoration: none;">List Gallery</a>
      </div>
    </div>

    <!-- Products -->
    <div class="mb-3">
      <button class="btn btn-primary w-100 text-left d-flex justify-content-between align-items-center font-style-bar extra-size"
              data-toggle="collapse" data-target="#productsMenu" aria-expanded="false">
        Products
        <!-- <i class="fa fa-caret-down rotate"></i> -->
      </button>
      <div id="productsMenu" class="collapse">
        <a href="add_products.php" class="d-block pl-4 py-2 text-white font-style-bar" style="background-color:#2a35c9;text-decoration: none;">Add Products</a>
        <a href="list_products.php" class="d-block pl-4 py-2 text-white font-style-bar" style="background-color:#2a35c9;text-decoration: none;">List Products</a>
        <a href="list_related_products.php" class="d-block pl-4 py-2 text-white font-style-bar" style="background-color:#2a35c9;border-bottom-left-radius: 5px;border-bottom-right-radius: 5px;text-decoration: none;">List Related Products</a>
      </div>
    </div>

    <!-- Manage User -->
    <div class="mb-3">
      <a href="list_enquiry.php" class="btn btn-primary w-100 text-left font-style-bar extra-size">Manage User</a>
    </div>


    <!-- SignOut -->
    <div class="mb-3">
      <a href="signout.php" class="btn btn-primary w-100 text-left font-style-bar extra-size">Sign Out</a>
    </div>
  </div>



  <!-- Main Content -->
  <div class="d-flex flex-row justify-content-center">
    <a href="list_gallery.php" style="height:200px;text-decoration: none; color: inherit;">
      <div class="div-style">
        <h1 class="text-white">Gallery</h1>
        <p class="text-white"><?php include "db_conn.php"; 
          $select="select * from gallery";
          $x_select=mysqli_query($connect,$select);
          $rows=mysqli_fetch_assoc($x_select);
          echo mysqli_num_rows($x_select);
        ?></p>
      </div>
    </a>


    <a href="list_products.php" style="height:200px;text-decoration: none; color: inherit;">
      <div class="div-style">
        <h1 class="text-white">Products</h1>
        <p class="text-white"><?php include "db_conn.php"; 
          $select="select * from products";
          $x_select=mysqli_query($connect,$select);
          $rows=mysqli_fetch_assoc($x_select);
          echo mysqli_num_rows($x_select);
      ?></p>
      </div>
    </a>


    <a href="list_related_products.php" style="height:200px;text-decoration: none; color: inherit;">
      <div class="div-style" style="width: 235px;">
        <h1 class="text-white" style="font-size: 25px;">Related Products</h1>
        <p class="text-white"><?php include "db_conn.php"; 
          $select="select * from products";
          $x_select=mysqli_query($connect,$select);
          $rows=mysqli_fetch_assoc($x_select);
          echo mysqli_num_rows($x_select);
      ?></p>
      </div>
    </a>
  </div>
  
</div>

<!-- Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>





</body>
</html>