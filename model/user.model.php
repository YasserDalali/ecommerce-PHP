<?php 

require_once 'database.model.php';

function getTableInfo() {
    global $pdo;
    $stmt = $pdo->prepare("SHOW COLUMNS FROM util ");
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getUsers() {
    global $pdo;
    $stmt = $pdo->prepare("SELECT * FROM util");
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getUserById($id) {
    global $pdo;
    $stmt = $pdo->prepare("SELECT * FROM util WHERE id = ?");
    $stmt->execute([$id]);
    return $stmt->fetch(PDO::FETCH_ASSOC);
}

function getUserByUsername($username) {
    global $pdo;
    $stmt = $pdo->prepare("SELECT * FROM util WHERE username = ?");
    $stmt->execute([$username]);
    return $stmt->fetch(PDO::FETCH_ASSOC);
}

function createUser($username, $password) {
    global $pdo;
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    $stmt = $pdo->prepare("INSERT INTO util (username, password) VALUES (?, ?)");
    return $stmt->execute([$username, $hashedPassword]);
}

function updateUser($id, $username, $password) {
    global $pdo;
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    $stmt = $pdo->prepare("UPDATE util SET password = ?, username = ? WHERE id = ?");
    return $stmt->execute([$username, $hashedPassword, $id]);
}

function deleteUser($id) {
    global $pdo;
    $stmt = $pdo->prepare("DELETE FROM util WHERE id = ?");
    return $stmt->execute([$id]);
}

function loginUser($email, $password) {
    global $pdo;
    $stmt = $pdo->prepare("SELECT * FROM util WHERE username = ? AND password = ?");
    $stmt->execute([$email, $password]);
    return $stmt->fetch(PDO::FETCH_ASSOC);
}
