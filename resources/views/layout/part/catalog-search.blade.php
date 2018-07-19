<div class="d-flex align-items-end col-xs-12 col-xl">
	<form action="{{ route('catalog.index') }}" method="GET" class="ml-auto">
	  <div class="form-row align-items-center">
	    <div class="col-xs-10 col-sm-11 col-md-auto">
	      <input type="text" name="q" value="{{ app('request')->input('q') }}" class="form-control mb-2" id="inlineFormInput" placeholder="Search on catalog...">
	    </div>
	    <div class="col-xs-2 col-sm-1 col-md-auto">
	      <button type="submit" class="btn btn-primary mb-2"><i class="fas fa-search"></i></button>
	    </div>
	  </div>
	</form>
</div>
