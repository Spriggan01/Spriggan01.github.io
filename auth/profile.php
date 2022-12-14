<?php
    require_once '../inc/connect.php';
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" type="text/css" href="../style/profile-style.css">
    <link rel="stylesheet" href="../style/bootstrap.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.css">
    <!--<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="../script/cart-script.js"></script>
    <script src="../script/script.js"></script>
    <title>MyProfile</title>
    <link rel="shortcut icon" href="../style/images/logo/footer-logo.svg" type="image/x-icon">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light">
            <!-- Logo -->
            <a class="navbar-brand ml-5 pr-5 mr-5" href="#"><img src="../style/images/logo/logo-txt.svg" alt="logo"></a>
            <!-- NavbarSupportedContent -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse mt-1 text-center" id="navbarSupportedContent">
            <ul class="navbar-nav mr-5">
                <li class="nav-item">
                    <a class="nav-link mr-3" href="../index.php">Головна</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mr-3" href="../forms/phones.php">Телефони</a>
                </li>
                <li class="nav-item mr-3">
                    <a class="nav-link" href="../forms/orderAndDelivery.php">Замовлення та доставка</a>
                </li>
                <li class="nav-item mr-3">
                    <a class="nav-link" href="../forms/aboutUs.php">Про нас</a>
                </li>
            </ul>
            <!-- NavBarItems -->
            <ul class="navbar-nav ms-auto mt-1">
                <!-- SearchBox -->
                <li class="nav-item mr-2">
                    <div id="wrap" class="mt-1">
                        <form action="" autocomplete="on" class="search-form">
                            <input id="search" name="search" type="text" placeholder="What're we looking for ?"><input id="search_submit" value="Rechercher" type="submit">
                        </form>
                    </div>                       
                </li>
                <!-- Sliders -->
                <li class="nav-item">
                    <div class="btn-group">
                        <button type="button" class="btn btn-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img src="../style/images/navbar-items/sliders.svg" alt="sliders">
                        </button>
                        <div class="sliders-menu dropdown-menu dropdown-menu-right mx-auto pl-4">
                            <div class="row">
                                <!-- Price -->
                                <div class="col-md-6 col-lg-6 col-sm-12">
                                    <p>Вартість</p>
                                    Від <input type="number" class="w-25"> до <input type="number" class="w-25">
                                </div>
                                <!-- Memory -->
                                <div class="col-md-6 col-lg-6 col-sm-12">
                                    <p>Пам'ять</p>
                                    <div class="items-mem">
                                        <label>
                                            <input type="checkbox" id="32GB" name="32GB" checked>
                                            <span>32Гб</span>
                                        </label>
                                        <label>
                                            <input type="checkbox" id="64GB" name="64GB">
                                            <span>64Гб</span>
                                        </label>
                                        <label>
                                            <input type="checkbox" id="128GB" name="128GB">
                                            <span>128Гб</span>
                                        </label>
                                        <label>
                                            <input type="checkbox" id="256GB" name="256GB">
                                            <span>256Гб</span>
                                        </label>
                                        <label>
                                            <input type="checkbox" id="512GB" name="512GB">
                                            <span>512Гб</span>
                                        </label>
                                        <label>
                                            <input type="checkbox" id="1TB" name="1TB">
                                            <span>1TB</span>
                                        </label>
                                    </div>
                                </div>
                                <!-- Diagonal -->
                                <div class="col-md-6 col-lg-6 col-sm-12">
                                    <p>Діагональ дисплея</p>
                                    <div class="items-diagonal">
                                        <label>
                                            <input type="checkbox" id="5.45" name="5.45" checked>
                                            <span>5.45</span>
                                        </label>
                                        <label>
                                            <input type="checkbox" id="5.5" name="5.5">
                                            <span>5.5</span>
                                        </label>
                                        <label>
                                            <input type="checkbox" id="5.9" name="5.9">
                                            <span>5.9</span>
                                        </label>
                                        <label>
                                            <input type="checkbox" id="6.0" name="6.0">
                                            <span>6.0</span>
                                        </label>
                                        <label>
                                            <input type="checkbox" id="6.39" name="6.39">
                                            <span>6.39</span>
                                        </label>
                                        <label>
                                            <input type="checkbox" id="6.43" name="6.43">
                                            <span>6.43</span>
                                        </label>
                                        <label>
                                            <input type="checkbox" id="6.47" name="6.47">
                                            <span>6.47</span>
                                        </label>
                                        <label>
                                            <input type="checkbox" id="6.5" name="6.5">
                                            <span>6.5</span>
                                        </label>
                                        <label>
                                            <input type="checkbox" id="7.0" name="7.0">
                                            <span>7.0</span>
                                        </label>
                                    </div>
                                </div>
                                <!-- Camera -->
                                <div class="col-md-6 col-lg-6 col-sm-12">
                                    <p>Основна камера</p>
                                    <div class="items-camera">
                                        <label>
                                            <input type="checkbox" id="13" name="13" checked>
                                            <span>13мп</span>
                                        </label>
                                        <label>
                                            <input type="checkbox" id="13+2" name="13+2">
                                            <span>13мп + 2мп</span>
                                        </label>
                                        <label>
                                            <input type="checkbox" id="16+5" name="16+5">
                                            <span>16мп + 5мп</span>
                                        </label>
                                        <label>
                                            <input type="checkbox" id="16+8+2" name="16+8+2">
                                            <span>16мп + 8мп + 2мп</span>
                                        </label>
                                        <label>
                                            <input type="checkbox" id="40+16+2" name="40+16+2">
                                            <span>40мп + 16мп + 2мп</span>
                                        </label>
                                        <label>
                                            <input type="checkbox" id="40+20+2" name="40+20+2">
                                            <span>40мп + 20мп + 2мп</span>
                                        </label>
                                    </div>
                                </div>
                                <!-- Manufacturer -->
                                <div class="col-md-6 col-lg-6 col-sm-12">
                                    <p>Виробник</p>
                                    <div class="items-manufacturer">
                                        <label>
                                            <input type="checkbox" id="Apple" name="Apple" checked>
                                            <span>Apple</span>
                                        </label>
                                        <label>
                                            <input type="checkbox" id="Samsung" name="Samsung">
                                            <span>Samsung</span>
                                        </label>
                                        <label>
                                            <input type="checkbox" id="Huawei" name="Huawei">
                                            <span>Huawei</span>
                                        </label>
                                        <label>
                                            <input type="checkbox" id="Xiaomi" name="Xiaomi">
                                            <span>Xiaomi</span>
                                        </label>
                                    </div>
                                </div>
                                <!-- ColorForPhones -->
                                <div class="col-md-12 col-lg-12 col-sm-24">
                                    <p>Колір</p>
                                    <div class="color-block">
                                        <div id="bl1"><input type="checkbox" style="width:32px; height:32px; accent-color: #FFFFFF; border:none"></div>
                                        <div id="bl2"><input type="checkbox" style="width:32px; height:32px; accent-color: #696969; border:none"></div>
                                        <div id="bl3"><input type="checkbox" style="width:32px; height:32px; accent-color: #000; border:none"></div>
                                        <div id="bl4"><input type="checkbox" style="width:32px; height:32px; accent-color: #8B0000; border:none"></div>
                                        <div id="bl5"><input type="checkbox" style="width:32px; height:32px; accent-color: #FF4500; border:none"></div>
                                        <div id="bl6"><input type="checkbox" style="width:32px; height:32px; accent-color: #FFD700; border:none"></div>
                                        <div id="bl7"><input type="checkbox" style="width:32px; height:32px; accent-color: #008000; border:none"></div>
                                        <div id="bl8"><input type="checkbox" style="width:32px; height:32px; accent-color: #00008B; border:none"></div>
                                        <div id="bl9"><input type="checkbox" style="width:32px; height:32px; accent-color: #4B0082; border:none"></div>
                                    </div>
                                </div>
                            </div>
                            <button class="dropdown-item" type="button">Обрати</button>
                        </div>
                    </div>
                </li>
                <!-- Busket -->
                <li class="nav-item">
                    <button type="button" class="btn" id="get-cart" data-toggle="modal" data-target="#cart-modal">
                        <img src="../style/images/navbar-items/shopping-cart.svg" alt="busket"><span class = "badge badge-light mini-cart-qty" style="border-radius: 20px; border: 1px solid black;"><?= $_SESSION['cart.qty'] ?? 0 ?></span>
                    </button>
                </li>
                <!-- Modal -->
                <div class="modal fade cart-modal" id="cart-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-xl">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Кошик</h5> 
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">x</span>    
                                </button>
                            </div>
                               
                            <div class="modal-cart-content">
                                
                            </div>
                        </div>
                    </div>
                </div>
                <!-- User -->
                <li class="nav-item ml-1">
                    <div class="btn-group">
                        <button type="button" class="btn btn-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img src="../style/images/navbar-items/user.svg" alt="user">
                        </button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <button class="popup1 dropdown-item w-100" type="button"><?php echo $_SESSION['user']['login']; ?></button>
                            <div class="dropdown-divider"></div>
                            <!-- LogOut -->
                            <a class="popup1 dropdown-item w-100" href="logout.php">Вихід</a>
                        </div>
                    </div>
                </li>
                <!-- UA -->
                <li class="nav-item">
                    <select class="mt-2 mr-2 border-0">
                        <option value="UA">UA</option>
                    </select>
                </li>
                <!-- Toggle -->
                <li class="nav-item">
                    <a class="nav-link" href="#"><img src="../style/images/navbar-items/toggle-left.svg" alt="toggle"></a>
                </li>
            </ul>
            </div>
        </nav>
    </header>
    <!-- Main -->
    <div class="main-style m-5">
        <!-- Profile login-photo -->
        <h1>Перегляд профілю</h1>
        <div class="profile-bg">
            <img src="../style/images/profile/user-photo.jpg" alt="usr_photo" class="user_photo ml-4 mt-4 mr-2">
            <?php echo $_SESSION['user']['login']; ?>
        </div>
        <div class="mt-2 mb-5">
            <!-- EditProfile -->
            <a class="edit_profile-item float-right" href="javascript:void(0);" tabindex="1">Редагувати</a> 
            <ul class="sub-edit_menu pt-4 pl-4">
                <p class="txt">Редагування профілю</p>
                <p>Ваш E-Mail:<input type="email" value="<?= $_SESSION['user']['email']; ?>" name="email" class="ml-5 w-75"></p>
                <p>Старий пароль:<input type="password" name="pswd" class="ml-5"></p>
                <p>Новий пароль:<input type="password" name="paswd" class="ml-5"></p>
                <p>Підтвердження нового паролю:<input type="password" name="paswd" class="ml-5"></p>
                <p>Аватар:<button class="ml-5">Оберіть файл</button></p>
                <button>Зберегти</button>
            </ul>
        </div>
        <br>
        <!-- ProfileData -->
        <div class="tabs_style w3-bar">
            <button class="w3-bar-item w3-button tabs_btn" onclick="openTab('Дані')">Дані</button>
            <button class="w3-bar-item w3-button tabs_btn" onclick="openTab('Кошик')">Кошик</button>
        </div>

        <div id="Дані" class="w3-container tab">
            <p><b>Логін:</b> <?= $_SESSION['user']['login']; echo "<br>"; ?>
            <b>Дата народження:</b> <?= $_SESSION['user']['dob']; echo "<br>"; ?>
            <b>Країна:</b> <?= $_SESSION['user']['placeOfBirth']; echo "<br>"; ?>
            <b>Дата реєсрації:</b> <?= $_SESSION['user']['reg_date']; ?></p>
        </div>

        <div id="Кошик" class="w3-container tab" style="display:none">
            <?php if (!empty($_SESSION['cart'])): ?>
                <div class = "modal-body">
                    <?php if (!empty($_SESSION['cart'])): ?>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Зображення</th>
                                    <th scope="col">Назва</th>
                                    <th scope="col">Ціна</th>
                                    <th scope="col">Кількість</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($_SESSION['cart'] as $id => $item): ?>
                                    <tr style="height:100px; line-height:100px;">
                                        <td><img src="<?= $item['image'] ?>" style="width: 60px; height: 100px;" class="pt-4"></td>
                                        <td><p class="pt-2" style="font-family: Poppins; font-size: 20px;"><?= $item['name'] ?></p></td>
                                        <td><p class="pt-2" style="font-family: Poppins; font-size: 20px;"><?= $item['price'] ?><b> ₴</b></p></td>
                                        <td style="font-family: Poppins; font-size: 20px;"><?= $item['qty'] ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                            <tr>
                                <td colspan = "2" align="left" style="font-family: Poppins; font-size: 20px;" class="pt-5"><b>Кількість товарів: </b><span id="modal-cart-qty"><?= $_SESSION['cart.qty'] ?></span></td>
                                <td colspan = "2" align="left" style="font-family: Poppins; font-size: 20px;" class="pt-5"><b>Сума: </b><?= $_SESSION['cart.sum'] ?> <b> ₴</b></td>
                            </tr>
                        </table>
                    <?php else: ?>               
                        <p>Кошик порожній</p>
                    <?php endif; ?>
                </div>
                <div class = "modal-footer">
                    <?php if (!empty($_SESSION['cart'])): ?>
                        <button type="button" class="btn btn-success">Зробити замовлення</button>
                        <button type="button" class="btn btn-danger" id="clear-cart">Очистити кошик<?php
                            unset($_SESSION['cart']);
                            unset($_SESSION['cart.qty']);
                            unset($_SESSION['cart.sum']); ?>
                        </button>
                    <?php endif; ?>
                </div>
            <?php else: ?>
                <p>Кошик порожній</p>
            <?php endif; ?>
        </div>

        <script>
            function openTab(tabName) {
                var i;
                var x = document.getElementsByClassName("tab");
                for (i = 0; i < x.length; i++) {
                    x[i].style.display = "none";
                }
                document.getElementById(tabName).style.display = "block";  
            }
        </script>
    </div>

    <!-- Footer -->
    <footer class="pt-5 pb-5 mt-5">
        <div class="container-fluid">
            <div class="row text-center">
                <!-- Logo -->
                <div class="col-md-2 col-lg-2 col-sm-6">
                    <img src="../style/images/logo/footer-logo.svg" alt="smth" class="footer-logo pt-4">
                </div>
                <!-- Content -->
                <div class="col-md-4 col-lg-4 col-sm-8">
                    <a class="footer-txt nav-link" href="../index.php">Головна <span class="sr-only">(current)</span></a>
                    <a class="footer-txt nav-link" href="../forms/phones.html">Телефони</a>
                    <a class="footer-txt nav-link" href="../forms/orderAndDelivery.html">Замовлення та доставка</a>
                    <a class="footer-txt nav-link" href="../forms/aboutUs.html">Про нас</a>
                </div>
                <div class="col-md-6 col-lg-6 col-sm-12">
                    <p class="footer-txt">Зв'яжіться з нами</p>
                    <p class="mt-2 footer-txt">Гаряча лінія</p>
                    <p class="mt-2 footer-txt">+38(050)111-11-11 Щодня з 6:00 до 22:00</p>
                    <p class="mt-2 footer-txt">chamomileshop@gmail.com</p>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>