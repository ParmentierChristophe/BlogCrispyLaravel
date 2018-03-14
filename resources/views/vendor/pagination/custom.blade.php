@if ($paginator->hasPages())
<div class="pagination">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <li class="older-pagination disabled">Newest</li>
        @else
            <a class="older-pagination Link-animatedHover" href="{{ $paginator->previousPageUrl() }}" rel="prev">Newest</a>

        @endif

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())

            <a class="newest-pagination Link-animatedHover" href="{{ $paginator->nextPageUrl() }}" rel="next">Older</a>

        @else
        <li class="newest-pagination disabled">Older</li>
        @endif
        </div>
@endif
