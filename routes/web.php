<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::any('/',  function()
    {    
    	$pagetype="index";
    	return view('frontend.index')->with(['pagetype'=>$pagetype]) ;
    });

Route::any('/index', function()
    {    
    	$pagetype="index";
    	return view('frontend.index')->with(['pagetype'=>$pagetype]) ;
    });

Route::any('/login',  function()
    {
		$pagetype="login";
    	return view('frontend.login')->with(['pagetype'=>$pagetype]);
    });

Route::any('/product-details',  function()
    {
    	$pagetype="product-details";
    	return view('frontend.product-details')->with(['pagetype'=>$pagetype]);
    });

Route::any('/customer-account',  function()
    {
        $pagetype="customer-account";
        return view('frontend.customer_account')->with(['pagetype'=>$pagetype]);
    });

Route::any('/customer-order',  function()
    {
        $pagetype="customer-order";
        return view('frontend.customer_order')->with(['pagetype'=>$pagetype]);
    });

Route::any('/customer-orders',  function()
    {
        $pagetype="customer-orders";
        return view('frontend.customer_orders')->with(['pagetype'=>$pagetype]);
    });

Route::any('/customer-wishlist',  function()
    {
        $pagetype="customer-wishlist";
        return view('frontend.customer_wishlist')->with(['pagetype'=>$pagetype]);
    });


Route::any('/shop', function()
    {
		$pagetype="shop";
    	return view('frontend.shop')->with(['pagetype'=>$pagetype]);
    });

Route::any('/signup', function()
    {
		$pagetype="signup";
    	return view('frontend.signup')->with(['pagetype'=>$pagetype]);
    });

Route::any('/username', function()
    {
		$pagetype="username";
    	return view('frontend.username')->with(['pagetype'=>$pagetype]);
    });

Route::any('/error', function()
    {
    	$pagetype="error";
    	return view('frontend.error')->with(['pagetype'=>$pagetype]);
    });

Route::any('/cart', function()
    {
		$pagetype="cart";
    	return view('frontend.cart')->with(['pagetype'=>$pagetype]);
    });

Route::any('/checkout',  function()
    {
    	$pagetype="checkout";
    	return view('frontend.checkout')->with(['pagetype'=>$pagetype]);
    });

Route::any('/contact-us', function()
    {
    	$pagetype="contact-us";
    	return view('frontend.contact-us')->with(['pagetype'=>$pagetype]);
    });

Route::any('/reset1', function()
    {
		$pagetype="reset1";
    	return view('frontend.reset1')->with(['pagetype'=>$pagetype]);
    });

Route::any('/reset2', function()
    {
		$pagetype="reset2";
    	return view('frontend.reset2')->with(['pagetype'=>$pagetype]);
    });

Route::any('/dash', function()
    {
        $pagetype="dash";
        return view('backend.Dashboard')->with(['pagetype'=>$pagetype]);
    });

Route::any('/banners', function()
    {
        $pagetype="banners";
        return view('backend.banners')->with(['pagetype'=>$pagetype]);
    });

Route::any('/category_add', function()
    {
        $pagetype="category_add";
        return view('backend.category_add')->with(['pagetype'=>$pagetype]);
    });

Route::any('/category_attribute', function()
    {
        $pagetype="category_attribute";
        return view('backend.category_attribute')->with(['pagetype'=>$pagetype]);
    });

Route::any('/category_edit', function()
    {
        $pagetype="category_edit";
        return view('backend.category_edit')->with(['pagetype'=>$pagetype]);
    });

Route::any('/category_main', function()
    {
        $pagetype="category_main";
        return view('backend.category_main')->with(['pagetype'=>$pagetype]);
    });

Route::any('/orders', function()
    {
        $pagetype="orders";
        return view('backend.orders')->with(['pagetype'=>$pagetype]);
    });

Route::any('/product_add', function()
    {
        $pagetype="product_add";
        return view('backend.product_add')->with(['pagetype'=>$pagetype]);
    });

Route::any('/product_edit', function()
    {
        $pagetype="product_edit";
        return view('backend.product_edit')->with(['pagetype'=>$pagetype]);
    });

Route::any('/product_list', function()
    {
        $pagetype="product_list";
        return view('backend.product_list')->with(['pagetype'=>$pagetype]);
    });

Route::any('/product_main', function()
    {
        $pagetype="product_main";
        return view('backend.product_main')->with(['pagetype'=>$pagetype]);
    });

Route::any('/staticpage', function()
    {
        $pagetype="staticpage";
        return view('backend.staticpage')->with(['pagetype'=>$pagetype]);
    });


