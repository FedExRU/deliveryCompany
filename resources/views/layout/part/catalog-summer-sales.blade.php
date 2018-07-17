<div class="container summer-sales">
	<div class="row">
		<div class="col-4">
			@include('layout.part.sale-button', [
				'type' 			=> 'mute',
				'url' 			=> '#',
				'iconClass' 	=> 'fas fa-dollar-sign',
				'buttonTitle' 	=> 'Single buying',
				'desc' 			=> 'Lorem ipsum dolor sit amet, consectetur adipis'
			])
		</div>
		<div class="col-4">
			@include('layout.part.sale-button', [
				'type' 			=> 'mute',
				'url' 			=> '#',
				'iconClass' 	=> 'fas fa-umbrella-beach',
				'buttonTitle' 	=> 'Summer sale buying',
				'desc' 			=> 'Lorem ipsum dolor sit amet, consectetur adipis'
			])
		</div>
		<div class="col-4">
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