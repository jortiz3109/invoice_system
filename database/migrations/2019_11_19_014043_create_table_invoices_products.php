<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableInvoicesProducts extends Migration
{
    public function up()
    {
        Schema::create('invoices_products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->float('price');
            $table->integer('quantity');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('invoices_products');
    }
}
