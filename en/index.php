<?php include("inc/header.php"); ?>
<?php include("inc/nav.php"); ?>  

<!--

	<style>

		.notice-image img{
			width: 100%;
			position: relative;
		}
		
		.notice-image .btn-close{
			position: absolute;
			border-radius: 50%;
			right: 25px;
			top: 25px;
			font-size: 20px;
			padding: 10px;
		}
		
		
	</style>
-->


<!--

<div class="modal fade" id="noticeModal" aria-hidden="true" tabindex="-1">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-body">
      <div class="notice-image">
		  <img src="images/notice.jpg"/>
		  <button type="button" class="btn-close bg-light" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal"></button>
	  </div>
	  </div>
    </div>
  </div>
</div>
<div class="modal fade" id="exampleModalToggle2" aria-hidden="true" tabindex="-1">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-body">
        <div class="notice-image">
			<iframe class="w-100" height="650" src="download/invesetment-notice-306.pdf"></iframe>
		  <button type="button" class="btn-close bg-light"  data-bs-target="#exampleModalToggle3" data-bs-toggle="modal"></button>
	  </div>
      </div>
    </div>
  </div>
</div>
-->

<section class="highlights">
	<div class="container">
		<span>sdasds</span>
		<div class="marquee" id="mycrawler2">
			<i class="fas fa-chevron-circle-right me-1"></i><a href="#">1- Lorem Ipsum is simply</a>
			<i class="fas fa-chevron-circle-right me-1"></i><a href="#">2- Industry's standard</a>
			<i class="fas fa-chevron-circle-right me-1"></i><a href="#">3- Dummy text ever since the 1500s</a>
			<i class="fas fa-chevron-circle-right me-1"></i><a href="#" class="last">4- It has</a>
		</div>
	</div>
</section>


<section class="slider-banner">
<div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
	<button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="3" aria-label="Slide 4"></button>
	<button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="4" aria-label="Slide 5"></button>
	<button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="5" aria-label="Slide 6"></button>
<!--	<button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="6" aria-label="Slide 7"></button>-->
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="5000">
      <img src="images/slider/1.jpg" class="d-block w-100" alt="Deposit and Credit Guarantee Fund">
      <div class="carousel-caption d-md-block wow animate__animated animate__fadeInUp" data-wow-duration="1s">
        <h5>Welcome to CEO</h5>
        <p>DCGF staff welcoming newly appointed CEO Mr. Ramesh Ghimire.</p>
      </div>
    </div>
<!--
    <div class="carousel-item" data-bs-interval="5000">
      <img src="images/slider/2.jpg" class="d-block w-100" alt="Deposit and Credit Guarantee Fund">
      <div class="carousel-caption d-md-block wow animate__animated animate__fadeInUp" data-wow-duration="1s">
        <h5>Welcome program of CEO by DCGF Union.</h5>
        <p>DCGF's Union member welcoming newly appointed CEO Mr. Ramesh Ghimire.</p>
      </div>
    </div>
