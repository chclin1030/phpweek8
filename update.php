<?php

    require("DBconnect.php");
    $pNo = $_GET["pNo"];

    $SQL = "SELECT * FROM photo WHERE pNo = '$pNo'";
    if($result = mysqli_query($link,$SQL)){
        while( $row = mysqli_fetch_assoc($result)){
            $ppath = $row["ppath"];
        }
    }
?>

<h2>照片更改</h2>
    <form action = "updateconfirm.php" method = "post" enctype="multipart/form-data">
    <input type="hidden" name = "pNo" value='<?php echo $pNo;?>'> 
    
    <p><h3>原始照片：</h3></br> 
        <?php 
            echo "<a href = '/php4/".$ppath."'>";
            echo "<img src ='/php4/".$ppath."' width = '30%'>";
            echo "</a>";
        ?>
    </p>
    
    <h3>選擇想要更改的照片： </h3></br>

    <input type="file" name = "photo" accept = "image/*"></br>

    </br><input type="submit" value = "更改">

    </form>