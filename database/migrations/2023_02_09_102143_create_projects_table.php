<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */

    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();

            $table->string('name', 64);
            $table->text('description')->nullable(true);
            $table->string('languages', 256)->nullable(true);
            $table->string('main_image')->nullable(true);
            $table->string('repo_link')->unique();
            $table->string('view_link')->nullable(true);
            $table->string('completed');
            $table->date('release_date')->nullable(true);

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
        Schema::dropIfExists('projects');
    }
};