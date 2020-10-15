<?php

namespace App\Http\Controllers;


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
use App\Models\Infouser;

class UserController extends Controller
{
    public function dangky(){
    	if(Auth::check()){
    		return Redirect::to('/');
		  }
    	return view('user/dangky');
    }
    public function logout(){
      Auth::logout();
      return Redirect::to('/');
    }

    public function postdangky(Request $request){
    	$pattern = [
    	             'name' => 'required',
    	             'email' => 'required|email',
    	             'password' => 'required|min:8',
    	             'configpassword' => 'required|same:password',
    	             'address' => 'required',
    	             'phone' => 'required',
    	             'check' => 'accepted'
    	          ];

    	          $messenger = [
    	             'required' => ':attribute Không được để trống',
    	             'min' => ':attribute Không được nhỏ hơn :min ký tự',
    	             'max' => ':attribute Không được lớn hơn :max ký tự',
    	             'email' =>':attribute không đúng định dạng',
    	             'same' =>':attribute không trùng khớp',
    	             'accepted' => ':attribute phải được chấp nhận'
    	          ];

    	          $customName = [
    	              'name' => 'Tên',
    	             'email' => 'Email',
    	             'password' => 'Mật khẩu',
    	             'configpassword' => 'Xác nhận mật khẩu',
    	             'address' => 'Địa chỉ',
    	             'phone' => 'Số điện thoại',
    	             'check' => 'Điều khoản'
    	          ];

          $validator = Validator::make($request->all(),$pattern,$messenger,$customName);
           if ($validator->fails()) {
           return redirect()->back()->withErrors($validator)->withInput();
           }

           if((User::where('email',$request->email)->count())>0){
           	return redirect()->back()->withErrors(['email' => 'Email này đã được đăng ký'])->withInput();
           }
           $new = new User;
           $new->name = $request->name;
           $new->email = $request->email;
           $new->password = bcrypt($request->password);
           $new->level = '2';
           $new->point = '0';
           $new->save();
           $id = $new->id;

           $Infouser = new Infouser;
           $Infouser->user_id = $id;
           $Infouser->address = $request->address;
           $Infouser->phone = $request->phone;
           $Infouser->note = $request->note;
           $Infouser->save();

           Auth::attempt(['email'=>$request->email, 'password'=>$request->password]);
         return redirect('/')->with('alert','Đăng ký thành công, cảm ơn bạn đã chọn chúng tôi!');



    }

    public function hoso(){

      return view('user/hoso',[
        'data' => Auth::user(),
        'info' => Infouser::where('user_id', Auth::id())->first()
        ]);
    }
     public function posthoso(Request $request){
        $pattern = [
                     'address' => 'required',
                     'phone' => 'required',
                  ];

                  $messenger = [
                     'required' => ':attribute Không được để trống',
                     'min' => ':attribute Không được nhỏ hơn :min ký tự',
                     'max' => ':attribute Không được lớn hơn :max ký tự',
                     'email' =>':attribute không đúng định dạng',
                  ];

                  $customName = [
                     'address' => 'Địa chỉ',
                     'phone' => 'Số điện thoại',
                  ];

            $validator = Validator::make($request->all(),$pattern,$messenger,$customName);
             if ($validator->fails()) {
             return redirect()->back()->withErrors($validator)->withInput();
             }

             $Infouser = Infouser::find(Infouser::where('user_id', Auth::id())->first()->id);
             $Infouser->address = $request->address;
             $Infouser->phone = $request->phone;
             $Infouser->note = $request->note;
             $Infouser->save();
             return redirect()->back()->with('alert', 'Cập nhật thành công!')->withInput();

    }
}
