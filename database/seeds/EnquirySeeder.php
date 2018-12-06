<?php

use Illuminate\Database\Seeder;

class EnquirySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement("SET foreign_key_checks = 0");
        DB::table('enquiries')->delete();

        factory(\App\Models\Enquiry::class, 13)->create();
    }
}
