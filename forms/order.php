<?php
    require_once '../inc/connect.php';
    require_once '../inc/functions.php';
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

$cities = array("Авдіївка", "Алмазна", "Алупка", "Алушта", "Алчевськ", "Амвросіївка", "Ананьїв", "Андрушівка", "Антрацит", "Апостолове", "Армянськ",
"Арциз", "Балаклія", "Балта", "Бар", "Баранівка", "Барвінкове", "Батурин", "Бахмач", "Бахмут", "Бахчисарай", "Баштанка", "Белз", "Бердичів", "Бердянськ",
"Берегове", "Бережани", "Березань", "Березівка", "Березне", "Берестечко", "Берислав", "Бершадь", "Бібрка", "Біла Церква", "Білгород-Дністровський",
"Білицьке", "Білогірськ", "Білозерське", "Білопілля", "Біляївка", "Благовіщенське", "Бобринець", "Бобровиця", "Богодухів", "Богуслав", "Боково-Хрустальне",
"Болград", "Болехів", "Борзна", "Борислав", "Бориспіль", "Борщів", "Боярка", "Бровари", "Броди", "Брянка", "Бунге", "Буринь", "Бурштин", "Буськ", "Буча", "Бучач",
"Валки", "Вараш", "Василівка", "Васильків", "Ватутіне", "Вашківці", "Великі Мости", "Верхівцеве", "Верхньодніпровськ", "Вижниця", "Вилкове", "Винники", "Виноградів",
"Вишгород", "Вишневе", "Вільногірськ", "Вільнянськ", "Вінниця", "Вовчанськ", "Вознесенівка", "Вознесенськ", "Волноваха", "Володимир", "Волочиськ", "Ворожба",
"Вуглегірськ", "Вугледар", "Гадяч", "Гайворон", "Гайсин", "Галич", "Генічеськ", "Герца", "Гірник", "Гірське", "Глиняни", "Глобине", "Глухів", "Гнівань", "Гола Пристань",
"Голубівка", "Горішні Плавні", "Горлівка", "Городенка", "Городище", "Городня", "Городок", "Горохів", "Гребінка", "Гуляйполе", "Дебальцеве", "Деражня", "Дергачі", "Джанкой",
"Дніпро", "Дніпрорудне", "Добромиль", "Добропілля", "Довжанськ", "Докучаєвськ", "Долина", "Долинська", "Донецьк", "Дрогобич", "Дружба", "Дружківка", "Дубляни", "Дубно",
"Дубровиця", "Дунаївці", "Енергодар", "Євпаторія", "Єнакієве", "Жашків", "Жданівка", "Жидачів", "Житомир", "Жмеринка", "Жовква", "Жовті Води", "Заводське", "Залізне",
"Заліщики", "Запоріжжя", "Заставна", "Звягель", "Збараж", "Зборів", "Звенигородка", "Здолбунів", "Зеленодольськ", "Зимогір'я", "Зіньків", "Зміїв", "Знам'янка", "Золоте",
"Золотоноша", "Золочів", "Зоринськ", "Зугрес", "Івано-Франківськ", "Ізмаїл", "Ізюм", "Ізяслав", "Іллінці", "Іловайськ", "Інкерман", "Ірміно", "Ірпінь", "Іршава", "Ічня",
"Кагарлик", "Кадіївка", "Калинівка", "Калуш", "Кальміуське", "Камінь-Каширський", "Кам'янець-Подільський", "Кам'янка", "Кам'янка-Бузька", "Кам'янка-Дніпровська", "Кам'янське",
"Канів", "Карлівка", "Каховка", "Керч", "Київ", "Кипуче", "Ківерці", "Кілія", "Кіцмань", "Кобеляки", "Ковель", "Кодима", "Козятин", "Коломия", "Комарно", "Конотоп", "Копичинці",
"Корець", "Коростень", "Коростишів", "Корсунь-Шевченківський", "Корюківка", "Косів", "Костопіль", "Костянтинівка", "Краматорськ", "Красилів", "Красногорівка", "Красноград", 
"Красноперекопськ (Яни Капу)", "Кременець", "Кременчук", "Кремінна", "Кривий Ріг", "Кролевець", "Кропивницький", "Куп'янськ", "Курахове", "Ладижин", "Ланівці", "Лебедин", "Лиман",
"Липовець", "Лисичанськ", "Лозова", "Лохвиця", "Лубни", "Луганськ", "Лутугине", "Луцьк", "Львів", "Любомль", "Люботин", "Макіївка", "Мала Виска", "Малин", "Марганець", "Маріуполь",
"Мар'їнка", "Мелітополь", "Мена", "Мерефа", "Миколаїв (Львів. обл)", "Миколаїв (Мик. обл)", "Миколаївка", "Миргород", "Мирноград", "Миронівка", "Міусинськ", "Могилів-Подільський",
"Молодогвардійськ", "Молочанськ", "Монастириська", "Монастирище", "Моршин", "Моспине", "Мостиська", "Мукачево", "Надвірна", "Немирів", "Нетішин", "Ніжин", "Нікополь", "Нова Каховка",
"Нова Одеса", "Новгород-Сіверський", "Новий Буг", "Новий Калинів", "Новий Розділ", "Новоазовськ", "Нововолинськ", "Новогродівка", "Новодністровськ", "Новодружеськ", "Новомиргород",
"Новомосковськ", "Новоселиця", "Новоукраїнка", "Новояворівськ", "Носівка", "Обухів", "Овруч", "Одеса", "Олевськ", "Олександрівськ", "Олександрія", "Олешки", "Оріхів", "Остер", "Острог",
"Охтирка", "Очаків", "Павлоград", "Первомайськ", "Первомайський", "Перевальськ", "Перемишляни", "Перечин", "Перещепине", "Переяслав", "Першотравенськ", "Петрово-Красносілля",
"Пирятин", "Південне", "Підгайці", "Підгородне", "Погребище", "Подільськ", "Покров", "Покровськ", "Пологи", "Полонне", "Полтава", "Помічна", "Попасна", "Почаїв", "Привілля", "Прилуки",
"Приморськ", "Прип'ять", "Пустомити", "Путивль", "П'ятихатки", "Рава-Руська", "Радехів", "Радивилів", "Радомишль", "Рахів", "Рені", "Решетилівка", "Ржищів", "Рівне", "Ровеньки", "Рогатин",
"Родинське", "Рожище", "Роздільна", "Ромни", "Рубіжне", "Рудки", "Саки", "Самбір", "Сарни", "Свалява", "Сватове", "Світловодськ", "Світлодарськ", "Святогірськ", "Севастополь", "Селидове",
"Семенівка", "Середина-Буда", "Сєвєродонецьк", "Синельникове", "Сіверськ", "Сімферополь", "Скадовськ", "Скалат", "Сквира", "Сколе", "Славута", "Славутич", "Слов'янськ", "Сміла", "Снігурівка",
"Сніжне", "Сновськ", "Снятин", "Сокаль", "Сокиряни", "Соледар", "Сорокине", "Соснівка", "Старий Крим", "Старий Самбір", "Старобільськ", "Старокостянтинів", "Стебник", "Сторожинець", "Стрий",
"Судак", "Судова Вишня", "Суми", "Суходільськ", "Таврійськ", "Тальне", "Тараща", "Татарбунари", "Теплодар", "Теребовля", "Тернівка", "Тернопіль", "Тетіїв", "Тисмениця", "Тлумач", "Токмак",
"Торецьк", "Тростянець", "Трускавець", "Тульчин", "Турка", "Тячів", "Угнів", "Ужгород", "Узин", "Українка", "Українськ", "Умань", "Устилуг", "Фастів", "Феодосія", "Харків", "Харцизьк",
"Херсон", "Хирів", "Хмельницький", "Хмільник", "Ходорів", "Хорол", "Хоростків", "Хотин", "Хрестівка", "Христинівка", "Хрустальний", "Хуст", "Часів Яр", "Червоноград", "Черкаси", "Чернівці",
"Чернігів", "Чигирин", "Чистякове", "Чоп", "Чорнобиль", "Чорноморськ", "Чортків", "Чугуїв", "Чуднів", "Шаргород", "Шахтарськ", "Шепетівка", "Шостка", "Шпола", "Шумськ", "Щастя",
"Щолкіне", "Южне", "Южноукраїнськ", "Яворів", "Яготин", "Ялта", "Ямпіль", "Яремче", "Ясинувата");

