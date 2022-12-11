<?php


$students = [
    ['name' => 'Alaa', 'email' => 'ahmed@test.com', 'status' => 'Science'],
    ['name' => 'Shamy', 'email' => 'ali@test.com', 'status' => 'AAST'],
    ['name' => 'Youssef', 'email' => 'basem@test.com', 'status' => 'AAST'],
    ['name' => 'Waleid', 'email' => 'farouk@test.com', 'status' => 'Science'],
    ['name' => 'Rahma', 'email' => 'hany@test.com', 'status' => 'AAST'],
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Application name: PHP class regestration</h1>
    <table>
        <tr>
            <th >Name</th>
            <th>Email</th>
            <th>Status</th>
        </tr>
        <tr>
            <td><?php
            foreach($students as $key => $item) {
                if($students[$key]['status']=="Science"){
                    echo "<span style='color:red'>".$students[$key]['name']."</span><br>";
                }
                else{
                echo $students[$key]['name']."<br>";
            }
            }
            ?></td>
            <td><?php
            foreach($students as $key => $item) {
                if($students[$key]['status']=="Science"){
                    echo "<span style='color:red'>".$students[$key]['email']."</span><br>";
                }
                else{
                echo $students[$key]['email']."<br>";
            }
            }
            ?></td>
            <td><?php
            foreach($students as $key => $item) {
                if($students[$key]['status']=="Science"){
                    echo "<span style='color:red'>".$students[$key]['status']."</span><br>";
                }
                else{
                echo $students[$key]['status']."<br>";
            }
            }
            ?></td>
        </tr>    
    </table>
</body>
</html>