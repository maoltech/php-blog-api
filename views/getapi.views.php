<?php

header('Access-control-Allow-Origin: *');
header('Content-Type: application/json');


//include_once '../core/initialize.php';
include_once '../controller/Get.controller.php';
include_once '../models/Dbh.models.php';

/*class getapi extends Get{

    public function readapi(){*/
    $database = new Dbh();
    $db = $database -> connectDb();

    $get = new Get($db);
    $result = $get->read();
      
      $num =$result->rowCount();
      if ($num > 0){
        $post_arr = array();
        $post_arr['blogs'] = array();

        while($row = $result->fetch(PDO::FETCH_ASSOC)){
            extract($row);
            $post_item = array(
                'id' => $id,
                'title' => $title,
                'author' => $author,
                'body' => $body
            );
            array_push($post_arr['blogs'], $post_item);
        }
        echo json_encode($post_arr);
    }else{
        echo "error 500";
    }  
/*    }

} 

$myinfo = new getapi;
$myinfo->readapi();
return $myinfo;*/

