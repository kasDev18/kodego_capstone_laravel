<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QmrPaper extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'dept_name', 'date', 'prod_type', 'prod_name', 'supplier', 'qty', 'doc_number', 'dept_head', 'scratch', 'spot', 'contamination', 'discoloration', 'odor', 'hole', 'foreign_mat', 'missing_qty', 'mishandling', 'proper_arrangement', 'missing_docs', 'signed', 'tampering', 'liquid_contamination', 'crumpled', 'orig_docs', 'secured'];
}