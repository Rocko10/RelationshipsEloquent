<?php

use Illuminate\Database\Seeder;

class ConsoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        echo "Seeding Console...\n";
        App\Console::truncate();
        factory(App\Console::class, 10)->create();
    }
}
