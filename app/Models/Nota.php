<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Nota extends Model {
    //Listagem de campos para inserção no banco ['campo']
    use SoftDeletes;
    protected $fillable = ['texto', 'titulo'];
}