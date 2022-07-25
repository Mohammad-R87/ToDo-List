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
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->integer('category_id')->nullable();
            $table->integer('tag_id')->nullable();
            $table->integer('user_id');
            $table->integer('code');
            $table->string('title');
            $table->text('description')->nullable();
            $table->integer('number');
            $table->enum('status', ['received','under repair','repaired','delivered']);
            $table->timestamp('done_at')->nullable();
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
        Schema::dropIfExists('_tasks');
    }
};
