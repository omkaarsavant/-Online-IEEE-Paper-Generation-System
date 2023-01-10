<?php
@session_start();
require 'db.php';
if($_SESSION["username"]) {
	$id =$_SESSION["id"];
//echo $id;
	
}
else{
	//header("location: login.php");
}
?>

<?php
@session_start();
require 'db.php';
if($_SESSION["username"]) {
	$id =$_SESSION["id"];
	//echo $id;
	
}
else{
	header("location: login.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>IEEE-Paper - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,400,500,600,700" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Rapid - v4.7.1
  * Template URL: https://bootstrapmade.com/rapid-multipurpose-bootstrap-business-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="index.html">IEEE </a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

    <!-- .navbar -->
<?php include "navbar.php";?>
     

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="clearfix">
    <div class="container d-flex h-100">
      <div class="row justify-content-center align-self-center" data-aos="fade-up">
        <div class="col-lg-6 intro-info order-lg-first order-last" data-aos="zoom-in" data-aos-delay="100">
          <h2>Welcome researcher, <br>we've been  <span>expecting you.!</span></h2>
          <div>
            <a href="#about" class="btn-get-started scrollto">Get Started</a>
          </div>
        </div>

        <div class="col-lg-6 intro-img order-lg-last order-first" data-aos="zoom-out" data-aos-delay="200">
          <img src="assets/img/intro-img.svg" alt="" class="img-fluid">
        </div>
      </div>

    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
   

    <!-- ======= Services Section ======= -->
  

    <!-- ======= Why Us Section ======= -->
 

    <!-- ======= Call To Action Section ======= -->
   

    <!-- ======= Features Section ======= -->
   

    <!-- ======= Portfolio Section ======= -->
<!-- End Portfolio Section -->

    <!-- ======= Testimonials Section ======= -->
  <!-- End Testimonials Section -->

    <!-- ======= Team Section ======= -->
   <!-- End Team Section -->

    <!-- ======= Clients Section ======= -->
   <!-- End Clients Section -->

    <!-- ======= Pricing Section ======= -->
    <!-- End Pricing Section -->

    <!-- ======= F.A.Q Section ======= -->
    <!-- End F.A.Q Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
	<br><br>
	    <div class="col-lg-6" style="margin:auto">

      <table class="table table-striped">
    <thead>
      <tr>
      	<th>#Id</th>
      	 <th>Project Title</th>
        <th>Date</th>
        <th>Action</th>
      
        
      </tr>
    </thead>
    <tbody>
    <?php
    $sql = "SELECT * FROM ieee_content where userid='$id'";
    $result = $con->query($sql);
    if ($result->num_rows > 0) {
    // output data of each row
   while($row = $result->fetch_assoc()) {
   	echo '<tr>
	        <td>'.$row["id"].'</td>
	         <td>'.$row["project_title"].'</td>
	        <td>'.$row["date"].'</td>
	        <td>
          <div class="row">
           <div class="col-6">
            <a href="view_ieee_paper.php?id='.$row["id"].'">View Paper</a>
          </div>
           <div class="col-6">
           <a href="delete_paper.php?id='.$row["id"].'" style="color:red">Delete</a>
          </div>
          </div>
        
          </td>
	       
          </tr>
   	';
   }
}
?>

      
    
    </tbody>
  </table>

          </div>
	<br>
	<br>
	<?php include "footer.php";?>
 <!-- End  Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>