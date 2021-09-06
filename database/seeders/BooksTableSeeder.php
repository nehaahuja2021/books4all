<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->insert([
            [
             'category'=>'Comics',
             'bookname'=>'Marvel Comics,Poster Collection',
             'author'=>"Marvel Comics",
             
             'image'=>"https://images-na.ssl-images-amazon.com/images/I/61HV1JBB4EL._SX379_BO1,204,203,200_.jpg"
            ],
            [
             'category'=>'Comics',
             'bookname'=>'The Amazing SpiderMan',
             'author'=>" Marvel Comics Group",
             
             'image'=>"https://d3fa68hw0m2vcc.cloudfront.net/afa/109708313.jpeg"
            ],
            [
             'category'=>'Fiction',
             'bookname'=>'The Spy of Venice',
             'author'=>"William Shakespeare",
             
             'image'=>"https://images-na.ssl-images-amazon.com/images/I/51Dyfx4w9aL._SY291_BO1,204,203,200_QL40_FMwebp_.jpg"
            ],
 
            [
             'category'=>'Mystery',
             'bookname'=>'The Eighth Detective',
             'author'=>"Alex Pavesi",
             
             'image'=>"https://www.pilotonline.com/resizer/I0beht4xfGx8nE08ydceVjyPlfU=/415x631/top/cloudfront-us-east-1.images.arcpublishing.com/tronc/UR4UHOJXHVE33PRJ7AN2N52TCY.jpg"
            ],
 
            [
             'category'=>'Kids',
             'bookname'=>'Matilda',
             'author'=>"Roald Dahl",
             
             'image'=>"https://media.s-bol.com/JLnKZR2MOyo/550x814.jpg"
            ],
 
          [
             'category'=>'Kids',
             'bookname'=>'Diary of a Wimpy Kid',
             'author'=>"Jeff Kinney",
             
             'image'=>"https://images-eu.ssl-images-amazon.com/images/I/51f8bqaaDzL._SY291_BO1,204,203,200_QL40_ML2_.jpg"
            ],
 
 
 
           ]);
           
    }
}
