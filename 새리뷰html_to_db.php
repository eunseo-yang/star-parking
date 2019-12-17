<?php

// $parkingID=16;
$IDKey=2;
$name=$_POST['name'];
$address=$_POST['address'];
$locationX=$_POST['locationX'];
$locationY=$_POST['locationY'];
$amount=$_POST['amount'];
$rating=$_POST['rating'];
$rating2=$_POST['rating2'];
$rating3=$_POST['rating3'];
$rating4=$_POST['rating4'];
$review=$_POST['review'];

$con=mysqli_connect("localhost","root","1234","customers");
if(!$con){
   echo "<p>에러 : 데이터베이스를 찾을 수 없습니다. 다시 시도해주세요. </p>";
   exit();
}


mysqli_query($con,"INSERT INTO parking_information(name, location, locationX, locationY, amount) VALUES ('$name', '$address', '$locationX', '$locationY','$amount')");
$resultt=mysqli_query($con,"SELECT parkingID FROM parking_information WHERE name='$name'");
while($row=mysqli_fetch_array($resultt)){
  $parkingID=$row['parkingID'];
}
mysqli_query($con,"INSERT INTO parking_review(parkingDifficulty, parkingCleanliness, parkingCostSati,parkingPlaceSati, parkingReview, IDKey, parkingID) VALUES ('$rating','$rating2','$rating3','$rating4','$review', '$IDKey','$parkingID')");
mysqli_query($con,"UPDATE parking_information A
INNER JOIN
(
SELECT parkingID, (AVG(parkingDifficulty) + AVG(parkingCostSati) +AVG(parkingCleanliness)+ AVG(parkingPlaceSati))/4 'aver'
FROM parking_review GROUP BY parkingID) B
ON A.parkingID=B.parkingID
SET A.parkingAverage=B.aver;");
mysqli_close($con);
// print "<BR> <A HREF='main.html'> 메인 화면으로 </A>"
$HTTP_REFERER=$_SERVER['HTTP_REFERER'];
header('location:'.$HTTP_REFERER);

?>
