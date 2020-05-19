@extends('admin::layouts.admin')

@section('admin-content')
	<div class="admin-header">
		<h1>{{ucfirst(str_singular($uri))}} </h1>
		<span class="last-update">Last change: {{$image->updated_at->tz('CET')->format('d M, Y, H:i\h')}}</span>
	</div>

	<div class="admin-content">
		<div class="cf" style="position: relative">
			<img src="{{ Storage::url($image->source) }}" alt="" style="max-width: 200px; width: 100%; background-color: #ddd;" class="left">
		</div>
		
		<br>
		<h2>Replace image</h2>

		<form style="max-width: 100%;" action="{{$uri}}/update/{{ $image->gallery->id }}/{{ $image->id }}" method="post" enctype="multipart/form-data">
			{{ csrf_field() }}
		    <div class="fileUpload cf">
				<span>Add replacement image</span>
				<input type="file" name="images[]">
			</div>
			<input type="hidden" name="key" value="{{ $image->gallery->key }}">	
			<input type="hidden" name="title" value="{{ $image->gallery->title }}">	
		</form>

		<div class="cf">
			
			
		</div>
		
			<a href="{{$uri}}/edit/{{ $image->gallery->id }}" class="button back-button">Back</a>
	</div>

	<script>
		$("body").delegate('.element-type', 'change',function(){

			if ($(this).val() == 0) {
				return false;
			}
			else {
				$(this).closest("form").submit();
			}
		});

		$(".fileUpload input").change(function(e) {
			e.preventDefault();
			$(this).parents('form').submit();
		});
	</script>
@stop