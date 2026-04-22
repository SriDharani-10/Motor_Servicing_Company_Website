<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Speed Motors</title>

    <!-- ANIMATIONS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <!-- <link rel="stylesheet" type="text/css"  href="starkmotors/file-starkmotors/animations/animate.min.css"> -->
    <script src="starkmotors/file-starkmotors/animations/wow.js"></script>
    <link rel="stylesheet" type="text/css" href="starkmotors/file-starkmotors/css/animations.css">


	<!--linking CSS file-->
	<!-- <link rel="stylesheet" type="text/css" href="starkmotors/file-starkmotors/css/main.css"> -->
	<link rel="stylesheet" type="text/css" href="starkmotors/file-starkmotors/css/style.css">
    <!-- <link rel="stylesheet" type="text/css" href="starkmotors/file-starkmotors/css/new.css"> -->
    <!-- <link rel="stylesheet" type="text/css" href="starkmotors/file-starkmotors/css/animations.css"> -->

	<!--Attaching Favicon-->
	<link rel="icon" type="img/png" href="starkmotors/images-starkmotors/faviconnew.png"/>
    <!-- <link rel="icon" type="img/png" href="starkmotors/images-starkmotors/Home/logonew.png"/> -->

	<!--Attaching Bootstrap>-->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Font Awesome CDN (latest v6) -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
    <!-- <script src="https://kit.fontawesome.com/YOUR_PRO_KIT_CODE.js" crossorigin="anonymous"></script> -->

    <!--Attaching FontAwesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Swiper -->
    <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
/>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

</head>


<style>
.myProductsSwiper {
  width: 100%;
  overflow: hidden;
}

.myProductsSwiper .swiper-slide {
  flex-shrink: 0;
  width: 25%;           /* 4 slides visible */
  box-sizing: border-box;
}

</style>
<body>


<?php
    // include"header.php";
    include"whatsapp3.php";
    ?>

    

