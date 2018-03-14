@if ($paginator->hasPages())
<div class="pagination">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <li class="older-pagination disabled">Older</li>
        @else
            <a class="older-pagination Link-animatedHover" href="{{ $paginator->previousPageUrl() }}" rel="prev">Older</a>

        @endif

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())

            <a class="newest-pagination Link-animatedHover" href="{{ $paginator->nextPageUrl() }}" rel="next">Newest</a>

        @else
        <li class="newest-pagination disabled">Newest</li>
        @endif
        </div>
@endif
