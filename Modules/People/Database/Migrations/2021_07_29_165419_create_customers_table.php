<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('customer_name');
            $table->string('customer_email');
            $table->string('customer_phone');
            $table->string('city');
            $table->string('country');
            $table->text('address');
            $table->string('customer_website');
            $table->string('business_pin');
            $table->string('business_vat');
            $table->string('business_permit_no');
            $table->string('business_years');
            $table->string('business_date_registration');
            $table->string('business_reg_cert_no');
            $table->string("business_type");
            $table->string("postal_address");
            $table->string("postal_zip");
            $table->string("postal_town");
            $table->string("postal_city");
            $table->string("telephone_1");
            $table->string("telephone_2");
            $table->string("billing_email");
            $table->string("payment_term")->nullable();
            $table->string("credit_term")->nullable();
            $table->string("delivery_mode")->nullable();
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
        Schema::dropIfExists('customers');
    }
}
