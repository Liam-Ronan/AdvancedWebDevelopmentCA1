<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Creator extends Model
{
    use HasFactory;

    /* Returns the creator's projects */
    //Eg: $creator->projects
    public function projects() {
        return $this->hasMany(Project::class);
    }
}
