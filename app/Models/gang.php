<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class gang extends Model
{
    use HasFactory;

    protected $table = 'gang';
    public $timestamp = true;
}
