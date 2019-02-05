<?php
    
    $dbname = 'kriskringle';
    $dbuser = 'root';
    $dbpass = 'root';
    $dbhost = 'localhost';

    $mysqli = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname) or die("Unable to Connect to '$dbhost'");
    
    if(!$mysqli){
        echo "connection error: " . mysqli_connect_error();
        die();
    }
    else{
        //$query = "SELECT * FROM preferences WHERE name ='". $name."';";
        $query = "SELECT * FROM preferences;";
        // $result = mysqli_query($mysqli, $query);
        $result = mysqli_query($mysqli, "select * from preferences;");
        //echo mysqli_error($mysqli);
        //var_dump($result);
        if($result){
            $arr = array();
            
            while($row = mysqli_fetch_assoc($result)){
                $myObj = new stdClass();
                //echo $row["name"] ." ". $row["pref1"] ." ".  $row["pref2"] ." ".  $row["pref3"];
                $myObj->name = $row["name"];
                $myObj->pref1 = $row["pref1"];
                $myObj->pref2 = $row["pref2"];
                $myObj->pref3 = $row["pref3"];
                array_push($arr, $myObj);
            }
        }
        echo json_encode($arr);
    }




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
