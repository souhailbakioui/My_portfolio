<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutusSetupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aboutus_setups', function (Blueprint $table) {
            $table->id();
            $table->string('shortdesc', 400);
            $table->string('heading', 400);
            $table->string('subheading', 400);
            $table->string('longdesc', 400);
            $table->string('website', 400);
            $table->string('dob', 400);
            $table->timestamp('published_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('aboutus_setups');
    }
}
