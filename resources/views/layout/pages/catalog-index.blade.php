@extends('index')

@section('content')

@include('layout.part.catalog-banner')

@include('layout.part.catalog-summer-sales')

@include('layout.part.catalog-goods-list', [
	'goods' => $goods,
])

@endsection