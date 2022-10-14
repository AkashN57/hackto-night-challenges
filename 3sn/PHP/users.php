<?php

function db_connect(){
    //Connection
    $connection = mysqli_connect('localhost','root','','bbh_db');

    if(mysqli_connect_errno()){
        die('Connection failed ! : '.mysqli_connect_error());
    }

    return $connection ;
}


function Browse_Items($Search_Item){
    $B_Items_Query = "SELECT * FROM `item` WHERE name = '{$Search_Item}'";
    $B_Items_Result = mysqli_query(db_connect(),$B_Items_Query);
    $B_Items_Rec_Count = mysqli_num_rows($B_Items_Result);

    echo $B_Items_Rec_Count ;
}



?>