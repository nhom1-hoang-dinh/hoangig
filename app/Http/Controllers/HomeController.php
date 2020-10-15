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

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
   
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $topproduct = Product::limit(4)->get()->toArray();
        $newproduct = Product::limit(8)->get()->toArray();



        return view('home/index',[
            'topproduct' => $topproduct,
            'newproduct' => $newproduct,
            'posts' => Post::limit(3)->get()
        ]);
    }
    public function intoblog($id){
        if((Post::find($id)->count())==0){
            return Redirect()->back();
        }
        return view('home/intoblog',[
            'data' => Post::find($id),
            'types' => Typepost::all(),
            'posts' => Post::limit(3)->get()
        ]);
    }
    public function listpost(Request $request){
        if(isset($request->type)){
            $data = Post::where('typepost_id', $request->type)->get();
        }else{
            $data = Post::limit(5)->get();
        }
        return view('home/listpost',[
            'datas' =>$data,
            'types' => Typepost::all(),
            'nametype' => isset($request->type ) ? Typepost::find($request->type) : 'all',
            'posts' => Post::limit(3)->get()
        ]);
    }
}
