<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CategoryModel;
use App\Http\Requests\editCateRe;
class CategoryController extends Controller
{
    //
    public function list(){
        $categories = CategoryModel::all();
        return view('pages.category.list',compact('categories'));
    }
    public function create(){
        return view('pages.category.create');
    }
    public function store(Request $request){
        
        $category = new CategoryModel;
        $category->category_name = $request->category_name;
        $category->save();

        return redirect()->route('manage-category');
    
    }
 
    public function edit($id)
    {
        $category = CategoryModel::find($id);
        return view('pages.category.edit',compact('category'));
    }
    public function update(editCateRe $request,$id)
    {  
        $category = CategoryModel::find($id);
        $category->category_name = $request->category_name;
        $category->save();

        return redirect()->route('manage-category');
        
      
    }
    
    public function delete($id){
        CategoryModel::destroy($id);
        return back();
    }
}
