<head>
  <link rel="stylesheet" href="styles.css" />
</head>
<?php

  if(isset($_POST['name']) && isset($_POST['currentWage']) && isset($_POST['gender']) && isset($_POST['occupation'])) {
    $name = $_POST['name'];
    $currentWage = $_POST['currentWage'];
    $gender = $_POST['gender'];
    $occupation = $_POST['occupation'];

    if($currentWage > 5000) $currentWage = $currentWage + ($currentWage / 100) * 10;
    else $currentWage = $currentWage + ($currentWage / 100) * 20;

    echo "$gender $name passará a receber R$$currentWage, no cargo de $occupation";
    
  } else {
    echo "Você não preencheu os campos corretamente";
  }
