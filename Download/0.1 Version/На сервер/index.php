<html>
    <?php
    include "loader.php";
    ?>
    <title>Resta linker</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <center><b>Resta linker | Укоротитель ссылок!</b><br><br>
<head>
    <a href="?create=1" class="button">Создать ссылку</a>
    <a href="?about=1" class="button">Об сайте</a></center>
    <?php
    if (!empty($_GET["about"])) 
    {
        ?>
        <center><br><br><b>Resta linker | Создал _Resta_ | Спасибо что пользуетесь моим сервисом |</b><br><br>
        <b>Первый сервис который дает возможность выбрать свой URL...     </b><br><br>
        <a href="?" class="button">Закрыть</a></center>
        <?php
    }
    if (!empty($_GET["admin"])) 
    {
        ?>
        <center><a href="?" class="button">Упс 0_o</a></center>
        <?php
    }
    if (!empty($_GET["create"])) 
    {
        ?>
         <center><br><br><b>Resta linker | Чтоб создать ссылку (Укоротить) |</b><br><br>
        <b>Нужно ввести в поле ниже ссылку на сайт ,и укороченую...     </b><br><br>
        <b1>WARNING!!!</b1><br><br>
        <b1>НЕ ДОЛЖНО БЫТЬ СКОБОК , ПРОБЕЛОВ ,И ЗНАКОВ СТРЕЛОК И Т.Д.</b1><br><br>
        <b1>ИНАЧЕ ССЫЛКА НЕ БУДЕТ РАБОТАТЬ!!!</b1><br><br>
        <b1>WARNING!!!</b1><br><br>
        <b1>ОБЕЗАТЕЛЬНО ПИСАТЬ http:// (https://), А ТО ВЫСВЕТИТСЯ ОШИБКА!!!</b1><br><br>
        <form action="createurl.php" method="post"><br><br><br><br><br><br>
         <b>Ссылка: <input type="text" name="Sulka" value= "С http:// (https://)"/>
         Укороченая: <input type="text" name="url" value= "Пример : 228"/>
         <input type="submit" class="button" value= "Создать"/></b>
         </form>
        <a href="?" class="button">Закрыть</a></center>
        <?php
    }
    include "header.php";
    ?>
</head>
</html>