<?php
    include("setup.php");
    $user = $_POST['user']; //Name of the user
    $img = $_POST['img']; //Img of the user
    $addImg = "INSERT INTO Imgs (img) VALUES('$img')";
    $db->exec($addImg) or die("Error adding the img :S"); //Store the img or fail

    //Get imgId once it is stored
    $getImgId = 'SELECT imgId FROM Imgs WHERE imgId = (SELECT MAX(imgId) FROM Imgs)';;
    $imgId = intval($db->query($getImgId)) or die("Error at getting the correct imgId");

    //Set an id reference on the Players table
    $imgIdToPlayers = 'UPDATE Players SET imgId = ' . $imgId . ' WHERE name = \'' . $user . '\'';
    $db->exec($imgIdToPlayers) or die("Error at updating the table");

    echo "Img stored and linked";
?>