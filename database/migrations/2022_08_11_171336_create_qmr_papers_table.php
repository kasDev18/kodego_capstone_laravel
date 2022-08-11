<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQmrPapersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('qmr_papers', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('dept_name')->nullable();
            $table->date('date')->nullable();
            $table->string('prod_type')->nullable();
            $table->string('prod_name')->nullable();
            $table->string('supplier')->nullable();
            $table->integer('qty')->nullable();
            $table->integer('doc_number')->nullable();
            $table->string('dept_head')->nullable();
            $table->string('scratch')->nullable();
            $table->string('spot')->nullable();
            $table->string('contamination')->nullable();
            $table->string('discoloration')->nullable();
            $table->string('odor')->nullable();
            $table->string('hole')->nullable();
            $table->string('foreign_mat')->nullable();
            $table->string('missing_qty')->nullable();
            $table->string('mishandling')->nullable();
            $table->string('proper_arrangement')->nullable();
            $table->string('missing_docs')->nullable();
            $table->string('signed')->nullable();
            $table->string('tampering')->nullable();
            $table->string('orig_docs')->nullable();
            $table->string('secured')->nullable();
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
        Schema::dropIfExists('qmr_papers');
    }
}