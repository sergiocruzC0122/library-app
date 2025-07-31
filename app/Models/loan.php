<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class loan extends Model
{
    use HasFactory;

    protected $fillable = [
        'loan_date',
        'return_date',
        'returned',
    ];

    protected $casts = [
        'returned' => 'boolean',
    ];


    public function book():BelongsTo
    {
        return $this->belongsTo(Book::class);
    }

    public function user():BelongsTo
    {
        return $this->belongsTo(user::class);
    }
}
