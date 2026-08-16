@if ($paginator->hasPages())

    <nav class="custom-pagination" aria-label="Pagination">

        {{-- Previous --}}
        @if ($paginator->onFirstPage())

            <span class="pagination-arrow pagination-arrow--disabled">
                <span aria-hidden="true">&lsaquo;</span>
                <span class="sr-only">Previous</span>
            </span>

        @else

            <a
                href="{{ $paginator->previousPageUrl() }}"
                class="pagination-arrow"
                rel="prev"
            >
                <span aria-hidden="true">&lsaquo;</span>
                <span class="sr-only">Previous</span>
            </a>

        @endif


        {{-- Page Numbers --}}
        @foreach ($elements as $element)

            {{-- "Three Dots" Separator --}}
            @if (is_string($element))

                <span class="pagination-ellipsis">
                    {{ $element }}
                </span>

            @endif


            {{-- Array Of Links --}}
            @if (is_array($element))

                @foreach ($element as $page => $url)

                    @if ($page == $paginator->currentPage())

                        <span class="pagination-page pagination-page--active">
                            {{ $page }}
                        </span>

                    @else

                        <a
                            href="{{ $url }}"
                            class="pagination-page"
                        >
                            {{ $page }}
                        </a>

                    @endif

                @endforeach

            @endif

        @endforeach


        {{-- Next --}}
        @if ($paginator->hasMorePages())

            <a
                href="{{ $paginator->nextPageUrl() }}"
                class="pagination-arrow"
                rel="next"
            >
                <span aria-hidden="true">&rsaquo;</span>
                <span class="sr-only">Next</span>
            </a>

        @else

            <span class="pagination-arrow pagination-arrow--disabled">
                <span aria-hidden="true">&rsaquo;</span>
                <span class="sr-only">Next</span>
            </span>

        @endif

    </nav>

@endif
