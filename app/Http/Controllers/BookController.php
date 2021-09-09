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
      $rent->bookname=$req->bookname;
      $userid=$req->user_id;
      $no_of_books = Rent::where('user_id',$userid)->count();
      $userplan= Userplan::where('user_id',$userid)->get('plan_id');

      if($no_of_books>=2 && $userplan[0]->plan_id==1)
      //if(true)
    {
      return response()->json(['error_message' => "You cannot rent more than 2 books on this plan,Upgrade it!!"], 201);
    }
    else{
            $rent->save();
            return response()->json(['rented_book_data' => $rent->toArray()], 201);
    }


      }
  
public function user_info( request $req)
  {
    
    $userid=$req->user_id;
    $userplan= Userplan::where('user_id',$userid)->get(['plan_id','amountpaid','paymentstatus']);
    
    $userbookinfo= Rent::where('user_id',$userid)->get(['bookname','dateofissue']);
    
    return response()->json(['userplan' => $userplan->toArray(),'rentedbooksinfo'=> $userbookinfo->toArray()], 201);
    
  }

  public function select_plan(request $req)

  {
    $userid=$req->user_id;
    $planid=$req->plan_id;
    $amount=$req->amountpaid;
    $userplan= new userplan;
      $userplan ->user_id=$req->user_id;
      $userplan->plan_id=$req->plan_id;
      $userplan->amountpaid=$req->amountpaid;
      $userplan->paymentstatus=$req->paymentstatus;
      $userplan->save();
      return response()->json(['selectedplan' => $userplan->toArray()], 201);

      }
  

}