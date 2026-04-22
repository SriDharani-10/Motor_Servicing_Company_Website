<<<<<<< HEAD
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Our Products</title>

    <!--linking CSS file-->
    <link rel="stylesheet" type="text/css" href="starkmotors/file-starkmotors/css/style.css"> 
    <!-- <link rel="stylesheet" type="text/css" href="starkmotors/file-starkmotors/css/main.css"> -->
    <!--<link rel="stylesheet" type="text/css" href="starkmotors/file-starkmotors/css/newcss.css">-->

    <!-- ANIMATIONS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <!-- <link rel="stylesheet" type="text/css"  href="starkmotors/file-starkmotors/animations/animate.min.css"> -->
    <script src="starkmotors/file-starkmotors/animations/wow.js"></script>
    <link rel="stylesheet" type="text/css" href="starkmotors/file-starkmotors/css/animations.css">

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


    <?php
    include"header.php";
    include"whatsapp3.php";
    ?>
    

    
<!-- Banner Section -->
<section>
        <div class="container-fluid text-center ourpro-bg about-bg" style="font-family:Noto Serif;">
            <h6 class="text-light padd-top100 animate__animated animate__zoomIn" >Home<span> > </span>Our Products</h6>
            <h1 class="text-light padd-bot100 animate__animated animate__zoomIn">Our Products</h1>      
        </div>
</section>


