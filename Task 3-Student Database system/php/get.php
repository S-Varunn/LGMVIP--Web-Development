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
<html>
<head>
    <style type='text/css'>
        body {
            background: url("https://s3-us-west-2.amazonaws.com/s.cdpn.io/38816/image-from-rawpixel-id-2044837-jpeg.jpg") center center no-repeat;
            background-size: cover;
          }
        .ads{
            font: 95% Arial, Helvetica, sans-serif;
            width: 300px;
            position:absolute;
            top:100px;
            right:200px;
            margin: 10px auto;
            padding: 16px;
            background: #f7f7f7;
        }
        .ads h1{
            background: #83ecfc;
            padding: 20px 0;
            font-size: 140%;
            font-weight: 300;
            text-align: center;
            color: #fff;
            margin: -16px -16px 16px -16px;
        }
        .ads input[type='text'],
        .ads input[type='date'],
        .ads input[type='datetime'],
        .ads input[type='email'],
        .ads input[type='number'],
        .ads input[type='search'],
        .ads input[type='time'],
        .ads input[type='url'],
        .ads textarea,
        .ads select 
        {
            -webkit-transition: all 0.30s ease-in-out;
            transition: all 0.30s ease-in-out;
            -moz-transition: all 0.30s ease-in-out;
            -ms-transition: all 0.30s ease-in-out;
            -o-transition: all 0.30s ease-in-out;
            outline: none;
            box-sizing: border-box;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            width: 100%;
            background: #fff;
            margin-bottom: 4%;
            border: 1px solid #ccc;
            padding: 3%;
            color: #555;
            font: 95% Arial, Helvetica, sans-serif;
        }
        .ads input[type='text']:focus,
        .ads input[type='date']:focus,
        .ads input[type='datetime']:focus,
        .ads input[type='email']:focus,
        .ads input[type='number']:focus,
        .ads input[type='search']:focus,
        .ads input[type='time']:focus,
        .ads input[type='url']:focus,
        .ads textarea:focus,
        .ads select:focus
        {
            box-shadow: 0 0 5px #74dff7;
            padding: 3%;
            border: 1px solid #74dff7;
        }
        
        .ads input[type='submit'],
        .ads input[type='button']{
            box-sizing: border-box;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            width: 100%;
            padding: 3%;
            background: #83ecfc;
            border-bottom: 2px solid #74dff7;
            border-top-style: none;
            border-right-style: none;
            border-left-style: none;	
            color: #fff;
        }
        .ads input[type='submit']:hover,
        .ads input[type='button']:hover{
            background: #2EBC99;
        }
        table {
            margin: 0 auto;
            font-size: large;
            width:15px;
            float:left;
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
<div class="ads">
<h1>EDIT</h1>
<form action='edititems.php' method='post'>
<input type='text' name='regdno' value='enter registration number'><br>
<input type ='submit'>
</div>
</form>
</body>
</html>