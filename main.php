<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
<meta name="description" content=""/>
<title>별별주차장</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link href="./main.css" rel="stylesheet"/>
<script src="./main.js" type="text/javascript"></script>
<script src="http://maps.google.com/maps/api/js?key=AIzaSyCUDH4nV0fOKBbRG_fQ3pnM7Hx6WQeaa6Q" type="text/javascript"></script>

</head>
<body>
<!---상단 navigation--->
<div class="slide" id="slide5" data-slide="5" data-stellar-background-ratio="0.5">
	<div class="container clearfix">
		<div class="content grid_2 contactype active" id="contact-mapClick">
			<div class="icon-map">
			</div>
			<p>
				메인
			</p>
		</div>
		<div class="content grid_2 contactype" id="contact-carClick">
			<div class="icon-car">
			</div>
			<p>
				리뷰등록
			</p>
		</div>
		<div class="content grid_2 contactype" id="contact-busClick">
			<div class="icon-bus">
			</div>
			<p>
				근처 주차장
			</p>
		</div>
		<div class="content grid_2 contactype" id="contact-bikeClick">
			<div class="icon-bike-2">
			</div>
			<p>
				로그인
			</p>
		</div>
		<div class="content grid_2 contactype" id="contact-phoneClick">
			<div class="icon-phone">
			</div>
			<p>
				회원가입
			</p>
		</div>
		<div class="content grid_2 contactype omega" id="contact-mailClick">
			<div class="icon-mail">
			</div>
			<p>
				문의사항
			</p>
		</div>
		<div class="content grid_12 contactmap" id="contact-map">
			<div class="grid_4">
				<h2>별별주차장</h2>
				<p class="information">
					<span class="icon-location"> 원하는 주차장의 별점을 확인해 보세요</span>
					<p class="information">
						<span class="icon-phone-2"></span> 현재위치가 지도에 표시됩니다
					</p>
					<a class="btn" href="https://www.google.com/maps/" target="_blank">지도로 이동하기</a>
					<div class="clear">
					</div>
				</div>
				<div class="grid_8 omega">
					<div id="map" style="width:100%; height:100%;"></div>
                     <script type="text/javascript">

     var map = new google.maps.Map(document.getElementById('map'), {

       zoom: 16,

       center: new google.maps.LatLng(37.566410, 126.948380),

       mapTypeId: google.maps.MapTypeId.ROADMAP

     });
		 var locations = [[ '서울특별시 동대문구 약령중앙로 26',37.580567,127.0375862],[ '서울특별시 동대문구 망우로21길',37.59026,127.0612 ],[ '서울특별시 동대문구 경동시장로',37.58558,127.0404 ] ,[ '서울특별시 동대문구 경동시장로40',37.58242616,127.040656 ],[ '서울특별시 동대문구 장한로34',37.5637529,127.0667254 ] ,[ '서울특별시 동대문구 황물로17길',37.56562,127.0601 ] ,[ '서울특별시 동대문구 청계천로5길',37.5712,127.028 ] ,[ '서울특별시 동대문구 고미술로11',37.5700305,127.0504071 ] ,[ '서울특별시 동대문구 황물로150',37.56640082,127.0546418 ] ,['3.5 서울특별시 동대문구 정릉천동로107',37.58191245,127.0355354 ] ,[ '서울특별시 동대문구 장한로12길18',37.56550691,127.0686919 ] ,[ '서울특별시 동대문구 외대역동로81',37.5955554,127.0649013 ] ,[ '서울특별시 동대문구 휘경로28',37.59503764,127.0626233 ] ,[ '3.875 서울특별시 동대문구 한천로326',37.59003508,127.0695883 ] ,[ '3.625 서울특별시 동대문구 한천로326',37.59003508,127.0695883 ] ,['3.875 서울특별시 성북구 아리랑로 12길 4',37.59915465,127.0147755 ] ,['2.8125 서울특별시 성북구 북악산로 949-60',37.59686775,127.0262391 ] ,[ '서울특별시 성북구 보문로29길 49',37.58660187,127.016032 ] ,[ '서울특별시 성북구 보문로 168',37.5894561,127.0168479 ] ,[ '서울특별시 성북구 동소문로 260',37.60410099,127.0258339 ] ,[ '서울특별시 성북구 장위로13길 9',37.614648,127.0409876 ] ,[ '서울특별시 성북구 돌곶이로32길 43',37.61675603,127.0534345 ] ,[ '서울특별시 성북구 화랑로 213',37.60945075,127.0535606 ] ,[ '서울특별시 성북구 장월로8길 36',37.61033172,127.0498963 ] ,[ '서울특별시 성북구 정릉로23길 56',37.60820115,127.0093728 ] ,[ '서울특별시 성북구 장위로40길 62',37.61110184,127.0524972 ] ,[ '서울특별시 금천구 디지털로11길 8',37.4789635,126.888832402 ] ,[ '서울특별시 금천구 벚꽃로46길 1',37.4829511366,126.882571834 ] ,[ '서울특별시 금천구 벚꽃로278',37.4794157,126.8846349126 ] ,[ '서울특별시 금천구 가산디지털1로 134',37.4779532974,126.8835383725 ] ,[ '서울특별시 금천구 가산디지털1로 52',37.4708003,126.8865518873 ] ,[ '서울특별시 금천구 가산디지털1로 75-14',37.4732288341,126.8839752904 ] ,[ '서울특별시 금천구 서부샛길 418',37.4717235065,126.8815131939 ] ,[ '서울특별시 금천구 가산디지털2로 23',37.470247272,126.8829398875 ] ,[ '서울특별시 금천구 범안로12길 30',37.4651198247,126.8916562531 ] ,[ '서울특별시 금천구 가산디지털1로 230',37.4857125309,126.8796910617 ] ,[ '서울특별시 금천구 가산디지털2로 169-34',37.4833049109,126.8760813845 ] ,[ '서울특별시 금천구 범안로12가길 65',37.4649424781,126.8948170164 ] ,[ '서울특별시 금천구 시흥대로98길 36',37.4638287,126.9000362406 ] ,[ '서울특별시 금천구 독산로108길 44',37.4794373,126.9063512187 ] ,[' 서울특별시 금천구 독산로78다길 9',37.4694056,126.9045053395 ] ,[ '서울특별시 금천구 시흥대로150길 56',37.4763283,126.9018962554 ] ,[ '서울특별시 금천구 독산로107길 13',37.4778527,126.9027670841 ] ,[ '서울특별시 금천구 시흥대로51길 93',37.4507009064,126.8966632881 ] ,[ '서울특별시 금천구 시흥대로28길 35-9',37.4429273136,126.9057097495 ] ,[ '서울특별시 금천구 독산로50마길 6',37.4607426239,126.9109726874 ] ,[ '서울특별시 금천구 독산로36나길 21',37.4593466248,126.9093512555 ] ,['서울특별시 금천구 독산로24마길 30',37.4545890371,126.9090360175 ] ,[ '서울특별시 금천구 시흥대로 153길 53',37.4766319,126.8955783856 ] ,[ '서울특별시 금천구 두산로14길 18',37.469155,126.8948291651 ] ,[ '서울특별시 금천구 범안로17길 53',37.468946,126.8933779543 ] ,[ '서울특별시 금천구 가산로5길 13',37.4734435731,126.8938780983 ] ,[ '서울특별시 금천구 범안로9길 23',37.4677276533,126.8900337435 ] ,[ '서울특별시 금천구 두산로7길 16',37.4711496817,126.8919776452 ] ,[ '서울특별시 금천구 시흥대로139길 15',37.4727833689,126.8972026592 ] ,[ '서울특별시 금천구 가산로3길 92',37.4725321989,126.8904201128 ] ,[ '서울특별시 금천구 가산로7길 77',37.4735728508,126.8894373218 ] ,[ '서울특별시 금천구 벚꽃로24길 26',37.4740567,126.8888125193 ] ,[ '서울특별시 금천구 가산로9길 87',37.4743863034,126.8883101359 ] ,[ '서울특별시 금천구 디지털로12길 21',37.4777395306,126.8898788853 ]
];
     var infowindow = new google.maps.InfoWindow();
     var marker, i;

     for (i = 0; i < locations.length; i++) {
       marker = new google.maps.Marker({
         id:i,
         position: new google.maps.LatLng(locations[i][1], locations[i][2]),
         map: map
       });



       google.maps.event.addListener(marker, 'click', (function(marker, i) {

         return function() {

           infowindow.setContent(locations[i][0]);

           infowindow.open(map, marker);

         }

       })(marker, i));

       if(marker)

       {

         marker.addListener('click', function() {
           map.setZoom(15);
           map.setCenter(this.getPosition());

         });

         }

     }
                     </script>

				</div>
			</div>
			<!---리뷰등록--->
			<div class="content grid_12 contactmap dn" id="contact-car">
				<div class="grid_4">
					<h2>리뷰등록</h2>
					<p class="information">
						<span class="icon-location"> 주차장의 리뷰를 등록해주세요
						<p class="information">
							<span class="icon-phone-2"></span> 당신의 리뷰는 많은사람에게 도움이 됩니다
						</p>
						<br>
						<br>
						<div class="btn">
							<a href="http://city.hitouchsoft.com/">위도 경도 찾기</a>
						</div>
					</div>

					<div class="grid_8 omega">
						<div class="grid_6 omega">
							<form class="form-review" action="새리뷰html_to_db.php" method="POST">
								<section id="main_section">
									<label>주차장 이름</label><input type="text" name="name" placeholder="주차장 이름을 입력해주세요"/>
									<label>주소</label><input type="text" name ="address" placeholder="주소를 입력해주세요"/>
									<label>위도</label><input type="text" name="locationX" placeholder="위도를 입력해주세요"/>
									<label>경도</label><input type="text" name="locationY" placeholder="경도를 입력해주세요"/>
									<br>
									<a>추가 정보를 기입해주세요</a>
									<br>
									<label>주차 가능 대수</label><input type="text" name="amount" placeholder="주차 가능 대수를 입력해주세요"/>
								</section>
							<section id="main_section">
							<strong>주차난이도 </strong>
							<ul class="rate-area">
								<input type="radio" id="5-star" name="rating" value="5"/><label for="5-star" title="Amazing">5 stars</label>
								<input type="radio" id="4-star" name="rating" value="4"/><label for="4-star" title="Good">4 stars</label>
								<input type="radio" id="3-star" name="rating" value="3"/><label for="3-star" title="Average">3 stars</label>
								<input type="radio" id="2-star" name="rating" value="2"/><label for="2-star" title="Not Good">2 stars</label>
								<input type="radio" id="1-star" name="rating" value="1"/><label for="1-star" title="Bad">1 star</label>
							</ul>
							</section>
							<section id="main_section">
							<strong>주차장 위치만족도 </strong>
							<ul class="rate-area">
								<input type="radio" id="5-star2" name="rating2" value="5"/><label for="5-star2" title="Amazing">5 stars</label>
								<input type="radio" id="4-star2" name="rating2" value="4"/><label for="4-star2" title="Good">4 stars</label>
								<input type="radio" id="3-star2" name="rating2" value="3"/><label for="3-star2" title="Average">3 stars</label>
								<input type="radio" id="2-star2" name="rating2" value="2"/><label for="2-star2" title="Not Good">2 stars</label>
								<input type="radio" id="1-star2" name="rating2" value="1"/><label for="1-star2" title="Bad">1 star</label>
							</ul>
							</section>
							<section id="main_section">
							<strong>주차장 청결도 </strong>
							<ul class="rate-area">
								<input type="radio" id="5-star3" name="rating3" value="5"/><label for="5-star3" title="Amazing">5 stars</label>
								<input type="radio" id="4-star3" name="rating3" value="4"/><label for="4-star3" title="Good">4 stars</label>
								<input type="radio" id="3-star3" name="rating3" value="3"/><label for="3-star3" title="Average">3 stars</label>
								<input type="radio" id="2-star3" name="rating3" value="2"/><label for="2-star3" title="Not Good">2 stars</label>
								<input type="radio" id="1-star3" name="rating3" value="1"/><label for="1-star3" title="Bad">1 star</label>
							</ul>
							</section>
							<section id="main_section">
							<strong>주차장 요금만족도</strong>
							<ul class="rate-area">
								<input type="radio" id="5-star4" name="rating4" value="5"/><label for="5-star4" title="Amazing">5 stars</label>
								<input type="radio" id="4-star4" name="rating4" value="4"/><label for="4-star4" title="Good">4 stars</label>
								<input type="radio" id="3-star4" name="rating4" value="3"/><label for="3-star4" title="Average">3 stars</label>
								<input type="radio" id="2-star4" name="rating4" value="2"/><label for="2-star4" title="Not Good">2 stars</label>
								<input type="radio" id="1-star4" name="rating4" value="1"/><label for="1-star4" title="Bad">1 star</label>
							</ul>
							</section>
							<section id="main_section">
							<form style="width: auto;">
								<input name="review" type="text" size=50 placeholder="리뷰를 작성해주세요!" style="width:100%; height: 6rem;">
								<input type="submit" name="btn" value="작성">
							</form>
							</section>
								</form>
						</div>
					</div>

				</div>

				<div class="content grid_12 contactmap dn" id="contact-bus">
					<div class="grid_4">
						<h2>근처 주차장 TOP20</h2>
						<p class="information">
							<span class="icon-location"> 근처에 있는 주차장의
							<p class="information">
								<span class="icon-phone-2">리뷰를 확인해보세요 </span>
							</p>
							<br>
							<br>

						</div>
						<div class="grid_8 omega">
							<div class="grid_6 omega" id="scroll2">
								<form action="search.php" method="post" id="search">
										<img class="mb-4" src="./logo.svg" alt="" width="200" height="200"/>
										<h1 class="h3 mb-3 font-weight-bold">별별주차장</h1>

									 <input type="text" name="plz" placeholder="지역을 입력하세요">
									<input type="submit" value="검색" class="btn" >

								</form>
							</div>
						</div>
					</div>
					<!---로그인--->
					<div class="content grid_12 contactmap dn" id="contact-bike">
						<div class="grid_4">
							<h2>로그인</h2>
							<p class="information">
								<span class="icon-location"> 로그인하세요<br>
								</span>로그인하고 더 많은 혜택을 즐겨보세요!
							</p>
							<br>
							<br>
							<div class="btn">
								<span class="icon-checkmark"></span>회원가입
							</div>
						</div>
						<div class="grid_8 omega">
							<div class="grid_6 omega">
								<div class="wrapper">
									<form class="form-signin" action="signIn.php" method="POST">
										<img class="mb-4" src="./logo.svg" alt="" width="200" height="200"/>
										<h1 class="h3 mb-3 font-weight-bold">별별주차장</h1>
										<br/>
										<input type="text" id="inputText" name="id" class="form-control" placeholder="ID" required autofocus/>
										<input type="password" id="inputPassword" name="pw" class="form-control" placeholder="Password" required/>
										<button class="btn btn-lg btn-primary btn-block" type="submit" value="login">
										로그인 </button>
									</form>
								</div>
							</div>
						</div>
					</div>
					<div class="content grid_12 contactmap dn" id="contact-phone">
						<div class="grid_4">
							<h2>회원가입</h2>
							<p class="information">
								<span class="icon-location"> 별별주차장</span>의 회원이 되어보세요!
							</p>
						</div>
						<div class="grid_8 omega">
							<div class="col-lg-8 col-sm-10 center-block container">
								<form id="register-form" action="signup.php" method="post">
									<div class="col-lg-8 col-sm-10 center-block">
										<label>아이디</label><span class="status" id="username-status"></span>
										<input type="text" name="username" placeholder="아이디를 입력하세요" data-validation="req len:3-15 regex:username">
										<div class="col-xs-12 no-padding">
											<div class="row">
												<div class="col-xs-12">
													<label>성별</label><span class="status" id="gender-status"></span>
												</div>
												<div class="col-xs-4 radio-buttons">
													<label>여성</label>
													<input type="radio" name="gender" value="female" data-validation="radio:gender">
												</div>
												<div class="col-xs-4 radio-buttons">
													<label>남성</label>
													<input type="radio" name="gender" value="male" data-validation="radio:gender">
												</div>
												<div class="col-xs-4 radio-buttons">
													<label>체크안함</label>
													<input type="radio" name="gender" value="other" data-validation="radio:gender">
												</div>
											</div>
										</div>
										<label>이메일</label><span class="status" id="email-status"></span>
										<input type="email" name="email" placeholder="이메일을 입력하세요" data-validation="len:0-50 regex:email or:phone:Phone">
										<label>나이</label><span class="status" id="phone-status"></span>
										<input type="tel" name="phone" placeholder="나이를 입력하세요" data-validation="len:0-15 regex:phone or:email:Email"/>
										<label>비밀번호</label><span class="status" id="password-status"></span>
										<input type="password" name="password" placeholder="비밀번호를 입력하세요" data-validation="req len:8-25">
										<label>비밀번호 확인</label><span class="status" id="confirmpassword-status"></span>
										<input type="password" name="confirmpassword" placeholder="비밀번호를 다시 입력하세요" data-validation="req len:8-25 match:password">
										<button class="submit" type="submit" id="register-submit">제출하기</button>
									</div>
								</form>
							</div>
						</div>
					</div>
					<div class="content grid_12 contactmap dn" id="contact-mail">
						<div class="grid_4">
							<h2>E-MAIL</h2>
							<p class="information">
								<span class="icon-location"> ADRESS: </span>star.parking@gmail.com
							</p>
						</div>
						<div class="grid_8 omega">
							<div style="padding: 1rem 5rem 1rem 5rem; display:flex; flex-direction:column;">
								<p style="padding-left:0; font-size:large; font-weight: bold; color:black;">
									Contact us!
								</p>
								<p style="padding-left:0; font-size:large; font-weight: bold; color:black;">
									문의 사항은 아래 이메일 주소로 연락주세요.
								</p>

								<div class="grid_6 omega">
									<a href="mailto:star.parking@gmail.com?Subject=Hello" class="btn">star.parking@gmail.com</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="clear">
				</div>
				<footer class="content grid_12">
				<div class="btn2">
					&copy; Copyright 별별주차장
				</div>
				<hr/>
				</footer>
				<div class="clear">
				</div>
			</div>
				</body>
		<script src="./FormValidation.js"></script>
		<script>
				FormValidation(document.getElementById("register-form"));
		</script>
</html>
