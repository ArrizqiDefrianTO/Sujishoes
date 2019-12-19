<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::insert("INSERT INTO `products` (`id`, `name`, `slug`, `category_id`, `description`, `image`, `price`, `weight`, `status`, `created_at`, `updated_at`) VALUES
        
         (1, 'adidas0', 'adidas0', 1, 'Cupiditate architecto cumque in aut quaerat. Accusantium magnam ad explicabo in culpa. Doloremque doloremque perferendis dolor aut.', '1.png', '210000', '1', 1, '2019-12-25 00:00:00', '2019-12-26 00:00:00'),
         (2, 'adidas0', 'adidas0', 2, 'Cupiditate architecto cumque in aut quaerat. Accusantium magnam ad explicabo in culpa. Doloremque doloremque perferendis dolor aut.', '2.png', '210000', '1', 1, '2019-12-25 00:00:00', '2019-12-26 00:00:00'),
         (3, 'adidas0', 'adidas0', 3, 'Cupiditate architecto cumque in aut quaerat. Accusantium magnam ad explicabo in culpa. Doloremque doloremque perferendis dolor aut.', '4.png', '210000', '1', 1, '2019-12-25 00:00:00', '2019-12-26 00:00:00'),
         (4, 'adidas0', 'adidas0', 4, 'Cupiditate architecto cumque in aut quaerat. Accusantium magnam ad explicabo in culpa. Doloremque doloremque perferendis dolor aut.', '5.png', '210000', '1', 1, '2019-12-25 00:00:00', '2019-12-26 00:00:00'),
         (5, 'adidas0', 'adidas0', 5, 'Cupiditate architecto cumque in aut quaerat. Accusantium magnam ad explicabo in culpa. Doloremque doloremque perferendis dolor aut.', '6.png', '210000', '1', 1, '2019-12-25 00:00:00', '2019-12-26 00:00:00'),
         (6, 'adidas0', 'adidas0', 6, 'Cupiditate architecto cumque in aut quaerat. Accusantium magnam ad explicabo in culpa. Doloremque doloremque perferendis dolor aut.', '7.png', '210000', '1', 1, '2019-12-25 00:00:00', '2019-12-26 00:00:00'),
         (7, 'adidas0', 'adidas0', 7, 'Cupiditate architecto cumque in aut quaerat. Accusantium magnam ad explicabo in culpa. Doloremque doloremque perferendis dolor aut.', '8.png', '210000', '1', 1, '2019-12-25 00:00:00', '2019-12-26 00:00:00'),
         (8, 'adidas0', 'adidas0', 1, 'Cupiditate architecto cumque in aut quaerat. Accusantium magnam ad explicabo in culpa. Doloremque doloremque perferendis dolor aut.', '9.png', '210000', '1', 1, '2019-12-25 00:00:00', '2019-12-26 00:00:00'),
         (9, 'adidas0', 'adidas0', 2, 'Cupiditate architecto cumque in aut quaerat. Accusantium magnam ad explicabo in culpa. Doloremque doloremque perferendis dolor aut.', '1.png', '210000', '1', 1, '2019-12-25 00:00:00', '2019-12-26 00:00:00'),
         (10, 'adidas0', 'adidas0', 3, 'Cupiditate architecto cumque in aut quaerat. Accusantium magnam ad explicabo in culpa. Doloremque doloremque perferendis dolor aut.', '2.png', '210000', '1', 1, '2019-12-25 00:00:00', '2019-12-26 00:00:00'),
         (11, 'adidas0', 'adidas0', 4, 'Cupiditate architecto cumque in aut quaerat. Accusantium magnam ad explicabo in culpa. Doloremque doloremque perferendis dolor aut.', '3.png', '210000', '1', 1, '2019-12-25 00:00:00', '2019-12-26 00:00:00'),
         (12, 'adidas0', 'adidas0', 5, 'Cupiditate architecto cumque in aut quaerat. Accusantium magnam ad explicabo in culpa. Doloremque doloremque perferendis dolor aut.', '4.png', '210000', '1', 1, '2019-12-25 00:00:00', '2019-12-26 00:00:00'),
         (13, 'adidas0', 'adidas0', 6, 'Cupiditate architecto cumque in aut quaerat. Accusantium magnam ad explicabo in culpa. Doloremque doloremque perferendis dolor aut.', '5.png', '210000', '1', 1, '2019-12-25 00:00:00', '2019-12-26 00:00:00'),
         (14, 'adidas0', 'adidas0', 7, 'Cupiditate architecto cumque in aut quaerat. Accusantium magnam ad explicabo in culpa. Doloremque doloremque perferendis dolor aut.', '6.png', '210000', '1', 1, '2019-12-25 00:00:00', '2019-12-26 00:00:00'),
         (15, 'adidas0', 'adidas0', 1, 'Cupiditate architecto cumque in aut quaerat. Accusantium magnam ad explicabo in culpa. Doloremque doloremque perferendis dolor aut.', '7.png', '210000', '1', 1, '2019-12-25 00:00:00', '2019-12-26 00:00:00'),
         (16, 'adidas0', 'adidas0', 2, 'Cupiditate architecto cumque in aut quaerat. Accusantium magnam ad explicabo in culpa. Doloremque doloremque perferendis dolor aut.', '8.png', '210000', '1', 1, '2019-12-25 00:00:00', '2019-12-26 00:00:00'),
         (17, 'adidas0', 'adidas0', 3, 'Cupiditate architecto cumque in aut quaerat. Accusantium magnam ad explicabo in culpa. Doloremque doloremque perferendis dolor aut.', '9.png', '210000', '1', 1, '2019-12-25 00:00:00', '2019-12-26 00:00:00'),
         (18, 'adidas0', 'adidas0', 4, 'Cupiditate architecto cumque in aut quaerat. Accusantium magnam ad explicabo in culpa. Doloremque doloremque perferendis dolor aut.', '1.png', '210000', '1', 1, '2019-12-25 00:00:00', '2019-12-26 00:00:00'),
         (19, 'adidas0', 'adidas0', 5, 'Cupiditate architecto cumque in aut quaerat. Accusantium magnam ad explicabo in culpa. Doloremque doloremque perferendis dolor aut.', '2.png', '210000', '1', 1, '2019-12-25 00:00:00', '2019-12-26 00:00:00'),
         (20, 'adidas0', 'adidas0', 6, 'Cupiditate architecto cumque in aut quaerat. Accusantium magnam ad explicabo in culpa. Doloremque doloremque perferendis dolor aut.', '3.png', '210000', '1', 1, '2019-12-25 00:00:00', '2019-12-26 00:00:00'),
         (21, 'adidas0', 'adidas0', 7, 'Cupiditate architecto cumque in aut quaerat. Accusantium magnam ad explicabo in culpa. Doloremque doloremque perferendis dolor aut.', '4.png', '210000', '1', 1, '2019-12-25 00:00:00', '2019-12-26 00:00:00'),
         (22, 'adidas0', 'adidas0', 1, 'Cupiditate architecto cumque in aut quaerat. Accusantium magnam ad explicabo in culpa. Doloremque doloremque perferendis dolor aut.', '5.png', '210000', '1', 1, '2019-12-25 00:00:00', '2019-12-26 00:00:00'),
         (23, 'adidas0', 'adidas0', 2, 'Cupiditate architecto cumque in aut quaerat. Accusantium magnam ad explicabo in culpa. Doloremque doloremque perferendis dolor aut.', '6.png', '210000', '1', 1, '2019-12-25 00:00:00', '2019-12-26 00:00:00'),
         (24, 'adidas0', 'adidas0', 3, 'Cupiditate architecto cumque in aut quaerat. Accusantium magnam ad explicabo in culpa. Doloremque doloremque perferendis dolor aut.', '7.png', '210000', '1', 1, '2019-12-25 00:00:00', '2019-12-26 00:00:00'),
         (25, 'adidas0', 'adidas0', 4, 'Cupiditate architecto cumque in aut quaerat. Accusantium magnam ad explicabo in culpa. Doloremque doloremque perferendis dolor aut.', '8.png', '210000', '1', 1, '2019-12-25 00:00:00', '2019-12-26 00:00:00'),
         (34, 'adidas30', 'adidas33', 5, 'Cupiditate architecto cumque in aut quaerat. Accusantium magnam ad explicabo in culpa. Doloremque doloremque perferendis dolor aut.', '9.png', '240000', '1', 1, '2019-12-25 00:00:00', '2019-12-26 00:00:00');");
    }
}
