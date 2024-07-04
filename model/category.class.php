<?php 
require_once "database.php";
function getAllCategories($pdo)  {
    return $pdo->query("SELECT * FROM category")->fetchAll(PDO::FETCH_ASSOC);
};
// Retrieve all categories from the database.

function getCategoryById($pdo, $id) {
    return $pdo->query("SELECT * FROM category WHERE id={$id}")->fetchAll(PDO::FETCH_ASSOC);
};

//: Retrieve a category by its ID.

function createCategory($pdo, $name, $description) {};
    $stmt = $pdo->prepare("INSERT INTO category (name, description) VALUES (?,?)");
    return $stmt->execute([$name, $description]);
//: Create a new category.

function updateCategory($pdo, $id, $name, $description) {
    $rId = getCategoryById($pdo, $id)['id'];
    if ($rId) {
        $stmt = $pdo->prepare("UPDATE category SET name = ?, description = ? WHERE id = ?");
        return $stmt->execute([$name, $description, $id]);
    }
}; 

//: Update an existing category.
function deleteCategory($pdo, $id) {
    $rId = getCategoryById($pdo, $id)['id'];
    if ($rId) {
        $stmt = $pdo->prepare("DELETE FROM TABLE category WHERE id= ?");
        return $stmt->execute([$id]);

    }
};//: Delete a category by its ID.