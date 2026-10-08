@if ($paginator->hasPages())

    <div style="margin-top: 20px;">

        {{-- Showing --}}
        <div style="margin-bottom: 10px; color: #6c757d; font-size: 14px;">
            Showing
            <strong>{{ $paginator->firstItem() }}</strong>
            to
            <strong>{{ $paginator->lastItem() }}</strong>
            of
            <strong>{{ $paginator->total() }}</strong>
            results
        </div>

        {{-- Pagination --}}
        <div style="display: flex; align-items: center; gap: 5px;">

            {{-- Previous --}}
            @if ($paginator->onFirstPage())
                <span style="padding: 6px 10px; color: #999;">
                    &laquo; Previous
                </span>
            @else
                <a href="{{ $paginator->previousPageUrl() }}"
                   style="padding: 6px 10px;">
                    &laquo; Previous
                </a>
            @endif


            {{-- Nomor halaman --}}
            @foreach ($elements as $element)

                @if (is_string($element))
                    <span style="padding: 6px 10px;">
                        {{ $element }}
                    </span>
                @endif

                @if (is_array($element))
                    @foreach ($element as $page => $url)

                        @if ($page == $paginator->currentPage())
                            <span style="padding: 6px 10px; font-weight: bold;">
                                {{ $page }}
                            </span>
                        @else
                            <a href="{{ $url }}"
                               style="padding: 6px 10px;">
                                {{ $page }}
                            </a>
                        @endif

                    @endforeach
                @endif

            @endforeach


            {{-- Next --}}
            @if ($paginator->hasMorePages())
                <a href="{{ $paginator->nextPageUrl() }}"
                   style="padding: 6px 10px;">
                    Next &raquo;
                </a>
            @else
                <span style="padding: 6px 10px; color: #999;">
                    Next &raquo;
                </span>
            @endif

        </div>

    </div>

@endif
