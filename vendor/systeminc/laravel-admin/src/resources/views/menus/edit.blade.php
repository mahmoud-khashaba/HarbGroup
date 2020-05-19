@extends('admin::layouts.admin')


@section('admin-content')
<style type="text/css">
	.button{
		margin-left:  0 !important;
	}
</style>
	<div class="admin-header">
		<h1>Service Menu {{ $menu->title }}</h1>
		<span class="last-update">Last change: {{$menu->updated_at->tz('CET')->format('d M, Y, H:i\h')}}</span>
		<div class="button-wrap">
			<a href="services/{{$menu->id}}/sub-menu/create" class="button right">Create Service under {{$menu->title}}</a>
		</div>

	</div>


	<div class="admin-content">

		<form style="max-width: 100%;" action="services/menu/update/{{ $menu->id }}" method="post">
			{{ csrf_field() }}
			<label for="title">Title:</label>
			<input type="text" name="title" value="{{ $menu->title }}">	
			
			@if (session('error'))
		        <div class="alert alert-error no-hide">
		            <span class="help-block">
		                <strong>{{ session('error') }}</strong>
		            </span>
		        </div>
		    @endif
			
			<label for="slug">Slug:</label>
			<input type="text" name="slug" value="{{ $menu->slug }}">	

			@if (session('message'))
				<span class="alert alert-error">{{ session('message') }}</span>
			@endif

			

			<input type="submit" value="Update" class="save-item ">
			<br>
			<a class="button remove-item" href="services/menu/delete/{{ $menu->id }}">Delete Menu</a>
			<a href="{{ url()->previous() }}" class="button back-button">Back</a>
		</form>
		
	<hr>
	@if(count($galleries = $menu->galleries))
						<h2>Sub menus</h2>

		<ul class="border">
			@foreach ($galleries as $gallery)
				<li><a href="services/edit/{{ $gallery->id }}"><b>{{ ucfirst($gallery->title) }}</a></li>
				
			@endforeach
		</ul>
	@endif		
		
		
	</div>



<script>
	$(".fileUpload input").change(function(e) {
		e.preventDefault();
		$(this).parents('form').submit();
	});
</script>
@stop