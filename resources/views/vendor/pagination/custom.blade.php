@if ($paginator->hasPages())
<ul>


    @if ($paginator->onFirstPage())
    <li class="disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">
        <a href="#">&lt;</a>
    </li>
    @else
    <li>
        <a href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')">&lt;</a>
    </li>
    @endif

    @foreach ($elements as $element)

    @if (is_string($element))
    <li class="disabled" aria-disabled="true"><span>{{ $element }}</span></li>
    @endif


    @if (is_array($element))
    @foreach ($element as $page => $url)
    @if ($page == $paginator->currentPage())
    <li class="active" aria-current="page"><span>{{ $page }}</span></li>
    @else
    <li><a href="{{ $url }}">{{ $page }}</a></li>
    @endif
    @endforeach
    @endif
    @endforeach

    {{-- Next Page Link --}}
    @if ($paginator->hasMorePages())
    <li>
        <a href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')">&gt;</a>
    </li>
    @else
    <li class="disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
        <span aria-hidden="true">&gt;</span>
    </li>
    @endif





</ul>
@endif