<div class="pt-5">
    <div class="flex justify-end">

        @if($actions[0] == true)
            <form action="#" class="sr-only d-inline mx-2 my-2"></form>
            <form action="{{ route($uri.'.edit', $data->id) }}" method="POST"
                  class="d-inline mx-2 my-2">
                @csrf
                @method('GET')
                <button type="submit"
                        class="inline-flex items-center justify-center rounded-md border border-transparent bg-blue-600 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 sm:w-auto">
                    Edit
                </button>
            </form>
        @endif

        @if($actions[1] == true)
            <form action="{{ route($uri.'.destroy', $data->id) }}"
                  method="POST" class="d-inline mx-2 my-2">
                @csrf
                @method('DELETE')
                <button type="submit"
                        class="inline-flex items-center justify-center rounded-md border border-transparent bg-red-600 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 sm:w-auto">
                    Delete
                </button>
            </form>
        @endif
    </div>
</div>
