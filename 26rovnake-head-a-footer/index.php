<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Vypísanie header do stránky z iného súboru -->
    <!-- Zahrň "header.php" -->
    <?php include "assets/header.php"; ?>
    <!-- <?php //require "header.php"; ?> -->

    <!-- pokial je chyba v kode include sa nezastavý a pokracuje dalej v kóde
    pokial je chyba v kode require sa zastavý  a nepokracuje dalej v kóde -->

    <h1>index</h1>
    
    <?php include "assets/footer.php" ?>
</body>
</html>