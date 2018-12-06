<?php

use App\Models\Enquiry;
use App\Models\Reservation;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(UserSeeder::class);
         $this->call(ChefSeeder::class);
         $this->call(Reservation::class);
         $this->call(Enquiry::class);
    }
}
