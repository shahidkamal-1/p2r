<?php

$search_value= $_POST["search"];

$conn=mysqli_connect("localhost",'root', '','crud') or die ("Connection Failed");
$sql="SELECT * FROM data_base WHERE name LIKE '%{$search_value}%' OR Email LIKE '%{$search_value}%'";
$result= mysqli_query($conn,$sql) or die ("sql Query failed");
$output="";
if(mysqli_num_rows($result) >0 ){
    $output =  "<table>

        <tr>
        <th>Sr</th>
        <th>Name</th>
        <th>Email</th>
        <th>Password</th>
        <th>Image</th>
        </tr>";

    while($row= mysqli_fetch_assoc($result)){
        $output.="<tr>
        <td>{$row['id']}</td>
        <td>{$row['name']}</td>
        <td>{$row['email']}</td>
        <td>{$row['password']}</td>
        <td><img src='images/{$row['image']}' width='15%' ></td>
        
        </tr>";

    }

$output.="</table>";

    mysqli_close($conn);
    echo $output;

}else{

    echo "<h2>No record Found</h2>";

}

?>