$new_post = array("№1 просп. Героев Украины (ран. просп. Героев Сталинграда), д. 13 , Грузовое отделение", "№2 ул. Мореходная, 1в/6 (Лит. Б2) , Грузовое отделение", "№3 ул. Космонавтов, 83A , Грузовое отделение", "№4 просп. Богоявленский (ран. Октябрьский), 330", "№5 просп. Героев Украины (ран. Героев Сталинграда), 77/1", 
"№6 ул. Соборная (ран. Советская), 13/4 , Почтовое отделение (до 30 кг)", "№7 ул. Космонавтов, 62 , Почтовое отделение (до 30 кг)", "№8 просп. Центральный, 25б , Почтовое отделение (до 30 кг)", 
"№9 ул. Генерала Карпенка, 2/2 а", "№10 просп. Центральный (ран. Ленина), 86/3 , Почтовое отделение (до 30 кг)", "№11 просп.Мира, 13", "№12 ул. Пушкинская, 33 , Почтовое отделение (до 30 кг)", "№13 ул. Лазурная, 17", 
"№14 просп. Центральный (ран. Ленина), 159 , Почтовое отделение (до 30 кг)", "№15 ул. Космонавтов, 53/1 , Почтовое отделение (до 30 кг)", "№16 просп. Богоявленский (ран. Октябрьский), 234в , Почтовое отделение (до 30 кг)", 
"№17 просп. Героев Украины (ран. Г. Сталинграда), 9д (МЕТРО) , Почтовое отделение (до 15 кг)", "№18 просп. Богоявленский (ран. Октябрьский), 342/2", "№19 ул. 1-а Слободская, 62 , Почтовое отделение (до 30 кг)", 
"№20 просп. Богоявленский (ран. Октябрьский), 26/2", "№21 ул. Космонавтов, 108/1", "№22 просп. Центральный, 135 , Почтовое отделение (до 30 кг)", "№23 ул. Космонавтов, 83а , Почтовое отделение (до 2 кг)", 
"№24 просп. Мира, 17/3", "№25 просп. Богоявленский (ран. Октябрьский), 310", "№26 ул. Малая Морская, 108/7 , Почтовое отделение (до 30 кг)", "№27 ул. Никольская, 17/1", "№28 ул. Озёрная (ран. Красных Майовщиков), 1-В", 
"№29 ул. Декабристов, 31/1 , Почтовое отделение (до 30 кг)", "№31 ул. Бузника, 14/3 , Почтовое отделение (до 30 кг)", "№41 Херсонское шоссе, 38а , Почтовое отделение (до 5 кг)", "№42 ул. Чкалова, 215б , Почтовое отделение (до 30 кг)", 
"№44 ул. Московская, 13/4", "№3494 ул. Озерная, 13/13 (АТБ) , Почтомат (до 30 кг)", "№3495 просп. Центральный, 154 (АТБ) , Почтомат (до 30 кг)", "№5058 просп. Центральный, 26с (маг. АТБ) , Почтомат (до 30 кг)", 
"№5350 Херсонское шоссе, 90а (маг. АТБ) , Почтомат (до 30 кг)", "№5540 просп. Центральный, 261/1 (33 МК) , Почтомат (до 30 кг)", "№5686 ул. Космонавтов, 76/1 (маг. АТБ) , Почтомат (до 30 кг)", 
"№5688 ул. Большая Морская, 34а (маг. АТБ) , Почтомат (до 30 кг)", "№5691 ул. Крылова, 38/2 (маг. АТБ) , Почтомат (до 30 кг)", "№5811 просп. Богоявленский, 189/5 (SOCAR) , Почтомат (до 30 кг)", 
"№5853 ул. Троицкая, 252 (WOG) , Почтомат (до 30 кг)", "№5953 ул. Липовая, 40 (WOG) , Почтомат (до 30 кг)", "№5962 ул. Чкалова, 23/1 (WOG) , Почтомат (до 30 кг)", "№5964 ул. 10-я Слободская, 7 (WOG) , Почтомат (до 30 кг)", 
"№5965 ул. Херсонское шоссе, 50б (WOG) , Почтомат (до 30 кг)", "№6013 просп. Героев Украины, 20д (маг. АТБ) , Почтомат (до 30 кг)", "№6105 Одесское шоссе, 88 (маг. АТБ) , Почтомат (до 30 кг)");

