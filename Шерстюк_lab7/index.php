<?php
    require('auth/check-auth.php');
    require "data/declare-actors.php";
?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, inital-scale=1.0,
    maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" type="text/css" href="style/main-style.css">
<link rel="stylesheet" type="text/css" href="style/number-style.css">
<link rel="stylesheet" type="text/css" href="style/actor-choose-style.css">
<title>Lab7</title>
</head>
<body>
<header>
    <div class="user-info">
        <span>Hola amigo! <?php echo $_SESSION['user']; ?>, use it for good!</span>
        <a href="auth/logout.php">Logout</a>
        <?php if(CheckRight('actor', 'view')): ?>
    </div>
    <form method="get" name="actor-form">
        <label for="actor">Actor</label>
        <select name="actor">
            <option value=""></option>
            <?php
                foreach($data['actors'] as $curactor) {
                    echo "<option " . (($_GET['actor']==$curactor['file'])?"selected":"") . " value=" . $curactor['file'] . ">" . $curactor['fullName'] . "</option>";
                }
            ?>
        </select>
        <input type="submit" value="ok">
        <?php if(CheckRight('actor', 'create')): ?>
        <a href="forms/create-actor.php">Додати актора</a>
    <?php endif; ?>
    </form>
    <?php if($_GET['actor']): ?>
        <?php
        $actorFolder = $_GET['actor'];
        require "data/declare-data.php";
        ?>
  <h1>Актор: <span><?php echo $data['actor']['fullName']; ?></span></h1>
  <h2>Дата народження: <span><?php $dateOfBirth = new Datetime($data['actor']['dob']); echo date_format($dateOfBirth, 'd F Y'); ?></span></h2>
  <h3>Місце народження: <span><?php echo $data['actor']['placeOfBirth']; ?></span></h3>
  <div class="control">
    <?php if(CheckRight('actor', 'edit')): ?>
    <a href="forms/edit-actor.php?actor=<?php echo $_GET['actor']; ?>">Редагувати актора</a>
    <?php endif; ?>
    <?php if(CheckRight('actor', 'delete')): ?>
    <a href="forms/delete-actor.php?actor=<?php echo $_GET['actor']; ?>">Видалити актора</a>
    <?php endif; ?>
  </div>
  <?php endif; ?>
<?php endif; ?>
</header>
<?php if(CheckRight('film', 'view')): ?>
<selection>
    <?php
        if($_GET['actor']):
    ?>
    <?php if(CheckRight('film', 'create')): ?>
    <a href="forms/create-film.php?actor=<?php echo $_GET['actor']; ?>">Додати фільм</a>
<?php endif; ?>
    <form name='film-filter' method='post'>Фільтрувати за назвою
        <input type="text" name="film_name_filter" value='<?php echo $_POST['film_name_filter']; ?>'>
        <input type="submit" value="Фільтр">
    </form>
  <table>
    <thead>
    <tr>
        <th>№ п.п.</th>
        <th>Назва</th>
        <th>Країна</th>
        <th>Рік виходу</th>
        <th></th>
    </tr>
    </thead>
    <tbody>
    <?php
    if($data['films']) {
        foreach ($data['films'] as $key => $film){
            if (!$_POST['film_name_filter']
                || stristr($film['name'], $_POST['film_name_filter'])) {
                $row_class = 'row';
                if (($key+1) %2 == 0 ) {
                $row_class = 'even';
                }
            else {
                $row_class = 'odd';
            }
            $releaseDate = new Datetime($film['rd']);
            echo "<tr class = '$row_class'>
                <td>".($key+1)."</td>
                <td>".$film['name']."</td>
                <td>".$film['country']."</td>
                <td>".date_format($releaseDate, 'Y')."</td>
                <td>";
                if (CheckRight('film', 'edit')) {
                    echo "<a href='forms/edit-film.php"."?actor=".$_GET['actor']."&file=".$film['file']."'>Редагувати</a>";
                }
                echo " | ";
                if(CheckRight('film', 'delete')) {
                    echo "<a href='forms/delete-film.php"."?actor=".$_GET['actor']."&file=".$film['file']."'>Видалити</a>";
                }
                echo "</td></tr>";
            }
        }
    }
    ?>
    </tbody>
  </table>
<?php endif; ?>
</selection>
<?php endif; ?>
</body>
</html>