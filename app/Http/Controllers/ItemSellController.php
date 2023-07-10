<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Image;
use App\Models\Store;
use App\Models\Category;
use App\Models\ItemSell;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use App\Services\ItemSell\ItemSellService;
use App\Http\Requests\Sell\SellPostRequest;

class ItemSellController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('users.items.index', [
            'items' => ItemSell::query()
                ->with('store')
                ->where('user_id', auth()->id())
                ->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('users.items.create',[
            'categories' => Category::all(),
            'stores' => Store::where('user_id',auth()->id())->get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SellPostRequest $request,ItemSellService $imageService)
    {
        abort_if(!auth()->check(), 403, 'Unauthorized.');

        $item = ItemSell::create([
            'item_name' => $request->item_name,
            'item_description' => $request->item_description,
            'item_quantity' => $request->item_quantity,
            'category_id' => $request->category_id,
            'price' => $request->value_price,
            'old_price' => $request->old_value_price ?? null,
            'item_number' => floor(time()-999999999),
            'store_id' => $request->store_id ?? null,
            'user_id' => auth()->id()
        ]);
        if($item) {
            $imageService->store($request->item_images,$item->id);
        }
        return redirect()->route('items.create')->with('success','Successfully posted an item.');
    }

    /**
     * Display the specified resource.
     */
    public function show(ItemSell $itemSell)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ItemSell $itemSell)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ItemSell $itemSell)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ItemSell $itemSell)
    {
        //
    }
}
