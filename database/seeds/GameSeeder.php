<?php

use Illuminate\Database\Seeder;

class GameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        echo "Seeding Game...\n";
        App\Game::truncate();
        factory(App\Game::class, 10)->create();
    }
}
