<?php

namespace App\Models;

use app\Traits\HasUuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory,HasUuid;
    protected $fillable = [
        'file_url',
        'file_name',
        'order',
        'item_sell_id'
    ];
}
