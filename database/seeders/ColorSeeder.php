<?php

namespace Database\Seeders;

use App\Models\Color;
use Illuminate\Database\Seeder;

class ColorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Color::insert([
            ['name'=>'PINK'],
            ['name'=>'RED'],
            ['name'=>'BLUE'],
            ['name'=>'ORANGE'],
            ['name'=>'GREEN'],
        ]);
    }
}
