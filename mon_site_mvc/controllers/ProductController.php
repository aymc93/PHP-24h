<?php
// controllers/ProductController.php

require_once 'models/Product.php';

class ProductController {

    protected function render($view, $params = []) {
        extract($params);
        require 'views/layout.php';
    }

    public function list() {
        $products = Product::getAll();
        $this->render('product_list', ['products' => $products]);
    }

    public function detail($id) {
        $product = Product::getById($id);
        if (!$product) {
            echo "Produit non trouvé";
            exit;
        }
        $this->render('product_detail', ['product' => $product]);
    }
}
