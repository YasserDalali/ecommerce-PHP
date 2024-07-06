<?php
require "model/product.model.php";
require "model/user.model.php";


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

        } else {
            $title = "Products";
            $th = getProductsTableInfo();
            $td = getAllProducts();
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
        <a href='' class='btn-danger btn'><i class='fas fa-trash-can me-1'></i>Remove</a>
        <a href='' class='btn-success btn'><i class='fas fa-pen-to-square me-1'></i>Modify</a>
        <a href='' class='btn-primary btn'><i class='fas fa-eye me-1'></i>View</a>
        </td>";

        echo "</tr>";
    }
    echo "</tbody>";
}
