<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'firstname',
        'lastname',
        'email',
        'phone',
        'career',
        'role',
        'cv'
    ];

    public static $rules = array(
        'firstname'             => 'required|string',                        // just a normal required validation
        'lastname'             => 'required|string',                        // just a normal required validation
        'email'            => 'required|email|unique:ducks',     // required and must be unique in the ducks table
        'phone'         => 'required|integer',
        'career' => 'required',
        'firstname'             => 'required',                        // just a normal required validation
                   // required and has to match the password field
    );
}
