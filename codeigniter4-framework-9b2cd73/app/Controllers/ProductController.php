<?php

namespace App\Controllers;

class ProductController extends BaseController
{
    public function index()
    {
       //echo 'I am product controller';
       return view('frontend/product');
    }

    public function find ($prod_name){
       // echo 'Product: '.$prod_name;

       $data['name'] = $prod_name;

       $data['prod_list'] = ['nokia','mi','soy'];     
      return view ('frontend/product', $data);
    }
}
