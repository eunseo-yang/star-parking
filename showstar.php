<html>
<head>
<link rel="stylesheet" href="./showstar.css?after">
</head>
<body>
  <!-- <script type="text/javascript"> -->

  <form action="review_again2.php" method="post">
      <input type="submit" name="bt" id="newreview" value="새로운 리뷰 등록하기">


  <?php
  $parkingID_get=$_POST["parkingID_give"];
  $con=mysqli_connect("localhost","root","1234","customers");
  if(!$con){
     echo "<p>에러 : 데이터베이스를 찾을 수 없습니다. 다시 시도해주세요. </p>";
     exit();
  }
  $result=mysqli_query($con,"SELECT AVG(parkingDifficulty), AVG(parkingCostSati),
  AVG(parkingPlaceSati), AVG(parkingCleanliness) from parking_review WHERE parkingID=$parkingID_get");
  while($row=mysqli_fetch_assoc($result)){
     $diffAvg = round($row['AVG(parkingDifficulty)'],2);
     $costAvg =  round($row['AVG(parkingCostSati)'],2);
     $placeAvg =round($row['AVG(parkingPlaceSati)'],2);
      $cleanAvg =  round($row['AVG(parkingCleanliness)'],2);
     // echo $row['parkingReview'];
     // echo $row['parkingID'];
   }
$result2=mysqli_query($con, "SELECT * FROM parking_information WHERE parkingID=$parkingID_get");
while($row=mysqli_fetch_assoc($result2)){
   $parkingID=$row['parkingID'];
   $name=$row['name'];
   $location=$row['location'];
   $locationX=$row['locationX'];
   $locationY=$row['locationY'];
   $amount=$row['amount'];
   $startTime_weekday=$row['startTime_weekday'];
   $endTime_weekday=$row['endTime_weekday'];
   $startTime_sat=$row['startTime_sat'];
   $endTime_sat=$row['endTime_sat'];
   $basisUnitTime=$row['basisUnitTime'];
   $basisCost=$row['basisCost'];
   $addUnitTime=$row['addUnitTime'];
   $addCost=$row['addCost'];
   $parkingAverage=$row['parkingAverage'];
 }
 $result3=mysqli_query($con,"SELECT * from parking_review WHERE parkingID=$parkingID_get");
 $parkingDA=array();
 $parkingCA=array();
 $parkingCSA=array();
 $parkingPA=array();
 $parkingRA=array();
 while($row=mysqli_fetch_array($result3)){
     $parkingDA[]=$row['parkingDifficulty'];
     $parkingCA[]=$row['parkingCleanliness'];
     $parkingCSA[]=$row['parkingCostSati'];
     $parkingPA[]=$row['parkingPlaceSati'];
     $parkingRA[]=$row['parkingReview'];
 }
 $result4=mysqli_query($con,"SELECT COUNT(*) FROM parking_review WHERE parkingID=$parkingID_get");
 while($row=mysqli_fetch_array($result4)){
   $countp=$row['COUNT(*)'];
 }
  ?>

    <!-- <form class="review-get" action="review_get.php" method="POST"> -->
    <div class="container">
        <div class="inner">
            <img width="50%" height="30%" src="./logo.svg">
            <br>주차장이름: <?php echo $name ?></br>
            <br> 위치: <?php echo $location ?></br>
            <br> 주차 가능 대수: <?php echo $amount ?></br>
            <br> 운영시간 </br>
            <br> 평일: <?php echo $startTime_weekday ?>시~<?php echo $endTime_weekday ?>시 </br>
            <br> 토요일: <?php echo $startTime_sat ?>시~<?php echo $endTime_sat ?>시 </br>
            <br> 기본 단위 시간: <?php echo $basisUnitTime ?></br>
            <br> 기본 단위 요금: <?php echo $basisCost ?></br>
            <br> 추가 단위 시간 : <?php echo $addUnitTime ?></br>
            <br> 추가 단위 요금: <?php echo $addCost ?></br>
            </div>
    </div>


    <div class="container">
        <div class="inner">
            <a>주차장 평균 별점</a>
            <div class="rating">
                <span class="rating-num"> <?php echo round($parkingAverage,2); ?> </span>
                      <div class="rating-stars">
                <?php
                $num=round($parkingAverage);
                for($i=1; $i<=$num;$i++){
                  echo '<span><i class="active icon-star"></i></span>';
                }
                for($i=1; $i<=(5-$num); $i++){
                  echo '<span><i class="icon-star"></i></span>';
                }
                 ?>

                </div>
                <div class="rating-users">
                    <i class="icon-user"></i> <?php echo $countp;?> 명의 사용자가 리뷰를 남겼습니다.
                </div>
            </div>


            </div>
        </div>



  <div class="container">
                <div class="inner">
                    <a>주차난이도</a>
                    <div class="rating">
                        <span class="rating-num"> <?php echo $diffAvg; ?> </span>


                        <div class="rating-stars">
                          <?php
                          $num=round($diffAvg);
                          for($i=1; $i<=$num;$i++){
                            echo '<span><i class="active icon-star"></i></span>';
                          }
                          for($i=1; $i<=(5-$num); $i++){
                            echo '<span><i class="icon-star"></i></span>';
                          }
                           ?>
                        </div>

                    </div>


                    </div>


        <div class="inner">
            <a> 주차장 위치만족도</a>
            <div class="rating">
                <span class="rating-num"><?php echo $placeAvg; ?></span>
                <div class="rating-stars">
                  <?php
                  $num=round($placeAvg);
                  for($i=1; $i<=$num;$i++){
                    echo '<span><i class="active icon-star"></i></span>';
                  }
                  for($i=1; $i<=(5-$num); $i++){
                    echo '<span><i class="icon-star"></i></span>';
                  }
                   ?>
                </div>
            </div>
          </div>

        <div class="inner">
            <a> 주차장 청결도</a>
            <div class="rating">
                <span class="rating-num"><?php echo $cleanAvg; ?></span>
                <div class="rating-stars">
                  <?php
                  $num=round($cleanAvg);
                  for($i=1; $i<=$num;$i++){
                    echo '<span><i class="active icon-star"></i></span>';
                  }
                  for($i=1; $i<=(5-$num); $i++){
                    echo '<span><i class="icon-star"></i></span>';
                  }
                   ?>
                </div>
            </div>
        </div>

        <div class="inner">
            <a> 주차장 요금 만족도</a>
            <div class="rating">
                <span class="rating-num"><?php echo $costAvg; ?></span>
                <div class="rating-stars">
                  <?php
                  $num=round($costAvg);
                  for($i=1; $i<=$num;$i++){
                    echo '<span><i class="active icon-star"></i></span>';
                  }
                  for($i=1; $i<=(5-$num); $i++){
                    echo '<span><i class="icon-star"></i></span>';
                  }
                   ?>
                </div>
            </div>
        </div>
</div>
</div>
<input name="parkingID_ss" value=<?php echo "$parkingID_get" ?>  type="hidden">

    <?php
    $num=count($parkingDA);
    for($i=0;$i<$num;$i++){
            echo '  <div class="container">';
                echo '  <div class="inner">';
                      echo '<div class="rating">';
                      echo '    <span class="rating-num"> <?php echo $diffAvg; ?> </span>';
                                  echo "주차 난이도 : $parkingDA[$i]\n  <br>";
                                  echo "주차 쾌적도 : $parkingCA[$i]\n  <br>";
                                  echo "주차 요금 만족도 : $parkingCSA[$i]\n <br>" ;
                                  echo "주차 공간 만족도 : $parkingPA[$i]\n <br>";
                                  echo "주차 리뷰 : $parkingRA[$i]\n  <br>";
                    echo '</div>';
                  echo '    </div>';
                echo '  </div>';
            }
                ?>
  </form>

  <form action="main.php" method="post">
      <input type="submit" name="gtm" id="gotomain" value="메인 화면으로 가기" style="  background-color: #ff8b5b;
        color: #fff;
        border-radius: 1rem;
        position: fixed;
        top: 6rem;
        right: 3rem;
        border: none;
        padding: 1rem;
        font-size: 1rem;">

  </form>
  <!-- </form> -->
 </script>
    </body>
</html>
