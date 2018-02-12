<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model {
    
    protected $table = 'books';

    protected $fillable = [
        'title',
        'subtitle',
        'contributors',
        'isbn',
        'eisbn',
        'imprint',
        'season',
        'season_year',
        'arc',
        'pub_date',
        'deadlines'
    ];
}