-->
    <div class="carousel-item" data-bs-interval="3000">
      <img src="images/slider/2.jpg" class="d-block w-100" alt="Deposit and Credit Guarantee Fund">
      <div class="carousel-caption d-md-block wow animate__animated animate__fadeInUp" data-wow-duration="1s">
        <h5>CEO Mr. Ramesh Ghimire</h5>
        <p>CEO Mr. Ramesh Ghimire after taking his seat.</p>
      </div>
    </div>
	<div class="carousel-item" data-bs-interval="3000">
      <img src="images/slider/3.jpg" class="d-block w-100" alt="Deposit and Credit Guarantee Fund">
      <div class="carousel-caption d-md-block wow animate__animated animate__fadeInUp" data-wow-duration="1s">
        <h5>Welcome & Greetings by Delegates of RBB.</h5>
        <p>Newly appointed CEO welcome and greet by CEO and other Delegates of Rastriya Banijya Bank. </p>
      </div>
    </div>
	<div class="carousel-item" data-bs-interval="3000">
      <img src="images/slider/4.jpg" class="d-block w-100" alt="Deposit and Credit Guarantee Fund">
      <div class="carousel-caption d-md-block wow animate__animated animate__fadeInUp" data-wow-duration="1s">
        <h5>Head of Departments</h5>
        <p>Glimpses of Head of Departments of DCGF.</p>
      </div>
    </div>
	<div class="carousel-item" data-bs-interval="3000">
      <img src="images/slider/5.jpg" class="d-block w-100" alt="Deposit and Credit Guarantee Fund">
      <div class="carousel-caption d-md-block wow animate__animated animate__fadeInUp" data-wow-duration="1s">
        <h5>Friendly Futsal Tournament</h5>
        <p>Glimpses of Friendly Futsal Tournament organized on the occasion of upcoming 49th anniversary of DCGF.</p>
      </div>
    </div>
	<div class="carousel-item" data-bs-interval="3000">
      <img src="images/slider/6.jpg" class="d-block w-100" alt="Deposit and Credit Guarantee Fund">
      <div class="carousel-caption d-md-block wow animate__animated animate__fadeInUp" data-wow-duration="1s">
        <h5>Blood Donation Campaigne</h5>
        <p>Glimpses of Blood donation program organized on the occasion of upcoming 49th anniversary of DCGF.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</section>



<section class="welcome">
<div class="container">
<div class="row">
	
	<div class="col-lg-6">
		<div class="row d-flex align-items-center">
			<div class="col-lg-5 col-md-12">
			<div class="welcome-img">
			<img src="images/building.png" alt=""/>
			</div>
			</div>
			<div class="col-lg-7 col-md-12">
<div class="welcome-txt">
<h1> Welcome!</h1>
	<div class="clearfix"></div>
	<span>Deposit & Credit Guarantee Fund</span>
	<hr>
<p>Financial stability is one of the topical issues that has been accorded increased attention from central bank, government, market players, borrowers and deposit insurer. As a deposit insurer, Deposit and Credit Guarantee Fund(DCGF) has started the deposit guarantee scheme in Nepal from the year 2010.</p>
<a href="about.php" class="btn btn-outline-primary" role="button"><i class="fas fa-bars me-1"></i> Read More</a>
</div>
</div>
			
		</div>
	</div>
	<div class="col-lg-6">
		<div class="ceo">
				<h1>Message from CEO</h1>
					<hr>
				
				<img class="ceo-image" src="images/ceo-sir.png" alt=""/>
										
				<p><strong>Dear Stakeholders,<br>
Warm Greeting to Everyone!!</strong></p>
<p>At the foremost, I would like to express my heartiest thank to our investors (viz. Government of Nepal &amp; Nepal Rastra Bank), BFIs and DCGF for their invaluable support and effort. Likewise, I am equally thankful to the Ministry of Finance and team for their guidance and kind cooperation. </p>
					
						<strong>Ramesh Ghimire</strong><br>
						<em>Chief Executive Officer</em><br>
			<a href="ceo.php" class="btn btn-outline-primary mt-2" role="button"><i class="fas fa-bars me-1"></i> Read More</a>
			</div>
	</div>


</div>
</div>
</section>




<section class="company-intro">
	<div class="container">
		<div class="row">
			<div class="col-lg-4 mb-4 mb-lg-0">
				<a href="#">
					<div class="intro-box wow animate__animated animate__fadeInUp h-100" data-wow-duration="1s">
					<i class="far fa-eye icon"></i>
					<span><h5>Vision</h5>
					Contributing in enhancing credibility towards the financial system of the country increasing the saving mobilization and access of the institutional credits to the targeted sectors and groups through deposit and credit guarantee.</span>
				</div>
				</a>
			</div>
			
			<div class="col-lg-4 mb-4 mb-lg-0">
				<a href="#">
					<div class="intro-box wow animate__animated animate__fadeInUp h-100"  data-wow-duration="1s" data-wow-delay="0.25s">
					<i class="fas fa-rocket icon"></i>
					<span><h5>Mission</h5>
					Establishing the Fund as a capable and effective guarantee service provider institution having developed reliable mechanism of guarantee.</span>
				</div>
				</a>
			</div>

			
			<div class="col-lg-4">
				<a href="objectives.php">
					<div class="intro-box wow animate__animated animate__fadeInUp h-100"  data-wow-duration="1s" data-wow-delay="0.5s">
					<i class="fas fa-chart-line icon"></i>
					<span><h5>Objectives</h5>
					•	To protect BFI's stress.<br>
