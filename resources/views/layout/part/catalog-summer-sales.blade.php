<div class="container summer-sales">
	<div class="row justify-content-md-center">
		<div class="col-xs-12 col-md-6 col-lg-4 order-xs-2 order-lg-1">
			@include('layout.part.sale-button', [
				'type' 			=> 'mute',
				'url' 			=> '#',
				'iconClass' 	=> 'fas fa-dollar-sign',
				'buttonTitle' 	=> 'Single buying',
				'desc' 			=> 'Lorem ipsum dolor sit amet, consectetur adipis'
			])
		</div>
		<div class="col-xs-12 col-md-6 col-lg-4 order-xs-3 order-lg-2">
			@include('layout.part.sale-button', [
				'type' 			=> 'mute',
				'url' 			=> '#',
				'iconClass' 	=> 'fas fa-umbrella-beach',
				'buttonTitle' 	=> 'Summer sale buying',
				'desc' 			=> 'Lorem ipsum dolor sit amet, consectetur adipis'
			])
		</div>
		<div class="col-xs-12 col-md-12 col-lg-4 order-xs-1 order-lg-3 success-sale-col">
			@include('layout.part.sale-button', [
				'type' 			=> 'success',
				'url' 			=> '#',
				'iconClass' 	=> 'fas fas fa-star',
				'buttonTitle' 	=> 'SUMMER PACK BUYING',
				'desc' 			=> 'Lorem ipsum dolor sit amet, consectetur adipis'
			])
		</div>
	</div>
</div>