<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QmrNonPaperInk extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'department', 'date', 'prod_type', 'prod_name', 'supplier', 'qty', 'doc_number', 'dept_head', 'discoloration', 'foreign_mat', 'missing_qty', 'dent_broken', 'leak', 'liquid_contam', 'mishandling', 'proper_arrangement', 'missing_docs', 'signed', 'tampering', 'docs_contam', 'crumpled', 'orig', 'secured'];
}
