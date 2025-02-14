<!doctype html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Home | AFA Bulk SMS</title>
<link rel="stylesheet" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/lightbox/dist/css/lightbox.min.css">
<link rel="stylesheet" href="assets/css/styles.css" type="text/css" />
<!--[if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
</head>
<body>
<div id="container">
    <header>
    	<h1><a href="/">AFA<span>BULK SMS</span></a></h1>
        <h2>Laugh, giggle, gaffaws</h2>
    </header>
    <nav>
    	<ul>
        	<li class="start selected"><a href="http://localhost/bartassms/index.php">Home</a></li>
            <li ><a href="about_us.php">About Us</a></li>
            <li><a href="our_vision.php">Our Vision</a></li>
            <li><a href="our_mission.php">Our Mission</a></li>
            <li><a href="our_gallery.php">Gallery</a></li>
            <li><a href="contact.php">Contact</a></li>
        </ul>
    </nav>

	
 
   <!-- slider starts -->
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <?php 
            require_once 'config/dbc.php';
            $getAllSlideshows = mysqli_query($connection, "SELECT * FROM media WHERE status='ACTIVE' AND media_type='slideshow'") or die(mysqli_error($connection));
            $isActive = true; 
            while ($viewAllSlideshows = mysqli_fetch_array($getAllSlideshows)) {
        ?>
            <div class="carousel-item <?php echo $isActive ? 'active' : ''; ?>">
                <img src="uploads/<?php echo $viewAllSlideshows['media_img'] ?>" class="d-block w-100" alt="<?php echo $viewAllSlideshows['title']; ?>">
            </div>
        <?php 
                $isActive = false;
            } 
        ?>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
   <!-- slider ends -->