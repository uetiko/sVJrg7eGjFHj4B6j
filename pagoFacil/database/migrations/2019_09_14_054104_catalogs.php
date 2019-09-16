<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Catalogs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cat_telephone', function (Blueprint $table){
            $table->string('id', 36);
            $table->string('name', 15);
            $table->string('code', 7);
            $table->timestamps();
            $table->primary('id');
        });
        Schema::create('cat_digital_contact', function (Blueprint $table){
            $table->string('id', 36);
            $table->primary('id');
            $table->string('name', 35);
            $table->string('code', 8);
            $table->timestamps();
        });
        Schema::create('cat_bank_account', function (Blueprint $table){
            $table->string('id', 36);
            $table->string('name', 15);
            $table->string('code', 10);
            $table->timestamps();
            $table->primary('id');
        });
        Schema::create('cat_type_card', function (Blueprint $table){
            $table->string('id', 36);
            $table->string('name', 19);
            $table->string('code', 10);
            $table->timestamps();
            $table->primary('id');
        });
        Schema::create('cat_pago_facil_methods', function (Blueprint $table){
            $table->string('id', 36);
            $table->primary('id');
            $table->string('method', 15);
            $table->string('description', 30);
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
