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
use App\Models\Post;
use App\Models\Typepost;


class AdminController extends Controller
{
    public function getlogin(){
    	if(Auth::check()){
    		return Redirect::to('admin/');
    	}
    	else{
    		$data = User::all();
    		return view('admin/login');
    	}
    }
    public function postlogin(Request $request){
    	
    	$arr = [
    		'name' => $request->name,
    		'password' => $request->password,
    		'level' => '1'
    	];
    	if(Auth::attempt($arr)){
    		$id = Auth::user()->id;
    		$name = Auth::user()->name;
    		$request->session()->put('id',$id);
    		$request->session()->put('name',$name);
    		return Redirect::to('admin/');
    	}else{
    		return Redirect::to('admin/login')->with('loi','Sai thông tin đăng nhập');
    	}
    }

    public function index(){
    	if(!Auth::check()){
    		return Redirect::to('admin/login');
    	}
    	$user = Auth::user();

    	return view('admin/index', ['user' => $user]);
    }

    public function showlistproduct(){
    	if(!Auth::check()){
    		return Redirect::to('admin/login');
    	}
    	$user = Auth::user();
        $data = Product::all();
    	return view('admin/showlistproduct', ['user' => $user, 'data'=>$data]);
    }

    public function addproduct(){
    	$user = Auth::user();

    	return view('admin/addproduct', [
    		'user' => $user,
    		'types' => Typeproduct::all(),
            'size' => Sizeproduct::all()
    	]);
    }
    public function postaddproduct($i, Request $request){


        $pattern = [
              'name' => 'required',
              'avatar' => 'required',
              'content' => 'required',
              'price' => 'required',
              'file' => 'required',
              'type' => 'required'
           ];

           $messenger = [
              'required' => ':attribute Không được để trống',
              'min' => ':attribute Không được nhỏ hơn :min ký tự',
              'max' => ':attribute Không được lớn hơn :max ký tự'
           ];

           $customName = [
              'name' => 'Tên sản phẩm',
              'avatar' => 'Hình đại diện',
              'content' => 'Nội dung bài viết',
              'file' => 'Album ảnh',
              'type' => 'Loại sản phẩm',
              'price' => 'Giá thành'
           ];

           $validator = Validator::make($request->all(),$pattern,$messenger,$customName);
            if ($validator->fails()) {
            return redirect('admin/addproduct')->withErrors($validator)->withInput();
            }

            // insert táble

            $product = new Product;
            $product->name_product = $request->name;
            $product->price = $request->price;
            $product->content = $request->content;
            $product->id_type = $request->type;
            $product->status = $i;
            $product->user_id = Auth::id();
            $product->save();
            $id = $product->id;
           
            //  cap nhat hinh anh

            if ($request->hasFile('file')) {
                $stt = 0;
                    foreach ($request->file('file') as $item){
                        $var = date_create();
                        $time = date_format($var, 'YmdHis');
                        $imageName = $time . '-'.md5(rand()).'-'.$item->getClientOriginalName();
                        $item->move(base_path() . '/public/images/product/', $imageName);

                        $Imageproduct = new Imageproduct;
                        $Imageproduct->name_image = $imageName;
                        $Imageproduct->id_product = $id;
                        $Imageproduct->avatar = $stt == $request->avatar ? '1' : '0';
                        $Imageproduct->save();
                        $stt++;
                    }
            }

            //  cập nhật số lượng

            $size = Sizeproduct::all()->toArray();
            $count = $request->size;
            for ($i=0; $i < count($size); $i++) { 
                if ($count[$i]>0) {
                    $sl = new Countsize;
                    $sl->sizeproduct_id = $size[$i]['id'];
                    $sl->product_id = $id;
                    $sl->count = $count[$i];
                    $sl->save();
                }
            }
            return Redirect::to('admin/product')->with('alert','Đã thêm sản phẩm thành công');
    }
    public function showlistpost(){
        $user = Auth::user();
        $data = Post::get();
        return view('admin/showlistpost', ['user' => $user, 'datas'=>$data]);
    }

    public function addpost(){
        $user = Auth::user();
        return view('admin/addpost', [
            'user' => $user,
            'types' => Typepost::all()
        ]);
    }
    public function postaddpost(Request $request){
          $pattern = [
              'name' => 'required',
              'content' => 'required',
              'file' => 'required',
              'type' => 'accepted'
           ];

           $messenger = [
              'required' => ':attribute Không được để trống',
              'min' => ':attribute Không được nhỏ hơn :min ký tự',
              'max' => ':attribute Không được lớn hơn :max ký tự',
              'accepted' => ':attribute Phải được chọn'
           ];

           $customName = [
              'name' => 'Tên bài viết',
              'content' => 'Nội dung bài viết',
              'file' => 'Avatar',
              'type' => 'Loại bài viết'
           ];

           $validator = Validator::make($request->all(),$pattern,$messenger,$customName);
            if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
            }

            // upload hinh

            $fileExtension = $request->file('file')->getClientOriginalExtension();
                        
            $fileName = time() . "_" . rand(0,9999999) . "_" . md5(rand(0,9999999)) . "." . $fileExtension;
                        
            $uploadPath = public_path('/images/post/'); 
            
            $request->file('file')->move($uploadPath, $fileName);




        $post = new Post;
        $post->name = $request->name;
        $post->content = $request->content;
        $post->typepost_id = $request->type;
        $post->user_id = Auth::id();
        $post->avatar = $fileName;
        $post->save();
        return Redirect::to('admin/post')->with('alert','Đã thêm bài viết thành công');
    }
}
