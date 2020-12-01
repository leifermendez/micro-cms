<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingsSeeder extends Seeder
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
                'sett_key' => 'description',
                'sett_value' => 'Micro CSM, Experto en desarrollo tecnológico tanto en back como en frontend. 8 años de experiencia trabajando para numerosas empresas actualmente liderando un equipo. https://github.com/leifermendez',
                'enabled' => 0,
                'meta' => 1
            ],
            [
                'sett_key' => 'title',
                'sett_value' => 'Micro CSM | Blog creado con Laravel y MySQL Gratis www.codigoencasa.com . https://github.com/leifermendez',
                'enabled' => 0,
                'meta' => 0
            ],
            [
                'sett_key' => 'email',
                'sett_value' => 'youremail@gmail.com',
                'enabled' => 0,
                'meta' => 0
            ],
            [
                'sett_key' => 'email_name',
                'sett_value' => 'Ey tienes un mensaje',
                'enabled' => 0,
                'meta' => 0
            ],
            [
                'sett_key' => 'email_subject',
                'sett_value' => 'Contacto desde mi pagina',
                'enabled' => 0,
                'meta' => 0
            ],
            [
                'sett_key' => 'email_from',
                'sett_value' => 'no-reply@awslatinoamerica.com',
                'enabled' => 0,
                'meta' => 0
            ],
            [
                'sett_key' => 'og:image',
                'sett_value' => 'https://avatars3.githubusercontent.com/u/15802366?s=460&u=59125ba37dfb5f0e87ee5f8c83280c88129a8881&v=4',
                'enabled' => 0,
                'meta' => 1
            ],
            [
                'sett_key' => 'theme-color',
                'sett_value' => '#2c3645',
                'enabled' => 0,
                'meta' => 1
            ],
            [
                'sett_key' => 'google',
                'sett_value' => '<script></script>',
                'enabled' => 1,
                'meta' => 1
            ]
        );

        foreach ($tests as $key) {
            DB::table('settings')->insert($key);
        }

    }
}
