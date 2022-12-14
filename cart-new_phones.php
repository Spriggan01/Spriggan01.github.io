<?php
error_reporting(-1);
require_once 'inc/connect.php';
require_once 'inc/functions.php';
session_start();

if (isset($_GET['cart'])) {
    switch ($_GET['cart']) {
        case 'add':
            $id = isset($_GET['id']) ? (int) $_GET['id'] : 0;
            $phone = get_new_phone($id);
            if (!$phone) {
                echo json_encode(['code' => 'Error', 'answer' => 'Error phone']);
            } else {
                add_to_cart($phone);
                ob_start();
                require __DIR__ . '/cart-modal.php';
                $cart = ob_get_clean();
                echo json_encode(['code' => 'ok', 'answer' => $cart]);
            }
            
            break;

        case 'show':
            require __DIR__ . '/cart-modal.php';
            break;
        
        case 'clear':
            if (!empty($_SESSION['cart'])) {
                unset($_SESSION['cart']);
                unset($_SESSION['cart.qty']);
                unset($_SESSION['cart.sum']);
            }
            require __DIR__ . '/cart-modal.php';
            break;
    }
}
?>