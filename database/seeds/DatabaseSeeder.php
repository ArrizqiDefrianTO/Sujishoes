<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
<<<<<<< HEAD
        $this->call(ProvinceTableSeeder::class);
        $this->call(CityTableSeeder::class);
        $this->call(DistrictTableSeeder::class);
        $this->call(UsersTableSeeder::class);

=======
        $this->call(CategoryTableSeeder::class);
        $this->call(CityTableSeeder::class);
        $this->call(DistrictTableSeeder::class);
        $this->call(ProductTableSeeder::class);
        $this->call(ProvinceTableSeeder::class);
        $this->call(UserTableSeeder::class);
>>>>>>> 4d727eff2402081a3f655c540b427aa61d44e22b
    }
}
