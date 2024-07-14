<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ecole extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 'email', 'identifiant',
        'bank1', 'account1', 'bank2', 'account2',
        'bank3', 'account3', 'bank4', 'account4',
        'bank5', 'account5', 'bank6', 'account6','telephone',
    ];
}
