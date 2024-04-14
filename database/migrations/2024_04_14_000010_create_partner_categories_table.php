<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePartnerCategoriesTable extends Migration
{
    public function up()
    {
        Schema::create('partner_categories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('en_name')->unique();
            $table->string('spa_name');
            $table->string('fr_name');
            $table->string('nl_name');
            $table->string('en_description')->nullable();
            $table->string('es_description')->nullable();
            $table->string('fr_description')->nullable();
            $table->string('nl_description')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
