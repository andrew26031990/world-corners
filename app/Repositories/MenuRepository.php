<?php

namespace App\Repositories;

use App\Models\Menu;
use App\Repositories\BaseRepository;

class MenuRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'parent_id',
        'name',
        'slug',
        'is_active'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Menu::class;
    }
}
