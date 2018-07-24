<?php

namespace App\Http\Controllers;

use app\Product;
use Illuminate\Support\Facades\Input;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list_obj = Product::all();
        return view('admin.products.list')->with('products_in_view', $list_obj);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $obj = new Product();
        $obj->name = Input::get('name');
        $obj->images = Input::get('images');
        $obj->description = Input::get('description');
        $obj->price = Input::get('price');
        $obj->save();
        return redirect('/admin/product');
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $obj = Product::find($id);
        if ($obj == null) {
            return view('404');
        }
        return view('admin.product.create')
            ->with('product', $obj);
    }

    /**
     * Update the specified resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function update()
    {
        $id = Input::get('id');
        $obj = Product::find($id);
        if ($obj == null) {
            return view('404');
        }
        $obj->name = Input::get('name');
        $obj->images = Input::get('images');
        $obj->description = Input::get('description');
        $obj->price = Input::get('price');
        $obj->save();
        return redirect('/admin/product');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    // delete products
    public function delete($id)
    {
        $obj = Product::find($id);
        if ($obj == null) {
            return view('404');
        }
        return view('admin.product.confirm_delete')->with('product', $obj);
    }

    //delete products
    public function destroy($id)
    {
        $obj = Product::find($id);
        if ($obj == null) {
            return view('404');
        }
        $obj->delete();
        return redirect('/admin/product');
    }
}
