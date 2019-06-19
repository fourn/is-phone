<?php
namespace Fourn\IsPhone;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Validator;

class IsPhoneServiceProvider extends ServiceProvider
{
	public function boot()
	{
		Validator::extend('phone', function ($attribute, $value, $parameters, $validator) {
        	return $validator->validateRegex($attribute, $value, ['/^((13[0-9])|(14[5,7])|(15[0-3,5-9])|(17[0,3,5-8])|(18[0-9])|166|198|199|(147))\d{8}$/']);
    	});
	}
}