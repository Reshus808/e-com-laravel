<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
class dummyAPI extends Controller
{
    function getData()
    {
    return ["fname"=>"reshu","lname"=>"singh"];
    }

    function list($id=null)
     {
     //return Category::get();
     return $id ? Category::find($id):Category::all();
     }

      function create(Request $request)
          {
          $category = new Category;
          $category->title = $request->title;
          $result = $category->save();
          if($result)
          {
            return ["result"=> "data has been saved"];
          }
          else{
          return ["result"=> "operation faild"];
          }

          }

           function update(Request $request, $id)
                    {
                    $category = Category::find($id);
                    $category->title = $request->title;
                    $result = $category->save();
                    if($result)
                    {
                      return ["result"=> "data has been updated"];
                    }
                    else{
                    return ["result"=> "operation faild"];
                    }
                    }

                    function delete($id)
                    {
                    $category = Category::find($id);
                    $result = $category->delete();
                     if($result)
                      {
                        return ["result"=> "data has been deleted"];
                       }
                       else{
                        return ["result"=> "operation faild"];
                        }
                    }

          function search($title)
          {
          return Category::where("title", $title)->get();
          }
}
