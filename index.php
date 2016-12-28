<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>매드포갈릭</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/swiper.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script type="text/javascript" src="js/modernizr-custom.js"></script>
	<script type="text/javascript" src="js/effect.js"></script>
</head>
<body>
<?php
	include 'inc/header.php'
?>
	</div>
	<div id="visual">
			<h2>주요 이벤트</h2>
			<div class="swiper-container">
			<ul class="swiper-wrapper">
			<li class="swiper-slide"><a href="#"><img src="images/event_bg.jpg" alt="만추 가을에 가득함을 더하다"></a></li>
			<li class="swiper-slide"><a href="#"><img src="images/event_bg.jpg" alt="만추 가을에 가득함을 더하다"></a></li>
			<li class="swiper-slide"><a href="#"><img src="images/event_bg.jpg" alt="만추 가을에 가득함을 더하다"></a></li>
			</ul>
			<div class="swiper-pagination swiper-pagination-white"></div>
		    <div class="swiper-button-prev swiper-button-white">왼쪽으로 이동</div>
		    <div class="swiper-button-next swiper-button-white">오른쪽으로 이동</div>	
			</div>
		</div>
	<main id="content">
		<section class="section1">
		<article class="rcm">
		<h2>RECOMMEND MENU<h2>
		<ul class="recommend">
			<li class="steak">
				<h3>스테이크</h3>
				<p class="con_img">
					<span class="zoom"><img src="images/garlic_steak.png" alt=""></span>
				</p>
				<p class="inner">
				<span class="name">GARLIC STEAK</span>
				<a href="#" class="link">자세히 보기</a>
				</p>
			</li>
		<li class="pasta">
			<h3>파스타</h3>
			<p class="con_img">
				<span class="zoom"><img src="images/garlic_pasta.png" alt=""></span>
			</p>
			<p class="inner">
			<span class="name">GARLAPINO PASTA</span>
			<a href="#" class="link">자세히 보기</a>
			</p>
		</li>
		<li class="starter">
			<h3>전채요리</h3>
			<p class="con_img">
				<span class="zoom"><img src="images/caesar_salad.png" alt=""></span>
			</p>
			<p class="inner">
			<span class="name">CAESAR SALAD</span>
			<a href="#" class="link">자세히 보기</a>
			</p>
		</li>
		<li class="pizza">
			<h3>피자</h3>
			<p class="con_img">
				<span class="zoom"><img src="images/garlic_pizza.png" alt=""></span>
			</p>
			<p class="inner">
			<span class="name">GARLIC SNOWING PIZZA</span>
			<a href="#" class="link">자세히 보기</a>
			</p>
		</li>
		</ul>
		</article>

		<article class="event">
		<h2>EVENT</h2>	
		<ul class="event_list">
			<li class="event1"> 
				<h3>멤버십 안내</h3>
				<p class="con_img">
				<span class="zoom"><img src="images/event1.jpg" alt=""></span>
				</p>
				<p class="inner">
				<span class="name">눈꽃 설레임</span>
				<a href="#" class="link">자세히 보기</a>
			</p>
			</li>
			<li class="event2">
				<h3>멤버십 혜택</h3>
				<p class="con_img">
				<span class="zoom"><img src="images/event2.jpg" alt=""></span>
				</p>
				<p class="inner">
				<span class="name">만추</span>
				<a href="#" class="link">자세히 보기</a>
			</li>
		</ul>
		</article>

		<article class="membership">
		<h2>MEMBERSHIP</h2>	
		<ul class="membership">
			<li class="rwd"> 
				<h3>멤버십 안내</h3>
				<p class="con_img">
				<span class="zoom"><img src="images/rwd_img.jpg" alt=""></span>
				</p>
				<p class="inner">
				<span class="name">REWARDS</span>
				<a href="#" class="link">자세히 보기</a>
			</p>
			</li>
			<li class="bnf">
				<h3>멤버십 혜택</h3>
				<p class="con_img">
				<span class="zoom"><img src="images/barrel_bg.jpg" alt=""></span>
				</p>
				<p class="inner">
				<span class="name">BENEFIT</span>
				<a href="#" class="link">자세히 보기</a>
			</li>
		</ul>
		</article>

		<article class="introduce">
		<h2>INTRODUCE</h2>	
		<ul class="intro">
			<li class="locate"> 
				<h3>매장안내</h3>
				<p class="con_img">
				<span class="zoom"><img src="images/inner.jpg" alt=""></span>
				</p>
				<p class="inner">
				<span class="name">LOCATE</span>
				<a href="#" class="link">자세히 보기</a>
			</p>
			</li>
			<li class="mfg_intro">
				<h3></h3>
				<p class="con_img">
				<span class="zoom"><img src="images/Garlic_UHD.jpg" alt=""></span>
				</p>
				<p class="inner">
				<span class="name">MFG BRAND</span>
				<a href="#" class="link">자세히 보기</a>
			</li>
		</ul>
		</article>
		</section>
	</main>
<?php
	include 'inc/footer.php';
?>
	<script src="js/swiper.min.js"></script>
    <script>
    var swiper = new Swiper('.swiper-container', {
        pagination: '.swiper-pagination',
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
        paginationClickable: true,
        spaceBetween: 30,
        centeredSlides: true,
        autoplay: 4000,
        autoplayDisableOnInteraction: false,
        loop: true
    });
    </script>
</body>
</html>