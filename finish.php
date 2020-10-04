<?php require_once('header.php') ?>

<?php
  $method = filter_input(INPUT_SERVER, 'REQUEST_METHOD');
  $_SESSION['step'] = 1;
?>
<section class='row'>
  <h2>Gratulujem!</h2>
  <p>Úspešne ste zvládli všetky úlohy.</p>
  <p>
    <a href="index.php" class="btn btn-large btn-success">
      Zopakujeme si to ešte?
    </a>
  </p>
</section>
<section class='row'>
  <div class='col-md-offset-3 col-lg-offsset-3 col-md-6 col-lg-6'>
    <img class='img-responsive' src='./imgs/joke.png' alt='Typical adult man reaction in real scenario' />
  </div>
  <div class="col-md-offset-2 col-lg-offsset-2 col-xs-12 col-sm-12 col-md-8 col-lg-8">
    <p>
      Zdroj:
      <a href="https://xkcd.com/2259/">xkcd (Networking Problems)</a>
    </p>
  </div>
</section>

<?php require_once('footer.php') ?>