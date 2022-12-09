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
        /* Pivot table */
        Schema::create('developer_project', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('developer_id');
            $table->unsignedBigInteger('project_id');

            $table->foreign('developer_id')->references('id')->on('developers')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('project_id')->references('id')->on('projects')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('developer_project');
    }
};
