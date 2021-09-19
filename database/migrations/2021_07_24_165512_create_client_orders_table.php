<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientOrdersTable extends Migration
{
    public function up()
    {
        Schema::create('client_orders', function (Blueprint $table) {
            $table->id();

            $table->string('company');
            $table->string('full_name');
            $table->string('email');
            $table->string('phone');
            $table->string('create_app')->default('false');
            $table->string('seo')->default('false');
            $table->string('mvp')->default('false');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('client_orders');
    }
}
