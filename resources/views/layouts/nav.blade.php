		<body>	
			  <header id="header" id="home">
		  		<!-- <div class="header-top">
		  			<div class="container">
				  		<div class="row">
				  			<div class="col-lg-6 col-sm-6 col-4 header-top-left no-padding">
				  				<ul>
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
									<li><a href="#"><i class="fa fa-behance"></i></a></li>
				  				</ul>
				  			</div>
				  			<div class="col-lg-6 col-sm-6 col-8 header-top-right no-padding">
				  				<a href="tel:+880 012 3654 896">+880 012 3654 896</a>
				  				<a href="mailto:support@colorlib.com">support@colorlib.com</a>				
				  			</div>
				  		</div>			  					
		  			</div> -->
				</div>
			    <div class="container main-menu">
			    	<div class="row align-items-center justify-content-between d-flex ar-nav">
				      <div id="logo">
				        <a href="/">حرب جروب</a>
				      </div>
				      <nav id="nav-menu-container ar-menu">
				        <ul class="nav-menu">
				        <li><a href="/contact">تواصل معنا</a></li>
						  <li class="menu-has-children"><a href="/services">خدماتنا</a>
				            <ul>
								@foreach($menus as $menu)

								<li class="menu-has-children"><a href="/services/menu/{{$menu->slug}}">{{$menu->title}}</a>
									<ul>
									@foreach($menu->galleries as $gallery)

									  <li><a href="/services/{{$gallery->slug}}">{{$gallery->title}}</a></li>
									@endforeach

									</ul>
								</li>
								@endforeach
	
								@foreach($services as $service)
								<li><a href="/services/{{$service->slug}}">{{$service->title}}</a></li>
								@endforeach
				            </ul>
				          </li>
						  <li class="menu-has-children"><a href="/projects">أعمال الشركة</a>
							<ul>
							@foreach($projects as $project)

							  <li><a href="/projects/{{$project->slug}}">{{$project->title}}</a></li>
							  @endforeach

							</ul>
						</li>	
						  <li><a href="/about">عن الشركة</a></li>
						  
						  <li class="menu-active"><a href="/">الرئيسية</a></li>
				        </ul>
				      </nav><!-- #nav-menu-container -->		    		
			    	</div>
			    </div>
			  </header><!-- #header -->