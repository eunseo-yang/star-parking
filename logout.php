<?php

     session_start();
     $res=session_destroy();
     if($res){
        header('Location: ./main삭제.php');
     }
 ?>
 <meta http-equiv="refresh" content="0,url=main삭제.php" />