•	To enhance deposit mobilization.<br>
•	To protect the small savers deposit as a financial safety net.

 Read more...</span>
				</div>
				</a>
			</div>
			
		</div>
	</div>

</section>



<section class="services-home">
	<div class="container">
		<div class="row">
			<div class="col-lg-6">
				<div class="dep-guarantee mb-5 mb-lg-0">
					<h1>Deposit Guarantee</h1>
					<p>DCGF guarantees the deposit of the natural person depositors upto Rs. 5 lakhs held with the commercial banks and financial institutions licensed by Nepal Rastra Bank.</p>
					
					<div class="row">
						<div class="col-lg-6 col-md-6">
							<div class="work-process wow animate__animated animate__fadeInRight" data-wow-duration="1s">
							  <div class="row d-flex align-items-center">
							  <div class="col-lg-2 col-md-1">
								  <div class="process-number">
									  1
								  </div>
							  </div>
							  <div class="col-lg-10 col-md-11">
								  <div class="process">
									  <h2>'A' Class Commercial Banks</h2>									  
								  </div>
							  </div>
							</div>
							</div>
						</div>
						
						<div class="col-lg-6 col-md-6">
							<div class="work-process wow animate__animated animate__fadeInRight" data-wow-duration="1s" data-wow-delay="0.25s">
							  <div class="row d-flex align-items-center">
							  <div class="col-lg-2 col-md-1">
								  <div class="process-number">
									  2
								  </div>
							  </div>
							  <div class="col-lg-10 col-md-11">
								  <div class="process">
									  <h2>'B' Class Development Banks</h2>									  
								  </div>
							  </div>
							</div>
							</div>
						</div>
						
						<div class="col-lg-6 col-md-6">
							<div class="work-process wow animate__animated animate__fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
							  <div class="row d-flex align-items-center">
							  <div class="col-lg-2 col-md-1">
								  <div class="process-number">
									  3
								  </div>
							  </div>
							  <div class="col-lg-10 col-md-11">
								  <div class="process">
									  <h2>'C' Class Finance Companies</h2>									  
								  </div>
							  </div>
							</div>
							</div>
						</div>
						
						<div class="col-lg-6 col-md-6">
							<div class="work-process wow animate__animated animate__fadeInRight" data-wow-duration="1s" data-wow-delay="0.75s">
							  <div class="row d-flex align-items-center">
							  <div class="col-lg-2 col-md-1">
								  <div class="process-number">
									  4
								  </div>
							  </div>
							  <div class="col-lg-10 col-md-11">
								  <div class="process">
									  <h2>'D' Class Micro Finance Institutions</h2>									  
								  </div>
							  </div>
							</div>
							</div>
						</div>
					</div>
					<a href="deposit.php" class="btn btn-sm btn-light mt-2" role="button"><i class="fas fa-bars me-1"></i> View All</a>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="dep-guarantee">
					<h1>Credit Guarantee</h1>
					<p>There are many schemes available at DCGF which guarantee's against loan issue to loanee.</p>
					
					<div class="row">
						
						
						<div class="col-lg-6 col-md-6">
							<div class="work-process wow animate__animated animate__fadeInLeft" data-wow-duration="1s" data-wow-delay="0.25s">
							  <div class="row d-flex align-items-center">
							  <div class="col-lg-2 col-md-1">
								  <div class="process-number">
									  <img src="images/icons/2.png"/>
								  </div>
							  </div>
							  <div class="col-lg-10 col-md-11">
								  <div class="process">
									  <h2>Livestock Credit Guarantee</h2>									  
								  </div>
							  </div>
							</div>
							</div>
						</div>

						<div class="col-lg-6 col-md-6">
							<div class="work-process wow animate__animated animate__fadeInLeft" data-wow-duration="1s">
							  <div class="row d-flex align-items-center">
							  <div class="col-lg-2 col-md-1">
								  <div class="process-number">
									  <img src="images/icons/1.png"/>
								  </div>
							  </div>
							  <div class="col-lg-10 col-md-11">
								  <div class="process">
									  <h2>Microfinance & Deprived Sector Credit Guarantee</h2>									  
								  </div>
							  </div>
							</div>
							</div>
						</div>
						
						<div class="col-lg-6 col-md-6">
							<div class="work-process wow animate__animated animate__fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">
							  <div class="row d-flex align-items-center">
							  <div class="col-lg-2 col-md-1">
								  <div class="process-number">
							      <img src="images/icons/3.png"/>
								  </div>
							  </div>
							  <div class="col-lg-10 col-md-11">
								  <div class="process">
									  <h2>SME Credit Guarantee</h2>									  
								  </div>
							  </div>
							</div>
							</div>
						</div>
						
						<div class="col-lg-6 col-md-6">
							<div class="work-process wow animate__animated animate__fadeInLeft" data-wow-duration="1s" data-wow-delay="0.75s">
							  <div class="row d-flex align-items-center">
							  <div class="col-lg-2 col-md-1">
								  <div class="process-number">
									  <img src="images/icons/4.png"/>
								  </div>
							  </div>
							  <div class="col-lg-10 col-md-11">
								  <div class="process">
									  <h2>Agriculture Credit Guarantee</h2>									  
								  </div>
							  </div>
							</div>
							</div>
						</div>
					</div>
					<a href="credit.php" class="btn btn-sm btn-light mt-2" role="button"><i class="fas fa-bars me-1"></i> View All</a>
				</div>
			</div>
		</div>
	</div>
