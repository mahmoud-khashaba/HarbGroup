@extends('admin::layouts.admin')

@section('admin-content')

	<div class="admin-header">
		<h1>Services</h1>
		<span class="last-update"></span>
		<div class="button-wrap">
			<a href="services/create" class="button right">Create Service</a>
		</div>
		<div class="second-button-wrap">
			<a href="services/menu/create" class="button right">Create Service menu</a>
		</div>
	</div>

	<div class="admin-content">
					<h2>main services</h2>

		<ul class="border">
			@foreach ($services as $service)
				<li><a href="services/edit/{{ $service->id }}"><b>{{ ucfirst($service->title) }}</a></li>
				
			@endforeach
		</ul>
					<h2>menus</h2>

		<ul class="border">
			@foreach ($menus as $menu)
				<li><a href="services/menu/edit/{{ $menu->id }}"><b>{{ ucfirst($menu->title) }}</a></li>
				
			@endforeach
		</ul>
		
	</div>
	
@stop