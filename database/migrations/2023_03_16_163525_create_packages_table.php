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
        Schema::create('packages', function (Blueprint $collection) {
            $collection->uuid('id');
            $collection->string('transaction_id');
            $collection->string('customer_name');
            $collection->string('customer_code');
            $collection->string('transaction_amount');
            $collection->string('transaction_discount');
            $collection->string('transaction_additional_field');
            $collection->string('transaction_payment_type');
            $collection->string('transaction_state');
            $collection->string('transaction_code');
            $collection->integer('transaction_order');
            $collection->string('location_id');
            $collection->integer('organization_id');
            $collection->string('created_at');
            $collection->string('updated_at');
            $collection->string('transaction_payment_type_name');
            $collection->integer('transaction_cash_amount');
            $collection->integer('transaction_cash_change');
            $collection->json('customer_attribute');
            $collection->json('connote');
            $collection->string('connote_id');
            $collection->json('origin_data');
            $collection->json('destination_data');
            $collection->json('koli_data');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('packages');
    }
};
