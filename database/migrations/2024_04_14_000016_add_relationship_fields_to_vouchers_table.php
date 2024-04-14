<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToVouchersTable extends Migration
{
    public function up()
    {
        Schema::table('vouchers', function (Blueprint $table) {
            $table->unsignedBigInteger('commission_type_id')->nullable();
            $table->foreign('commission_type_id', 'commission_type_fk_9688713')->references('id')->on('commission_types');
        });
    }
}
