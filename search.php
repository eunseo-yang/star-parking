<html>
<head>
     <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
</head>
<body>
  <div class="wrapper" style="display: flex; flex-direction: column; padding: 2rem 5rem 2rem 5rem;">
<h1>인근 지역 주차장 리스트</h1>
<h4>인근 지역 평점이 높은 주차장을 확인해보세요! click 버튼을 누르면 리뷰를 볼 수 있습니다.</h4>

<div class="input-group col-xs-12">
            <?php

            $con=mysqli_connect("localhost","root","1234","customers");
            if(!$con){
            echo "<p>에러 : 데이터베이스를 찾을 수 없습니다. 다시 시도해주세요. </p>";
            exit();
            }
            $abcd=$_POST["plz"];
            $result=mysqli_query($con,"SELECT name,location, parkingID, parkingAverage FROM parking_information WHERE location LIKE '%$abcd%' ORDER BY parkingAverage DESC");


            if(mysqli_num_rows($result)==0){
                echo "<tr> 등록된 글이 없습니다.</tr>";
            }
            $resultArray=array();
            $resultArray2=array();
            $resultArray3=array();
            $resultArray4=array();

            while($row=mysqli_fetch_assoc($result)){
                $resultArray[]=$row["name"];
                $resultArray2[]=$row["location"];
                $resultArray3[]=$row["parkingAverage"];
                $resultArray4[]=$row["parkingID"];
            }

?>

  <?php
           $num=count($resultArray);
            for($i=0;$i<$num;$i++){
                ?>
                <div class="input-group col-xs-12">
                   <form action="showstar.php" method="post" style="margin-top:1rem; box-sizing:border-box; width:80%; height:fit-content; border: 1rem #f68657 solid; border-radius: 1rem; padding: 1rem;">
                    <p style="font-weight: bold;">주차장 이름 :<?php echo $resultArray[$i] ?></p>
                    <p style="font-weight: bold;">위치 : <?php echo $resultArray2[$i] ?> </p>
                    <p style="font-weight: bold;">평점 : <?php echo $resultArray3[$i] ?></p>
                    <input name="parkingID_give" value= <?php echo "$resultArray4[$i]" ?> type="hidden"/>
                      <button style="background-color: #f68657 color:#fff; border:none; border-radius:0.5rem;" type="submit"><i class="glyphicon glyphicon-search"></i> Click! </input>
                 </form>
                </div>

                <?php
            }


            mysqli_close($con);
            echo "<br><a href='main.php'>메인 화면으로</a>";

            ?>


</div>
</div>
</div>
<form action="main.php" method="post">
    <input type="submit" name="gtm" id="gotomain" value="메인 화면으로 가기" style="  background-color: #ff8b5b;
      color: #fff;
      border-radius: 1rem;
      position: fixed;
      top: 2rem;
      right: 3rem;
      border: none;
      padding: 1rem;
      font-size: 1rem;">

</form>
</body>
</html>
