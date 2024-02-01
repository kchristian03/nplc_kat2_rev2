<div class="col-md-6 mb-4">
    <div class=" bg-white border border-gray-200 rounded-lg shadow">

        <img class="rounded-t-lg" src="{{ asset($item->image_path) }}" alt="" />

        {{ Log::info(asset($item->image_path) ) }}

        <div class="p-5">
                <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900">{{ $item->name }} - {{ $item->price }} Coin</h5>
            <p class="mb-3 font-normal text-gray-700 ">{{ $item->description }}</p>
            @livewire('buy', ['team_id' => auth()->user()->team->id, 'item_id' => $item->id, 'price' => $item->price])
        </div>
    </div>
</div>
