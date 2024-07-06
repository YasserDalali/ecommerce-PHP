<?php
require "model/product.model.php";
require "model/user.model.php";
require "model/order.model.php";


function showDashboard()
{
    if (!isset($_SESSION['id'])) {
        header("Location: index.php?action=login");
        exit();
    } else {
        $id = $_SESSION['id'];


        if (isset($_GET['table']) && $_GET['table'] == 'products') {
            $title = "Products";
            $th = getProductsTableInfo();
            $td = getAllProducts();

            
        } elseif (isset($_GET['table']) && $_GET['table'] == 'customers') {
            $title = "Customers";

            $th = getUsersTableInfo();
            $td = getAllUsers();

        } elseif (isset($_GET['table']) && $_GET['table'] == 'orders') {
            $title = "Orders";

            $th = getOrdersTableInfo();
            $td = getAllOrders();


        } elseif (isset($_GET['table']) && $_GET['table'] == 'charts') {
            $title = "Dashboard";
            $arraySales = getChartSales();
            $arrayIncome = getChartIncome();
            $arrayTraffic = getChartTraffic();
            $Tsales = getTotalMonthlySales();
            $Tincome = getTotalMonthlyIncome();
            $TnewClients = getTotalMonthlyNewClients();

        } else {
            header('location: index.php?action=dashboard&table=charts');

        }



        include "views/dashboard.view.php";
        // Include the layout template
        include "views/layout.view.php";
    }
}

function renderTable($th, $td)
{
    echo "<thead>";
    $fields = [];
    for ($i = 0; $i < count($th); $i++) {

        if ($th[$i]['Field'] != "password") {
            echo "<th>" . strval($th[$i]['Field']) . "</th>";
            array_push($fields, strval($th[$i]['Field']));
        }
    }
    echo "<th>action</th></thead><tbody>";
    foreach ($td as $tdi) {
        echo "<tr>";
        foreach ($fields as $field) {
            echo "<td>" . $tdi[strval($field)] . "</td>";
        }
        echo "<td>
        <a href='' class='text-danger '><i class='fas fa-x me-1'></i></a>
        <a href='' class='text-success'><i class='fas fa-pencil me-1'></i></a>
        <a href='' class='text-primary'><i class='fas fa-eye me-1'></i></a>
        </td>";

        echo "</tr>";
    }
    echo "</tbody>";
}
