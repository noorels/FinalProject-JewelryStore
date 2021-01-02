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
      $this->call(CategorySeeder::class);
      $this->call(ProductSeeder::class);
      $this->call(ContactSeeder::class);
      $this->call(RoleSeeder::class);
      $this->call(RoleUserSeeder::class);
      $this->call(ImageSeeder::class);
    }
}
