<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class celebrity extends Model
{
    use HasFactory;

    protected $table = 'celebrity';
    public $timestamp = true;
}
