<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalesGroupsTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('sales_groups', static function (Blueprint $table) {
            $table->increments('id');
            $table->text('products');
            $table->string('total_amount', 250);
            $table->string('amount_tendered', 250)->default(0.00);
            $table->string('change', 250)->default(0.00);
            $table->string('balance_due', 250);
            $table->string('payment_method', 250);
            $table->text('remarks')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('sales_groups');
    }
}
