<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServicesSeeder extends Seeder
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
                'title' => $this->faker->words(1, true),
                'subtitle' => $this->faker->words(3, true),
                'price' => $this->faker->numberBetween(10,999),
                'short_description' => $this->faker->words(5, true),
                'description' => $this->faker->words(8, true),
                'href' => 1
            ],
            [
                'title' => $this->faker->words(1, true),
                'subtitle' => $this->faker->words(3, true),
                'price' => $this->faker->numberBetween(10,999),
                'short_description' => $this->faker->words(5, true),
                'description' => $this->faker->words(8, true),
                'href' => 1
            ],
            [
                'title' => $this->faker->words(1, true),
                'subtitle' => $this->faker->words(3, true),
                'price' => $this->faker->numberBetween(10,999),
                'short_description' => $this->faker->words(5, true),
                'description' => $this->faker->words(8, true),
                'href' => 1
            ],
            [
                'title' => $this->faker->words(1, true),
                'subtitle' => $this->faker->words(3, true),
                'price' => $this->faker->numberBetween(10,999),
                'short_description' => $this->faker->words(5, true),
                'description' => $this->faker->words(8, true),
                'href' => 1
            ],
            [
                'title' => $this->faker->words(1, true),
                'subtitle' => $this->faker->words(3, true),
                'price' => $this->faker->numberBetween(10,999),
                'short_description' => $this->faker->words(5, true),
                'description' => $this->faker->words(8, true),
                'href' => 1
            ],
            [
                'title' => $this->faker->words(1, true),
                'subtitle' => $this->faker->words(3, true),
                'price' => $this->faker->numberBetween(10,999),
                'short_description' => $this->faker->words(5, true),
                'description' => $this->faker->words(8, true),
                'href' => 1
            ]
        );

        foreach ($tests as $key) {
            DB::table('services')->insert($key);
        }

    }
}