<!-- Main Section -->
<section>
            <h1 class="text-center p-2 mb-5" style="margin-top:-15px;font-weight:bolder;">Industrial Motors Manufacturer in Coimbatore</h1>


            <div class="container ml-adj mb-5">
                <div class="row d-flex flex-row justify-content-center">

                    <?php
                        include "db_conn.php";

                        $products="select * from products where status='1'";
                        $execute_products=mysqli_query($connect,$products);

                        if(mysqli_num_rows($execute_products)>0){
                            while($data=mysqli_fetch_array($execute_products)){
                                $id=$data['id'];
                                $main_image=$data['image'];
                                $sub_image=$data['sub_img'];
                                $pro_name=$data['pro_name'];
                                // echo $main_image;
                        ?>
                    <!-- <a> -->
                        <a href="pro_details.php?id=<?php echo $id;?>" style="text-decoration: none; color: black;" class="col-12 col-md-4 d-flex flex-column justify-content-center" >
                            <div class="imgpart">
                                <img src="adminpage/<?php echo $main_image;?>" width="100%" />
                                <!-- <p>Product Name</p> -->
                                    <!-- <img src="starkmotors/images-starkmotors/ourproducts/ourpro1.png" width="100%" /> -->
                            </div>
                        <!-- <img src="starkmotors/images-starkmotors/ourproducts/img1.png" class="image-flex" width="35%" /> -->
                        <img src="adminpage/<?php echo $sub_image;?>" class="image-flex" width="35%" />

                        <p class="pro_name_style"><?php echo $pro_name;?></p>
                    </a>
                <!-- </a> -->

                    <?php

                            }
                        }



                    ?>
                    <!-- <div class="col-12 col-md-4 d-flex flex-column justify-content-center" >
                        <div class="imgpart">
                                <img src="starkmotors/images-starkmotors/ourproducts/ourpro1.png" width="100%" />
                        </div>
                        <img src="starkmotors/images-starkmotors/ourproducts/img1.png" class="image-flex" width="35%" />
                    </div>


                    <div class="col-12 col-md-4 d-flex flex-column justify-content-center" >
                        <div class="imgpart">
                                <img src="starkmotors/images-starkmotors/ourproducts/ourpro2.png" width="100%" />
                        </div>
                        <img src="starkmotors/images-starkmotors/ourproducts/img2.png" class="image-flex" width="35%" />
                    </div>


                    <div class="col-12 col-md-4 d-flex flex-column justify-content-center" >
                        <div class="imgpart">
                                <img src="starkmotors/images-starkmotors/ourproducts/ourpro3.png" width="100%" />
                        </div>
                        <img src="starkmotors/images-starkmotors/ourproducts/img3.png" class="image-flex" width="35%" />
                    </div>


                    <div class="col-12 col-md-4 d-flex flex-column justify-content-center" >
                        <div class="imgpart">
                                <img src="starkmotors/images-starkmotors/ourproducts/ourpro4.png" width="100%" />
                        </div>
                        <img src="starkmotors/images-starkmotors/ourproducts/img4.png" class="image-flex" width="35%" />
                    </div>


                    <div class="col-12 col-md-4 d-flex flex-column justify-content-center" >
                        <div class="imgpart">
                                <img src="starkmotors/images-starkmotors/ourproducts/ourpro5.png" width="100%" />
                        </div>
                        <img src="starkmotors/images-starkmotors/ourproducts/img5.png" class="image-flex" width="35%" />
                    </div>


                    <div class="col-12 col-md-4 d-flex flex-column justify-content-center" >
                        <div class="imgpart">
                                <img src="starkmotors/images-starkmotors/ourproducts/ourpro6.png" width="100%" />
                        </div>
                        <img src="starkmotors/images-starkmotors/ourproducts/img6.png" class="image-flex" width="35%" />
                    </div>


                    <div class="col-12 col-md-4 d-flex flex-column justify-content-center" >
                        <div class="imgpart">
                                <img src="starkmotors/images-starkmotors/ourproducts/ourpro7.png" width="100%" />
                        </div>
                        <img src="starkmotors/images-starkmotors/ourproducts/img7.png" class="image-flex" width="35%" />
                    </div>


                    <div class="col-12 col-md-4 d-flex flex-column justify-content-center" >
                        <div class="imgpart">
                                <img src="starkmotors/images-starkmotors/ourproducts/ourpro8.png" width="100%" />
                        </div>
                        <img src="starkmotors/images-starkmotors/ourproducts/img8.png" class="image-flex" width="35%" />
                    </div>


                    <div class="col-12 col-md-4 d-flex flex-column justify-content-center" >
                        <div class="imgpart">
                                <img src="starkmotors/images-starkmotors/ourproducts/ourpro9.png" width="100%" />
                        </div>
                        <img src="starkmotors/images-starkmotors/ourproducts/img9.png" class="image-flex" width="35%" />
                    </div> -->


                    
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
=======
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Our Products</title>

    <!--linking CSS file-->
    <link rel="stylesheet" type="text/css" href="starkmotors/file-starkmotors/css/style.css"> 
    <!-- <link rel="stylesheet" type="text/css" href="starkmotors/file-starkmotors/css/main.css"> -->
    <!--<link rel="stylesheet" type="text/css" href="starkmotors/file-starkmotors/css/newcss.css">-->

    <!-- ANIMATIONS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <!-- <link rel="stylesheet" type="text/css"  href="starkmotors/file-starkmotors/animations/animate.min.css"> -->
    <script src="starkmotors/file-starkmotors/animations/wow.js"></script>
    <link rel="stylesheet" type="text/css" href="starkmotors/file-starkmotors/css/animations.css">

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


    <?php
    include"header.php";
    include"whatsapp3.php";
    ?>
    

    
<!-- Banner Section -->
<section>
        <div class="container-fluid text-center ourpro-bg about-bg" style="font-family:Noto Serif;">
            <h6 class="text-light padd-top100 animate__animated animate__zoomIn" >Home<span> > </span>Our Products</h6>
            <h1 class="text-light padd-bot100 animate__animated animate__zoomIn">Our Products</h1>      
        </div>
</section>


