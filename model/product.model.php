<?php
require_once "database.model.php"; // Include your database connection file
function getProductsTableInfo() {
    global $pdo;
    $stmt = $pdo->prepare("SHOW COLUMNS FROM product ");
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getAllProducts() {
    global $pdo;
    $stmt = $pdo->query("SELECT * FROM product");
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getProductById($id) {
    global $pdo;
    $stmt = $pdo->prepare("SELECT * FROM product WHERE id = ?");
    $stmt->execute([$id]);
    return $stmt->fetch(PDO::FETCH_ASSOC);
}

function createProduct($name, $price, $category_id) {
    global $pdo;
    $stmt = $pdo->prepare("INSERT INTO product (label, price, category_id) VALUES (?, ?, ?, ?)");
    return $stmt->execute([$name, $price, $category_id]);
}

function updateProduct($id, $name, $price, $category_id) {
    global $pdo;
    $stmt = $pdo->prepare("UPDATE product SET label = ?, price = ?, category_id = ? WHERE id = ?");
    return $stmt->execute([$name, $price, $category_id, $id]);
}

function deleteProduct($id) {
    global $pdo;
    $stmt = $pdo->prepare("DELETE FROM product WHERE id = ?");
    return $stmt->execute([$id]);
}

