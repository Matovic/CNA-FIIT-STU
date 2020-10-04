<?php session_start(); ?>
<!DOCTYPE html>
<html lang="sk">
<head>
  <title>TCP, UDP Lab</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="assets/style.css">
  <link rel="icon" href="imgs/cisco.png">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>

<?php $incorrect = '<p class="text-danger">Nesprávne riešenie!</p>'; ?>
<?php $send = 'Odpovedať'; ?>

<div class="container-fluid bg-1 text-center">
  <h1 class="margin">TCP, UDP Lab</h1>