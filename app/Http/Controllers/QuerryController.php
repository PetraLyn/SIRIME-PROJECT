<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use DB;

class QuerryController extends Controller
{
    //
public function search()
{
    // Gets the query string from our form submission 
    $querry = \Input::get('search');
    // Returns an array of products that have the query string located somewhere within 
    // our products titles. Paginates them so we can break up lots of search results.

    $products = DB::table('products')->select('*')->where('item_name', 'LIKE', '%' . $querry . '%')->paginate(10);
    
        
    // returns a view and passes the view the list of articles and the original query.
    return view('page.search', compact('products', 'querry'));
 }
}