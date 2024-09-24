<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Location extends Model
{
    public $table = 'locations';

    public $fillable = [
        'menu_id',
        'title',
        'slug',
        'keywords',
        'description',
        'text',
        'short_text',
        'latitude',
        'longitude',
        'img'
    ];

    protected $casts = [
        'title' => 'string',
        'slug' => 'string',
        'keywords' => 'string',
        'description' => 'string',
        'text' => 'string',
        'short_text' => 'string',
        'latitude' => 'decimal:8',
        'longitude' => 'decimal:8',
        'img' => 'string'
    ];

    public static array $rules = [
        'menu_id' => 'required',
        'title' => 'required|string|max:255',
        //'slug' => 'required|string|max:255',
        'keywords' => 'required|string|max:255',
        'description' => 'required|string|max:255',
        'text' => 'required|string',
        'short_text' => 'required|string|max:65535',
        'latitude' => 'required|numeric',
        'longitude' => 'required|numeric',
        'img' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        'deleted_at' => 'nullable',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    public function menu(): BelongsTo
    {
        return $this->belongsTo(Menu::class, 'menu_id');
    }

    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class, 'location_id');
    }
}
