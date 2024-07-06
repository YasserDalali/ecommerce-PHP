<?php 

require_once 'database.model.php';


function getChartSales() {
    global $pdo;
    // Fetching data from the database
$stmt = $pdo->prepare("
SELECT 
    MONTH(order_date) AS month,
    COUNT(total_amount) AS total_sales 
FROM 
    orders 
GROUP BY 
    MONTH(order_date)
ORDER BY
    MONTH(order_date)
");
$stmt->execute();
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Initialize an array with 12 months set to zero
$salesData = array_fill(0, 12, 0);

// Fill the salesData array with actual sales data
foreach ($results as $result) {
$month = $result['month'] - 1; // Convert month to zero-based index
$salesData[$month] = (float) $result['total_sales'];
}

return $salesData;
}


function getChartIncome() {
    global $pdo;
    // Fetching data from the database
$stmt = $pdo->prepare("
SELECT 
    MONTH(order_date) AS month,
    SUM(total_amount) AS total_sales 
FROM 
    orders 
GROUP BY 
    MONTH(order_date)
ORDER BY
    MONTH(order_date)
");
$stmt->execute();
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Initialize an array with 12 months set to zero
$salesData = array_fill(0, 12, 0);

// Fill the salesData array with actual sales data
foreach ($results as $result) {
$month = $result['month'] - 1; // Convert month to zero-based index
$salesData[$month] = (float) $result['total_sales'];
}

return $salesData;
}




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