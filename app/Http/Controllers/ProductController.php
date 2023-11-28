<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function store(Request $request){
        // modiyfy file
        $product=Product::create([
            'product_name'       =>$request->product_name,
            'product_content'     =>$request->product_content,
            'old_rate'    =>$request->old_rate,
            'new_rate'    =>$request->new_rate,
            'color'         =>$request->color,
            'material'       =>$request->material,
            'saree_length'=>$request->saree_length,
            'blous_length'     =>$request->blous_length,
            'work_type'   =>$request->work_type,
            'stich_type'         =>$request->stich_type,
            'product_type'=>$request->product_type,
            'product_work_type'    =>$request->product_work_type,
            'product_method_type'     =>$request->product_method_type,
            'product_img'         =>$request->product_img,
            'product_img_1'=>$request->product_img_1,
            'product_img_2'  =>$request->product_img_2,
            'product_img_3'    =>$request->product_img_3,
            'product_details_1'   =>$request->product_details_1,
            'product_details_2'  =>$request->product_details_2,
            'product_details_3'   =>$request->product_details_3,
            'product_details_4'  =>$request->product_details_4,
            'product_details_5'  =>$request->product_details_5,
            'munthi_color'   =>$request->munthi_color,
            'body_color'  =>$request->body_color
    ]);

    return redirect('/dashboard')
    ->withSuccess('Item Added');
    }




    public function index()
    {
        $student = Product::all();
        return view('layouts.dashboard', compact('student'));
    }


    public function update(Request $request){
        // modiyfy file
        if($request->id && $request->id){
            $product=Product::where('id',$request->id)->update([
                'product_name'       =>$request->product_name,
                'product_content'     =>$request->product_content,
                'old_rate'    =>$request->old_rate,
                'new_rate'    =>$request->new_rate,
                'color'         =>$request->color,
                'material'       =>$request->material,
                'saree_length'=>$request->saree_length,
                'blous_length'     =>$request->blous_length,
                'work_type'   =>$request->work_type,
                'stich_type'         =>$request->stich_type,
                'product_type'=>$request->product_type,
                'product_work_type'    =>$request->product_work_type,
                'product_method_type'     =>$request->product_method_type,
                'product_img'         =>$request->product_img,
                'product_img_1'=>$request->product_img_1,
                'product_img_2'  =>$request->product_img_2,
                'product_img_3'    =>$request->product_img_3,
                'product_details_1'   =>$request->product_details_1,
                'product_details_2'  =>$request->product_details_2,
                'product_details_3'   =>$request->product_details_3,
                'product_details_4'  =>$request->product_details_4,
                'product_details_5'  =>$request->product_details_5,
                'munthi_color'   =>$request->munthi_color,
                'body_color'  =>$request->body_color
            ]);
            return redirect('/dashboard')
            ->withSuccess('Item updated');

        }
        else{
            return ('error');
        }


    }


    public function delete($id){
        $deletedata=Product::where($id);
        $deletedata->delete();
        return redirect('/dashboard')
        ->withSuccess('Item updated');

        $user=User::find(1);
$user->delete(); //returns true/false
    }
}
