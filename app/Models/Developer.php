<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Developer extends Model
{
    use HasFactory;

    public function projects()
    {
        /* Ensuring that projects has many devs */
        return $this->belongstoMany(Project::class)->withTimestamps();
    }
}
