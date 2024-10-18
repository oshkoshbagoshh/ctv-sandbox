<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('subscriber_tag', function (Blueprint $table) {
            $table->foreignId('subscriber_id')->constrained()->onDelete('cascade');
            $table->foreignId('tag_id')->constrained()->onDelete('cascade');
            $table->primary(['subscriber_id', 'tag_id']);
        });
    }

    public function down()
    {
        Schema::dropIfExists('subscriber_tag');
    }
};
