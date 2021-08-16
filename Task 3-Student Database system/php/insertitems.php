<?php
		include 'db_connection.php';
        $conn = mysqli_connect("localhost", "root", "1234", "studentdatabse");
        if($conn === false){
            die("ERROR: Could not connect. " 
                . mysqli_connect_error());
        }
        $regdno = $_REQUEST['regdno'];
        $stuname =  $_REQUEST['stuname'];
        $percentile=$_REQUEST['percentile'];
        $english=$_REQUEST['english'];
        $maths=$_REQUEST['maths'];
        $physics=$_REQUEST['physics'];
        $chemistry=$_REQUEST['chemistry'];
        $biology=$_REQUEST['biology'];
        $socialstudies=$_REQUEST['socialstudies'];
        $grade=$_REQUEST['grade'];
        $result=$_REQUEST['result'];
        $type=$_REQUEST['type'];
        $sql = "INSERT INTO studentdetails(regdno,stuname,percentile,english,maths,physics,chemistry,biology,socialstudies,grade,result,type)  VALUES ( 
            '$regdno','$stuname','$percentile','$english','$maths','$physics','$chemistry','$biology','$socialstudies','$grade','$result','$type')";
            if(mysqli_query($conn, $sql)){
                echo "<h3>data stored in a database successfully.<h3>"; 
      
                echo nl2br("$regdno\n$stuname\n$percentile\n$english\n$maths\n$physics\n$chemistry\n$biology\n$socialstudies\n$grade\n$result\n$type");
                echo
                "<html>
                <body>
                <button id='myBtn'>Go back</button>
              <script>
                var btn = document.getElementById('myBtn');
                btn.addEventListener('click', function() {
                  document.location.href = '../../LGM-Student-Dbms/index.html';
                });
              </script>
              </body>
              </html>";
            } else{
                echo "ERROR: Hush! Sorry $sql. " 
                    . mysqli_error($conn);
            }
            mysqli_close($conn);
        ?>
