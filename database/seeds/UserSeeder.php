<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
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
                'name' => 'Administrador',
                'email' => 'admin@admin.com',
                'level' => 'admin',
                'password' => bcrypt('12345678'),
                'phone' => $this->faker->phoneNumber(),
                'avatar' => $this->faker->imageUrl(100, 100),
                'skype' => $this->faker->userName,
            ],
            [
                'name' => 'Agente',
                'email' => 'agente@agente.com',
                'level' => 'agent',
                'password' => bcrypt('12345678'),
                'phone' => $this->faker->phoneNumber(),
                'avatar' => $this->faker->imageUrl(100, 100),
                'skype' => $this->faker->userName
            ],
            [
                'name' => 'Agente',
                'email' => 'user@user.com',
                'level' => 'user',
                'password' => bcrypt('12345678'),
                'phone' => $this->faker->phoneNumber(),
                'avatar' => $this->faker->imageUrl(100, 100),
                'skype' => $this->faker->userName
            ]
        );

        foreach ($tests as $key) {
            DB::table('users')->insert($key);
        }

    }
}