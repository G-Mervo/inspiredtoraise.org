@extends('layouts.app')

@section('content')

	<section class="insprd_slider">
	<div id="insprd-carouselControls" class="carousel slide" data-ride="carousel" style="height: 380px">
		  	<div class="carousel-inner" style="height: 380px" >
		    	<div class="carousel-item active" >
		      		<img src="<?php echo 'assets/img/insprd-001_03.jpg'; ?>" class="d-block w-100" alt="..." width="" height="380px">
		      		<div class="carousel-caption d-none d-md-block">
			      		<div class="">
							<div class="slider-info text-right">
								<h1 class="text-uppercase"></h1>
								<p class="text-white"> </p>
								<a class="btn btn-agile  mt-4 scroll" href="#about" role="button">Read more</a>
							</div>
						</div>
					</div>
		    	</div>
		    	<div class="carousel-item">
		      		<img src="<?php echo 'assets/img/strsuccess.jpg'; ?>" class="d-block w-100" alt="..." width="" height="380px">
		      		<div class="carousel-caption d-none d-md-block">
			      		<div class="">
							<div class="slider-info text-right">
								<h1 class="text-uppercase"></h1>
								<p class="text-white"> </p>
								<a class="btn btn-agile  mt-4 scroll" href="#about" role="button">Read more</a>
							</div>
						</div>
					</div>
		    	</div>
		    	<div class="carousel-item">
		      		<img src="<?php echo 'assets/img/ldrshp.jpg'; ?>" class="d-block w-100" alt="..." width="" height="380px">
		      		<div class="carousel-caption d-none d-md-block">
			      		<div class="">
							<div class="slider-info text-right">
								<h1 class="text-uppercase"></h1>
								<p class="text-white"> </p>
								<a class="btn btn-agile  mt-4 scroll" href="#about" role="button">Read more</a>
							</div>
						</div>
					</div>
		    	</div>
		    	<div class="carousel-item">
		      		<img src="<?php echo 'assets/img/key_success.png'; ?>" class="d-block w-100" alt="..." width="" height="380px">
		      		<div class="carousel-caption d-none d-md-block">
			      		<div class="">
							<div class="slider-info text-right">
								<h1 class="text-uppercase"></h1>
								<p class="text-white"> </p>
								<a class="btn btn-agile  mt-4 scroll" href="#about" role="button">Read more</a>
							</div>
						</div>
					</div>
		    	</div>
		    	<div class="carousel-item">
		      		<img src="<?php echo 'assets/img/insprd-001_03.jpg'; ?>" class="d-block w-100" alt="..." width="" height="380px">
		      		<div class="carousel-caption d-none d-md-block">
			      		<div class="">
							<div class="slider-info text-right">
								<h1 class="text-uppercase"></h1>
								<p class="text-white"> </p>
								<a class="btn btn-agile  mt-4 scroll" href="#about" role="button">Read more</a>
							</div>
						</div>
					</div>
		    	</div>
		  	</div>
		  	
		  	<a class="carousel-control-prev" href="#insprd-carouselControls" role="button" data-slide="prev">
		    	<span class="carousel-control-prev-icon" aria-hidden="true"></span>
		    	<span class="sr-only">Previous</span>
		  	</a>
		  	<a class="carousel-control-next" href="#insprd-carouselControls" role="button" data-slide="next">
		    	<span class="carousel-control-next-icon" aria-hidden="true"></span>
		    	<span class="sr-only">Next</span>
		  	</a>
	</div>
</section>

<section class="banner">
	<div class="container" id="home"> 
		<!-- <div class="banner-text">
			<div class="slider-info text-right">
				<h1 class="text-uppercase"></h1>
				<p class="text-white"> </p>
				<a class="btn btn-agile  mt-4 scroll" href="#about" role="button">Read more</a>
			</div>
		</div> -->
	</div>
</section>

<section class="">
	<div class="container-fluid text-center">
		<h2>Why we Exist?</h2>
		<div class="row">
			<div class="col-lg-12">
				<p>Inspired to Raise is an organization that focuses on inspiring everyone to make an impact wherever they are and beyond by being different. We inspire others especially the young generation to help raise a new generation of leaders and entrepreneurs and help everyone fulfill their purpose by overcoming whatever challenges and limitation that may hinder them! </p>
			</div>
		</div>
	</div>