<!-- Main Section -->
<section>
            <h1 class="text-center p-2 mb-5" style="margin-top:-15px;font-weight:bolder;">Industrial Motors Manufacturer in Coimbatore</h1>


            <div class="container ml-adj mb-5">
                <div class="row d-flex flex-row justify-content-center">

                    <?php
                        include "db_conn.php";

                        $products="select * from products where status='1'";
                        $execute_products=mysqli_query($connect,$products);

                        if(mysqli_num_rows($execute_products)>0){
                            while($data=mysqli_fetch_array($execute_products)){
                                $id=$data['id'];
                                $main_image=$data['image'];
                                $sub_image=$data['sub_img'];
                                $pro_name=$data['pro_name'];
                                // echo $main_image;
                        ?>
                    <!-- <a> -->
                        <a href="pro_details.php?id=<?php echo $id;?>" style="text-decoration: none; color: black;" class="col-12 col-md-4 d-flex flex-column justify-content-center" >
                            <div class="imgpart">
                                <img src="adminpage/<?php echo $main_image;?>" width="100%" />
                                <!-- <p>Product Name</p> -->
                                    <!-- <img src="starkmotors/images-starkmotors/ourproducts/ourpro1.png" width="100%" /> -->
                            </div>
                        <!-- <img src="starkmotors/images-starkmotors/ourproducts/img1.png" class="image-flex" width="35%" /> -->
                        <img src="adminpage/<?php echo $sub_image;?>" class="image-flex" width="35%" />

                        <p class="pro_name_style"><?php echo $pro_name;?></p>
                    </a>
                <!-- </a> -->

                    <?php

                            }
                        }



                    ?>
                    <!-- <div class="col-12 col-md-4 d-flex flex-column justify-content-center" >
                        <div class="imgpart">
                                <img src="starkmotors/images-starkmotors/ourproducts/ourpro1.png" width="100%" />
                        </div>
                        <img src="starkmotors/images-starkmotors/ourproducts/img1.png" class="image-flex" width="35%" />
                    </div>


                    <div class="col-12 col-md-4 d-flex flex-column justify-content-center" >
                        <div class="imgpart">
                                <img src="starkmotors/images-starkmotors/ourproducts/ourpro2.png" width="100%" />
                        </div>
                        <img src="starkmotors/images-starkmotors/ourproducts/img2.png" class="image-flex" width="35%" />
                    </div>


                    <div class="col-12 col-md-4 d-flex flex-column justify-content-center" >
                        <div class="imgpart">
                                <img src="starkmotors/images-starkmotors/ourproducts/ourpro3.png" width="100%" />
                        </div>
                        <img src="starkmotors/images-starkmotors/ourproducts/img3.png" class="image-flex" width="35%" />
                    </div>


                    <div class="col-12 col-md-4 d-flex flex-column justify-content-center" >
                        <div class="imgpart">
                                <img src="starkmotors/images-starkmotors/ourproducts/ourpro4.png" width="100%" />
                        </div>
                        <img src="starkmotors/images-starkmotors/ourproducts/img4.png" class="image-flex" width="35%" />
                    </div>


                    <div class="col-12 col-md-4 d-flex flex-column justify-content-center" >
                        <div class="imgpart">
                                <img src="starkmotors/images-starkmotors/ourproducts/ourpro5.png" width="100%" />
                        </div>
                        <img src="starkmotors/images-starkmotors/ourproducts/img5.png" class="image-flex" width="35%" />
                    </div>


                    <div class="col-12 col-md-4 d-flex flex-column justify-content-center" >
                        <div class="imgpart">
                                <img src="starkmotors/images-starkmotors/ourproducts/ourpro6.png" width="100%" />
                        </div>
                        <img src="starkmotors/images-starkmotors/ourproducts/img6.png" class="image-flex" width="35%" />
                    </div>


                    <div class="col-12 col-md-4 d-flex flex-column justify-content-center" >
                        <div class="imgpart">
                                <img src="starkmotors/images-starkmotors/ourproducts/ourpro7.png" width="100%" />
                        </div>
                        <img src="starkmotors/images-starkmotors/ourproducts/img7.png" class="image-flex" width="35%" />
                    </div>


                    <div class="col-12 col-md-4 d-flex flex-column justify-content-center" >
                        <div class="imgpart">
                                <img src="starkmotors/images-starkmotors/ourproducts/ourpro8.png" width="100%" />
                        </div>
                        <img src="starkmotors/images-starkmotors/ourproducts/img8.png" class="image-flex" width="35%" />
                    </div>


                    <div class="col-12 col-md-4 d-flex flex-column justify-content-center" >
                        <div class="imgpart">
                                <img src="starkmotors/images-starkmotors/ourproducts/ourpro9.png" width="100%" />
                        </div>
                        <img src="starkmotors/images-starkmotors/ourproducts/img9.png" class="image-flex" width="35%" />
                    </div> -->


                    
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
>>>>>>> 20b626fd5bf942b2ade2b5f4d8dc4f2afbe87b58
</html>