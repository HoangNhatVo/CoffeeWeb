<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{

    public function getDashboard()
    {
        return view('admin.dashboard');
    }

    public function getLogin()
    {
        return view('admin.login');
    }

    public function postLogin(Request $req)
    {
        $this->validate($req,
            [
                'email' => 'required',
                'password' => 'required'
            ],
            [
                'email.required' => 'Vui lòng nhập Email đăng nhập',
                'password.required' => 'Vui lòng nhập mật khẩu',
            ]
        );

        if (Auth::attempt(['email' => $req->email, 'password' => $req->password])) {
            return redirect()->route('admin-dashboard');
        } else {
            return redirect()->back()->with('thongbao', 'Đăng nhập không thành công');
        }
    }

    public function getLogout()
    {
        Auth::logout();
        return redirect()->route('admin-login');
    }
}