<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonalSetupTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personal_setup', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('profilepic', 250);
            $table->string('name', 250);
            $table->string('twitter', 200);
            $table->string('facebook', 200);
            $table->string('instagram', 200);
            $table->string('skype', 200);
            $table->string('linkedin', 200);
            $table->string('github', 200);
            $table->string('homewallpaper', 200);
            $table->string('professions', 200);
            $table->text('location');
            $table->string('mobile', 200);
            $table->string('emailid', 200);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('personal_setup');
    }
}
