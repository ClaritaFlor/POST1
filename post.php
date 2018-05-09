<?php
if (isset($_POST["filas"]) && isset($_POST["columnas"])){
    $f = $_POST["filas"];
    $c = $_POST["columnas"];
    echo "<table border='2'>";
    echo "<th> Tabla * </th>";
    for ($i=1;$i<=$c;$i++){
        echo "<th> X".$i."</th>";   
    }
    for($i=1;$i<=$f;$i++){
            echo "<tr>";    
            echo "<td>";
            echo "<b>Tabla del ".$i."</b>";
            echo "</td>";
            for($j=1;$j<=$c;$j++){
                echo "<td>";
                echo $j*$i;
                echo "</td>";
            }
            echo "</tr>";
    }
    echo "</table>";
}
?>