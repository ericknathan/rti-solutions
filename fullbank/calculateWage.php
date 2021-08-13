<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Fullbank</title>
  <link rel="stylesheet" href="styles.css" />
</head>

<?php

  if(isset($_POST['name']) && isset($_POST['currentWage']) && isset($_POST['gender']) && isset($_POST['occupation'])) {
    $name = $_POST['name'];
    $currentWage = $_POST['currentWage'];
    $gender = $_POST['gender'];
    $occupation = $_POST['occupation'];
    $class = '';

    $currentWage = $currentWage > 5000 ? $currentWage * 1.1 : $currentWage * 1.2;

    $message = "$gender $name passará a receber R$" . number_format($currentWage, 2 , ',', '.') . " no cargo de $occupation";
    
  } else {
    $class = "class='error'";
    $message = "Você não preencheu os campos corretamente!";
  }
?>

<body <?= $class ?>>
  <div class="container">
    <h1>Fullbank</h1>
    <p><?= $message ?></p>
  </div>
</body>
</html>