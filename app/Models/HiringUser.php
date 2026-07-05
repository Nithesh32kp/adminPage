<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HiringUser extends Model
{
    /** @use HasFactory<\Database\Factories\HiringUserFactory> */
    use HasFactory;
    public $fillable = ['name', 'email', 'notes', 'phone'];
}
