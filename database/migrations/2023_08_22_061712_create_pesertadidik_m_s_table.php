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
        Schema::create('pesertadidik', function (Blueprint $table) {
            $table->id();
            $table->string('nis', 10)->unique();
            $table->string('namalengkap', 255);
            $table->enum('jk',['L','P']);
            $table->float('nilai', 8, 2);
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
        Schema::dropIfExists('pesertadidik');
    }
};
