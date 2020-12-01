<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     * ALl icons get from https://fontawesome.com/icons?d=gallery
     */
    private $faker;

    public function run()
    {
        $this->faker = $faker = Faker\Factory::create();
        $tests = array(
            [
                'name' => 'info@test.com',
                'icon' => 'fa fa-envelope icon-left',
                'href' => '/#contact-form-id',
                'navbar' => 1
            ],
            [
                'name' => ' 55 5555 555 55',
                'icon' => 'fa fas fa-phone',
                'href' => '/#contact-form-id',
                'navbar' => 1
            ],
            [
                'name' => 'Contacto',
                'icon' => '',
                'href' => '/#contact-form-id',
                'navbar' => 0
            ],
            [
                'name' => 'Servicios',
                'icon' => '',
                'href' => '/#contact-form-id',
                'navbar' => 0
            ],
            [
                'name' => 'Nosotros',
                'icon' => '',
                'href' => '/#contact-form-id',
                'navbar' => 0
            ],
            [
                'name' => 'Clientes',
                'icon' => '',
                'href' => '/#contact-form-id',
                'navbar' => 0
            ]
        );

        foreach ($tests as $key) {
            DB::table('menu')->insert($key);
        }

    }
}
