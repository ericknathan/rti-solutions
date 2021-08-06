<head>
  <link rel="stylesheet" href="./styles.css" />
</head>

<?php
  if(isset($_POST['origin']) && isset($_POST['destination']) && isset($_POST['range']) && isset($_POST['tolls'])) {
    $origin = $_POST['origin'];
    $destination = $_POST['destination'];
    $range = $_POST['range'];
    $tolls = $_POST['tolls'];

    $totalPrice = ($tolls * 9.40) + ($range * 6.00);
        
    $text = "A viagem de $origin à $destination irá custar o valor total de <span>R$" . number_format($totalPrice, 2, ',', '.') . "</span>";

    echo "
      <div class='container'>
        <h1>Total do frete</h1>
        <p>$text</p>
      </div>
    ";
    
  } else {
    echo "
      <body class='red'>
        <div class='container'>
          <h1>Ocorreu um erro!</h1>
          <p>Você não indicou todas as informações necessárias.</p>
        </div>
      </body>
    ";
  }