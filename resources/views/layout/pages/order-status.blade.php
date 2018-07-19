@extends('index')

@section('content')

<div class="container mt-5">
	<div class="jumbotron {{ \Session('orderStatus') ? 'alert-success' : 'alert-danger' }}">
	  <h1 class="display-4">{{ \Session('orderStatus') ? 'Order is successfully processed' : 'Order processing fail' }}</h1>
	  @if(!empty($orderId))
	  <div class="lead">
	  	<table class="table">
	  		<tr>
	  			<td>
	  				<strong class="text-uppercase">
	  					Order number:
	  				</strong>
	  			</td>
	  			<td>
	  				<span class="text-muted">
	  					{{ $orderId }}
	  				</span>
	  			</td>
	  		</tr>
	  		<tr>
	  			<td>
	  				<strong class="text-uppercase">
	  					Product name:
	  				</strong>
	  			</td>
	  			<td>
	  				<span class="text-muted">
	  					{{ $goodName }}
	  				</span>
	  			</td>
	  		</tr>
	  		<tr>
	  			<td>
	  				<strong class="text-uppercase">
	  					Order date:
	  				</strong>
	  			</td>
	  			<td>
	  				<span class="text-muted">
	  					{{ $orderDate }}
	  				</span>
	  			</td>
	  		</tr>
	  	</table>
	  </div>
	  @endif
	  <hr class="my-4">
	  @if(!empty($orderId))
	  <p>You can receive information about the delivery of goods by e-mail, specified at the time of placing an order.</p>
	  @else
	  <p>Something went wrong. Please, try again later. We apologize for the inconvenience</p>
	  @endif
	  <a class="btn btn-secondary btn-lg" href="{{ route('catalog.index') }}" role="button">Back to catalog</a>
	</div>
	
</div>


@endsection