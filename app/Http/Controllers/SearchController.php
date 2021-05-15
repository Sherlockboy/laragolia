<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Product;
use Illuminate\Http\Request;
use Spatie\Searchable\Search;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $searchResults = (new Search)
            ->registerModel(Client::class, 'name')
            ->registerModel(Product::class, 'title')
            ->search($request->input('query'));
        
        return response()->json([
            'result' => $searchResults->groupByType()
        ], 200);
    }
}
