<?php

require("DBconnect.php");
$SQL = "SELECT * FROM photo";

echo "<h2>我的相簿</h2>";


if($result = mysqli_query($link,$SQL)){
    echo "<table border = '1' witdth = 20%>";
    while( $row = mysqli_fetch_assoc($result)){
        echo "<tr>";
        echo "<td>";
        echo "<a href = '/php4/".$row ['ppath']."'>";
        echo "<img src ='/php4/".$row['ppath']."' width = '80%'>";
        echo "</a>";
        echo "</br>";
        echo "</td>";
        echo "<td>";
        echo "<a href = 'update.php?pNo=".$row['pNo']."'>更改照片"."</a>";
        echo "</td>";
        echo "</tr>";
    }
    echo "</table>";
}
?>

