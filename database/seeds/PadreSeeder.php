<?php

use Illuminate\Database\Seeder;

use App\Padre;

class PadreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Padre::class, 50)->create();
    }
}
