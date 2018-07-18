<form method="POST" action="" class="needs-validation" novalidate>
  @csrf
  <input type="hidden" name="good_id" value="{{ $content->id }}">
  <div class="form-row">
    <div class="col-xs-12 col-lg-4 mb-3">
      <label for="validationCustom01">First name</label>
      <input  type="text" name="firstName" class="form-control" id="validationCustom01" placeholder="First name" required>
      <div class="feedback valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-xs-12 col-lg-4 mb-3">
      <label for="validationCustom02">Last name</label>
      <input  type="text" name="lastName" class="form-control" id="validationCustom02" placeholder="Last name" required>
      <div class="feedback valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-xs-12 col-lg-4 mb-3">
      <label for="validationCustomUsername">Email</label>
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroupPrepend">@</span>
        </div>
        <input  type="email" name="email" class="form-control" id="validationCustomUsername" placeholder="Email" aria-describedby="inputGroupPrepend" required>
        <div class="infeedback valid-feedback">
          Please choose a username.
        </div>
      </div>
    </div>
  </div>
  <div class="form-row">
    <div class="col-xs-12 col-lg-6 mb-3">
      <label for="validationCustom03">City</label>
      <input  type="text" name="city" class="form-control" id="validationCustom03" placeholder="City" required>
      <div class="infeedback valid-feedback">
        Please provide a valid city.
      </div>
    </div>
    <div class="col-xs-12 col-lg-3 mb-3">
      <label for="validationCustom04">State</label>
      <input  type="text" name="state" class="form-control" id="validationCustom04" placeholder="State" required>
      <div class="infeedback valid-feedback">
        Please provide a valid state.
      </div>
    </div>
    <div class="col-xs-12 col-lg-3 mb-3">
      <label for="validationCustom05">Zip</label>
      <input  type="number" name="zip" class="form-control" id="validationCustom05" placeholder="Zip" required>
      <div class="infeedback valid-feedback">
        Please provide a valid zip.
      </div>
    </div>
  </div>
  <div class="form-group">
    <div class="form-check">
      <input name="agreenment" class="form-check-input" type="checkbox" value="1" id="invalidCheck" required>
      <label class="form-check-label" for="invalidCheck">
        Agree to terms and conditions
      </label>
      <div class="infeedback valid-feedback">
        You must agree before submitting.
      </div>
    </div>
  </div>
  <button class="btn btn-primary-light" type="submit">Send</button>
</form>
