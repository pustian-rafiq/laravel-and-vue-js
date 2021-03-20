<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Category;
class CategoryController extends Controller
{
    public function createCategory(Request $request){
    //Validation
    $this->validate($request,[
        'category_name' => 'required|unique:categories',
      ]);
        //return $request->all();
        $category = new Category();
        $category->category_name = $request->category_name;
        $category->save();

    }
}
