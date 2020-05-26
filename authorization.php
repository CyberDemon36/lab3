<?php
session_start();
require "db.php";

$LOGIN = $_POST["login"];
$PASSWORD = $_POST["password"];
$SUBMIT = $_POST["submit"];

$mysqli = new mysqli ('localhost','root', '','user') or die(mysqli_error($mysqli));

$counter = 0;

if( isset($LOGIN) and isset($PASSWORD) ){
    $query = "SELECT * FROM users WHERE login='$LOGIN' and password='$PASSWORD'";
    $result = mysqli_query($connection, $query) or die(mysqli_error($connection));
    $count = mysqli_num_rows($result);

    if( $count = 1 ){
        $arr = mysqli_fetch_assoc($result);
        $_SESSION = $arr;
        

        if($arr["role"] == "1"){
            header("Location: roles/admin.php");
        }
        else if($arr["role"] == "2"){
            header("Location: roles/manager.php");
        }
        else if($arr["role"] == '3'){
            header("Location: roles/client.php");
        }
    }
    else {
        echo "Connection error!";
    }
}

// if(!empty($LOGIN)){
//     for($i = 0; $i<count($arr); $i++){ 

//         if(!($LOGIN == $arr[$i]["login"] and $PASSWORD == $arr[$i]["password"])) {
//             continue;
//         }
        
//         $_SESSION["id"] = $arr[$i]["id"];
//         $_SESSION["lang"] = $arr[$i]["lang"];
        
//         header("Location: roles/".strtolower($arr[$i]["role"]).".php");
//         $counter++;
//     }   
//     echo "Вы ввели неверные данные!";
// }

require "index.php";
?>