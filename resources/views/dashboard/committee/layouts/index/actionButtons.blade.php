
@if ($data->trashed())
    @if($actions[3] == true)
        <div class="mb-4">
            <form action="{{ route($uri.'.restore', $data) }}" method="POST">
                @csrf
                @method('POST')
                <button type="submit"
                        class="inline-flex items-center justify-center rounded-md border border-transparent bg-yellow-600 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-yellow-700 focus:outline-none focus:ring-2 focus:ring-yellow-500 focus:ring-offset-2 sm:w-auto">
                    Restore
                </button>
            </form>
        </div>
    @endif

@else
    <table>
        <tr>
            @if($uri == 'users')
                <td>
                    <form
                            action="{{ route($uri.'.resetPassword', $data->id) }}"
                            method="POST" class="d-inline mx-2 my-2">
                        @csrf
                        @method('GET')
                        <button type="submit"
                                class="inline-flex items-center justify-center rounded-md border border-transparent bg-amber-600 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-amber-700 focus:outline-none focus:ring-2 focus:ring-amber-500 focus:ring-offset-2 sm:w-auto">
                            Reset Password
                        </button>
                    </form>
                </td>

            @endif
            @if($actions[0] == true)
                <td>
                    <form
                            action="{{ route($uri.'.show', $data->id) }}"
                            method="POST" class="d-inline mx-2 my-2">
                        @csrf
                        @method('GET')
                        <button type="submit"
                                class="inline-flex items-center justify-center rounded-md border border-transparent bg-green-600 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2 sm:w-auto">
                            View
                        </button>
                    </form>
                </td>
            @endif
            @if($actions[1] == true)
                <td>
                    <form
                            action="{{ route($uri.'.edit', $data->id) }}"
                            method="POST" class="d-inline mx-2 my-2">
                        @csrf
                        @method('GET')
                        <button type="submit"
                                class="inline-flex items-center justify-center rounded-md border border-transparent bg-blue-600 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 sm:w-auto">
                            Edit
                        </button>
                    </form>
                </td>
            @endif
            @if($actions[2] == true)
                <td>
                    <form
                            action="{{ route($uri.'.destroy', $data->id) }}"
                            method="POST" class="d-inline mx-2 my-2">
                        @csrf
                        @method('DELETE')
                        <button type="submit"
                                class="inline-flex items-center justify-center rounded-md border border-transparent bg-red-600 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 sm:w-auto">
                            Delete
                        </button>
                    </form>
                </td>
            @endif

        </tr>
    </table>
@endif
