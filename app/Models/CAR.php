<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CAR extends Model
{
    use HasFactory;

    protected $fillable = ['name','department','date','product_type','product_name','supplier','reject_desc', 'reject_qty','qty','doc_number','dept_head'];

}