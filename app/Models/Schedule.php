<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;

    protected $fillable = [
        'schedule_name',
        'date',
        'location',
        'information'
    ];

    public function users()
    {
        return $this->belongsToMany('App\User', 'tasks');
    }
}
