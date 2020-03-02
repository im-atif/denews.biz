<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['Business', 'business'],
            ['Technology', 'technology'],
            ['Education', 'education'],
            ['Health', 'health'],
            ['Fashion', 'fashion'],
            ['Lifestyle', 'lifestyle'],
            ['Sports', 'sports'],
            ['Travel', 'travel'],
            ['Food', 'food'],
            ['Cooking', 'cooking'],
            ['Wildlife', 'wildlife'],
            ['Beauty', 'beauty'],
            ['World', 'world'],
            ['Racing', 'racing'],
            ['Swimming', 'swimming'],
            ['Science', 'science'],
            ['Philosophy', 'philosophy'],
            ['Advertising', 'advertising'],
            ['Trade', 'trade'],
            ['Motivation', 'motivation'],
            ['Politics', 'politics'],
            ['Entertainment', 'entertainment'],
            ['Music', 'music']
        ];

        foreach ($data as $key => $value) {
            App\Category::create([
                'name'      =>  $value[0],
                'slug'      =>  $value[1]
            ]);
        }
    }
}
