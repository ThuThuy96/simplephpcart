<?php
session_start();
require_once ('database.php');
$database = new Database();

if (isset($_POST)&& !empty($_POST)){
    /*echo "<pre>";
    print_r($_POST);
    echo "</pre>";*/
    if (isset($_POST['action'])){
        switch ($_POST['action']){
            case 'add':
                if (isset($_POST['quantity'])&& isset($_POST['product_id'])) {
                    $sql="SELECT * FROM products where id=". (int)$_POST["product_id"];
                    $product = $database->runQuery($sql);

                    echo "<br>$product";
                    echo "<pre>";
                    print_r($product);
                    echo "</pre>";
                }
                break;
            default:
                echo "Action không tồn tại";
                die;
        }
    }
}
echo "<br>$_POST";
echo "<pre>";
print_r($_POST);
echo "</pre>";

echo "<br>$_SESSION";
 echo "<pre>";
 print_r($_SESSION);
 echo "</pre>";
            die;
