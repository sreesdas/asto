<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Configuration extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $casts = [
        'value' => 'array'
    ];

    public function scopeRetrieve($query, $key)
    {
        return $query->where('key', $key)->get();
    }

    public static function getValue($key)
    {
        return static::retrieve($key)->first()?->value;
    }
}
