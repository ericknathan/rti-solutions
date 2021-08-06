<head>
  <link rel="stylesheet" href="./styles.css" />
</head>

<?php
  if(isset($_POST['name']) && isset($_POST['address']) && isset($_POST['consumption'])) {
    $clientName = $_POST['name'];
    $address = $_POST['address'];
    $consumption = $_POST['consumption'];
    
    if($consumption > 120) {
      $pricePerKWh = 0.42;
      $color = "red";
      $message = "Você deve economizar!";
    } else {
      $pricePerKWh = 0.32;
      $color = "blue";
      $message = "Obrigado por economizar!";
    }
    
    $price = number_format(($consumption * $pricePerKWh), 2, ',', '.');

    echo "
      <body class='background $color'>
        <div class='container'>
          <h1>Conta de luz de $clientName.</h1>
          <p class='address'>$address.</p>
          <p class='$color'>Consumo: <span id='consumption'>" . $consumption . "kWh</span>.</p>
          <p>Valor a pagar: <span id='price'>R$$price</span>.</p>
          <p id='alert'>$message</p>
        </div>
      </body>
    ";

  } else {
    echo "
      <body class='background red'>
        <div class='container'>
          <h1>Ocorreu um erro!</h1>
          <p>Você não indicou todas as informações necessárias.</p>
        </div>
      </body>
    ";
  }