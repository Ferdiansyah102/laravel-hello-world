<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = 
        [
            [
                'name'=>'burger',
                'image'=>'themes/assets/images/burger.png',
            ],
            [
                'name'=>'drink',
                'image'=>'themes/assets/images/drink.png',
            ],

            [
                'name'=>'salate',
                'image'=>'themes/assets/images/salate.png',
            ]
        ];

        \DB::table('post')->insert($posts);
    }
}