</section>



<section class="notices">
<div class="container">
			  <h1><span>Our</span><br>
						Notices</h1>
	
	<div class="row">
		<div class="col-lg-4">
			<div class="notice-col mb-5 mb-lg-0">
				<h2>Investment Notices</h2>
				<div class="notice-box">
					
					<li>
						<div class="row d-flex align-items-center">
						<div class="col-lg-10 col-md-11 col-10">
							<a href="download/Invesetment Notice  318.pdf" target="_blank"><i class="fas fa-file-alt me-1"></i>Investment Notice - 318</a><br>
							<i class="fas fa-calendar-alt me-1"></i> <em>15 September, 2022</em>
						</div>
						<div class="col-lg-2 col-md-1 col-2">
							<span><a href="download/Invesetment Notice  318.pdf" target="_blank"><i class="fas fa-file-download"></i></a></span>
						</div>
						</div>
					</li>
					
					<li>
						<div class="row d-flex align-items-center">
						<div class="col-lg-10 col-md-11 col-10">
							<a href="download/Invesetment Notice  317.pdf" target="_blank"><i class="fas fa-file-alt me-1"></i>Investment Notice - 317</a><br>
							<i class="fas fa-calendar-alt me-1"></i> <em>5 September, 2022</em>
						</div>
						<div class="col-lg-2 col-md-1 col-2">
							<span><a href="download/Invesetment Notice  316.pdf" target="_blank"><i class="fas fa-file-download"></i></a></span>
						</div>
						</div>
					</li>
					<li>
						<div class="row d-flex align-items-center">
						<div class="col-lg-10 col-md-11 col-10">
							<a href="download/Invesetment Notice  316.pdf" target="_blank"><i class="fas fa-file-alt me-1"></i>Investment Notice - 316</a><br>
							<i class="fas fa-calendar-alt me-1"></i> <em>29 August, 2022</em>
						</div>
						<div class="col-lg-2 col-md-1 col-2">
							<span><a href="download/Invesetment Notice  316.pdf" target="_blank"><i class="fas fa-file-download"></i></a></span>
						</div>
						</div>
					</li>
					
					<a href="notices.php" class="btn btn-sm btn-dark" role="button"><i class="fas fa-bars me-1"></i> View All</a>
					
				</div>
			</div>
		</div>
		<div class="col-lg-4">
			<div class="notice-col mb-5 mb-lg-0">
				<h2>General Notices</h2>
				<div class="notice-box">
					
					<li>
						<div class="row d-flex align-items-center">
						<div class="col-lg-10 col-md-11 col-10">
							<a href="download/%E0%A4%86_%E0%A4%B5_%20%E0%A5%A8%E0%A5%A6%E0%A5%AD%E0%A5%AF%E0%A5%A4%E0%A5%AE%E0%A5%A6%20%E0%A4%95%E0%A5%8B%20%E0%A4%AE%E0%A5%8C%E0%A4%9C%E0%A5%81%E0%A4%A6%E0%A4%BE%20%E0%A4%B8%E0%A5%82%E0%A4%9A%E0%A5%80%20%E0%A4%B5%E0%A4%BF%E0%A4%B5%E0%A4%B0%E0%A4%A3.pdf" target="_blank"><i class="fas fa-file-alt me-1"></i> आ.व. २०७९/८० को लागि मौजुदा सूचीमा दर्ता भएका फर्म/कम्पनिको विवरण</a><br>
							<i class="fas fa-calendar-alt me-1"></i> <em>05 September, 2022</em>
						</div>
						<div class="col-lg-2 col-md-1 col-2">
							<span><a href="download/%E0%A4%86_%E0%A4%B5_%20%E0%A5%A8%E0%A5%A6%E0%A5%AD%E0%A5%AF%E0%A5%A4%E0%A5%AE%E0%A5%A6%20%E0%A4%95%E0%A5%8B%20%E0%A4%AE%E0%A5%8C%E0%A4%9C%E0%A5%81%E0%A4%A6%E0%A4%BE%20%E0%A4%B8%E0%A5%82%E0%A4%9A%E0%A5%80%20%E0%A4%B5%E0%A4%BF%E0%A4%B5%E0%A4%B0%E0%A4%A3.pdf" target="_blank"><i class="fas fa-file-download"></i></a></span>
						</div>
						</div>
					</li>
					
					<li>
						<div class="row d-flex align-items-center">
						<div class="col-lg-10 col-md-11 col-10">
							<a href="download/noticeimage_1661838599.jpg" target="_blank"><i class="fas fa-file-alt me-1"></i>नारा सिफारिस समितिको सूचना</a><br>
							<i class="fas fa-calendar-alt me-1"></i> <em>30 August, 2022</em>
						</div>
						<div class="col-lg-2 col-md-1 col-2">
							<span><a href="download/noticeimage_1661838599.jpg" target="_blank"><i class="fas fa-file-download"></i></a></span>
						</div>
						</div>
					</li>
					
					<li>
						<div class="row d-flex align-items-center">
						<div class="col-lg-10 col-md-11 col-10">
							<a href="download/लेख रचना उपलब्ध notice board.jpg" target="_blank"><i class="fas fa-file-alt me-1"></i>लेख रचना उपलब्ध गराउने सम्बन्धी सूचना</a><br>
							<i class="fas fa-calendar-alt me-1"></i> <em>09 August, 2022</em>
						</div>
						<div class="col-lg-2 col-md-1 col-2">
							<span><a href="download/लेख रचना उपलब्ध notice board.jpg" target="_blank"><i class="fas fa-file-download"></i></a></span>
						</div>
						</div>
					</li>
					
					<a href="generalnotices.php" class="btn btn-sm btn-dark" role="button"><i class="fas fa-bars me-1"></i> View All</a>
					
				</div>
			</div>
		</div>
		<div class="col-lg-4">
			<div class="notice-col mb-5 mb-lg-0">
				<h2>Vacancy Notices</h2>
				<div class="notice-box">
					
					<li>
						<div class="row d-flex align-items-center">
						<div class="col-lg-10 col-md-11 col-10">
							<a href="download/Interview Result Assistant Level - 4.PDF" target="_blank"><i class="fas fa-file-alt me-1"></i>Interview Result Assistant Level - 4</a><br>
							<i class="fas fa-calendar-alt me-1"></i> <em>04 February, 2022</em>
						</div>
						<div class="col-lg-2 col-md-1 col-2">
							<span><a href="download/Interview Result Assistant Level - 4.PDF" target="_blank"><i class="fas fa-file-download"></i></a></span>
						</div>
						</div>
					</li>
					
					<li>
						<div class="row d-flex align-items-center">
						<div class="col-lg-10 col-md-11 col-10">
							<a href="download/Interview Result Head Assistant-5.PDF" target="_blank"><i class="fas fa-file-alt me-1"></i>Interview Result Head Assistant-5</a><br>
							<i class="fas fa-calendar-alt me-1"></i> <em>16 January, 2022</em>
						</div>
						<div class="col-lg-2 col-md-1 col-2">
							<span><a href="download/Interview Result Head Assistant-5.PDF" target="_blank"><i class="fas fa-file-download"></i></a></span>
						</div>
						</div>
					</li>
					
					<li>
						<div class="row d-flex align-items-center">
						<div class="col-lg-10 col-md-11 col-10">
							<a href="download/Interview Result Officer - 6.PDF" target="_blank"><i class="fas fa-file-alt me-1"></i> Interview Result Officer - 6</a><br>
							<i class="fas fa-calendar-alt me-1"></i> <em>11 January, 2022</em>
						</div>
						<div class="col-lg-2 col-md-1 col-2">
							<span><a href="download/Interview Result Officer - 6.PDF" target="_blank"><i class="fas fa-file-download"></i></a></span>
						</div>
						</div>
					</li>
					
					<a href="#" class="btn btn-sm btn-dark" role="button"><i class="fas fa-bars me-1"></i> View All</a>
					
				</div>
			</div>
		</div>
	</div>