</section>
<section class="">
	<div class="container-fluid text-center">
		<h2>What we do</h2>
		<img src="<?php echo 'assets/img/banner_lg.png'; ?>" class="img-fluid" alt="" width="600px" height="350px">
		<p>We share our experiences our experiences, other people experiences, write inspirational blogs, write books, gather and compile inspirational stories, give inspirational talks that not only motivate but also inspire to groups- youth mostly, schools and organizations.</p>
	</div>
</section>

<section class="insprd-qtes">
	<div class="container-fluid">
		<blockquote>Believe in yourself, be different; Make a difference</blockquote> Mérvin
	</div>
</section>

<section class="insprd-ldr-scs">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-6">
				<h2>Leadership</h2>
				<aside><img src="<?php echo 'assets/img/imgldrshp.jpg'; ?>" class="img-fluid" alt="" width="450px" height="320px"></aside>
				<p>Leadership being inborn also needs to be cultivated while others develop it...</p>
				<a href="" class="btn-btn-primary">learn more</a>
			</div>
			<div class="col-lg-6">
				<h2>Success</h2>
				<aside><img src="<?php echo 'assets/img/banner_lg.png'; ?>" class="img-fluid" alt="" width="450px" height="320px"></aside>
				<p>Many dream of success, few achieve it. </p>
				<a href="" class="btn-btn-primary">learn more</a>
			</div>
		</div>
	</div>
</section>

<section class="insprd-entrshp">
	<div class="container-fluid text-center">
		<h2>Entrepreneurship</h2>
		<p>Entrepreneurship is in the most basic terms, investing resources to a particular course/venture; be it business, different industries/verticals, technology(techpreneurship)</p>
		<aside><img src="<?php echo 'assets/img/banner_lg.png'; ?>" class="img-fluid" alt="" width="450px" height="320px"></aside>
		<h4>Lessons in Entrepreneurship</h4>
		<ul class="">
			<li>lorem ipsum</li>
			<li>lorem ipsum</li>
			<li>lorem ipsum</li>
			<li>lorem ipsum</li>
			<li>lorem ipsum</li>
		</ul>
		<a href="" class="btn btn-primary">Learn more</a>
	</div>
</section>

<section class="insprd-prm-content">
	<div class="container-fluid">
		<h3>Purpose, profession vs Career</h3>
		<div class="row">
			<div class="col-lg-12">
				<img src="<?php echo 'assets/img/banner_lg.png'; ?>" class="img-fluid" alt="" width="600px" height="670px">
				<p>	<bold>Purpose</bold> is about who you are and why on earth you exist.</p>
				<p>It's not by coincidence/ mere accident but by plan & design that you are here.</p>
				<p>Have you ever stopped and asked yourself: <bold>Why did God create me?</bold> </p>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<p>	<bold>Profession</bold> is about your training in a particular field. Your certification in a certain area; medicine, technology, engineering, marketing, education etc</p>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<p>	<bold>Career</bold> is your progression in your purpose or profession</p>
			</div>
		</div>

		<div class="row">
			<div class="col-lg-7">
				<p>Are you in your purpose or profession?</p>	
			</div>
			<div class="col-lg-5">
				<button class="btn btn-primary">Answer here</button>
			</div>
		</div>

		<div class="row">
			<div class="col-lg-7">
				<p>Can you achieve or do both?</p>
			</div>
			<div class="col-lg-5">
				<button class="btn btn-primary">learn more</button>
			</div>
		</div>
	</div>
</section>

<section class="insprd-rlgn">
	<div class="container-fluid text-center">
		<h2>Religion & Spirituality</h2>
		<p>What do you believe in? You either believe in God or have your belief in something else! </p>
		<div class="row">
			<div class="col-lg-12">
				<p>	<bold>Destiny</bold> Is it predestination or does one get to define their destiny?</p>
				<p>What's the role of religion/ spirituality in one's lives? Is our lives affected by some external forces or supernatural beings?</p>
			</div>
		</div>

		<div class="row">
			<div class="col-lg-12">
				<img src="<?php echo 'assets/img/banner_lg.png'; ?>" class="img-fluid" alt="" width="600px" height="670px">
				<p>Different people believe differently; but we all believe in something. And we know that we are not alone in this earth. Our lives are definitely affected by; 
					<ol>
						<li>A supernatural being</li>
						<li>What we believe in</li>
						<li>Our level of faith</li>
					</ol>
				</p>
			</div>
		</div>

		<div class="row">
			<div class="col-lg-12">
				<p>There is nothing like atheism; since whoever doesn't believe in religion believes in science or in something else that they themselves only know.</p>
			</div>
		</div>

		<div class="row">
			<div class="col-lg-12">
				<p>Religion & spirituality does affect our lives; how we live, our destinies and our success.</p>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<button class="btn btn-primary">learn more</button>
			</div>
		</div>
	</div>
