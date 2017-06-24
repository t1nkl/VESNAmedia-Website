@if ($paginator->hasPages())
    <ul class="pagination-block-list">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
        @else
            <li class="pagination-item">
                <a href="{{ $paginator->previousPageUrl() }}" class="pagination-block-link">
                    <i class="fa fa-angle-left" aria-hidden="true"></i>
                </a>
            </li>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <li class="disabled"><span>{{ $element }}</span></li>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="pagination-item page-active"><span class="pagination-block-link">{{ $page }}</span></li>
                    @else
                        <li class="pagination-item">
                            <a href="{{ $url }}" class="pagination-block-link">{{ $page }}</a>
                        </li>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <li class="pagination-item">
                <a href="{{ $paginator->nextPageUrl() }}" class="pagination-block-link">
                    <i class="fa fa-angle-right" aria-hidden="true"></i>
                </a>
            </li>
        @else
        @endif
    </ul>
@endif





