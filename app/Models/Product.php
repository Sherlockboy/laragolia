<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Searchable\Searchable;
use Spatie\Searchable\SearchResult;

class Product extends Model implements Searchable
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'title',
        'price'
    ];

    public function getSearchResult(): SearchResult
    {
        return new SearchResult($this, $this->title);
    }
}
