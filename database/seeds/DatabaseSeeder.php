<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $this->call(UserSeeder::class);
         $this->call(BlogSeeder::class);
         $this->call(SliderSeeder::class);
         $this->call(ServicesSeeder::class);
         $this->call(PopupSeeder::class);
         $this->call(CommentsSeeder::class);
         $this->call(ContentSeeder::class);
         $this->call(MenuSeeder::class);
         $this->call(SettingsSeeder::class);
    }
}
