<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cloud Pakketten</title>
    <script type="text/javascript" src="calculatorcloud.js"></script>
    <link href="css/hosting.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>



<?php include 'header.php';?>




<div class="columns">
    <ul class="price">
        <li class="yellow-header">Geel</li>
        <li class="grey">€ 4 / maand</li>
        <li class="lgrey">10GB Opslag</li>
        <li class="grey"><a id="geel" href="#" class="button" onclick="calc(this.id)">Bestel nu</a></li>
    </ul>
</div>

<div class="columns">
    <ul class="price">
        <li class="orange-header">Oranje</li>
        <li class="grey">€ 6 / maand</li>
        <li class="lgrey">100GB Opslag</li>
        <li id="oranje" class="grey"><a href="#" class="button" onclick="calc(this.id)">Bestel nu</a></li>
    </ul>
</div>

<div class="columns">
    <ul class="price">
        <li class="green-header">Groen</li>
        <li class="grey">€ 10 / maand</li>
        <li class="lgrey">1TB HDD</li>
        <li id="groen" class="grey"><a href="#" class="button" onclick="calc(this.id)">Bestel nu</a></li>
    </ul>
</div>





</body>
</html>