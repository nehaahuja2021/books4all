<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
     public function search( $key) 
    { 
        //$user_input= $request;
        return Book:: where('category','like','%'.$key.'%')->get();
        
    } 

}
