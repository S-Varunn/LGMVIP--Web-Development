<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DELETE ITEMS</title>
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
        #btn{
            font-size:10px;
            background-color:#f0f0f0;
            padding:10px 24px;
            border-radius: 12px;
            transition-duration: 0.4s;
            display:block;
            margin:auto;
            text-decoration: none;
        }
        #btn:hover {
        background-color:#6ddcfd;
        box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
        color: black;
        }
    </style>
</head>
<body>
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
    session_start();
    $value = $_SESSION['varname'];
     $con=mysqli_connect('localhost','root','1234');
     mysqli_select_db($con,'studentdatabse');
     $sql="SELECT regdno,stuname,percentile,english,maths,physics,chemistry,biology,socialstudies,grade,result FROM studentdetails WHERE Type='{$value}'";
     $records=mysqli_query($con,$sql);
     while($row=mysqli_fetch_array($records))
     {
         echo "<tr>";
         echo "<td>".$row['regdno']."</td>";
         echo "<td>".$row['stuname']."</td>";
         echo "<td>".$row['percentile']."</td>";
         echo "<td>".$row['english']."</td>";
         echo "<td>".$row['maths']."</td>";
         echo "<td>".$row['physics']."</td>";
         echo "<td>".$row['chemistry']."</td>";
         echo "<td>".$row['biology']."</td>";
         echo "<td>".$row['socialstudies']."</td>";
         echo "<td>".$row['grade']."</td>";
         echo "<td>".$row['result']."</td>";
         echo "<td><a href=delete.php?id=".$row['regdno'].">Delete</a></td>";
     }
     ?>
</table>
<br><br>
<a href="../../../LGM-Student-Dbms/index.html" style="text-decoration:none;">  
    <button id="btn">Go Back</button>  
  </a>
</body>
</html>