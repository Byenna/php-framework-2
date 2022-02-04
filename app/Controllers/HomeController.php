<?php

namespace App\Controllers;

use App\Libraries\MySql;
use App\Libraries\Request;
use App\Libraries\View;
use Exception;
use PDO;
use App\Models\ProductModel;

class HomeController
{

    public function index()
    {
        return View::render('site/home.view');
    }

    public function products()
    {
        if (Request::ajax()) {
            try {
                $product = new ProductModel;
                $products = $product->all();

                $success = true;
                $message = "Success";
            } catch (Exception $e) {
                $products = null;
                $success = false;
                $message = $e->getMessage();
            }

            echo json_encode([
                'success'   => $success,
                'message'   => $message,
                'products'  => $products,
            ]);
        }
    }

    public function about()
    {
        return View::render('about/about.view');
    }

    public function home_text()
    {
        return View::render('home_text/home_text.view');
    }
}

