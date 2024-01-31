<form action="{{ route($uri.'.index') }}" method="GET" class="mt-4 flex">
    <div class="mb-4">
        <input type="search" name="search" value="{{ $search ?? '' }}" placeholder="Search"
               class="inline-flex w-auto shadow appearance-none border rounded py-2 px-3 mr-4 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
        <button type="button"
                class="inline-flex items-center px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                onclick="window.location = '{{ route($uri.'.index') }}'">Clear Search
        </button>
    </div>
</form>
