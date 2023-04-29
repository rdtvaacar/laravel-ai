<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLaravelAiCodesTable extends Migration
{
    public function up()
    {
        Schema::create('ai_codes', function (Blueprint $table) {
            $table->id();
            $table->text('code');
            $table->unsignedBigInteger('ai_message_id')->nullable();
            $table->foreign('ai_message_id')->references('id')->on('ai_messages')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('ai_codes');
    }
}