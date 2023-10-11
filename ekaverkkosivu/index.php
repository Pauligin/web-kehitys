<?php
// PHP:n tarkoitus on siirtää dataa käyttäjältä palvelimelle
// ja palvelimelta käyttäjälle
// Lisäksi kaikenlainen datan käsittely.
// 

sleep(1);
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- form määrittää minne ja miten data (get/post) lähetetään -->
    <!-- Lisää formiin salasana input ja näytä se sivulla checkLogin -->
    <!-- Kokeile myös saada salasana piilotettua kuin sitä kirjoitetaan. -->
    <?php
    // Kirjoitetaan virhe ilmoitus, jos kirjautumisesssa oli virhe
    if(isset($_GET["error"])){  // Tarkistetaan onko avain (muuttuja) olemassa, ennen kuin sitä käytetään. 
        if($_GET["error"] == "login"){ // Saadaan virhe, jos "error"-avain ei ole olemassa
            echo "<p>Käyttäjätunnus ja salasana eivät täsmää! </p>";
        }
    } 
    ?>
     <form action="checkLogin.php" method="post"> 
        <input type="text" name="avain" placeholder="Enter Username">
        <input type="password" name="password" placeholder="Enter Password">
        <input type="submit" value="Login">
    </form>

</body>
</html>

