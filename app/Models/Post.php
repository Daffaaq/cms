<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $table = 'our_product'; 
    protected $primaryKey = 'id_product'; 
    protected $keyType = 'string'; 
    protected $increment = false;
}
