<div class="rating">
  @if(!is_null($rank))
    @for($i = 0; $i < $rank; $i++)
	   <i class="fas fa-star star rank-ok"></i>
    @endfor
    @for($i = 0; $i < 5 - $rank; $i++)
      <i class="far fa-star star"></i>
    @endfor
  @endif
</div>