</section>

<section class="insprd-tech">
	<div class="container-fluid text-center">
		<h2>Technology</h2>
		<p>The mark of this century is definitely technology. It has defined, affected and changed our lives in so many different ways; some good, others bad.</p>
		<div class="row">
			<div class="col-lg-12">
				<p>Living in the 21st century, one can't ingore the impact of technology in whether we succeed or fail</p>
				<p>We absolutely can't deny how greatly life has change and it's gonna change in the near future as a result of Artificial Intelligence, robotics, machine learning, business intelligence, cloud computing, quantum computing etc and the new innovations and inventions being made day in, day out!</p>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<p>Social media & Internet have had the greatest impact in the lives of many.</p>
				<p>Connecting with friends and new people have never been easy as it is now.</p><br>
				<p>Nonetheless, the negative impacts of it can't and shouldn't be ignored; immorality and indiscipline being on the rise.</p>
			</div>
		</div>

		<div class="row">
			<div class="col-lg-12">
				<p>As a generation living in this era, we definitely have to adapt to optimizing technology not to fail but to our advantage in maximizing our chances of success rather than being addicted  to it and loosing ourselves in the process.</p>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-7">
				<img src="<?php echo 'assets/img/banner_lg.png'; ?>" class="img-fluid" alt="" width="450px" height="320px">
			</div>
			<div class="col-lg-5">
				<button class="btn btn-primary">Learn more</button>
			</div>
		</div>
	</div>
</section>

<section class="insprd-moral">
	<div class="container-fluid text-center">
		<h2>Moral</h2>
		<p>One needs certain characteristics, values and traits to succeed </p>
		<div class="row">
			<div class="col-lg-6">
				<img src="<?php echo 'assets/img/banner_lg.png'; ?>" class="img-fluid" alt="" width="600px" height="670px">
			</div>
			<div class="col-lg-6">
				<p>"Bring up a child in the way that he/she should grow up and they will never depart from it"</p>
				<p>Who we are is largely affected by how one was brought up. What values you were taught and instilled in you. </p>
				<p>There are essential values necessary for one to be different and make a difference in this life.</p>
				<br><p>Discipline, persistence, diligence, focus, consciousness and many more play a vital role in one's success.</p><br><br>
				<button class="btn btn-primary">Learn more</button>
			</div>
		</div>
	</div>
</section>

<section class="mrl-prm-text">
	<div class="container-fluid">
		<p><blockquote>Without the prerequisite moral values, living a successful life is close to impossible</blockquote></p>
	</div>
</section>

<section class="insprd-scty">
	<div class="container-fluid">
		<h2>Society</h2>
		<p>Where you live; that small/big village, town or country, distinguish yourself by being different.</p>
		<div class="row">
			<div class="col-lg-7">
				<br><p>Make a difference wherever you are in your society</p><br>
				<p>Our societies need different people; a new breed of different people.</p><br>
				<p>Are you ready to make a difference?</p>
			</div>
			<div class="col-lg-5">
				<img src="<?php echo 'assets/img/banner_lg.png'; ?>" class="img-fluid" alt="" width="450px" height="320px">
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<button class="btn btn-primary">learn more</button>
			</div>
		</div>
	</div>
</section>

<section class="insprd-dd-txt">
	<div class="container-fluid">
		<h4>Are you different?</h4>
		<h5>Do you want to make a difference?<span><a href="" class="btn btn-primary">Contact us</a></span></h5> 
		<p>Subscribe to our monthly newsletter & learn how. </p>
		<form action="" method="">
			<div class="row">
				<div class="col-lg-8 offset-lg-2">
					<div class="form-group">
						<label for="" class="sr-only"></label>
						<input type="email" class="form-control" placeholder="Enter email here"> 
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-8 offset-lg-2">
					<div class="form-group">
						<label for="" class="sr-only"></label>
						<button class="btn btn-primary">subscribe</button>
					</div>
				</div>
			</div>
		</form>
	</div>
</section>

<section class="insprd-dd-enqr">
	<div class="container-fluid">
		<h4>Send us an email today</h4>
		<div class="row">
			<div class="col-lg-12">
				<button class="btn btn-primary">Contact us</button>
			</div>
		</div>
	</div>
</section>

@endsection           
