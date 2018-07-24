<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Support\Facades\Input;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list_obj = Category::all();
        return view('admin.category.list')->with('categories_in_view', $list_obj);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $obj = new Category();
        $obj->name = Input::get('name');
        $obj->description = Input::get('description');
        $obj->save();
        return redirect('/admin/category');
    }

    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return 'show';
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $obj = Category::find($id);
        if ($obj == null) {
            return view('404');
        }
        return view('admin.category.create')
            ->with('category', $obj);
    }

    /**
     * Update the specified resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function update()
    {
        $id = Input::get('id');
        $obj = Category::find($id);
        if ($obj == null) {
            return view('404');
        }
        $obj->name = Input::get('name');
        $obj->description = Input::get('description');
        $obj->save();
        return redirect('/admin/category');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    // xoá sản phẩm.
    public function delete($id)
    {
        $obj = Category::find($id);
        if ($obj == null) {
            return view('404');
        }
        return view('admin.category.confirm_delete')->with('category', $obj);
    }

    // Xóa sản phẩm
    public function destroy($id)
    {
        $obj = Category::find($id);
        if ($obj == null) {
            return view('404');
        }
        $obj->delete();
        return redirect('/admin/category');
    }
}
