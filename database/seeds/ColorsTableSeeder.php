<?php

use Illuminate\Database\Seeder;

class ColorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
         DB::insert("INSERT INTO `colors` (`id`, `name`, `created_at`, `updated_at`) VALUES
        (1, 'Putih', '2019-12-7 12:55:52', '2019-12-7 12:55:52'),
        (2, 'Hitam', '2019-12-7 12:55:52', '2019-12-7 12:55:52'),
        (3, 'Abu-abu', '2019-12-7 12:55:52', '2019-12-7 12:55:52');");
    }
}