</div>
</section>


<section class="photos-videos">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 mb-5 mb-lg-0">
				<h1>some glimpses</h1>
				<div class="photos">
					<div class="row">
						<div class="col-lg-6 mb-4 mb-lg-0">
							<div class="photos-box">
								<a href="gallery-album.php"><img src="images/gallery/2.jpg"/></a>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="photos-box">
								<a href="gallery-album.php"><img src="images/gallery/agreement sanima.jpg"/></a>
							</div>
						</div>
						
					</div>
				</div>
			</div>
			<div class="col-lg-6">
				<h1>our videos</h1>
				<div class="videos">
					<div class="row">
						<div class="col-lg-6 mb-4 mb-lg-0">
							<div class="ratio ratio-4x3" style="border-radius:10px; overflow: hidden;">
							  <iframe width="560" height="315" src="https://www.youtube.com/embed/ySHLBQpaGoM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="ratio ratio-4x3" style="border-radius:10px; overflow: hidden;">
							  <iframe width="560" height="315" src="https://www.youtube.com/embed/" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!--
<section class="news-notices">
	<div class="container">
		
		<div class="row">
			
			<div class="col-lg-8">
				<div class="row">
					<h1>News / Events</h1>
			<div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
				<div class="news-box">
					<img src="images/news/1.jpg"/>
					<div class="news-text-box">
						<div class="pub-date"><span>27</span><br>Bhadra, 2079</div>
						<div class="news-info">
							<h2><a href="#">Making first true generator</a></h2>
							<p>If you are going to use a passage of you need to be sure there...</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
				<div class="news-box">
					<img src="images/news/2.jpg"/>
					<div class="news-text-box">
						<div class="pub-date"><span>27</span><br>Bhadra, 2079</div>
						<div class="news-info">
							<h2><a href="#">47th Anniversary</a></h2>
							<p>In the middle of text. All the Lorem Ipsum generators on the internet...</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
				<div class="news-box">
					<img src="images/news/3.jpg"/>
					<div class="news-text-box">
						<div class="pub-date"><span>27</span><br>Bhadra, 2079</div>
						<div class="news-info">
							<h2><a href="#">Making first true generator</a></h2>
							<p>If you are going to use a passage of you need to be sure there...</p>
						</div>
					</div>
				</div>
			</div>
				</div>
			</div>
			
			<div class="col-lg-4">
				<h1>Videos</h1>
				<div class="ratio ratio-16x9" style="border-radius:20px; overflow: hidden;">
  <iframe width="560" height="315" src="https://www.youtube.com/embed/ySHLBQpaGoM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>
		</div>
		
		</div>
	</div>
