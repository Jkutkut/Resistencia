<?php
    include("setup.php");
    $user = $_POST['user']; //Name of the user
    $img = $_POST['img']; //Img of the user
    $query = "INSERT INTO Imgs (img) VALUES('$img')";
    $db->exec($query) or die("Error adding the img :S"); //Store the img or fail


    $getImgId = 'SELECT imgId FROM Imgs WHERE img = $img';
    $imgId = $db->query($getImgId) or die("Error at getting the correct imgId"); //Get imgId once stored

    $imgIdToPlayers = 'UPDATE Players SET imgId = $getImgId WHERE name = $user';
    $db->exec($imgIdToPlayers) or die("Error at updating the table ");

    echo "Img stored and linked";
?>