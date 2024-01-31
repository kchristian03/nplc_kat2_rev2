<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Http\Requests\StoreItemRequest;
use App\Http\Requests\UpdateItemRequest;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //get all item with serach
        $table_data = Item::where('name', 'like', '%' . request('search') . '%')
            ->orWhere('description', 'like', '%' . request('search') . '%')
            ->withTrashed()
            ->paginate(10);
        return view('dashboard.committee.item.index', compact('table_data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.committee.item.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreItemRequest $request)
    {
        Item::create([
            'code' => $request->code,
            'name' => $request->name,
            'description' => $request->description,
            'duration' => $request->duration,
            'price' => $request->price,
            'image_path' => $request->image_path,
        ]);
        return redirect()->route('items.index')->with('success', 'Item created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Item $data)
    {
        return view('dashboard.committee.item.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Item $data)
    {
        return view('dashboard.committee.item.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateItemRequest $request, Item $data)
    {
        //if image is updated
        if ($request->hasFile('image_path')) {

            //store image_profile with new name and get the path
            $date = now()->format('ymd_His');
            $originalFilename = $request->file('image_path')->getClientOriginalName();
            $newFilenameImage = 'imageItem_' . $date . '_' . $originalFilename;
            $request->file('image_path')->storeAs('public/items', $newFilenameImage);

            // Update the request with the new file path
            $request->merge(['image_path' => $newFilenameImage]);
        }else{
            //if image_profile is not updated
            $request->merge(['image_path' => $data->image_path]);
            $newFilenameImage = $data->image_path;
        }

        $data->update([
            'code' => $request->code,
            'name' => $request->name,
            'description' => $request->description,
            'duration' => $request->duration,
            'price' => $request->price,
            'image_path' => $newFilenameImage,
        ]);
        return redirect()->route('items.index')->with('success', 'Item updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Item $data)
    {
        $data->delete();
        return redirect()->route('items.index')->with('success', 'Item deleted successfully.');
    }

    /**
     * Restore the specified resource from storage.
     */
    public function restore($id)
    {
        Item::withTrashed()->where('id', $id)->restore();
        return redirect()->route('items.index')->with('success', 'Item restored successfully.');
    }
}
