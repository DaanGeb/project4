<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <title>Contact</title>
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="contact.css">




</head>
<body>


<?php include 'header.php';?>

<div class="content">
<div class="container">
<div style="text-align:center">
    <h2>Neem contact met ons op</h2>
    <p>Kom langs voor een kopje koffie, of laat een bericht achter:</p>
</div>
    <div class="row">
    <div class="column">
        <img url="/https://www.w3schools.com/w3images/map.jpg" style="width:100%">
    </div>
    <div class="column">
        <form action="/action_page.php">
            <label for="fname">Naam</label>
            <input type="text" id="fname" name="firstname" placeholder="Je naam..">
            <label for="lname">Achternaam</label>
            <input type="text" id="lname" name="lastname" placeholder="Je achternaam..">
            <label for="country">Land</label>
            <select id="country" name="country">
                <option value="australia">Nederland</option>
                <option value="canada">België</option>
            </select>
            <label for="subject">Onderwerp</label>
            <textarea id="subject" name="subject" placeholder="Schrijf iets.." style="height:170px"></textarea>
            <input type="submit" value="Submit"><br><br>
            <li>Colicss</li>
            <li>Herenstraat 24</li>
            <li>7776 AG, Slagharen</li>
            <li>06-12412498</li>
            <li>KVK: 05076893</li>
        </form>
    </div>
</div>
</div>
</div>




</body>
</html>