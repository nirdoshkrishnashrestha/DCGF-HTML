
<?php include("inc/header.php"); ?>

<?php include("inc/nav.php"); ?> 


<section class="container-page">
<div class="container">
<h1><a href="#">तस्वीर ग्यालरी</a> <span>एल्बम नाम</span></h1>
  
<div class="row">
	
<div class="col-lg-9">
<div class="content-page">

	<div class="gallery-page">
		<div class="row">
			
			
			<div class="col-lg-3 col-md-4">
				<div class="thumbsize">
					<div class="gallery-thumbnail">
						<a href="images/gallery/1.jpg"><img src="images/gallery/1.jpg" /></a>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-4">
				<div class="thumbsize">
					<div class="gallery-thumbnail">
						<a href="images/gallery/2.jpg"><img src="images/gallery/2.jpg" /></a>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-4">
				<div class="thumbsize">
					<div class="gallery-thumbnail">
						<a href="images/gallery/3.jpg"><img src="images/gallery/3.jpg" /></a>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-4">
				<div class="thumbsize">
					<div class="gallery-thumbnail">
						<a href="images/gallery/4.jpg"><img src="images/gallery/4.jpg" /></a>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-4">
				<div class="thumbsize">
					<div class="gallery-thumbnail">
						<a href="images/gallery/5.jpg"><img src="images/gallery/5.jpg" /></a>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-4">
				<div class="thumbsize">
					<div class="gallery-thumbnail">
						<a href="images/gallery/6.jpg"><img src="images/gallery/6.jpg" /></a>
					</div>
				</div>
			</div>
		</div>
	</div>
	
</div>
</div>
	

	<?php include("inc/rightpannel.php"); ?>

	
</div>
	
	
</div>  
</section>
  
<?php include("inc/bottom-link.php"); ?>
<?php include("inc/footer.php"); ?> 

<link rel="stylesheet" type="text/css" href="css/jquery.lightbox.css">  
<script src="js/jquery.lightbox.js"></script>
<script>
  // Initiate Lightbox
  $(function() {
    $('.thumbsize a').lightbox(); 
  });
</script>

	  
