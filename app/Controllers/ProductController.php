<?php

namespace App\Controllers;

use App\Helpers\Helper;
use App\Libraries\View;
use App\Models\ProductModel;

class ProductController extends Controller
{
    public function index()
    {
        $products = ProductModel::load()->all();

        return View::render('products/index.view', [
            'products'  => $products,
        ]);
    }

    public function create()
    {
        
    }

    public function store()
    {
        $education = $_POST;

        $education['user_id'] = Helper::getUserIdFromSession();
        $education['created'] = date('Y-m-d H:i:s');
        $education['created_by'] = Helper::getUserIdFromSession();

        ProductModel::load()->store($education);
    }

    public function edit()
    {
        $productId = Helper::getIdFromUrl('product');

        $product = ProductModel::load()->get((int)$productId);
        
        return View::render('products/edit.view', [
            'education' => $product,
            'action'    => 'product/' . $productId . '/update',
        ]);
    }

    public function update()
    {
         
    }

    public function show()
    {
        $productId = Helper::getIdFromUrl('products');
        
        $product = ProductModel::load()->get($productId);
        
        return View::render('products/show.view', [
            'name'   =>  $product -> name, 
            'description'   =>  $product -> description, 
            'price'   =>  $product -> price, 
            'stock'   =>  $product -> stock, 
        ]);
    }
}