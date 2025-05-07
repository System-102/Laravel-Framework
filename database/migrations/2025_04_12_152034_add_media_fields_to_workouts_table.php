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
        Schema::table('workouts', function (Illuminate\Database\Schema\Blueprint $table) {
            $table->string('gif_image')->nullable();
            $table->text('video_url')->nullable();
            $table->text('steps')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
{
    Schema::table('workouts', function (Illuminate\Database\Schema\Blueprint $table) {
        $table->dropColumn(['gif_image', 'video_url', 'steps']);
    });
}

};
