<div class="form-check">
	{{ Form::checkbox($name, 1, false, ['id' => 'input-'.$name, 'class' => 'form-check-input']) }}
	{{ Form::label('input-'.$name, $label, ['class' => 'form-check-label']) }}
 </div>