<?php
    
    $dbname = 'kriskringle';
    $dbuser = 'root';
    $dbpass = 'root';
    $dbhost = 'localhost';

    $link = mysqli_connect($dbhost, $dbuser, $dbpass) or die("Unable to Connect to '$dbhost'");
    mysqli_select_db($link, $dbname) or die("Could not open the db '$dbname'");


    //var_dump($_GET["name"]);
    //$name = $_GET["name"];
    //$name = $_POST["name"];
    //$name = "dale";
    // $db_host = "127.0.0.1";
    // $db_user = "root";
    // $db_pass = "root";
    // $db_name = "kriskringle";
    //echo "test1!";
    //mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    // $mysqli = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
    //$connect = mysqli_connect("127.0.0.1", "root", "root", "mysql");
    //echo "test1!";
    //var_dump($mysqli);
    
//     if(!$mysqli){
//         echo "connection error: " . mysqli_connect_error();
//         die();
//     }
//     else{
//         echo "success!";
//         //$query = "SELECT * FROM preferences WHERE name ='". $name."';";
//         $query = "SELECT * FROM preferences;";
//         $result = mysqli_query($mysqli, $query);
//         if($result){
//             //echo $result["name"];
//             $arr = array();
            
//             while($row = mysqli_fetch_assoc($result)){
//                 $myObj = new stdClass();
//                 //echo $row["name"] ." ". $row["pref1"] ." ".  $row["pref2"] ." ".  $row["pref3"];
//                 $myObj->name = $row["name"];
//                 $myObj->pref1 = $row["pref1"];
//                 $myObj->pref2 = $row["pref2"];
//                 $myObj->pref3 = $row["pref3"];
//                 array_push($arr, $myObj);
//             }
//         }
//         echo json_encode($arr);
//     }




//     // $mysqli = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

//     // if(!$mysqli){
//     //     echo "connection error: " . mysqli_connect_error();
//     //     die();
//     // }
//     // else{
//     //     if(isset($_POST["give-prefs"])){
//     //         //block cross-site scripting, html entities(apersand etc), trim white space
//     //         $pref1 =  htmlentities(strip_tags(trim($_POST["pref1"])));
//     //         $pref2 =  htmlentities(strip_tags(trim($_POST["pref2"])));
//     //         $pref3 =  htmlentities(strip_tags(trim($_POST["pref3"])));
    
//     //         //block sql injections
//     //         $pref1 = mysqli_real_escape_string($mysqli, $_POST["pref1"]);
//     //         $pref2 = mysqli_real_escape_string($mysqli, $_POST["pref2"]);
//     //         $pref3 = mysqli_real_escape_string($mysqli, $_POST["pref3"]);
    
//     //         //$name = $_POST["name"];
//     //         //build the database query
//     //         $query   = "UPDATE preferences 
//     //                     SET pref1 = '".$pref1."',
//     //                         pref2 = '".$pref2."',
//     //                         pref3 = '".$pref3."'
//     //                     WHERE name = '".$_POST['name']."';";
//     //         //echo $query;
//     //         $result = mysqli_query($mysqli, $query);
//     //         header("Location: http://www.polishcampout.com:3000/Main/");
//     //         die();

//     //         //$num_rows = mysqli_affected_rows($mysqli);
//     //     }
//     // }

?>
