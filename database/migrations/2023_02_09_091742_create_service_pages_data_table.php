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
        Schema::create('service_pages_data', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('menu_id')->nullable();
            $table->string('top_section')->nullable();
            $table->string('explanation_section')->nullable();
            $table->string('feature_section')->nullable();
            $table->timestamps();
        });
    }
};
