@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


<form method="POST" action="{{ route('order.send', [], false) }}" class="needs-validation {{ $errors->any() ? 'was-validated' : '' }}" novalidate>
  @csrf
  <input type="hidden" name="good_id" value="{{ $content->id }}">
  <div class="form-row">
    <div class="col-xs-12 col-lg-4 mb-3">
      <label for="validationCustom01">First name</label>
      <input  type="text" name="firstName" class="form-control" value="{{ !is_null(old('firstName')) ? old('firstName') : '' }}" id="validationCustom01" placeholder="First name" required>
      <div class="feedback invalid-feedback">
        {{ $errors->first('firstName') }}
      </div>
    </div>
    <div class="col-xs-12 col-lg-4 mb-3">
      <label for="validationCustom02">Last name</label>
      <input  type="text" name="lastName" class="form-control" value="{{ !is_null(old('lastName')) ? old('lastName') : '' }}" id="validationCustom02" placeholder="Last name">
      <div class="feedback invalid-feedback">
        {{ $errors->first('lastName') }}
      </div>
    </div>
    <div class="col-xs-12 col-lg-4 mb-3">
      <label for="validationCustomUsername">Email</label>
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroupPrepend">@</span>
        </div>
        <input  type="email" name="email" class="form-control" value="{{ !is_null(old('email')) ? old('email') : '' }}" id="validationCustomUsername" placeholder="Email" aria-describedby="inputGroupPrepend" required>
        <div class="infeedback invalid-feedback">
         {{ $errors->first('email') }}
        </div>
      </div>
    </div>
  </div>
  <div class="form-row">
    <div class="col-xs-12 col-lg-6 mb-3">
      <label for="validationCustom03">City</label>
      <input  type="text" name="city" class="form-control" value="{{ !is_null(old('city')) ? old('city') : '' }}" id="validationCustom03" placeholder="City" required>
      <div class="infeedback invalid-feedback">
        {{ $errors->first('city') }}
      </div>
    </div>
    <div class="col-xs-12 col-lg-3 mb-3">
      <label for="validationCustom04">State</label>
      <input  type="text" name="state" class="form-control" value="{{ !is_null(old('state')) ? old('state') : '' }}" id="validationCustom04" placeholder="State" required>
      <div class="infeedback invalid-feedback">
        {{ $errors->first('state') }}
      </div>
    </div>
    <div class="col-xs-12 col-lg-3 mb-3">
      <label for="validationCustom05">Zip</label>
      <input  type="number" name="zip" class="form-control" value="{{ !is_null(old('zip')) ? old('zip') : '' }}" id="validationCustom05" placeholder="Zip" required>
      <div class="infeedback invalid-feedback">
        {{ $errors->first('zip') }}
      </div>
    </div>
  </div>
  <div class="form-group">
    <div class="form-check">
      <input name="agreenment" class="form-check-input" type="checkbox" value="1" id="invalidCheck" {{ !is_null(old('agreenment')) ? 'checked' : '' }} required>
      <label class="form-check-label" for="invalidCheck">
        Agree to terms and conditions
      </label>
      <div class="infeedback invalid-feedback">
        {{ $errors->first('agreenment') }}
      </div>
    </div>
  </div>
  <button class="btn btn-primary-light" type="submit">Send</button>
</form>
