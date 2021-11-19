<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutusSetupTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aboutus_setup', function (Blueprint $table) {
            $table->integer('id', true);
            $table->text('shortdesc');
            $table->text('heading');
            $table->text('subheading');
            $table->text('longdesc');
            $table->string('website', 250);
            $table->string('dob', 250);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('aboutus_setup');
    }
}
