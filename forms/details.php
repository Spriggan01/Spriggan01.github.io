<?php
error_reporting(-1);
require_once '../inc/connect.php';
require_once '../inc/functions.php';
session_start();

if (isset($_GET['details'])) {
    switch ($_GET['details']) {
        case 'add':
            $id = isset($_GET['id']) ? (int) $_GET['id'] : 0;
            $phoneDetails = get_phone($id);
            if (!$phoneDetails) {
                echo json_encode(['code' => 'Error', 'answer' => 'Error phone']);
            } else {
                show_details($phoneDetails);
                ob_start();
                require __DIR__ . '/details-modal.php';
                $details = ob_get_clean();
                echo json_encode(['code' => 'ok', 'answer' => $details]);
            }
            
            break;
        case 'show':
            require __DIR__ . '/details-modal.php';
            break;
    }
}
?>