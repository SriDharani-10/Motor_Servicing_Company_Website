
  <div id="head-admin">

    <!-- Top Section -->
  <div class="d-flex flex-row justify-content-between top-style shadow">
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

    <div class="d-flex flex-row justify-content-between">
      <a href="home.php" style="text-decoration: none; color: inherit;">
        <h4 class="mb-4">
          <img src="images-admin/home-button.png" >
        </h4>
      </a>
      
     <!--  <h4 class="mb-4">
        <img src="images-admin/left-arrow.png" width="75%" class="mt-2" onclick="hideSidebar()" style="cursor: pointer;" />
      </h4> -->
      
    </div>

    <!-- Gallery -->
    <div class="mb-3">
      <button class="btn btn-primary w-100 text-left d-flex justify-content-between align-items-center font-style-bar extra-size"
              data-toggle="collapse" data-target="#galleryMenu" aria-expanded="false">
        Gallery
        <!-- <i class="fa fa-caret-down rotate"></i> -->
      </button>
      <div id="galleryMenu">
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
      <div id="productsMenu">
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


      <!-- Bootstrap JS -->
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>


  </div>
 



    <!-- Animate.css -->




<!-- MENU ICON -->
<!-- <div id="menuIcon" class="animate__animated" style="display:none;">
    <img src="images-admin/hamburgernew.png" onclick="showSidebar()" class="menuicon-style">
</div> -->










<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

<!-- <script>
function hideSidebar() {
  const sidebar = document.getElementById("sidebar");
  const menuIcon = document.getElementById("menuIcon");

  sidebar.classList.add("animate__fadeOutLeft");
  // menuIcon.classList.add("animate__fadeIn");

  sidebar.addEventListener("animationend", function handler() {
    sidebar.style.display = "none";
    menuIcon.classList.add("animate__fadeIn");
    menuIcon.style.display = "block";
    // menuIcon.classList.add("animate__fadeIn");
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
}
</script> -->

<style>
  
  #head-admin{
    position: fixed;
    width: 100%;
    z-index: 1000;
}

#sidebar{
    position: fixed;
    z-index: 999;
    margin-top: 77px;
    height: 70vh;
}
</style>