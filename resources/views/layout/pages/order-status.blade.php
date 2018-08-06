@extends('index')

@section('content')

<div class="container mt-5">

	@include('layout.part.order-status-message',[
		'orderId' => $orderId,
		'goodName' => $goodName,
		'orderDate' => $orderDate
	])


	
</div>


@endsection