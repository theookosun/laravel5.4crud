<?php

namespace App\Http\Controllers;
use App\Article;

use Illuminate\Http\Request;

class CreatesController extends Controller
{
    //

   public function home(){
        $articles = Article::all();
        
        return view('home', ['articles' => $articles]);
        
   }
   public function create(){
       return view('create'); 
      }

      public function add(Request $request){
          $this->validate($request, [
              'title'=> 'required',
              'description'=> 'required'
          ]);

          return 'Validation Pass';
      }
}
