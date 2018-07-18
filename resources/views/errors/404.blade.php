@extends('index')

@section('content')


<div class="container mt-5">
	<div class="row">
		@include('errors.templates.template-1', [
			'errorHeader' => '404 Error',
			'message' => $exception->getMessage(),
		])
	</div>
</div>

@endsection