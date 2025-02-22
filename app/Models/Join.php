<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Join extends Model
{
    use HasFactory;
    protected $table='joins';
    protected  $fillable=[
        'name',
        'email',
        'address',
        'phone',
        'cv',
        'job_title'
    ];

}
