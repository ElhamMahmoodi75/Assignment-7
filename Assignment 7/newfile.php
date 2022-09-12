<?php

$DBcon= new mysqli ('localhost','root','','crud');
//CRUD Queries
$newSQ='INSERT INTO teachers (first_name,last_name,email,depatment) VALUES ("Rohina","Behmanesh","Rohina@gmail.com","Database")';
//$newSQ='UPDATE teachers SET name="Jouya" WHERE id=3';
//$newSQ='DELETE Form teachers where id =1';
//$newSQ='SELECT * From teachers WHERE depatment="NetWork"';
//$newSQ='SELECT * From teachers';

$result=$DBcon->query($newSQ);
echo '<pre>';
var_dump($result);
// fetch To Show One Row
//$data=$result->fetch_assoc();
// Fetch All for all Rows
//$data =$result->fetch_all(1);

//var_dump($data);
?>
<table border="1">
<tr>
    <th>ID</th>
    <th>First_Name</th>
    <th>Last_Name</th>
    <th>Email</th>
    <th>Department</th>
</tr>
<tbody>
    <?php
foreach($data as $recode){
    echo '<tr> 
           <td>'. $recode['id'] .' </td>
           <td>'. $recode['first_name'].' </td>
           <td>'. $recode['last_name'].' </td>
           <td>'. $recode['email']. ' </td>
           <td>'. $recode['depatment'].' </td>
          </tr>';
}
?>
</tbody>

</table>