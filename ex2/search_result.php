<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search_result</title>
</head>
<body>
        <table>
            <tr>
                <th>user</th>
                <th>email</th>
                <th>create_time</th>
            </tr>   
                <?php
                include "search.php";
                
                if (empty($result)) {
                    echo "<div><p>There were no result!</p></div>";
                }else{
                    foreach($result as $row){
                        // echo "<tr>";
                        // echo "<td>" . $row["username"] . "</td>"; 
                        // echo "<td>" . $row["email"] . "</td>";
                        // echo "<td>" . $row["created_at"] . "</td>";
                        // echo "</tr>";
                        echo "<tr>";
                        echo "<td>" . htmlspecialchars($row["username"]) . "</td>";
                        echo "<td>" . htmlspecialchars($row["email"]) . "</td>";
                        echo "<td>" . htmlspecialchars($row["created_at"]) . "</td>";
                        echo "</tr>";
                    }
                }
                ?>
            
        </table>
</body>
</html>