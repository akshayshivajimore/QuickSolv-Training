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
        DB::table('products_detail')->insert([
            [
            'name'=>'IPhone',
            "price"=>"98000",
            "description"=>"128 GB ROM
                            15.49 cm (6.1 inch) Super Retina XDR 12MP TrueDepth Front Camera with Night Mode, 4K Dolby Vision HDR Recording",
            "category"=>"mobile",
            "gallery"=>"https://fdn2.gsmarena.com/vv/pics/apple/apple-iphone-13-01.jpg"
            ],
            [
            'name'=>'One Plus',
            "price"=>"41000",
            "description"=>"128 GB ROM
                            15.49 cm (6.1 inch) Super Retina XDR 12MP TrueDepth Front Camera with Night Mode, 4K Dolby Vision HDR Recording",
            "category"=>"mobile",
            "gallery"=>"https://fdn2.gsmarena.com/vv/pics/oneplus/oneplus-one-02.jpg"
        ],
        [
            'name'=>'Vivo',
            "price"=>"29000",
            "description"=>"128 GB ROM
                            15.49 cm (6.1 inch) Super Retina XDR 12MP TrueDepth Front Camera with Night Mode, 4K Dolby Vision HDR Recording",
            "category"=>"mobile",
            "gallery"=>"https://sm.pcmag.com/t/pcmag_in/photo/default/vivo-s5_3uaq.1920.jpg"
        ],
        [
            'name'=>'Samsung',
            "price"=>"55000",
            "description"=>"128 GB ROM
                            15.49 cm (6.1 inch) Super Retina XDR 12MP TrueDepth Front Camera with Night Mode, 4K Dolby Vision HDR Recording",
            "category"=>"mobile",
            "gallery"=>"https://cdn.pocket-lint.com/r/s/1200x/assets/images/145854-phones-news-buyer-s-guide-best-samsung-phones-galaxy-s-note-and-a-compared-image16-gctz24iqmv.jpg"
        ],
        ]);
    }
}
