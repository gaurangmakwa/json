<?php
    $json=file_get_contents("https://jsonplaceholder.typicode.com/users");
    $data= json_decode($json);

    echo "<table border='1'>";
    echo "<tr>";
        echo "<th>id</th>";
        echo "<th>name</th>";
        echo "<th>email</th>";
    echo "</tr>";
    foreach ($data as $odata){
        echo "<tr>";
            echo "<td>$odata->id</td>";
            echo "<td>$odata->name</td>";
            echo "<td>$odata->email</td>";
        echo "</tr>";
    }
    echo "</table>";
?>