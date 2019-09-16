<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Tables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('digital_contact', function (Blueprint $table){
            $table->string('id', 36);
            $table->primary('id');
            $table->string('contact_id', 36);
            $table->foreign('contact_id')
                ->references('id')
                ->on('cat_digital_contact');
            $table->string('user_id', 36);
            $table->foreign('user_id')
                ->references('id')->on('user');
            $table->string('value', 140);
        });
        Schema::create('company', function (Blueprint $table){
            $table->string('id', 36);
            $table->primary('id');
            $table->string('name', 25);
        });
        Schema::create('country', function (Blueprint $table){
            $table->string('id', 36);
            $table->primary('id');
            $table->string('name', 35);
            $table->string('code', 4);
        });
        Schema::create('address', function(Blueprint $table){
            $table->string('id', 36);
            $table->primary('id');
            $table->string('user_id', 36);
            $table->foreign('user_id')
                ->references('id')->on('user');
            $table->string('country_id', 36);
            $table->foreign('country_id')
                ->references('id')->on('country');
            $table->string('street', 30);
            $table->string('street_number', 9);
            $table->string('suburb', 15);
            $table->string('township', 15);
            $table->string('state', 15);
            $table->string('cp', 5);
        });
        Schema::create('telephone', function (Blueprint $table){
            $table->string('id', 36);
            $table->primary('id');
            $table->string('user_id', 36);
            $table->foreign('user_id')
                ->references('id')->on('user');
            $table->string('phone_id', 36);
            $table->foreign('phone_id')
                ->references('id')->on('cat_telephone');
            $table->string('number', 15);
        });
        Schema::create('order', function (Blueprint $table){
            $table->string('id', 36);
            $table->primary('id');
            $table->string('user_id', 36);
            $table->foreign('user_id')
                ->references('id')->on('user');
            $table->integer('quality');
            $table->float('subtotal', 7, 2);
            $table->float('total', 8, 2);
            $table->float('tax', 8, 2);
        });
        Schema::create('credit_card', function (Blueprint $table){
            $table->string('id', 36);
            $table->primary('id');
            $table->string('user_id', 36);
            $table->foreign('user_id')
                ->references('id')->on('user');
            $table->string('type_card_id', 36);
            $table->foreign('type_card_id')
                ->references('id')
                ->on('cat_type_card');
            $table->text('number');
            $table->text('cvt');
            $table->text('expiration_month');
            $table->text('expiration_year');
            $table->string('last_digits', 4);
        });
        Schema::create('transfer', function (Blueprint $table){
            $table->string('id', 36);
            $table->primary('id');
            $table->string('user_id', 36);
            $table->foreign('user_id')
                ->references('id')->on('user');
            $table->string('company_id', 36);
            $table->foreign('company_id')
                ->references('id')
                ->on('company');
            $table->string('order_id', 36);
            $table->foreign('order_id')
                ->references('id')
                ->on('order');
            $table->string('method_id', 36);
            $table->foreign('method_id')
                ->references('id')
                ->on('cat_pago_facil_methods');
            $table->integer('authorization');
            $table->integer('authorized');
            $table->string('message', 50);
            $table->string('description', 140);
            $table->string('error', 140);
            $table->dateTime('init_date');
            $table->dateTime('end_date');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
    }
}
