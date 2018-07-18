<div class="jumbotron w-100">
  <h1 class="display-4">{{ $errorHeader }}</h1>
  <p class="lead">{{ $message }}</p>
  <hr class="my-4">
  <p>We apologize for the inconvenience</p>
  <a class="btn btn-primary btn-lg" href="{{ route('home') }}" role="button">Return to home</a>
</div>