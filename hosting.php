<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
        <script type="text/javascript" src="calculator.js"></script>
        <link href="css/hosting.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>



<?php include 'header.php';?>



</div>

<div class="columns">
    <ul class="price">
        <li class="bronze-header">Brons</li>
        <li class="grey">€ 5,95 / maand</li>
        <li class="lgrey">10GB HDD</li>
        <li class="lgrey">512MB RAM</li>
        <li class="lgrey">1 Core</li>
        <li class="lgrey"> 100GB dataverkeer per maand</li>
        <li class="grey"><a id="brons" href="#" class="button" onclick="calc(this.id)">Bestel nu</a></li>
    </ul>
</div>

<div class="columns">
    <ul class="price">
        <li class="silver-header">Silver</li>
        <li class="grey">€ 7,95 / maand</li>
        <li class="lgrey">20GB HDD</li>
        <li class="lgrey">1024MB RAM</li>
        <li class="lgrey">2 Cores</li>
        <li class="lgrey">200GB dataverkeer per maand</li>
        <li class="grey"><a id="silver" href="#" class="button" onclick="calc(this.id)">Bestel nu</a></li>
    </ul>
</div>

<div class="columns">
    <ul class="price">
        <li class="gold-header">Goud</li>
        <li class="grey">€ 10,95 / maand</li>
        <li class="lgrey">50GB HDD</li>
        <li class="lgrey">2048MB RAM</li>
        <li class="lgrey">4 cores</li>
        <li class="lgrey">Onbeperkt dataverkeer per maand</li>
        <li class="grey"><a id="goud" class="button" onclick="calc(this.id)">Bestel nu</a></li>
    </ul>
</div>



</body>
</html>