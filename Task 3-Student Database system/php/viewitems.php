<?php
session_start();
$value = $_SESSION['varname'];
$user = 'root';
$password = '1234'; 
$database = 'studentdatabse'; 
$servername='localhost';
$mysqli = new mysqli($servername, $user, 
                $password, $database);
if ($mysqli->connect_error) {
    die('Connect Error (' . 
    $mysqli->connect_errno . ') '. 
    $mysqli->connect_error);
}
$sql = "SELECT regdno,stuname,percentile,english,maths,physics,chemistry,biology,socialstudies,grade,result FROM studentdetails WHERE Type='{$value}'";
$result = $mysqli->query($sql);
$mysqli->close(); 
?>
<!DOCTYPE html>
<html lang="en"> 
<head>
    <meta charset="UTF-8">
    <title>View Items</title>
    <style>
        body{
            background: url("https://s3-us-west-2.amazonaws.com/s.cdpn.io/38816/image-from-rawpixel-id-2044837-jpeg.jpg");
            background-size:cover;
        }
        table {
            margin: 0 auto;
            font-size: large;
            border: 2px;
            border-radius: 5px;
        }
  
        h1 {
            text-align: center;
            color: #0095ff;
            font-size: xx-large;
            font-family: 'Gill Sans', 'Gill Sans MT', 
            ' Calibri', 'Trebuchet MS', 'sans-serif';
        }
  
        td {
            background-color:#6ddcfd;
            border: 2px;
            border-radius: 5px;
        }
  
        th,
        td {
            border: 2px;
            border-radius: 5px;
            font-weight: bold;
            padding: 10px;
            text-align: center;
        }
  
        td {border: 2px;
            border-radius: 5px;
            font-weight: lighter;
        }
    </style>
</head>
  
<body>
    <section>
        <h1>Student Details</h1>
        <table>
            <tr>
                <th>Registration Number</th>
                <th>Student Name</th>
                <th>Percentile</th>
                <th>English</th>
                <th>Maths</th>
                <th>Physics</th>
                <th>Chemistry</th>
                <th>Biology</th>
                <th>Social Studies</th>
                <th>Grade</th>
                <th>Result</th>
            </tr>
            <?php 
                while($rows=$result->fetch_assoc())
                {
             ?>
            <tr>
                <td><?php echo $rows['regdno'];?></td>
                <td><?php echo $rows['stuname'];?></td>
                <td><?php echo $rows['percentile'];?></td>
                <td><?php echo $rows['english'];?></td>
                <td><?php echo $rows['maths'];?></td>
                <td><?php echo $rows['physics'];?></td>
                <td><?php echo $rows['chemistry'];?></td>
                <td><?php echo $rows['biology'];?></td>
                <td><?php echo $rows['socialstudies'];?></td>
                <td><?php echo $rows['grade'];?></td>
                <td><?php echo $rows['result'];?></td>
            </tr>
            <?php
                }
             ?>
        </table>
    </section>
</body>
</html>