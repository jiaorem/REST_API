<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsSeeder extends Seeder
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
            'title' => 'Classic Tee Khaki',
            'description' => 'PLAIN AND SIMPLE | ARCHIVE COLLECTION',
            'currency' => 'PHP',
            'price' => 750.00,
            'brand' => 'Plain&Simple',
            'category' => 'apparel',
            'image' => 'https://i0.wp.com/plainandsimple.ph/wp-content/uploads/2022/05/21.png?resize=300%2C300&ssl=1'
            ],
            [
            'title' => 'Adidas Stan Smith Pride Shoes',
            'description' => 'Shoes that honor the LGBTQ+ community, made in part with recycled content.',
            'currency' => 'PHP',
            'price' => 3360.00,
            'brand' => 'Adidas',
            'category' => 'shoes',
            'image' => 'https://assets.adidas.com/images/w_600,f_auto,q_auto/8020d7fee088442d8da2ae2801123818_9366/Stan_Smith_Pride_Shoes_White_GX6394_01_standard.jpg'
            ],
            [
            'title' => 'Xiaomi Black Shark T10',
            'description' => 'Black Shark Earbuds Wireless Earbuds with 5.1 Bluetooth, Gaming Headphones Wireless Headphones with 45ms Low Latency',
            'currency' => 'PHP',
            'price' => 1599.00,
            'brand' => 'Xiaomi',
            'category' => 'electronics',
            'image' => 'https://cdn.shopify.com/s/files/1/0442/2749/4055/products/2_6f076ae7-7990-4352-8a1a-d2a097fb8d43_1024x1024.png?v=1658199507'
            ]
        ]);
    }
}
