@extends('admin::layouts.admin')

@section('admin-content')

	<div class="admin-header">
		<h1>{{ucfirst($uri)}}</h1>
		<span class="last-update"></span>
		<div class="button-wrap">
			<a href="projects/create" class="button right">Create {{ucfirst($uri)}}</a>
		</div>
	</div>

	<div class="admin-content">
		<ul class="border">
			@foreach ($galleries as $gallery)
				<li><a href="projects/edit/{{ $gallery->id }}"><b>{{ ucfirst($gallery->title) }}</a></li>
				
			@endforeach
		</ul>
		
	</div>
	
@stop