<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class CreateProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = Product::create([  // ID = 1
            'title'              => 'galaxy note 5',
            'description'        => 'Samsung',
            'meta_description'   => 'black, made in vietnam',
            'keywords'           => 'mobile, phone, portable',
            'price'              => '5000',
            'discount'           => '0.05',
            'image'              => '/assets/images/note5.jfif',
            'category_id'        => 1,
        ]);

        $product = Product::create([  // ID = 2
            'title'              => 'Pubgy latest',
            'description'        => 'war video game',
            'meta_description'   => 'multiplayer system and story mode',
            'keywords'           => 'game, war, guns',
            'price'              => '500',
            'discount'           => '0',
            'image'              => '/assets/images/pubgy.jfif',
            'category_id'        => 3,
        ]);
    }
}
