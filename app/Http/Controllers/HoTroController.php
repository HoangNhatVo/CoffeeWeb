<?php

namespace App\Http\Controllers;
use App\Support;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HoTroController extends Controller
{

    public function getHoTro(){
        $support = Support::all();
        return view('admin.hotro.support', compact('support'));
    }

    public function getXoa($id){
        $support = Support::find($id);
        $support->status = 'Đã gửi phản hồi';
        $support->save();

        return redirect()->back()->with('thongbao', 'Phản hồi đã được gửi cho khách');
    }
}