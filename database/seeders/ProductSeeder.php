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
                'image_path' => 'mens/gahag-0016191343-1.jpg',
                'size' => 'M',
                'category' => 'tops',
                'gender' => 'mens',
                'etc' => ''
            ],
            [
                'admin_id' => '1',
                'name' => 'outer',
                'price' => '3000',
                'image_path' => 'mens/jacket1.jpg',
                'size' => 'M',
                'category' => 'outer',
                'gender' => 'mens',
                'etc' => ''
            ],
            [
                'admin_id' => '1',
                'name' => 'outer',
                'price' => '3000',
                'image_path' => 'mens/jacket2.jpg',
                'size' => 'M',
                'category' => 'outer',
                'gender' => 'mens',
                'etc' => ''
            ],
            [
                'admin_id' => '1',
                'name' => 'outer',
                'price' => '3000',
                'image_path' => 'mens/jacket3.jpg',
                'size' => 'M',
                'category' => 'outer',
                'gender' => 'mens',
                'etc' => ''
            ],
            [
                'admin_id' => '1',
                'name' => 'other',
                'price' => '3000',
                'image_path' => 'mens/others.jpg',
                'size' => 'M',
                'category' => 'other',
                'gender' => 'mens',
                'etc' => ''
            ],
            [
                'admin_id' => '1',
                'name' => 'other',
                'price' => '3000',
                'image_path' => 'mens/others2.jpg',
                'size' => 'M',
                'category' => 'other',
                'gender' => 'mens',
                'etc' => ''
            ],
            [
                'admin_id' => '1',
                'name' => 'other',
                'price' => '3000',
                'image_path' => 'mens/shoes.jpg',
                'size' => 'M',
                'category' => 'other',
                'gender' => 'mens',
                'etc' => ''
            ],
            [
                'admin_id' => '1',
                'name' => 'other',
                'price' => '3000',
                'image_path' => 'mens/shoes2.jpg',
                'size' => 'M',
                'category' => 'other',
                'gender' => 'mens',
                'etc' => ''
            ],
            [
                'admin_id' => '1',
                'name' => 'tops',
                'price' => '3000',
                'image_path' => 'mens/tops1.jpeg',
                'size' => 'M',
                'category' => 'tops',
                'gender' => 'mens',
                'etc' => ''
            ],
            [
                'admin_id' => '1',
                'name' => 'tops',
                'price' => '3000',
                'image_path' => 'mens/tops2.jpg',
                'size' => 'M',
                'category' => 'tops',
                'gender' => 'mens',
                'etc' => ''
            ],
            [
                'admin_id' => '1',
                'name' => 'tops',
                'price' => '3000',
                'image_path' => 'mens/tops3.jpg',
                'size' => 'M',
                'category' => 'tops',
                'gender' => 'mens',
                'etc' => ''
            ],
            [
                'admin_id' => '1',
                'name' => 'tops',
                'price' => '3000',
                'image_path' => 'mens/tops4.jpg',
                'size' => 'M',
                'category' => 'tops',
                'gender' => 'mens',
                'etc' => ''
            ],
            [
                'admin_id' => '1',
                'name' => 'tops',
                'price' => '3000',
                'image_path' => 'mens/tops5.jpeg',
                'size' => 'M',
                'category' => 'tops',
                'gender' => 'mens',
                'etc' => ''
            ],
            [
                'admin_id' => '1',
                'name' => 'tops',
                'price' => '3000',
                'image_path' => 'mens/tops6.jpg',
                'size' => 'M',
                'category' => 'tops',
                'gender' => 'mens',
                'etc' => ''
            ],
            [
                'admin_id' => '1',
                'name' => 'tops',
                'price' => '3000',
                'image_path' => 'mens/tops7.jpg',
                'size' => 'M',
                'category' => 'tops',
                'gender' => 'mens',
                'etc' => ''
            ],
            [
                'admin_id' => '1',
                'name' => 'tops',
                'price' => '3000',
                'image_path' => 'mens/tops8.jpg',
                'size' => 'M',
                'category' => 'tops',
                'gender' => 'mens',
                'etc' => ''
            ],
            [
                'admin_id' => '1',
                'name' => 'tops',
                'price' => '3000',
                'image_path' => 'mens/tops9.jpg',
                'size' => 'M',
                'category' => 'tops',
                'gender' => 'mens',
                'etc' => ''
            ],

            // WOMEN
            [
                'admin_id' => '1',
                'name' => 'other',
                'price' => '3000',
                'image_path' => 'women/bag1.jpg',
                'size' => 'M',
                'category' => 'other',
                'gender' => 'women',
                'etc' => ''
            ],
            [
                'admin_id' => '1',
                'name' => 'other',
                'price' => '3000',
                'image_path' => 'women/grasses.jpg',
                'size' => 'M',
                'category' => 'other',
                'gender' => 'women',
                'etc' => ''
            ],
            [
                'admin_id' => '1',
                'name' => 'outer',
                'price' => '3000',
                'image_path' => 'women/jacket3.jpg',
                'size' => 'M',
                'category' => 'outer',
                'gender' => 'women',
                'etc' => ''
            ],
            [
                'admin_id' => '1',
                'name' => 'outer',
                'price' => '3000',
                'image_path' => 'women/jacket4.jpg',
                'size' => 'M',
                'category' => 'outer',
                'gender' => 'women',
                'etc' => ''
            ],
            [
                'admin_id' => '1',
                'name' => 'tops',
                'price' => '3000',
                'image_path' => 'women/model6.jpg',
                'size' => 'M',
                'category' => 'tops',
                'gender' => 'women',
                'etc' => ''
            ],
            [
                'admin_id' => '1',
                'name' => 'tops',
                'price' => '3000',
                'image_path' => 'women/model8.jpg',
                'size' => 'M',
                'category' => 'tops',
                'gender' => 'women',
                'etc' => ''
            ],
            [
                'admin_id' => '1',
                'name' => 'tops',
                'price' => '3000',
                'image_path' => 'women/model9.jpg',
                'size' => 'M',
                'category' => 'tops',
                'gender' => 'women',
                'etc' => ''
            ],
            [
                'admin_id' => '1',
                'name' => 'tops',
                'price' => '3000',
                'image_path' => 'women/onepiece4.jpg',
                'size' => 'M',
                'category' => 'tops',
                'gender' => 'women',
                'etc' => ''
            ],
            [
                'admin_id' => '1',
                'name' => 'tops',
                'price' => '3000',
                'image_path' => 'women/onepiece5.jpg',
                'size' => 'M',
                'category' => 'tops',
                'gender' => 'women',
                'etc' => ''
            ],
            [
                'admin_id' => '1',
                'name' => 'tops',
                'price' => '3000',
                'image_path' => 'women/onepiece6.jpg',
                'size' => 'M',
                'category' => 'tops',
                'gender' => 'women',
                'etc' => ''
            ],
            [
                'admin_id' => '1',
                'name' => 'outer',
                'price' => '3000',
                'image_path' => 'women/outer1.jpg',
                'size' => 'M',
                'category' => 'outer',
                'gender' => 'women',
                'etc' => ''
            ],
            [
                'admin_id' => '1',
                'name' => 'pants',
                'price' => '3000',
                'image_path' => 'women/pants.jpg',
                'size' => 'M',
                'category' => 'pants',
                'gender' => 'women',
                'etc' => ''
            ],
            [
                'admin_id' => '1',
                'name' => 'tops',
                'price' => '3000',
                'image_path' => 'women/setup1.jpg',
                'size' => 'M',
                'category' => 'tops',
                'gender' => 'women',
                'etc' => ''
            ],
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
            [
                'admin_id' => '1',
                'name' => 'tops',
                'price' => '3000',
                'image_path' => 'women/tops2.jpg',
                'size' => 'M',
                'category' => 'tops',
                'gender' => 'women',
                'etc' => ''
            ],
            [
                'admin_id' => '1',
                'name' => 'tops',
                'price' => '3000',
                'image_path' => 'women/tops3.jpeg',
                'size' => 'M',
                'category' => 'tops',
                'gender' => 'women',
                'etc' => ''
            ],
            [
                'admin_id' => '1',
                'name' => 'tops',
                'price' => '3000',
                'image_path' => 'women/tops4.jpg',
                'size' => 'M',
                'category' => 'tops',
                'gender' => 'women',
                'etc' => ''
            ],
        ]);
    }
}
