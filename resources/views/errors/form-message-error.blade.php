<div class="feedback invalid-feedback">
	@if($errors->has($inputName))
		{{ $errors->first($inputName) }}
	@endif
</div>