<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Product_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
         DB::table('products')->insert([
         [
                'name'=>'LG TV',
                'price'=>'200000',
                'description'=>'a smart phone with 8gb ram',
                'category'=>'TV',
                'gallery'=>'https://www.lg.com/in/images/tvs/md07511862/thumbnail/32LM563BPTC-350-01.jpg',
          ],
          [
                          'name'=>'Apple Mobile',
                          'price'=>'100000',
                          'description'=>'a smart phone with 128gb ram',
                          'category'=>'mobile',
                          'gallery'=>'https://imagemobiles.com/wp-content/uploads/2022/09/Apple-MLL63HN-A-Smart-Phones-491997745-i-1-1200Wx1200H-414x414.jpg',
          ],
          [
                          'name'=>'Sumsung Mobile',
                          'price'=>'15000',
                          'description'=>'a smart phone with 4gb ram',
                          'category'=>'mobile',
                          'gallery'=>'https://fdn2.gsmarena.com/vv/pics/samsung/samsung-galaxy-s20-5g-r1.jpg',
          ],
       ]);
    }
}
