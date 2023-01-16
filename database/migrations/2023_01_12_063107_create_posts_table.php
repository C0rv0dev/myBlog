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
        Schema::create('posts', function (Blueprint $table) {

            $table->id();
            $table->unsignedBigInteger('category_id');
            $table->string('name', 60);
            $table->string('slug', 60);
            $table->string('description', 160);
            $table->binary('content');
            $table->boolean('status')->default(true);

            $table->timestamps();
            $table->softDeletes();

            $table->foreign('category_id')
                ->on('categories')
                ->references('id')
                ->onDelete('CASCADE')
                ->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
};