$ukr_post = array("54001 ул. Адмиральская, 27/1", "54003 пр-т. Ленина, 184", "54007 ул. Энгельса, 21", "54017 пр-т. Ленина, 69", "54018 пр-т. Октябрьский, 45", "54020 ул. Декабристов, 69", 
"54022 ул. Прибужская, 60", "54025 просп. Героев Сталинграда, 77", "54028 ул. Космонавтов, 71", "54029 пр-т. Ленина, 22", "54030 ул. Фалеевская, 15", "54031 ул. Первомайская, 111", 
"54034 ул. Строителей, 18", "54036 ул. Рассветная, 3", "54037 ул. Знаменская, 33", "54038 ул. Дачная, 9", "54039 ул. Привольная, 39", "54046 ул. Калинина, 4", "54048 ул. Силикатная, 174",
"54049 ул. Литовченко, 94", "54050 пр-т. Октябрьский, 316", "54051 пр-т. Октябрьский, 340/2", "54052 пр-т. Октябрьский, 325/1", "54055 ул. Чкалова, 82А", "54056 ул. Космонавтов, 55",
"54057 ул. Советская, 2", "54058 ул. Красных Маевщиков, 11", "54059 ул. Ольшанского, 18");

$meest_post = array("ул. Казарского, 3 K/4 , ОВ №16", "шоссе Херсонское, 52б , ППВ №62", "просп. Ленина, 4 , МППВ №959, до 30 кг", "просп. Мира, 21/1 , МППВ №2162, до 30 кг", 
"просп. Октябрьский, 309 , МППВ №2534, до 30 кг", "ул. Чигрина, 34 А , МППВ №2552, до 30 кг", "ул. Шевченко, 44 , МППВ №2624, до 30 кг", "ул. 28-й Армии, 12 А , МППВ №2690, до 30 кг",
"просп. Октябрьский, 234 В , МППВ №2772, до 30 кг");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" type="text/css" href="../style/order-style.css">
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
    <script src="../script/details-script.js"></script>
    <script src="../script/script.js"></script>
    <title>MakeAnOrder</title>
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
                <li class="nav-item mr-2 pt-2">
                    <img src="../style/images/navbar-items/search.svg">                      
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
                <li class="nav-item mt-2">
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
    <div class="main-style container-fluid m-5">
        <!-- Profile login-photo -->
        <h1 class="mb-3">Оформлення замовлення</h1>
        <div class="profile-bg mb-5">
            <img src="../style/images/profile/user-photo.jpg" alt="usr_photo" class="user_photo ml-4 mt-4 mr-2">
            <?php echo $_SESSION['user']['login']; ?>
        </div>
        <div class="row">
            <!-- Column with phone and sum -->
            <div class="col-md-5 col-lg-5 col-sm-9">
                <?php if (!empty($_SESSION['cart'])): ?>
                    <?php foreach ($_SESSION['cart'] as $id => $item): ?>
                        <div class="block mb-5 mr-5 text-center">
                            <img src="<?= $item['image'] ?>" style="width: 120px; height: 170px;" class="pt-4">
                            <a href="?cart=add&id=<?= $item['id'] ?>" class="add-to-cart" data-id="<?= $item['id'] ?>">
                                <img src="../style/images/phones/sp-addition/fav-gray.svg" style="position: relative; left: 35px; bottom: 50px;" alt = "fav-gray">
                            </a>
                            <div class="text-left pl-3 pt-4">
                                <div>
                                    <img src="../style/images/phones/sp-addition/4stars.svg"><text style="color: gray; font-size: 14px">  Відгуки (4)</text>
                                </div>
                                <p class="pt-2" style="font-family: Poppins; font-size: 20px;"><?= $item['name'] ?><br>від <?= $item['price'] ?><b> ₴</b></p>
                                <button type="button" class="btn-phone-more mr-4 pr-3" id="get-details" data-toggle="modal" data-target="#details-modal" data-id="<?= $phone[0] ?>">Детальніше ></button>
                            </div>
                        </div>
                    <?php endforeach; ?>
                    <p style="font-family: Poppins; font-size: 25px;">Кількість товарів: <?= $_SESSION['cart.qty'] ?></p>
                    <p style="font-family: Poppins; font-size: 25px;">До сплати: <?= $_SESSION['cart.sum'] ?> <b> ₴</b></p>
                <?php else: ?>               
                    <p>Error</p>
                <?php endif; ?>
            </div>
            <!-- Column with form -->
            <div class="col-md-7 col-lg-7 col-sm-11">
                <form id="buy" method="post" class="p-3 m-3">
                    <!-- FullName -->
                    <p style="font-size:15px" class="p-0 m-0"><span style="color:red">*</span>ПІП</p>
                    <div class="form-group">
                        <input type="name" id="name" name="name" minlength="20" maxlength="100" size="105" class="input rounded w-100" placeholder="ПІП">
                    </div>
                    <!-- E-mail -->
                    <p style="font-size:15px" class="p-0 m-0"><span style="color:red">*</span>E-mail</p>
                    <div class="form-group">
                        <input type="email" id="email" name="email" minlength="10" maxlength="150" size="155" class="input rounded w-100" placeholder="E-mail">
                    </div>
                    <!-- Country -->
                    <p style="font-size:15px" class="p-0 m-0"><span style="color:red">*</span>Оберіть країну</p>
                    <div class="form-group">
                        <select class="box w-100" name="placeOfBirth" id="placeOfBirth">
			                <option value=""><?php echo "Країна"; ?></option>
		                    <?php foreach($countrieS as $placeOfBirth): ?>
			                    <option value="<?=$placeOfBirth?>"><?=$placeOfBirth?></option>
		                    <?php endforeach; ?>
		                </select>
                    </div>
                    <!-- City -->
                    <p style="font-size:15px" class="p-0 m-0"><span style="color:red">*</span>Оберіть місто</p>
                    <div class="form-group">
                        <select class="box w-100" name="city" id="city">
			                <option value=""><?php echo "Місто"; ?></option>
		                    <?php foreach($cities as $city): ?>
			                    <option value="<?=$city?>"><?=$city?></option>
		                    <?php endforeach; ?>
		                </select>
                    </div>
                    <!-- Post Office -->
                    <p style="font-size:15px" class="p-0 m-0"><span style="color:red">*</span>Оберіть пошту</p>
                    <div class="form-group">
                        <select id="postOffice" class="box w-100">
                            <option value="Нова пошта">Нова пошта</option>
                            <option value="Укрпошта">Укрпошта</option>
                            <option value="Meest">Meest</option>
                        </select>
                    </div>
                    <!-- Post Office number -->
                    <p style="font-size:15px" class="p-0 m-0"><span style="color:red">*</span>Оберіть поштове відділення</p>
                    <div class="form-group">
                        <select class="box w-100" name="post" id="post">
			                <option value=""><?php echo "Поштове відділення"; ?></option>
		                    <?php foreach($new_post as $post): ?>
			                    <option value="<?=$post?>"><?=$post?></option>
		                    <?php endforeach; ?>
		                </select>
                    </div>
                    <!-- Payment -->
                    <p style="font-size:15px" class="p-0 m-0"><span style="color:red">*</span>Оберіть спосіб оплати</p>
                    <div class="form-group">
                        <select id="pay" class="box w-100">
                            <option value="Оплата при отриманні товару">Оплата при отриманні товару</option>
                            <option value="Картою (за реквізитами)">Картою (за реквізитами)</option>
                            <option value="Сплатити онлайн карткою 'єПідтримка'">Сплатити онлайн карткою "єПідтримка"</option>
                            <option value="Apple Pay">Apple Pay</option>
                        </select>
                    </div>
                    <button type="button" class="btn btn-success" onclick="document.location='requisites.php'">Оформити замовлення</button>
                </from>
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