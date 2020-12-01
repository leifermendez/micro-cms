<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SliderSeeder extends Seeder
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
                'name' => 'slider1',
                'title' => '<mark>SITIO WEB</mark> asombroso',
                'description' => 'Esto es open source, colabora con nuestro repositorio en https://github.com/leifermendez',
                'href' => 'https://github.com/leifermendez',
                'image' => 'https://demo.serifly.com/cloudhub/html/uploads/server-shared.png'
            ]
        );

        foreach ($tests as $key) {
            DB::table('sliders')->insert($key);
        }

    }
}
