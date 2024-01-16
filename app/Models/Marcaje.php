<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Marcaje extends Model
{
    protected $fillable = ['codigo', 'marcacion'];

    public $timestamps = true;

    public $incrementing = true;

    protected $primaryKey = 'id';
}
