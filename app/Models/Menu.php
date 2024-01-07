<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    public $table = 'menu';

    public $fillable = [
        'parent_id',
        'name',
        'slug',
        'is_active'
    ];

    protected $casts = [
        'name' => 'string',
        'slug' => 'string',
        'is_active' => 'boolean'
    ];

    public static array $rules = [
        'parent_id' => 'nullable',
        'name' => 'required|string|max:255',
        'slug' => 'nullable|string|max:255',
        'is_active' => 'required|boolean',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    public function locations(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(\App\Models\Location::class, 'menu_id');
    }

    public static function getDataForSelect(): array
    {
        $data = self::all();

        $optionsArray = [
            null => null
        ];

        foreach ($data as $item) {
            $optionsArray[$item->id] = $item->name;
        }

        return $optionsArray;
    }
}
