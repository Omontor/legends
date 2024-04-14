<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePartnersTable extends Migration
{
    public function up()
    {
        Schema::create('partners', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('url')->nullable();
            $table->float('lat', 15, 8)->nullable();
            $table->float('lng', 15, 8)->nullable();
            $table->string('facebook')->nullable();
            $table->string('instagram')->nullable();
            $table->string('tiktok')->nullable();
            $table->string('email')->unique();
            $table->string('phone')->nullable();
            $table->string('en_description')->nullable();
            $table->string('es_description')->nullable();
            $table->string('fr_description')->nullable();
            $table->string('nl_description')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
