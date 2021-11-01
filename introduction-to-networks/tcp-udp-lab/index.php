<?php require_once('header.php') ?>

<?php
  $method = filter_input(INPUT_SERVER, 'REQUEST_METHOD');
  $passphrase = trim(filter_input(INPUT_POST, 'passphrase'));
  $btn = filter_input(INPUT_POST, 'btn');
  $_SESSION['step'] = 1;

  if ($method === 'POST') {
    if ($passphrase === '11111111' || $passphrase === 11111111) {
      $_SESSION['step'] = 2;
      header('Location: /task2.php');
    }
  }
?>

<h2>Správa z nástroja Wireshark</h2>
<p>Použitie tajné heslo na prístup na server nachádzajúce sa v UDP správe.</p>

<?php
  if (isset($btn) && ($passphrase !== '11111111' && $passphrase !== 11111111)) {
    echo $incorrect;
  }
?>

<div style='padding: 1em'>
  <form method='post'>
    <div class='form-group'>
      <label for='passphrase'>Heslo</label>
      <input type='text' id='passphrase' name='passphrase' />
    </div>
    <div class='form-group'>
      <button type='submit' name='btn' class='btn btn-danger'>
        <?php echo $send ?>
      </button>
    </div>
  </form>
</div>

<?php require_once('footer.php') ?>