<?php

namespace Database\Seeders;

use App\Models\Menu;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Menu::truncate();
        if(config('app.locale') == 'ru'){
            Menu::withoutEvents(function () {
                Menu::updateOrCreate(['id' => 1, 'parent_id' => null, 'name' => 'Главная', 'slug' => '/', 'is_active' => true], ['name' => 'Главная']);
                $continents = Menu::updateOrCreate(['id' => 2, 'parent_id' => null, 'name' => 'Континенты', 'slug' => '/continents', 'is_active' => true], ['name' => 'Континенты']);
                Menu::updateOrCreate(['id' => 3, 'parent_id' => null, 'name' => 'Галерея', 'slug' => '/gallery', 'is_active' => true], ['name' => 'Галерея']);
                Menu::updateOrCreate(['id' => 4, 'parent_id' => null, 'name' => 'Контакты', 'slug' => '/contacts', 'is_active' => true], ['name' => 'Контакты']);
                Menu::updateOrCreate(['id' => 6, 'parent_id' => $continents->id, 'name' => 'Южная Америка', 'slug' => '/south-america', 'is_active' => true], ['name' => 'Южная Америка']);
                Menu::updateOrCreate(['id' => 7, 'parent_id' => $continents->id, 'name' => 'Северная Америка', 'slug' => '/north-america', 'is_active' => true], ['name' => 'Северная Америка']);
                Menu::updateOrCreate(['id' => 8, 'parent_id' => $continents->id, 'name' => 'Африка', 'slug' => '/africa', 'is_active' => true], ['name' => 'Африка']);
                Menu::updateOrCreate(['id' => 11, 'parent_id' => null, 'name' => 'Города', 'slug' => '/cities', 'is_active' => true], ['name' => 'Города']);
                $earth = Menu::updateOrCreate(['id' => 12, 'parent_id' => null, 'name' => 'Земля', 'slug' => '/earth', 'is_active' => true], ['name' => 'Земля']);
                Menu::updateOrCreate(['id' => 13, 'parent_id' => $earth->id, 'name' => 'Океаны', 'slug' => '/oceans', 'is_active' => true], ['name' => 'Океаны']);
                Menu::updateOrCreate(['id' => 14, 'parent_id' => $earth->id, 'name' => 'Моря', 'slug' => '/seas', 'is_active' => true], ['name' => 'Моря']);
                Menu::updateOrCreate(['id' => 15, 'parent_id' => $earth->id, 'name' => 'Чудеса света', 'slug' => '/wonders_of_the_world', 'is_active' => true], ['name' => 'Чудеса света']);
                Menu::updateOrCreate(['id' => 16, 'parent_id' => $continents->id, 'name' => 'Австралия и Океания', 'slug' => '/australia', 'is_active' => true], ['name' => 'Австралия и Океания']);
                Menu::updateOrCreate(['id' => 17, 'parent_id' => $continents->id, 'name' => 'Евразия', 'slug' => '/eurasia', 'is_active' => true], ['name' => 'Евразия']);
                Menu::updateOrCreate(['id' => 18, 'parent_id' => null, 'name' => 'О нас', 'slug' => '/about', 'is_active' => true], ['name' => 'О нас']);
            });
        }else if (config('app.locale') == 'en'){
            Menu::withoutEvents(function () {
                Menu::updateOrCreate(['id' => 1, 'parent_id' => null, 'name' => 'Main', 'slug' => '/', 'is_active' => true], ['name' => 'Главная']);
                $continents = Menu::updateOrCreate(['id' => 2, 'parent_id' => null, 'name' => 'Continents', 'slug' => '/continents', 'is_active' => true], ['name' => 'Континенты']);
                Menu::updateOrCreate(['id' => 3, 'parent_id' => null, 'name' => 'Gallery', 'slug' => '/gallery', 'is_active' => true], ['name' => 'Галерея']);
                Menu::updateOrCreate(['id' => 4, 'parent_id' => null, 'name' => 'Contacts', 'slug' => '/contacts', 'is_active' => true], ['name' => 'Контакты']);
                Menu::updateOrCreate(['id' => 6, 'parent_id' => $continents->id, 'name' => 'South America', 'slug' => '/south-america', 'is_active' => true], ['name' => 'Южная Америка']);
                Menu::updateOrCreate(['id' => 7, 'parent_id' => $continents->id, 'name' => 'North America', 'slug' => '/north-america', 'is_active' => true], ['name' => 'Северная Америка']);
                Menu::updateOrCreate(['id' => 8, 'parent_id' => $continents->id, 'name' => 'Africa', 'slug' => '/africa', 'is_active' => true], ['name' => 'Африка']);
                Menu::updateOrCreate(['id' => 11, 'parent_id' => null, 'name' => 'Cities', 'slug' => '/cities', 'is_active' => true], ['name' => 'Города']);
                $earth = Menu::updateOrCreate(['id' => 12, 'parent_id' => null, 'name' => 'Earth', 'slug' => '/earth', 'is_active' => true], ['name' => 'Земля']);
                Menu::updateOrCreate(['id' => 13, 'parent_id' => $earth->id, 'name' => 'Oceans', 'slug' => '/oceans', 'is_active' => true], ['name' => 'Океаны']);
                Menu::updateOrCreate(['id' => 14, 'parent_id' => $earth->id, 'name' => 'Seas', 'slug' => '/seas', 'is_active' => true], ['name' => 'Моря']);
                Menu::updateOrCreate(['id' => 15, 'parent_id' => $earth->id, 'name' => 'Wonders of the world', 'slug' => '/wonders_of_the_world', 'is_active' => true], ['name' => 'Чудеса света']);
                Menu::updateOrCreate(['id' => 16, 'parent_id' => $continents->id, 'name' => 'Australia and Oceania', 'slug' => '/australia', 'is_active' => true], ['name' => 'Австралия и Океания']);
                Menu::updateOrCreate(['id' => 17, 'parent_id' => $continents->id, 'name' => 'Euroasia', 'slug' => '/eurasia', 'is_active' => true], ['name' => 'Евразия']);
                Menu::updateOrCreate(['id' => 18, 'parent_id' => null, 'name' => 'About', 'slug' => '/about', 'is_active' => true], ['name' => 'О нас']);
            });
        }
    }
}
