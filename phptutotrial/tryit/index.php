<?php 
// connect data to function file
require 'function.php';


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tdy it</title>
    <style>
        table, th, td{
            border: 1px solid black;
            border-collapse: collapse;
            padding: 5px;
        }
        
    </style>
</head>
<body>
    <h1>client data</h1>
    <table>
        <thead>
            <th>no</th>
            <th>name</th>
            <th>telephone number</th>
            <th>email</th>
            <th>note</th>
        </thead>
        <tbody>
        <tr>
            <td>1</td>
            <td>Akmal Keisin</td>
            <td>081772876685</td>
            <td>akmalkeisin@gmail.com</td>
            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda ipsa commodi delectus molestias exercitationem corporis adipisci unde, recusandae id quidem!</td>
        </tr>
        </tbody>
    </table>
</body>
</html>