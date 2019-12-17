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
        DB::insert("INSERT INTO `product` (`id`, `name`, `slug`, `category_id`, `description`, `image`, `price`, `weight`, `created_at`, `updated_at`) VALUES
        
        (1, 'adidas0', 'adidas0', NULL, 'Cupiditate architecto cumque in aut quaerat. Accusantium magnam ad explicabo in culpa. Doloremque doloremque perferendis dolor aut.', '1.png', '210000', '1','2019-12-25 00:00:00', '2019-12-26 00:00:00'),
         (2, 'adidas1', 'adidas1', NULL, 'Cupiditate architecto cumque in aut quaerat. Accusantium magnam ad explicabo in culpa. Doloremque doloremque perferendis dolor aut.', '2.png', '220000', '1', '2019-12-25 00:00:00', '2019-12-26 00:00:00'),
         (3, 'adidas2', 'adidas2', NULL, 'Cupiditate architecto cumque in aut quaerat. Accusantium magnam ad explicabo in culpa. Doloremque doloremque perferendis dolor aut.', '3.png', '230000', '1', '2019-12-25 00:00:00', '2019-12-26 00:00:00'),
         (4, 'adidas3', 'adidas3', NULL, 'Cupiditate architecto cumque in aut quaerat. Accusantium magnam ad explicabo in culpa. Doloremque doloremque perferendis dolor aut.', '4.png', '240000', '1', '2019-12-25 00:00:00', '2019-12-26 00:00:00'),
         (5, 'adidas4', 'adidas4', NULL, 'Cupiditate architecto cumque in aut quaerat. Accusantium magnam ad explicabo in culpa. Doloremque doloremque perferendis dolor aut.', '5.png', '250000', '1', '2019-12-25 00:00:00', '2019-12-26 00:00:00'),
         (6, 'adidas5', 'adidas5', NULL, 'Cupiditate architecto cumque in aut quaerat. Accusantium magnam ad explicabo in culpa. Doloremque doloremque perferendis dolor aut.', '1.png', '210000', '1', '2019-12-25 00:00:00', '2019-12-26 00:00:00'),
         (7, 'adidas6', 'adidas6', NULL, 'Cupiditate architecto cumque in aut quaerat. Accusantium magnam ad explicabo in culpa. Doloremque doloremque perferendis dolor aut.', '2.png', '220000', '1', '2019-12-25 00:00:00', '2019-12-26 00:00:00'),
         (8, 'adidas7', 'adidas7', NULL, 'Cupiditate architecto cumque in aut quaerat. Accusantium magnam ad explicabo in culpa. Doloremque doloremque perferendis dolor aut.', '3.png', '230000', '1', '2019-12-25 00:00:00', '2019-12-26 00:00:00'),
         (9, 'adidas8', 'adidas8', NULL, 'Cupiditate architecto cumque in aut quaerat. Accusantium magnam ad explicabo in culpa. Doloremque doloremque perferendis dolor aut.', '4.png', '240000', '1', '2019-12-25 00:00:00', '2019-12-26 00:00:00'),
         (10, 'adidas9', 'adidas9', NULL, 'Cupiditate architecto cumque in aut quaerat. Accusantium magnam ad explicabo in culpa. Doloremque doloremque perferendis dolor aut.', '5.png', '250000', '1', '2019-12-25 00:00:00', '2019-12-26 00:00:00'),
         (11, 'adidas10', 'adidas10', NULL, 'Cupiditate architecto cumque in aut quaerat. Accusantium magnam ad explicabo in culpa. Doloremque doloremque perferendis dolor aut.', '1.png', '210000', '1', '2019-12-25 00:00:00', '2019-12-26 00:00:00'),
         (12, 'adidas11', 'adidas11', NULL, 'Cupiditate architecto cumque in aut quaerat. Accusantium magnam ad explicabo in culpa. Doloremque doloremque perferendis dolor aut.', '2.png', '220000', '1', '2019-12-25 00:00:00', '2019-12-26 00:00:00'),
         (13, 'adidas12', 'adidas12', NULL, 'Cupiditate architecto cumque in aut quaerat. Accusantium magnam ad explicabo in culpa. Doloremque doloremque perferendis dolor aut.', '3.png', '230000', '1', '2019-12-25 00:00:00', '2019-12-26 00:00:00'),
         (14, 'adidas13', 'adidas13', NULL, 'Cupiditate architecto cumque in aut quaerat. Accusantium magnam ad explicabo in culpa. Doloremque doloremque perferendis dolor aut.', '4.png', '240000', '1', '2019-12-25 00:00:00', '2019-12-26 00:00:00'),
         (14, 'adidas13', 'adidas13', NULL, 'Cupiditate architecto cumque in aut quaerat. Accusantium magnam ad explicabo in culpa. Doloremque doloremque perferendis dolor aut.', '4.png', '240000', '1', '2019-12-25 00:00:00', '2019-12-26 00:00:00'),
         (15, 'adidas14', 'adidas14', NULL, 'Cupiditate architecto cumque in aut quaerat. Accusantium magnam ad explicabo in culpa. Doloremque doloremque perferendis dolor aut.', '5.png', '250000', '1', '2019-12-25 00:00:00', '2019-12-26 00:00:00'),
         (16, 'adidas15', 'adidas15', NULL, 'Cupiditate architecto cumque in aut quaerat. Accusantium magnam ad explicabo in culpa. Doloremque doloremque perferendis dolor aut.', '1.png', '210000', '1', '2019-12-25 00:00:00', '2019-12-26 00:00:00'),
         (17, 'adidas16', 'adidas16', NULL, 'Cupiditate architecto cumque in aut quaerat. Accusantium magnam ad explicabo in culpa. Doloremque doloremque perferendis dolor aut.', '2.png', '220000', '1', '2019-12-25 00:00:00', '2019-12-26 00:00:00'),
         (18, 'adidas17', 'adidas17', NULL, 'Cupiditate architecto cumque in aut quaerat. Accusantium magnam ad explicabo in culpa. Doloremque doloremque perferendis dolor aut.', '3.png', '230000', '1', '2019-12-25 00:00:00', '2019-12-26 00:00:00'),
         (19, 'adidas18', 'adidas18', NULL, 'Cupiditate architecto cumque in aut quaerat. Accusantium magnam ad explicabo in culpa. Doloremque doloremque perferendis dolor aut.', '4.png', '240000', '1', '2019-12-25 00:00:00', '2019-12-26 00:00:00'),
         (20, 'adidas19', 'adidas19', NULL, 'Cupiditate architecto cumque in aut quaerat. Accusantium magnam ad explicabo in culpa. Doloremque doloremque perferendis dolor aut.', '5.png', '250000', '1', '2019-12-25 00:00:00', '2019-12-26 00:00:00'),
         (21, 'adidas20', 'adidas20', NULL, 'Cupiditate architecto cumque in aut quaerat. Accusantium magnam ad explicabo in culpa. Doloremque doloremque perferendis dolor aut.', '1.png', '210000', '1', '2019-12-25 00:00:00', '2019-12-26 00:00:00'),
         (22, 'adidas21', 'adidas21', NULL, 'Cupiditate architecto cumque in aut quaerat. Accusantium magnam ad explicabo in culpa. Doloremque doloremque perferendis dolor aut.', '2.png', '220000', '1', '2019-12-25 00:00:00', '2019-12-26 00:00:00'),
         (23, 'adidas22', 'adidas22', NULL, 'Cupiditate architecto cumque in aut quaerat. Accusantium magnam ad explicabo in culpa. Doloremque doloremque perferendis dolor aut.', '3.png', '230000', '1', '2019-12-25 00:00:00', '2019-12-26 00:00:00'),
         (24, 'adidas23', 'adidas23', NULL, 'Cupiditate architecto cumque in aut quaerat. Accusantium magnam ad explicabo in culpa. Doloremque doloremque perferendis dolor aut.', '4.png', '240000', '1', '2019-12-25 00:00:00', '2019-12-26 00:00:00'),
         (25, 'adidas24', 'adidas24', NULL, 'Cupiditate architecto cumque in aut quaerat. Accusantium magnam ad explicabo in culpa. Doloremque doloremque perferendis dolor aut.', '5.png', '250000', '1', '2019-12-25 00:00:00', '2019-12-26 00:00:00'),
         (26, 'adidas25', 'adidas25', NULL, 'Cupiditate architecto cumque in aut quaerat. Accusantium magnam ad explicabo in culpa. Doloremque doloremque perferendis dolor aut.', '1.png', '210000', '1', '2019-12-25 00:00:00', '2019-12-26 00:00:00'),
         (27, 'adidas26', 'adidas26', NULL, 'Cupiditate architecto cumque in aut quaerat. Accusantium magnam ad explicabo in culpa. Doloremque doloremque perferendis dolor aut.', '2.png', '220000', '1', '2019-12-25 00:00:00', '2019-12-26 00:00:00'),
         (28, 'adidas27', 'adidas27', NULL, 'Cupiditate architecto cumque in aut quaerat. Accusantium magnam ad explicabo in culpa. Doloremque doloremque perferendis dolor aut.', '3.png', '230000', '1', '2019-12-25 00:00:00', '2019-12-26 00:00:00'),
         (29, 'adidas28', 'adidas28', NULL, 'Cupiditate architecto cumque in aut quaerat. Accusantium magnam ad explicabo in culpa. Doloremque doloremque perferendis dolor aut.', '4.png', '240000', '1', '2019-12-25 00:00:00', '2019-12-26 00:00:00'),
         (30, 'adidas26', 'adidas29', NULL, 'Cupiditate architecto cumque in aut quaerat. Accusantium magnam ad explicabo in culpa. Doloremque doloremque perferendis dolor aut.', '5.png', '250000', '1', '2019-12-25 00:00:00', '2019-12-26 00:00:00'),
         (31, 'adidas27', 'adidas30', NULL, 'Cupiditate architecto cumque in aut quaerat. Accusantium magnam ad explicabo in culpa. Doloremque doloremque perferendis dolor aut.', '1.png', '210000', '1', '2019-12-25 00:00:00', '2019-12-26 00:00:00'),
         (32, 'adidas28', 'adidas31', NULL, 'Cupiditate architecto cumque in aut quaerat. Accusantium magnam ad explicabo in culpa. Doloremque doloremque perferendis dolor aut.', '2.png', '220000', '1', '2019-12-25 00:00:00', '2019-12-26 00:00:00'),
         (33, 'adidas29', 'adidas32', NULL, 'Cupiditate architecto cumque in aut quaerat. Accusantium magnam ad explicabo in culpa. Doloremque doloremque perferendis dolor aut.', '3.png', '230000', '1', '2019-12-25 00:00:00', '2019-12-26 00:00:00'),
         (34, 'adidas30', 'adidas33', NULL, 'Cupiditate architecto cumque in aut quaerat. Accusantium magnam ad explicabo in culpa. Doloremque doloremque perferendis dolor aut.', '4.png', '240000', '1', '2019-12-25 00:00:00', '2019-12-26 00:00:00');");
    }
}
