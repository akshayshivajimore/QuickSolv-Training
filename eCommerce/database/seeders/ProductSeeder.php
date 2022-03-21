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
        DB::table('products')->insert([
            [
                'name'=>'Iphone',
                "price"=>"₹74,990",
                "description"=>"128 GB ROM, 15.49 cm (6.1 inch) Super Retina XDR Display, 
                12MP + 12MP | 12MP Front Camera, A15 Bionic Chip Processor ",
                "category"=>"mobile",
                "gallery"=>"https://asset.conrad.com/media10/isa/160267/c1/-/en/002471149PI00/image.jpg"
            ],
            [
                'name'=>'vivo V23 5G (Sunshine Gold, 128 GB)  (8 GB RAM)',
                "price"=>"₹29,990",
                "description"=>"8 GB RAM | 128 GB ROM | Expandable Upto 12 GB,
                16.36 cm (6.44 inch) Full HD+ Display,
                64MP + 8MP + 2MP | 50MP + 8MP Dual Front Camera,
                4200 mAh Lithium Battery, 
                Mediatek Dimensity 920 Processor",
                "category"=>"mobile",
                "gallery"=>"https://fdn.gsmarena.com/imgroot/news/22/01/vivo-v23-in-for-review/gallery/-1200w5/gsmarena_001.jpg"
            ],
            [
                'name'=>'OnePlus U1S 126 cm (50 inch) Ultra HD (4K) LED Smart Android TV  (50UC1A00)',
                "price"=>"₹40,999",
                "description"=>"Supported Apps: Netflix|Prime Video|Disney+Hotstar|Youtube,
                Operating System: Android (Google Assistant & Chromecast in-built),
                Resolution: Ultra HD (4K) 3840 x 2160 Pixels,
                Sound Output: 30 W,
                Refresh Rate: 60 Hz",
                "category"=>"tv",
                "gallery"=>"https://www.oneplus.in/content/dam/oasis/page/nord-series/nord-ce/tv/1920/module27-image1.jpg"
            ],
            [
                'name'=>'X-Ray Square Celestial Sneakers For Men  (Black)',
                "price"=>"₹4,639",
                "description"=>"A shoes with more comfort",
                "category"=>"shoes",
                "gallery"=>"https://i.ebayimg.com/images/g/qjIAAOSwMVBhhzAr/s-l400.jpg"
            ]
        ]);    
    }
}
