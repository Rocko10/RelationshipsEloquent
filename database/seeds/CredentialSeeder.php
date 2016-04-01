<?php

use Illuminate\Database\Seeder;

class CredentialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        echo "Seeding credentials...\n";

        App\Credential::truncate();

        factory(App\Credential::class, 10)->create();
    }
}
