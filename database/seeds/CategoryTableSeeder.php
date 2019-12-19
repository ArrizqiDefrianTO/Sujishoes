<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::insert("INSERT INTO `categories` (`id`, `name`, `parent_id`, `slug`, `created_at`, `updated_at`) VALUES
        
         (1, 'Adidas', null, 'Adidas', '2019-12-25 00:00:00', '2019-12-26 00:00:00'),
         (2, 'Compass', null, 'compass', '2019-12-25 00:00:00', '2019-12-26 00:00:00'),
         (3, 'Nike', null, 'nike', '2019-12-25 00:00:00', '2019-12-26 00:00:00'),
         (4, 'Running', 1, 'running', '2019-12-25 00:00:00', '2019-12-26 00:00:00'),
         (5, 'Vintage', 2, 'vintage', '2019-12-25 00:00:00', '2019-12-26 00:00:00'),
         (6, 'Hiking', 3, 'hiking', '2019-12-25 00:00:00', '2019-12-26 00:00:00'),         
         (7, 'School', 2, 'school', '2019-12-25 00:00:00', '2019-12-26 00:00:00');");
    }
}
