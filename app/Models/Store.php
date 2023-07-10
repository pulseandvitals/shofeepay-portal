<?php

namespace App\Models;

use Carbon\Carbon;
use app\Traits\HasUuid;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Store extends Model
{
    use HasFactory,HasUuid;
    protected $fillable = [
        'store_name',
        'store_description',
        'user_id',
        'contact_no',
        'address',
        'is_company',
        'store_avatar',
    ];
    public function user()
    {
            return $this->belongsTo(User::class);
    }

   public function getStoreDateAttribute($value)
    {
        return $this->attributes['created_at'] = Carbon::parse($value)->format('M d Y');
    }
}
