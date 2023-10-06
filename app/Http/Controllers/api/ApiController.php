<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\product;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function index(){
        $product = product::all();
        return $product;
    }
    public function store(Request $req){
        $product = new product;
        $product->id_table = $req->input('id_table');
        $product->id_product = $req->input('id_product');
        $product->amount = $req->input('amount');
        $product->save();

        // Trả về thông báo và sản phẩm đã tạo dưới dạng JSON
        return $product;
    }
        public function update(Request $request, $id)
    {
        $item = product::findOrFail($id);
        $data = $request->all();
        $item->update($data);
        return $item;
    }
    public function destroy(product $product)
    {
        // $product->delete();
        return $product;
    }
}
