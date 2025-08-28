<?php 

if (session_status() == PHP_SESSION_NONE) { //<<<<I was encountering an issue, where i had '2 session starts' going on at once. i deleted one of em; and implemented this code, that should check if a session has started already, and if not, it starts it, and if it has, it doesnt try again in doing it (causing an error; that made me come here and remove it and fix this in here to fix that error; and now thanks to this code; there is no more error) NOTE:> THIS IS SUPPOSED TO BE PUT HERE "BEFORE" THE "REQUIRED" THANG!
    session_start();
}


$conn = mysqli_connect("localhost", "u598780118_Scholahh", "UminionNewsIsOnAt8pmMST!WOOHOO!!!", "u598780118_Uminion"); //<<<this is the connection to your localhost (mysql) with username and pw and which database to reach into =) 
