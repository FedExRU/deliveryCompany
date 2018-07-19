@extends('index')

@section('content')

<div class="container mt-5">
	<div class="row mb-5">
		<div class="col-xs-12 col-lg-6">
			<div class="catalog-title-wrapper success">
				<h2>
					{{ $good->name }}
				</h2>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-xs-12 col-md-6">
			<img src="{{ $good->image }}" alt="{{ $good->name }}" class="w-100">
		</div>
		<div class="col-xs-12 col-md-6 prod-info">
			@include('layout.part.catalog-show-tabs', [
				'data' => $good,
				'order' => $order,
			])
		</div>
	</div>
</div>



@endsection

