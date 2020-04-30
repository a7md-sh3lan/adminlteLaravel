<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVideosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('videos', function (Blueprint $table) {
            $table->id();
            $table->string('video_url');
            $table->string('image_url');
            $table->tinyInteger('is_send_notification')->default(0);
            $table->string('keyword')->nullable();
            $table->enum('type', ['free', 'paid'])->default('free');
            $table->integer('created_by');
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
        Schema::dropIfExists('videos');
    }
}

// php artisan migrate --path=/database/migrations/2020_04_30_044358_create_videos_table.php