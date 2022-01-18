<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;


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
        Product::insert([
            // KIDs
            [
                'admin_id' => '1',
                'name' => 'caps',
                'price' => '2000',
                'image_path' => 'kids/cap.jpg',
                'size' => 'S',
                'category' => 'other',
                'gender' => 'kids',
                'etc' => ''
            ],
            [
                'admin_id' => '1',
                'name' => 'caps',
                'price' => '2000',
                'image_path' => 'kids/hat.jpg',
                'size' => 'S',
                'category' => 'other',
                'gender' => 'kids',
                'etc' => ''
            ],

            // KIDs_TOPs
            [
                'admin_id' => '1',
                'name' => 'tops',
                'price' => '3000',
                'image_path' => 'kids/tops.jpg',
                'size' => 'S',
                'category' => 'tops',
                'gender' => 'kids',
                'etc' => ''
            ],
            [
                'admin_id' => '1',
                'name' => 'tops',
                'price' => '3000',
                'image_path' => 'kids/tops2.jpeg',
                'size' => 'S',
                'category' => 'tops',
                'gender' => 'kids',
                'etc' => ''
            ],
            [
                'admin_id' => '1',
                'name' => 'tops',
                'price' => '3000',
                'image_path' => 'kids/tops3.jpg',
                'size' => 'S',
                'category' => 'tops',
                'gender' => 'kids',
                'etc' => ''
            ],
            [
                'admin_id' => '1',
                'name' => 'tops',
                'price' => '3000',
                'image_path' => 'kids/tops4.jpeg',
                'size' => 'S',
                'category' => 'tops',
                'gender' => 'kids',
                'etc' => ''
            ],
            [
                'admin_id' => '1',
                'name' => 'tops',
                'price' => '3000',
                'image_path' => 'kids/tops5.jpg',
                'size' => 'S',
                'category' => 'tops',
                'gender' => 'kids',
                'etc' => ''
            ],
            [
                'admin_id' => '1',
                'name' => 'tops',
                'price' => '3000',
                'image_path' => 'kids/tops6.jpg',
                'size' => 'S',
                'category' => 'tops',
                'gender' => 'kids',
                'etc' => ''
            ],
            // MENs
            [
                'admin_id' => '1',
                'name' => 'tops',
                'price' => '3000',
                'image_path' => 'mens/tops1.jpg',
                'size' => 'M',
                'category' => 'tops',
                'gender' => 'mens',
                'etc' => ''
            ],
            // WOMEN
            [
                'admin_id' => '1',
                'name' => 'tops',
                'price' => '3000',
                'image_path' => 'women/tops1.jpg',
                'size' => 'M',
                'category' => 'tops',
                'gender' => 'women',
                'etc' => ''
            ],
        ]);
    }
}

// 写真
// gahag-0016191343-1.jpg
// jacket1.jpg
// jacket2.jpg
// jacket3.jpg
// others.jpg
// others2.jpg
// shoes.jpg
// shoes2.jpg
// tops1.jpeg
// tops2.jpg
// tops3.jpg
// tops4.jpg
// tops5.jpeg
// tops6.jpg
// tops7.jpg
// tops8.jpg
// tops9.jpg


// WOMENs

// bag1.jpg
// grasses.jpg
// jacket2.jpg
// jacket3.jpg
// jacket4.jpg
// model6.jpg
// model8.jpg
// model9.jpg
// onepiece4.jpg
// onepiece5.jpg
// onepiece6.jpg
// outer1.jpg
// pants.jpg
// setup1.jpg
// tops1.jpg
// tops2.jpg
// tops3.jpeg
// tops4.jpg
