<?php

namespace App\Controllers;

use App\Helpers\Helper;
use App\Libraries\View;
use App\Models\ProductModel;

class ProductController extends Controller
{

     /**
     * Show's a list of products
     */
    public function index()
    {
        $products = ProductModel::load()->all();


        return View::render('products/index.view', [
            'products'  => $products,

        ]);

       
    }

    public function create()
    {
        return View::render('products/create.view', [
            'method'    => 'POST',
            'action'    => '/product/store',
            
        ]);
    }

    public function store()
    {
        $product = $_POST;

        $product['product_id'] = Helper::getUserIdFromSession();
        $product['created_by'] = date('Y-m-d H:i:s');
        $product['created_at'] = Helper::getUserIdFromSession();

        ProductModel::load()->store($product);

       
    }

    public function edit()
    {
        $productId = Helper::getIdFromUrl('products');

        $product = ProductModel::load()->get((int)$productId);
      
        return View::render('products/edit.view', [
            'method'    => 'POST',           
            'action'    => '/products/' . $productId . '/update',
            'product' => $product,

        ]);
    }

    public function update()
    {
        $productId = Helper::getIdFromUrl('products');
        
        // Save post data in $product var
        $product = $_POST;

        // Create a password, set created_by ID and set the date of creation
        $product['updated_by'] = Helper::getUserIdFromSession();
        $product['updated_at'] = date('Y-m-d H:i:s');

        ProductModel::load()->update($product, (int)$productId);  
    }

    public function show()
    {
        $productId = Helper::getIdFromUrl('products');
        
        $product = ProductModel::load()->get((int)$productId);
        
        return View::render('products/show.view', [
            'id'            =>  $productId, 
            'name'          =>  $product -> name, 
            'image'         =>  '/public/images/webshop/' . $product -> image , 
            'description'   =>  $product -> description, 
            'price'         =>  $product -> price, 
            'stock'         =>  $product -> stock, 
        ]);
    }
}