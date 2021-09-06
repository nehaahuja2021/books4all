<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Http\Controllers\DB;
use App\Models\Book;
use App\Models\Rent;

class BookController extends Controller
{
     public function search( $key) 
    {        
        return Book:: where('category','like','%'.$key.'%')->get();
            } 

  public function rent_books(request $req)
  {    
      $rent= new Rent;
      $rent ->book_id=$req->book_id;
      $rent->user_id=$req->user_id;
            $rent->save();
            return $rent;
  }

}
