<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function index(){
    //$categories = Category::all();
   $categories = Category::paginate(3);
   return view('home', ['categories' => $categories]);

   //this line we can use get data for any table with the help of table name
   return DB::table('categories')->get();
    }

    public function create(){
    return view('add');
    }

    public function store(Request $request){
    //validate
    $request->validate([
    'title'=> 'required|unique:categories|max:200'
    ]);
    $category= new Category;
    $category->title = $request->title;
    $category->save();
    return redirect('/')->withSuccess('Category added succesful');
    }

      public function edit($id){
       //$category = Category::where('id',$id)->first();
        $category = Category::find($id);
       return view('edit', ['category'=> $category]);
        }

         public function update(Request $request, $id){
               //$category = Category::where('id',$id)->first();
               $category = Category::find($id);
               $category->title = $request->title;
                $category->save();
               return redirect('/');
           }

             public function delete($id){
              // $category = Category::where('id',$id)->first();
               $category = Category::find($id);
               $category->delete();
                 return redirect('/');
               }

                  function test(){
                      return 'this is only testing';
                  }
}
