<!DOCTYPE html>
<?php 
  require_once './db_connect.php';
  $result = mysql_query('SELECT * FROM characters');
  function convertImageSource($imgData) {
    $base64 = base64_encode($imgData->getBody());
    $mime = 'image/png';
    return 'data:'.$mime.';base64,'.$base64;
  }
 ?>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>HoneyWorks徹底解説サイト</title>
    <meta name="keywords" content="bootstrap alternative, css framework, styleguide, pattern library">
    <meta name="description" content="A sassy, opinionated CSS Framework. A tiny alternative to Bootstrap.">

    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, maximum-scale=1.0">
    <meta name="apple-touch-fullscreen" content="yes">

    
  <link href="./dist/css/cutestrap.css" rel="stylesheet" />
  <link href="./docs/public/css/kss.css" rel="stylesheet" />

  </head>
  <body class="language-markup">

      <header>
  <h3>
    <a href="./index.php">HoneyWorks徹底解説サイト</a>
  </h3>
</header>



<h2>キャラ紹介</h2>
<?php 
while($row = mysql_fetch_assoc($result)){
  // echo '<img src="data:image/png'.base64_encode($row['icon']).'">');
  ?>
    <pre><h3><?php echo $row['name'] ?></h3></pre>
    <center><img src="data:image/png;base64,<?php echo base64_encode($row['icon'])?>" alt=""></center>
    <p><?php echo $row['description'] ?></p>
     <center><a href="./music.php?id=<?php echo $row['id'] ?>" class="btn"><?php echo $row['name'] ?>の曲を聴く</a></center><br>
  <?php
    }

 ?>

<script src="./docs/public/js/kss.js"></script>


  </body>
</html>
