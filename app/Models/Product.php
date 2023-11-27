<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'yarn_purchase_return';
    protected $fillable = ['product_name','product_content','old_rate','new_rate','color','material','saree_length','blous_length','work_type','stich_type','product_type','product_work_type',
    'product_method_type','product_img','product_img_1','product_img_2','product_img_3','product_details_1','product_details_2','product_details_3','product_details_4','product_details_5','munthi_color','body_color'];
    //product_name	product_content	old_rate	new_rate	color	material	saree_length	blous_length	work_type	stich_type	product_type	product_work_type
    	// product_method_type	product_img	product_img_1	product_img_2	product_img_3	product_details_1	product_details_2	product_details_3	product_details_4	product_details_5	munthi_color	body_color
}
