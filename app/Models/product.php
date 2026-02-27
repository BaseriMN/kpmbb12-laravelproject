<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    //initiate table product
    protected $table = 'tb_product';

    // initiate primary key di dalam table
    protected $primaryKey = 'id_product';

    // initiate data yang tidak boleh diisi
    protected $guarded = ['id_product'];

}
