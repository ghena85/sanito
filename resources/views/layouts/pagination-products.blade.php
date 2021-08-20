@if ($paginator->hasPages())
    <ul class="shop_pagination">

        @if($paginator->previousPageUrl() != null)
            <a href="{{$paginator->previousPageUrl()}}">
                <svg width="7" height="11" viewBox="0 0 7 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M6.8415 9.13555L3.02484 5.31055L6.8415 1.48555L5.6665 0.310547L0.666504 5.31055L5.6665 10.3105L6.8415 9.13555Z" fill="#4A4F55"/>
                </svg>
            </a>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="shop_list active">
                            <a href="{{ $url }}">{{ $page }}</a>
                        </li>
                    @else
                        <li class="shop_list">
                            <a href="{{ $url }}">{{ $page }}</a>
                        </li>
                    @endif
                @endforeach
            @endif
        @endforeach

        @if($paginator->nextPageUrl() != null)
            <a href="{{ $paginator->nextPageUrl() }}">
                <svg width="7" height="11" viewBox="0 0 7 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0.158203 9.13555L3.97487 5.31055L0.158203 1.48555L1.3332 0.310547L6.3332 5.31055L1.3332 10.3105L0.158203 9.13555Z" fill="#4A4F55"/>
                </svg>
            </a>
        @endif

    </ul>
@endif
