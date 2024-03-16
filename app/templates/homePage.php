<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Page test</h1>
    <h3>
        <?php
            foreach($dishes as $dish){

                ?>
        <?= htmlspecialchars($dish['nom']); ?>
    </h3>
    <p>
        <?= htmlspecialchars($dish['description']); ?>
    </p>
    <p>
        <?= htmlspecialchars($dish['prix']) . "€";
        }
        ?>
    </p>
</body>
</html>