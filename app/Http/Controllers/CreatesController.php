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

         $articles= new Article;
         $articles->title = $request->input('title');
         $articles->description = $request->input('description');
         $articles->save();
         return redirect('')->with('success message', 'Article successfully Added');

      }

      public function update($id){
          $articles = Article::find($id);  
          
          return view('update',['articles'=> $articles]);
            }

            public function edit(Request $request, $id){
                $this->validate($request, [
                    'title'=> 'required',
                    'description'=> 'required'
                ]);
                    $data = array(
                        'title'=> $request->input('title'),
                        'description'=> $request->input('description')
                    );
                    Article::where('id', $id)->update($data);
               return redirect('/')->with('success message', 'Article updated successfully');
            }

            public function read(){
                
            }
}
