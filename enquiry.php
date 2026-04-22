<?php 
    
    include 'db_conn.php';

    // -----------------------------INSERTING--------------------------
    if(isset($_POST['submit'])){
        $name=$_POST['name'];
        $phone=$_POST['phone'];
        $email=$_POST['email'];
        $product=$_POST['motors'];
        $message=$_POST['message'];

        $inserting="insert into enquiry set name='$name', phone='$phone', email='$email', product='$product', message='$message'";
        $execute_insert=mysqli_query($connect,$inserting);
        if($execute_insert){
            //     echo "inserted";
            
        }
        else{
        //     echo "not inserted";
        }

    }


?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Enquiry</title>

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
    <div class="container-fluid text-center about-bg enquiry-bg" style="font-family:Noto Serif;">
        <h6 class="text-light padd-top100 animate__animated animate__zoomIn">Home<span> > </span>Enquiry</h6>
        <h1 class="text-light padd-bot100 animate__animated animate__zoomIn">Enquiry</h1>
    </div>
</section>




<!-- Form Section -->
<section>
    <form method="POST">
    <div class="container">
        <div class="container shadow form-alignment">
            <div class="row"> 
                <div class="col-12 col-md-6">
                    <label class="labelstyle">Name</label><br>
                    <input type="text" name="name" class="inputstyle innertext-style" /><br><br>
                </div>

                <div class="col-12 col-md-6">
                    <label class="labelstyle">Phone Number</label><br>
                    <input type="number" name="phone" class="inputstyle innertext-style" id="phoneinput" /><br><br>
                </div>

                <div class="col-12 col-md-6">
                    <label class="labelstyle">Email Address</label><br>
                    <input type="email" name="email" class="inputstyle innertext-style" /><br><br>
                </div>
            
                <div class="col-12 col-md-6">
                    <label class="labelstyle">Product</label><br>
                
                    <select name="motors" id="motorSelect" class="inputstyle innertext-style">
                        <option value="single-phase" selected>Single Phase Motor</option><br>
                    
                        <option value="three-phase">Three Phase Motor</option><br>
                    
                        <option value="two-speed">Two Speed Single Window</option><br>
                
                        <option value="bench-grinders">Bench Grinders</option><br>
            
                        <option value="inverter-duty">Inverter Duty Motors</option><br>
        
                        <option value="brake-motors">Brake Motors</option><br>

                        <option value="cooling-towers">Cooling Towers</option><br>
                    
                        <option value="coolant-pumps">Coolant Pumps</option><br>
                
                        <option value="hollow-shaft">Hollow Shaft</option><br>
            
                        <option value="vibrator-motors">Vibrator Motors</option><br>
        
                    </select><br><br>
                </div>

                <div class="col-12">
                    <label class="labelstyle">Your Message</label><br>
                    <textarea name="message" rows="10" cols="80" class="inputstyle inputstyle-text innertext-style" style="color: #030e6e;"></textarea><br><br>

                    <input class="moreabout submit-style" type="submit" value="Submit" name="submit" />
                </div>
                                
            </div>
        </div>
    </div>
</form>
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

    <script src="starkmotors/file-starkmotors/js/phone.js"></script>

    
</body>
</html>