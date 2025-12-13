<?php 
include "db_conn.php";
$id=$_GET['id'] ?? null;
// echo $id;

$selecting_data="select * from products where id='$id'";
$execute_selected_data=mysqli_query($connect,$selecting_data);
// echo $execute_selected_data;
$x=mysqli_fetch_array($execute_selected_data);
$main_image=$x['image'];
$pro_name=$x['pro_name'];
$price=$x['price'];
$description=$x['description'];
$features=$x['features'];
$ri1=$x['rel_img1'];
$ri2=$x['rel_img2'];
$ri3=$x['rel_img3'];
$ri4=$x['rel_img4'];

// echo $main_image;
?>




<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Products Details</title>

    <!--linking CSS file-->
    <link rel="stylesheet" type="text/css" href="starkmotors/file-starkmotors/css/new.css"> 
    <!-- <link rel="stylesheet" type="text/css" href="starkmotors/file-starkmotors/css/main.css"> -->
    <!--<link rel="stylesheet" type="text/css" href="starkmotors/file-starkmotors/css/newcss.css">-->

    <!--Attaching Favicon-->
    <link rel="icon" type="img/png" href="starkmotors/images-starkmotors/faviconnew.png"/>

    <!--Attaching Bootstrap>-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Font Awesome CDN (latest v6) -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/YOUR_PRO_KIT_CODE.js" crossorigin="anonymous"></script>

    <!--Attaching FontAwesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>


    <!-- HEADER SECTION -->
    <div class="header d-flex flex-row justify-content-between pt-md-2" id="head">
        <!--Logo image-->
        <div>
            <img src="starkmotors/images-starkmotors/Home/logonew.png" class="logo" /> 
        </div>

        <!--Header Elements-->
        <div class="inner-header-style d-flex flex-row justify-content-row" id="elements">
            <a href="index.php" class="header-element text-dark">Home</a>
            <a href="about.php" class="header-element text-dark">About Speed Motors</a>
            <a href="ourproducts.php" class="header-element text-dark">Our Products</a>
            <a href="testimonials.php" class="header-element text-dark">Testimonials</a>
            <a href="enquiry.php" class="header-element text-dark">Enquiry</a>
            <a href="contactus.php" class="header-element text-dark">Gallery</a>
            <a href="contactus.php" class="header-element text-dark">Contact us</a>
        </div>

        <!--HamBurger Icon-->
        <div>
            <img src="starkmotors/images-starkmotors/hamburger.png" class="hamburger" />            
        </div>

</div>  
    

    <section >
        <div class="box">
        <div  class="elements-alignment">
            <img src="adminpage/<?php echo $main_image;?>" width="25%" class="pro_image_style" />
            <h2 class="pro_title_style"><?php echo $pro_name;?></h2>
            <p class="price_style"><span class="pro_title_style">Price: </span><?php echo $price;?> Rs./-</p>
            <p class="description_style"><?php echo $description;?></p>
        
        <!-- FEATURES SECTION -->
        <div class="text-left">
            <h2 class="features-head text-left">Features</h2>
            <p class="features_style"><?php echo $features;?>
            </p>
        </div>
    </div>
    </div>
</section>

        <!-- RELATED PRODUCTS SECTION -->

        <section>
            <div class="text-center mt-5 p-5">
                <p class="client-style">Explore More</p>
                <h1 class="all-heads cust-style">Related Products</h1>
                <div class="row mt-5"> 
                    <div class="col-3">
                    <img src="adminpage/<?php echo $ri1;?>" width="100%" class="pro_image_style" />
                    <p class="pro_title_style" style="font-size:25px;">
                        <?php 
                            $select_name="select pro_name from products where
                            image='adminpage/$ri3'";

                            $execute_query=mysqli_query($connect,$select_name);

                            $fetch_name=mysqli_fetch_array($execute_query);
                            $name=$fetch_name['pro_name'] ?? "";
                            echo $name;
                        ?>
                    </p>
                </div>
                <div class="col-3">
                    <img src="adminpage/<?php echo $ri2;?>" width="100%" class="pro_image_style" />
                    <p class="pro_title_style" style="font-size:25px;">
                        <?php 
                            $select_name="select pro_name from products where
                            image='adminpage/$ri2'";

                            $execute_query=mysqli_query($connect,$select_name);

                            $fetch_name=mysqli_fetch_array($execute_query);
                            $name=$fetch_name['pro_name'] ?? "";

                            echo $name;
                        ?>
                    </p>
                </div>
                <div class="col-3">
                    <img src="adminpage/<?php echo $ri3;?>" width="100%" class="pro_image_style" />
                    <p class="pro_title_style" style="font-size:25px;">
                        <?php 
                            $select_name="select pro_name from products where
                            image='adminpage/$ri2'";

                            $execute_query=mysqli_query($connect,$select_name);

                            $fetch_name=mysqli_fetch_array($execute_query);
                            $name=$fetch_name['pro_name'] ?? "";

                            echo $name;
                        ?>
                    </p>
                </div>
                <div class="col-3">
                    <img src="adminpage/<?php echo $ri4;?>" width="100%" class="pro_image_style" />
                    <p class="pro_title_style" style="font-size:25px;">
                        <?php 
                            $select_name="select pro_name from products where
                            image='adminpage/$ri4'";

                            $execute_query=mysqli_query($connect,$select_name);

                            $fetch_name=mysqli_fetch_array($execute_query);
                            $name=$fetch_name['pro_name'] ?? "";

                            echo $name;
                        ?>
                    </p>
                </div>
                </div>
            </div>
        </section>
  







    <!--Footer Section-->
    <!--Footer(included in PHP)-->
    <?php
    include"footer.php";
    ?>








    <script>
        window.addEventListener('scroll', function () {
  const header = document.getElementById('head');
  const sticky = header.offsetTop;

  if (window.pageYOffset > sticky) {
        header.classList.add('sticky');
  } else {
    header.classList.remove('sticky');
  }
});
    </script>

</body>
</html>