<div class="container">
    
	@include('layout.part.catalog-top-sidebar', ['goods' => $goods])

    @if(!empty($goods))
      <div class="card-columns goods-list">
        @foreach($goods as $good)
            @include('layout.part.catalog-good-card', [
              'good' => $good
            ])
        @endforeach
      </div>
	<div class="mt-5">
      {{ $goods->links() }}
	</div>
    @endif
	
    
</div>

