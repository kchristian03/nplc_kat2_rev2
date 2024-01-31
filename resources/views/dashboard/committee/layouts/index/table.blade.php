<div class="py-6 relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead
            class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
        <tr>
            <th scope="col" class="px-6 py-3">
                ID
            </th>
            @foreach($t_head as $th)
                <th scope="col" class="px-6 py-3">
                    {{ $th }}
                </th>
            @endforeach
            <th scope="col" class="px-6 py-3">
                <span class="sr-only">Action</span>
            </th>
        </tr>
        </thead>
        <tbody>
        @foreach ($table_data as $data)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <th scope="row"
                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    <!-- get name of user -->
                    {{ $data->id }}
                </th>
                @foreach($t_body as $tb)
                    <td class="px-6 py-4">
                        {{ $data->$tb }}
                    </td>
                @endforeach
                <td class="px-6 py-4 ">
                    @if(Auth::user()->hasRole('Super Admin'))
                        @include('dashboard.committee.layouts.index.actionButtons', ['data' => $data, 'uri' => $uri, 'actions' => $actions])
                    @endif
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <div class="mx-4">
        {{$table_data->links()}}
    </div>
</div>
