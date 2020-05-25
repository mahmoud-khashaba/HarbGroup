		@include('layouts.header')
		@include('layouts.nav')

<!-- Start service Area -->
			<section class="service-area section-gap" id="service">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-md-12 pb-30 header-text text-center">
							<h1 class="mb-10">جميع الخدمات التي نقوم بها من أجلكم</h1>
							<!-- <p>
								Who are in extremely love with eco friendly system..
							</p> -->
						</div>
					</div>						
					<div class="row">
						@foreach($service->images as $image)

							<div class="col-lg-4">
								<div class="single-service">
									<div class="thumb">
										<img src="/uploads/{{$image->source}}" alt="">									
									</div>
									<h4>{{$service->title}}</h4>
									<p>
										inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct women face higher conduct.
									</p>
								</div>
							</div>

						@endforeach
															
					</div>
				</div>	
			</section>
			<!-- End service Area -->			
			<!-- Start cat Area --> 
			<!-- <section class="cat-area section-gap aboutus-cat" id="feature">
				<div class="container">							
					<div class="row">
						<div class="col-lg-4">	
							<div class="single-cat d-flex flex-column">
								<a href="#" class="hb-sm-margin mx-auto d-block"><span class="hb hb-sm inv hb-facebook-inv"><span class="lnr lnr-magic-wand"></span></span></a>
								<h4 class="mb-20" style="margin-top: 23px;">Maintenance</h4>
								<p>
									inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct standards especially in the workplace. That’s why.
								</p>
							</div>															
						</div>
						<div class="col-lg-4">	
							<div class="single-cat">
								<a href="#" class="hb-sm-margin mx-auto d-block"><span class="hb hb-sm inv hb-facebook-inv"><span class="lnr lnr-rocket"></span></span></a>
								<h4 class="mt-40 mb-20">Residental Service</h4>
								<p>
									inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct standards especially in the workplace. That’s why.
								</p>
							</div>															
						</div>
						<div class="col-lg-4">
							<div class="single-cat">
								<a href="#" class="hb-sm-margin mx-auto d-block"><span class="hb hb-sm inv hb-facebook-inv"><span class="lnr lnr-bug"></span></span></a>
								<h4 class="mt-40 mb-20">Commercial Service</h4>
								<p>
									inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct standards especially in the workplace. That’s why.
								</p>
							</div>							
						</div>
					</div>
				</div>	
			</section> -->
			<!-- End cat Area -->						

			<!-- Start feedback Area -->
			<!-- <section class="feedback-area aboutus-feedback section-gap" id="feedback">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-md-12 pb-60 header-text text-center">
							<h1 class="mb-10">Enjoy our Client’s Feedback</h1>
							<p>
								Who are in extremely love with eco friendly system..
							</p>
						</div>
					</div>			
					<div class="row feedback-contents justify-content-center align-items-center">
						<div class="col-lg-6 feedback-left relative d-flex justify-content-center align-items-center">
							<div class="overlay overlay-bg"></div>
							<a class="play-btn" href="https://www.youtube.com/watch?v=ARA0AxrnHdM"><img class="img-fluid" src="img/play-btn.png" alt=""></a>
						</div>
						<div class="col-lg-6 feedback-right">
							<div class="active-review-carusel">
								<div class="single-feedback-carusel">
									<div class="title d-flex flex-row">
										<h4 class="pb-10">Fannie Rowe</h4>
										<div class="star">
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star"></span>
											<span class="fa fa-star"></span>								
										</div>										
									</div>
									<p>
										Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker. Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker.
									</p>
								</div>
								<div class="single-feedback-carusel">
									<div class="title d-flex flex-row">
										<h4 class="pb-10">Fannie Rowe</h4>
										<div class="star">
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star"></span>								
										</div>										
									</div>
									<p>
										Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker. Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker.
									</p>
								</div>
								<div class="single-feedback-carusel">
									<div class="title d-flex flex-row">
										<h4 class="pb-10">Fannie Rowe</h4>
										<div class="star">
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked	"></span>								
										</div>										
									</div>
									<p>
										Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker. Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker.
									</p>
								</div>																
							</div>
						</div>
					</div>
				</div>	
			</section> -->
			<!-- End feedback Area
				
		@include('layouts.footer')
