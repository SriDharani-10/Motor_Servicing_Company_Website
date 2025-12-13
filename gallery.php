<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gallery</title>

    <!--linking CSS file-->
    <link rel="stylesheet" type="text/css" href="starkmotors/file-starkmotors/css/style.css"> 
    <!-- <link rel="stylesheet" type="text/css" href="starkmotors/file-starkmotors/css/style2.css">  -->
    <!-- <link rel="stylesheet" type="text/css" href="starkmotors/file-starkmotors/css/main.css"> -->
    <!-- <link rel="stylesheet" type="text/css" href="starkmotors/file-starkmotors/css/new.css"> -->

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
<style>
    .gal-img-name{
        font-weight: 600;
        font-size: 25px;
    }
</style>
<body>
    
    <?php
    include"header.php";
    include"whatsapp3.php";
    ?>
    

<section>
    <div class="container-fluid text-center about-bg contact-bg" style="font-family:Noto Serif;">
        <h6 class="text-light padd-top100 animate__animated animate__zoomIn">Home<span> > </span>Gallery</h6>
        <h1 class="text-light padd-bot100 animate__animated animate__zoomIn">Gallery</h1>
    </div>
</section>

<section>
    <div class="container">
        <div class="row">

            <?php 
            include "db_conn.php";
            $selecting="select * from gallery where status='1'";
            $execute_select=mysqli_query($connect,$selecting);
            if(mysqli_num_rows($execute_select)>0){
                while ($data=mysqli_fetch_array($execute_select)) {
                    
                    $image_url_stored=$data['image'];
                    $image_name_stored=$data['img_name'];
           
            ?>
            <div class="col-12 col-md-4 img-align">
                <img class="gallery-image" src="adminpage/<?php echo $image_url_stored;?>"/>
                <p class="gal-img-name"><?php echo $image_name_stored;?></p>
            </div>

        <?php }
    }?>
            
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