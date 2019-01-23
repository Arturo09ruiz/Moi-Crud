<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QueryController extends Controller
{
    public function search(Request $request)
    {
        return $request->all();
        // Gets the query string from our form submission 
        $query = Request::input('search');
        // Returns an array of articles that have the query string located somewhere within 
        // our articles titles. Paginates them so we can break up lots of search results.
        $articles = DB::table('articles')->where('title', 'LIKE', '%' . $query . '%')->paginate(10);
            
        // returns a view and passes the view the list of articles and the original query.
        return view('query.search', compact('articles', 'query'));
    }

}
