<?php

namespace App\Models;

use EloquentFilter\Filterable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory, Filterable;

    protected $fillable = [
        'job_id',
        'title',
        'firstname',
        'lastname',
        'email',
        'job_type',
        'phone',
        'career',
        'role',
        'cv'
    ];

    public function job()
    {
        return $this->belongsTo(Job::class);
    }

    public function modelFilter()
    {
        return $this->provideFilter(\App\ModelFilters\ApplicationFilter::class);
    }

}
