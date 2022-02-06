<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonalSetupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personal_setups', function (Blueprint $table) {
            $table->id();
            $table->string('profilepic', 400);
            $table->string('name', 400);
            $table->string('twitter', 400);
            $table->string('facebook', 400);
            $table->string('instagram', 400);
            $table->string('skype', 400);
            $table->string('linkedin', 400);
            $table->string('github', 400);
            $table->string('homewallpaper', 400);
            $table->string('professions', 400);
            $table->string('location', 400);
            $table->string('mobile', 400);
            $table->string('emailid', 400);
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
        Schema::dropIfExists('personal_setups');
    }
}
