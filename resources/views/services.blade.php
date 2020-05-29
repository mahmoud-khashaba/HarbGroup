@include('layouts.header')
@include('layouts.nav')
<!-- start banner Area -->
<section class="banner-area relative" id="home">	
	<div class="overlay overlay-bg"></div>
	<div class="container">				
		<div class="row d-flex align-items-center justify-content-center">
			<div class="about-content col-lg-12">
				<h1 class="text-white">
				خدمات نقدمها لكم				
				</h1>	
				<p class="text-white link-nav"><a href="/home">الرئيسية </a>  <span class="lnr lnr-arrow-left"></span>  <a href="/services"> خدمات</a></p>
			</div>	
		</div>
	</div>
</section>
<!-- End banner Area -->
<!-- Start service Area -->
<section class="service-area section-gap" id="service">
	<div class="container">
		@foreach($menus as $menu)
		<h1 class="text-center mt-20">{{$menu->title}}</h1>
		@foreach($menu->galleries as $gallery)
			<!-- Start Service gallery Area -->
			<section class="project-area section-gap" id="project">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-md-8 pb-30 header-text text-center">
							<h3 class="mb-10">{{$gallery->title}}</h3>
						</div>
					</div>						
					<div class="row">
						@foreach($gallery->images as $image)
							<div class="col-lg-6 col-md-6">
								<a href="/uploads/{{$image->source}}" class="img-gal">
									<img class="img-fluid single-project" src="/uploads/{{$image->source}}" alt="">
								</a>	
							</div>
						@endforeach
					</div>
				</div>	
			</section>
			@endforeach
			@endforeach


		@foreach($services as $service)
		<!-- Start single services area -->
		<section class="project-area section-gap" id="project">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-md-8 pb-30 header-text text-center">
						<h2 class="mb-10">{{$service->title}}</h2>
					</div>
				</div>						
				<div class="row">
					@foreach($service->images as $image)
					<div class="col-lg-6 col-md-6">
						<a href="/uploads/{{$image->source}}" class="img-gal">
							<img class="img-fluid single-project" src="/uploads/{{$image->source}}" alt="">
						</a>	
					</div>
					@endforeach
				</div>
			</div>	
		</section>
		@endforeach
	</div>	
</section>
		

		<!-- @foreach($services as $service)
		<div class="row">
			<h4>{{$service->title}}</h4>
			<br>
			@foreach($service->images as $image)
			<div class="col-lg-6 col-md-6">
				<a href="/uploads/{{$image->source}}" class="img-gal">
					<img class="img-fluid single-project" src="/uploads/{{$image->source}}" alt="">
				</a>	
			</div>
			@endforeach					
		</div>
		@endforeach -->
	
<!-- End service Area -->			
<!-- Start cat Area -->
<section class="cat-area section-gap aboutus-cat" id="feature">
	<div class="container">							
		<div class="row">
			<div class="col-lg-4">	
				<div class="single-cat d-flex flex-column">
					<a href="#" class="hb-sm-margin mx-auto d-block"><span class="hb hb-sm inv hb-facebook-inv"><span class="lnr lnr-magic-wand"></span></span></a>
					<h4 class="mb-20" style="margin-top: 23px;">صناعات ثقيلة</h4>
					<p>صناعات ثقيلة</p>
				</div>															
			</div>
			<div class="col-lg-4">	
				<div class="single-cat">
					<a href="#" class="hb-sm-margin mx-auto d-block"><span class="hb hb-sm inv hb-facebook-inv"><span class="lnr lnr-rocket"></span></span></a>
					<h4 class="mt-40 mb-20"> توريدات معدات وأدوات</h4>
					<p>توريدات معدات وأدوات</p>
				</div>															
			</div>
			<div class="col-lg-4">
				<div class="single-cat">
					<a href="#" class="hb-sm-margin mx-auto d-block"><span class="hb hb-sm inv hb-facebook-inv"><span class="lnr lnr-bug"></span></span></a>
					<h4 class="mt-40 mb-20">تجهيز ورش</h4>
					<p>تجهيز ورش</p>
				</div>							
			</div>
		</div>
	</div>	
</section>
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
			<!-- End feedback Area -->
				
@include('layouts.footer')
