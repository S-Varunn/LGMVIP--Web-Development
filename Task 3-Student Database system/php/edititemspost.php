<?php
$regdno = $_POST['regdno'];
$stuname =  $_POST['stuname'];
$percentile=$_POST['percentile'];
$english=$_POST['english'];
$maths=$_POST['maths'];
$physics=$_POST['physics'];
$chemistry=$_POST['chemistry'];
$biology=$_POST['biology'];
$socialstudies=$_POST['socialstudies'];
$grade=$_POST['grade'];
$result=$_POST['result'];
$type=$_POST['type'];
$user = 'root';
$password = '1234'; 
$database = 'studentdatabse'; 
$servername='localhost';
$mysqli = new mysqli($servername, $user, 
                $password, $database);
if ($mysqli->connect_error){
	die("Connection failed: ". $mysqli->connect_error);
}

$sql = "update studentdetails set stuname='$stuname', percentile='$percentile', type='$type',english='$english',maths='$maths',physics='$physics',chemistry='$chemistry',biology='$biology',socialstudies='$socialstudies',grade='$grade',result='$result' where regdno='$regdno' ";

if ($mysqli->query($sql) === TRUE) {
	echo "Records updated:".$stuname."-".$percentile."-".$type."-".$english."-".$maths."-".$physics."-".$chemistry."-".$biology."-".$socialstudies."-".$grade."-".$result;
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
  </html>"
;} else {
	echo "Error: ".$sql."<br>".$mysqli->error;
}

$mysqli->close();

?>