<?php

    require("DBconnect.php");
    //$phototmpname = $_FILES["photo"]["tmp_name"];
    //echo $phototmpname

    $pathpart = pathinfo($_FILES['photo']['name']);
    $extname = $pathpart['extension'];
    //echo $extname;

    $finalphoto = "Photo_".time().".".$extname;
    //echo $finalphoto;

    $now = time();
    $SQL = "INSERT INTO photo(ppath, pdate) VALUE('$finalphoto','$now')";

    
    if(mysqli_query($link,$SQL)){
        echo "<script type='text/javascript'>";
        echo "alert('上傳成功');";
        echo "</script>";
        echo "<meta http-equiv='Refresh' content='0; url = photolist.php'>";
        //header('Location: list.php');
    }else{
        echo "<script type='text/javascript'>";
        echo "alert('上傳失敗');";
        echo "</script>";
        //echo "<meta http-equiv='Refresh' content='0; url = enroll.php'>";
    }
    if(copy($_FILES['photo']['tmp_name'],$finalphoto)){
        echo 'success';
    }else{
        echo 'false';
    }

?>