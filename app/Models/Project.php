<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    /* Used boot function in AppServiceProvider */

    /* Using scopeFilter function for when user clicks a tag, it will find all corresponding projects.

       Using scopeFilter for the search bar, using SQL LIKE query to match request with title, tags, description etc*/
    public function scopeFilter($query, array $filters) {
        if($filters['tag'] ?? false) {
            $query->where('tags', 'like', '%' . request('tag') . '%');
        }

    /*  */
        if($filters['search'] ?? false) {
            $query->where('title', 'like', '%' . request('search') . '%')

                  ->orWhere('description', 'like', '%' . request('search') . '%')
                  
                  ->orWhere('tags', 'like', '%' . request('search') . '%')
                  
                  ->orWhere('date_created', 'like', '%' . request('search') . '%')

                  ->orWhere('website', 'like', '%' . request('search') . '%');
        }
    }

    public function creator() {
        return $this->belongsTo(Creator::class);
    }

}