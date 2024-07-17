<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;
    protected $fillable = [
        'first_name',
        'last_name',
        'gender',
        'National ID',
        'date_of_birth',
        'marital_status',
        'phone_number',
        'next_of_kin',
        'relationship',
        'nok_phone_number'



    ];
}
