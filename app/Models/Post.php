<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // eagerLoading with every post query as a default
    protected $with = ['category', 'author'];

    // how to work with multiple filters in the same function

    public function scopeFilter($query, array $filters)
    {
        //* note: $query is passed by Laravel automatically
        //* .. and filters with its values are passed from controller

        //"??"	Null coalescing	-> ($x = expr1 ?? expr2)	Returns the value of $x.
        // The value of $x is expr1 if expr1 exists, and is not NULL.
        // If expr1 does not exist, or is NULL, the value of $x is expr2.
        //= $query value is $filters['search'] if it's set or not NULL, else it'll be False
        // to handle situations where there's no search key

        $query->when($filters['search'] ?? false, function ($query, $search) {
            $query->where('title', 'like', '%' . $search . '%')
                ->orWhere('body', 'like', '%' . $search . '%');
        });
    }

    public function category()
    {
        return  $this->belongsTo(Category::class);
    }

    public function author()
    {
        return  $this->belongsTo(User::class, "user_id");
    }
}
