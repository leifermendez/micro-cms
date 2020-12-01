<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PopupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    private $faker;

    public function run()
    {
        $this->faker = $faker = Faker\Factory::create();
        $tests = array(
            [
                'name' => 'Publicidad 1',
                'image' => $this->faker->imageUrl(600, 600),
                'href' => $this->faker->url,
                'currency' => 'USD',
                'continent' => 'EU'
            ]
        );

        foreach ($tests as $key) {
            DB::table('popupads')->insert($key);
        }

    }
}
