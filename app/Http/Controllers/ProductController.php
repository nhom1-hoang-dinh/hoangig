<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Redirect;
use Mail;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use App\Models\Product;
use App\Models\Imageproduct;
use App\Models\Typeproduct;
use App\Models\Sizeproduct;
use App\Models\Countsize;
use Illuminate\Contracts\Support\Htmlable;

class ProductController extends Controller
{
     public function listproduct(Request $request){
     	$data = isset($request->type) ? Product::where('id_type', $request->type)->get() : Product::all()->toArray();
     	$data = isset($request->name) ? Product::where('name_product', 'like','%'.$request->name.'%')->get() : $data;
     	$types = Typeproduct::all()->toArray();
        return view('product/formlistproduct',[
        	'data' => $data,
        	'typesearch' => $request->type,
        	'name' => $request->name,
        	'types' => $types
        ]);
    }
     public function show($id)
    {
    	$data = Product::find($id);
    	$type = Product::find($id)->typeproduct->toArray();
    	$avatar = Product::find($id)->imageproduct->where('avatar','1')->first()->toArray();
    	$image = Product::find($id)->imageproduct->toArray();
    	$related = Product::where('id_type',$data['id_type'])->where('id','<>',$data['id'])->limit(4)->get()->toArray();
    	$size = Countsize::where('product_id', $data['id'])->get()->toArray();
        return view('product/show',[
        	'data' => $data,
        	'type' => $type,
        	'avatar' => $avatar,
        	'image' => $image,
        	'related' => $related,
        	'size' => $size
        ]);
    }
    public function shopping(){
        return view('product/shopping',[
            'data' => Product::all()->toArray()
        ]);
    }
}
