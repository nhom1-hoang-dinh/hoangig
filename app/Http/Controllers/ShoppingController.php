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
use App\Models\Orderproduct;
use App\Models\Introorderproduct;
use Cart;



class ShoppingController extends Controller
{
     public function index(){
        return view('product/shopping',[
            'data' => Cart::content(),
            'sum' => Cart::subtotal($totalItems = false),
            'count' => Cart::content()->sum('qty')

        ]);
    }
    public function add(Request $request){
		Cart::add(['id' =>$request->id, 'name' => $request->name,  'price' => $request->price, 'qty' => $request->count, 'options' => ['size' => $request->size]]);
	     return redirect('shopping/')->with('alert','Thêm sản phẩm vào giỏ thành công');
	}
	public function remove($id){
		if($id=='all'){
			Cart::destroy();
			return redirect()->back()->with('alert','Đã dọn sạch giỏ hàng');
		}else{
			Cart::remove($id);
			return redirect()->back()->with('alert','Xóa sản phẩm khỏi giỏ hàng thành công');
		}
	}
	public function update(Request $request){
		$data = Cart::content();
		$edit = $request->count;
		$i = 0;
		foreach ($data as $value) {
			Cart::update($value->rowId, ['qty' => $edit[$i]]);
			$i++;
		}
		return redirect()->back()->with('alert','Cập nhật giỏ hàng thành công');
	}
	public function pay(){
		$data = Cart::content();
		if($data->count()==0){
			return redirect()->back();
		}
		foreach ($data as $value) {
			$count = Countsize::where('sizeproduct_id', $value->options->size)
								->where('product_id', $value->id)
								->get('count')->first();
			if(($count->count)<$value->qty){
				$errors[$value->rowId] = 'Sản phẩm này chỉ còn '.$count->count.' chiếc';
			}
		}
		if(isset($errors)){
			return redirect()->back()->withErrors($errors)->withInput();
		}



		return view('product/pay',[
			'data' => $data,
			'sum' => Cart::subtotal($totalItems = false),
			'count' => Cart::content()->sum('qty')
		]);
	}
	public function payfinish(){
		
		$Orderproduct = new Orderproduct;
		$Orderproduct->user_id = Auth::id();
		$Orderproduct->lastprice = str_replace(',','',Cart::subtotal($totalItems = false));
		$Orderproduct->status = '0';
		$Orderproduct->save();
		$id = $Orderproduct->id;

		foreach (Cart::content() as $value) {
			$Introorderproduct = new Introorderproduct;
			$Introorderproduct->product_id = $value->id;
			$Introorderproduct->orderproduct_id = $id;
			$Introorderproduct->count = $value->qty;
			$Introorderproduct->price = $value->price;
			$Introorderproduct->size = $value->options->size;
			$Introorderproduct->save();
		}
		$congdiem = str_replace(',','',Cart::subtotal($totalItems = false))/1000000;
	if(($congdiem>=1)&&(Auth::user()->point<100)){
		$diemuser = User::find(Auth::id());
		$diemuser->point = (Auth::user()->point + floor($congdiem))>100 ? '100' : Auth::user()->point + floor($congdiem); 
		$diemuser->save(); 
	}
		$c_email = Auth::user()->email;

    	Mail::send('email.xacnhandonhang', [
    		'data'=>Cart::content()
    		], function($email) use($c_email){
    		$email->from('hoang01659461686@gmail.com','HoangIG');
	        $email->to($c_email, 'Visitor');
	        $email->subject('Xác nhận đơn hàng');
	    });
	    Cart::destroy();
		return redirect('/')->with('alert','Đặt hàng thành công, hảy kiểm tra mail của bạn để theo giỏi đơn hàng!');
	}
	public function history(){
		return view('product/history',[
			'datas' => Orderproduct::where('user_id', Auth::id())->orderBy('id','DESC')->get()
		]);
	}
	public function introhistory($id){
		$dataintro = Introorderproduct::where('orderproduct_id',$id)->get();
		if($dataintro->count()==0){
			return redirect()->back();
		}
		$datauser = Orderproduct::find($id);
		if($datauser->user_id!=Auth::id()){
			return redirect()->back();
		}

		return view('product/introhistory',[
			'dataintros' => $dataintro,
			'data' => $datauser
		]);

	}

}
