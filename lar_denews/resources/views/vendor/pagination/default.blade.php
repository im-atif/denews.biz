@if ($paginator->hasPages())
    <hr class="m-t-xs-50 m-b-xs-20">
    
    <div class="pagination">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <span><i class="fas fa-caret-left"></i></span>
        @else            
            <a href="{{ $paginator->previousPageUrl() }}"><i class="fas fa-caret-left"></i></a>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <span>{{ $element }}</span>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <span class="active">{{ $page }}</span>
                    @else
                        <a href="{{ $url }}">{{ $page }}</a>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <a href="{{ $paginator->nextPageUrl() }}"><i class="fas fa-caret-right"></i></a>
        @else
            <span><i class="fas fa-caret-right"></i></span>
        @endif
    </div>

    <hr class="m-t-xs-20 m-b-xs-50">
@endif
