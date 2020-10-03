<!DOCTYPE html>
<html lang="sk">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>TCP, UDP Lab</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  body {
      font: 20px Montserrat, sans-serif;
      line-height: 1.8;
      color: #f5f6f7;
  }
  p {font-size: 16px;}
  .margin {margin-bottom: 45px;}
  .bg-1 {
      background-color: #1abc9c; /* Green */
      color: #ffffff;
      min-height: 35em;
  }
  .bg-2 {
      background-color: #474e5d; /* Dark Blue */
      color: #ffffff;
  }
  .bg-3 {
      background-color: #ffffff; /* White */
      color: #555555;
  }
  .bg-4 {
      background-color: #2f2f2f; /* Black Gray */
      color: #fff;
  }
  .container-fluid {
      padding-top: 70px;
      padding-bottom: 70px;
  }
  .navbar {
      padding-top: 15px;
      padding-bottom: 15px;
      border: 0;
      border-radius: 0;
      margin-bottom: 0;
      font-size: 12px;
      letter-spacing: 5px;
  }
  .navbar-nav  li a:hover {
      color: #1abc9c !important;
  }

  .form-group label {
    margin: 0.5em 1em;
  }

  .form-group input {
    color: #000000;
  }
  </style>
</head>
<body>

<?php
  $method = filter_input(INPUT_SERVER, 'REQUEST_METHOD');
  $passphrase = filter_input(INPUT_POST, 'passphrase');
  $one = filter_input(INPUT_POST, 'one');
  $two = filter_input(INPUT_POST, 'two');
  $three = filter_input(INPUT_POST, 'three');
  $four = filter_input(INPUT_POST, 'four');
  $enter = filter_input(INPUT_POST, 'enter');
  $protocol = filter_input(INPUT_POST, 'protocol');
  $handshake = filter_input(INPUT_POST, 'handshake');
?>

<!-- First Container -->
<div class="container-fluid bg-1 text-center">
  <h3 class="margin">TCP, UDP Lab</h3>

  <?php
    if ($method === 'POST') {
      if ($passphrase && $passphrase === "11111111") {
  ?>
        <h4>Three Way Handshake</h4>
        <p>Namiesto #1 - #4 vyplňte správne hodnoty SEQ, ACK. Formulár nájdete na konci stránky</p>
        <section style='margin: 3em'>
          <div class='row' style='margin: 1em 0'>
            <div class='col-lg-4 col-md-4 text-center'>
              SEQ: 100, ACK: #1
            </div>
            <div class='col-lg-4 col-md-4'>
              <!-- -->
            </div>
            <div class='col-lg-4 col-md-4'>
              <!-- -->
            </div>
          </div>
          <div class='row'>
            <div class='col-lg-4 col-md-4'>
              <img src='./imgs/desktop.png' class='img-responsive' alt='PC-A' />
            </div>
            <div class='col-lg-4 col-md-4'>
              <img src='./imgs/rarrow.png' class='img-responsive' alt='Right Arrow' />
            </div>
            <div class='col-lg-4 col-md-4'>
              <img src='./imgs/desktop.png' class='img-responsive' alt='PC-B' />
            </div>
          </div>
        </section>

        <section style='margin: 3em'>
          <div class='row' style='margin: 1em 0'>
            <div class='col-lg-4 col-md-4 text-center'>
              <!-- -->
            </div>
            <div class='col-lg-4 col-md-4'>
              <!-- -->
            </div>
            <div class='col-lg-4 col-md-4'>
              SEQ: 200, ACK: #2
            </div>
          </div>
          <div class='row'>
            <div class='col-lg-4 col-md-4'>
              <img src='./imgs/desktop.png' class='img-responsive' alt='PC-A' />
            </div>
            <div class='col-lg-4 col-md-4'>
              <img src='./imgs/larrow.png' class='img-responsive' alt='Left Arrow' />
            </div>
            <div class='col-lg-4 col-md-4'>
              <img src='./imgs/desktop.png' class='img-responsive' alt='PC-B' />
            </div>
          </div>
        </section>

        <section style='margin: 3em'>
          <div class='row' style='margin: 1em 0'>
            <div class='col-lg-4 col-md-4 text-center'>
              SEQ: #3, ACK: #4
            </div>
            <div class='col-lg-4 col-md-4'>
              <!-- -->
            </div>
            <div class='col-lg-4 col-md-4'>
              <!-- -->
            </div>
          </div>
          <div class='row'>
            <div class='col-lg-4 col-md-4'>
              <img src='./imgs/desktop.png' class='img-responsive' alt='PC-A' />
            </div>
            <div class='col-lg-4 col-md-4'>
              <img src='./imgs/rarrow.png' class='img-responsive' alt='Right Arrow' />
            </div>
            <div class='col-lg-4 col-md-4'>
              <img src='./imgs/desktop.png' class='img-responsive' alt='PC-B' />
            </div>
          </div>
        </section>

        <div style='padding: 1em'>
          <form method='post' class='form-horizontal'>
            <div class='form-group'>
              <label for='one'>#1</label>
              <input type='password' id='one' name='one' />
            </div>
            <div class='form-group'>
              <label for='two'>#2</label>
              <input type='password' id='two' name='two' />
            </div>
            <div class='form-group'>
              <label for='three'>#3</label>
              <input type='password' id='three' name='three' />
            </div>
            <div class='form-group'>
              <label for='four'>#4</label>
              <input type='password' id='four' name='four' />
            </div>
            <div class='form-group'>
              <button type='handshake' name='handshake' class='btn btn-default'>Odoslať</button>
            </div>
          </form>
        </div>
  <?php
      } else if ($one == 0 && $two == 101 && $three == 101 && $four == 201) {
  ?>
    <p>Ktorý protokol 4. vrstvy prenáša správy medzi týmto web prehliadačom serverom?</p>
    <div style='padding: 1em'>
      <form method='post'>
        <div class='form-group'>
          <label for='protocol'>Názov protokolu</label>
          <input type='password' id='protocol' name='protocol' />
        </div>
        <div class='form-group'>
          <button type='submit' name='last' class='btn btn-default'>Odpovedať</button>
        </div>
      </form>
    </div>
  <?php
      } else if ($protocol && strtolower($protocol) == 'tcp') {
  ?>
    <section class='row'>
      <h4>Gratulujem!</h4>
      <p>Úspešne ste zvládli všetky úlohy.</p>
    </section>
    <section class='row'>
      <div class='col-md-offset-3 col-lg-offsset-3 col-md-6 col-lg-6'>
        <img class='img-responsive' src='./imgs/joke.png' alt='Typical adult man reaction in real scenario' />
      </div>
    </section>
  <?php
      }
    }
    else
    {
  ?>
    <p>Použitie tajné heslo na prístup na server nachádzajúce sa v inej UDP správe</p>
    <div style='padding: 1em'>
      <form method='post'>
        <div class='form-group'>
          <label for='passphrase'>Heslo</label>
          <input type='password' id='passphrase' name='passphrase' />
        </div>
        <div class='form-group'>
          <button type='submit' name='enter' class='btn btn-default'>Vstúpiť</button>
        </div>
      </form>
    </div>
  <?php
    }
  ?>
</div>

<!-- Footer -->
<footer class="container-fluid bg-4 text-center">
  <p>Bootstrap Theme Made By <a href="https://www.w3schools.com">www.w3schools.com</a></p>
</footer>

</body>
</html>
