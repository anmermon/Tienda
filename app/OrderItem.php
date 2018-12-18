<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model


{	


	protected $table = 'order_items';


	protected $fillable = ['price', 'quantity', 'order_id', 'product_id'];
	

	public $timestamps = false;
}
