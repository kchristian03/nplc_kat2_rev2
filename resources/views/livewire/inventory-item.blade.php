<div class="col-md-6 mb-4">
    <div class="bg-white border border-gray-200 rounded-lg shadow">

        <img class="rounded-t-lg" src="{{ asset($item->image_path) }}" alt="" />

        <div class="p-5">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 ">{{ $item->name }}</h5>
            <p class="mb-3 font-normal text-gray-700">{{ $item->description }}</p>
            @if($item->code != 'KC')
            @livewire('use_item', ['team_id' => auth()->user()->team->id, 'item_id' => $item->id])
            @endif
        </div>
    </div>
</div>


