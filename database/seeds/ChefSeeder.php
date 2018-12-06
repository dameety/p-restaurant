<?php

use Illuminate\Database\Seeder;

class ChefSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement("SET foreign_key_checks = 0");
        DB::table('chefs')->delete();

        factory(\App\Models\Chef::class, 3)->create();
    }
}
