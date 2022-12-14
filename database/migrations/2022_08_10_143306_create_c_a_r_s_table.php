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
            $table->string('name')->nullable();
            $table->string('department')->nullable();
            $table->date('date')->nullable();
            $table->string('product_type')->nullable();
            $table->string('product_name')->nullable();
            $table->string('supplier')->nullable();
            $table->string('reject_desc')->nullable();
            $table->integer('reject_qty')->nullable();
            $table->integer('qty')->nullable();
            $table->integer('doc_number')->nullable();
            $table->string('dept_head')->nullable();
            $table->string('classification')->nullable();
            $table->string('related_issues')->nullable();
            $table->string('rel_issues_others_desc')->nullable();
            $table->string('station_detected')->nullable();
            $table->string('created_by')->nullable();
            $table->string('supervisor')->nullable();
            $table->string('position')->nullable();
            $table->string('deleted')->nullable();
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