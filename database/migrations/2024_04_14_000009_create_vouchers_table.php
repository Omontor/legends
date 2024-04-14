<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVouchersTable extends Migration
{
    public function up()
    {
        Schema::create('vouchers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('guid')->unique();
            $table->string('en_description')->nullable();
            $table->string('es_description')->nullable();
            $table->string('nl_description')->nullable();
            $table->string('fr_description')->nullable();
            $table->string('is_multi_use');
            $table->string('is_for_group')->nullable();
            $table->integer('group_size')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
