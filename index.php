<?php

$angry = ['๐คฌ','๐ก','๐จ','๐ฟ','๐','โ ๏ธ','๐คฏ'];
$sad = ['๐จ','๐ช','๐ฅ','๐','๐ฉ','๐','๐ญ','๐ฅ',];
$happy = ['๐','๐','๐','โบ๏ธ','๐','๐','๐ฅ',];
$energy = ['๐คฉ','๐ป','๐','๐ค๐ป','๐ธ','๐','๐','๐คช','๐ป','๐ฅ','๐'];
$inlove = ['๐ฅบ','๐ฅฐ','๐','โค๏ธ','๐','๐',];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <title>Poetra</title>
</head>
<body>
<label class="switch">
<input type="checkbox">
  <span class="slider round" id="slidermain"></span>
</label>
<div class="wrapper">
<h1 class="title" id="text">POETRA</h1>
<h2 class="subtitle">แแแ แฉแแแ แแแแฏแ แ แแแแแแช แแฅแแแ แฎแแกแแแแก แแแแแกแแฎแกแแก</h2>
<div class="cont">
    <a href="#" onclick="angry()"><?php echo $angry[array_rand($angry)]; ?></a>

    <a href="#"id="em5" onclick="sad()"><?php echo $sad[array_rand($sad)]; ?></a>

    <a href="#" id="em4"onclick="happy()"><?php echo $happy[array_rand($happy)]; ?></a>

    <a href="#" id="em3" onclick="energy()"><?php echo $energy[array_rand($energy)]; ?></a>

    <a href="#" id="em1"onclick="love()"><?php echo $inlove[array_rand($inlove)]; ?></a>
    </div>
<iframe src="" width="300px" height="275" frameborder="0" allowtransparency="true"  id="embed"></iframe>

<h3 class="credits">Made by</h3>
<h3 class="credits2" ><a href="https://www.instagram.com/nikushasirbiladze_/">Nicolo</a> & <a href="https://www.instagram.com/n.khabela/">Nika</a></h3>
</div>
<script src="app.js"></script>
</body>
</html>