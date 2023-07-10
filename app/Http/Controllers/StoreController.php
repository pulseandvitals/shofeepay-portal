<?php

namespace App\Http\Controllers;

use App\Models\Store;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use App\Http\Requests\Store\StoreRequest;

class StoreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('users.stores.index', [
            'stores' => Store::query()
                ->where('user_id',auth()->id())
                ->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('users.stores.create');
    }

    public function store(StoreRequest $request)
    {
        abort_if(!auth()->check(), 403, 'Unauthorized.');
        $avatar = $request->file('store_avatar');
        if($avatar)
        {
            $avatar_name = rand() . '.' . $avatar->getClientOriginalExtension();
            $avatar->move(public_path('users/images/item_images/'.auth()->id()), $avatar_name);
            $avatar_url = URL::to('/users/images/item_images/'.auth()->id().'/'.$avatar_name);
        }

        Store::create([
            'store_name' => $request->store_name,
            'store_description' => $request->store_description,
            'address' => $request->address,
            'contact_no' => $request->contact_no,
            'is_company' => $request->is_company ? 1 : 0,
            'store_avatar' => $avatar_url,
            'user_id' => auth()->id()
        ]);

        return redirect()->route('stores.create')->with('success','Successfully created a store.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Store $store)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Store $store)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Store $store)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Store $store)
    {
        //
    }
}
