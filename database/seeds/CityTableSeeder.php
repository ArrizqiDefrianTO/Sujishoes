<?php

use Illuminate\Database\Seeder;

class CityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::insert("INSERT INTO `cities` ( `province_id`, `name`, `type`, `postal_code`, `created_at`, `updated_at`) VALUES ('', '1', 'Bandung', 'Kota', '12326', '2019-12-31 05:10:08', '2019-12-31 05:10:08');");
    }
}
