<?php

namespace App\Models;

use Carbon\Carbon;
use app\Traits\HasUuid;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ItemSell extends Model
{
    use HasFactory, HasUuid;
    protected $fillable = [
        'user_id',
        'category_id',
        'store_id',
        'item_description',
        'item_name',
        'price',
        'old_price',
        'item_quantity',
        'is_available',
        'view_count',
        'item_number'
    ];
    protected $casts = [
        'item_image' => 'array',
   ];

    public function category()
    {
        return $this->belongsTo(Category::class,'category_id');
    }
    public function store()
    {
        return $this->belongsTo(Store::class,'store_id');
    }
    public function images()
    {
        return $this->hasMany(Image::class,'item_sell_id');
    }
    public function getItemDateAttribute($value)
    {
        return $this->attributes['created_at'] = Carbon::parse($value)->format('M d Y');
    }

}
