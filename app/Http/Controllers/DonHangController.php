<?php

namespace App\Http\Controllers;

use App\BillDetail;
use App\Bill;
use App\Customer;
use App\Product;
use App\ProductType;
use Illuminate\Http\Request;

class DonHangController extends Controller
{

	public function getDanhSach(){
		$bill = Bill::all();
		$billdetail = BillDetail::all();
		$customer = Customer::all();
		$products = Product::all();

		return view('admin.donhang.danhsach', compact('bill','billdetail','customer','products'));
	}

    // public function getDanhSach()
    // {
    //     $sanpham = Product::all();
    //     return view('admin.donhang.danhsach', compact('sanpham'));
    // }

    // public function getThem()
    // {
    //     $loai = ProductType::all();
    //     return view('admin.donhang  .them', compact('loai'));
    // }

    // public function postThem(Request $req)
    // {
    //     $this->validate($req,
    //         [
    //             'name' => 'required|unique:products,name|min:2|max:100',
    //             'unit_price' => 'required',
    //             'image' => 'required',
    //             'unit' => 'required',
    //             'new' => 'required',
    //         ],
    //         [
    //             'name.required' => 'Bạn chưa nhập tên loại sản phẩm',
    //             'name.unique' => 'Tên sản phẩm đã trùng',
    //             'name.min' => 'Tên loại sản phẩm phải có độ dài từ 3 đến 100 ký tự',
    //             'name.max' => 'Tên loại sản phẩm phải có độ dài từ 3 đến 100 ký tự',
    //             'image.required' => 'Bạn chưa chèn hình ảnh',
    //         ]);

    //     $sanpham = new Product();
    //     $sanpham->id_type = $req->id_type;
    //     $sanpham->name = $req->name;
    //     $sanpham->description = $req->description;
    //     $sanpham->unit_price = $req->unit_price;
    //     $sanpham->promotion_price = $req->promotion_price;
    //     $sanpham->unit = $req->unit;
    //     $sanpham->new = $req->new;
    //     if ($req->hasFile('image')) {
    //         $file = $req->file('image');
    //         $extension = $file->getClientOriginalExtension();
    //         if ($extension != 'jpg' && $extension != 'jpeg' && $extension != 'png') {
    //             return redirect()->back()->with('thongbao', 'Chỉ được chọn file đuôi là JPG, JPEG, PNG');
    //         }
    //         $name = $file->getClientOriginalName();
    //         $newname = $name;
    //         while (file_exists("upload/product/" . $newname)) {
    //             $newname = str_random(1) . "_" . $name;
    //         }
    //         $file->move("upload/product", $newname);
    //         $sanpham->image = $newname;

    //     }
    //     $sanpham->save();

    //     return redirect()->back()->with('thongbao', 'Thêm thành công');
    // }

    // public function getSua($id)
    // {
    //     $loai = ProductType::all();
    //     $sanpham = Product::find($id);
    //     return view('admin.sanpham.sua', compact('sanpham', 'loai'));
    // }

    // public function postSua(Request $req, $id)
    // {
    //     $sanpham = Product::find($id);

    //     $this->validate($req,
    //         [
    //             'name' => 'required|min:2|max:100',
    //             'description' => 'required',
    //             'unit_price' => 'required',
    //             'image' => 'required',
    //             'unit' => 'required',
    //             'new' => 'required',

    //         ],
    //         [
    //             'name.required' => 'Bạn chưa nhập tên loại sản phẩm',
    //             'name.min' => 'Tên loại sản phẩm phải có độ dài từ 3 đến 100 ký tự',
    //             'name.max' => 'Tên loại sản phẩm phải có độ dài từ 3 đến 100 ký tự',
    //             'description.required' => 'Bạn chưa nhập mô tả',
    //             'unit_price.required' => 'Bạn chưa nhập giá sản phẩm',
    //         ]);
    //     $sanpham->id_type = $req->id_type;
    //     $sanpham->name = $req->name;
    //     $sanpham->description = $req->description;
    //     $sanpham->unit_price = $req->unit_price;
    //     $sanpham->promotion_price = $req->promotion_price;
    //     $sanpham->image = $req->image;
    //     $sanpham->unit = $req->unit;
    //     $sanpham->new = $req->new;
    //     $sanpham->save();

    //     return redirect()->back()->with('thongbao', 'Sửa thành công');
    // }

    public function getXoa($id)
    {
        $billdetail = BillDetail::find($id);
        $bill = Bill::where('id',$billdetail->id_bill)->first();
        $tmp = $bill->total - ($billdetail->quantity*$billdetail->unit_price);
        $bill->total = $tmp;
        $bill->save();
        $customer = Customer::where('id',$bill->id_customer)->first();
        $billdetail->delete();
        if($tmp == 0){
            $bill->delete();
            $customer->delete();
        }
        return redirect()->back()->with('thongbao', 'Xuất đơn hàng thành công');
    }
}
