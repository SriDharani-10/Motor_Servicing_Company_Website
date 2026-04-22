<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contactus</title>

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

<section>
    <div class="container-fluid text-center about-bg contact-bg" style="font-family:Noto Serif;">
        <h6 class="text-light padd-top100 animate__animated animate__zoomIn">Home<span> > </span>Contact us</h6>
        <h1 class="text-light padd-bot100 animate__animated animate__zoomIn">Contact us</h1>
    </div>
</section>

<!-- Main Section -->
<section>
    <div class="container-fluid" style="margin-top:-50px; margin-bottom: 10px;">
        <div class="row">
            <div class="col-12 col-md-4 section-alignment">
                <div class="text-center">
                    <img src="starkmotors/images-starkmotors/Contactus/phone.png" class="contact-image animate__animated animate__pulse animate__infinite"/>
                    <h2 class="subhead-style">Phone</h2>
                </div>
                <div class="text-left section-alignment">
                    <p class="details-style"><span class="span-text-style">Sales:</span> + 91 94426 14612, + 91 98433 14612</p>
                    <p class="details-style"><span class="span-text-style">Office:</span> + 91 98430 15612</p>
                    <p class="details-style"><span class="span-text-style">Landline:</span> 0422-4274969, 0422-4385612, 0422-2627672, 0422-2627612</p>
                </div>
            </div>


            <div class="col-12 col-md-4 section-alignment address-border">
                <div class="text-center">
                    <img src="starkmotors/images-starkmotors/Contactus/address.png" class="contact-image animate__animated animate__pulse animate__infinite"/>
                    <h2 class="subhead-style">Address</h2>
                </div>
                <div class="text-left section-alignment" style="text-align: justify;">
                    <p class="details-style"><span class="span-text-style">Address-1:</span> Stark Motors, 96, Sitra Road, Kalappatti, Coimbatore-641048, Tamil Nadu</p>
                    <p class="details-style"><span class="span-text-style">Address-2:</span> Stark Engineers, 3/360-363 karuvalur road, Manickampalayam, Coimbatore - 641 107, Tamil Nadu</p>
                </div>
            </div>


            <div class="col-12 col-md-4 section-alignment">
                <div class="text-center">
                    <img src="starkmotors/images-starkmotors/Contactus/email.png" class="contact-image animate__animated animate__pulse animate__infinite"/>
                    <h2 class="subhead-style">Email</h2>
                </div>
                <div class="text-center section-alignment">
                    <p class="details-style">marketing@speedmotors</p>
                </div>
            </div>
        </div>
    </div>
</section>

<div>

<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3360.4855683042188!2d76.98326277504533!3d11.014824089148798!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba859ddb2a752d7%3A0xea40d396931db881!2sSRI%20DHARANI%20INDUSTRIES!5e1!3m2!1sen!2sin!4v1758207340144!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

<!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3916.053821371816!2d77.0338623!3d11.0345889!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba858526b5c0591%3A0x6c452206816788d4!2sPSG%20College%20of%20Arts%20and%20Science!5e0!3m2!1sen!2sin!4v1757955635134!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> -->



</div>

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

<script>
  new WOW().init();
</script>

</body>
</html>