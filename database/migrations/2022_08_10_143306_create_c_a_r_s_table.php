<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCARSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('c_a_r_s', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('department');
            $table->date('date');
            $table->string('product_type');
            $table->string('product_name');
            $table->string('supplier');
            $table->string('reject_desc');
            $table->integer('reject_qty');
            $table->integer('qty');
            $table->integer('doc_number');
            $table->string('dept_head');
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
        Schema::dropIfExists('c_a_r_s');
    }
}