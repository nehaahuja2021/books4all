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
      $userid=$req->user_id;
      $no_of_books = Rent::where('user_id',$userid)->count();
      $userplan= Userplan::where('user_id',$userid)->get('plan_id');

      if($no_of_books>2 && $userplan[0]->plan_id==1)
      //if(true)
    {
      return response()->json(['error_message' => "cant have more than 2 books on this plan"], 201);
    }
    else{
            $rent->save();
            return response()->json(['rented_book_data' => $rent->toArray()], 201);
    }
  }
  
/*private function user_plan( request $req)
  {
    $userplan=new userplan;
    $userid=$req->user_id;
    return $userplan::where('user_id',$userid)->get('plan_id');
    
  }*/
  

}