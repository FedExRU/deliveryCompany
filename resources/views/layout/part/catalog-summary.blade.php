<br/>
<div class="container">
	<div class="row">
		<div class="col-12">
			<p class="text-uppercase"><strong>{{ $content->supplier->name }}</strong></p>
			<h3 class="position-relative">
				{{ $content->name }}
				@include('layout.part.product-rank',[
		          'rank' => $content->rank
		        ])
			</h3>
			<span class="text-muted">Model #{{ time() }}</span>
		</div>
		<div class="col-12 mt-5">
			<table class="table">
				<tr>
					<td class="sm-none"><span class="text-uppercase"><strong>Name:</strong></span></td>
					<td data-label="Name:"><span class="text-muted">{{ $content->name }}</span></td>
				</tr>
				<tr>
					<td class="sm-none"><span class="text-uppercase"><strong>Description:</strong></span></td>
					<td data-label="Description:"><span class="text-muted">{{ $content->description }}</span></td>
				</tr>
				<tr>
					<td colspan="2">
						<div class="price-column">
							<span class="curr-price">
				          	 <i class="fas fa-dollar-sign"></i> {{ $content->price }} 
				      		</span>
					      @if(!is_null($content->old_price))
					      <span class="old-price">
					          <strike> $ {{ $content->old_price }} </strike>
					      </span>
					      @endif
						</div>
					</td>
				</tr>
				<tr>
					<td colspan="2">
						<button class="btn btn-primary-light" id="go-to-order">
							Buy it
						</button>
					</td>
				</tr>
			</table>
		</div>
	</div>
</div>