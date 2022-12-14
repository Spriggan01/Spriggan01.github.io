<?php
function debug(array $data) {
    echo '<pre>' . print_r($data, 1) . '</pre>';
}

function get_phones() {
    global $connect;
    $res = $connect->query("SELECT * FROM `phones`");
    return $res->fetch_all();
}

function get_phone(int $id) {
    global $connect;
    $stmt = $connect->prepare("SELECT * FROM phones WHERE id = ?");
    $stmt->bind_param('i', $id);
    $stmt->execute();
    $result = $stmt->get_result();

    while($row = $result->fetch_assoc()) {
        $phoneArr = [
            "id" => $row['id'],
            "name" => $row['name'],
            "price" => $row['price'],
            "camera" => $row['camera'],
            "diagonal" => $row['diagonal'],
            "image" => $row['image'],
            "memory" => $row['memory'],
            "manufacturer_id" => $row['manufacturer_id'],
        ];
        return $phoneArr;
    }
}

function get_new_phone(int $id) {
    global $connect;
    $stm = $connect->prepare("SELECT * FROM new_phones WHERE id = ?");
    $stm->bind_param('i', $id);
    $stm->execute();
    $result = $stm->get_result();

    while($row = $result->fetch_assoc()) {
        $newPhoneArr = [
            "id" => $row['id'],
            "name" => $row['name'],
            "price" => $row['price'],
            "camera" => $row['camera'],
            "image" => $row['image'],
        ];
        return $newPhoneArr;
    }
}

function add_to_cart($phone) {
    if (isset($_SESSION['cart'][$phone['id']])) {
        $_SESSION['cart'][$phone['id']]['qty'] += 1;
    } else {
        $_SESSION['cart'][$phone['id']] = [
            'id' => $phone['id'],
            'name' => $phone['name'],
            'price' => $phone['price'],
            'camera' => $phone['camera'],
            'image' => $phone['image'],
            'qty' => 1,
        ];
    }

    $_SESSION['cart.qty'] = !empty($_SESSION['cart.qty']) ? ++$_SESSION['cart.qty'] : 1;
    $_SESSION['cart.sum'] = !empty($_SESSION['cart.sum']) ? $_SESSION['cart.sum'] + $phone['price'] : $phone['price'];
}

function show_details($phoneDetails) {
    if (!isset($_SESSION['details'][$phoneDetails['id']])) {
        $_SESSION['details'][$phoneDetails['id']] = [
            'id' => $phoneDetails['id'],
            'name' => $phoneDetails['name'],
            'price' => $phoneDetails['price'],
            'camera' => $phoneDetails['camera'],
            "diagonal" => $phoneDetails['diagonal'],
            'image' => $phoneDetails['image'],
            "memory" => $phoneDetails['memory'],
            "manufacturer_id" => $phoneDetails['manufacturer_id'],
        ];
    }
}

$dataArr = [
    'fullName' => '',
    'email' => '',
    'phone_id' => '',
    'price' => '',
];

if(!empty($_POST)) {
    require_once 'connect.php';
}

function load($dataArr) {

}
?>