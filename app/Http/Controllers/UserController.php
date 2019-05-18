<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    public function getDanhSach()
    {
        $user = User::all();
        return view('admin.user.danhsach', compact('user'));
    }

    public function getThem()
    {
        $user = User::all();
        return view('admin.user.them', compact('user'));
    }

    public function postThem(Request $req)
    {
        $this->validate($req,
            [
                'full_name' => 'required',
                'email' => 'required|email|unique:users,email',
                'password' => 'required|min:6|max:20',
                're_password' => 'required|same:password',
                'phone' => 'required',
                'address' => 'required'
            ],
            [
                'full_name.required' => 'Họ và tên không được để trống',
                'email.required' => 'Vui lòng nhập email',
                'email.email' => 'Không đúng định dạng email',
                'email.unique' => 'Email đã có người sử dụng',
                'password.required' => 'Vui lòng nhập mật khẩu',
                'password.min' => 'Mật khẩu ít nhất 6 ký tự',
                'password.max' => 'Mật khẩu không quá 20 ký tự',
                're_password.required' => 'Vui lòng xác nhận mật khẩu',
                're_password.same' => 'Mật khẩu không giống nhau',
                'phone.required' => 'Số điện thoại không được để trống',
                'address.required' => 'Địa chỉ không được để trống',
            ]);
        $user = new User();
        $user->full_name = $req->full_name;
        $user->email = $req->email;
        $user->isAdmin = "Có";
        $user->password = Hash::make($req->password);
        $user->phone = $req->phone;
        $user->address = $req->address;
        $user->save();
        return redirect()->back()->with('thongbao', 'Tạo tài khoản thành công');
    }

    public function getSua($id)
    {
        $user = User::find($id);
        return view('admin.user.sua', compact('user'));
    }

    public function postSua(Request $req, $id)
    {
        $user = User::find($id);

        /*
        $this->validate($req,
            [
                'full_name' => 'required',
                'phone' => 'required',
                'address' => 'required'
            ],
            [
                'full_name.required' => 'Họ và tên không được để trống',
                'phone.required' => 'Số điện thoại không được để trống',
                'address.required' => 'Địa chỉ không được để trống',
            ]);
        */

        $user->full_name = $req->full_name;
        $user->phone = $req->phone;
        $user->address = $req->address;
        $user->isAdmin = $req->isAdmin;
        if ($req->changePassword == "on") {
            $user->password = Hash::make($req->password);
        }
        $user->save();
        return redirect()->back()->with('thongbao', 'Sửa thông tin thành công');
    }

    public function getXoa($id)
    {
        $user = User::find($id);
        $user->delete();

        return redirect()->back()->with('thongbao', 'Xoá thành công');
    }
}