</section>
-->

<section class="counter-links">
	<div class="container">
		<div class="row">
			<div class="col-lg-6">
				<h1><span>Our Valuable</span><br>
				Numbers</h1>
				
				<div id="counter">
					<div class="row">
						<div class="col-lg-3 col-md-3 col-6 mb-5 mb-lg-0 mb-md-0">
							<div class="counter-icons"><i class="far fa-calendar-alt"></i></div>
							<div class="counter-value" data-count="48"></div>
							<span class="counter-value">+</span>
							<div class="counter-text">Years</div>
						</div>
						<div class="col-lg-3 col-md-3 col-6 mb-5 mb-lg-0 mb-md-0">
							<div class="counter-icons"><i class="fas fa-coins"></i></div>
							<div class="counter-value" data-count="10"></div>
							<span class="counter-value">B</span>
							<div class="counter-text">Paid Up Capital</div>
						</div>
						<div class="col-lg-3 col-md-3 col-6 mb-5 mb-lg-0 mb-md-0">
							<div class="counter-icons"><i class="fas fa-users"></i></div>
							<div class="counter-value" data-count="60"></div>
							<span class="counter-value">+</span>
							<div class="counter-text">Members</div>
						</div>
						<div class="col-lg-3 col-md-3 col-6 mb-5 mb-lg-0 mb-md-0">
							<div class="counter-icons"><i class="fas fa-user-tie"></i></div>
							<div class="counter-value" data-count="80"></div>
							<span class="counter-value">+</span>
							<div class="counter-text">Employees</div>
						</div>
					</div>
				</div>
			</div>
			
<div class="col-lg-6">
	<h1><span>useful</span><br>
		links</h1>

  <div class="regular slider responsive">
  <div class="links-image">
      <a href="https://www.mof.gov.np/" target="_blank"><img src="images/links/gov.jpg">
		<p>Ministry of Finance</p></a>
    </div>
    <div class="links-image">
      <a href="https://www.nrb.org.np/" target="_blank"><img src="images/links/nrb.jpg">
		<p>Nepal Rastra Bank</p></a>
    </div>
    <div class="links-image">
      <a href="https://epf.org.np/" target="_blank"><img src="images/links/epf.jpg">
		<p>Employees Provident Fund</p></a>
    </div>
    
	 <div class="links-image">
      <a href="https://nepalbankers.com.np/" target="_blank"><img src="images/links/nba.jpg">
		<p>Nepal Bankers Association</p></a>
    </div>
	<div class="links-image">
      <a href="http://www.sebon.gov.np/" target="_blank"><img src="images/links/sebon.jpg">
		<p>SEBON</p></a>
    </div>
	</div>

			</div>
		</div>
	</div>
</section>





  
<?php include("inc/bottom-link.php"); ?>
<?php include("inc/footer.php"); ?> 


