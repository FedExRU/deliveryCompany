<div class="btn-toolbar col-xl col-xs-12" role="toolbar" aria-label="Toolbar with button groups">
	<div class="btn-group btn-group-sm mr-2" role="group" aria-label="Basic example">
	  <a href="{{ route('catalog.index', ['sortRank' =>  app('request')->input('sortRank') == 'desc' ? 'asc' : 'desc']) }}" class="btn btn-outline-primary a-with-span" data-label="Rank"><i class="fas fa-sort"></i> <span class="button-text">Order by rank</span></a>
	  <a href="{{ route('catalog.index', ['sortPrice' =>  app('request')->input('sortPrice') == 'asc' ? 'desc' : 'asc']) }}" class="btn btn-outline-info a-with-span" data-label="Price"><i class="fas fa-sort"></i> <span class="button-text">Order by price</span></a>
	</div>
	<div class="btn-group btn-group-sm mr-2 best-sellers-btn-group" role="group" aria-label="Basic example">
	  <button type="button" class="btn btn-success" data-label="Best Sellers"><i class="fas fa-certificate"></i> <span class="button-text">Show best sellers!</span></button>
	</div>
</div>