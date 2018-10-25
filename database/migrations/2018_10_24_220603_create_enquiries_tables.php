<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEnquiriesTables extends Migration
{
    public function up()
    {
        Schema::create('enquiries', function (Blueprint $table) {
            
            // this will create an id, a "published" column, and soft delete and timestamps columns
            createDefaultTableFields($table);
            
            // feel free to modify the name of this column, but title is supported by default (you would need to specify the name of the column Twill should consider as your "title" column in your module controller if you change it)
            $table->string('name', 200)->nullable();
            $table->string('email', 200)->nullable();
            $table->string('phone', 200)->nullable();

            // your generated model and form include a description field, to get you started, but feel free to get rid of it if you don't need it
            $table->text('body')->nullable();

            // add those 2 colums to enable publication timeframe fields (you can use publish_start_date only if you don't need to provide the ability to specify an end date)
            // $table->timestamp('publish_start_date')->nullable();
            // $table->timestamp('publish_end_date')->nullable();


            // use this column with the HasPosition trait
            // $table->integer('position')->unsigned()->nullable();
        });

        // remove this if you're not going to use any translated field, ie. using the HasTranslation trait. If you do use it, create fields you want translatable in this table instead of the main table above. You do not need to create fields in both tables.
        Schema::create('enquiry_translations', function (Blueprint $table) {
            createDefaultTranslationsTableFields($table, 'enquiry');
            // add some translated fields
        });

        // remove this if you're not going to use slugs, ie. using the HasSlug trait
        Schema::create('enquiry_slugs', function (Blueprint $table) {
            createDefaultSlugsTableFields($table, 'enquiry');
        });
    }

    public function down()
    {
        Schema::dropIfExists('enquiry_revisions');
        Schema::dropIfExists('enquiry_translations');
        Schema::dropIfExists('enquiry_slugs');
        Schema::dropIfExists('enquiries');
    }
}