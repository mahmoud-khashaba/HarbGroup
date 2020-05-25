<body>	
	<!-- #header -->
	<header id="header" id="home">
		<div class="header-top">
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
						<a dir="ltr" href="tel:+880 012 3654 896">+20100000000</a>
						<a href="mailto:support@colorlib.com">support@colorlib.com</a>				
					</div>
				</div>			  					
			</div>
		</div>
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="margin:0;">
			<a class="navbar-brand" href="/home">صخر جروب</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item active">
						<a class="nav-link" href="/home">الرئيسية <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="/projects">مشروعات الشركة</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="/services">خدمات</a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#projects" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						أعمال الشركة
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							@foreach($projects as $project)
							<a class="dropdown-item" href="/projects/{{$project->slug}}">{{$project->title}}</a>
							@endforeach
						</div>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						خدماتنا
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							@foreach($menus as $menu)
								@foreach($menu->galleries as $gallery)
								<a class="dropdown-item" href="/services/{{$gallery->slug}}">{{$gallery->title}}</a>
								@endforeach	
							@endforeach
							<div class="dropdown-divider"></div>
							@foreach($services as $service)
							<a class="dropdown-item" href="/services/{{$service->slug}}">{{$service->title}}</a>
							@endforeach
						</div>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="/about">من نحن</a>
					</li>
				</ul>	
			</div>
		</nav>
	</header>
	
	<!-- #header -->