<?php

namespace Database\Seeders;

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
        DB::table('products')->insert([
            [
                'name'=>'Samsung Mobile',
                "price"=>"30000",
                "description"=>"A smartphone with 8GB RAM and many more features",
                "category"=>"mobile",
                "gallery"=>"https://encrypted-tbn1.gstatic.com/shopping?q=tbn:ANd9GcRImijaUjxKQR2ihc_5bNLSf_EGcysCP9K4Qkpxbd6Md5BYj7uTkbv52gDirB5uGYAxNyuGSmWFeCGpao0QibLomMzOhhVvu3Mf9JajBtvcy21j_mw53FdTKonKbgGogTPKGXV0gs4&usqp=CAc"
            ],
            [
                'name'=>'LG TV',
                "price"=>"45000",
                "description"=>"A smart TV with many more features",
                "category"=>"TV",
                "gallery"=>"https://encrypted-tbn1.gstatic.com/shopping?q=tbn:ANd9GcSiNJAfQvJueAaWklHnksNVKODt8r6YsZG2I3LiKcrgJ-h1HaN12l5irIDuVLv33oJ_KMhUUJJ6_tqJ4AN1PhD8NDwZT9_wiCxtpNYHAifF"
            ],
            [
                'name'=>'Sony TV',
                "price"=>"54000",
                "description"=>"A TV with many more features",
                "category"=>"TV",
                "gallery"=>"https://encrypted-tbn1.gstatic.com/shopping?q=tbn:ANd9GcQbwjbOEI9CHLqdRuqOkhPSxW7hLiGhwGmWGuYXqa3bVBAzpYH9U67BvraTPEuOP0UAvqXzaD1gSvw_wokFDoubRE69IvV-4PR1SRquYxdhVSNvnV01H3Mrdw"
            ],
            [
                'name'=>'LG Refrigerator',
                "price"=>"45000",
                "description"=>"A fridge with many more features",
                "category"=>"Fridge",
                "gallery"=>"https://5.imimg.com/data5/EJ/YT/QL/SELLER-3023569/refrigenator-fridge-500x500.jpg"
             ]
        ]);
    }
}
