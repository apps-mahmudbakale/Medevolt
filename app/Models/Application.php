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

    public function job()
    {
        return $this->belongsTo(Job::class);
    }
}
