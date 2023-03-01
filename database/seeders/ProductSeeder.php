<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([[
            'name' => 'POCO X3 Mobile',
            'price' => '250',
            'description' => 'A smartphone with 6GB ram',
            'category' => 'Mobile',
            'gallery' => 'hhttps://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTclwZRIuhhv1JDO2osPxT1z4HGa1cWSyhbSw&usqp=CAU',            
        ],
        [
            'name' => 'Panasonic Tv',
            'price' => '500',
            'description' => 'A TV with radio',
            'category' => 'TV',
            'gallery' => 'https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.sony-asia.com%2Felectronics%2Ftelevisions%2Fw830k-w880k-series&psig=AOvVaw2LBBbKNdhx70QTA3TBqY_Y&ust=1675492475797000&source=images&cd=vfe&ved=0CBAQjRxqFwoTCIjVzYDe-PwCFQAAAAAdAAAAABAE',
        ],
        [
            'name' => 'Sony TV',
            'price' => '600',
            'description' => 'A smartphone with 4GB ram',
            'category' => 'TV',
            'gallery' => 'https://www.google.com/url?sa=i&url=https%3A%2F%2Fdinapalagroup.lk%2Fproduct%2Fsony-50-x75-4k-ultra-hd-hdr-android-smart-tv-kd-50x75%2F&psig=AOvVaw2LBBbKNdhx70QTA3TBqY_Y&ust=1675492475797000&source=images&cd=vfe&ved=0CBAQjRxqFwoTCIjVzYDe-PwCFQAAAAAdAAAAABAJ'],
        [
            'name' => 'LG Mobile',
            'price' => '200',
            'description' => 'A smartphone with 4GB ram',
            'category' => 'Mobile',
            'gallery' => 'https://i0.wp.com/chinthanagsm.lk/wp-content/uploads/2022/08/lg-wings.jpg?fit=1000%2C1000&ssl=1',            
        ]
        ]
        );
    }
}
