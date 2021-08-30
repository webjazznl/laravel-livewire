<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Generator as Faker;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        DB::table('contacts')->insert(
           [
            ['name' => $faker->name ],
            ['name' => $faker->name ],
            ['name' => $faker->name ],
           ]
        );
    }
}
