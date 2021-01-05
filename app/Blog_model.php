<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog_model extends Model
{
    protected $table='blog';
    protected $primaryKey='id';
    protected $fillable=['nombre','contenido','imagen'];
}
