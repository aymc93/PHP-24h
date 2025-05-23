<?php
// models/Product.php

class Product {
    private static $products = [
        1 => ['id' => 1, 'name' => 'Produit 1', 'price' => 10.0, 'description' => 'Description du produit 1'],
        2 => ['id' => 2, 'name' => 'Produit 2', 'price' => 15.5, 'description' => 'Description du produit 2'],
        3 => ['id' => 3, 'name' => 'Produit 3', 'price' => 7.8, 'description' => 'Description du produit 3'],
    ];

    public static function getAll() {
        return array_values(self::$products);
    }

    public static function getById($id) {
        return self::$products[$id] ?? null;
    }
}
