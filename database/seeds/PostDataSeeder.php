<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class PostDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $faker = Faker::create();
         foreach(range(1,1000) as $index)
         {
             DB::table('posts')->insert([
            'name'=>$faker->sentence(5),
            'last_name'=>$faker->paragraph(4)
             ]);
    }

    }
}
