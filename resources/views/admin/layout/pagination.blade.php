<ul class="flex justify-center space-x-2">
    @if ($paginator->onFirstPage())
        <!-- Previous Page Link -->
        <li class="disabled" aria-disabled="true">
            <span
                class="py-2 px-4 text-gray-400 bg-white border border-gray-200 rounded-lg cursor-not-allowed">Previous</span>
        </li>
    @else
        <!-- Previous Page Link -->
        <li>
            <a href="{{ $paginator->previousPageUrl() }}" rel="prev"
                class="py-2 px-4 text-white bg-gray-600 border border-gray-600 rounded-lg hover:bg-gray-700 focus:outline-none focus:border-gray-800 focus:shadow-outline-gray active:bg-gray-800">
                <i class="fas fa-arrow-left"></i> Previous
            </a>
        </li>
    @endif

    <!-- Pagination Elements -->
    @foreach ($elements as $element)
        <!-- "Three Dots" Separator -->
        @if (is_string($element))
            <li class="disabled" aria-disabled="true"><span
                    class="py-2 px-4 text-gray-400 bg-white border border-gray-200 rounded-lg cursor-not-allowed">{{ $element }}</span>
            </li>
        @endif

        <!-- Array Of Links -->
        @if (is_array($element))
            @foreach ($element as $page => $url)
                @if ($page == $paginator->currentPage())
                    <li class="active" aria-current="page"><span
                            class="py-2 px-4 text-white bg-gray-600 border border-gray-600 rounded-lg">{{ $page }}</span>
                    </li>
                @else
                    <li><a href="{{ $url }}"
                            class="py-2 px-4 text-gray-600 bg-white border border-gray-600 rounded-lg hover:text-white hover:bg-gray-600">{{ $page }}</a>
                    </li>
                @endif
            @endforeach
        @endif
    @endforeach

    <!-- Next Page Link -->
    @if ($paginator->hasMorePages())
        <li><a href="{{ $paginator->nextPageUrl() }}" rel="next"
                class="py-2 px-4 text-white bg-gray-600 border border-gray-600 rounded-lg hover:bg-gray-700 focus:outline-none focus:border-gray-800 focus:shadow-outline-gray active:bg-gray-800">Next <i class="fas fa-arrow-right"></i></a>
        </li>
    @else
        <li class="disabled" aria-disabled="true"><span
                class="py-2 px-4 text-gray-400 bg-white border border-gray-200 rounded-lg cursor-not-allowed">Next</span>
        </li>
    @endif
</ul>
