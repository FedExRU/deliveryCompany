@if(!empty($good))

<div class="card">
    <img class="card-img-top" src="{{ $good->image }}" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">
        @if($good->is_new)
          <span class="badge badge-info">new</span>
        @endif
        {{ $good->name }} 
        <br/>
        <small>
          by <a href="#">{{ $good->supplier->name }} <i class="fas fa-trademark"></i></a> 
        </small> 
      </h5>
      <p class="card-text">{{ $good->brief }}</p>
        @include('layout.part.product-rank',[
          'rank' => $good->rank
        ])
    </div>
    <div class="card-footer">
     	<div class="btn-group" role="group" aria-label="Basic example">
		  <a href="{{ route('catalog.show', ['id' => $good->id], false) }}" class="btn btn-outline-success" data-trigger="hover" data-placement="top" data-toggle="popover" data-content="Go to product"><i class="far fa-eye"></i></a>
		  <button type="button" class="btn btn-outline-success" data-trigger="hover" data-placement="top" data-toggle="popover" data-content="Add to cart"><i class="fas fa-cart-arrow-down"></i></button>
		  <button type="button" class="btn btn-outline-primary" data-trigger="hover" data-placement="top" data-toggle="popover" data-content="Buy it"><i class="fas fa-credit-card"></i></button>
		</div>
		<div class="price-column">
			<span class="curr-price">
           {{ $good->price }} <i class="fas fa-dollar-sign"></i>
      </span>
      @if(!is_null($good->old_price))
      <span class="old-price">
          <strike> {{ $good->old_price }} $</strike>
      </span>
      @endif
		</div>
     </div>
</div>

@endif