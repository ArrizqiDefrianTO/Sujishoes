<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
         DB::insert("INSERT INTO `products` (`id`, `name`, `color_id`, `category_id`, `description`, `image`, `price`, `weight`, `created_at`, `updated_at`) VALUES 
        
        (NULL, 'Adidas NMD', 1, 1, 'Sepatu Pria Murah Berkualitas', '1.png', 1000000, 1, '2019-08-29 12:55:52', '2019-08-29 12:55:52'),

        (NULL, 'Adidas NMD1', 1, 1, 'Sepatu Pria Murah Berkualitas', '2.png', 1000000, 1, '2019-08-29 12:55:52', '2019-08-29 12:55:52'),

        (NULL, 'Adidas NMD2', 1, 1, 'Sepatu Pria Murah Berkualitas', '3.png', 1000000, 1, '2019-08-29 12:55:52', '2019-08-29 12:55:52'),

        (NULL, 'Adidas NMD3', 1, 1, 'Sepatu Pria Murah Berkualitas', '4.png', 1000000, 1, '2019-08-29 12:55:52', '2019-08-29 12:55:52'),

        (NULL, 'Adidas NMD4', 1, 1, 'Sepatu Pria Murah Berkualitas', '5.png', 1000000, 1, '2019-08-29 12:55:52', '2019-08-29 12:55:52'),

        (NULL, 'Adidas NMD5', 2, 1, 'Sepatu Pria Murah Berkualitas', '5.png', 1000000, 1, '2019-08-29 12:55:52', '2019-08-29 12:55:52'),

        (NULL, 'Adidas NMD6', 2, 1, 'Sepatu Pria Murah Berkualitas', '4.png', 1000000, 1, '2019-08-29 12:55:52', '2019-08-29 12:55:52'),

        (NULL, 'Adidas NMD7', 2, 1, 'Sepatu Pria Murah Berkualitas', '3.png', 1000000, 1, '2019-08-29 12:55:52', '2019-08-29 12:55:52'),

        (NULL, 'Adidas NMD8', 2, 1, 'Sepatu Pria Murah Berkualitas', '2.png', 1000000, 1, '2019-08-29 12:55:52', '2019-08-29 12:55:52'),

        (NULL, 'Adidas NMD9', 2, 1, 'Sepatu Pria Murah Berkualitas', '1.png', 1000000, 1, '2019-08-29 12:55:52', '2019-08-29 12:55:52'),

        (NULL, 'Adidas NMD10', 3, 1, 'Sepatu Pria Murah Berkualitas', '2.png', 1000000, 1, '2019-08-29 12:55:52', '2019-08-29 12:55:52'),

        (NULL, 'Adidas NMD11', 3, 1, 'Sepatu Pria Murah Berkualitas', '3.png', 1000000, 1, '2019-08-29 12:55:52', '2019-08-29 12:55:52'),

        (NULL, 'Adidas NMD12', 3, 1, 'Sepatu Pria Murah Berkualitas', '4.png', 1000000, 1, '2019-08-29 12:55:52', '2019-08-29 12:55:52'),

        (NULL, 'Adidas NMD13', 3, 1, 'Sepatu Pria Murah Berkualitas', '5.png', 1000000, 1, '2019-08-29 12:55:52', '2019-08-29 12:55:52'),

        (NULL, 'Adidas NMD14', 3, '1', 'Sepatu Pria Murah Berkualitas', '1.png', 1000000, 1, '2019-08-29 12:55:52', '2019-08-29 12:55:52'),

        (NULL, 'Adidas NMD15', 4, 1, 'Sepatu Pria Murah Berkualitas', '2.png', 1000000, 1, '2019-08-29 12:55:52', '2019-08-29 12:55:52'),

        (NULL, 'Adidas NMD16', 4, 1, 'Sepatu Pria Murah Berkualitas', '2.png', 1000000, 1, '2019-08-29 12:55:52', '2019-08-29 12:55:52'),

        (NULL, 'Adidas NMD17', 4, 1, 'Sepatu Pria Murah Berkualitas', '3.png', 1000000, 1, '2019-08-29 12:55:52', '2019-08-29 12:55:52'),

        (NULL, 'Adidas NMD18', 4, 1, 'Sepatu Pria Murah Berkualitas', '4.png', 1000000, 1, '2019-08-29 12:55:52', '2019-08-29 12:55:52'),

        (NULL, 'Adidas NMD19', 4, 1, 'Sepatu Pria Murah Berkualitas', '5.png', 1000000, 1, '2019-08-29 12:55:52', '2019-08-29 12:55:52');");
    }
}