<section style="z-index: 9998!important;">
<!--Header(included in PHP)-->    

    <div class="header d-flex flex-row justify-content-between pt-md-2" id="head" style="z-index:2">
            <!--Logo image-->
            <div>
                <img src="starkmotors/images-starkmotors/Home/logonew.png" class="logo" /> 
            </div>

            <!--Header Elements-->
            <div class="inner-header-style d-flex flex-row justify-content-row" id="elements">
                <a href="index.php" class="header-element text-dark" style="font-family:Patua One;font-size:17px ;">Home</a>
                <a href="about.php" class="header-element text-dark" style="font-family:Patua One;font-size:17px ;">About Speed Motors</a>
                <a href="ourproducts.php" class="header-element text-dark" style="font-family:Patua One;font-size:17px ;">Our Products</a>
                <a href="testimonials.php" class="header-element text-dark" style="font-family:Patua One;font-size:17px ;">Testimonials</a>
                <a href="enquiry.php" class="header-element text-dark" style="font-family:Patua One;font-size:17px ;">Enquiry</a>
                <a href="contactus.php" class="header-element text-dark" style="font-family:Patua One;font-size:17px ;">Gallery</a>
                <a href="contactus.php" class="header-element text-dark" style="font-family:Patua One;font-size:17px ;">Contact us</a>
            </div>

            <!--HamBurger Icon-->
            <div>
                <img src="starkmotors/images-starkmotors/hamburger.png" class="hamburger" />            
            </div>

    </div>
	

    <!--Banner Section-->
    <div>
    	<img src="starkmotors/images-starkmotors/Home/pic1.png" class="banner"/>
    </div>

    <!-- Banner Text -->
    <div class="banner-text">
        <h1 class="wow animate__animated animate__slideInDown" style="font-family:Noto Serif;">Welcome to Speed Motors</h1>
        <p class="wow animate__animated animate__slideInLeft" style="font-family:Noto Serif;">Proven Quality</p>
        <a href="contactus.php"><button class="moreabout wow animate__animated animate__slideInUp">Contact us</button></a>
    </div>



    <!--Motor Section 2-->
    <section style="margin-top:-240px">
    	<div class="container">
    		<div class="row">

    			<!--Left-->

    			<div class="col-12 col-lg-6 p-5">
    				<img src="starkmotors/images-starkmotors/Home/industrial-motors.png" class="ind-mot wow animate__animated animate__bounceInLeft" style="--animate-delay:0.5s" />

    				<img src="starkmotors/images-starkmotors/Home/cert.png" class="cert pc-view animate__animated animate__pulse animate__infinite" />
    			</div>


    			<!--Right-->

    			<div class="col-12 col-lg-6 spacing-styles text-left p-5">
    				<h1 class="all-heads wow animate__animated animate__slideInRight ">Speed Motors</h1>

    				<p class="all-para wow animate__animated animate__slideInRight i-delay-a">Established by Mr. C. Muthusami in Coimbatore in 1984, Speed Motors is a leading electric motor manufacturer in India. Combining extensive experience, we provide innovative, energy-efficient solutions, earning a solid reputation among major Indian companies nationwide.</p>

    				<h6 class="wow animate__animated animate__slideInRight i-delay-b" style="font:20px Manrope,sans-serif;font-weight: 600;">We are the Leading manufacturer of</h6>

    				<ul class="icon wow animate__animated animate__slideInRight i-delay-c" style="font:16px Rubik,sans-serif;line-height: 1.75;list-style: none;">
    					<li class="wow animate__animated animate__slideInRight i-delay-d icon"> Single Phase Motors</li>
    					<li class="wow animate__animated animate__slideInRight i-delay-e"> Three Phase Motors</li>
    					<li class="wow animate__animated animate__slideInRight i-delay-f"> Vibromotor</li>
    					<li class="wow animate__animated animate__slideInRight i-delay-g"> Two Speed Single Winding</li>
    					<li class="wow animate__animated animate__slideInRight i-delay-h"> Bench Grinders</li>
    					<li class="wow animate__animated animate__slideInRight i-delay-i"> Coolant Pumps</li>
    					<li class="wow animate__animated animate__slideInRight i-delay-j"> Brake Motors</li>
    					<li class="wow animate__animated animate__slideInRight i-delay-k"> Cooling Towers</li>
    					<li class="wow animate__animated animate__slideInRight i-delay-l"> Inverter Duty Motors</li>
    					<li class="wow animate__animated animate__slideInRight i-delay-m"> Hollow Shafts</li>
    				</ul>
    			</div>
    		</div>
    	</div>
    </section>

    

    <!--Motor Section 3-->

    <section>
            <div class="container style-sec">
            <div class="row blur-style">

                <div class="col-12 col-md-6 col-lg-3 text-center wow animate__animated animate__zoomIn">
                    <img src="starkmotors/images-starkmotors/Home/goodbye.png" class="imgsize"/>
                    <h1>40+</h1>
                    <p>Years of Experience</p>
                </div>

                <div class="col-12 col-md-6 col-lg-3 text-center border1 wow animate__animated animate__zoomIn i-d-one">
                    <img src="starkmotors/images-starkmotors/Home/quality.png" class="imgsize"/>
                    <h1>100%</h1>
                    <p>Quality Adherence</p>
                </div>

                <div class="col-12 col-md-6 col-lg-3 text-center border2 wow animate__animated animate__zoomIn i-d-two">
                    <img src="starkmotors/images-starkmotors/Home/collaboration.png" class="imgsize"/>
                    <h1>1250+</h1>
                    <p>Products</p>
                </div>

                <div class="col-12 col-md-6 col-lg-3 text-center wow animate__animated animate__zoomIn i-d-three">
                    <img src="starkmotors/images-starkmotors/Home/custsat.png" class="imgsize"/>
                    <h1>100%</h1>
                    <p>Customer Satisfaction</p>
                </div>
            </div> 
        </div>
        
    </section>


    <!--Our Products Section-->
    <section>
        <h1 class="all-heads text-center m-5 wow animate__animated animate__bounceIn">Our Products</h1>

        <!--Row Elements-->
        <div class="swiper myProductsSwiper ">
            <div class="swiper-wrapper ">

                <div class="swiper-slide p-5 p-lg-2">
                    <div class="cards">
                        <img src="starkmotors/images-starkmotors/Home/vibrator.png" class="motor-pics"/>
                    </div>
                    <h4 class="text-center mt-4">Vibrator</h4>
                </div>

                <div class="swiper-slide p-5 p-lg-2">
                    <div class="cards">
                        <img src="starkmotors/images-starkmotors/Home/coolant-pump.png" class="motor-pics"/>
                    </div>
                    <h4 class="text-center mt-4">Coolant Pumps</h4>
                </div>

                <div class="swiper-slide p-5 p-lg-2">
                    <div class="cards">
                        <img src="starkmotors/images-starkmotors/Home/singlephase.png" class="motor-pics"/>
                    </div>
                    <h4 class="text-center mt-4">Single Phase Motors</h4>
                </div>

                <div class="swiper-slide p-5 p-lg-2">
                    <div class="cards">
                        <img src="starkmotors/images-starkmotors/Home/threephase.png" class="motor-pics"/>
                    </div>
                    <h4 class="text-center mt-4">Three Phase Motors</h4>
                </div>

                <div class="swiper-slide p-5 p-lg-2">
                    <div class="cards">
                        <img src="starkmotors/images-starkmotors/Home/inverterduty.png" class="motor-pics"/>
                    </div>
                    <h4 class="text-center mt-4">Inverter Duty Motors</h4>
                </div>

                <div class="swiper-slide p-5 p-lg-2">
                    <div class="cards">
                        <img src="starkmotors/images-starkmotors/Home/brakemotor.png" class="motor-pics"/>
                    </div>
                    <h4 class="text-center mt-4">Brake Motors</h4>
                </div>

                <div class="swiper-slide p-5 p-lg-2">
                    <div class="cards">
                        <img src="starkmotors/images-starkmotors/Home/coolanttower.png" class="motor-pics"/>
                    </div>
                    <h4 class="text-center mt-4">Coolant Towers</h4>
                </div>

                <div class="swiper-slide p-5 p-lg-2">
                    <div class="cards">
                        <img src="starkmotors/images-starkmotors/Home/twospeedsinglewinding.png" class="motor-pics"/>
                    </div>
                    <h4 class="text-center mt-4">Two Speed Single Winding</h4>
                </div>
            </div>
        </div>

        <div class="text-center">
        <a href="ourproducts.php">
            <button class="explore">
                Explore More
            </button>
        </a>
        </div>

    </section>



    <!--Section 3-->
    <section>
        <div class="container mt-5">
        <div class="row">

            <div class="col-12 col-md-6 p-5 pt-md-5 spacing-styles text-left">
                <h2 class="mt-md-5 wow animate__animated animate__slideInLeft" style="font: 40px Manrope,sans-serif; font-weight: 600;">Why we are the Best</h2>

                <p class="wow animate__animated animate__slideInLeft" style="font: 16px Rubik,sans-serif;line-height: 1.5;">With over 40 years of unparalleled expertise, Stark Motors excels with 100% quality assurance, a diverse product range, and unmatched customer satisfaction, solidifying our position as the best in the industry.</p>


                <p class="wow animate__animated animate__slideInLeft" style="font: 16px Rubik,sans-serif;line-height: 1.5;">With rigorous quality assurance processes spanning over 40 years, our motors undergo meticulous testing, ensuring unparalleled reliability and performance. We pride ourselves on delivering innovative, energy-efficient solutions, making Stark Motors the trusted choice for superior electric motors in the market.</p>
            </div>

            <div class="wow animate__animated animate__slideInRight col-12 col-md-6">
                <img src="starkmotors/images-starkmotors/Home/best.png" width="100%"/>

                <img src="starkmotors/images-starkmotors/Home/bestquality.png" width="50%" class="animate__animated animate__pulse animate__infinite bestquality" />

            </div>
        </div>
        </div>
    </section>
    


    <!--Animation Section-->
    <section>
        <div class="d-flex flex-row justify-content-around bg-container ml-3 mr-3" style="height:350px;overflow: hidden;">
            <div class="text-left" style="color:white;">
                <h2 style="font: 49px Manrope sans-serif;">Speed Motors</h2>
                <p>Your Engine for Excellence Where Quality Meets Revolution</p>
                <a href="about.php"><button class="moreabout">More about us</button></a>
            </div>
            <div>
                <img src="starkmotors/images-starkmotors/Home/rolling_small.png" class="roll-small spin-image" />
                <img src="starkmotors/images-starkmotors/Home/rolling.png"  class="roll-big spin-image" />
            </div>
            
        </div>
        <!-- <p class="unit-style">A Unit of Starkmotors</p> -->
    </section>




    <!--FAQ Section-->
    <section>
        <div class="container">
            <h1 class="text-center mt-5 wow animate__animated animate__bounceIn">FAQ</h1>
            <div class="row">
                <!--Left-->
                <div class="col-12 col-lg-6 mt-5">
                    <div class="accordion mt-4" id="accordionExample">

                        <!--Item1-->

                        <div class="accordion-item margin-alignment">
                            <h2 class="accordion-header">
                              <button class="accordion-button collapsed card-header-style" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                What sets us apart?
                              </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse card-style" data-bs-parent="#accordionExample">
                                <div class="accordion-body card-style">
                                    a) We have 2 units for manufacturing,<br>
                                    b) For customized motors, speed motors Kalapatti, CM/L: 6500069511<br>
                                    c) For standard 3-phase motors, Speed Engineers, CM/L: 6500059112<br>
                                    Complete self-sufficient in-house machining facilities with state of art facilities at Speed Engineering.
                              </div>
                            </div>
                          </div>


                          <!--Item2-->

                          <div class="accordion-item margin-alignment">
                            <h2 class="accordion-header">
                              <button class="accordion-button collapsed card-header-style" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                What type of motors does Speed Motors manufacturing?
                              </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body card-style">
                                    Speed Motors manufactures a diverse range of motors, including Single-Phase Motors, Three-Phase Motors, Inverter Duty Motors, Brake Motors, Cooling Towers, Coolant Pumps, Hollow Shafts, Vibrant Motors, and more.
                              </div>
                            </div>
                          </div>


                          <!--Item3-->

                          <div class="accordion-item margin-alignment">
                            <h2 class="accordion-header">
                              <button class="accordion-button collapsed card-header-style" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                How does speed motors ensure the quality of its products?
                              </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                              <div class="accordion-body card-style">
                                Speed Motors is committed to rigorous quality assurance. Our manufacturing processes adhere to stringent standards, and each motor undergoes thorough testing to ensure reliability, efficiency, and compliance with industry benchmarks.
                              </div>
                            </div>
                          </div>


                        <!--Item4-->

                          <div class="accordion-item margin-alignment">
                            <h2 class="accordion-header">
                              <button class="accordion-button collapsed card-header-style" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                Can speed motors accomodate specific motors requirements for diverse applications?
                              </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                              <div class="accordion-body card-style">
                                Speed Motors focuses on delivering a versatile range of motors to meet diverse industry needs. While we don't provide custom solutions, our broad selection caters to various applications.
                              </div>
                            </div>
                          </div>

                        </div>
                    </div>
                
                <!--Right-->
                <div class="col-12 col-lg-6 mt-4">
                    <img src="starkmotors/images-starkmotors/Home/faq.png" width="100%" class="wow animate__animated animate__shakeX animate__slower" style="--animate-duration:1.5s;" />
                </div>
            </div>
        </div>
    </section>


    <!-- Testimonials -->
    <section>
        <div class="text-center mt-5 p-5 wow animate__animated animate__bounceIn">
            <p class="client-style">Have a look at what our customer says</p>
            <h1 class="all-heads cust-style">Testimonials</h1>
        </div>




         <!-- Testimonials Section -->
  <div class="testimonial-section">
    <div class="swiper testimonialSwiper">
      <div class="swiper-wrapper">

        <!-- Each testimonial -->
        <div class="swiper-slide">
          <div class="test-card">
            <img src="starkmotors/images-starkmotors/Testimonials/rating.png"> 
            <p class="p-style">Stark Motors exceeded my expectations! Their motors are reliable and efficient.</p>
            <div class="cust-name">
              <img src="starkmotors/images-starkmotors/Testimonials/boy.png" class="boy-image" />
              <p>Sujith</p>
            </div> 
          </div>
        </div>

        <div class="swiper-slide">
          <div class="test-card">
            <img src="starkmotors/images-starkmotors/Testimonials/rating.png"> 
            <p class="p-style">Choosing Stark Motors was a wise decision. Quality motors, exceptional service.</p>
            <div class="cust-name">
              <img src="starkmotors/images-starkmotors/Testimonials/boy.png" class="boy-image" />
              <p>Rajesh</p>
            </div> 
          </div>
        </div>

        <!-- 🔽 Repeat same structure for all testimonials 🔽 -->
        <div class="swiper-slide">
          <div class="test-card">
            <img src="starkmotors/images-starkmotors/Testimonials/rating.png"> 
            <p class="p-style">Impressed with Stark Motors' commitment to excellence. Motors built to last.</p>
            <div class="cust-name">
              <img src="starkmotors/images-starkmotors/Testimonials/boy.png" class="boy-image" />
              <p>Sanjay</p>
            </div> 
          </div>
        </div>

        <div class="swiper-slide">
          <div class="test-card">
            <img src="starkmotors/images-starkmotors/Testimonials/rating.png"> 
            <p class="p-style">Stark Motors delivers on promises. Top-notch motors, highly recommended!</p>
            <div class="cust-name">
              <img src="starkmotors/images-starkmotors/Testimonials/boy.png" class="boy-image" />
              <p>Rathish</p>
            </div> 
          </div>
        </div>

        <!-- Add the rest of your testimonials here -->
        
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

        new WOW().init(); 

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
  const mySwiper = new Swiper(".myProductsSwiper", {
    loop: true,                // infinite loop
    slidesPerView: 4,          // visible slides at a time
    slidesPerGroup: 1,         // move one by one
    speed: 600,                // transition speed in ms
    autoplay: {
      delay: 3000,             // wait 3s before sliding
      disableOnInteraction: false,
    },
    // optional: if you want arrows or pagination
    // navigation: {
    //   nextEl: '.swiper-button-next',
    //   prevEl: '.swiper-button-prev',
    // },
    // pagination: {
    //   el: '.swiper-pagination',
    //   clickable: true,
    // },
  });
</script>
 <script>
    var testimonialSwiper = new Swiper(".testimonialSwiper", {
      slidesPerView: 4,
      loop: true,
      speed: 9000, // speed of transition (ms)
      autoplay: {
        delay: 0, // no delay between transitions
        disableOnInteraction: false,
      },
      freeMode: true,
      freeModeMomentum: false, // makes it continuous
      grabCursor: true,
      navigation: {
        nextEl: ".testimonialSwiper .swiper-button-next",
        prevEl: ".testimonialSwiper .swiper-button-prev",
      },
      pagination: {
        el: ".testimonialSwiper .swiper-pagination",
        clickable: true,
      },
      breakpoints: {
        0: { slidesPerView: 1 },
        768: { slidesPerView: 2 },
        1024: { slidesPerView: 3 },
        1400: { slidesPerView: 4 }
      }
    });
  </script>

</section>
</body>
</html>