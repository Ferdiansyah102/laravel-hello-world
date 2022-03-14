<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $post = 
        [
            [
                'name'=>'burger',
                'image'=>'themes/assets/images/burger.png',
            ],
            [
                'name'=>'chiken_fry',
                'image'=>'themes/assets/images/chiken_fry.png',
            ],
            [
                'name'=>'chiken',
                'image'=>'themes/assets/images/chiken.png',
            ],
            [
                'name'=>'courinder',
                'image'=>'themes/assets/images/courinder.png',
            ],
            [
                'name'=>'drinks_lussy',
                'image'=>'themes/assets/images/drinks_lussy.png',
            ],
            [
                'name'=>'drink',
                'image'=>'themes/assets/images/drink.png',
            ],
            [
                'name'=>'fish-and-chips',
                'image'=>'themes/assets/images/fish-and-chips.png',
            ],
            [
                'name'=>'gorkha-special-chicken',
                'image'=>'themes/assets/images/gorkha-special-chicken.png',
            ],
            [
                'name'=>'lam-tikka',
                'image'=>'themes/assets/images/lam-tikka.png',
            ],
            [
                'name'=>'nepali-momo',
                'image'=>'themes/assets/images/nepali-momo.png',
            ],
            [
                'name'=>'rice',
                'image'=>'themes/assets/images/rice.png',
            ],
            [
                'name'=>'salate',
                'image'=>'themes/assets/images/salate.png',
            ],
        ];
    }
}
