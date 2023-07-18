<?php
    /*Le code Affiche Bonjour John ! il y a 40 messages dans votre boite de réception */ 
    /*John possède 28 messages non lus et 12 messages lus */
    
    $login = 'John';
    $messageCount = 0;
    $unreadMessagesCount = 28;
    $readMessageCount = 12;
    $messageCount += $unreadMessagesCount;
    $messageCount += $readMessageCount;
    echo 'Bonjour '.$login." ! Il y a ".$messageCount.' messages dans votre boîte de réception !';