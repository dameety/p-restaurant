<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement("SET foreign_key_checks = 0");
        DB::table('users')->delete();
        $faker = Faker::create();

        factory(App\User::class, 13)->create();

//        factory(App\User::class)->create([
//            ''
//        ])
    }
}
