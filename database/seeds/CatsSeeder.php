<?php

use Illuminate\Database\Seeder;
use App\Cat;

class CatsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Cat::class, 50) -> Create();
    }
}
