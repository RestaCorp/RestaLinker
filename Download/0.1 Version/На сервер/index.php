<html>
    <?php
    include "loader.php";
    ?>
    <title>Resta linker</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <center><b>Resta linker | ����������� ������!</b><br><br>
<head>
    <a href="?create=1" class="button">������� ������</a>
    <a href="?about=1" class="button">�� �����</a></center>
    <?php
    if (!empty($_GET["about"])) 
    {
        ?>
        <center><br><br><b>Resta linker | ������ _Resta_ | ������� ��� ����������� ���� �������� |</b><br><br>
        <b>������ ������ ������� ���� ����������� ������� ���� URL...     </b><br><br>
        <a href="?" class="button">�������</a></center>
        <?php
    }
    if (!empty($_GET["admin"])) 
    {
        ?>
        <center><a href="?" class="button">��� 0_o</a></center>
        <?php
    }
    if (!empty($_GET["create"])) 
    {
        ?>
         <center><br><br><b>Resta linker | ���� ������� ������ (���������) |</b><br><br>
        <b>����� ������ � ���� ���� ������ �� ���� ,� ����������...     </b><br><br>
        <b1>WARNING!!!</b1><br><br>
        <b1>�� ������ ���� ������ , �������� ,� ������ ������� � �.�.</b1><br><br>
        <b1>����� ������ �� ����� ��������!!!</b1><br><br>
        <b1>WARNING!!!</b1><br><br>
        <b1>����������� ������ http:// (https://), � �� ���������� ������!!!</b1><br><br>
        <form action="createurl.php" method="post"><br><br><br><br><br><br>
         <b>������: <input type="text" name="Sulka" value= "� http:// (https://)"/>
         ����������: <input type="text" name="url" value= "������ : 228"/>
         <input type="submit" class="button" value= "�������"/></b>
         </form>
        <a href="?" class="button">�������</a></center>
        <?php
    }
    include "header.php";
    ?>
</head>
</html>