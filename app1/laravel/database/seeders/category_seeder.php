<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use DB as DB;
class category_seeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();
        for ($i = 0; $i < 10; $i++) {
            DB::table("category")->insert([
                "title" => $faker->name,
                "detail" => $faker->text,
                "photo" => $faker->name . ".jpg",
            ]);
        }
    }
}
