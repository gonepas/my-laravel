<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            'Cat' => [
                'British Shorthair',
                'Burmese',
                'Persian',
                'Scottish Fold',
                'Siberian'
            ],
            'Dog' => [
                'Akita',
                'Basset Hound',
                'Bulldog',
                'Corgi',
                'German Shepherd',
                'Rottweiler'
            ],
            'Toxic pets' => [
                'Snake' => [
                    'Anaconda',
                    'Cobra',
                    'Kingsnakes',
                    'Green Tree Python',
                ],
                'Spider' => [
                    'Peacock Parachute',
                    'Sequinned spider',
                    'Red-legged golden-orb-weaver',
                    'Wasp spider'
                ]
            ]
        ];
        foreach ($categories as $name => $category) {
            $new_category = Category::create(['name' => $name, 'parent' => NULL]);
            $new_category->save();
            foreach ($category as $lvl2_name => $lvl2_category) {
                if (!is_array($lvl2_category)) {
                    $new_sub_category = Category::create(['name' => $lvl2_category, 'parent' => $new_category->id]);
                    $new_sub_category->save();
                } else {
                    $new_sub_category = Category::create(['name' => $lvl2_name, 'parent' => $new_category->id]);
                    $new_sub_category->save();
                    foreach ($lvl2_category as $lvl3_name) {
                        $new_lvl3_category = Category::create(['name' => $lvl3_name, 'parent' => $new_category->id]);
                        $new_lvl3_category->save();
                    }
                }
            }
        }
    }
}
