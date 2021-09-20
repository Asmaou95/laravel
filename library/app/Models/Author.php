<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    
    /**
     * Get the books right by a author.
     */
    public function books()
    {
        return $this->hasMany(Book::class);
    }
}


