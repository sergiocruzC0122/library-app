<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'author',
        'isbn',
        'description',
        'copies_total',
        'copies_available',
    ];

    public function categories():BelongsToMany
    {
        return $this->belongsToMany(Category::class);
    }

    public function loans():HasMany
    {
        return $this->hasMany(Loan::class);
    }

}
