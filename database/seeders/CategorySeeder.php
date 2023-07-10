<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('categories')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        foreach($this->categorySeeder() as $value)
        {
            Category::create([
                'name' => $value['name'],
            ]);
        }
    }
    private function categorySeeder()
    {
        return  [
            ['name' => 'Gadget',],
            ['name' => 'Gadget'],
            ['name' => 'Electronic'],
            ['name' => 'Clothing'],
            ['name' => 'Book'],
            ['name' => 'Food & Beverages'],
            ['name' => 'Personal Care & Beauty'],
            ['name' => 'Shoes'],
            ['name' => 'Apparel & Accessories'],
            ['name' => 'Furniture & Decor'],
            ['name' => 'Auto & Parts'],
            ['name' => 'Others']
        ];

    }
}
