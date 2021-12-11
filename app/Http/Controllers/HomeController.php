<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CategoryModel;
use Illuminate\Support\Facades\DB;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $listCat = CategoryModel::all();
        $slides = DB::table('banner')->get();
        return view('home',['slides'=>$slides],compact('listCat'));
    }
    public function show($category_name,$category_id){
        $listCat = CategoryModel::all();
        $category = CategoryModel::find($category_id);

        $products = $category->products;

        return view('pages.product.index',compact('listCat','products'));
    }
    public function search(Request $request){

        $keywords = $request->keywords_submit;

        $cate_product = DB::table('tbl_category_product')->where('category_status','0')->orderby('category_id','desc')->get(); 
        $brand_product = DB::table('tbl_brand')->where('brand_status','0')->orderby('brand_id','desc')->get(); 

        $search_product = DB::table('tbl_product')->where('product_name','like','%'.$keywords.'%')->get(); 


        return view('pages.sanpham.search')->with('category',$cate_product)->with('brand',$brand_product)->with('search_product',$search_product);

    }
}
