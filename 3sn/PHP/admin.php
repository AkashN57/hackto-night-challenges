<?php
function setdbcon(){
    //$d=$_REQUEST["n1"];
    $server="localhost";
    $user="root";
    $pw="";
    $db="BBH_DB";


   //create connection
   $conn= new mysqli($server,$user,$pw,$db);
   //(or mysqli_connect(....))
   //check_connection

   if($conn->connect_error){
    die("Connection fail: ".$conn->connect_error);
    return 0;
   }
    else{
   echo("success");
   return 1;
   }
 
}

function insql(){
    if(setdbcon()==1){
        // $d=$_REQUEST["description"]; 
        // $q=$_REQUEST["quantity"]; 
        // $p=$_REQUEST["price"]; 
        // $i=$_REQUEST["image"]; 
        // $d=$_REQUEST["n1"];  
       //create connection
        $conn= new mysqli("localhost","root","","BBH_DB");
        $sql="INSERT INTO item(price,category,sell_quantity) VALUES(100,'abvx',50)";
        if($conn->query($sql)==true){
        echo ("Query success");}
        else{
            echo ("Query Failed");}
    }
}
function upsql(){
    if(setdbcon()==1){
        // $d=$_REQUEST["description"]; 
        // $q=$_REQUEST["quantity"]; 
        // $p=$_REQUEST["price"]; 
        // $i=$_REQUEST["image"]; 
        // $c=$_REQUEST["category"];  
        // $s=$_REQUEST["sell_quantity"]; 
        //  $itd=$_REQUEST["item_id"]; 
       //create connection
        $conn= new mysqli("localhost","root","","BBH_DB");
        $sql="UPDATE item SET description=$d,quantity=$q,price=$p,image=$i,category=$c,sell_quantity=$s WHERE item_id=$id";
        if($conn->query($sql)==true){
        echo ("Query success");}
        else{
            echo ("Query Failed");}
    }
}
function dlsql(){
    if(setdbcon()==1){
        // $d=$_REQUEST["description"]; 
        // $q=$_REQUEST["quantity"]; 
        // $p=$_REQUEST["price"]; 
        // $i=$_REQUEST["image"]; 
        // $d=$_REQUEST["n1"];  
        $itmid=REQUEST[" "]; 
       //create connection
        $conn= new mysqli("localhost","root","","BBH_DB");
        $sql="DELETE FROM item WHERE item_id=$;
        if($conn->query($sql)==true){
        echo ("Query success");}
        else{
            echo ("Query Failed");}
    }
}





insql();





