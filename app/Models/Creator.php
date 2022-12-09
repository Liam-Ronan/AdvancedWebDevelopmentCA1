<?php

namespace App\Models;

use App\Models\Project;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Creator extends Model
{
    use HasFactory;

    public function projects()
    {
        /* Ensuring that creators have many projects */
        return $this->hasMany(Project::class);
    }
}
