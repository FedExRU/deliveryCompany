<br>
<div class="container">
	<div class="row">
		<div class="col-12">
			<h3>Preparing an order</h3>
			<hr>
		</div>
		<div class="col-12">
			@include('layout.part.order-form', [
				'good' => $content['data'],
				'order' => $content['order']
			])
		</div>
	</div>
</div>