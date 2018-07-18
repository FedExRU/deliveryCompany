<div class="tab-pane fade {{ isset($isActive) && $isActive ? 'active show' : '' }}" id="{{ $id }}" role="tabpanel" aria-labelledby="{{ $ariaLabelledBy }}" aria-expanded="{{ isset($isActive) && $isActive ? 'true' : 'false' }}">
	@if(!empty($template))
		@include($template, [
			'content' => $content
		])
	@else
     {{ $content }}
    @endif
</div>