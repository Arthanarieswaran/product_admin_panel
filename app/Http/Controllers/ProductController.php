<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function store(Request $request){
        // modiyfy file
        $warpdata=WarpInward::create([
            'firm_id'       =>$request->firm_id,
            'warper_id'     =>$request->warper_id,
            'recored_no'    =>$request->recored_no,
            'entry_date'    =>$request->entry_date,
            'order'         =>$request->order,
            'warp_id'       =>$request->warp_id,
            'warp_design_id'=>$request->warp_design_id,
            'warp_type'     =>$request->warp_type,
            'product_qty'   =>$request->product_qty,
            'meter'         =>$request->meter,
            'warp_condition'=>$request->warp_condition,
            'empty_type'    =>$request->empty_type,
            'empty_qty'     =>$request->empty_qty,
            'sheet'         =>$request->sheet,
            'account_type_id'=>$request->account_type_id,
            'design_wages'  =>$request->design_wages,
            'warp_wages'    =>$request->warp_wages,
            'total_rs'   =>$request->total_rs,
            'total_amount'  =>$request->total_amount,
            'total_no_ends'   =>$request->total_no_ends,
            'total_qty'  =>$request->total_qty
    ]);
    }
}
