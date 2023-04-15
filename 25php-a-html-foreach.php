<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php $students = ["Harry", "Ron", "Hermiona"]; ?>

    <!-- Vytvorenie zoznamu z pola -->
    <ul>
        <?php foreach($students as $student): ?>
            <li><?php echo $student; ?></li>
        <?php endforeach; ?>
    </ul>

    <ul>
        <li>Jedna</li>
        <li>Dva</li>
        <li>Tri</li>
    </ul>
</body>
</html>