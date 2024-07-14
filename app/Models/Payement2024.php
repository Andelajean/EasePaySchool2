<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payement2024 extends Model
{
    use HasFactory;
    protected $fillable = [
        'bank_name',
        'nomg',
        'prenomg', 
        'account_number',     
        'account_holder',
        'student_name',
        'depositor_name',      
        'phone_number',
        'cni_number',
        'viller',
        'heure',  
        'level',
        'filiere',   
        'payment_date',
        'education_level',
        'classe',
        'purpose',
        'details',
        'amount', 
        'service_fee',       
        'total',
        ];
}
