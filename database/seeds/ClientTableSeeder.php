<?php

use Illuminate\Database\Seeder;

class ClientTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Client::class, 3)->create()->each(function ($u) {
            $u->issues()->save(factory(App\Issues::class)->make());
        });
    }
}
