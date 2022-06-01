<?php
$data = file_get_contents('music.json');
$dftr = json_decode($data, true);
$dftr = $dftr['daftar'];
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
  </head>
  <body>
    <div class="text">
      <div class="sign">
      <span class="fast-flicker">M</span>us<span class="flicker">i</span>c
    </div>
    </div>
    <br><br><br>
    <div class="container">
      <div class="row">
        <?php foreach ($dftr as $row) : ?>
        <div class="card mb-3 mx-auto" style="width: 18rem;">
  <img  src="../../img/<?= $row['jpg']; ?>" class="bk img" alt="...">
  <div class="card-body">
    <h2 class="card-title"><?= $row['title']; ?></h2>
  </div>
</div>
 <?php endforeach; ?>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>