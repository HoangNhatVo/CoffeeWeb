<?php

namespace App\Http\Controllers;

use App\ProductType;
use Illuminate\Http\Request;

class LoaiSPController extends Controller
{

    public function getDanhSach()
    {
        $loai_sp = ProductType::all();
        return view('admin.loaisanpham.danhsach', compact('loai_sp'));
    }

    public function getThem()
    {
        return view('admin.loaisanpham.them');
    }

    public function postThem(Request $req)
    {
        $this->validate($req,
            [
                'name' => 'required|unique:type_products,name|min:2|max:100',
                'description' => 'required'
            ],
            [
                'name.required' => 'Bạn chưa nhập tên loại sản phẩm',
                'name.unique' => 'Tên loại sản phẩm đã trùng',
                'name.min' => 'Tên loại sản phẩm phải có độ dài từ 3 đến 100 ký tự',
                'name.max' => 'Tên loại sản phẩm phải có độ dài từ 3 đến 100 ký tự',
                'description.required' => 'Bạn chưa nhập mô tả'
            ]);
        $loai_sp = new ProductType();
        $loai_sp->name = $req->name;
        $loai_sp->description = $req->description;
        $loai_sp->save();

        return redirect()->back()->with('thongbao', 'Thêm thành công');
    }

    public function getSua($id)
    {
        $loai_sp = ProductType::find($id);
        return view('admin.loaisanpham.sua', compact('loai_sp'));
    }

    public function postSua(Request $req, $id)
    {
        $loai_sp = ProductType::find($id);

        $this->validate($req,
            [
                'name' => 'required|unique:type_products,name|min:2|max:100',
                'description' => 'required'
            ],
            [
                'name.required' => 'Bạn chưa nhập tên loại sản phẩm',
                'name.unique' => 'Tên loại sản phẩm đã trùng',
                'name.min' => 'Tên loại sản phẩm phải có độ dài từ 3 đến 100 ký tự',
                'name.max' => 'Tên loại sản phẩm phải có độ dài từ 3 đến 100 ký tự',
                'description.required' => 'Bạn chưa nhập mô tả'
            ]);
        $loai_sp->name = $req->name;
        $loai_sp->description = $req->description;
        $loai_sp->save();

        return redirect()->back()->with('thongbao', 'Sửa thành công');
    }

    public function getXoa($id){
        $loai_sp = ProductType::find($id);
        $loai_sp->delete();

        return redirect()->back()->with('thongbao', 'Xoá thành công');
    }
}
