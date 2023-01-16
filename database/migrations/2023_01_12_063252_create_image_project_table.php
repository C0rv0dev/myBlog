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
        Schema::create('image_project', function (Blueprint $table) {

            $table->id();
            $table->unsignedBigInteger('image_id');
            $table->unsignedBigInteger('project_id');

            $table->foreign('image_id')
                ->on('images')
                ->references('id')
                ->onDelete('CASCADE')
                ->onUpdate('CASCADE');

            
            $table->foreign('project_id')
                ->on('projects')
                ->references('id')
                ->onDelete('CASCADE')
                ->onUpdate('CASCADE');

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
        Schema::dropIfExists('image_project');
    }
};
