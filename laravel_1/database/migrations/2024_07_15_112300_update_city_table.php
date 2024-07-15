<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('city', function (Blueprint $table) {
            $table->integer('cid'); //add column 'cid'
            $table->primary('cid'); // make 'cid' primary key
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('city', function (Blueprint $table) {
            //
        });
    }
};
