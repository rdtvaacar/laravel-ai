<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLaravelAiMessagesTable extends Migration
{
    public function up()
    {
        Schema::create('ai_messages', function (Blueprint $table) {
            $table->id();
            $table->text('message');
            $table->boolean('is_from_ai');
            $table->string('file_path')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('ai_messages');
    }
}