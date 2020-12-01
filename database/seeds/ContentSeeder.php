<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContentSeeder extends Seeder
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
                'title' => '¿Quienes somos?',
                'description' => $this->faker->words(100, true),
                'icon' => 'fa fa-database fa-4x',
                'big' => 1,
                'href' => '#contact-form-id',
                'link_name' => 'Más informacion',
                'section' => 1
            ],
            [
                'title' => $this->faker->words(3, true),
                'description' => $this->faker->words(25, true),
                'icon' => 'fa fa-database fa-4x',
                'big' => 0,
                'href' => '/blog/1/ducimus',
                'link_name' => 'Más informacion',
                'section' => 1
            ],
            [
                'title' => $this->faker->words(3, true),
                'description' => $this->faker->words(25, true),
                'icon' => 'fa fa-database fa-4x',
                'big' => 0,
                'href' => '/blog/1/ducimus',
                'link_name' => 'Más informacion',
                'section' => 1
            ],
            [
                'title' => $this->faker->words(3, true),
                'description' => $this->faker->words(25, true),
                'icon' => 'fa fa-database fa-4x',
                'big' => 0,
                'href' => '/blog/1/ducimus',
                'link_name' => 'Más informacion',
                'section' => 1
            ],
            [
                'title' => $this->faker->words(3, true),
                'description' => $this->faker->words(25, true),
                'icon' => 'fa fa-database fa-4x',
                'big' => 0,
                'href' => '/blog/1/ducimus',
                'link_name' => 'Más informacion',
                'section' => 1
            ],
            [
                'title' => $this->faker->words(3, true),
                'description' => $this->faker->words(25, true),
                'icon' => 'fa fa-database fa-4x',
                'big' => 0,
                'href' => '/blog/1/ducimus',
                'link_name' => 'Más informacion',
                'section' => 1
            ],
            [
                'title' => $this->faker->words(3, true),
                'description' => $this->faker->words(25, true),
                'icon' => 'fa fa-database fa-4x',
                'big' => 0,
                'href' => '/blog/1/ducimus',
                'link_name' => 'Más informacion',
                'section' => 1
            ]
        );

        foreach ($tests as $key) {
            DB::table('content')->insert($key);
        }

    }
}
