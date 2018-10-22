<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateReservationTables extends Migration
{
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            
            // this will create an id, a "published" column, and soft delete and timestamps columns
            createDefaultTableFields($table);
            
            // feel free to modify the name of this column, but title is supported by default (you would need to specify the name of the column Twill should consider as your "title" column in your module controller if you change it)
            $table->string('title', 200)->nullable();
            
            // your generated model and form include a description field, to get you started, but feel free to get rid of it if you don't need it
            $table->text('description')->nullable();

            // add those 2 colums to enable publication timeframe fields (you can use publish_start_date only if you don't need to provide the ability to specify an end date)
            // $table->timestamp('publish_start_date')->nullable();
            // $table->timestamp('publish_end_date')->nullable();


            // use this column with the HasPosition trait
            // $table->integer('position')->unsigned()->nullable();

            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->string('number_of_persons');
            $table->date('date');
            $table->string('time');
        });

        // remove this if you're not going to use any translated field, ie. using the HasTranslation trait. If you do use it, create fields you want translatable in this table instead of the main table above. You do not need to create fields in both tables.
        Schema::create('reservation_translations', function (Blueprint $table) {
            createDefaultTranslationsTableFields($table, 'reservation');
            // add some translated fields
        });

        // remove this if you're not going to use slugs, ie. using the HasSlug trait
        Schema::create('reservation_slugs', function (Blueprint $table) {
            createDefaultSlugsTableFields($table, 'reservation');
        });

    }

    public function down()
    {
        Schema::dropIfExists('reservation_revisions');
        Schema::dropIfExists('reservation_translations');
        Schema::dropIfExists('reservation_slugs');
        Schema::dropIfExists('reservation');
    }
}
