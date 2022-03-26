<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    use HasFactory;

    protected $fillable = [
       'fullname',
       'cv',
       'refone',
       'reftwo',
       'refthree',
       'degree',
       'licence',
       'identity',
       'drivers_licence',
       'photo',
       'proof_add_one',
       'proof_add_two'
    ];
}
