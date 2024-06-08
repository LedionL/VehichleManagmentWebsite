<?php
//This is the main page for users. If someone is logged in and clicks on the site,, it will send them here.
//It checks to see if the user is logged in. If not, they are taken to the normal index page.
session_start();
if(!isset($_SESSION["user_id"])){
    header("Location: index.php");
}
?>

<!doctype html>
<html class="no-js" lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

		<link href="https://fonts.googleapis.com/css?family=Rufina:400,700" rel="stylesheet">
        
        <title>CarVilla</title>

		<link rel="shortcut icon" type="image/icon" href="assets/logo/favicon.png"/>
       
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">

		<link rel="stylesheet" href="assets/css/linearicons.css">

		<link rel="stylesheet" href="assets/css/flaticon.css">

        <link rel="stylesheet" href="assets/css/animate.css">

        <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
		<link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
		
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
		
		<link rel="stylesheet" href="assets/css/bootsnav.css" >	
        
        <link rel="stylesheet" href="assets/css/style.css">
        
        <link rel="stylesheet" href="assets/css/responsive.css">

    </head>
	
	<body>
	
		<section id="home" class="welcome-hero">

			<div class="top-area">
				<div class="header-area">
				    <nav class="navbar navbar-default bootsnav  navbar-sticky navbar-scrollspy"  data-minus-value-desktop="70" data-minus-value-mobile="55" data-speed="1000">

				        <div class="container">

				            <div class="navbar-header">
				                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
				                    <i class="fa fa-bars"></i>
				                </button>
				                <a class="navbar-brand" href="index.html">carvilla<span></span></a>

				            </div>

				            <div class="collapse navbar-collapse menu-ui-design" id="navbar-menu">
				                <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
				                    <li class=" scroll active"><a href="#home">home</a></li>									
				                    <li class="scroll"><a href="#new-cars">new cars</a></li>
				                    <li class="scroll"><a href="#featured-cars">featured cars</a></li>
				                    <li class="scroll"><a href="https://localhost/soloproj/tables.php">manage vehicles</a></li>
				                    <li><a href="https://localhost/soloproj/logout.php">log out</a></li>
									<li class="scroll"><a href="#brand">contact</a></li>

				                </ul>
				            </div>
				        </div>
				    </nav>
				</div>
			    <div class="clearfix"></div>

			</div>

			<div class="container">
				<div class="welcome-hero-txt">
					<h2>anage cars with state of the art technology</h2>
					<p>
						Easy access to car managment is simple! Just click the button below get started. 
					</p>
					<button class="welcome-btn scrolls" onclick="window.location.href='tables.php'">Manage vehichles</button>
				</div>
			</div>

			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="model-search-content">
							<div class="row">
								<div class="col-md-offset-1 col-md-2 col-sm-12">
									<div class="single-model-search">
										<h2>select year</h2>
										<div class="model-select-icon">
											<select class="form-control">

											  	<option value="default">year</option>

											  	<option value="2018">2018</option>

											  	<option value="2017">2017</option>
											  	<option value="2016">2016</option>

											</select>
										</div>
									</div>
									<div class="single-model-search">
										<h2>body style</h2>
										<div class="model-select-icon">
											<select class="form-control">

											  	<option value="default">style</option>

											  	<option value="sedan">sedan</option>

											  	<option value="van">van</option>
											  	<option value="roadster">roadster</option>

											</select>
										</div>
									</div>
								</div>
								<div class="col-md-offset-1 col-md-2 col-sm-12">
									<div class="single-model-search">
										<h2>select brand</h2>
										<div class="model-select-icon">
											<select class="form-control">

											  	<option value="default">brand</option>

											  	<option value="toyota">toyota</option>

											  	<option value="holden">holden</option>
											  	<option value="maecedes-benz">maecedes-benz.</option>

											</select>
										</div>
									</div>
									<div class="single-model-search">
										<h2>car condition</h2>
										<div class="model-select-icon">
											<select class="form-control">

											  	<option value="default">condition</option>

											  	<option value="something">something</option>

											  	<option value="something">something</option>
											  	<option value="something">something</option>

											</select>
										</div>
									</div>
								</div>
								<div class="col-md-offset-1 col-md-2 col-sm-12">
									<div class="single-model-search">
                                    <h2>select fuel type</h2>
										<div class="model-select-icon">
											<select class="form-control">

											<option value="default">fuel type</option>

											  	<option value="default">gasoline</option>

											  	<option value="kia-rio">electric</option>

											  	<option value="mitsubishi">hybrid</option>
											  	<option value="ford">E85</option>

											</select>
										</div>
									</div>
									<div class="single-model-search">
										<h2>select price</h2>
										<div class="model-select-icon">
											<select class="form-control">

											  	<option value="default">price</option>

											  	<option value="$0.00">$0.00</option>

											  	<option value="$0.00">$0.00</option>
											  	<option value="$0.00">$0.00</option>

											</select>
										</div>
									</div>
								</div>
								<div class="col-md-2 col-sm-12">
									<div class="single-model-search text-center">
										<button class="welcome-btn model-search-btn" onclick="window.location.href='#'">
											search(wip)
										</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

		</section>
		

		<section id="service" class="service">
			<div class="container">
				<div class="service-content">
					<div class="row">
						<div class="col-md-4 col-sm-6">
							<div class="single-service-item">
								<div class="single-service-icon">
									<i class="flaticon-car"></i>
								</div>
								<h2><a href="#">largest dealership <span> of</span> car</a></h2>
								<p>
									We offer a wide selection of vechichles as well as a great sorting algorithm for them.  
								</p>
							</div>
						</div>
						<div class="col-md-4 col-sm-6">
							<div class="single-service-item">
								<div class="single-service-icon">
									<i class="flaticon-car-repair"></i>
								</div>
								<h2><a href="#">unlimited repair warrenty</a></h2>
								<p>
									Our dealership offers unlimited repair warrenty on us whenver a car is rented.  
								</p>
							</div>
						</div>
						<div class="col-md-4 col-sm-6">
							<div class="single-service-item">
								<div class="single-service-icon">
									<i class="flaticon-car-1"></i>
								</div>
								<h2><a href="#">insurence support</a></h2>
								<p>
									We have 24/7 support for all your needs. 
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>

		</section>
		

		<section id="new-cars" class="new-cars">
			<div class="container">
				<div class="section-header">
					<p>checkout <span>the</span> latest cars</p>
					<h2>newest cars</h2>
				</div>
				<div class="new-cars-content">
					<div class="owl-carousel owl-theme" id="new-cars-carousel">
						<div class="new-cars-item">
							<div class="single-new-cars-item">
								<div class="row">
									<div class="col-md-7 col-sm-12">
										<div class="new-cars-img">
											<img src="assets/images/new-cars-model/ncm1.png" alt="img"/>
										</div>
									</div>
									<div class="col-md-5 col-sm-12">
										<div class="new-cars-txt">
											<h2><a href="#">chevrolet camaro <span> za100</span></a></h2>
											<p>
											The Chevrolet Camaro captures the essence of American muscle, marrying timeless design with formidable performance for an electrifying driving experience.											</p>
											<p class="new-cars-para2">
											With its track-inspired prowess and refined interior, the Camaro remains a symbol of automotive excellence, stirring passion in enthusiasts worldwide.											</p>
											<button class="welcome-btn new-cars-btn" onclick="window.location.href='https://localhost/soloproj/tables.php'">
												Manage today!
											</button>
										</div>
									</div>
								</div>
							</div>
						</div><
						<div class="new-cars-item">
							<div class="single-new-cars-item">
								<div class="row">
									<div class="col-md-7 col-sm-12">
										<div class="new-cars-img">
											<img src="assets/images/new-cars-model/ncm2.png" alt="img"/>
										</div>
									</div>
									<div class="col-md-5 col-sm-12">
										<div class="new-cars-txt">
											<h2><a href="#">BMW series-3 wagon</a></h2>
											<p>
											The BMW 3 Series Wagon seamlessly blends practicality with luxury, offering versatile cargo space and advanced technology alongside dynamic performance.											</p>
											<p class="new-cars-para2">
											With its sleek design and refined interior, it embodies the perfect balance of functionality and driving pleasure for discerning drivers seeking versatility without compromising on style.											</p>
											<button class="welcome-btn new-cars-btn" onclick="window.location.href='https://localhost/soloproj/tables.php'">
                                            Manage today!
											</button>
										</div>
									</div>
								</div>	
							</div>
						</div><
						<div class="new-cars-item">
							<div class="single-new-cars-item">
								<div class="row">
									<div class="col-md-7 col-sm-12">
										<div class="new-cars-img">
											<img src="assets/images/new-cars-model/ncm3.png" alt="img"/>
										</div>
									</div>
									<div class="col-md-5 col-sm-12">
										<div class="new-cars-txt">
											<h2><a href="#">ferrari 488 superfast</a></h2>
											<p>
											The Ferrari 488 Superfast epitomizes the pinnacle of Italian automotive engineering, boasting breathtaking design and blistering performance that exhilarates both on the road and the track.											</p>
											<p class="new-cars-para2">
											With its aerodynamic prowess and powerful engine, it embodies the essence of pure speed and luxury, setting a new standard for supercars.											</p>
											<button class="welcome-btn new-cars-btn" onclick="window.location.href='https://localhost/soloproj/tables.php'">
												Manage today!
											</button>
										</div>
									</div>
								</div>
							</div>
						</div><
					</div>
				</div>
			</div>

		</section>

		<section id="featured-cars" class="featured-cars">
			<div class="container">
				<div class="section-header">
					<p>checkout <span>the</span> featured cars</p>
					<h2>featured cars</h2>
				</div>
				<div class="featured-cars-content">
					<div class="row">
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="single-featured-cars">
								<div class="featured-img-box">
									<div class="featured-cars-img">
										<img src="assets/images/featured-cars/fc1.png" alt="cars">
									</div>
									<div class="featured-model-info">
										<p>
											model: 2017
											<span class="featured-mi-span"> 3100 mi</span> 
											<span class="featured-hp-span"> 240HP</span>
											 automatic
										</p>
									</div>
								</div>
								<div class="featured-cars-txt">
									<h2><a href="#">BMW 6-series gran coupe</a></h2>
									<h3>$89,395</h3>
									<p>
									The BMW 6-Series Gran Coupe combines sleek, coupe-like styling with the practicality of four doors, offering a luxurious and dynamic driving experience.
									</p>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="single-featured-cars">
								<div class="featured-img-box">
									<div class="featured-cars-img">
										<img src="assets/images/featured-cars/fc2.png" alt="cars">
									</div>
									<div class="featured-model-info">
										<p>
											model: 2017
											<span class="featured-mi-span"> 3100 mi</span> 
											<span class="featured-hp-span"> 240HP</span>
											 automatic
										</p>
									</div>
								</div>
								<div class="featured-cars-txt">
									<h2><a href="#">chevrolet camaro <span>wmv20</span></a></h2>
									<h3>$66,575</h3>
									<p>
									The Chevrolet Camaro embodies American muscle car heritage with its iconic design and powerful performance, delivering an exhilarating driving experience on the road or track.									</p>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="single-featured-cars">
								<div class="featured-img-box">
									<div class="featured-cars-img">
										<img src="assets/images/featured-cars/fc3.png" alt="cars">
									</div>
									<div class="featured-model-info">
										<p>
											model: 2017
											<span class="featured-mi-span"> 3100 mi</span> 
											<span class="featured-hp-span"> 240HP</span>
											 automatic
										</p>
									</div>
								</div>
								<div class="featured-cars-txt">
									<h2><a href="#">lamborghini <span>v520</span></a></h2>
									<h3>$125,250</h3>
									<p>
									The Lamborghini V520 epitomizes Italian supercar excellence, boasting breathtaking design, performance, and a symphony of power that captivates both onlookers and drivers alike.									</p>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="single-featured-cars">
								<div class="featured-img-box">
									<div class="featured-cars-img">
										<img src="assets/images/featured-cars/fc4.png" alt="cars">
									</div>
									<div class="featured-model-info">
										<p>
											model: 2017
											<span class="featured-mi-span"> 3100 mi</span> 
											<span class="featured-hp-span"> 240HP</span>
											 automatic
										</p>
									</div>
								</div>
								<div class="featured-cars-txt">
									<h2><a href="#">audi <span> a3</span> sedan</a></h2>
									<h3>$95,500</h3>
									<p>
									The Audi A3 Sedan epitomizes refined luxury and compact sophistication, blending cutting-edge technology with elegant design for a premium driving experience.									</p>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="single-featured-cars">
								<div class="featured-img-box">
									<div class="featured-cars-img">
										<img src="assets/images/featured-cars/fc4.png" alt="cars">
									</div>
									<div class="featured-model-info">
										<p>
											model: 2017
											<span class="featured-mi-span"> 3100 mi</span> 
											<span class="featured-hp-span"> 240HP</span>
											 automatic
										</p>
									</div>
								</div>
								<div class="featured-cars-txt">
									<h2><a href="#">infiniti <span>z5</span></a></h2>
									<h3>$36,850</h3>
									<p>
									Infiniti's Z5 embodies the brand's commitment to luxury and performance, offering a blend of sleek design, advanced technology, and exhilarating dynamics for discerning enthusiasts.									</p>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="single-featured-cars">
								<div class="featured-img-box">
									<div class="featured-cars-img">
										<img src="assets/images/featured-cars/fc5.png" alt="cars">
									</div>
									<div class="featured-model-info">
										<p>
											model: 2017
											<span class="featured-mi-span"> 3100 mi</span> 
											<span class="featured-hp-span"> 240HP</span>
											 automatic
										</p>
									</div>
								</div>
								<div class="featured-cars-txt">
									<h2><a href="#">porsche <span>718</span> cayman</a></h2>
									<h3>$48,500</h3>
									<p>
									The Porsche 718 Cayman showcases precision engineering performance, delivering an exhilarating driving experience with its mid-engine layout, balanced handling, and iconic design.									</p>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="single-featured-cars">
								<div class="featured-img-box">
									<div class="featured-cars-img">
										<img src="assets/images/featured-cars/fc7.png" alt="cars">
									</div>
									<div class="featured-model-info">
										<p>
											model: 2017
											<span class="featured-mi-span"> 3100 mi</span> 
											<span class="featured-hp-span"> 240HP</span>
											 automatic
										</p>
									</div>
								</div>
								<div class="featured-cars-txt">
									<h2><a href="#"><span>bmw 8-</span>series coupe</a></h2>
									<h3>$56,000</h3>
									<p>
									The BMW 8-Series Coupe seamlessly merges luxury and performance, offering cutting-edge technology and elegant design for a dynamic driving experience at the peak of automotive refinement.									</p>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="single-featured-cars">
								<div class="featured-img-box">
									<div class="featured-cars-img">
										<img src="assets/images/featured-cars/fc8.png" alt="cars">
									</div>
									<div class="featured-model-info">
										<p>
											model: 2017
											<span class="featured-mi-span"> 3100 mi</span> 
											<span class="featured-hp-span"> 240HP</span>
											 automatic
										</p>
									</div>
								</div>
								<div class="featured-cars-txt">
									<h2><a href="#">BMW <span> x</span>series-6</a></h2>
									<h3>$75,800</h3>
									<p>
									The BMW X6 combines sporty design with SUV practicality, offering a luxurious and dynamic driving experience with versatile capabilities on and off the road.									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

		</section>

		<section id="clients-say"  class="clients-say">
			<div class="container">
				<div class="section-header">
					<h2>what our clients say</h2>
				</div>
				<div class="row">
					<div class="owl-carousel testimonial-carousel">
						<div class="col-sm-3 col-xs-12">
							<div class="single-testimonial-box">
								<div class="testimonial-description">
									<div class="testimonial-info">
										<div class="testimonial-img">
											<img src="assets/images/clients/c1.png" alt="image of clients person" />
										</div>
									</div>
									<div class="testimonial-comment">
										<p>
										CarVilla exceeded my expectations! Their website was intuitive, the car selection was impressive, and the customer service was top-notch. A seamless rental experience!										</p>
									</div>
									<div class="testimonial-person">
										<h2><a href="#">Ardian Krasniqi</a></h2>
										<h4>Laç</h4>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-3 col-xs-12">
							<div class="single-testimonial-box">
								<div class="testimonial-description">
									<div class="testimonial-info">
										<div class="testimonial-img">
											<img src="assets/images/clients/c2.png" alt="image of clients person" />
										</div>
									</div>
									<div class="testimonial-comment">
										<p>
										Highly recommend CarVilla for your rental needs! Their website is easy to navigate, the booking process is straightforward, and the cars are well-maintained. Will definitely be a returning customer!										</p>
									</div>
									<div class="testimonial-person">
										<h2><a href="#">Elira Hoxha</a></h2>
										<h4>Elbasan</h4>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-3 col-xs-12">
							<div class="single-testimonial-box">
								<div class="testimonial-description">
									<div class="testimonial-info">
										<div class="testimonial-img">
											<img src="assets/images/clients/c3.png" alt="image of clients person" />
										</div>
									</div>
									<div class="testimonial-comment">
										<p>
										Had a wonderful experience with CarVilla! Their website made it simple to find the perfect vehicle for my trip, and their competitive prices sealed the deal. Smooth process from start to finish!										</p>
									</div>
									<div class="testimonial-person">
										<h2><a href="#">Luan Gashi</a></h2>
										<h4>Fjer</h4>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

		</section>

		<section id="brand"  class="brand">
			<div class="container">
				<div class="brand-area">
					<div class="owl-carousel owl-theme brand-item">
						<div class="item">
								<img src="assets/images/brand/br1.png" alt="brand-image" />
						</div>
						<div class="item">
								<img src="assets/images/brand/br2.png" alt="brand-image" />
						</div>
						<div class="item">
								<img src="assets/images/brand/br3.png" alt="brand-image" />
						</div>
						<div class="item">
								<img src="assets/images/brand/br4.png" alt="brand-image" />
						</div>

						<div class="item">
								<img src="assets/images/brand/br5.png" alt="brand-image" />
						</div>

						<div class="item">
								<img src="assets/images/brand/br6.png" alt="brand-image" />
						</div>
					</div>
				</div><

			</div>

		</section>

		<section id="blog" class="blog"></section>

		<footer id="contact"  class="contact">
			<div class="container">
				<div class="footer-top">
					<div class="row">
						<div class="col-md-3 col-sm-6">
							<div class="single-footer-widget">
								<div class="footer-logo">
									<a href="index.html">carvilla</a>
								</div>
								<p>
									All your car rental and managment needs, at the best prices in the country.
								</p>
								<div class="footer-contact">
									<p>llamce22@epoka.edu.al</p>
									<p>+355 69 66 99 420</p>
								</div>
							</div>
						</div>
						<div class="col-md-2 col-sm-6">
							<div class="single-footer-widget">
								<h2>about devloon</h2>
								<ul>
									<li><a href="#">about us</a></li>
									<li><a href="#">career</a></li>
									<li><a href="#">terms <span> of service</span></a></li>
									<li><a href="#">privacy policy</a></li>
								</ul>
							</div>
						</div>
						<div class="col-md-3 col-xs-12">
							<div class="single-footer-widget">
								<h2>top brands</h2>
								<div class="row">
									<div class="col-md-7 col-xs-6">
										<ul>
											<li>BMW</li>
											<li>lamborghini</li>
											<li>camaro</li>
											<li>audi</li>
											<li>infiniti</li>
											<li>nissan</li>
										</ul>
									</div>
									<div class="col-md-5 col-xs-6">
										<ul>
											<li>ferrari</li>
											<li>porsche</li>
											<li>land rover</li>
											<li>aston martin</li>
											<li>mersedes</li>
											<li>opel</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-offset-1 col-md-3 col-sm-6">
							<div class="single-footer-widget">
								<h2>news letter</h2>
								<div class="footer-newsletter">
									<p>
										Subscribe to get latest news  update and informations
									</p>
								</div>
								<div class="hm-foot-email">
									<div class="foot-email-box">
										<input type="text" class="form-control" placeholder="Add Email">
									</div>
									<div class="foot-email-subscribe">
										<span><i class="fa fa-arrow-right"></i></span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="footer-copyright">
					<div class="row">
						<div class="col-sm-6">
							<p>
								&copy; Owner <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ&pp=ygUIcmlja3JvbGw%3D">Ledion Lamce</a>.
							</p>
						</div>
						<div class="col-sm-6">
							<div class="footer-social">
								<a href="#"><i class="fa fa-facebook"></i></a>	
								<a href="#"><i class="fa fa-instagram"></i></a>
								<a href="#"><i class="fa fa-linkedin"></i></a>
								<a href="#"><i class="fa fa-pinterest-p"></i></a>
								<a href="#"><i class="fa fa-behance"></i></a>	
							</div>
						</div>
					</div>
				</div>
			</div>

			<div id="scroll-Top">
				<div class="return-to-top">
					<i class="fa fa-angle-up " id="scroll-top" data-toggle="tooltip" data-placement="top" title="" data-original-title="Back to Top" aria-hidden="true"></i>
				</div>
				
			</div>
			
        </footer>


		

		<script src="assets/js/jquery.js"></script>
        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
		
        <script src="assets/js/bootstrap.min.js"></script>
		
		<script src="assets/js/bootsnav.js"></script>

        <script src="assets/js/owl.carousel.min.js"></script>

		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>

        <script src="assets/js/custom.js"></script>
        
    </body>
	
</html>