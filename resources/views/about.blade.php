@include('layouts.header')
@include('layouts.nav')
<!-- start banner Area -->
<section class="banner-area relative" id="home">	
	<div class="overlay overlay-bg"></div>
	<div class="container">				
		<div class="row d-flex align-items-center justify-content-center">
			<div class="about-content col-lg-12">
				<h1 class="text-white">
					من نحن				
				</h1>	
				<p class="text-white link-nav"><a href="/home">الرئيسية </a><span class="lnr lnr-arrow-left"></span><a href="/about"> من نحن</a></p>
			</div>	
		</div>
	</div>
</section>
<!-- End banner Area -->	

<!-- Start home-about Area -->
<section class="home-about-area section-gap aboutus-about" id="about">
	<div class="container">
		<div class="row justify-content-center align-items-center">
			<div class="col-lg-8 col-md-12 home-about-left">
				<h6>لا يفل الحديد الا الحديد</h6>
				<h1>
					نسعى ان نكون رواد صناعات الحديد
					<br>
					في مصر والوطن العربي..
				</h1>
				<p class="sub">الجودة معيارنا والالتزام عهدنا</p>
				<p class="pb-20">
					بدأت حرب جروب منذ عام 2011 منذ ذلك الحين ونحن نتوسع في مجالات صناعات الحديد وتوريد جميع انواء المستلزمات
				</p>
				<a class="primary-btn" href="/projects">مشروعاتنا</a>
			</div>
		</div>
	</div>	
</section>
<!-- End home-about Area -->
				
<!-- Start cat Area -->
<section class="cat-area section-gap aboutus-cat" id="feature">
	<div class="container">							
		<div class="row">
			<div class="col-lg-4">	
				<div class="single-cat d-flex flex-column">
					<a href="#" class="hb-sm-margin mx-auto d-block"><span class="hb hb-sm inv hb-facebook-inv"><span class="lnr lnr-magic-wand"></span></span></a>
					<h4 class="mb-20" style="margin-top: 23px;">صناعات ثقيلة</h4>
					<p>
						inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct standards especially in the workplace. That’s why.
					</p>
				</div>															
			</div>
			<div class="col-lg-4">	
				<div class="single-cat">
					<a href="#" class="hb-sm-margin mx-auto d-block"><span class="hb hb-sm inv hb-facebook-inv"><span class="lnr lnr-rocket"></span></span></a>
					<h4 class="mt-40 mb-20"> توريدات معدات وأدوات</h4>
					<p>
						inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct standards especially in the workplace. That’s why.
					</p>
				</div>															
			</div>
			<div class="col-lg-4">
				<div class="single-cat">
					<a href="#" class="hb-sm-margin mx-auto d-block"><span class="hb hb-sm inv hb-facebook-inv"><span class="lnr lnr-bug"></span></span></a>
					<h4 class="mt-40 mb-20">تجهيز ورش</h4>
					<p>
						inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct standards especially in the workplace. That’s why.
					</p>
				</div>							
			</div>
		</div>
	</div>	
</section>
<!-- End cat Area -->						
@include('layouts.footer')