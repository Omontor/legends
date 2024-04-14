<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToVoucherRedeemsTable extends Migration
{
    public function up()
    {
        Schema::table('voucher_redeems', function (Blueprint $table) {
            $table->unsignedBigInteger('voucher_id')->nullable();
            $table->foreign('voucher_id', 'voucher_fk_9688703')->references('id')->on('vouchers');
        });
    }
}
