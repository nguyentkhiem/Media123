<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use App\Models\Category;

class CategoryController extends Controller
{
    public function getCategory()
    {
        $data['category'] = Category::all();
        return view('backend.category', $data);
    }

    public function postCategory(Request $request)
    {
        $cate = new Category;
        $cate->cate_name = $request->name;
        $cate->cate_slug = str_slug($request->name);
        $cate->save();
        return back();
    }

    public function getEditCate($id){
    	$data['cate'] = Category::find($id);
    	return view('backend.editCategory', $data);
    }

    public function postEditCate(Request $request, $id){
    	$cate = Category::find($id);
    	$cate->cate_name = $request->name;
    	$cate->cate_slug = str_slug($request->name);
    	$cate->save();
    	return redirect()->intended('admin/category');
    }

    public function getDeleteCate($id){
    	// Category::destroy($id);
     //    return back();
    }

}
