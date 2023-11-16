<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return response()->json($categories);
    }
    public function store(Request $request)
    {
        $data = $request->validate([
            'category_name' => 'required|unique:categories|max:255',
            'fname' => 'required',
            'lname' => 'required',
                     ]);
            return response()->json(Category::create($data), 201);
            }

    public function show($id)
    {
          $category =  Category::find($id);
        // $category = DB::table('categories')->where('id', $id)->first();
        // dd($category);
         return response()->json($category);
    }
    public function update(Request $request, $id)
    {

        $data = array();
        $data['category_name'] = $request->category_name;
        $data['fname']=$request->fname;
        $data['lname']=$request->lname;

        $category =  Category::find($id);
        $category->update($data);
        // $user = DB::table('categories')->where('id', $id)->update($data);
        return response()->json('success');
    }
    public function destroy($id)
    {
        // dd($id);
        // $category =  Category::find($id);
        // $category->delete();
        DB::table('categories')->where('id', $id)->delete();
        return response()->json('success');
    }



}
