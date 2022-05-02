<?php

    require("DBconnect.php");
    $pNo = $_POST["pNo"];

    $pathpart = pathinfo($_FILES['photo']['name']);
    $extname = $pathpart['extension'];
    $finalphoto = "Photo_".time().".".$extname;
    $now = time();

    $SQL = "UPDATE photo SET pNo = '$pNo', ppath = '$finalphoto', pdate = '$now' WHERE pNo = '$pNo'";

    if(mysqli_query($link,$SQL)){
        echo "<script type='text/javascript'>";
        echo "alert('更新成功');";
        echo "</script>";
        echo "<meta http-equiv='Refresh' content='0; url = photolist.php'>";
    }else{
        echo "<script type='text/javascript'>";
        echo "alert('更新失敗');";
        echo "</script>";
        echo "<meta http-equiv='Refresh' content='0; url = photolist.php'>";
    }

    if(copy($_FILES['photo']['tmp_name'],$finalphoto)){
        echo 'success';
    }else{
        echo 'false';
    }

?>