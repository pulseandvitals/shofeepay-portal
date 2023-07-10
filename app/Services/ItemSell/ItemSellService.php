<?php
namespace App\Services\ItemSell;

use App\Models\Image;
use Illuminate\Support\Facades\URL;

class ItemSellService {

    public function store(array $images, $item)
    {
        foreach ($images as $key => $value) {
            $file_name = rand() . '.' . $value->getClientOriginalExtension();
            $value->move(public_path('users/images/item_images/'.auth()->id()), $file_name);
            $file_url = URL::to('/users/images/item_images/'.auth()->id().'/'.$file_name);
            Image::create([
                'file_url' => $file_url,
                'file_name' => $file_name,
                'order' => $key,
                'item_sell_id' => $item
            ]);
        }
    }
}
