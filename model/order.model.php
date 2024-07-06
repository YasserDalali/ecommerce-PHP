<?php 

require_once 'database.model.php';

function getOrdersTableInfo() {
    global $pdo;
    $stmt = $pdo->prepare("SHOW COLUMNS FROM orders");
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getAllOrders() {
    global $pdo;
    $stmt = $pdo->prepare("SELECT
        o.order_id,
       u.username as client_id,
       p.label as product_id,
       o.quantity,
       o.order_date,
       o.total_amount
FROM orders o
JOIN util u ON o.client_id = u.id
JOIN product p ON o.product_id = p.id;
");
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getTotalMonthlySales() {
    global $pdo;
    $stmt = $pdo->prepare("SELECT COUNT(total_amount) FROM orders WHERE MONTH(order_date) = MONTH(CURDATE())");
$stmt->execute();
return $stmt->fetch();
}

function getTotalMonthlyIncome() {
    global $pdo;
    $stmt = $pdo->prepare("SELECT SUM(total_amount) FROM orders WHERE MONTH(order_date) = MONTH(CURDATE())");
$stmt->execute();
return $stmt->fetch();
}