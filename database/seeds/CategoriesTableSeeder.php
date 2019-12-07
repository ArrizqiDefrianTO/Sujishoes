<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::insert("INSERT INTO `categories` (`id`, `name`, `color_id`, `created_at`, `updated_at`) VALUES
        (1, 'Wanita', '1', '2019-12-7 12:55:52', '2019-12-7 12:55:52'),
        (2, 'Pria', '2', '2019-12-7 12:55:52', '2019-12-7 12:55:52'),
        (3, 'Anak-Anak', '3', '2019-12-7 12:55:52', '2019-12-7 12:55:52');");
    }
}
