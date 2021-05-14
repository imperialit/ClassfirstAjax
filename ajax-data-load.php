<?php

$conn = mysqli_connect("localhost","root","","school-data") or die("Connection Fialed");

$sql = "SELECT * FROM students";

$result = mysqli_query($conn, $sql) or die("Sql Query Fialed");

$output="";

if(mysqli_num_rows($result) > 0){

    $output = '<table>

    <tr>
    <th>ID : </th>
    <th>First Name : </th>
    <th>Last Name : </th>
    <th>School : </th>
    </tr>';

    while ($row = mysqli_fetch_assoc($result)) {
       $output .=
       "
       <tr>
            <td>{$row["id"]}</td>
            <td>{$row["fmname"]}</td>
            <td>{$row["fname"]}</td>
            <td>{$row["school"]}</td>
       </tr>";
    }

    $output .= "</table>";

    mysqli_close($conn);

    echo $output;

}

else{

    echo "<h2>Recod Not Founds!!!..</h2>";
}

?>