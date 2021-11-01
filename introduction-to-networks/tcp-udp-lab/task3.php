<?php require_once('header.php') ?>

<?php
  $method = filter_input(INPUT_SERVER, 'REQUEST_METHOD');
  $protocol = trim(filter_input(INPUT_POST, 'protocol'));
  $btn = filter_input(INPUT_POST, 'last');

  if ($method === 'POST') {
    if (isset($btn)) {
      if (strtolower($protocol) === 'tcp') {
        $_SESSION['step'] = 4;
        header('Location: /finish.php');
      }
    }
  }
?>

<h2>Protokol transportnej vrstvy</h2>
<p>Ktorý protokol 4. vrstvy prenáša správy medzi webovým prehliadačom a webovým serverom?</p>

<?php
  if (isset($btn) && $protocol !== 'tcp') {
    echo $incorrect;
  }
?>

<div style='padding: 1em'>
  <form method='post'>
    <div class='form-group'>
      <label for='protocol'>Názov protokolu</label>
      <input type='text' id='protocol' name='protocol' />
    </div>
    <div class='form-group'>
      <button type='submit' name='last' class='btn btn-large btn-danger'>
        <?php echo $send ?>
      </button>
    </div>
  </form>
</div>

<?php require_once('footer.php') ?>