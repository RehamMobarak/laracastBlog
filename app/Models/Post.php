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
        //* note: $query is passed(made by eloquent) by Laravel automatically
        //* .. and filters with its values are passed from controller

        //"??"	Null coalescing	-> ($x = expr1 ?? expr2)	Returns the value of $x.
        //=$filters['search'] value is = function result to be set or  not NULL, else it'll be False
        // to handle situations where there's no search key
        // if ( isset($filters['search']) ){dd($filters['search']);}


        //? After upgrading to PHP 8.0.13 - using arrow function /
        $query->when(
            $filters['search'] ?? false,
            fn ($query, $search) =>
            $query
                ->where('title', 'like', '%' . $search . '%')
                ->orWhere('body', 'like', '%' . $search . '%')

        );
        /************************************** */

        //#1 first: get the Category matches with the slug from the *request (auto by Laravel)
        //#2 then: find the Post that (where) has a Category() that matches it
        //#3 if there's no result to that then set query as false and show * posts as default
        //post->category_id : category_id->category_slug : category->posts()

        $query->when(
            $filters['category'] ?? false,
            fn ($query,  $category) =>
            $query->whereHas(
                'category',
                fn ($query) =>
                $query->where('slug',  $category) //#1
            )

        );
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
