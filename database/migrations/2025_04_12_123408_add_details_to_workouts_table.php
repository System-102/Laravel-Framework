<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('workouts', function (Blueprint $table) {
            $table->longText('details')->nullable()->after('description');
            $table->Text('benefits')->nullable();
            $table->string('duration')->nullable();
            $table->string('level')->nullable();
            $table->string('target_muscles')->nullable();
        });
    }
    


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('workouts', function (Blueprint $table) {
            //
        });
    }
};
