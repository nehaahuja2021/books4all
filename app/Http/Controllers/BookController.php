<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Http\Controllers\DB;

use App\Models\Book;
use App\Models\Rent;
use App\Models\userplan;


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
            return response()->json(['rented_book_data' => $rent->toArray()], 201);
  }

  public function bookcount(request $req )
  {
        
    $no_of_books= new Rent;
    $userid=$req->user_id;
    return $no_of_books::where('user_id',$userid)->count();
    //return response()->json($no_of_books);
  }
public function user_plan( request $req)
  {
    $userplan=new userplan;
    $userid=$req->user_id;
    return $userplan::where('user_id',$userid)->get('plan_id');
    
  }

  public function compare()
  {
    $no_of_books = $this->bookcount();
    
    
    $userplan = $this->user_plan();

    if($no_of_books>2 && $userplan==1)
    {
      echo " You cannot rent more than 2 books on this plan";
    }

  }
  

}