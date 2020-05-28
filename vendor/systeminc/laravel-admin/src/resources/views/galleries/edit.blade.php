@extends('admin::layouts.admin')

@section('admin-content')
	<div class="admin-header">
		<h1>{{ucfirst(str_singular($uri))}} {{ $gallery->title }}</h1>
		<span class="last-update">Last change: {{$gallery->updated_at->tz('CET')->format('d M, Y, H:i\h')}}</span>
	</div>

	<div class="admin-content">
		<form style="max-width: 100%;" action="{{$uri}}/update/{{ $gallery->id }}" method="post" enctype="multipart/form-data">
			{{ csrf_field() }}
			<label for="title">Title:</label>
			<input type="text" name="title" value="{{ $gallery->title }}">	
			
			@if (session('error'))
		        <div class="alert alert-error no-hide">
		            <span class="help-block">
		                <strong>{{ session('error') }}</strong>
		            </span>
		        </div>
		    @endif
			
			<label for="slug">Slug:</label>
			<input type="text" name="slug" value="{{ $gallery->slug }}">	

			@if (session('message'))
				<span class="alert alert-error">{{ session('message') }}</span>
			@endif

			@if ( count($gallery->images) )
				<div class="gallery-wrap">
					<ul class="image-list sortable cf" data-link="ajax/{{ $gallery->id }}/change-{{$uri}}-order">
						@foreach ($gallery->images as $image)
							<li class="items-order" data-id="{{$image->id}}">
								<div class="buttons">
									<div onclick="ajaxDeleteGalleryImage('ajax/{{ $gallery->id }}/delete-{{$uri}}-images/{{ $image->id }}', '{{$image->id}}')" class="button remove-image delete">Delete</div>
								</div>
								<a href="{{$uri}}/image/{{ $gallery->id }}/{{ $image->id }}" 
								   style="background-image: url('{{ Storage::url($image->source)}}')">
								</a>
							</li>
						@endforeach
					</ul>
				</div>
			@endif	

			<input type="submit" value="Update" class="save-item">
			<br>
		    <div class="fileUpload">
				<span>Add image</span>
				<input type="file" name="images[]" multiple="multiple">
			</div>
			<a class="button remove-item" href="{{$uri}}/delete/{{ $gallery->id }}">Delete {{ucfirst(str_singular($uri))}}</a>
			<a href="{{ url()->previous() }}" class="button back-button">Back</a>
		</form>
		
		
	</div>



<script>
	$(".fileUpload input").change(function(e) {
		e.preventDefault();
		$(this).parents('form').submit();
	});
</script>
@stop