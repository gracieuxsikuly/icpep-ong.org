@if ($paginator->hasPages())
    <nav>
        <ul class="page_pagination center">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li class="tran3s" aria-disabled="true" aria-label="@lang('pagination.previous')">
                    <span class="page-link" aria-hidden="true"><i class="fa fa-angle-left" aria-hidden="true"></i></span>
                </li>
            @else
                <li class="tran3s">
                    <a class="page-link" href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
                </li>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <li class="tran3s disabled" aria-disabled="true"><span class="page-link">{{ $element }}</span></li>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="active tran3s" aria-current="page"><a class="page-link active tran3s">{{ $page }}</a></li>
                        @else
                            <li class="tran3s"><a class="page-link tran3s" href="{{ $url }}">{{ $page }}</a></li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li class="tran3s">
                    <a class="page-link" href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
                </li>
            @else
                <li class="tran3s disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
                    <span class="page-link" aria-hidden="true"><i class="fa fa-angle-right" aria-hidden="true"></i></span>
                </li>
            @endif
        </ul>
    </nav>
@endif
