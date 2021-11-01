<?php require_once('header.php') ?>

<?php
  $method = filter_input(INPUT_SERVER, 'REQUEST_METHOD');
  $one = trim(filter_input(INPUT_POST, 'one'));
  $two = trim(filter_input(INPUT_POST, 'two'));
  $three = trim(filter_input(INPUT_POST, 'three'));
  $four = trim(filter_input(INPUT_POST, 'four'));
  $btn = filter_input(INPUT_POST, 'handshake');

  if ($_SESSION['step'] < 2) {
    header('Location: /index.php');
  }

  if ($method === 'POST') {
    if (isset($btn)) {
      if (($one === 0 && $two === 101 && $three === 101 && $four === 201) ||
        ($one === '0' && $two === '101' && $three === '101' && $four === '201')) {
        $_SESSION['step'] = 3;
        header('Location: /task3.php');
      }
    }
  }
?>

<h2>Three Way Handshake</h2>

<p>Namiesto #1 - #4 vyplňte správne hodnoty SEQ, ACK. Formulár nájdete na konci stránky.</p>
<p>Vypĺňajte absolútne hodnoty, nie relatívne (ktoré sa v skutočnosti prenášajú).</p>
<p>
  <a href="#answer-sheet" class="btn btn-large btn-danger">
    <?php echo $send ?>
  </a>
</p>

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

<div style='padding: 1em' id="answer-sheet">
  <p>
  <?php
    if (isset($btn) && ($one !== 0 || $two !== 101 || $three !== 101 && $four !== 201)) {
      echo $incorrect;
    }
  ?>
  </p>

  <form method='post' class='form-horizontal'>
    <div class='form-group'>
      <label for='one'>#1 (1. krok, ACK)</label>
      <input type='text' id='one' name='one' />
    </div>
    <div class='form-group'>
      <label for='two'>#2 (2. krok, ACK)</label>
      <input type='text' id='two' name='two' />
    </div>
    <div class='form-group'>
      <label for='three'>#3 (3. krok, SEQ)</label>
      <input type='text' id='three' name='three' />
    </div>
    <div class='form-group'>
      <label for='four'>#4 (3. krok, ACK)</label>
      <input type='text' id='four' name='four' />
    </div>
    <div class='form-group'>
      <button type='handshake' name='handshake' class='btn btn-large btn-danger'>
        <?php echo $send ?>
      </button>
    </div>
  </form>
</div>

<?php require_once('footer.php') ?>