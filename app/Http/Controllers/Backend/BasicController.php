<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class BasicController extends Controller
{
    public function categoryStore(Request $request){
        //return $request->all();
        $validator = Validator::make($request->all(), [
         'name' => 'required',
        ]);

      if (!$validator->fails()){
          $category=new Category();
          $category->name=$request->name;
          if ($category->save()){
              return response()->json([
                  'success'=>'OK',
                  'message'=>'Category Add Successfully'
             ]);
          }
      }
        return response()->json([
            'success' => 'FAILD',
            'errors' => $validator->errors()->all()
        ]);

    }
    public function getCategory(){
        $category=Category::all();
        if ($category){
            return response()->json([
                'success'=>'OK',
                'category'=>$category
            ]);
        }
    }
}
