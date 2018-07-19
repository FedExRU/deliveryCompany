@if ($paginator->hasPages())
    <ul class="pagination site-pagination justify-content-center" role="navigation">
        {{-- Previous Page Link --}}
{{--         {{ dd( !is_null(app('request')->input('sortRank')) ? '&sortRank='.app('request')->input('sortRank') : '' ) }} --}}
        @if ($paginator->onFirstPage())
            <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">
                <span class="page-link" aria-hidden="true">&lsaquo;</span>
            </li>
        @else
            <li class="page-item">
                <a class="page-link" href="
                {{ $paginator->previousPageUrl()
                    .(!is_null(app('request')->input('sortRank')) ? 
                    '&sortRank='.app('request')->input('sortRank') 
                    : ''
                    ) }}
                " rel="prev" aria-label="@lang('pagination.previous')">&lsaquo;</a>
            </li>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <li class="page-item disabled" aria-disabled="true"><span class="page-link">{{ $element }}</span></li>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="page-item active" aria-current="page"><span class="page-link">{{ $page }}</span></li>
                    @else
                        <li class="page-item"><a class="page-link" href="{{ $url
                            .(!is_null(app('request')->input('sortRank')) ? 
                            '&sortRank='.app('request')->input('sortRank') 
                        : ''
                        ) }}">{{ $page }}</a></li>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <li class="page-item">
                <a class="page-link" href="{{ $paginator->nextPageUrl()
                    .(!is_null(app('request')->input('sortRank')) ? 
                    '&sortRank='.app('request')->input('sortRank') 
                    : ''
                    ) }}" rel="next" aria-label="@lang('pagination.next')">&rsaquo;</a>
            </li>
        @else
            <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
                <span class="page-link" aria-hidden="true">&rsaquo;</span>
            </li>
        @endif
    </ul>
@endif
