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
        Schema::create('obj1_cmn', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedInteger('idobj');
            $table->unsignedInteger('amount');
            $table->string('date',19);
            $table->double('mode');
            foreach (range(1, 10) as $i) {
                $table->double('ai' . $i );
            }
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('obj1_cmn');
    }
};
