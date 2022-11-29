<?php
session_start();
include '../Model/db.php';
include '../Model/pdo.php';
include_once "../Model/sanpham.php";
if (isset($_GET['add_cart']) && isset($_GET['id'])) {
  $id = $_GET['id'];
  $data = loadone_sanpham($id); 
  if (isset($_SESSION['cart'])) {
    if (isset($_SESSION['cart'][$id]['sl'])) {
      $_SESSION['cart'][$id]['sl'] += 1;
    } else {
      $_SESSION['cart'][$id]['sl'] = 1;
    }
    $_SESSION['cart'][$id]['id'] = $id;
    $_SESSION['cart'][$id]['name_product'] = $data['name'];
    $_SESSION['cart'][$id]['image'] = $data['img'];
    $_SESSION['cart'][$id]['price'] = $data['price'];
    $_SESSION['cart'][$id]['sale'] = $data['sale'];
  } else {
    $_SESSION['cart'][$id]['sl'] = 1;
    $_SESSION['cart'][$id]['id'] = $id;
    $_SESSION['cart'][$id]['name_product'] = $data['name'];
    $_SESSION['cart'][$id]['image'] = $data['img'];
    $_SESSION['cart'][$id]['price'] = $data['price'];
    $_SESSION['cart'][$id]['sale'] = $data['sale'];
  }

  header("location: http://localhost/DA1/View/cart.php?id=9");
}


?>