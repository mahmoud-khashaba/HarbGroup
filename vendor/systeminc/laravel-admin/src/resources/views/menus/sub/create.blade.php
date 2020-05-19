@extends('admin::layouts.admin')

@section('admin-content')
	<div class="admin-header">
		<h1>Create Sub Service</h1>
		<span class="last-update"></span>
	</div>

	<div class="admin-content">
		@if (session('error'))
			<span class="alert alert-error">{{ session('error') }}</span>
		@endif
			
		<form style="max-width: 100%;" action="services/{{$menu_id}}/sub-menu/save" method="post">
			{{ csrf_field() }}
			<label for="title">Title:</label>
			<input type="text" name="title" placeholder="Title">
		
			<input type="submit" value="Create" class="save-item">
		</form>
		
		
	</div>



@stop