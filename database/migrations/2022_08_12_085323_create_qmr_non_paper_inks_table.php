<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQmrNonPaperInksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('qmr_non_paper_inks', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('department')->nullable();
            $table->date('date')->nullable();
            $table->string('prod_type')->nullable();
            $table->string('prod_name')->nullable();
            $table->string('supplier')->nullable();
            $table->integer('qty')->nullable();
            $table->integer('doc_number')->nullable();
            $table->string('dept_head')->nullable();
            $table->string('complete_qty')->nullable();
            $table->string('discoloration')->nullable();
            $table->string('foreign_mat')->nullable();
            $table->string('dent_broken')->nullable();
            $table->string('leak')->nullable();
            $table->string('liquid_contam')->nullable();
            $table->string('mishandling')->nullable();
            $table->string('proper_arrangement')->nullable();
            $table->string('missing_docs')->nullable();
            $table->string('signed')->nullable();
            $table->string('tampering')->nullable();
            $table->string('docs_contam')->nullable();
            $table->string('crumpled')->nullable();
            $table->string('orig')->nullable();
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
        Schema::dropIfExists('qmr_non_paper_inks');
    }
}
