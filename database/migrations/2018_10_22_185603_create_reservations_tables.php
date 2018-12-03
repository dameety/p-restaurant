<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateReservationsTables extends Migration
{
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            
            // this will create an id, a "published" column, and soft delete and timestamps columns
//            createDefaultTableFields($table);
            $table->timestamps();
            $table->softDeletes();
            $table->increments('id');
            $table->string('published')->nullable();

            // feel free to modify the name of this column, but title is supported by default (you would need to specify the name of the column Twill should consider as your "title" column in your module controller if you change it)
            $table->string('title', 200)->nullable();

            // add those 2 colums to enable publication timeframe fields (you can use publish_start_date only if you don't need to provide the ability to specify an end date)
            // $table->timestamp('publish_start_date')->nullable();
            // $table->timestamp('publish_end_date')->nullable();


            // use this column with the HasPosition trait
            // $table->integer('position')->unsigned()->nullable();

            $table->string('name')->nullable();
            $table->string('time')->nullable();
            $table->string('date')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('number_of_people')->nullable();
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
        Schema::dropIfExists('reservations');
    }
}
