<form action="{{ route($uri.'.update', $data->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')


    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <tbody>
            @foreach($table as $key => $value)
                <tr class="border-b border-gray-200 dark:border-gray-700">
                    <th scope="row"
                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                        <label for="{{$value}}">{{$key}}</label>
                    </th>
                    <td class="px-6 py-4">
                        @if($key == "Username")
                            {{--Dropdown--}}
                            <select id="{{$value}}" name="{{$value}}" class="w-full border rounded p-2">
                                <option selected disabled value="">-- Select User --</option>
                                @foreach ($users as $user)
                                    <option value="{{ $user->id }}" {{ $user->id == $data->$value ? 'selected' : '' }}>{{ $user->username }}</option>
                                @endforeach
                            </select>
                        @elseif($key == "Progress")
                            {{--Dropdown--}}
                            <select id="{{$value}}" name="{{$value}}" class="w-full border rounded p-2">
                                <option selected disabled value="">-- Select Progress --</option>
                                @foreach ($puzzles as $puzzle)
                                    <option value="{{ $puzzle->id }}" {{ $puzzle->pos_code == $data->$value ? 'selected' : '' }}>{{ $puzzle->pos_code }}</option>
                                @endforeach
                            </select>
                        @elseif($key == "Progress Story")
                            {{--Dropdown--}}
                            <select id="{{$value}}" name="{{$value}}" class="w-full border rounded p-2">
                                <option selected disabled value="">-- Select Progress Story --</option>
                                @foreach ($stories as $story)
                                    <option value="{{ $story->id }}" {{ $story->story_path == $data->$value ? 'selected' : '' }}>{{ $story->story_path }}</option>
                                @endforeach
                            </select>
                        @elseif($key == "Forfitable")
                            {{--Dropdown (True or False--}}
                            <select id="{{$value}}" name="{{$value}}" class="w-full border rounded p-2">
                                <option selected disabled value="">-- Select Forfitable --</option>
                                <option value="1" {{ $data->$value == 1 ? 'selected' : '' }}>True</option>
                                <option value="0" {{ $data->$value == 0 ? 'selected' : '' }}>False</option>
                            </select>
                        @elseif ($key == "Image")
                            <img src="{{asset('storage/'.$uri.'/'.$data->$value)}}" alt="{{$data->$value}}" class="w-48 h-48" id="update-image">
                            <input type="file" name="image_path" id="file-input" accept="image/*" style="display: none;">
                        @else
                            <input type="text" id="{{$value}}" name="{{$value}}"
                                   class="w-full border rounded p-2"
                                   value="{{$data->$value}}"
                                   required>
                        @endif
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

    @include('dashboard.committee.layouts.edit.actionButtons', ['uri' => $uri])
</form>

<script>
    document.getElementById("update-image").addEventListener("click", function() {
        document.getElementById("file-input").click();
    });

    document.getElementById("file-input").onchange = function(event) {
        const file = event.target.files[0];
        document.getElementById("update-image").src = URL.createObjectURL(file);

        // Handle server-side logic for uploading the file here, if needed
    };
</script>
