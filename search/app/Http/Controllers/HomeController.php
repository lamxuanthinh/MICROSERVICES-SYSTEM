<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start(); 
class HomeController extends Controller
{
    public function index(){
        $product = DB::table('tbl_products')->orderby('product_id','desc')->limit(4)->get();
        return view('pages.home')->with('product',$product);
    }  
    public function search(Request $request)
    {
        $keywords = $request->keywords_submit;
        
        $product = DB::table('tbl_products')->orderby('product_id','desc')->limit(4)->get();

        $search_product = DB::table('tbl_products')->where('product_name','like','%'.$keywords.'%')->get();

        return view('pages.sanpham.search')->with('product',$product)->with('search_product',$search_product);

    } 
}

