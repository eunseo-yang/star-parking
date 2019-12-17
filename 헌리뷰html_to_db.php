<?php

$con=mysqli_connect("localhost","root","1234","customers");
if(!$con){
   echo "<p>에러 : 데이터베이스를 찾을 수 없습니다. 다시 시도해주세요. </p>";
   exit();
}
$IDKey=2;
$rating=$_POST['rating'];
$rating2=$_POST['rating2'];
$rating3=$_POST['rating3'];
$rating4=$_POST['rating4'];
$review=$_POST['review'];

$parkingID=$_POST["parkingID_give"];
echo $parkingID;


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


?>
<script>
  alert("리뷰 작성이 완료되었습니다.");
  location.replace("../main.php");
</script>
