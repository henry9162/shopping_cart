<?php

namespace Cart\Models;

use Illuminate\Database\Eloquent\Model;

use Cart\Models\Customer;



class Payment extends Model
{
	 

	 protected $fillable = [

	 	'failed',

	 	'transaction_id',

	 ];


	 // Not neccesary, just reasonable to include it for future integration

	 
	 public function customer()
	 {

	 	return $this->belongsTo(Customer::class);
	 }
	 
}