<?php
namespace Fourn\IsPhone;

class IsPhoneServiceProvider extends Illuminate\Support\ServiceProvider
{
	public function register()
	{
		\Validator::extend('mobile', function ($attribute, $value, $parameters, Validator $validator) {
        	return $validator->validateRegex($attribute, $value, ['/^((13[0-9])|(14[5,7])|(15[0-3,5-9])|(17[0,3,5-8])|(18[0-9])|166|198|199|(147))\d{8}$/']);
    	});
	}
}