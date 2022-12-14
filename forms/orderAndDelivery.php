<?php
    require_once '../inc/connect.php';
    session_start();
?>
<?php
    $countrieS = ["Австралія","Австрія","Азейбарджан","Албанія","Алжир","Ангола","Андорра","Антигуа і Барбуда","Аргентина",
"Афганістан","Багамські О-ви","Бангладеш","Барбадос","Бахрейн","Беліз","Бельгія","Бенін","Білорусь","Болгарія","Болівія",
"Боснія і Герцеговина","Ботсвана","Бразилія","Бруней","Буркіна-Фасо","Бурунді","Бутан","Вануату","Ватикан","Велика Британія",
"Венесуела","В'єтнам","Вірменія","Габон","Гаїті","Гамбія","Гана","Гаяна","Гватемала","Гвінея","Гвінея-Бісау","Гондурас","Гренада",
"Греція","Грузія","Данія","Джибуті","Домініка","Домініканська Республіка","Еквадор","Екваторіальна Гвінея","Еритрея","Естонія",
"Есватіні","Ефіопія","Єгипет","Ємен","Замбія","Західна Сахара","Зімбабве","Ізраїль","Індія","Індонезія","Ірак","Іран","Ірландія",
"Ісландія","Іспанія","Італія","Йорданія","Кабо-Верде","Казахстан","Камбоджа","Камерун","Канада","Катар","Кенія","Киргизстан","Китай",
"Кіпр","Кірибаті","Колумбія","Коморські О-ви","ДР Конго","Республіка Конго","Південна Корея","Північна Корея","Косово","Коста-Рика",
"Кот-д'Івуар","Куба","Кувейт","Лаос","Латвія","Лесото","Литва","Ліберія","Ліван","Лівія","Ліхтенштейн","Люксембург","Маврикій",
"Мавританія","Мадагаскар","Малаві","Малайзія","Малі","Мальдіви","Мальта","Марокко","Маршалові О-ви","Мексика","Мікронезія","Мозамбік",
"Молдова","Монако","Монголія","М'янма","Намібія","Науру","Непал","Нігер","Нігерія","Нідерланди","Нікарагуа","Німеччина","Нова Зеландія",
"Норвегія","ОАЕ","Оман","Пакистан","Палау","Палестина","Панама","Папуа Нова Гвінея","Парагвай","Перу","Південний Судан",
"Південно-Африканська Республіка","Північна Македонія","Польща","Португалія","Росія","Руанда","Румунія","Сальвадор","Самоа","Сан-Марино",
"Сан-Томе і Принсіпі","Саудівська Аравія","Сейшельські О-ви","Сенегал","Сент-Вінсент і Гренадини","Сент-Кіттс і Невіс","Сент-Люсія","Сербія",
"Сінгапур","Сирія","Словаччина","Словенія","Соломонові О-ви","Сомалі","США","Судан","Суринам","Східний Тимор","Сьєрра-Леоне","Таджикистан",
"Таїланд","Тайвань","Танзанія","Того","Тонга","Тринідад і Тобаго","Тувалу","Туніс","Туреччина","Туркменістан","Уганда","Угорщина","Узбекистан",
"Україна","Уругвай","Фіджі","Філіппіни","Фінляндія","Франція","Хорватія","Центральноафриканська Республіка","Чад","Чехія","Чилі","Чорногорія",
"Швейцарія","Швеція","Шрі-Ланка","Ямайка","Японія"];
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" type="text/css" href="../style/order-and-delivery-style.css">
    <link rel="stylesheet" href="../style/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.css">
    <!--<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>-->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="../script/cart-script.js"></script>
    <script src="../script/script.js"></script>
    <title>OrderAndDelivery</title>
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
                    <a class="nav-link mr-3" href="phones.php">Телефони</a>
                </li>
                <li class="nav-item active mr-3">
                    <a class="nav-link" href="#">Замовлення та доставка <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item mr-3">
                    <a class="nav-link" href="aboutUs.php">Про нас</a>
                </li>
            </ul>
            <!-- NavBarItems -->
            <ul class="navbar-nav">
                <!-- SearchBox -->
                <li class="nav-item mr-2 mt-1">
                    <div id="wrap" class="mt-1">
                        <form action="" autocomplete="on" class="search-form">
                            <input id="search" name="search" type="text" placeholder="What're we looking for ?"><input id="search_submit" value="Rechercher" type="submit">
                        </form>
                    </div>                       
                </li>
                <!-- Sliders -->
                <li class="nav-item mt-1">
                    <div class="btn-group">
                        <button type="button" class="btn btn-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img src="../style/images/navbar-items/sliders.svg" alt="sliders">
                        </button>
                        <div class="sliders-menu dropdown-menu dropdown-menu-right mx-auto pl-4" style="background-color:#DDD6D6">
                            <div class="row">
                                <!-- Price -->
                                <div class="col-md-6 col-lg-6 col-sm-12">
                                    <p>Вартість</p>
                                    Від <input type="number" class="w-25 pl-1" min="0" style="background-color: #D0C5C5;"> до <input type="number" class="w-25 pl-1" min="0" style="background-color: #D0C5C5;">
                                </div>
                                <!-- Memory -->
                                <div class="col-md-6 col-lg-6 col-sm-12">
                                    <p>Пам'ять</p>
                                    <div class="items-mem">
                                        <label>
                                            <input type="checkbox" id="32GB" name="32GB">
                                            <span for="32GB">32Гб</span>
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
                                            <input type="checkbox" id="5.45" name="5.45">
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
                                            <input type="checkbox" id="13" name="13">
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
                                            <input type="checkbox" id="Apple" name="Apple">
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
                                <!-- ColorOfPhones -->
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
                                <button class="dropdown-item" type="button">Обрати</button>
                            </div>
                        </div>
                    </div>
                </li>
                <!-- Busket -->
                <li class="nav-item pt-1">
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
                <li class="nav-item ml-1 mt-1">
                    <div class="btn-group">
                        <button type="button" class="btn btn-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img src="../style/images/navbar-items/user.svg" alt="user">
                        </button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <?php
                                if($_SESSION) {
                                    echo '<a class="dropdown-item w-100" href="../auth/profile.php" style="font-size: 14px"><b>' . $_SESSION['user']['login'] . '</b></a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item w-100" href="../auth/logout.php" style="font-size: 14px;">Вихід</a>';
                                } else {
                            ?>
                            <!-- LogIn -->
                            <a class="popup1 dropdown-item w-100" href="#form1">Вхід</a>
                            <div class="hidden">
                                <form id="form1" class="w-50 mx-auto text-center" action="../auth/signin.php" method="POST">
                                    <p class="logIn-text">Вхід в аккаунт chamomile</p>
                                    <div class="mb-2">
		                                <select class="box" name="placeOfBirth" id="placeOfBirth">
			                                <option value=""><?php echo "Країна"; ?></option>
		                                    <?php foreach($countrieS as $placeOfBirth): ?>
			                                    <option value="<?=$placeOfBirth?>"><?=$placeOfBirth?></option>
		                                    <?php endforeach; ?>
		                                </select>
                                    </div>
                                    <input type="tel" placeholder="Номер телефону" name="phone" class="input rounded mb-2 pl-1" pattern="+[0-9]{1,3}([0-9]{3})-[0-9]{3}-[0-9]{2}-[0-9]{2}"><br>
                                    <a class="popup3 float-left pl-4" href="#form3">Увійти з паролем</a><br>
                                    <button class="logIn mt-3 mb-2">Увійти</button><br>
                                    <a class="popup2" href="#form2">Реєстрація</a> | <a class="popup4" href="#form4">Забули пароль?</a>
                                    <div>
                                        <button class="google row mt-3 pt-3 pl-3 mx-auto">
                                            <img class="google-icon" src="https://upload.wikimedia.org/wikipedia/commons/5/53/Google_%22G%22_Logo.svg" alt="google">
                                            <p class="btn-text pl-3">Увійти з Google</p>
                                        </button>
                                    </div>
                                </form>
                            </div>
                            <!-- WithPsswd -->
                            <div class="hidden">
                                <form id="form3" class="w-50 mx-auto text-center" action="../auth/signin.php" method="POST">
                                    <input type="login" placeholder="Login" name="login" class="input rounded mb-2 pl-1">
                                    <input type="password" placeholder="Пароль" name="pswd" class="input rounded mb-2 pl-1">
                                    <button class="logIn mt-3 mb-2">Вхід</button>
                                </form>
                            </div>
                            <!-- ForgotPsswd -->
                            <div class="hidden">
                                <form id="form4" class="w-50 mx-auto text-center">
                                    <input type="email" placeholder="E-mail" name="email" class="input rounded mb-2 pl-1"><br>
                                    <button href="#form5" class="popup5 logIn mt-3 mb-2">Далі</button>
                                </form>
                                <form id="form5" class="w-50 mx-auto text-center">
                                    <input type="password" placeholder="Новий пароль" name="pswd" class="input rounded mb-2 pl-1">
                                    <input type="password" placeholder="Підтвердіть пароль" name="pswd" class="input rounded mb-2 pl-1"><br>
                                    <button class="logIn mt-3 mb-2">Вхід</button>
                                </form>
                            </div>
                            <div class="dropdown-divider"></div>
                            <!-- Registration -->
                            <a class="popup2 dropdown-item w-100" href="#form2">Реєстрація</a>
                            <div class="hidden">
                                <form id="form2" class="w-50 mx-auto text-center" action="../auth/signup.php" method="POST">
                                    <p class="logIn-text">Реєстрація у chamomile</p>
                                    <p class="logIn-txt">Вже є аккаунт? <a href="#form1" class="popup1"> Увійти</a></p>
                                    <input type="login" placeholder="Login" name="login" class="input rounded mb-2 pl-1">
                                    <div class="mb-2">
		                                <select class="box" name="placeOfBirth" id="placeOfBirth">
			                                <option value=""><?php echo "Країна"; ?></option>
		                                    <?php foreach($countrieS as $placeOfBirth): ?>
			                                    <option value="<?=$placeOfBirth?>"><?=$placeOfBirth?></option>
		                                    <?php endforeach; ?>
		                                </select>
                                    </div>
                                    <input type="email" placeholder="E-mail" name="email" class="input rounded mb-2 pl-1">
                                    <input type="password" placeholder="Пароль" name="pswd" class="input rounded mb-2 pl-1">
                                    <input type="password" placeholder="Підтвердіть пароль" name="pswd_rep" class="input rounded mb-2 pl-1">
                                    <input type="date" placeholder="Дата народження" name="dob" class="input rounded mb-2 pl-1"><br>
                                    <button class="logIn mt-3 mb-2">Реєстрація</button>
                                    <?php 
                                        if ($_SESSION['message']) {
                                            echo '<p style="font-size: 10px"> ' . $_SESSION['message'] . ' </p>';
                                        }    
                                        unset($_SESSION['message']);
                                    ?>
                                </form>
                            </div>
                            <?php 
                                }
                            ?>
                        </div>
                    </div>
                </li>
                <!-- UA -->
                <li class="nav-item mt-2">
                    <select class="mt-2 mr-2 border-0" style="background-color: #fffdfd;">
                        <option value="UA">UA</option>
                    </select>
                </li>
                <!-- Toggle -->
                <li class="nav-item mt-1">
                    <a class="nav-link" href="#"><img src="../style/images/navbar-items/toggle-left.svg" alt="toggle"></a>
                </li>
            </ul>
            </div>
        </nav>
    </header>
    <!-- Main -->
    <!-- VariantsOfOrder -->
    <div class="order-delivery container-fluid">
        <div class="row ml-5 pl-5 mb-5 mt-5">
            <div class="col-md-4 col-lg-4 col-sm-10">
                <h2>Оплата<br>замовлення</h2>
                <p class="order-delivery_txt mt-4">Які доступні варіанти оплати замовлення у нашому інтернет-магазині?</p>
                <img src="../style/images/aboutUs-img.svg" alt="smTh" class="order-delivery_img1">
            </div>
            <div class="col-md-7 col-lg-7 col-sm-13 mt-5">
                <hr class="hr-style bg-dark">
                <p class="mt-4"><img src="../style/images/phones/sp-addition/dollar-sign.svg" alt="dollar" class="mr-5"><b class="mr-5">Готівкою</b> Наложним платежем, при здійсненні доставки замовлення службою «Нова Пошта».</p>
                <hr class="hr-style bg-dark">
                <p class="mt-4"><img src="../style/images/phones/sp-addition/dollar-sign.svg" alt="dollar" class="mr-5"><b class="mr-5">Онлайн</b> Банківською карткою ПриватБанк/Monobank через сервіс миттєвих платежів</p>
                <hr class="hr-style bg-dark"> 
            </div>
        </div>
    </div>
    <!-- VariantsOfDelivery -->
    <div class="order-delivery_block container-fluid">
        <div class="row ml-5 pl-5">
            <div class="col-md-7 col-lg-7 col-sm-13 text-left pl-4 mr-4 mt-5">
                <hr class="hr-style bg-dark">
                <p class="mt-4 pl-5"><b class="mr-5">"Нова пошта"</b> Оформити доставку службою "Нова пошта"</p>
                <hr class="hr-style bg-dark">
                <p class="mt-4 pl-5"><b class="mr-5">"Укрпошта"</b> Оформити доставку службою "Укрпошта"</p>
                <hr class="hr-style bg-dark">
                <p class="mt-4"><img src="../style/images/phones/sp-addition/dollar-sign.svg" alt="dollar" class="mr-4"><b class="mr-5">Вартість</b> Від 50 до 100 грн</p>
                <hr class="hr-style bg-dark">
            </div>
            <div class="col-md-4 col-lg-4 col-sm-10 mb-2 mt-3 ml-4">
                <h2>Доставка</h2>
                <p class="order-delivery_txt mt-4">При замовленні в інтернет-магазині «Chamomile» можна отримати товар таким чином:</p>
                <img src="../style/images/aboutUs-img.svg" alt="smTh" class="order-delivery_img2">
            </div>
        </div>
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
                    <a class="footer-txt nav-link" href="phones.php">Телефони</a>
                    <a class="footer-txt nav-link" href="#">Замовлення та доставка</a>
                    <a class="footer-txt nav-link" href="aboutUs.php">Про нас</a>
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