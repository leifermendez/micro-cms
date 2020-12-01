<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CommentsSeeder extends Seeder
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
                'name' => $this->faker->name,
                'description' => $this->faker->sentence,
                'nickname' => $this->faker->userName,
                'href' => $this->faker->url
            ],
            [
                'name' => $this->faker->name,
                'description' => $this->faker->sentence,
                'nickname' => $this->faker->userName,
                'href' => $this->faker->url
            ],
            [
                'name' => $this->faker->name,
                'description' => $this->faker->sentence,
                'nickname' => $this->faker->userName,
                'href' => $this->faker->url
            ]
        );

        foreach ($tests as $key) {
            DB::table('comments')->insert($key);
        }

    }
}
