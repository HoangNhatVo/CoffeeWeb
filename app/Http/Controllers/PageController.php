<?php

namespace App\Http\Controllers;

use App\Slide;
use App\Product;
use App\ProductType;
use App\Cart;
use App\Customer;
use App\Bill;
use App\BillDetail;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class PageController extends Controller
{

    public function getIndex()
    {
        $slide = Slide::all();
        $sp_moi = Product::where('new', "mới")->inRandomOrder()->paginate(4);
        $sp_km = Product::where('promotion_price', '<>', 0)->inRandomOrder()->paginate(4);
        return view('page.trangchu', compact('slide', 'sp_moi', 'sp_km'));
    }

    public function getLoaiSp($type)
    {
        $sp_theoloai = Product::where('id_type', $type)->get();
        $sp_khac = Product::where('id_type', '<>', $type)->inRandomOrder()->paginate(3);
        $ds_loai = ProductType::all();
        $loai_sp = ProductType::where('id', $type)->first();
        return view('page.loai_sanpham', compact('sp_theoloai', 'sp_khac', 'ds_loai', 'loai_sp'));
    }

    public function getChitiet(Request $req)
    {
        $sanpham = Product::where('id', $req->id)->first();
        $sp_tuongtu = Product::where('id_type', $sanpham->id_type)->inRandomOrder()->paginate(3);
        $loai_sp = ProductType::where('id', $sanpham->id_type)->first();
        $sp_km = Product::where('promotion_price', '<>', 0)->inRandomOrder()->paginate(4);
        $sp_moi = Product::where('new', 'mới')->inRandomOrder()->paginate(4);
        return view('page.chitiet_sanpham', compact('sanpham', 'sp_tuongtu', 'loai_sp', 'sp_km', 'sp_moi'));
    }

    public function getLienHe()
    {
        return view('page.lienhe');
    }

    public function getGioiThieu()
    {
        return view('page.gioithieu');
    }

    public function getAddtoCart(Request $req, $id)
    {
        $product = Product::find($id);
        $oldCart = Session('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->add($product, $id);
        $req->session()->put('cart', $cart);
        return redirect()->back();
    }

    public function getDelItemCart($id)
    {
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->removeItem($id);
        if (count($cart->items) > 0) {
            Session::put('cart', $cart);
        } else {
            Session::forget('cart');
        }
        return redirect()->back();
    }

    public function getCheckout()
    {
        return view('page.dat_hang');
    }

    public function postCheckout(Request $req)
    {
        $cart = Session::get('cart');

        $customer = new Customer;
        $customer->name = $req->name;
        $customer->gender = $req->gender;
        $customer->email = $req->email;
        $customer->address = $req->address;
        $customer->phone_number = $req->phone;
        $customer->note = $req->notes;
        $customer->save();

        $bill = new Bill;
        $bill->id_customer = $customer->id;
        $bill->date_order = date('Y-m-d');
        $bill->total = $cart->totalPrice;
        $bill->payment = $req->payment_method;
        $bill->note = $req->notes;
        $bill->save();

        foreach ($cart->items as $key => $value) {
            $bill_detail = new BillDetail;
            $bill_detail->id_bill = $bill->id;
            $bill_detail->id_product = $key;
            $bill_detail->quantity = $value['qty'];
            $bill_detail->unit_price = ($value['price'] / $value['qty']);
            $bill_detail->save();
        }
        Session::forget('cart');
        return redirect()->back()->with('thongbao', 'Đặt hàng thành công');

    }

    public function getLogin()
    {
        return view('page.dangnhap');
    }

    public function getRegiser()
    {
        return view('page.dangky');
    }

    public function postRegiser(Request $req)
    {
        $this->validate($req,
            [
                'email' => 'required|email|unique:users,email',
                'full_name' => 'required',
                'address' => 'required',
                'phone' => 'required',
                'password' => 'required|min:6|max:20',
                're_password' => 'required|same:password'
            ],
            [
                'email.required' => 'Vui lòng nhập Email',
                'email.email' => 'Không đúng định dạng Email',
                'email.unique' => 'Email đã có người sử dụng',
                'address.required' => 'Vui lòng nhập địa chỉ',
                'phone.required' => 'Vui lòng nhập số điện thoại',
                'password.required' => 'Vui lòng nhập mật khẩu',
                're_password.same' => 'Mật khẩu không giống nhau',
                'password.min' => 'Mật khẩu ít nhất 6 ký tự',
                'password.max' => 'Mật khẩu không quá 20 ký tự'
            ]);
        $user = new User();
        $user->full_name = $req->full_name;
        $user->email = $req->email;
        $user->password = Hash::make($req->password);
        $user->phone = $req->phone;
        $user->address = $req->address;
        $user->save();
        return redirect()->back()->with('thongbao', 'Tạo tài khoản thành công');
    }

    public function postLogin(Request $req)
    {
        $this->validate($req,
            [
                'email' => 'required|email',
                'password' => 'required'
            ],
            [
                'email.required' => 'Vui lòng nhập Email',
                'email.email' => 'Email không đúng định dạng',
                'password.required' => 'Vui lòng nhập mật khẩu',
            ]
        );
        $credentials = array('email' => $req->email, 'password' => $req->password);

        if (Auth::attempt($credentials)) {
            return redirect()->route('index');
        } else {
            return redirect()->back()->with('thongbao', 'Đăng nhập không thành công');
        }
    }

    public function getLogout()
    {
        Auth::logout();
        return redirect()->back();
    }

    public function getSearch(Request $req)
    {
        $product = Product::where('name', 'like', '%' . $req->key . '%')
            ->orWhere('unit_price', $req->key)
            ->get();
        return view('page.search', compact('product', 'req'));
    }

    public function postLienhe(Request $req){
         $this->validate($req,
            [
                'your-name' => 'required',
                'your-email' => 'required|email',
                'your-message' => 'required'
            ],
            [
                'your-name.required' => 'Vui lòng nhập họ tên',
                'your-email.required' => 'Vui lòng nhập Email',
                'your-email.email' => 'Email không đúng định dạng',
                'your-message.required' => 'Vui lòng nhập nội dung cần hỗ trợ'
            ]
        );

        return redirect()->back()->with('thongbao','Hỗ trợ đã được gửi');
    }
}
