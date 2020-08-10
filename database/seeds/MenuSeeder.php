<?php

use App\Category;
use App\Models\Menu;
use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = factory(Category::class, 5)->create();
        $categories->each(function($cagetory) {
            factory(Menu::class, 5)->create([
                'category_id' => $cagetory->id
            ]);
        });

    }
}
