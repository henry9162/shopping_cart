<?php

namespace Cart\Models;

use Illuminate\Database\Eloquent\Model;

use Cart\Models\Address;

use Cart\Models\Product;

use Cart\Models\Payment;

use Cart\Models\Customer;


class Order extends Model
{
	 

	 protected $fillable = [

	 	'hash',

	 	'total',

	 	'paid',

	 	'address_id'

	 ];


	 public function address()
	 {

	 	return $this->belongsTo(Address::class);
	 }


	 public function products()
	 {

	 	return $this->belongsToMany(Product::class, 'orders_products')->withPivot('quantity');
	 }


	 public function payment()
	 {

	 	return $this->hasOne(Payment::class);
	 }

	 public function customer()
	 {

	 	return $this->belongsTo(Customer::class);
	 }
}