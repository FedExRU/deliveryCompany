<div class="form-group {{ $errors->has($name) ? 'has-errors' : '' }}">
  
  @if($type == 'checkbox')
    @include('layout.part.form.checkbox', [
      'name'  => 'agreenment',
      'label' => 'Agree to terms and conditions',
    ])
  @else
  	{{ Form::label('input-'.$name, $label) }}
  	<div class="input-group">
  		@if(!empty($inputPrepend))
  		<div class="input-group-prepend">
            <span class="input-group-text" id="inputGroupPrepend">{{ $inputPrepend }}</span>
          </div>
          @endif
      	{{ Form::$type($name, null, ['class' => 'form-control', 'placeholder' => $label, 'id' => 'input-'.$name]) }}
      </div>
  @endif
  @include('errors.form-message-error', ['inputName' => $name])
</div>