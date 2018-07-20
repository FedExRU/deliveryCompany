<div class="d-flex align-items-end col-xs-12 col-xl">
	{!!Form::open(['route' => 'catalog.index', 'method' => 'GET', 'class' => 'ml-auto']) !!}

	  <div class="form-row align-items-center">
	    <div class="col-xs-10 col-sm-11 col-md-auto">
	    	{{ Form::text('q', app('request')->input('q'), ['class' => 'form-control mb-2', 'placeholder' => 'Search on catalog...']) }}
	    </div>
	    <div class="col-xs-2 col-sm-1 col-md-auto">
	      <button type="submit" class="btn btn-primary mb-2"><i class="fas fa-search"></i></button>
	    </div>
	  </div>

	{!! Form::close() !!}
</div>
