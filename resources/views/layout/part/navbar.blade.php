<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="{{ $brandUrl }}"><i class="fab fa-docker"></i> {{ $brandName }}</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        {!! Form::namedRoute('home', 'Home', null, ['class' => 'nav-link']) !!}
      </li>
      <li class="nav-item">
        {!! Form::namedRoute('catalog.index', '<strong>Catalog</strong>', null, ['class' => 'nav-link']) !!}
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link">About</a>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>
    <div class="nav-tel">
      <a href="tel:208-218-8350"><i class="fas fa-phone"></i> 208-218-8350</a>
    </div>
  </div>
</nav>