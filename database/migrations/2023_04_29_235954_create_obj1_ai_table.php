<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('obj1_ai', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedInteger('idobj');
            $table->unsignedInteger('idai');
            $table->string('datein',19);
            $table->double('mode');
            $table->double('aimax');
            $table->double('aimean');
            $table->double('aimin');
            $table->double('statmin');
            $table->double('statmax');
            $table->double('mlmin');
            $table->double('mlmax');
            $table->unsignedInteger('err');
            $table->unsignedInteger('sts');
            $table->string('dateout',19);
            $table->string('datecheck',19);
            $table->string('cmnt',50);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('obj1_ai');
    }
};
