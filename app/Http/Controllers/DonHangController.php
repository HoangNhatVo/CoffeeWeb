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

    public function getDanhSachDaLam(){
        $bill = Bill::all();
        $billdetail = BillDetail::all();
        $customer = Customer::all();
        $products = Product::all();

        return view('admin.donhang.danhsachdalam', compact('bill','billdetail','customer','products'));
    }

    public function getXoa($id)
    {
        $billdetail = BillDetail::find($id);
        $bill = Bill::where('id',$billdetail->id_bill)->first();
        $tmp = $bill->total - ($billdetail->quantity*$billdetail->unit_price);
        $bill->total = $tmp;
        
        $customer = Customer::where('id',$bill->id_customer)->first();
        $billdetail->status = 'Đã xuất đơn hàng';
        $billdetail->save();
        if($tmp == 0){
            $bill->note = 'Đã xuất đơn hàng';
            $customer->note = 'Đã xuất đơn hàng';
            $customer->save();
        }
        $bill->save();
        return redirect()->back()->with('thongbao', 'Xuất đơn hàng thành công');
    }
}
