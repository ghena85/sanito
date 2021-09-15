@if ($paginator->hasPages())

    @if($paginator->previousPageUrl() != null)
        <a href="{{$paginator->previousPageUrl()}}">
            <button class="icon-slider-arrow"></button>
        </a>
    @endif


    {{-- Pagination Elements --}}
    @foreach ($elements as $element)
        {{-- Array Of Links --}}
        @if (is_array($element))
            @foreach ($element as $page => $url)
            <ul class="pagination-list">
                @if ($page == $paginator->currentPage())
                    <li class="pagination-list__item active">
                        <a href="{{ $url }}" class="pagination-list__link">{{ $page }}</a>
                    </li>
                @else
                    <li class="pagination-list__item">
                        <a href="{{ $url }}" class="pagination-list__link">{{ $page }}</a>
                    </li>
                @endif
            </ul>
            @endforeach
        @endif
    @endforeach

    @if($paginator->nextPageUrl() != null)
        <a href="{{ $paginator->nextPageUrl() }}">
            <button class="icon-slider-arrow slider-arrow__next"></button>
        </a>
    @endif
@endif
