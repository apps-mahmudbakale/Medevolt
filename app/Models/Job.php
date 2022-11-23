<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    protected $fillable = [
        'role',
        'location',
        'qty',
        'description',
        'slug',
        'created_at',
        'updated_at'
    ];


    public function application()
    {
        return $this->hasOne(Application::class);
    }


    public function getJobTitle()
    {
        return "{$this->role} {$this->location}";
    }
}

